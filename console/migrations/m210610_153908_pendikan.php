<?php

use yii\db\Migration;

/**
 * Class m210610_153908_pendikan
 */
class m210610_153908_pendikan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pendidikan}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(50),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210610_153908_pendikan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210610_153908_pendikan cannot be reverted.\n";

        return false;
    }
    */
}
