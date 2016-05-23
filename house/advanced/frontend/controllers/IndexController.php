<?php

namespace frontend\controllers;
use Yii;
use frontend\models\User; 


/**
 * 默认控制器
 * 首次加载展示所有页面
 * Index
 */
class IndexController extends \yii\web\Controller
{
    /**
     * [$layout description]
     * @var boolean
     * 设置yii自带样式不展示
     */
	public $layout = false;

    /**
     * [actionIndex description]
     * @return [type] [description]
     * 展示登录页面
     */
    public function actionIndex()
    {
        $model=new User();
        return $this->render('login',[
			"model"=>$model,
		]);
    }
	//后台登录
	public function actionLogin(){
		$request=Yii::$app->request;
        $session = Yii::$app->session;
        // 开启session
        $session->open();
        $model = new User();
        $name=$request->post();
        $username=$name['u_name'];
        $userpwd=$_POST["u_pwd"]?$_POST['u_pwd']:$session->get($username."ji");
		$session->set($username."ji",$userpwd,3600*24*7);
		@$ji=$_POST["ji"];
		if($ji==0){
            $session->set($username."ji",$userpwd,3600*24*7);
		}
        $rows = (new \yii\db\Query())
            ->select(['*'])
            ->from('user')
            ->where(['u_name' =>$username])
            ->all();
        if($rows){
			if($rows[0]['u_area_id']==0){
				if($rows[0]['u_pwd']==$userpwd){
						$session->set('username',$username);
						$session->set('userid',$rows[0]['u_id']);
						return $this->redirect("index.php?r=index/show");
					}else{
						echo  "<script>alert('密码错误!')</script>";
						return  $this->render("login",['model'=>$model]);
					}			
			}else{
				echo  "<script>alert('对不起！您没有登陆权限')</script>";
				return  $this->render("login",['model'=>$model]);
			}        
        }else{
            echo  "<script>alert('用户名不存在!')</script>";
            return  $this->render("login",['model'=>$model]);
        }		
	}     

    /**
     * [actionShow description]
     * @return [type] [description]
     * 登陆成功展示页面
     */
	public function actionShow()
    {
		$request=Yii::$app->request;
        $session = Yii::$app->session;
        // 开启session
        $session->open();
        $username=$session->get("username");
        return $this->render('index');
    }

    /**
     * [actionUsertui description]
     * @return [type] [description]
     * 退出
     */
	public function actionUsertui(){
		$session = Yii::$app->session;
        $session->open();
        $session->remove('username');
        return $this->redirect("index.php?r=index/index");
	}
    public function actionBlank()
    {
        return $this->render('blank');
    }
    public function actionButtons()
    {
        return $this->render('buttons');
    }
    public function actionCalendar()
    {
        return $this->render('calendar');
    }
    public function actionDropzone()
    {
        return $this->render('dropzone');
    }
    public function actionElements()
    {
        return $this->render('elements');
    }
    public function actionError404()
    {
        return $this->render('error-404');
    }
    public function actionError500()
    {
        return $this->render('error-500');
    }
    public function actionFaq()
    {
        return $this->render('faq');
    }
    public function actionFormElements()
    {
        return $this->render('form-elements');
    }
    public function actionFormWizard()
    {
        return $this->render('form-wizard');
    }
    public function actionGallery()
    {
        return $this->render('gallery');
    }
    public function actionGrid()
    {
        return $this->render('grid');
    }
    public function actionInbox()
    {
        return $this->render('inbox');
    }
    public function actionInvoice()
    {
        return $this->render('invoice');
    }
    public function actionJqgrid()
    {
        return $this->render('jqgrid');
    }
    public function actionJqueryUi() {
        return $this->render('jquery-ui');
    }
    public function actionNestableList()
    {
        return $this->render('nestable-list');
    }
    public function actionPricing()
    {
        return $this->render('pricing');
    }
    public function actionProfile()
    {
        return $this->render('profile');
    } 
    public function actionTables()
    {
        return $this->render('tables');
    }
    public function actionTimeline()
    {
        return $this->render('timeline');
    }
    public function actionTreeview()
    {
        return $this->render('treeview');
    }
    public function actionTypography()
    {
        return $this->render('typography');
    }
    public function actionWidgets()
    {
        return $this->render('widgets');
    }
    public function actionWysiwyg()
    {
        return $this->render('wysiwyg');
    }
     public function actionTop()
    {
        return $this->render("top");
    }
     public function actionMain()
    {
        return $this->render('main');
    }

}
