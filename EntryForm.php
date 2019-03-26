<?php

namespace frontend\models;


use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;

    public function rules()
    {
        return[
            [['name','email','message'],'required'],
            ['email','email'],
            [['name'],'string','max'=>50],
            [['email'],'string','max'=>50],
            [['message'],'string','max'=>250],
            ];
    }
}
?>


