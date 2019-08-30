<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <?php if (Yii::$app->user->isGuest) : ?>
            <h1>Welcome!</h1>
            <p><a class="btn btn-lg btn-success" href="site/login">Login</a></p>
        <?php else : ?>
            <h1>Hi <?= Yii::$app->user->identity->username ?>!</h1>
        <?php endif; ?>
    </div>

</div>
