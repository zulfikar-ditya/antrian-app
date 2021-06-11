<?php

use yii\db\Migration;

use common\models\Agama;
use common\models\Pendidikan;
use common\models\JenisPasien;

/**
 * Class m210611_073735_moreSeeder
 */
class m210611_073735_moreSeeder extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $agama = new Agama();
        $agama->nama = 'Islam';
        $agama->save();
        $agama = new Agama();
        $agama->nama = 'Kristen';
        $agama->save();

        $pendidikan = new Pendidikan();
        $pendidikan->nama = 'TK';
        $pendidikan->save();

        $pendidikan = new Pendidikan();
        $pendidikan->nama = 'SD';
        $pendidikan->save();

        $pendidikan = new Pendidikan();
        $pendidikan->nama = 'SLTP';
        $pendidikan->save();

        $pendidikan = new Pendidikan();
        $pendidikan->nama = 'SLTA';
        $pendidikan->save();

        $pendidikan = new Pendidikan();
        $pendidikan->nama = 'Sarjana';
        $pendidikan->save();

        $jenis = new JenisPasien();
        $jenis->nama = 'Lansia';
        $jenis->save();
        
        $jenis = new JenisPasien();
        $jenis->nama = 'Balita';
        $jenis->save();

        $jenis = new JenisPasien();
        $jenis->nama = 'Test';
        $jenis->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210611_073735_moreSeeder cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210611_073735_moreSeeder cannot be reverted.\n";

        return false;
    }
    */
}
