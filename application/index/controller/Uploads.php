<?php
namespace app\index\controller;
use think\Controller;
use think\File;
class Uploads extends Controller
{
    public function Index()
    {
        if (request()->isPost()) {
            $file = request() ->file('file');
            $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
        }
        return $this->fetch('uploads');
    }

}