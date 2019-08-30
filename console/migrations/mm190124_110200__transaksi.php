<?php

use yii\db\Migration;

class m190124_110200_transaksi extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%transaksi}}', [
            'transaksi_id' => $this->primaryKey(),
            'transaksi_nama' => $this->string()->notNull(),
            'transaksi_jumlah' => $this->string()->notNull(),
            'transaksi_hagra' => $this->string()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%transaksi}}');
    }
}
