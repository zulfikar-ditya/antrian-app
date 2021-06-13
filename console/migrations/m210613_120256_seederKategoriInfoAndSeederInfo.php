<?php

use yii\db\Migration;
use common\models\InfoKategori;
use common\models\Info;

/**
 * Class m210613_120256_seederKategoriInfoAndSeederInfo
 */
class m210613_120256_seederKategoriInfoAndSeederInfo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $kategori = new InfoKategori();
        $kategori->nama = 'landing';
        $kategori->save();
        $kategori = new InfoKategori();
        $kategori->nama = 'Poli dan layanan';
        $kategori->save();
        $kategori = new InfoKategori();
        $kategori->nama = 'layanan profesional';
        $kategori->save();

        $info = new Info();
        $info->judul = 'Visi';
        $info->info_kategori_id = 1;
        $info->detail_1 = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At non voluptatem, asperiores unde hic dolorum perferendis, porro soluta odit praesentium eligendi eveniet velit omnis aspernatur error dicta placeat minus quam?';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Misi';
        $info->info_kategori_id = 3;
        $info->detail_1 = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At non voluptatem, asperiores unde hic dolorum perferendis, porro soluta odit praesentium eligendi eveniet velit omnis aspernatur error dicta placeat minus quam?';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Pukesmas';
        $info->info_kategori_id = 5;
        $info->detail_1 = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At non voluptatem, asperiores unde hic dolorum perferendis, porro soluta odit praesentium eligendi eveniet velit omnis aspernatur error dicta placeat minus quam?';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Poli Umum.';
        $info->info_kategori_id = 6;
        $info->detail_1 = '';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Poli Gigi.';
        $info->info_kategori_id = 6;
        $info->detail_1 = '';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Poli Kusta.';
        $info->info_kategori_id = 6;
        $info->detail_1 = '';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Poli kandungan.';
        $info->info_kategori_id = 6;
        $info->detail_1 = '';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Poli kb.';
        $info->info_kategori_id = 6;
        $info->detail_1 = '';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Poli MTBS.';
        $info->info_kategori_id = 6;
        $info->detail_1 = '';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Poli Jiwa.';
        $info->info_kategori_id = 6;
        $info->detail_1 = '';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Poli Lansia.';
        $info->info_kategori_id = 6;
        $info->detail_1 = '';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Imunisasi.';
        $info->info_kategori_id = 6;
        $info->detail_1 = '';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Labolatorium.';
        $info->info_kategori_id = 6;
        $info->detail_1 = '';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Pojok Gizi.';
        $info->info_kategori_id = 6;
        $info->detail_1 = '';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Klinik Sanitasi.';
        $info->info_kategori_id = 6;
        $info->detail_1 = '';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Ramah.';
        $info->info_kategori_id = 7;
        $info->detail_1 = '';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Cepat.';
        $info->info_kategori_id = 7;
        $info->detail_1 = '';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();

        $info = new Info();
        $info->judul = 'Tanggap.';
        $info->info_kategori_id = 7;
        $info->detail_1 = '';
        $info->detail_2 = '';
        $info->gambar = '';
        $info->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210613_120256_seederKategoriInfoAndSeederInfo cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210613_120256_seederKategoriInfoAndSeederInfo cannot be reverted.\n";

        return false;
    }
    */
}
