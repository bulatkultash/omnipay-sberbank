<?php

namespace Omnipay\Sberbank\Message;

/**
 * Class AuthorizeRequest
 * @package Omnipay\Sberbank\Message
 */
class AuthorizeRequest extends AbstractRequest
{
    /**
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $this->validate('orderNumber', 'amount', 'returnUrl');

        $data = [
            'orderNumber' => $this->getOrderNumber(),
            'amount' => $this->getAmount(),
            'returnUrl' => $this->getReturnUrl()
        ];

        $additionalParams = [
            'currency',
            'failUrl',
            'description',
            'language',
            'pageView',
            'clientId',
            'merchantLogin',
            'jsonParams',
            'sessionTimeoutSecs',
            'expirationDate',
            'bindingId'
        ];

        return $this->specifyAdditionalParameters($data, $additionalParams);
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->GetTwoStage() ? 'registerPreAuth.do' : 'register.do';
    }

    /**
     * @return mixed
     */
    public function getTwoStage()
    {
        return $this->getParameter('twoStage');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setTwoStage(bool $value)
    {
        return $this->setParameter('twoStage', $value);
    }

    /**
     * @return mixed
     */
    public function getOrderNumber()
    {
        return $this->getParameter('orderNumber');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setOrderNumber($value)
    {
        return $this->setParameter('orderNumber', $value);
    }

    /**
     * @return mixed
     */
    public function getFailUrl()
    {
        return $this->getParameter('failUrl');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setFailUrl($value)
    {
        return $this->setParameter('failUrl', $value);
    }

    /**
     * @return mixed
     */
    public function getPageView()
    {
        return $this->getParameter('pageView');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setPageView($value)
    {
        return $this->setParameter('pageView', $value);
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->getParameter('clientId');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setClientId($value)
    {
        return $this->setParameter('clientId', $value);
    }

    /**
     * @return mixed
     */
    public function getMerchantLogin()
    {
        return $this->getParameter('merchantLogin');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setMerchantLogin($value)
    {
        return $this->setParameter('merchantLogin', $value);
    }

    /**
     * @return mixed
     */
    public function getJsonParams()
    {
        return $this->getParameter('jsonParams');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setJsonParams($value)
    {
        return $this->setParameter('jsonParams', $value);
    }

    /**
     * @return mixed
     */
    public function getSessionTimeoutSecs()
    {
        return $this->getParameter('sessionTimeoutSecs');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setSessionTimeoutSecs($value)
    {
        return $this->setParameter('sessionTimeoutSecs', $value);
    }

    /**
     * @return mixed
     */
    public function getExpirationDate()
    {
        return $this->getParameter('expirationDate');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setExpirationDate($value)
    {
        return $this->setParameter('expirationDate', $value);
    }

    /**
     * @return mixed
     */
    public function getBindingId()
    {
        return $this->getParameter('bindingId');
    }

    /**
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setBindingId($value)
    {
        return $this->setParameter('bindingId', $value);
    }
}
