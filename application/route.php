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

//Route::rule('hello', 'api/Test/hello', 'GET|POST', ['https'=>false]);
//Route::get('hello1/:id', 'api/test/hello1');
//Route::post('hello2/:id', 'api/test/hello2');
//Route::get('hello/:id', 'api/test/hello');
//Route::post('hello/:id', 'api/test/hello');
//
Route::post('hello_v1/:id', 'api/v1.Test/hello');


Route::get('banner/:id', 'api/v1.Banner/getBanner');