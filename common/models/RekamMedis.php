<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rekam_medis".
 *
 * @property int $id
 * @property string|null $tgl_periksa
 * @property int $pasien_id
 * @property string|null $anamnesa
 * @property string|null $diagnosa
 * @property string|null $terapi
 * @property string|null $askep
 * @property string|null $kie
 *
 * @property Pasien $pasien
 */
class RekamMedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekam_medis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_periksa'], 'safe'],
            [['pasien_id'], 'required'],
            [['pasien_id'], 'integer'],
            [['anamnesa'], 'string', 'max' => 100],
            [['diagnosa'], 'string', 'max' => 255],
            [['terapi', 'askep', 'kie'], 'string', 'max' => 50],
            [['pasien_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::className(), 'targetAttribute' => ['pasien_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tgl_periksa' => 'Tgl Periksa',
            'pasien_id' => 'Pasien ID',
            'anamnesa' => 'Anamnesa',
            'diagnosa' => 'Diagnosa',
            'terapi' => 'Terapi',
            'askep' => 'Askep',
            'kie' => 'Kie',
        ];
    }

    /**
     * Gets query for [[Pasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasien()
    {
        return $this->hasOne(Pasien::className(), ['id' => 'pasien_id']);
    }
}
