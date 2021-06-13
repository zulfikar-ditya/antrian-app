<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id
 * @property string|null $nama
 * @property int $jenis_pasien_id
 * @property int|null $no_bpjs
 * @property string|null $tgl_lahir
 * @property int|null $jenis_kelamin
 * @property string|null $alamat
 * @property int|null $pendidikan_id
 * @property string|null $pekerjaan
 * @property int|null $agama_id
 * @property int|null $status_pernikahan
 * @property int|null $telepon
 * @property string|null $tgl_masuk
 * @property string|null $tgl_akhir
 * @property int|null $user_id
 *
 * @property User $user
 * @property Agama $agama
 * @property JenisPasien $jenisPasien
 * @property Pendidikan $pendidikan
 * @property RekamMedis[] $rekamMedis
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_pasien_id'], 'required'],
            [['jenis_pasien_id', 'no_bpjs', 'jenis_kelamin', 'pendidikan_id', 'agama_id', 'status_pernikahan', 'telepon', 'user_id'], 'integer'],
            [['tgl_lahir', 'tgl_masuk', 'tgl_akhir'], 'safe'],
            [['nama', 'alamat'], 'string', 'max' => 50],
            [['pekerjaan'], 'string', 'max' => 25],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['agama_id'], 'exist', 'skipOnError' => true, 'targetClass' => Agama::className(), 'targetAttribute' => ['agama_id' => 'id']],
            [['jenis_pasien_id'], 'exist', 'skipOnError' => true, 'targetClass' => JenisPasien::className(), 'targetAttribute' => ['jenis_pasien_id' => 'id']],
            [['pendidikan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pendidikan::className(), 'targetAttribute' => ['pendidikan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'jenis_pasien_id' => 'Jenis Pasien',
            'no_bpjs' => 'No Bpjs',
            'tgl_lahir' => 'Tgl Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'pendidikan_id' => 'Pendidikan',
            'pekerjaan' => 'Pekerjaan',
            'agama_id' => 'Agama ID',
            'status_pernikahan' => 'Status Pernikahan',
            'telepon' => 'Telepon',
            'tgl_masuk' => 'Tgl Masuk',
            'tgl_akhir' => 'Tgl Akhir',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[Agama]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAgama()
    {
        return $this->hasOne(Agama::className(), ['id' => 'agama_id']);
    }

    /**
     * Gets query for [[JenisPasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenisPasien()
    {
        return $this->hasOne(JenisPasien::className(), ['id' => 'jenis_pasien_id']);
    }

    /**
     * Gets query for [[Pendidikan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPendidikan()
    {
        return $this->hasOne(Pendidikan::className(), ['id' => 'pendidikan_id']);
    }

    /**
     * Gets query for [[RekamMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRekamMedis()
    {
        return $this->hasMany(RekamMedis::className(), ['pasien_id' => 'id']);
    }
}
