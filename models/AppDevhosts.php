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
namespace yiiplus\appDevhosts\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "yp_app_devhosts".
 *
 * @property int    $id
 * @property string $name
 * @property string $host
 * @property int    $type
 * @property int    $sort
 * @property string $created_at
 * @property string $updated_at
 *
 * @category  PHP
 * @package   Yii2
 * @author    gengxiankun@126.com
 * @copyright 2006-2018 YiiPlus Ltd
 * @link      http://www.yiiplus.com
 */
class AppDevhosts extends \yii\db\ActiveRecord
{
    /**
     * 行为过滤器
     *
     * @return array 行为过滤器数组
     */
    public function behaviors()
    {
       return [
           TimestampBehavior::className(),
       ];
    }

    /** 
     * hosts 的类型列表
     */
    public static $type_list = [0 => '正式', 1 => '预发布', 2 => '测试', 3 => '审核'];

    /**
     * 声明 table name
     *
     * @return string table name
     */
    public static function tableName()
    {
        return 'yp_app_devhosts';
    }

    /**
     * Returns the list of fields that should be returned by default by [[toArray()]] when no specific fields are specified.
     *
     * @return array the list of field names or field definitions.
     */
    public function fields()
    {
        $fields = parent::fields();

        unset($fields['id'], $fields['sort'], $fields['created_at'], $fields['updated_at']);

        return $fields;
    }

    /**
     * Returns the validation rules for attributes.
     *
     * @return array validation rules
     */
    public function rules()
    {
        return [
            [['name', 'host'], 'required'],
            [['type', 'sort'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['host'], 'string', 'max' => 100],
        ];
    }

    /**
     * Returns the list of all attribute names of the model.
     *
     * @return array list of attribute names.
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'host' => 'Host',
            'type' => 'Type',
            'sort' => 'Sort',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
