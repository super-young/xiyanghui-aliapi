<?php


class AlibabaopenplatformtraderesultTradeCreateGeneralOrderResult extends SDKDomain
{


    private $success;

    /**
     * @return 是否成功
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * 设置是否成功
     *
     * @param Boolean $success
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }


    private $totalSuccessAmount;

    /**
     * @return 下单成功的订单总金额
     */
    public function getTotalSuccessAmount()
    {
        return $this->totalSuccessAmount;
    }

    /**
     * 设置下单成功的订单总金额
     *
     * @param Long $totalSuccessAmount
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setTotalSuccessAmount($totalSuccessAmount)
    {
        $this->totalSuccessAmount = $totalSuccessAmount;
    }


    private $commitResults;

    /**
     * @return AlibabaopenplatformtradeBizOrderCommitResult
     */
    public function getCommitResults()
    {
        return $this->commitResults;
    }

    /**
     * 设置多订单提交后的处理结果.
     *
     * @param array include @see AlibabaopenplatformtradeBizOrderCommitResult[] $commitResults
     *              参数示例：<pre></pre>
     *              此参数必填     */
    public function setCommitResults(AlibabaopenplatformtradeBizOrderCommitResult $commitResults)
    {
        $this->commitResults = $commitResults;
    }


    private $mutilOrderPublicData;

    /**
     * @return 多订单共有数据属性
     */
    public function getMutilOrderPublicData()
    {
        return $this->mutilOrderPublicData;
    }

    /**
     * 设置多订单共有数据属性
     *
     * @param AlibabaopenplatformtradeBizMutilOrderPublicData $mutilOrderPublicData
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMutilOrderPublicData(AlibabaopenplatformtradeBizMutilOrderPublicData $mutilOrderPublicData)
    {
        $this->mutilOrderPublicData = $mutilOrderPublicData;
    }


    private $resultCode;

    /**
     * @return 错误码
     */
    public function getResultCode()
    {
        return $this->resultCode;
    }

    /**
     * 设置错误码
     *
     * @param AlibabaopenplatformtradeResultCodeDef $resultCode
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setResultCode(AlibabaopenplatformtradeResultCodeDef $resultCode)
    {
        $this->resultCode = $resultCode;
    }


    private $failOrderMap;

    /**
     * @return 处理失败的订单块.
     */
    public function getFailOrderMap()
    {
        return $this->failOrderMap;
    }

    /**
     * 设置处理失败的订单块.
     *
     * @param array include @see AlibabaopenplatformtradeKeyValuePairBizOrderCommitResult[] $failOrderMap
     *              参数示例：<pre></pre>
     *              此参数必填     */
    public function setFailOrderMap(AlibabaopenplatformtradeKeyValuePairBizOrderCommitResult $failOrderMap)
    {
        $this->failOrderMap = $failOrderMap;
    }


    private $successOrderMap;

    /**
     * @return AlibabaopenplatformtradeKeyValuePairBizOrderCommitResult.
     */
    public function getSuccessOrderMap()
    {
        return $this->successOrderMap;
    }

    /**
     * 设置处理成功的订单块.
     *
     * @param array include @see AlibabaopenplatformtradeKeyValuePairBizOrderCommitResult[] $successOrderMap
     *              参数示例：<pre></pre>
     *              此参数必填     */
    public function setSuccessOrderMap(AlibabaopenplatformtradeKeyValuePairBizOrderCommitResult $successOrderMap)
    {
        $this->successOrderMap = $successOrderMap;
    }


    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (isset($this->stdResult->{"success"})) {
            $this->success = $this->stdResult->{"success"};
        }
        if (isset($this->stdResult->{"totalSuccessAmount"})) {
            $this->totalSuccessAmount = $this->stdResult->{"totalSuccessAmount"};
        }
        if (isset($this->stdResult->{"commitResults"})) {
            $commitResultsResult = $this->stdResult->{"commitResults"};
            $object = json_decode(json_encode($commitResultsResult), true);
            $this->commitResults = array();
            for ($i = 0; $i < count($object); $i++) {
                $arrayobject = new ArrayObject ($object [$i]);
                $AlibabaopenplatformtradeBizOrderCommitResultResult = new AlibabaopenplatformtradeBizOrderCommitResult();
                $AlibabaopenplatformtradeBizOrderCommitResultResult->setArrayResult($arrayobject);
                $this->commitResults [$i] = $AlibabaopenplatformtradeBizOrderCommitResultResult;
            }
        }
        if (isset($this->stdResult->{"mutilOrderPublicData"})) {
            $mutilOrderPublicDataResult = $this->stdResult->{"mutilOrderPublicData"};
            $this->mutilOrderPublicData = new AlibabaopenplatformtradeBizMutilOrderPublicData();
            $this->mutilOrderPublicData->setStdResult($mutilOrderPublicDataResult);
        }
        if (isset($this->stdResult->{"resultCode"})) {
            $resultCodeResult = $this->stdResult->{"resultCode"};
            $this->resultCode = new AlibabaopenplatformtradeResultCodeDef();
            $this->resultCode->setStdResult($resultCodeResult);
        }
        if (isset($this->stdResult->{"failOrderMap"})) {
            $failOrderMapResult = $this->stdResult->{"failOrderMap"};
            $object = json_decode(json_encode($failOrderMapResult), true);
            $this->failOrderMap = array();
            for ($i = 0; $i < count($object); $i++) {
                $arrayobject = new ArrayObject ($object [$i]);
                $AlibabaopenplatformtradeKeyValuePairBizOrderCommitResultResult = new AlibabaopenplatformtradeKeyValuePairBizOrderCommitResult();
                $AlibabaopenplatformtradeKeyValuePairBizOrderCommitResultResult->setArrayResult($arrayobject);
                $this->failOrderMap [$i] = $AlibabaopenplatformtradeKeyValuePairBizOrderCommitResultResult;
            }
        }
        if (isset($this->stdResult->{"successOrderMap"})) {
            $successOrderMapResult = $this->stdResult->{"successOrderMap"};
            $object = json_decode(json_encode($successOrderMapResult), true);
            $this->successOrderMap = array();
            for ($i = 0; $i < count($object); $i++) {
                $arrayobject = new ArrayObject ($object [$i]);
                $AlibabaopenplatformtradeKeyValuePairBizOrderCommitResultResult = new AlibabaopenplatformtradeKeyValuePairBizOrderCommitResult();
                $AlibabaopenplatformtradeKeyValuePairBizOrderCommitResultResult->setArrayResult($arrayobject);
                $this->successOrderMap [$i] = $AlibabaopenplatformtradeKeyValuePairBizOrderCommitResultResult;
            }
        }
    }

    private $arrayResult;

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("success", $this->arrayResult)) {
            $this->success = $arrayResult['success'];
        }
        if (array_key_exists("totalSuccessAmount", $this->arrayResult)) {
            $this->totalSuccessAmount = $arrayResult['totalSuccessAmount'];
        }
        if (array_key_exists("commitResults", $this->arrayResult)) {
            $commitResultsResult = $arrayResult['commitResults'];
            $this->commitResults = new AlibabaopenplatformtradeBizOrderCommitResult();
            $this->commitResults->setStdResult($commitResultsResult);
        }
        if (array_key_exists("mutilOrderPublicData", $this->arrayResult)) {
            $mutilOrderPublicDataResult = $arrayResult['mutilOrderPublicData'];
            $this->mutilOrderPublicData = new AlibabaopenplatformtradeBizMutilOrderPublicData();
            $this->mutilOrderPublicData->setStdResult($mutilOrderPublicDataResult);
        }
        if (array_key_exists("resultCode", $this->arrayResult)) {
            $resultCodeResult = $arrayResult['resultCode'];
            $this->resultCode = new AlibabaopenplatformtradeResultCodeDef();
            $this->resultCode->setStdResult($resultCodeResult);
        }
        if (array_key_exists("failOrderMap", $this->arrayResult)) {
            $failOrderMapResult = $arrayResult['failOrderMap'];
            $this->failOrderMap = new AlibabaopenplatformtradeKeyValuePairBizOrderCommitResult();
            $this->failOrderMap->setStdResult($failOrderMapResult);
        }
        if (array_key_exists("successOrderMap", $this->arrayResult)) {
            $successOrderMapResult = $arrayResult['successOrderMap'];
            $this->successOrderMap = new  AlibabaopenplatformtradeKeyValuePairBizOrderCommitResult();
            $this->successOrderMap->setStdResult($successOrderMapResult);
        }
    }


}
