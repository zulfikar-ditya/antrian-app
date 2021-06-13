<?php

use yii\db\Migration;

/**
 * Class m210613_071424_addpkToPasien
 */
class m210613_071424_addpkToPasien extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk-pasien-user', 'pasien', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210613_071424_addpkToPasien cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210613_071424_addpkToPasien cannot be reverted.\n";

        return false;
    }
    */
}
