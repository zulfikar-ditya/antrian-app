<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "antrian_poli".
 *
 * @property int $id
 * @property string|null $urutan
 * @property string|null $tgl_antrian
 * @property int $pasien_id
 * @property int $poli_id
 * @property string|null $perkiraan_waktu
 * @property int|null $status
 *
 * @property Poli $poli
 */
class AntrianPoli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antrian_poli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_antrian', 'perkiraan_waktu'], 'safe'],
            [['pasien_id', 'poli_id'], 'required'],
            [['pasien_id', 'poli_id', 'status'], 'integer'],
            [['urutan'], 'string', 'max' => 255],
            [['poli_id'], 'exist', 'skipOnError' => true, 'targetClass' => Poli::className(), 'targetAttribute' => ['poli_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'urutan' => 'Urutan',
            'tgl_antrian' => 'Tgl Antrian',
            'pasien_id' => 'Pasien ID',
            'poli_id' => 'Poli ID',
            'perkiraan_waktu' => 'Perkiraan Waktu',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Poli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPoli()
    {
        return $this->hasOne(Poli::className(), ['id' => 'poli_id']);
    }

    public function getSetUrutanTerakhir($date, $poli_id)
    {
        $data = AntrianPoli::find()->where([
            'tgl_antrian' => $date,
            'poli_id' => $poli_id
        ])->orderBy(['id' => SORT_DESC])->one();
        try {
            $urutanTerakhir = $data->urutan;
        } catch (\Exception $e)  {
            $urutanTerakhir = 0;
        }
        return $urutanTerakhir += 1;
    }
}
