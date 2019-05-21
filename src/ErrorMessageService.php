<?php
namespace Ptdot\ErrorMessage;

class ErrorMessageService
{
    /**
     * @var bool
     */
    protected $traceAsString = false;

    /**
     * @return ErrorMessageService
     */
    public function traceAsString() : ErrorMessageService
    {
        $this->traceAsString = true;
        return $this;
    }

    /**
     * @param \Exception $exception
     * @param string|null $overrideMessage
     * @return string
     */
    public function displayExceptionMessage(\Exception $exception, string $overrideMessage = null) : string
    {
        $defaultMessage = config('errormessage.default');

        if ($overrideMessage) {
            return $overrideMessage;
        }
        if (config('app.debug')) {
            if ($this->traceAsString) {
                return $exception->getTraceAsString();
            }
            return $exception->getMessage();
        }
        return $defaultMessage;
    }
}
