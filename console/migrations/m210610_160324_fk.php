<?php

use yii\db\Migration;

/**
 * Class m210610_160324_fk
 */
class m210610_160324_fk extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk-post-info-info-categori', 'info', 'info_kategori_id', 'info_kategori', 'id', 'CASCADE');

        $this->addForeignKey('fk-post-pasien-jenis-pasien', 'pasien', 'jenis_pasien_id', 'jenis_pasien', 'id', 'CASCADE');
        $this->addForeignKey('fk-post-pasien-agama', 'pasien', 'agama_id', 'agama', 'id', 'CASCADE');
        $this->addForeignKey('fk-post-pasien-pendidikan', 'pasien', 'pendidikan_id', 'pendidikan', 'id', 'CASCADE');

        $this->addForeignKey('fk-post-rekam-pasien', 'rekam_medis', 'pasien_id', 'pasien', 'id', 'CASCADE');

        $this->addForeignKey('fk-post-antrian-loket-poli', 'antrian_loket', 'poli_id', 'poli', 'id', 'CASCADE');

        $this->addForeignKey('fk-post-antrian-poli-poli', 'antrian_poli', 'poli_id', 'poli', 'id', 'CASCADE');

        $this->addForeignKey('fk-post-user-role', 'user', 'role_id', 'role', 'id', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210610_160324_fk cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210610_160324_fk cannot be reverted.\n";

        return false;
    }
    */
}
