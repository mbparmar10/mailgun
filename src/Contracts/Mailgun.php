<?php

namespace Mbparmar10\Mailgun\Contracts;

use Closure;

interface Mailgun
{

    /**
     * @param string|array $view
     * @param array        $data
     * @param \Closure     $callback
     *
     * @return \Mbparmar10\Mailgun\Http\Response
     */
    public function send($view, array $data, Closure $callback);

    /**
     * @param string   $message
     * @param \Closure $callback
     *
     * @return \Mbparmar10\Mailgun\Http\Response
     */
    public function raw($message, Closure $callback);

    /**
     * @param int|string|array $time
     * @param string|array     $view
     * @param array            $data
     * @param \Closure         $callback
     *
     * @return \Mbparmar10\Mailgun\Http\Response
     */
    public function later($time, $view, array $data, Closure $callback);
}
