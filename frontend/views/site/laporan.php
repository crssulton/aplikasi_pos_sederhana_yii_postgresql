<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;

$this->title = 'Laporan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-laporan">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php 
        echo Highcharts::widget([
            'options' => [
                'title' => ['text' => 'Diagram Penjualan'],
                'xAxis' => [
                    'categories' => $nama_barang
                ],
                'yAxis' => [
                    'title' => ['text' => 'Jumlah Terjual']
                ],
                'series' => [
                    ['name' => 'Penjualan', 'data' => $jumlah_barang]
                ]
            ]
        ]); 
    ?>

</div>
