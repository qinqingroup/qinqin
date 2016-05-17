<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>天朝居 - 网站后台管理中心</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="瑞曼科技专业的网站后台管理系统" />
    <meta name="keywords" content="瑞曼,网站管理系统,企业网站" />
    <meta name="Author" content="RainMan" />
    <meta name="CopyRight" content="瑞曼科技" />
	<link rel="shortcut icon" href="images/bitbug_favicon.ico"/>
</head>
<frameset rows="64,*"  frameborder="no" border="0" framespacing="0">
    <!--头部-->
   <frame src="<?=Yii::$app->request->baseUrl?>/index.php?r=site/top" name="top" noresize="noresize" frameborder="0"  scrolling="no" marginwidth="0" marginheight="0" />
	
    <!--主体部分-->
    <frameset cols="185,*">
        <!--主体左部分-->
        <frame src="<?=Yii::$app->request->baseUrl?>/index.php?r=site/left" name="left" noresize="noresize" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" />
        <!--主体右部分-->
        <frame src="<?=Yii::$app->request->baseUrl?>/index.php?r=site/main" name="main" frameborder="0" scrolling="auto" marginwidth="0" marginheight="0" />
</frameset>
</html>