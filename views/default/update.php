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

/* @var $this yii\web\View */
/* @var $model common\models\AppDevhosts */

$this->title = Yii::t('yiiplus/app-devhosts', '修改') . 'App Devhosts: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'App Devhosts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-devhosts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
