<?php


namespace DigitalCloud\LivingDna\Modules;


use DigitalCloud\LivingDna\Objects\Order;
use DigitalCloud\LivingDna\Objects\Product;
use DigitalCloud\LivingDna\Objects\Shipment;
use Illuminate\Support\Arr;

class Orders extends Client
{
    /**
     * @param Order $order
     * @return Order
     */
    public function create(Order $order)
    {
        $data = self::send('post', 'api/order', json_encode($order));

        $order->setId(Arr::get($data, "id"));

        return $order;
    }

    public function status(Order $order)
    {
        $data = self::send('get', "api/order/{$order->getId()}/status");

        $order->setStatus(Arr::get($data, "order_status"));

        if (Arr::get($data, "shipments")) {
            $shipmentData = Arr::first($data["shipments"]);
            $shipment = new Shipment();

            $shipment->setTrackingCode(Arr::get($shipmentData, "tracking_code"))
                ->setStatus(Arr::get($shipmentData, "status"));

            foreach ($shipmentData["products"] as $productData) {
                $shipment->addProduct((new Product())
                    ->setQuantity(Arr::get($productData, "quantity"))
                    ->setSku(Arr::get($productData, "sku")));
            }

            $order->addShipment($shipment);
        }

        return $order;
    }
}