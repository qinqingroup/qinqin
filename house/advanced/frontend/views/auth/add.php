<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?= $form->field( $model, 'verifyCode' )->widget( yii\captcha\Captcha::className() ) ?>
</body>
</html>