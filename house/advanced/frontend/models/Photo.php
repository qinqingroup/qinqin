<?php
namespace frontend\models;

use yii\base\Model;
use yii\web\UploadedFile;

class Photo extends Model
{
	public $photo_url;
	public function rules()
	{
		return [
		[['photo_url'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 5],
		];
	}
}