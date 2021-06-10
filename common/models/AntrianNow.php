<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "antrian_now".
 *
 * @property int $id
 * @property string|null $tgl
 * @property int|null $loket_pendaftaran
 * @property int|null $poli_umun
 * @property int|null $poli_gigi
 * @property int|null $poli_kusta
 * @property int|null $poli_kandungan
 * @property int|null $poli_kb
 * @property int|null $poli_mtbs
 * @property int|null $poli_jiwa
 * @property int|null $poli_lansia
 * @property int|null $imunisasi
 * @property int|null $labolatorium
 * @property int|null $pojok_gizi
 * @property int|null $klinik_sanitasi
 */
class AntrianNow extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antrian_now';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl'], 'safe'],
            [['loket_pendaftaran', 'poli_umun', 'poli_gigi', 'poli_kusta', 'poli_kandungan', 'poli_kb', 'poli_mtbs', 'poli_jiwa', 'poli_lansia', 'imunisasi', 'labolatorium', 'pojok_gizi', 'klinik_sanitasi'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tgl' => 'Tgl',
            'loket_pendaftaran' => 'Loket Pendaftaran',
            'poli_umun' => 'Poli Umun',
            'poli_gigi' => 'Poli Gigi',
            'poli_kusta' => 'Poli Kusta',
            'poli_kandungan' => 'Poli Kandungan',
            'poli_kb' => 'Poli Kb',
            'poli_mtbs' => 'Poli Mtbs',
            'poli_jiwa' => 'Poli Jiwa',
            'poli_lansia' => 'Poli Lansia',
            'imunisasi' => 'Imunisasi',
            'labolatorium' => 'Labolatorium',
            'pojok_gizi' => 'Pojok Gizi',
            'klinik_sanitasi' => 'Klinik Sanitasi',
        ];
    }
}
