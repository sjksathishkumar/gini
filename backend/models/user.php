<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $role
 * @property integer $status
 * @property string $delivery_address1
 * @property string $delivery_address2
 * @property string $suburb
 * @property string $city
 * @property integer $post_code
 * @property integer $contact_number
 * @property string $created_at
 * @property string $updated_at
 */
class user extends \yii\db\ActiveRecord
{
   // public $confirm_email;
    public $password;
   public $confirm_password;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name',  'delivery_address1', 'suburb', 'city', 'post_code','email','confirm_email','contact_number','dob','gender',], 'required'],
            [['password','confirm_password'], 'required','on' => 'usersignup'],
            
            [['status', 'post_code'], 'integer'],
            [['first_name','last_name'], 'match', 'pattern'=>'/[a-zA-Z]+$/s', 'message' => 'Must contains only letters.'],
            ['email', 'email'],
            ['email', 'unique',  'message' => 'This email address has already been taken.'],
            [['confirm_email'], 'compare', 'compareAttribute' => 'email', 'message' => 'Confirm email must be exactly repeat email.'],
      
        ['password', 'string', 'min' => 6],
        ['confirm_password','safe'],
            [['confirm_password'], 'compare', 'compareAttribute' => 'password', 'message' => 'Confirm Password must be exactly repeat password.'],
            
            [['created_at', 'updated_at','verifyemail'], 'safe'],
            [['first_name', 'last_name',  'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['delivery_address1', 'delivery_address2'], 'string', 'max' => 200],
            [['suburb', 'city'], 'string', 'max' => 100],
            [['contact_number'], 'string', 'max' => 15],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
           
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
         
            'status' => 'Status',
            'delivery_address1' => 'Delivery Address1',
            'delivery_address2' => 'Delivery Address2',
            'suburb' => 'Suburb',
            'city' => 'City',
            'post_code' => 'Post Code',
            'contact_number' => 'Contact Number',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    
    /*
        * take action based on status given by user
        */
    
        public function actionTaken($argArrData){
            
            $varEcho = "";
            if($argArrData){
                $varEcho = ($argArrData['status']=='1') ? 'Active' : ($argArrData['status']=='0') ? "Inactive" : "Deleted";
                 User::findOne($argArrData['data'])->delete();
                 echo $varEcho;
            }
        }
        
}
