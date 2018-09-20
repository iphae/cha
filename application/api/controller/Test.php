<?php
/**
 * Created by PhpStorm.
 * User: swd1
 * Date: 9/17/18
 * Time: 5:44 PM
 */

namespace app\sample\controller;


use think\Request;

class Test
{
    public function hello1($id) {
        echo $id;
    }

    public function hello2(Request $request) {
//        $all = input('param.');
//        var_dump($all);
        $all = $request->param();
        var_dump($all);
    }

    public function hello($id, $name, $age) {
        echo $id;
        echo '|';
        echo $name;
        echo '|';
        echo $age;
    }
}