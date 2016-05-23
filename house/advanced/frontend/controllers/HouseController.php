<?php
namespace frontend\controllers;
header("content-type:text/html;charset=utf-8");

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use frontend\models\Photo;
//分页
use \yii\data\Pagination;
use frontend\models\House;

class HouseController extends Controller
{
	//去除yii框架原本样式
	public $layout=false;
	public $enableCsrfValidation=false;
	
	//房源信息添加
	public function actionForm()
	{
		$model=new Photo();
		$request= Yii::$app->request;
		if($request->isPost)
		{
			//获取房东id
               
            //接受房屋数据
            $house_name=$request->post('house_name');
            $class_id=$request->post('class_id');
            $house_auth=$request->post('house_auth');
            $is_shelves=$request->post('is_shelves');
            $house_desc=$request->post('house_desc');
            $house_price=$request->post('house_price');
            $house_address=$request->post('house_address');
            $house_apartment=$request->post('house_apartment');
            $house_state=$request->post('house_state');
            $house_boutique=$request->post('house_boutique');
            $house_activity=$request->post('house_activity');
            $house_heat=$request->post('house_heat');
      
            //添加时间
            $house_time=date('Y-m-d H:i:s',time());
			
            //实例化添加对象
            $connection=Yii::$app->db;
            //添加房屋信息
            $houseSql=$connection->createCommand()->insert('house',[
            		'house_name'=>$house_name,
                    'class_id'=>$class_id,
                    'house_auth'=>$house_auth,
                    'is_shelves'=>$is_shelves,
                    'house_desc'=>$house_desc,
                    'house_price'=>$house_price,
                    'house_address'=>$house_address,
                    'house_apartment'=>$house_apartment,
                    'house_time'=>$house_time,
                    'house_state'=>$house_state,
                    'house_boutique'=>$house_boutique,
                    'house_activity'=>$house_activity,
                    'house_heat'=>$house_heat,
                  ])->execute();
			
			//判断
			if($houseSql)
			{
				//获取上次的id
				$rows =(new \yii\db\Query())->select(['house_id'])->from('house')->all();
				foreach($rows as $k=>$v)
				{
					 $ids=$rows[$k]['house_id'];
				}
			    //房屋的id
				$house_id=$ids;
				
				//接受图片的信息
				$photo_title=$request->post('photo_title');
			    $is_display=$request->post('is_display');
				$is_lunbo=$request->post('is_lunbo');
				//图片上传
				$photo_url = UploadedFile::getInstances($model,'photo_url');
// 				            var_dump($photo_url);die;
				if($photo_url && $model->validate())
				{
					foreach ($photo_url as $file) {
						$file->saveAs('uploads/' . $file->baseName . '.' . $file->extension);
						//图片路径
						$photo_url = $file->baseName . '.' . $file->extension;
						
						//图片表入库
						$photoSql = $connection->createCommand()->insert('photo',
								['house_id'=>$house_id,
								'photo_url'=>$photo_url,
								'photo_title'=>$photo_title,
								'is_display'=>$is_display,
								'is_lunbo'=>$is_lunbo])->execute();			
					}
				}
// 				//图片路径
// 				$photo_url = substr($img,1);
					
				if($photoSql)
				{
					//展示列表
				    $this->redirect('index.php?r=house/show');
				}
				else 
				{
					exit('添加失败');
				}
				
			}
			else
			{
				exit('添加失败');
			}	
			
		}
		else
		{
			//获取房屋类型
			$sql='select * from class';
			$arr=yii::$app->db->createCommand($sql)->queryAll();
			return $this->render('house_add',['model'=>$model,'arr'=>$arr]);
		}
	}
	
	//房源信息展示
	public function actionShow()
	{   
		//实例化添加对象
		$connection=Yii::$app->db;
		 
	    //查询信息
	    $arr=$connection->createCommand("select * from house")->queryAll();
// 	    var_dump($arr);die;
        return $this->render('house_list',['arr'=>$arr]);
	}
	
	
    //房源详情全部信息
	public function actionShowall()
	{
		//接受房屋id
		$house_id=Yii::$app->request->get('id');
		//查询信息
        $h_details=Yii::$app->db->createCommand("select * from house inner join class on house.class_id = class.class_id 
        		   where house_id = '$house_id'")->queryOne();
        $p_details=(new \yii\db\Query())
                  ->from('photo')
                  ->where(['house_id'=>"$house_id"])
                  ->all();
		return $this->render('house_list_all',['h_details'=>$h_details,'p_details'=>$p_details]);
	}
	
	//删除信息
	public function actionDel()
	{
		//接受id
		$house_id = Yii::$app->request->get('id');
		$h_del=Yii::$app->db->createCommand("delete from house where house_id = '$house_id'")->execute();
		$p_del=Yii::$app->db->createCommand("delete from photo where house_id = '$house_id'")->execute();
		if($h_del&&$p_del)
		{
			return $this->redirect('index.php?r=house/show');
		}
		else
		{
			exit('删除失败');
		}
	}
	
	//修改房屋名称
	public function actionUpname()
	{
	   $house_id = Yii::$app->request->get('house_id');
	   $house_name = Yii::$app->request->get('house_name');
	   $row=Yii::$app->db->createCommand("update house set house_name = '$house_name' where house_id = '$house_id'")->execute();
	   if($row)
	   {
	   	   echo 1;
	   }
	   else 
	   {
	   	   echo 0;
	   }	
	}
}