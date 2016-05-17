<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "extension".
 *
 * @property integer $ext_id
 * @property string $ext_title
 * @property string $ext_content
 * @property string $ext_time
 * @property string $ext_url
 * @property string $ext_source
 */
class Extension extends \yii\db\ActiveRecord
{
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
            [['ext_title', 'ext_content', 'ext_url', 'ext_source'], 'string', 'max' => 255]
        ];
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
        ];
    }
}
