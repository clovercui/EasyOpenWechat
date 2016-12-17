<?php
namespace Chunhei2008\EasyOpenWechat\Contracts;
/**
 * AuthPushContract.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2016/12/16 09:25
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */
interface AuthorizeHandlerContract
{
    /**
     * handle component verify ticket
     *
     * @param $message
     *
     * @return mixed
     */

    public function componentVerifyTicket($message);

    /**
     * handle authorized
     *
     * @param $message
     *
     * @return mixed
     */
    public function authorized($message);

    /**
     * handle unauthorized
     *
     * @param $message
     *
     * @return mixed
     */
    public function unauthorized($message);

    /**
     *
     * handle updateauthorized
     *
     * @param $message
     *
     * @return mixed
     */

    public function updateauthorized($message);

}