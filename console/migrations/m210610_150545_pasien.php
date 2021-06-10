<?php

use yii\db\Migration;

/**
 * Class m210610_150545_pasien
 */
class m210610_150545_pasien extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pasien}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(50),
            'jenis_pasien_id' => $this->integer()->notNull(),
            'no_bpjs' => $this->integer(),
            'tgl_lahir' => $this->date(),
            'jenis_kelamin' => $this->boolean(),
            'alamat' => $this->string(50),
            'pendidikan_id' => $this->integer(),
            'pekerjaan' => $this->string(25),
            'agama_id' => $this->integer(),
            'status_pernikahan' => $this->boolean()->defaultValue(false),
            'telepon' => $this->integer(),
            'tgl_masuk' => $this->date(),
            'tgl_akhir' => $this->date(),
            'token' => $this->string(200),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210610_150545_pasien cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210610_150545_pasien cannot be reverted.\n";

        return false;
    }
    */
}
