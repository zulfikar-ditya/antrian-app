<?php

use yii\db\Migration;

/**
 * Class m210610_153917_agama
 */
class m210610_153917_agama extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%agama}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(50),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210610_153917_agama cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210610_153917_agama cannot be reverted.\n";

        return false;
    }
    */
}
