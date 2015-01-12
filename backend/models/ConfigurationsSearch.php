<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Configurations;

/**
 * ConfigurationsSearch represents the model behind the search form about `backend\models\Configurations`.
 */
class ConfigurationsSearch extends Configurations
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pkConfigurationID', 'configurationPageLimit'], 'integer'],
            [['configurationContact', 'configurationEmail', 'configurationSocialLink1', 'configurationSocialLink2', 'configurationSocialLink3', 'configurationSocialLink4', 'configurationSocialLink5', 'configurationSocialLink6', 'configurationDateModified'], 'safe'],
            [['configurationFreeShippingOver'], 'number'],
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
        $query = Configurations::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'pkConfigurationID' => $this->pkConfigurationID,
            'configurationPageLimit' => $this->configurationPageLimit,
            'configurationFreeShippingOver' => $this->configurationFreeShippingOver,
            'configurationDateModified' => $this->configurationDateModified,
        ]);

        $query->andFilterWhere(['like', 'configurationContact', $this->configurationContact])
            ->andFilterWhere(['like', 'configurationEmail', $this->configurationEmail])
            ->andFilterWhere(['like', 'configurationSocialLink1', $this->configurationSocialLink1])
            ->andFilterWhere(['like', 'configurationSocialLink2', $this->configurationSocialLink2])
            ->andFilterWhere(['like', 'configurationSocialLink3', $this->configurationSocialLink3])
            ->andFilterWhere(['like', 'configurationSocialLink4', $this->configurationSocialLink4])
            ->andFilterWhere(['like', 'configurationSocialLink5', $this->configurationSocialLink5])
            ->andFilterWhere(['like', 'configurationSocialLink6', $this->configurationSocialLink6]);

        return $dataProvider;
    }
}
