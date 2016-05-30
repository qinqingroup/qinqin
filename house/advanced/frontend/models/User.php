<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $u_id
 * @property string $u_name
 * @property string $u_pwd
 * @property string $u_photo
 * @property string $u_lock
 * @property integer $u_auth_id
 * @property string $u_ressadd
 * @property integer $u_area_id
 * @property string $u_time
 * @property string $u_email
 * @property string $u_phone
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_auth_id', 'u_area_id'], 'integer'],
            [['u_name', 'u_pwd', 'u_photo', 'u_lock', 'u_ressadd', 'u_time', 'u_email', 'u_phone'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'u_id' => 'U ID',
            'u_name' => 'U Name',
            'u_pwd' => 'U Pwd',
            'u_photo' => 'U Photo',
            'u_lock' => 'U Lock',
            'u_auth_id' => 'U Auth ID',
            'u_ressadd' => 'U Ressadd',
            'u_area_id' => 'U Area ID',
            'u_time' => 'U Time',
            'u_email' => 'U Email',
            'u_phone' => 'U Phone',
        ];
    }
}
