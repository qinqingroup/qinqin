<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;


/**
 * This is the model class for table "extension".
 *
 * @property integer $ext_id
 * @property string $ext_title
 * @property string $ext_content
 * @property string $ext_time
 * @property string $ext_url
 * @property string $ext_source
 * @property string $ext_img
 */
class Extension extends \yii\db\ActiveRecord
{
	/**
	*定义全局图片变量
	*/
	public $ext_img;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'extension';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ext_time'], 'safe'],
            [['ext_title', 'ext_content', 'ext_url', 'ext_source'], 'string', 'max' => 255],
			[['ext_img'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],

        ];
    }

	/**
	*图片上传
	*/
	public function upload()
    {      
         return    $this->ext_img->saveAs('uploads/' . $this->ext_img->baseName . '.' . $this->ext_img->extension);           
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ext_id' => 'Ext ID',
            'ext_title' => 'Ext Title',
            'ext_content' => 'Ext Content',
            'ext_time' => 'Ext Time',
            'ext_url' => 'Ext Url',
            'ext_source' => 'Ext Source',
            'ext_img' => 'Ext Img',
        ];
    }
}
