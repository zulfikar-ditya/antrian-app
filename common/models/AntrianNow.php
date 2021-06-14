<?php

namespace common\models;

use Yii;
use yii\web\NotFoundHttpException;

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
    public $column_database = [
            'loket_pendaftaran' => 1, 
            'poli_umun' => 2, 
            'poli_gigi' => 3, 
            'poli_kusta' => 4, 
            'poli_kandungan' => 5, 
            'poli_kb' => 6, 
            'poli_mtbs' => 7, 
            'poli_jiwa' => 8, 
            'poli_lansia' => 9, 
            'imunisasi' => 10, 
            'labolatorium' => 11, 
            'pojok_gizi' => 12, 
            'klinik_sanitasi' => 13, 
        ];
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

    public function ColToPoliId($col)
    {
        try{
            return $this->column_database[$col];
        } catch (NotFoundHttpException $e) {
            throw new NotFoundHttpException('Kolom tidak ditemukan');
        }
    }

    public function getPoli($id) {
        $data = Poli::findOne($id);
        if ($data == null) throw new NotFoundHttpException('Data Not Found.');
        return $data;
    }

    public function getData()
    {
        return AntrianNow::find()->where(['tgl' => Date('Y-m-d')])->one();
    }

    public function getAntrianNowUntukHariIni()
    {
        $data = $this->getData();
        if ($data == null ) {
            $data = new AntrianNow();
            $data->tgl = Date('Y-m-d');
            $data->save();
        }
        $this->setAntrianNowHariIni($data);
        return $data;
    }

    public function setAntrianNowHariIni($data)
    {
        foreach ($this->column_database as $item => $value) 
        {
            $oldValue = $data->$item;
            // if($item == 'loket_pendaftaran') {
                // $data->$item = $this->getAntrianLoket();
            // } else {
                $data->$item = $this->getAntrianPoli($value);
                if($data->$item == null) {
                    $data->$item = $oldValue;
                }
            // }
        }
        $data->save();
        return true;
    }

    public function getAntrianLoket()
    {
        $data = AntrianLoket::findOne([
            'status' => false,
            'tgl_antrian' => Date('Y-m-d'),
        ]);
        if ($data == null) {
            
        } else {
            return $data->urutan;
        }
    }

    public function getAntrianPoli($poli_tujuan)
    {
        $this->getpoli($poli_tujuan);
        $data = AntrianPoli::findOne([
            'status' => false,
            'tgl_antrian' => Date('Y-m-d'),
            'poli_id' => $poli_tujuan
        ]);
        if($data == null) {
            
        } else {
            return $data->urutan;
        }
    }

    public function updateAntrianLoket() 
    {
        $data = AntrianLoket::findOne([
            'status' => false,
            'tgl_antrian' => Date('Y-m-d'),
        ]);
        if ($data == null) {
            
        } else {
            $data->status = 1;
            $data->save();
            $this->getAntrianNowUntukHariIni();
            return true;
        }
    }

    public function updateAntrianPoli($poli_tujuan)
    {
        $this->getpoli($poli_tujuan);
        $data = AntrianPoli::findOne([
            'status' => false,
            'tgl_antrian' => Date('Y-m-d'),
            'poli_id' => $poli_tujuan
        ]);
        if($data == null) {

        } else {
            $data->status = 1;
            $data->save();
            $this->getAntrianNowUntukHariIni();
        }
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
