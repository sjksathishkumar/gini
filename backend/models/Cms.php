<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_cms".
 *
 * @property integer $pkCmsID
 * @property string $cmsDisplayTitle
 * @property string $cmsPageTitle
 * @property string $cmsSlug
 * @property string $cmsContent
 * @property string $cmsMetaTitle
 * @property string $cmsMetaKeywords
 * @property string $cmsMetaDescription
 * @property string $cmsContentAvailable
 * @property string $cmsBannerAvailable
 * @property string $cmsIsPage
 * @property string $cmsStatus
 * @property string $cmsDateAdded
 * @property string $cmsDateModified
 */
class Cms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_cms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cmsDisplayTitle', 'cmsPageTitle', 'cmsSlug', 'cmsContent', 'cmsMetaTitle', 'cmsMetaKeywords', 'cmsMetaDescription', 'cmsContentAvailable', 'cmsBannerAvailable', 'cmsIsPage', 'cmsStatus', 'cmsDateAdded'], 'required'],
            [['cmsContent', 'cmsMetaKeywords', 'cmsMetaDescription', 'cmsContentAvailable', 'cmsBannerAvailable', 'cmsIsPage', 'cmsStatus'], 'string'],
            [['cmsDateAdded', 'cmsDateModified'], 'safe'],
            [['cmsDisplayTitle', 'cmsPageTitle', 'cmsSlug', 'cmsMetaTitle'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pkCmsID' => 'Pk Cms ID',
            'cmsDisplayTitle' => 'Cms Display Title',
            'cmsPageTitle' => 'Cms Page Title',
            'cmsSlug' => 'Cms Slug',
            'cmsContent' => 'Cms Content',
            'cmsMetaTitle' => 'Cms Meta Title',
            'cmsMetaKeywords' => 'Cms Meta Keywords',
            'cmsMetaDescription' => 'Cms Meta Description',
            'cmsContentAvailable' => '\'0\'=>No, \'1\'=>Yes',
            'cmsBannerAvailable' => '\'0\'=>No, \'1\'=>Yes',
            'cmsIsPage' => 'Cms Is Page',
            'cmsStatus' => '0=Inactive | 1=Active',
            'cmsDateAdded' => 'Cms Date Added',
            'cmsDateModified' => 'Cms Date Modified',
        ];
    }
}
