<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Cms;

/**
 * CmsSearch represents the model behind the search form about `backend\models\Cms`.
 */
class CmsSearch extends Cms
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pkCmsID'], 'integer'],
            [['cmsDisplayTitle', 'cmsPageTitle', 'cmsSlug', 'cmsContent', 'cmsMetaTitle', 'cmsMetaKeywords', 'cmsMetaDescription', 'cmsStatus', 'cmsDateAdded', 'cmsDateModified'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Cms::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'pkCmsID' => $this->pkCmsID,
            'cmsDateAdded' => $this->cmsDateAdded,
            'cmsDateModified' => $this->cmsDateModified,
        ]);

        $query->andFilterWhere(['like', 'cmsDisplayTitle', $this->cmsDisplayTitle])
            ->andFilterWhere(['like', 'cmsPageTitle', $this->cmsPageTitle])
            ->andFilterWhere(['like', 'cmsSlug', $this->cmsSlug])
            ->andFilterWhere(['like', 'cmsContent', $this->cmsContent])
            ->andFilterWhere(['like', 'cmsMetaTitle', $this->cmsMetaTitle])
            ->andFilterWhere(['like', 'cmsMetaKeywords', $this->cmsMetaKeywords])
            ->andFilterWhere(['like', 'cmsMetaDescription', $this->cmsMetaDescription])
            ->andFilterWhere(['like', 'cmsStatus', $this->cmsStatus]);

        return $dataProvider;


    }
}
