<?php

use yii\db\Migration;

class m190124_110200_barang extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%barang}}', [
            'barang_id' => $this->primaryKey(),
            'barang_nama' => $this->string()->notNull(),
            'barang_harga' => $this->string()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%barang}}');
    }
}
