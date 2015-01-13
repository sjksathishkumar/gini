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
            [['cmsDisplayTitle', 'cmsPageTitle', 'cmsSlug', 'cmsContent', 'cmsMetaTitle', 'cmsMetaKeywords', 'cmsMetaDescription', 'cmsStatus'], 'required'],
            [['cmsContent', 'cmsMetaKeywords', 'cmsMetaDescription', 'cmsStatus'], 'string'],
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
            'pkCmsID' => 'CMS ID',
            'cmsDisplayTitle' => 'Display Title',
            'cmsPageTitle' => 'Title',
            'cmsSlug' => 'Slug',
            'cmsContent' => 'Content',
            'cmsMetaTitle' => 'Meta Title',
            'cmsMetaKeywords' => 'Meta Keywords',
            'cmsMetaDescription' => 'Meta Description',
            'cmsStatus' => 'Status',
            'cmsDateModified' => 'Date Modified',
        ];
    }
}
