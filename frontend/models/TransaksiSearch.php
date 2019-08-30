<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Transaksi;

/**
 * TransaksiSearch represents the model behind the search form of `frontend\models\Transaksi`.
 */
class TransaksiSearch extends Transaksi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transaksi_id'], 'integer'],
            [['transaksi_nama', 'transaksi_jumlah'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Transaksi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'transaksi_id' => $this->transaksi_id,
        ]);

        $query->andFilterWhere(['like', 'transaksi_nama', $this->transaksi_nama])
            ->andFilterWhere(['like', 'transaksi_jumlah', $this->transaksi_jumlah])
            ->andFilterWhere(['like', 'transaksi_harga', $this->transaksi_harga]);

        return $dataProvider;
    }
}
