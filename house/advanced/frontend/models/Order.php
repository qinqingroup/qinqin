<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $order_id
 * @property integer $u_id
 * @property string $u_boss_id
 * @property integer $house_id
 * @property string $order_time
 * @property string $order_state
 * @property string $order_price
 * @property string $order_deposit
 * @property string $order_out_time
 * @property integer $order_number
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_id', 'house_id', 'order_number'], 'integer'],
            [['order_time', 'order_out_time'], 'safe'],
            [['order_price'], 'number'],
            [['u_boss_id', 'order_state'], 'string', 'max' => 255],
            [['order_deposit'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'u_id' => 'U ID',
            'u_boss_id' => 'U Boss ID',
            'house_id' => 'House ID',
            'order_time' => 'Order Time',
            'order_state' => 'Order State',
            'order_price' => 'Order Price',
            'order_deposit' => 'Order Deposit',
            'order_out_time' => 'Order Out Time',
            'order_number' => 'Order Number',
        ];
    }
}
