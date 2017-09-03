<?php
/**
 * Author: lf
 * Blog: https://blog.feehi.com
 * Email: job@feehi.com
 * Created at: 2016-04-11 22:02
 */
use yii\helpers\Url;
/**
 * @var $model backend\models\AdminRoles
 */

$this->params['breadcrumbs'] = [
    ['label' => yii::t('app', 'Roles'), 'url' => Url::to(['index'])],
    ['label' => yii::t('app', 'Create') . yii::t('app', 'Roles')],
];
?>
<?= $this->render('_form', [
    'model' => $model,
]);
