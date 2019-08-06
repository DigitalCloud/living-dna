<?php

namespace DigitalCloud\LivingDna\Objects;

class Consent implements \JsonSerializable
{
    private $marketing;
    private $privacy;
    private $terms;

    /**
     * @param $marketing
     * @return $this
     */
    public function setMarketing(bool $marketing)
    {
        $this->marketing = $marketing;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }

    /**
     * @param $privacy
     * @return $this
     */
    public function setPrivacy(bool $privacy)
    {
        $this->privacy = $privacy;

        return $this;
    }

    /**
     * @return bool
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * @param $terms
     * @return $this
     */
    public function setTerms(bool $terms)
    {
        $this->terms = $terms;

        return $this;
    }

    /**
     * @return bool
     */
    public function getMarketing()
    {
        return $this->marketing;
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
            'marketing' => $this->getMarketing(),
            'privacy' => $this->getPrivacy(),
            'terms' => $this->getTerms()
        ];
    }
}