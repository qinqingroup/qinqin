<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Order;
use \yii\data\Pagination;
/**
 * Order controller
 * @订单管理
 * @Controller
 * @作者:zdh
 * @2016/5/2/19/16:15:21
 */
class OrderController extends Controller
{
	/**
     * 未处理的订单
     * [actionListm description]
     * @return [type] [description]
     */
    
    public function actionListm(){

        $query = Order::find()->where(
            "order_state=0"
        );
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
        ]);
        $countries = $query->orderBy('order_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->renderpartial('listm', [
            'row'=>$countries,
            'pagination' => $pagination,
        ]);

    }



/**
 * 处理中的订单
 * [actionListing description]
 * @return [type] [description]
 */
    public function actionListing(){
        $query = Order::find()->where(
            "order_state=1"
        );
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
        ]);
        $countries = $query->orderBy('order_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->renderpartial('listing', [
            'row'=>$countries,
            'pagination' => $pagination,
        ]);
   
    }



/**
 * 已完成的订单
 * [actionListend description]
 * @return [type] [description]
 */
     public function actionListend(){
        $query = Order::find()->where(
            "order_state=3"
        );
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
        ]);
        $countries = $query->orderBy('order_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->renderpartial('listend', [
            'row'=>$countries,
            'pagination' => $pagination,
        ]);
     
    }

/**
 * 修改订单状态
 * [actionUpstate description]
 * @return [type] [description]
 */
     public function actionUpstate(){
         $request=Yii::$app->request;
         $primaryConnection = \Yii::$app->db;

        $name=$request->get();
        if ($name['state']==0) {
            # 修改状态为审核中
            $primaryConnection->createCommand()->update('order', ['order_state' => 1],'order_id='.$name['id'])->execute();

            $this->redirect('index.php?r=order/listm');

        }elseif ($name['state']==1) {
            # 修改状态为已完成
            $primaryConnection->createCommand()->update('order', ['order_state' => 3,'order_out_time'=>date('Y-m-d H:i:s')],'order_id='.$name['id'])->execute();

            $this->redirect('index.php?r=order/listing');
        }
    }




/**
 * 单挑删除订单
 * [actionDelstate description]
 * @return [type] [description]
 */
     public function actionDelstate(){
         $request=Yii::$app->request;
         $primaryConnection = \Yii::$app->db;

        $name=$request->get();
        if ($name['state']==0) {
            # 删除开始
            $primaryConnection->createCommand()->delete('order', 'order_id='.$name['id'])->execute();

            $this->redirect('index.php?r=order/listm');

        }elseif ($name['state']==1) {
            # 删除进行中
            $primaryConnection->createCommand()->delete('order','order_id='.$name['id'])->execute();

            $this->redirect('index.php?r=order/listing');
        }elseif ($name['state']==3) {
            # 修改状态为已完成
            $primaryConnection->createCommand()->delete('order','order_id='.$name['id'])->execute();

            $this->redirect('index.php?r=order/listend');
        }
    }
    /**
     * 订单详情
     * [actionLookstate description]
     * @return [type] [description]
     */
    public function actionLookstate(){
        $request=Yii::$app->request;
        $primaryConnection = \Yii::$app->db;

        $name=$request->get();
        $id=$name['id'];
        $rows= (new \yii\db\Query())
        ->select(['*'])
        ->from('order')
        ->where("order_id='$id'")
        ->all();
        $u_id=$rows[0]['u_id'];
        $house_id=$rows[0]['house_id'];
        $rows[0]['house_id']=  (new \yii\db\Query())
        ->select(['house_name'])
        ->from('house')
        ->where("house_id='$house_id'")
        ->one();
         $rows[0]['u_id']=  (new \yii\db\Query())
        ->select(['u_name'])
        ->from('user')
        ->where("u_id='$u_id'")
        ->one();
        $img=  (new \yii\db\Query())
        ->select(['photo_url'])
        ->from('photo')
        ->where("house_id='$house_id'")
        ->all();

    return $this->renderpartial('listuser', [
            'row'=>$rows,
            'img' => $img,
        ]);
    


    }

}
