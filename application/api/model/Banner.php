<?php
/**
 * File name:Banner.php
 * Author:timber.chen
 * Version:1.0
 * Description:
 * History:
 * Created on 9/21/18 11:42 AM by timber.chen
 */

namespace app\api\model;


use think\Db;
use think\Model;

class Banner extends Model
{
    protected $table = 'banner';
    protected $hidden = ['delete_time', 'update_time'];

    public function items() {
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }
    /**
     * @param $id
     * @return string
     */
    public static function getBannerById($id) {
//        $result =
//            Db::query('select * from banner_item where banner_id=?', [$id]);
        $result = self::with(['items', 'items.img'])->find($id);

        return $result;
    }
}