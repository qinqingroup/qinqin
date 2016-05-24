<?php

namespace frontend\controllers;

use Yii;
use frontend\models\extension;
use yii\data\Pagination;
use yii\web\UploadedFile;
use yii\web\Controller;


class ExtensionController extends \yii\web\Controller
{
	//取消Yii框架自带布局
	public $layout = false;

    public function actionExtension()
	{
		//显示表单 添加表单
		if(Yii::$app->request->post()){
			//接值
			$title=Yii::$app->request->post('ext_title');
			$content=Yii::$app->request->post('ext_content');
			$times=Yii::$app->request->post('ext_time');
			$url=Yii::$app->request->post('ext_url');
			$source=Yii::$app->request->post('ext_source');
			//时间->时间戳
			$time=strtotime($times);
			//实例化model层
			$model = new Extension();
			//获取图片基本信息
			$img=$model->ext_img = UploadedFile::getInstance($model, 'ext_img');
			//判断是否选取上传证件
			if(!empty($img->name)){
				$ext_img=$img->name;
				//判断图片是否上传成功
				if ($model->upload()) {
					$db=Yii::$app->db;
					$re=$db->createCommand()->insert('extension', [
						'ext_title' => "$title",
						'ext_content' => "$content",
						'ext_time' => "$time",
						'ext_url' => "$url",
						'ext_source' => "$source",
						'ext_img' => "$ext_img",
					])->execute();

					/*$re=$db->createCommand("insert into extension(ext_title,ext_content,ext_time,ext_url,ext_source,ext_img) values('$title','$content','$time','$url','$source','$ext_img')")->execute();*/
					//判断数据是否添加成功
					if($re){
						 $this->redirect("index.php?r=extension%2Flist");
					}
				}
			}else{
				echo "<script>alert('请上传有效证件');location.href='index.php?r=extension%2Fextension'</script>";
			}	
		}else{
			$model = new Extension();
			$model->ext_img = UploadedFile::getInstance($model, 'ext_img');
			return $this->render('extensionform',['model' => $model]);
		}
		
	}
	//展示列表
	public function actionList(){
		//分页
		$query = Extension::find();
		$countQuery = clone $query;
		$pagination = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => 3]);
		$rows = $query->offset($pagination->offset)
        ->limit($pagination->limit)
		->asArray()
        ->all();
		//print_r($rows);die;
		return $this->render("extensionlist",[
			'row'=>$rows,
			'pagination' => $pagination,
		]);
	}
	//删除信息
	public function actionDel(){
		$request = \Yii::$app->request;
        $id = $request->get('id');
        $re=Extension::deleteAll('ext_id=:id',[':id'=>$id]);		
		/*$id=Yii::$app->request->get('id');
		$db=Yii::$app->db;
		$re=$db->createCommand()->delete('extension', "ext_id = $id")->execute();
		var_dump($re);die;*/
		if($re){
			$this->redirect("index.php?r=extension/list");
		}else{
			return $this->render('extensionlist');
		}
	}


	
}
