<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\penjualan;

/**
 * PenjualanSearch represents the model behind the search form of `common\models\penjualan`.
 */
class PenjualanSearch extends penjualan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penjualan', 'harga', 'bayar', 'kembalian', 'metode'], 'integer'],
            [['created_at', 'time_at', 'nama_produk'], 'safe'],
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
        $query = penjualan::find();

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
            'id_penjualan' => $this->id_penjualan,
            'created_at' => $this->created_at,
            'time_at' => $this->time_at,
            'harga' => $this->harga,
            'bayar' => $this->bayar,
            'kembalian' => $this->kembalian,
            'metode' => $this->metode,
        ]);

        $query->andFilterWhere(['like', 'nama_produk', $this->nama_produk]);

        return $dataProvider;
    }
}
