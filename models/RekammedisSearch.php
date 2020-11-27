<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rekammedis;

/**
 * RekammedisSearch represents the model behind the search form of `app\models\Rekammedis`.
 */
class RekammedisSearch extends Rekammedis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_rkmd', 'id_pasien', 'id_dokter'], 'integer'],
            [['tgl_rkmd', 'keluhan', 'tindakan', 'saran'], 'safe'],
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
        $query = Rekammedis::find();

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
            'id_rkmd' => $this->id_rkmd,
            'id_pasien' => $this->id_pasien,
            'tgl_rkmd' => $this->tgl_rkmd,
            'id_dokter' => $this->id_dokter,
            'status' => 0,
        ]);

        $query->andFilterWhere(['like', 'keluhan', $this->keluhan])
            ->andFilterWhere(['like', 'tindakan', $this->tindakan])
            ->andFilterWhere(['like', 'saran', $this->saran]);

        return $dataProvider;
    }
    public function search_kasir($params)
    {
        $query = Rekammedis::find();

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
            'id_rkmd' => $this->id_rkmd,
            'id_pasien' => $this->id_pasien,
            'tgl_rkmd' => $this->tgl_rkmd,
            'id_dokter' => $this->id_dokter,
            'status' => 1,
        ]);

        $query->andFilterWhere(['like', 'keluhan', $this->keluhan])
            ->andFilterWhere(['like', 'tindakan', $this->tindakan])
            ->andFilterWhere(['like', 'saran', $this->saran]);

        return $dataProvider;
    }
}
