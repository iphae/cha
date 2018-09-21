<?php
/**
 * File name:ExceptionHandler.php
 * Author:timber.chen
 * Version:1.0
 * Description:
 * History:
 * Created on 9/21/18 11:14 AM by timber.chen
 */

namespace app\lib\exception;

use Exception;
use think\exception\Handle;
use think\Log;
use think\Request;

/**
 * 重写Handle的render方法，实现自定义异常消息
 * 这是全局异常处理，包括服务端异常和客户端异常
 */
class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;

    public function render(Exception $e)
    {
        if ($e instanceof BaseException) {
            //这是自定义的客户端异常，对客户端都有对应的协议及语义
            //服务端会给出精确的定义，精准地new出来
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        } else {
            //Config::get('app_debug')
            if (config('app_debug')) {
                return parent::render($e);
            } else {
                //服务端内部的异常，对客户端来说不需要精准的信息
                //所以传递给客户端全部统一为以下信息
                //对客户端并不需要传递原生的异常信息
                $this->code = 500;
                $this->msg = 'sorry，we make a mistake. (^o^)Y';
                $this->errorCode = 999;
                $this->recordErrorLog($e);
            }
        }

        //发送给客户端
        $request = Request::instance();
        $result = [
            'msg' => $this->msg,
            'error_code' => $this->errorCode,
            'request_url' => $request->url()
        ];
        return json($result, $this->code);
    }

    /**
     * 将异常写入日志
     */
    private function recordErrorLog(Exception $e) {
        Log::init([
            'type' => 'File',
            'path' => LOG_PATH,
            'level' => ['error']
        ]);
        Log::record($e->getMessage(), 'error');
    }
}