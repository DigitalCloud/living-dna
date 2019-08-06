<?php

namespace DigitalCloud\LivingDna\Objects;

class User implements \JsonSerializable
{
    private $id;
    private $name;
    private $email;
    private $phone;
    private $biological_sex;
    private $dob;
    private $profile_photo;
    private $current_location;
    private $city;
    private $county;
    private $country;
    private $country_of_birth;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBiologicalSex()
    {
        return $this->biological_sex;
    }

    public function setBiologicalSex($biological_sex)
    {
        $this->biological_sex = $biological_sex;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    public function setDob($dob)
    {
        $this->dob = $dob;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProfilePhoto()
    {
        return $this->profile_photo;
    }

    public function setProfilePhoto($profile_photo)
    {
        $this->profile_photo = $profile_photo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrentLocation()
    {
        return $this->current_location;
    }

    public function setCurrentLocation($current_location)
    {
        $this->current_location = $current_location;
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
    public function getCounty()
    {
        return $this->county;
    }

    public function setCounty($county)
    {
        $this->county = $county;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryOfBirth()
    {
        return $this->country_of_birth;
    }

    public function setCountryOfBirth($country_of_birth)
    {
        $this->country_of_birth = $country_of_birth;
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
            'id' => $this->getId(),
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'phone' => $this->getPhone(),
            'biological_sex' => $this->getBiologicalSex(),
            'dob' => $this->getDob(),
            'profile_photo' => $this->getProfilePhoto(),
            'current_location' => $this->getCurrentLocation(),
            'city' => $this->getCity(),
            'county' => $this->getCounty(),
            'country' => $this->getCountry(),
            'country_of_birth' => $this->getCountryOfBirth(),
        ];
    }
}