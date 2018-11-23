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

    public $sourceLanguage = 'zh-CN';

    /**
     * 初始化
     * 
     * @return void
     */
    public function init()
    {
        parent::init();

        $this->registerTranslations();
    }

    /**
     * 注册翻译文件
     *
     * @return void
     */
    protected function registerTranslations()
    {
        Yii::$app->i18n->translations['yiiplus/app-devhosts'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => $this->sourceLanguage,
            'basePath' => '@yiiplus/app-devhosts/messages',
            'fileMap' => [
                'yiiplus/app-devhosts' => 'app-devhosts.php',
            ],
        ];
    }
    
    /**
     * 多语言翻译
     *
     * @param string  $message  消息
     * @param array   $params   参数
     * @param string  $language 语言
     * 
     * @return string 翻译结果
     */
    public static function t($message, $params = [], $language = null)
    {
        return Yii::t('yiiplus/kvstore', $message, $params, $language);
    }
}
