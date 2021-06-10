<?php

use yii\db\Migration;

/**
 * Class m210610_150635_antrian_poli
 */
class m210610_150635_antrian_poli extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%antrian_poli}}', [
            'id' => $this->primaryKey(),
            'urutan' => $this->string(),
            'tgl_antrian' => $this->date(),
            'pasien_id' => $this->integer()->notNull(),
            'poli_id' => $this->integer()->notNull(),
            'perkiraan_waktu' => $this->datetime(),
            'status' => $this->boolean()->defaultValue(false),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210610_150635_antrian_poli cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210610_150635_antrian_poli cannot be reverted.\n";

        return false;
    }
    */
}
