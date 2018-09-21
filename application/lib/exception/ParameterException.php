<?php
/**
 * File name:ParameterException.php
 * Author:timber.chen
 * Version:1.0
 * Description:
 * History:
 * Created on 9/21/18 2:30 PM by timber.chen
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = 'invalid parameters';
    public $errorCode = 10000;
}