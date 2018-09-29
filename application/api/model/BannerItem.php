<?php

namespace app\api\model;

use think\Model;

class BannerItem extends Model
{
    protected $table = 'banner_item';
    protected $hidden = ['delete_time', 'update_time', 'id', 'img_id', 'banner_id'];

    public function img() {
        return self::belongsTo('Image', 'img_id', 'id');
    }
    //
}
