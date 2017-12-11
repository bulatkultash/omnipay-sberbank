<?php

namespace Omnipay\Sberbank\Message;

class VerifyEnrollmentRequest extends AbstractRequest
{
    /**
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $this->validate('userName', 'password', 'pan');

        $data = [
            'userName' => $this->getUserName(),
            'password' => $this->getPassword(),
            'pan' => $this->getPan(),
        ];

        return $data;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'verifyEnrollment';
    }

    /**
     * Get card pan number
     *
     * @return string
     */
    public function getPan()
    {
        return $this->getParameter('pan');
    }

    /**
     * Set card pan number
     *
     * @param string $pan
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setPan($pan)
    {
        return $this->setParameter('pan', $pan);
    }
}