<?php

namespace frontend\controllers;

use Yii;
use frontend\models\extension;
use yii\data\Pagination;
use yii\web\UploadedFile;
use yii\web\Controller;
use SphinxClient;
Yii::$classMap['SphinxClient']="@vendor/sphinx/sphinxapi.php";

/**
 * 作者::lql
 * 功能::推广活动
 * Name::Extension
 */

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
		//memcache 测试  true！
		// 尝试从缓存中取回 $data 
		/*$data = Yii::$app->cache->get($key);
		if ($data === false) {
		    // $data 在缓存中没有找到，则重新计算它的值
		    // 将 $data 存放到缓存供下次使用
		   Yii::$app->cache->set($key, '1');
		}*/
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
	//搜索
	public function actionSphinx(){
		$name=Yii::$app->request->post('key');
		
		$sphinx = new SphinxClient ();
		$sphinx->SetServer ( '127.0.0.1', 9312);
		$sphinx->SetArrayResult ( true );
		$sphinx->SetMatchMode ( SPH_MATCH_ALL);	//匹配格式  任意匹配
           	$res = $sphinx->Query ( $name,'*' );
           	$str = '';
	           foreach($res['matches'] as $key=>$val){
	               $str = $str . ',' . $val['id'];
	           }
	           $id = trim($str,',');
           	if(empty($id)){
           		exit("查询无结果");
           	}else{
           		//echo $id;
           		$model = (new \yii\db\Query())
		                ->select('*')
		                ->from('extension')
		                ->where(['ext_id' => [$id]])
		                ->all();
		           $query = Extension::find();
			$countQuery = clone $query;
			$pagination = new Pagination(['totalCount' => $countQuery->count()]);
           		return $this->render("extensionlist",[
				'row'=>$model,
				'pagination' => $pagination,
			]);
           	}
	}
}
