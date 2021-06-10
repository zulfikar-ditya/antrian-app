<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "poli".
 *
 * @property int $id
 * @property string|null $nama
 *
 * @property AntrianLoket[] $antrianLokets
 * @property AntrianPoli[] $antrianPolis
 */
class Poli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'poli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * Gets query for [[AntrianLokets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAntrianLokets()
    {
        return $this->hasMany(AntrianLoket::className(), ['poli_id' => 'id']);
    }

    /**
     * Gets query for [[AntrianPolis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAntrianPolis()
    {
        return $this->hasMany(AntrianPoli::className(), ['poli_id' => 'id']);
    }
}
