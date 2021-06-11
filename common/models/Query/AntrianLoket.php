<?php

namespace common\models\Query;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AntrianLoket as AntrianLoketModel;

/**
 * AntrianLoket represents the model behind the search form of `common\models\AntrianLoket`.
 */
class AntrianLoket extends AntrianLoketModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pasien_id', 'poli_id', 'status'], 'integer'],
            [['urutan', 'tgl_antrian', 'perkiraan_waktu'], 'safe'],
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
        $query = AntrianLoketModel::find();

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
            'id' => $this->id,
            'tgl_antrian' => $this->tgl_antrian,
            'pasien_id' => $this->pasien_id,
            'poli_id' => $this->poli_id,
            'perkiraan_waktu' => $this->perkiraan_waktu,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'urutan', $this->urutan]);

        return $dataProvider;
    }
}
