<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="shortcut icon" href="<?= \Yii::$app->request->baseUrl?>/assets/images/bitbug_favicon.ico"/>
</head>
<body>
	
<?= $form->field( $model, 'verifyCode' )->widget( yii\captcha\Captcha::className() ) ?>
</body>
</html>