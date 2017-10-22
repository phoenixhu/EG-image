<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User as UserModel;
class User extends Controller
{
    public function Register()
    {
        if (request()->isPost())
        {
            $reg = new UserModel();
            if ($reg->AddUser(input('post.')))
            {
                $this->success(input('username') . '注册成功!', 'login');
            }
            elseif ($reg->AddUser(input('post.')) == '0')
            {
                $this->error('验证码不正确!');

            } else {
                $this->error('用户注册失败!');
            }
        }
        return $this->fetch('register');
    }

    public function Login()
    {
        if (request()->isPost())
        {
            $login = new UserModel();
            if ($login->LoginUser(input('post.')))
            {
                $this->success('欢迎回来,'. input('username'), '/index/index');
            }
            elseif ($login->LoginUser(input('post.')) == '0')
            {
                $this->error('验证码不正确!');
            } else {
                $this->error('用户名或密码不正确!');
            }

        }
        return $this->fetch('login');
    }

}