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
use yii\base\InvalidParamException;
use yii\base\InvalidConfigException;
use yii\web\MethodNotAllowedHttpException;

/**
 * app devhosts Api Action
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
    /**
     * @var string class name of the model which will be handled by this action.
     * The model class must implement [[ActiveRecordInterface]].
     * This property must be set.
     */
	public $modelClass = 'yiiplus\appDevhosts\models\AppDevhosts';

    /**
     * @var string
     */
    public $tokenParamter = 'system.yp-app-devhosts-toekn';

    /**
     * @param token string 此接口需要授权码才能访问
     *
     * @return ActiveDataProvider
     */
	public function run($token)
	{
		if (Yii::$app->request->getIsPost()) {
            throw new MethodNotAllowedHttpException();
        }

        if (empty($this->modelClass) || !class_exists($this->modelClass)) {
            throw new InvalidConfigException("Model class doesn't exist");
        }

        if (empty($token)) {
            throw new InvalidParamException("The token parameter does not exist");
        }

        $kvstore = Yii::$app->kvstore;
        if ($token != $kvstore->get($this->tokenParamter)) {
            throw new InvalidParamException("Token parameter does not match");
        }

        $modelClass = $this->modelClass;
        $query = $modelClass::find();
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query,
        ]);
        $query->orderBy('sort');

        return $dataProvider;
	}
}
