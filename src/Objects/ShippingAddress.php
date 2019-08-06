<?php


namespace DigitalCloud\LivingDna\Objects;


class ShippingAddress implements \JsonSerializable
{
    private $address_line_1;
    private $address_line_2;
    private $address_line_3;
    private $city;
    private $state;
    private $zip;
    private $country_code;

    /**
     * @return mixed
     */
    public function getAddressLine1()
    {
        return $this->address_line_1;
    }

    public function setAddressLine1($address_line_1)
    {
        $this->address_line_1 = $address_line_1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressLine2()
    {
        return $this->address_line_2;
    }

    public function setAddressLine2($address_line_2)
    {
        $this->address_line_2 = $address_line_2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressLine3()
    {
        return $this->address_line_3;
    }

    public function setAddressLine3($address_line_3)
    {
        $this->address_line_3 = $address_line_3;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }


    public function setCountryCode($country_code)
    {
        $this->country_code = $country_code;

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
            'address_line_1' => $this->getAddressLine1(),
            'address_line_2' => $this->getAddressLine2(),
            'address_line_3' => $this->getAddressLine3(),
            'city' => $this->getCity(),
            'state' => $this->getState(),
            'zip' => $this->getZip(),
            'country_code' => $this->getCountryCode()
        ];
    }
}