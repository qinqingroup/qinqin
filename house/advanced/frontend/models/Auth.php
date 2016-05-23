<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "auth".
 *
 * @property integer $auth_id
 * @property string $auth_name
 * @property integer $u_id
 * @property string $auth_state
 * @property integer $auth_people_id
 */
class Auth extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auth';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_id', 'auth_people_id'], 'integer'],
            [['auth_name', 'auth_state'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'auth_id' => 'Auth ID',
            'auth_name' => 'Auth Name',
            'u_id' => 'U ID',
            'auth_state' => 'Auth State',
            'auth_people_id' => 'Auth People ID',
        ];
    }
}
