<?php
namespace backend\models;

use Yii;
use app\models\Admin;
use yii\base\Model;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\swiftmailer\Message;

/**
 * Password reset request form
 */
class PasswordResetRequestForm extends Model
{
    public $email;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'exist',
                'targetClass' => 'app\models\Admin',
                'filter' => ['status' => Admin::STATUS_ACTIVE],
                'message' => 'There is no user with such email.'
            ],
        ];
    }

    /**
     * Sends an email with a link, for resetting the password.
     *
     * @return boolean whether the email was send
     */
    public function sendEmail()
    {
       
        /* @var $user tbl_admin */
        $user = Admin::findOne([
            'status' => Admin::STATUS_ACTIVE,
            'email' => $this->email,
        ]);
       

        if ($user) {
            if (!Admin::isPasswordResetTokenValid($user->password_reset_token)) {
                $user->generatePasswordResetToken();
            }

            if ($user->save()) {  
            return \Yii::$app->mail->compose()
                ->setFrom([\Yii::$app->params['adminEmail'] => 'MVNO'])
                ->setTo($this->email)
                ->setSubject('Password reset for MVNO::Admin')
                ->setTextBody($resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]))
                ->send();
            
            
            
            }
          }

        return false;
    }
}
