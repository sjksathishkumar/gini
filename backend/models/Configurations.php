<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_configurations".
 *
 * @property integer $pkConfigurationID
 * @property string $configurationContact
 * @property string $configurationEmail
 * @property string $configurationSocialLink1
 * @property string $configurationSocialLink2
 * @property string $configurationSocialLink3
 * @property string $configurationSocialLink4
 * @property string $configurationSocialLink5
 * @property string $configurationSocialLink6
 * @property integer $configurationPageLimit
 * @property string $configurationFreeShippingOver
 * @property string $configurationDateModified
 */
class Configurations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_configurations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['configurationContact', 'configurationEmail', 'configurationSocialLink1', 'configurationSocialLink2', 'configurationSocialLink3', 'configurationSocialLink4', 'configurationSocialLink5', 'configurationSocialLink6', 'configurationPageLimit', 'configurationFreeShippingOver'], 'required'],
            [['configurationPageLimit'], 'integer'],
            [['configurationFreeShippingOver'], 'number'],
            [['configurationDateModified'], 'safe'],
            [['configurationContact'], 'string', 'max' => 30],
            [['configurationEmail', 'configurationSocialLink1', 'configurationSocialLink2', 'configurationSocialLink3', 'configurationSocialLink4', 'configurationSocialLink5', 'configurationSocialLink6'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pkConfigurationID' => 'Pk Configuration ID',
            'configurationContact' => 'Configuration Contact',
            'configurationEmail' => 'Configuration Email',
            'configurationSocialLink1' => 'Facebook Link',
            'configurationSocialLink2' => 'Twitter Link',
            'configurationSocialLink3' => 'Linkedin Link',
            'configurationSocialLink4' => 'Google+ Link',
            'configurationSocialLink5' => 'Pinterest Link',
            'configurationSocialLink6' => 'Skype Link',
            'configurationPageLimit' => 'Admin Paging Limit',
            'configurationFreeShippingOver' => '\'Free shipping over given order price\'',
            'configurationDateModified' => 'Configuration Date Modified',
        ];
    }
}
