<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [

      'gii'=> [
        'class' => 'yii\gii\Module',
        //      'allowedIPs' => ['127.0.0.1', '::1'],
        //
        'generators' => [
          'crud' => [ //生成器名称
            'class' => 'yii\gii\generators\crud\Generator',
            'templates' => [ //设置我们自己的模板
              //模板名 => 模板路径
              'myCrud' => '@app/giitemplate/crud/default',
            ],
          ],
        ],
      ],

      'admin' => [
        'class' => 'mdm\admin\Module',
      ],
    ],
    'aliases' => [
      '@mdm/admin' => '@vendor/mdmsoft/yii2-admin',
    ],
    //严重警告！！！as access位置不要添加错了，已经不少同学都掉坑里了！！！
    'as access' => [
      //ACF肯定是要加的，因为粗心导致该配置漏掉了，很是抱歉
      'class' => 'mdm\admin\components\AccessControl',
      'allowActions' => [
        //这里是允许访问的action
        //controller/action
        '*'
        //发布前记得修改上面的配置!!!!!!!!!!
      ]
    ],

    'components' => [
      //这里必须添加authManager配置项
      //components数组中加入authManager组件,有PhpManager和DbManager两种方式,
      //PhpManager将权限关系保存在文件里,这里使用的是DbManager方式,将权限关系保存在数据库.
        "authManager" => [
          "class" => 'yii\rbac\DbManager', //这里记得用单引号而不是双引号
          "defaultRoles" => ["guest"],
        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        "aliases" => [
          "@mdm/admin" => "@vendor/mdmsoft/yii2-admin",
        ],
    //      发送邮件设置
        'mailer' => [
          'class' => 'yii\swiftmailer\Mailer',
          'viewPath' => '@common/mail',
          // send all mails to a file by default. You have to set
          // 'useFileTransport' to false and configure a transport
          // for the mailer to send real emails.
          'useFileTransport' => false,
          'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.163.com',
            'username' => 'mrmercury_ohh@163.com',
            'password' => 'mushroom1234',
            'port' => '25',
            'encryption' => 'tls',
          ],
          'messageConfig'=>[
            'charset'=>'UTF-8',
            'from'=>['mrmercury_ohh@163.com'=>'欧昊涵']
          ],
        ],
    ],
    'params' => $params,
];
