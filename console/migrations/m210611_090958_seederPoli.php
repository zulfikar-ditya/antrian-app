<?php

use yii\db\Migration;
use common\models\Poli;

/**
 * Class m210611_090958_seederPoli
 */
class m210611_090958_seederPoli extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $poli = new Poli();
        $poli->nama = 'Loket Pendaftaran';
        $poli->save();

        $poli = new Poli();
        $poli->nama = 'Poli Umum';
        $poli->save();

        $poli = new Poli();
        $poli->nama = 'Poli Gigi';
        $poli->save();

        $poli = new Poli();
        $poli->nama = 'Poli Kusta';
        $poli->save();

        $poli = new Poli();
        $poli->nama = 'Poli Kandungan';
        $poli->save();

        $poli = new Poli();
        $poli->nama = 'Poli Kb';
        $poli->save();

        $poli = new Poli();
        $poli->nama = 'Poli MTBS';
        $poli->save();

        $poli = new Poli();
        $poli->nama = 'Poli Jiwa';
        $poli->save();

        $poli = new Poli();
        $poli->nama = 'Poli Lansia';
        $poli->save();

        $poli = new Poli();
        $poli->nama = 'Imunisasi';
        $poli->save();

        $poli = new Poli();
        $poli->nama = 'Labolatorium';
        $poli->save();

        $poli = new Poli();
        $poli->nama = 'Pojok Gizi';
        $poli->save();

        $poli = new Poli();
        $poli->nama = 'klinik Sanitasi';
        $poli->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210611_090958_seederPoli cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210611_090958_seederPoli cannot be reverted.\n";

        return false;
    }
    */
}
