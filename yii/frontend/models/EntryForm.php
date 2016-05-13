<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model{
    public $name;
    public $pwd;

    public function rules()
    {
        return [
            [['name', 'pwd'], 'required'],
            ['pwd', 'pwd'],
        ];
    }
}

