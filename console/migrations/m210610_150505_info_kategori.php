<?php

use yii\db\Migration;

/**
 * Class m210610_150505_info_kategori
 */
class m210610_150505_info_kategori extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%info_kategori}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string()->notNull()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210610_150505_info_kategori cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210610_150505_info_kategori cannot be reverted.\n";

        return false;
    }
    */
}
