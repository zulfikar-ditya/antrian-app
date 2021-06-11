<?php

use yii\db\Migration;

use common\models\Role;

/**
 * Class m210611_021224_seeder
 */
class m210611_021224_seeder extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $role = new Role();
        $role->nama = 'superuser';
        $role->save();

        $role = new Role();
        $role->nama = 'admin';
        $role->save();

        $role = new Role();
        $role->nama = 'operator';
        $role->save();

        $role = new Role();
        $role->nama = 'dokter';
        $role->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210611_021224_seeder cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210611_021224_seeder cannot be reverted.\n";

        return false;
    }
    */
}
