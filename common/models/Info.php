<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property int $id
 * @property int $info_kategori_id
 * @property string|null $judul
 * @property string|null $detail_1
 * @property string|null $detail_2
 * @property string|null $gambar
 *
 * @property InfoKategori $infoKategori
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['info_kategori_id'], 'required'],
            [['info_kategori_id'], 'integer'],
            [['detail_1', 'detail_2'], 'string'],
            [['judul'], 'string', 'max' => 50],
            [['gambar'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            [['info_kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => InfoKategori::className(), 'targetAttribute' => ['info_kategori_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'info_kategori_id' => 'Info Kategori ID',
            'judul' => 'Judul',
            'detail_1' => 'Detail 1',
            'detail_2' => 'Detail 2',
            'gambar' => 'Gambar',
        ];
    }

    /**
     * Gets query for [[InfoKategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInfoKategori()
    {
        return $this->hasOne(InfoKategori::className(), ['id' => 'info_kategori_id']);
    }
}
