<?php
namespace backend\models;

use Yii;
use app\models\Admin;
use yii\base\Model;
use yii\base\InvalidParamException;


/**
 * Password reset form
 */
class ResetPasswordForm extends Model
{
    public $password;
   public $confirm_password;

    /**
     * @var app\models\Admin
     */
    private $_user;

    /**
     * Creates a form model given a token.
     *
     * @param  string                          $token
     * @param  array                           $config name-value pairs that will be used to initialize the object properties
     * @throws \yii\base\InvalidParamException if token is empty or not valid
     */
    public function __construct($token, $config = [])
    {
        if (empty($token) || !is_string($token)) {
            throw new InvalidParamException('Password reset token cannot be blank.');
        }
        $this->_user = Admin::findByPasswordResetToken($token);
        if (!$this->_user) {
            throw new InvalidParamException('Wrong password reset token.');
        }
        parent::__construct($config);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
         return [
             
             [['password', 'confirm_password'], 'required', 'on' => 'reset'],
            [['password'], 'string', 'min' => 6, 'on' => 'reset'],
             
            
            [['confirm_password'], 'compare', 'compareAttribute' => 'password', 'message' => 'New password and confirm passwords fields does not match.', 'on' => 'reset'],
             [['password', 'confirm_password'], 'safe'],
           
        ];
    }
    
   

    /**
     * Resets password.
     *
     * @return boolean if password was reset.
     */
    public function resetPassword()
    {
        
        $user = $this->_user;
        $user->password = $user->setPassword($this->password);
       
        $user->removePasswordResetToken();
        return $user->save();
    }
}
