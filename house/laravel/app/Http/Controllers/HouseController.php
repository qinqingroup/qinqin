<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use Request,Validator,DB,Redirect;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Cookie;
class HouseController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| 房源详情
	| Home HouseController
	| username  翟斗号
	| time  2016-5-30 08:23:26
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

/**
 * 房屋的详细信息
 * [single description]
 * @return [type] [description]
 */
	public  function single(){
		$house_id=Request::Input('id');
				// @$user_id=$_COOKIE['id']?$_COOKIE['id']:0;
		$user_id=18;
		// $house_id=29;//测试
		//商品图片
		$house['img']= DB::table('photo')->where('house_id',$house_id)->get();
		//评论条数
		$house['evalcount']= count(DB::table('eval')->where('house_id',$house_id)->get());
		//房屋信息
		$house['row']= DB::table('house')->where('house_id',$house_id)->get();
		//房东ID
		$u_id=$house['row'][0]->u_id;
		//房东还有什么房
		$house['rows']= DB::table('house')->where('u_id',$u_id)->where('house_id','!=',$house_id)->limit(7)->get();
		//查看订单状态
		$one=DB::table('order')
	            ->select(['*'])
				->where(['house_id'=>$house_id,
							'u_id'=>$user_id
					])
				->get();
				//有就返回1没有返回0
		if ($one) {
			$house['order']=1;
		}else{
			$house['order']=0;
		}
		//取出相关字段
		$house_address=$house['row'][0]->house_address;
		//相关房源
		$house['address']= DB::table('house')->where('house_address',$house_address)->where('house_id','!=',$house_id)->get();
		//根据评论表查user表
		$house['eval']=DB::table('eval')
			->join('user', 'eval.u_id', '=', 'user.u_id')
            ->select(['*'])
			->where(['eval.house_id'=>$house_id])
			->orderBy('eval_id','desc')
			->limit('6')
			->get();
			//展示模板
		return view("html.single",$house);
	}
	 /**
	*评论处理
	 * [collect description]
	 * @return [type] [description]
	 */
	    public function adddesc(){
			$u_id=18;
			//取到内容防Xss攻击
	    	$desc=htmlspecialchars(Request::Input('desc'));
	    	//取到房屋ID
	    	$house_id=Request::Input('house_id');
	    	//获取当前时间
	    	$time=date("Y-m-d H:i:s");
	    	//验证唯一
	    	$one=DB::table('eval')
            ->select(['*'])
			->where(['house_id'=>$house_id,
						'u_id'=>$u_id
				])
			->get();
			if ($one) {
			echo 3;die;
			}else{
				//入库
					$iii=DB::table('eval')->insert(
				    array(	
				    		'house_id' =>$house_id,
				     		'u_id' =>$u_id,
				     		'eval_time'=>$time,
				     		'eval_desc'=>$desc
				    	)
						);
				//展示div模板
				if($iii){
				$house['eval']=DB::table('eval')
				->join('user', 'eval.u_id', '=', 'user.u_id')
	            ->select(['*'])
				->where(['eval.house_id'=>$house_id])
				->get();
				return view("html.housingeval",$house);

				}else{
					echo 0;
				}
			}
			
	}

	/**
	 * 收藏管理
	 * [collect description]
	 * @return [type] [description]
	 */
	    public function collect(){
		// @$u_id=$_COOKIE['id']?$_COOKIE['id']:0;
		// if($u_id==0){
		// 	echo "<script>alert('请先登录');</script>".Redirect::action('IndexController@login');die;
		// }
		// 获取u_Id,house_id
			$u_id=18;
	    	$house_id=Request::Input('house_id');
	    	//验证唯一
			$one=DB::table('collect')
            ->select(['*'])
			->where(['house_id'=>$house_id,
						'u_id'=>$u_id
				])
			->get();

				if ($one) {
					echo 1;
				}else{
					//入库
						DB::table('collect')->insert(
					    array(	'house_id' =>$house_id,
					     		'u_id' =>$u_id,
					     		'coll_time'=>date('Y-m-d H:i:s')
					    	)
					);
				}
	    
	}


/**
	 * 订单添加
	 * [headportrait description]
	 * @return [type] [description]
	 */
	    public function order(){
	    	//获取u_id,house_id,price
			// @$u_id=$_COOKIE['id']?$_COOKIE['id']:0;
			$u_id=18;
		    $house_id=Request::Input('house_id');
	    	$price=Request::Input('price');
			//计算定金
	    	$deposit=(int)ceil($price*0.3);
	    	//获取当前时间
	    	$order_time=date("Y-m-d H:i:s");
	    	//随机数
	    	$order_number=rand(11111,99999);
	    	//取出房源ID
	    	$houses= DB::table('house')->where('house_id',$house_id)->get();
	    	$u_boos_id=$houses[0]->u_boss_id;
	    	//验证唯一
	    	$one=DB::table('order')
            ->select(['*'])
			->where(['house_id'=>$house_id,
						'u_id'=>$u_id
				])
			->get();
			if ($one) {
					echo 1;
				}else{
				//入库
	    		$iii=DB::table('order')->insert(
			    array(	
			    		'house_id' =>$house_id,
			     		'u_id' =>$u_id,
			     		'u_boss_id' =>$u_boos_id,
			     		'order_time'=>$order_time,
			     		'order_price'=>$price,
			     		'order_deposit'=>$deposit,
			     		'order_number'=>$order_number
			    	)
					);
	    }
	}


	  //展示页面
    public  function index(){

        //查询房源信息
        $hshow=DB::table('house')
                 ->join('user','house.u_id','=','user.u_id')
                 ->join('class','house.class_id','=','class.class_id')
                 ->join('photo','house.house_id','=','photo.house_id')
                 ->Paginate($perPage = 4, $columns = ['*'], $pageName = 'page');
                 //svar_dump($hshow);die;

        //查询精品 活动 热销房
        $te=DB::table('house')
                ->join('user','house.u_id','=','user.u_id')
                ->join('photo','house.house_id','=','photo.house_id')
                ->select(['*'])
                ->where('house_boutique','=',1,'or','house_activity','=',1,'or','house_heat','=',1)
                ->limit(7)
                ->get();
		return view('html.buy_single',['hshow'=>$hshow,'te'=>$te]);
	}


	// public function hot(){
	// 	 $te=DB::table('house')
 //                ->join('user','house.u_id','=','user.u_id')
 //                ->join('photo','house.house_id','=','photo.house_id')
 //                ->select(['*'])
 //                ->where('house_boutique','=',1)
 //                ->limit(7)
 //                ->get();

 //                 $hshow=DB::table('house')
 //                 ->join('user','house.u_id','=','user.u_id')
 //                 ->join('class','house.class_id','=','class.class_id')
 //                 ->join('photo','house.house_id','=','photo.house_id')
 //                 ->Paginate($perPage = 4, $columns = ['*'], $pageName = 'page');
	// 	return view('html.buy_single',['hshow'=>$te,'te'=>$hshow]);
	// }

}
