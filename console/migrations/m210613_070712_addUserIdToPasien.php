<?php

use yii\db\Migration;

/**
 * Class m210613_070712_addUserIdToPasien
 */
class m210613_070712_addUserIdToPasien extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('pasien', 'token');
        $this->addColumn('pasien', 'user_id', $this->integer()->after('tgl_akhir'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210613_070712_addUserIdToPasien cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210613_070712_addUserIdToPasien cannot be reverted.\n";

        return false;
    }
    */
}
