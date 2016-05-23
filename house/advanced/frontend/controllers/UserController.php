<?php

namespace frontend\controllers;
use Yii;
use frontend\models\User;
class UserController extends \yii\web\Controller
{
	//展示用户信息页面
    public function actionIndex()
    {
		$user = (new \yii\db\Query())
            ->select(['*'])
            ->from('user')
			->where('u_area_id!=0')
            ->all();
        return $this->renderpartial("usertables",['user'=>$user]);
    }	

	//用户删除
	public function actionDel(){
	 $request=Yii::$app->request;
	 $connection = \Yii::$app->db;
		$name = $request->get();
		$id=$name['id'];
		$del=$connection->createCommand()->delete('user', "u_id = $id")->execute();
		if($del){
		   $this->redirect("index.php?r=user/index");
		}
	}
}
