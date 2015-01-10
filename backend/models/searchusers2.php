<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\user;

/**
 * searchusers represents the model behind the search form about `app\models\user`.
 */
class searchusers extends user
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            [['first_name', 'last_name', 'username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'contact_number', 'delivery_address1', 'delivery_address2', 'suburb', 'city', 'created_at', 'updated_at'], 'safe'],
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
        $query = user::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            
            'status' => $this->status,
            'post_code' => $this->post_code,
           
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->orFilterWhere(['like', 'last_name', $this->first_name])
           
            ->andFilterWhere(['like', 'email', $this->email])
             ->andFilterWhere(['like', 'contact_number', $this->contact_number])
            ->andFilterWhere(['like', 'delivery_address1', $this->delivery_address1])
            ->andFilterWhere(['like', 'delivery_address2', $this->delivery_address2])
            ->andFilterWhere(['like', 'suburb', $this->suburb])
            ->andFilterWhere(['like', 'city', $this->city]);

        return $dataProvider;
    }
}
