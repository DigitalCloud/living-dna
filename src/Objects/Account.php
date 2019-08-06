<?php

namespace DigitalCloud\LivingDna\Objects;

class Account implements \JsonSerializable
{
    private $first_name;
    private $last_name;
    private $email;
    private $consents;
    private $id;
    private $partner_user_id;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param $first_name
     * @return $this
     */
    public function setFirstName(string $first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param $last_name
     * @return $this
     */
    public function setLastName(string $last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return Consent
     */
    public function getConsents()
    {
        return $this->consents;
    }

    /**
     * @param Consent $consents
     * @return $this
     */
    public function setConsents(Consent $consents)
    {
        $this->consents = $consents;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPartnerUserId()
    {
        return $this->partner_user_id;
    }

    /**
     * @param $partner_user_id
     * @return $this
     */
    public function setPartnerUserId($partner_user_id)
    {
        $this->partner_user_id = $partner_user_id;

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
            'email' => $this->getEmail(),
            'firstName' => $this->getFirstName(),
            'lastName' => $this->getLastName(),
            'consents' => $this->getConsents()
        ];
    }
}