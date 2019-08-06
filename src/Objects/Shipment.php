<?php

namespace DigitalCloud\LivingDna\Objects;

class Shipment implements \JsonSerializable
{
    private $tracking_code;
    private $status;
    private $products;


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
            'tracking_code' => $this->getTrackingCode(),
            'status' => $this->getStatus(),
            'products' => $this->getProducts()
        ];
    }

    /**
     * @return mixed
     */
    public function getTrackingCode()
    {
        return $this->tracking_code;
    }

    public function setTrackingCode($tracking_code)
    {
        $this->tracking_code = $tracking_code;
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
    public function getProducts()
    {
        return $this->products;
    }

    public function setProducts($products)
    {
        $this->products = $products;
        return $this;
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;

        return $this;
    }
}