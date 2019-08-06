<?php

namespace DigitalCloud\LivingDna\Modules;

use DigitalCloud\LivingDna\Objects\Kit;
use DigitalCloud\LivingDna\Objects\KitItem;
use Illuminate\Support\Arr;

class Kits extends Client
{
    /**
     * @param Kit $kit
     * @return Kit
     */
    public function activate(Kit $kit)
    {
        $data = self::send('post', "api/activate/{$kit->getActivationCode()}", json_encode($kit));

        $kit->setBarcode(Arr::get($data, "barcode"));

        return $kit;
    }

    /**
     * @param Kit $kit
     * @return Kit
     */
    public function status(Kit $kit)
    {
        $data = self::send('get', "api/kit/{$kit->getBarcode()}/status", [], [
            'X-PARTNER-USER-ID' => $kit->getPartnerUserId()
        ]);

        $kit->setStatus(Arr::get($data, "status"));

        foreach (Arr::get($data, "items", []) as $item) {
            $kit->addItem((new KitItem())->setStatus(Arr::get($item, "status"))
                ->setName(Arr::get($item, "name")));
        }

        return $kit;
    }

    /**
     * @param Kit $kit
     * @return Kit
     */
    public function result(Kit $kit)
    {
        $data = self::send('get', "api/results/{$kit->getBarcode()}", [], [
            'X-PARTNER-USER-ID' => $kit->getPartnerUserId()
        ]);

        $kit->setResult($data);

        return $kit;
    }
}