<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/29
 * Time: 9:37
 */
namespace backend\tests\acceptance;

use backend\fixtures\UserFixture;
use backend\tests\AcceptanceTester;
use yii\helpers\Url;

class MenuCest
{
    public function _fixtures()
    {
        return [
            'user' => [
                'class' => UserFixture::className(),
                'dataFile' => codecept_data_dir() . 'login_data.php'
            ]
        ];
    }

    public function _before(AcceptanceTester $I)
    {
        login($I);
    }

    public function checkIndex(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/menu/index'));
        $I->see('后台菜单');
        $I->see("操作");
        $I->click("a[title=编辑]");
        $I->see("编辑后台菜单");
        $I->fillField("Menu[name]", '测试123');
        $I->submitForm("button[type=submit]", []);
        $I->click("a[title=编辑]");
        $I->seeInField("Menu[name]", "测试123");
    }

}