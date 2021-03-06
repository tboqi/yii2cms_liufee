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

class CategoryCest
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
        $I->amOnPage(Url::toRoute('/category/index'));
        $I->see('分类');
        $I->see("别名");
        $I->click("a[title=编辑]");
        $I->see("编辑分类");
        $I->fillField("Category[name]", '123');
        $I->submitForm("button[type=submit]", []);
        $I->click("a[title=编辑]");
        $I->seeInField("Category[name]", "123");
    }

}