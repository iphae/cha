<?php
/**
 * Banner.php
 * Description:
 * Created on 9/20/18 9:45 AM
 * Create by timber.chen
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\MissException;
use think\Exception;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @param $id banner的id号
     * @throws \think\Exception
     */
    public function getBanner($id) {
        (new IDMustBePostiveInt())->goCheck();

        $banner = BannerModel::getBannerById($id);
        if (!$banner) {
            throw new MissException();
        }
        return json($banner);
    }
}