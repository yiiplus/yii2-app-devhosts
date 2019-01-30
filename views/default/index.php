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
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AppDevhostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'App Devhosts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-devhosts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('yiiplus/app-devhosts', '创建 App Devhosts'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'host',
            'type',
            'sort',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
