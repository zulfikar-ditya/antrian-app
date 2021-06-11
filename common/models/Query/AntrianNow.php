<?php

namespace common\models\Query;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AntrianNow as AntrianNowModel;

/**
 * AntrianNow represents the model behind the search form of `common\models\AntrianNow`.
 */
class AntrianNow extends AntrianNowModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'loket_pendaftaran', 'poli_umun', 'poli_gigi', 'poli_kusta', 'poli_kandungan', 'poli_kb', 'poli_mtbs', 'poli_jiwa', 'poli_lansia', 'imunisasi', 'labolatorium', 'pojok_gizi', 'klinik_sanitasi'], 'integer'],
            [['tgl'], 'safe'],
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
        $query = AntrianNowModel::find();

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
            'tgl' => $this->tgl,
            'loket_pendaftaran' => $this->loket_pendaftaran,
            'poli_umun' => $this->poli_umun,
            'poli_gigi' => $this->poli_gigi,
            'poli_kusta' => $this->poli_kusta,
            'poli_kandungan' => $this->poli_kandungan,
            'poli_kb' => $this->poli_kb,
            'poli_mtbs' => $this->poli_mtbs,
            'poli_jiwa' => $this->poli_jiwa,
            'poli_lansia' => $this->poli_lansia,
            'imunisasi' => $this->imunisasi,
            'labolatorium' => $this->labolatorium,
            'pojok_gizi' => $this->pojok_gizi,
            'klinik_sanitasi' => $this->klinik_sanitasi,
        ]);

        return $dataProvider;
    }
}
