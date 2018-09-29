<?php

namespace app\api\model;

use think\Model;

class Image extends Model
{
    protected $table = 'image';
    protected $hidden = ['update_time', 'delete_time'];
    //
}
