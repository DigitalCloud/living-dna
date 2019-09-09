<?php

namespace DigitalCloud\LivingDna\Objects;

class Kit implements \JsonSerializable
{
    private $user;
    private $consent;
    private $activation_code;
    private $barcode;
    private $partner_user_id;
    private $status;
    private $items;
    private $result;

    const STATUS_ORDERED = 'ORDERED';
    const STATUS_SHIPPED = 'SHIPPED';
    const STATUS_DELIVERED = 'DELIVERED';
    const STATUS_RECEIVED = 'RECEIVED';
    const STATUS_IN_LAB = 'IN_LAB';
    const STATUS_FAILED = 'FAILED';
    const STATUS_READY = 'READY';
    const STATUS_CANCELLED = 'CANCELLED';

    public function isReady()
    {
        return $this->status == self::STATUS_READY;
    }

    public function isInLab()
    {
        return $this->status == self::STATUS_IN_LAB;
    }

    public function isReceived()
    {
        return $this->status == self::RECEIVED;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return KitConsent
     */
    public function getConsent()
    {
        return $this->consent;
    }

    public function setConsent(KitConsent $consent)
    {
        $this->consent = $consent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActivationCode()
    {
        return $this->activation_code;
    }

    public function setActivationCode($activation_code)
    {
        $this->activation_code = $activation_code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPartnerUserId()
    {
        return $this->partner_user_id;
    }

    public function setPartnerUserId($partner_user_id)
    {
        $this->partner_user_id = $partner_user_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

    public function addItem(KitItem $item)
    {
        $this->items[] = $item;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * Specify data which should be serialized to JSON.
     *
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed data which can be serialized by <b>json_encode</b>,
     *               which is a value of any type other than a resource.
     *
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return [
            'user' => $this->getUser(),
            'consents' => $this->getConsent()
        ];
    }
}