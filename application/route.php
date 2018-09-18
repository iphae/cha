<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

//Route::rule('hello', 'sample/Test/hello', 'GET|POST', ['https'=>false]);
Route::get('hello1/:id', 'sample/test/hello1');
Route::post('hello2/:id', 'sample/test/hello2');
Route::get('hello/:id', 'sample/test/hello');
Route::post('hello/:id', 'sample/test/hello');
