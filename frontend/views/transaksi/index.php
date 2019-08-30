<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TransaksiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transaksis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transaksi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'transaksi_id',
            'transaksi_nama',
            'transaksi_jumlah',
            'transaksi_harga',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
