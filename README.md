yii2-app-devhosts
========================
使用yii2封装的 app devhosts 扩展，提供了灵活可编辑的 app hosts 数据。

1.安装
------------

安装此扩展程序的首选方法是通过 [composer](http://getcomposer.org/download/).

编辑运行

```bash
php composer.phar require --prefer-dist yiiplus/yii2-app-devhosts "^1.0.0"
```

或添加配置到项目目录下的composer.json文件的require部分

```
"yiiplus/yii2-app-devhosts": "^1.0.0"
```

2.配置
------------

> 配置后台对数据的增删改查模块
```php
'modules' => [
    ...
    'app-devhosts' => [
        'class' => 'yiiplus\appDevhosts\Module',
    ],
    ...
],
```

3.创建数据库
------------
```bash
./yii migrate --migrationPath=@yiiplus/appDevhosts/migrations
```

4.使用
------------
> 定义app访问接口
```php
//Controller
Class AppDevhostsController extends Controller
{
    function actions(){
       return [
            ...
            'index' => [
            	'class' => 'yiiplus\appDevhosts\actions\ApiActions'
            ],
            ...
        ];
    }
}

```

- 如需操作数据，则访问后台页面：`xxx.com/app-devhosts`
- app接口地址：`xxx.com/xxx/app-devhosts?token=xxx`
