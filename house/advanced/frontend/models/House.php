<?php

namespace frontend\models;

use Yii;


/**
 * This is the model class for table "house".
 *
 * @property integer $house_id
 * @property string $house_name
 * @property integer $u_id
 * @property integer $class_id
 * @property string $house_auth
 * @property string $is_shelves
 * @property string $house_desc
 * @property string $house_price
 * @property string $house_address
 * @property string $house_apartment
 * @property integer $eval_id
 * @property integer $house_photo_id
 * @property string $house_time
 * @property string $house_state
 * @property string $house_boutique
 * @property string $house_activity
 * @property string $house_heat
 */
class House extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'house';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_id', 'class_id', 'eval_id', 'house_photo_id'], 'integer'],
            [['house_price'], 'number'],
            [['house_time'], 'safe'],
            [['house_name', 'house_auth', 'is_shelves', 'house_desc', 'house_address', 'house_apartment', 'house_state', 'house_boutique', 'house_activity', 'house_heat'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'house_id' => 'House ID',
            'house_name' => 'House Name',
            'u_id' => 'U ID',
            'class_id' => 'Class ID',
            'house_auth' => 'House Auth',
            'is_shelves' => 'Is Shelves',
            'house_desc' => 'House Desc',
            'house_price' => 'House Price',
            'house_address' => 'House Address',
            'house_apartment' => 'House Apartment',
            'eval_id' => 'Eval ID',
            'house_photo_id' => 'House Photo ID',
            'house_time' => 'House Time',
            'house_state' => 'House State',
            'house_boutique' => 'House Boutique',
            'house_activity' => 'House Activity',
            'house_heat' => 'House Heat',
        ];
    }
}
