<?php
/**
 * File name:MissException.php
 * Author:timber.chen
 * Version:1.0
 * Description:
 * History:
 * Created on 9/21/18 11:15 AM by timber.chen
 */

namespace app\lib\exception;


/**
 * 404时抛出此异常
 */
class MissException extends BaseException
{
    public $code = 404;
    public $msg = 'global:your required resource are not found';
    public $errorCode = 10001;
}