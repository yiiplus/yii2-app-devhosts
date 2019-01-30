<?php
/**
 * yiiplus/yii2-app-devhosts
 *
 * @category  PHP
 * @package   Yii2
 * @copyright 2018-2019 YiiPlus Ltd
 * @license   https://github.com/yiiplus/yii2-app-devhosts/licence.txt Apache 2.0
 * @link      http://www.yiiplus.com
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AppDevhosts */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'App Devhosts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-devhosts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('yiiplus/app-devhosts', '更新'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('yiiplus/app-devhosts', '删除'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'host',
            'type',
            'sort',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
