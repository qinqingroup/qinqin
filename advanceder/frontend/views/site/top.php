<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="./Style/skin.css" />
	<link rel="shortcut icon" href="images/bitbug_favicon.ico"/>
    <script type="text/javascript">
        function logout() {
            if(window.confirm('您确定要退出吗？')) {
                top.location = '<?=Yii::$app->request->baseUrl?>/index.php?r=site/logins';
            }
        }       
    </script>
</head>
    <body>
        <table cellpadding="0" width="100%" height="64" background="./Images/top_top_bg.gif">
            <tr valign="top">
                <td width="50%"><a href="javascript:void(0)"><img style="border:none" src="./Images/logo.png" /></a></td>
                <td width="30%" style="padding-top:13px;font:15px Arial,SimSun,sans-serif;color:#FFF">管理员：<b>首望01</b> 您好，感谢登陆使用！</td>
                <td style="padding-top:10px;" align="center"><a href="file:///C:/Users/zzm/Desktop/%E6%96%B0%E9%97%BB/index.htm" target="_blank"><img style="border:none" src="./Images/index.gif" /></a></td>
                <td style="padding-top:10px;" align="center"><a href="javascript:void(0)"><img style="border:none" src="./Images/out.gif" onclick="logout();" /></td>
            </tr>
        </table>
    </body>
</html>