<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pasien;

/**
 * PasienSearch represents the model behind the search form of `app\models\Pasien`.
 */
class PasienSearch extends Pasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'usia_pasien'], 'integer'],
            [['nama_pasien', 'tmptlahir_pasien', 'tgllahir_pasien', 'alamat_pasien', 'telepon_pasien', 'pekerjaan_pasien'], 'safe'],
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
        $query = Pasien::find();

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
            'id_pasien' => $this->id_pasien,
            'tgllahir_pasien' => $this->tgllahir_pasien,
            'usia_pasien' => $this->usia_pasien,
        ]);

        $query->andFilterWhere(['like', 'nama_pasien', $this->nama_pasien])
            ->andFilterWhere(['like', 'tmptlahir_pasien', $this->tmptlahir_pasien])
            ->andFilterWhere(['like', 'alamat_pasien', $this->alamat_pasien])
            ->andFilterWhere(['like', 'telepon_pasien', $this->telepon_pasien])
            ->andFilterWhere(['like', 'pekerjaan_pasien', $this->pekerjaan_pasien]);

        return $dataProvider;
    }
    
    public function search_antri($params)
    {
        $query = Pasien::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        $this->load($params);

        // grid filtering conditions
        $query->andFilterWhere([
            'status' => 0
        ]);

        return $dataProvider;
    }
    
    public function search_accept($params)
    {
        $query = Pasien::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        $this->load($params);

        // grid filtering conditions
        $query->andFilterWhere([
            'status' => 1
        ]);

        return $dataProvider;
    }
}
