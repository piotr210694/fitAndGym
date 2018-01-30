<?php
namespace app\models;

use Yii;
use yii\base\Model;

use app\models\User;


class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;

    public function rules()
    {
        return [
           ['username', 'filter', 'filter' => 'trim'],
           ['username', 'required'],
           ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Ten login jest już zajęty!'],
           ['username', 'string', 'max' => 15],

           ['email', 'filter', 'filter' => 'trim'],
           ['email', 'required'],
           ['email', 'email'],
           ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Ten adres e-mail jest już zajęty!'],

           ['password', 'required'],
           ['password', 'string', 'min' => 5, 'max' => 50],
        ];
    }

    public function signup()
    {
        if ($this->validate()) {
            $user = new User();

            $user->username = $this->username;
            $user->email = $this->email;
            $user->generateAuthKey();
            $user->setPassword($this->password);

            return  $user->save() ? $user : null;;
        }
        
    }

}