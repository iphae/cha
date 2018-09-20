<?php
/**
 * Banner.php
 * Description:
 * Created on 9/20/18 9:45 AM
 * Create by timber.chen
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;

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
        $validate = new IDMustBePostiveInt();
        $validate->goCheck();
    }
}