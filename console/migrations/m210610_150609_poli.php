<?php

use yii\db\Migration;

/**
 * Class m210610_150609_poli
 */
class m210610_150609_poli extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%poli}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210610_150609_poli cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210610_150609_poli cannot be reverted.\n";

        return false;
    }
    */
}
