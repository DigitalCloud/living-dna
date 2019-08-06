<?php

namespace DigitalCloud\LivingDna\Objects;

class Order implements \JsonSerializable
{
    private $id;
    private $status;
    private $order_ref;
    private $customer;
    private $shipping_method;
    private $shipping_address;
    private $products;
    private $consents;
    private $order_date_time;
    private $shipments;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getOrderRef()
    {
        return $this->order_ref;
    }


    public function setOrderRef($order_ref)
    {
        $this->order_ref = $order_ref;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderDateTime()
    {
        return $this->order_date_time;
    }

    public function setOrderDateTime($order_date_time)
    {
        $this->order_date_time = $order_date_time;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingMethod()
    {
        return $this->shipping_method;
    }

    /**
     * @param $shipping_method
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->shipping_method = $shipping_method;

        return $this;
    }


    public function getShippingAddress()
    {
        return $this->shipping_address;
    }

    /**
     * @param ShippingAddress $shipping_address
     * @return $this
     */
    public function setShippingAddress(ShippingAddress $shipping_address)
    {
        $this->shipping_address = $shipping_address;

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

    /**
     * @return mixed
     */
    public function getConsents()
    {
        return $this->consents;
    }

    /**
     * @param $consents
     * @return $this
     */
    public function setConsents($consents)
    {
        $this->consents = $consents;

        return $this;
    }

    /**
     * @param OrderConsent $consent
     * @return $this
     */
    public function addConsent(OrderConsent $consent)
    {
        $this->consents[] = $consent;

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
            'order_ref' => $this->getOrderRef(),
            'order_date_time' => $this->getOrderDateTime(),
            'customer' => $this->getCustomer(),
            'consents' => $this->getConsents(),
            'shipping_method' => $this->getShippingMethod(),
            'shipping_address' => $this->getShippingAddress(),
            'products' => $this->getProducts(),
        ];
    }

    /**
     * @return mixed
     */
    public function getShipments()
    {
        return $this->shipments;
    }

    public function setShipments($shipments)
    {
        $this->shipments = $shipments;
        return $this;
    }

    public function addShipment(Shipment $shipment)
    {
        $this->shipments[] = $shipment;
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
}