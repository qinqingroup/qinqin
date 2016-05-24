<?php

namespace frontend\controllers;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Auth;
use \yii\data\Pagination;

/**
 * 2016-5-20 21:13:36
 * 作者::孙鹏浩
 * 功能::实名认证
 * Name::Auth
 */
class AuthController extends \yii\web\Controller
{
	/**
	 * 设置Yii框架自带样式不显示
	 */
	public $layout = false;

	/**
	 * [actionIndex description]
	 * @return [type] [description]
	 * 列表展示
	 */
    public function actionIndex()
    {
    	$query = Auth::find();
        
    	$num=3;
        $pagination = new Pagination([
            'defaultPageSize' => $num,
            'totalCount' => $query->count(),
        ]);
        $countries = $query->orderBy('auth_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
		 return $this->renderpartial('index', [
            'row'=>$countries,
            'pagination' => $pagination,
        ]);
    }

      /**
       * [actionUpstate description]
       * @return [type] [description]
       * 状态修改
       */
      public function actionUpstate(){
         $request=Yii::$app->request;
         $primaryConnection = \Yii::$app->db;

        $name=$request->get();
        if ($name['state']==1) {
            # 修改状态为审核中
            $primaryConnection->createCommand()->update('auth', ['auth_state' => 2],'auth_id='.$name['id'])->execute();

            $this->redirect('index.php?r=auth/index');

        }elseif ($name['state']==2) {
            # 修改状态为已完成
            $primaryConnection->createCommand()->update('auth', ['auth_state' => 3],'auth_id='.$name['id'])->execute();

            $this->redirect('index.php?r=auth/index');
        }
    }


   

}
