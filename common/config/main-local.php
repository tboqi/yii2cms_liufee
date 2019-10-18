<?php
return [
    'components' => [
        'db' => [ //数据库配置，这里的配置可能会被conf/db.local main-local.php配置覆盖
            'class' => yii\db\Connection::className(),
            'dsn' => 'mysql:host=10.0.75.1;dbname=yii2cms_liufee',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8mb4',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
