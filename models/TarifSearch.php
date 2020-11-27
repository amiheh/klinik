<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tarif;

/**
 * TarifSearch represents the model behind the search form of `app\models\Tarif`.
 */
class TarifSearch extends Tarif
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tarif', 'tarif_dokter', 'tarif_asisten', 'tarif_klinik', 'tarif_bhp', 'total_tarif'], 'integer'],
            [['nama_tarif'], 'safe'],
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
        $query = Tarif::find();

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
            'id_tarif' => $this->id_tarif,
            'tarif_dokter' => $this->tarif_dokter,
            'tarif_asisten' => $this->tarif_asisten,
            'tarif_klinik' => $this->tarif_klinik,
            'tarif_bhp' => $this->tarif_bhp,
            'total_tarif' => $this->total_tarif,
        ]);

        $query->andFilterWhere(['like', 'nama_tarif', $this->nama_tarif]);

        return $dataProvider;
    }
}
