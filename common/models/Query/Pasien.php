<?php

namespace common\models\Query;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Pasien as PasienModel;

/**
 * Pasien represents the model behind the search form of `common\models\Pasien`.
 */
class Pasien extends PasienModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'jenis_pasien_id', 'no_bpjs', 'jenis_kelamin', 'pendidikan_id', 'agama_id', 'status_pernikahan', 'telepon'], 'integer'],
            [['nama', 'tgl_lahir', 'alamat', 'pekerjaan', 'tgl_masuk', 'tgl_akhir', 'token'], 'safe'],
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
        $query = PasienModel::find();

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
            'jenis_pasien_id' => $this->jenis_pasien_id,
            'no_bpjs' => $this->no_bpjs,
            'tgl_lahir' => $this->tgl_lahir,
            'jenis_kelamin' => $this->jenis_kelamin,
            'pendidikan_id' => $this->pendidikan_id,
            'agama_id' => $this->agama_id,
            'status_pernikahan' => $this->status_pernikahan,
            'telepon' => $this->telepon,
            'tgl_masuk' => $this->tgl_masuk,
            'tgl_akhir' => $this->tgl_akhir,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'token', $this->token]);

        return $dataProvider;
    }
}
