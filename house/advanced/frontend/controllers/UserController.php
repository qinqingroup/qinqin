<?php

namespace frontend\controllers;
use Yii;

/**
* 适用范围 user
* 类名 user
* 作者 于思蕊
* 创建时间 2016/5/19 21:00:02
*/
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
	//用户详细信息展示
	public function actionProfile(){
		$request=Yii::$app->request;
		$name = $request->get();
		$id=$name['id'];
		$user = (new \yii\db\Query())
            ->select(['*'])
            ->from('user')
			->where(['u_id' => $id])
            ->all();
		return $this->renderpartial("profile",['profile'=>$user]);
	}
	//修改用户当前状态
	public function actionUpd(){
		$request=Yii::$app->request;
		$connection = \Yii::$app->db;
		$name = $request->get();
		$id=$name['id'];
		$user = (new \yii\db\Query())
            ->select(['*'])
            ->from('user')
			->where(['u_id' => $id])
            ->all();
		if($user[0]['u_lock']==0){
			$update=$connection->createCommand()->update('user', ['u_lock' => 1], "u_id=".$id)->execute();
			return $this->redirect(["user/index"]);
		}else{
			$update=$connection->createCommand()->update('user', ['u_lock' => 0], "u_id=".$id)->execute();
			return $this->redirect(["user/index"]);
		}
		
	}
}
