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

class Banner
{
    /**
     * @param $id
     * @return string
     */
    public static function getBannerById($id) {
        $result =
            Db::query('select * from banner_item where banner_id=?', [$id]);

        return $result;
    }
}