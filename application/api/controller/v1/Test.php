<?php
/**
 * Test.php
 * Description:
 * Created on 9/20/18 9:29 AM
 * Create by timber.chen
 */

namespace app\api\controller\v1;


class Test
{
    public function hello($id, $name, $age) {
        $all = input('param.');
        var_dump($all);
    }
}