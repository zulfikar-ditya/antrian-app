<?php

use yii\db\Migration;

/**
 * Class m210610_150527_info
 */
class m210610_150527_info extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%info}}', [
            'id' => $this->primaryKey(),
            'info_kategori_id' => $this->integer()->notNull(),
            'judul' => $this->string(50),
            'detail_1' => $this->text(),
            'detail_2' => $this->text(),
            'gambar' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210610_150527_info cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210610_150527_info cannot be reverted.\n";

        return false;
    }
    */
}
