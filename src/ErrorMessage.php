<?php
namespace Ptdot\ErrorMessage;

use Illuminate\Support\Facades\Facade;

class ErrorMessage extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ErrorMessageService';
    }
}
