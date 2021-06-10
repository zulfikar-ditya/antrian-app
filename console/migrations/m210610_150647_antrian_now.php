<?php

use yii\db\Migration;

/**
 * Class m210610_150647_antrian_now
 */
class m210610_150647_antrian_now extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%antrian_now}}', [
            'id' => $this->primaryKey(),
            'tgl' => $this->date(),
            'loket_pendaftaran' => $this->integer(),
            'poli_umun' => $this->integer(),
            'poli_gigi' => $this->integer(),
            'poli_kusta' => $this->integer(),
            'poli_kandungan' => $this->integer(),
            'poli_kb' => $this->integer(),
            'poli_mtbs' => $this->integer(),
            'poli_jiwa' => $this->integer(),
            'poli_lansia' => $this->integer(),
            'imunisasi' => $this->integer(),
            'labolatorium' => $this->integer(),
            'pojok_gizi' => $this->integer(),
            'klinik_sanitasi' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210610_150647_antrian_now cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210610_150647_antrian_now cannot be reverted.\n";

        return false;
    }
    */
}
