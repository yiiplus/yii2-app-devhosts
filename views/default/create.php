<?php

use yii\helpers\Html;
use Yii;

/* @var $this yii\web\View */
/* @var $model common\models\AppDevhosts */

$this->title = Yii::t('创建') . 'App Devhosts';
$this->params['breadcrumbs'][] = ['label' => 'App Devhosts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-devhosts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
