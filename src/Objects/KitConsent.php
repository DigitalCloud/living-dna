<?php

namespace DigitalCloud\LivingDna\Objects;

class KitConsent implements \JsonSerializable
{
    private $family_networks;
    private $family_networks_terms;
    private $personal_data;

    /**
     * @return mixed
     */
    public function getFamilyNetworks()
    {
        return $this->family_networks;
    }

    public function setFamilyNetworks($family_networks)
    {
        $this->family_networks = $family_networks;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPersonalData()
    {
        return $this->personal_data;
    }

    public function setPersonalData($personal_data)
    {
        $this->personal_data = $personal_data;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFamilyNetworksTerms()
    {
        return $this->family_networks_terms;
    }

    public function setFamilyNetworksTerms($family_networks_terms)
    {
        $this->family_networks_terms = $family_networks_terms;
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
            'family_networks' => $this->getFamilyNetworks(),
            'family_networks_terms' => $this->getFamilyNetworksTerms(),
            'personal_data' => $this->getPersonalData()
        ];
    }
}