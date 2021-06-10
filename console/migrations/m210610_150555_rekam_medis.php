<?php

use yii\db\Migration;

/**
 * Class m210610_150555_rekam_medis
 */
class m210610_150555_rekam_medis extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rekam_medis}}', [
            'id' => $this->primaryKey(),
            'tgl_periksa' => $this->date(),
            'pasien_id' => $this->integer()->notNull(),
            'anamnesa' => $this->string(100),
            'diagnosa' => $this->string(),
            'terapi' => $this->string(50),
            'askep' => $this->string(50),
            'kie' => $this->string(50)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210610_150555_rekam_medis cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210610_150555_rekam_medis cannot be reverted.\n";

        return false;
    }
    */
}
