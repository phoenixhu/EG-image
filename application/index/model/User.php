<?php
namespace app\index\model;

use think\captcha\Captcha;
use think\Model;
class User extends Model
{
    public function AddUser($data)
    {
        if ($data['password'])
        {
            $data['password'] = md5($data['password']);
        }

        $captcha = new Captcha();
        if (!$captcha->check($data['code']))
        {
            return 0; // 验证码不正确
        }

        if ($this->allowField(['username', 'password', 'email'])->save($data))
        {
            return true; // 注册成功
        } else {
            return false; // 注册失败
        }
    }

    public function LoginUser($data)
    {
        $captcha = new Captcha();
        if (!$captcha->check($data['code']))
        {
            return 0; // 验证码不正确
        }
        $user = $this->where('username', '=', $data['username'])->find();
        if ($user['password'] == md5($data['password']))
        {
            return true;
        } else {
            return false;
        }
    }
}