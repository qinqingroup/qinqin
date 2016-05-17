<?php

namespace frontend\controllers;

class ExtensionController extends \yii\web\Controller
{
	public $layout=false;

    public function actionIndex()
    {
        return $this->render('index');
    }
	public function actionGoodssort()
    {
        return $this->render('goods_sort');
    }
	public function actionGoodsadd()
    {
        return $this->render('goods_add');
    }
	public function actionGoodslist()
    {
        return $this->render('goods_list');
    }

}
