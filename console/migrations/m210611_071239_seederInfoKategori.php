<?php

use yii\db\Migration;

use common\models\InfoKategori;

/**
 * Class m210611_071239_seederInfoKategori
 */
class m210611_071239_seederInfoKategori extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $kategori = new InfoKategori();
        $kategori->nama = 'Visi';
        $kategori->save();

        $kategori = new InfoKategori();
        $kategori->nama = 'sambutan';
        $kategori->save();

        $kategori = new InfoKategori();
        $kategori->nama = 'Misi';
        $kategori->save();

        $kategori = new InfoKategori();
        $kategori->nama = 'fasilitas';
        $kategori->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210611_071239_seederInfoKategori cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210611_071239_seederInfoKategori cannot be reverted.\n";

        return false;
    }
    */
}
