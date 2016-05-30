<!DOCTYPE html>
<html>
<head>
<title>天朝居首页</title>








@include('html.top')







<div class="time" style="margin-top:400px;   margin-left:5px">
	<div class="time-nav">
	<form action="{{url('House/index')}}" method="get">

	<input  style="padding:8px 12px"  type="text" name="searchcity" id="searchcityin" placeholder="请输入理想居住区域"  />

	<input   style="padding:8px 12px"    type="text" name="searchdate"   value="" placeholder="请输入入住退房时间段"/>	

        <input   style="padding:8px 12px; background: green; border:1px solid green; color:white;"  type="submit" id="tosearchlist" value="搜索" /></dd>
        </form>
</div>
</div>
                
                <!--推荐-->
                <div style="" class="suggest_results" id="suggest">
                	<ul></ul>
				</div>
		    	<!-- 城市列表弹框 -->
		    	<div class="select-hotcity" id="searchcitydiv" name="searchcitydiv">
	             	<div class="searh-recent clearfloat">
	                    	<p class="w100 clearfloat"><span class="searh-tit fl">最近搜索</span><span class="cleartrace fr" onclick="return Bind_Click(this);">清空历史</span></p>
	                        <ul id="searh-recent" class="clearfloat">
	                        </ul>
	                </div>
					<!--<ul class="select-citycon clearfix" id="cityselectulcity" name="cityselectul"></ul>-->	
	                <ul class="select-citycon clearfix" id="cityselectul" name="cityselectul"><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="北京" citypinyin="beijing">北京</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="上海" citypinyin="shanghai">上海</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="广州" citypinyin="guangzhou">广州</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="深圳" citypinyin="shenzhen">深圳</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="三亚" citypinyin="sanya">三亚</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="成都" citypinyin="chengdu">成都</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="武汉" citypinyin="wuhan">武汉</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="南京" citypinyin="nanjing">南京</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="重庆" citypinyin="chongqing">重庆</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="杭州" citypinyin="hangzhou">杭州</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="香港" citypinyin="xianggang">香港</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="厦门" citypinyin="xiamen">厦门</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="西安" citypinyin="xian">西安</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="长沙" citypinyin="changsha">长沙</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="苏州" citypinyin="suzhou">苏州</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="桂林.阳朔" citypinyin="guilin">桂林.阳朔</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="昆明" citypinyin="kunming">昆明</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="沈阳" citypinyin="shenyang">沈阳</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="天津" citypinyin="tianjin">天津</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="哈尔滨" citypinyin="haerbin">哈尔滨</a></li></ul>
					<div class="hotmore" >温馨提示：支持中文/拼音/简拼输入</div>
				</div>
		    </div>
		    <!-- <a href="/supportplan" target="_blank" class="ads-room ads-plan"><img src="http://staticnew.mayi.com/resourcesWeb/images/index/room_ad.png" /></a> -->
		</div>












<!--searchend-->


<!--content-->
<div class="content">
	<div class="content-grid">
		<div class="container">
			<h3>Most Popular</h3>
			<?php  foreach ($data as $key => $value) {   ?>
				<div class="col-md-4 box_2">
			     	 <a href="{{url('House/single')}}?id={{$value->house_id}}" class="mask">
			     	   	<img class="img-responsive zoom-img" src="{{asset('/images/pc4.jpg')}}" alt="">
			     	   	<span class="four"><?php echo $value->house_price ?>$</span>
			     	 </a>
			     	   <div class="most-1">
			     	   	 <h5><a href="{{url('House/single')}}?id={{$value->house_id}}">Contrary to popular</a></h5>
			     	    	<p><?php echo $value->house_name?></p>
			     	   </div>
			 </div>
			 <?php }?>
		</div>
	</div>

<!--project--->
	<div class="project">
		<div class="container">
			<h3>Top Home</h3>
				<div class="project-top">
				<?php foreach($datas as $k=>$v){?>
					<div class="col-md-3 project-grid">
						<div class="project-grid-top">
					<?php foreach($photo as $k1=>$v1){?>
							 <a href="{{url('House/single')}}?id={{$v->house_id}}" class="mask"><img src="{{$v1->photo_url}}" class="img-responsive zoom-img" alt=""/></a>
							 <?php }?>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 	<span class="star"> 4.5</span>
									 </div>
									 <div class="col-md4">
									 	<strong><?php echo $v->house_name?></strong>
									 	<small><?php echo $v->house_time?></small>
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <p><?php echo $v->house_address?></p>
								 <p class="cost">$65,000</p>
								 <a href="{{url('house/single')}}??id={{$v->house_id}}" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					<?php }?>
					
					<div class="clearfix"> </div>
				</div>				
		</div>
	</div>
<!--//project-->
		

<!--partners-->
	<div class="content-bottom1">
		<h3>Our Partners</h3>
	 		<div class="container">
				<ul>
					<li><a href="#"><img class="img-responsive" src="{{asset('/images/lg.png')}}" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="{{asset('/images/lg1.png')}}" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="{{asset('/images/lg2.png')}}" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="{{asset('/images/lg3.png')}}" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="{{asset('/images/lg4.png')}}" alt=""></a></li>
				<div class="clearfix"> </div>
				</ul>
				<ul>
					<li><a href="#"><img class="img-responsive" src="{{asset('/images/lg5.png')}}" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="{{asset('/images/lg6.png')}}" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="{{asset('/images/lg7.png')}}" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="{{asset('/images/lg8.png')}}" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="{{asset('/images/lg9.png')}}" alt=""></a></li>	
				<div class="clearfix"> </div>
				</ul>
			</div>
		</div>	
<!--//partners-->	










@include("html.footer")
</body>
</html>
<script>
    $(function(){
        $(".shaixuan-tj span.crumb-select-item").live('hover',function(event){
            if(event.type=='mouseenter'){ 
            $(this).addClass("crumb-select-itemon");
            }else{ 
            $(this).removeClass("crumb-select-itemon");
            } 
        });
        $(".shaixuan-tj span.crumb-select-item").live('click', function(event){
            event.preventDefault();
            $(this).remove();
            var TTR = $(this).find("em").text();
            $(".show-con a").each(function(){
                var TT = $(this).text();
                    THI = $(this);
                    THIPP = $(this).parents("dl");
                if(TTR==TT){
                    THI.removeClass("nzw12");
                    THIPP.css("display","block");
                }
            })
        });
        $(".show-con a").click(function(event){
            event.preventDefault();
                 THIP = $(this).parents("dl");
            if($(this).hasClass("nzw12")){
            }else{
                $(this).addClass("nzw12");
                var zhiclass = $(this).parents("dd").siblings("dt").find("a").text();
                    zhicon = $(this).text();
                    tianjaneir="<span class='crumb-select-item'><a href='/'><b>"+zhiclass+"</b><em>"+zhicon+"</em><i class='icon-remove'></i></a></span>"
                $(".shaixuan-tj").children().last().after(tianjaneir);
                THIP.css("display","none");
            }
        });
        $(".show-more").click(function(event){
            event.preventDefault();
            var ticon = $(this).find("i");
                tspan = $(this).find("span");
                if($(this).hasClass("zk")){
                    $(this).siblings(".show-con").css("height","30px");
                    ticon.removeClass("icon-angle-up");
                    ticon.addClass("icon-angle-down");
                    tspan.html("更多");
                    $(this).removeClass("zk")
                }else{
                    $(this).siblings(".show-con").css("height","auto");
                    ticon.removeClass("icon-angle-down");
                    ticon.addClass("icon-angle-up");
                    tspan.html("收起");
                    $(this).addClass("zk")
                }
        });
        $("#sxbtn").click(function(event){
            event.preventDefault();
            var xicon = $(this).find("span i");
                xspan = $(this).find("span em");
            if($(this).hasClass("zkon")){
                xspan.text("收起筛选");
                xicon.removeClass("icon-angle-down");
                xicon.addClass("icon-angle-up");
                $(".sxcon").slideDown();
                $(this).removeClass("zkon")
            }else{
                xspan.text("查看筛选");
                xicon.removeClass("icon-angle-up");
                xicon.addClass("icon-angle-down");
                $(".sxcon").slideUp();
                $(this).addClass("zkon")
            }
        })


    })
</script>