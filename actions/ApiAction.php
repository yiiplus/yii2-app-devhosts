<?php
/**
 * app devhosts
 *
 * PHP version 7
 *
 * @category  PHP
 * @package   Yii2
 * @author    gengxiankun <gengxiankun@126.com>
 * @copyright 2006-2018 YiiPlus Ltd
 * @link      http://www.yiiplus.com
 */

namespace yiiplus\appDevhosts\actions;

use Yii;
use yii\rest\Action;
use yii\base\InvalidConfigException;
use yii\db\Expression;
use yii\web\MethodNotAllowedHttpException;

/**
 * app devhosts Apid Action
 *
 * PHP version 7
 *
 * @category  PHP
 * @package   Yii2
 * @author    gengxiankun <gengxiankun@126.com>
 * @copyright 2006-2018 YiiPlus Ltd
 * @link      http://www.yiiplus.com
 */
class ApiAction extends Action
{
	public $modelClass = 'yiiplus\appDevhosts\models\AppDevhosts';

	public function run($token)
	{
		if (!Yii::$app->request->getIsPost()) {
            throw new MethodNotAllowedHttpException();
        }

        if (empty($this->modelClass) || !class_exists($this->modelClass)) {
            throw new InvalidConfigException("Model class doesn't exist");
        }

        $modelClass = $this->modelClass;
        
        $query = $modelClass::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->orderBy('sort');

        return $dataProvider;
	}
}