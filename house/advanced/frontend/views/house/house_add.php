<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>房源信息管理</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="<?=Yii::$app->request->baseUrl?>/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/chosen.css" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/datepicker.css" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/colorpicker.css" />

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?=Yii::$app->request->baseUrl?>/assets/css/ace-skins.min.css" />
		<link rel="shortcut icon" href="<?= \Yii::$app->request->baseUrl?>/assets/images/bitbug_favicon.ico"/>
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="<?=Yii::$app->request->baseUrl?>/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		
		<!-- video styles -->
		
		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		  <?= $this->render('../index/top')?>
		  <?= $this->render('../index/main')?>
					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">房源信息管理</a>
							</li>

							<li>
								<a href="#">添加</a>
							</li>
							<li class="active">添加</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								信息管理
								<small>
									<i class="icon-double-angle-right"></i>
									添加
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form" method='post' action='index.php?r=house/form' enctype="multipart/form-data">
								<?php $form = ActiveForm::begin([
										       'method'=>'post',
										       'action'=>['house/form'],
										       'options'=>['enctype'=>'multipart/form-data']    
										    ])?>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋名称： </label>

										<div class="col-sm-5">
											<input type="text" id="form-field-1" placeholder="房屋名称" class="col-xs-10 col-sm-5"  name='house_name'/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋类型： </label>

										<div class="col-sm-2">
											<select class="form-control" id="form-field-select-1" name='class_id'>
									             <option >请选择...</option>
									               <?php foreach($arr as $k=>$v){?>
                                                      <option value="<?php echo $v['class_id']?>"><?php echo $v['class_type']?></option>
                                                   <?php }?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">是否上架： </label>

										<div class="col-sm-5">
											<label>
														<input name="form-field-radio" type="radio" class="ace" name='is_shelves' value='1'/>
														<span class="lbl">  是</span>
														<input name="form-field-radio" type="radio" class="ace" name='is_shelves' value='0'/>
														<span class="lbl">  否</span>
										   </label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">上传图片： </label>

										<div class="col-sm-5">
                                             <?= $form->field($model, 'photo_url[]')->fileInput(['multiple' => true]) ?>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">图片名称： </label>

										<div class="col-sm-5">
											<input type="text" id="form-field-1" placeholder="图片名称" class="col-xs-10 col-sm-5"  name='photo_title'/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">是否显示： </label>

										<div class="col-sm-5">
											<label>
														<input  type="radio" class="ace"  name='is_display' value='1'/>
														<span class="lbl">  是</span>
														<input  type="radio" class="ace"  name='is_display' value='0'/>
														<span class="lbl">  否</span>
										   </label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">是否启用轮播： </label>

										<div class="col-sm-5">
                                           <label>
														<input  type="radio" class="ace"  name='is_lunbo' value='1'/>
														<span class="lbl">  是</span>
														<input  type="radio" class="ace"  name='is_lunbo' value='0'/>
														<span class="lbl">  否</span>
										   </label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋安全： </label>

										<div class="col-sm-5">
											<input type="text" id="form-field-1" placeholder="房屋安全" class="col-xs-10 col-sm-5" name="house_auth" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋描述： </label>

										<div class="col-sm-5">
											<textarea class="form-control" id="form-field-8" placeholder="房屋描述 " name='house_desc'></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋价格： </label>

										<div class="col-sm-5">
											<input type="text" id="form-field-1" placeholder="房屋价格" class="col-xs-10 col-sm-5" name='house_price'/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋地址： </label>

										<div class="col-sm-5">
											<input type="text" id="form-field-1" placeholder="房屋地址" class="col-xs-10 col-sm-5" name='house_address'/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋户型： </label>

										<div class="col-sm-5">
											<input type="text" id="form-field-1" placeholder="房屋户型" class="col-xs-10 col-sm-5"  name='house_apartment'/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋状态： </label>

										<div class="col-sm-5">
											<input type="text" id="form-field-1" placeholder="房屋状态" class="col-xs-10 col-sm-5" name='house_state'/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">房屋属性： </label>

										<div class="col-sm-5">
					
													<label>
														<input name="house_boutique" type="checkbox" class="ace"  value='1'/>
														<span class="lbl" >精品</span>
													</label>
													<label>
														<input name="house_activity" type="checkbox" class="ace" value='1'/>
														<span class="lbl" >活动</span>
													</label>
													<label>
														<input name="house_heat" type="checkbox" class="ace"  value='1' />
														<span class="lbl" >热品</span>
													</label>
													
										</div>
									</div>
								   <div class="form-group">
							  		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">上传视频： </label>	    		
                                      
                                       <div class="col-sm-5">  
										<table width="90%" id="video-table" >

		        <tr>
		
		        <td> 
		
		            <div  id="drop_area" style="border:3px dashed silver;width:200px; height:200px">  
		
		                将视频拖拽到此  
		
		            </div>  
		
		            <input type="hidden" id="video_val" name="house_video">
		
		            <progress value="0" max="10" id="prouploadfile"></progress>  
		
		            <span id="persent">0%</span>  
		
		            <br />  
		
		            <!--<button onclick="xhr2()">ajax上传</button>-->     
		
		            <input type="button" onclick="stopup()" id="stop" value="上传">     
		
		            <script>  
		
		            //拖拽上传开始  
		
		            //-1.禁止浏览器打开文件行为  
		
		            document.addEventListener("drop",function(e){  //拖离   
		    
		                e.preventDefault();      
		
		            })  
		
		            document.addEventListener("dragleave",function(e){  //拖后放   
		
		                e.preventDefault();      
		
		            })  
		
		            document.addEventListener("dragenter",function(e){  //拖进  
		
		                e.preventDefault();      
		
		            })  
		
		            document.addEventListener("dragover",function(e){  //拖来拖去    
		
		                e.preventDefault();      
		
		            })  
		
		            //上传进度  
		
		            var pro = document.getElementById('prouploadfile');  
		
		            var persent = document.getElementById('persent');  
		
		            function clearpro(){  
		
		                pro.value=0;  
		
		                persent.innerHTML="0%";  
		
		            }  
		
		              
		
		            //2.拖拽  
		
		            var stopbutton = document.getElementById('stop');  
		
		            var resultfile="";
		
		            var box = document.getElementById('drop_area'); //拖拽区域     
		
		            box.addEventListener("drop",function(e){           
		
		                var fileList = e.dataTransfer.files; //获取文件对象    
		
		                console.log(fileList)
		
		                //检测是否是拖拽文件到页面的操作            
		
		                if(fileList.length == 0){                
		
		                    return false;            
		
		                }
		
		 //判断文件大小
		
		                var num=1048576;
		
		                var cha=Math.ceil(fileList[0].size)/num;
		
		                if(cha>200)
		
		                {
		
		                    alert(Math.ceil(fileList[0].size/num));
		
		                    var str="<font color='red'>请选取文件在200M以下的视频</font>";
		
		                    document.getElementById('drop_area').innerHTML=str;
		
		                    return false;
		
		                }           
		
		                //拖拉图片到浏览器，可以实现预览功能    
		
		                //规定视频格式  
		
		                //in_array  
		
		                Array.prototype.S=String.fromCharCode(2);  
		
		                Array.prototype.in_array=function(e){  
		
		                    var r=new RegExp(this.S+e+this.S);  
		
		                    return (r.test(this.S+this.join(this.S)+this.S));  
		
		                };  
		
		                var video_type=["video/mp4","video/ogg"];  
		
		                  
		
		                //创建一个url连接,供src属性引用  
		
		                var fileurl = window.URL.createObjectURL(fileList[0]);                
		                    
		                if(fileList[0].type.indexOf('image') === 0){  //如果是图片  
		
		                    var str="<img width='200px' height='200px' src='"+fileurl+"'>";  
		
		                    document.getElementById('drop_area').innerHTML=str;                   
		
		                }else if(video_type.in_array(fileList[0].type)){   //如果是规定格式内的视频                    
		
		                    var str="<video width='200px' height='200px' controls='controls' src='"+fileurl+"'></video>";  
		                   
		                    document.getElementById('drop_area').innerHTML=str;        
		
		                }else{ //其他格式，输出文件名  
		
		                    //alert("不预览");  
		
		                    var str="文件名字:"+fileList[0].name;  
		
		                    document.getElementById('drop_area').innerHTML=str;      
		
		                }         
		
		                resultfile = fileList[0];     
		
		                console.log(resultfile);      
		
		                  
		
		                //切片计算  
		
		                filesize= resultfile.size;  
		
		                setsize=500*1024;  
		
		                filecount = filesize/setsize;  
		
		                //console.log(filecount)  
		
		                //定义进度条  
		
		                pro.max=parseInt(Math.ceil(filecount));   
		
		                i =getCookie(resultfile.name);  
		
		                i = (i!=null && i!="")?parseInt(i):0;
		
		                if(Math.floor(filecount)<i){  
		
		                    alert("已经完成");  
		
		                    pro.value=i+1;  
		
		                    persent.innerHTML="100%";  
		
		                }else{  
		
		                    alert('可以上传');  
		
		                    pro.value=i;  
		
		                    p=parseInt(i)*100/Math.ceil(filecount)  
		
		                    persent.innerHTML=parseInt(p)+"%";  
		
		                }  
		
		            },false);    
		
		            //3.ajax上传  
		
		            var stop=1;  
		
		            function xhr2(){  
		
		                if(stop==1){  
		
		                    return false;  
		
		                }  
		
		                if(resultfile==""){  
		
		                    alert("请选择文件")  
		
		                    return false;  
		
		                }  
		
		                i=getCookie(resultfile.name);  

		                console.log(i)  
		
		                i = (i!=null && i!="")?parseInt(i):0  
		
		                  
		
		                if(Math.floor(filecount)<parseInt(i)){  
		
		                    alert("已经完成");
		
		                    return false;  
		
		                }else{  
		
		                    //alert(i)  
		
		                }  
		
		                var xhr = new XMLHttpRequest();//第一步  
		
		                //新建一个FormData对象  
		
		                var formData = new FormData(); //++++++++++  
		
		                //追加文件数据  
		
		                //改变进度条  
		
		                pro.value=i+1;  
		
		                p=parseInt(i+1)*100/Math.ceil(filecount)  
		
		                persent.innerHTML=parseInt(p)+"%";  
		
		                //进度条  
		
		                if((filesize-i*setsize)>setsize){  
		
		                    blobfile= resultfile.slice(i*setsize,(i+1)*setsize);  
		
		                }else{  
		
		                    blobfile= resultfile.slice(i*setsize,filesize);  
		
		                    formData.append('lastone', Math.floor(filecount));  
		
		                }  
		
		                    formData.append('file', blobfile); 
		
// 		                    formData.append('house_id', "{$house.house_id}"); 
		
		                    //return false;  
		                               
		                   formData.append('blobname', i); //++++++++++  
                            
		                    　                 　     formData.append('filename', resultfile.name); //++++++++++  
  
		                    //post方式  
		
		                    xhr.open('POST', 'index.php?r=house/form'); //第二步骤  
		
		                    //发送请求  
		                    xhr.send(formData);  //第三步骤  
		                    
		                    stopbutton.innerHTML = "暂停"  
		
		                    //ajax返回  
		
		                    xhr.onreadystatechange = function(){ //第四步  
		
		                　　　　if ( xhr.readyState == 4 && xhr.status == 200 ) {  
		
		                　　　　　　console.log( xhr.responseText );  
		
		                            if(xhr.responseText=="none"){  
		
		                                alert("视频格式不支持");
		
		                                persent.innerHTML="0%";
		
		                                document.getElementById("drop_area").innerHTML="支持视频格式为'.flv' ,'.rmvb' , '.mp4'";
		
		                                pro.value=0;
		
		                                return false;
		
		                            }else if(i<filecount){
		
		                                xhr2();
		
		                            }else{  
		
		                                alert(xhr.responseText);
		
		                                clearCookie(resultfile.name);
		
		                                document.getElementById("video_val").value=xhr.responseText;  
		
		                                //location.href="文件";
		
		                            }         
		
		                　　　　}  
		
		                　　};  
		
		                    //设置超时时间  
		
		                    xhr.timeout = 20000;  
		
		                    xhr.ontimeout = function(event){  
		
		                　　　　alert('请求超时，网络拥堵！低于25K/s');  
		
		                　　}           
		
		                    i=i+1;  
		
		                    setCookie(resultfile.name,i,365)  
		
		            }  
		
		            //设置cookie  
		
		            function setCookie(c_name,value,expiredays)  
		
		            {  
		
		                var exdate=new Date()  
		
		                exdate.setDate(exdate.getDate()+expiredays)  
		
		                document.cookie=c_name+ "=" +escape(value)+  
		
		                ((expiredays==null) ? "" : ";expires="+exdate.toGMTString()+";path=/")  
		
		            }
		
		            //清除cookie  
		
		            function clearCookie(name) {  
		
		                setCookie(name, "", -1);  
		
		            }
		
		            //获取cookie  
		
		            function getCookie(c_name)  
		
		            {  
		
		            if (document.cookie.length>0)  
		
		              {  
		
		              c_start=document.cookie.indexOf(c_name + "=")  
		
		              if (c_start!=-1)  
		
		                {   
		
		                c_start=c_start + c_name.length+1   
		
		                c_end=document.cookie.indexOf(";",c_start)  
		
		                if (c_end==-1) c_end=document.cookie.length  
		
		                return unescape(document.cookie.substring(c_start,c_end))  
		
		                }   
		
		              }  
		
		            return ""  
		
		            }  
		
		            function stopup(){  
		
		                if(stop==1){  
		
		                    stop = 0  
		                      
		                    xhr2();  
		
		                }else{  
		
		                    stop = 1  
		
		                    stopbutton.innerHTML = "继续"  
		
		                }  
		
		            }  
		
		            </script>
		
		            </td>
		
		            </tr>
		
		            </table>

											                                      
			 					      </div>
			 					   </div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input class="btn btn-info" type="submit" value='提交'>

											&nbsp; &nbsp; &nbsp;
											<input class="btn" type="reset" value='重置'>
										</div>
									</div>
						     <?php ActiveForm::end()?>
                         </form>
								

		<script src="<?= Yii::$app->request->baseUrl?>/assets/js/jquery-2.0.3.min.js>"></script>

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?=Yii::$app->request->baseUrl?>/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>


		<script src="<?=Yii::$app->request->baseUrl?>/assets/js/ace.min.js"></script>

</body>
</html>
