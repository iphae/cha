<?php
/**
 * File name:BaseException.php
 * Author:timber.chen
 * Version:1.0
 * Description:
 * History:
 * Created on 9/21/18 11:11 AM by timber.chen
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    public $code = 400;
    public $msg = 'invalid parameters';
    public $errorCode = 999;

    public function __construct($params = [])
    {
        if (!is_array($params)) {
            return;
//            throw new Exception('参数必须是数组');
        }

        if (array_key_exists('code', $params)) {
            $this->code = $params['code'];
        }

        if (array_key_exists('errorCode', $params)) {
            $this->errorCode = $params['errorCode'];
        }

        if (array_key_exists('msg', $params)) {
            $this->msg = $params['msg'];
        }
    }
}