<?php

use yii\db\Migration;

/**
 * Class m210610_153856_jenis_pasien
 */
class m210610_153856_jenis_pasien extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%jenis_pasien}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(50),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210610_153856_jenis_pasien cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210610_153856_jenis_pasien cannot be reverted.\n";

        return false;
    }
    */
}
