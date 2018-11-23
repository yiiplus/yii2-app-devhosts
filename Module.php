<?php
/**
 * app devhosts
 *
 * PHP version 7
 *
 * @category  PHP
 * @package   Yii2
 * @author    gengxiankun@126.com
 * @copyright 2006-2018 YiiPlus Ltd
 * @link      http://www.yiiplus.com
 */
namespace yiiplus\appDevhosts;

use Yii;

/**
 * appDevhosts's Module
 *
 * @category  PHP
 * @package   Yii2
 * @author    gengxiankun@126.com
 * @copyright 2006-2018 YiiPlus Ltd
 * @link      http://www.yiiplus.com
 */
class Module extends \yii\base\Module
{
    /** @var string 控制器名称空间*/
    public $controllerNamespace = 'yiiplus\appDevhosts\controllers';

    /**
     * 初始化
     * 
     * @return void
     */
    public function init()
    {
        parent::init();
    }
}
