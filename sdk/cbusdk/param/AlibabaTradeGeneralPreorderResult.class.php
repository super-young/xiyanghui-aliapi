<?php


/**
 * Class AlibabaTradeGeneralPreorderResult
 */
class AlibabaTradeGeneralPreorderResult
{

    /**
     * @var AlibabatradeOrderMutilViewResult
     */
    private $result;

    /**
     * @return \AlibabatradeOrderMutilViewResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * 设置多订单展示处理结果
     *
     * @param AlibabatradeOrderMutilViewResult $result
     * 此参数必填     */
    public function setResult(AlibabatradeOrderMutilViewResult $result)
    {
        $this->result = $result;
    }


    /**
     * @var
     */
    private $errorCode;

    /**
     * @return
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * 设置
     *
     * @param String $errorCode
     * 此参数必填     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }


    /**
     * @var
     */
    private $errorMessage;

    /**
     * @return
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * 设置
     *
     * @param String $errorMessage
     * 此参数必填     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }


    /**
     * @var
     */
    private $stdResult;

    /**
     * @param $stdResult
     */
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (isset($this->stdResult->{"result"})) {
            $resultResult = $this->stdResult->{"result"};
            $this->result = new AlibabatradeOrderMutilViewResult();
            $this->result->setStdResult($resultResult);
        }
        if (isset($this->stdResult->{"errorCode"})) {
            $this->errorCode = $this->stdResult->{"errorCode"};
        }
        if (isset($this->stdResult->{"errorMessage"})) {
            $this->errorMessage = $this->stdResult->{"errorMessage"};
        }
    }

    /**
     * @var
     */
    private $arrayResult;

    /**
     * @param $arrayResult
     */
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = (array)$arrayResult;
        if (array_key_exists("result", $this->arrayResult)) {
            $resultResult = $arrayResult['result'];
            $this->result = new AlibabatradeOrderMutilViewResult();
            $this->result->setStdResult($resultResult);
        }
        if (array_key_exists("errorCode", $this->arrayResult)) {
            $this->errorCode = $arrayResult['errorCode'];
        }
        if (array_key_exists("errorMessage", $this->arrayResult)) {
            $this->errorMessage = $arrayResult['errorMessage'];
        }
    }

}
