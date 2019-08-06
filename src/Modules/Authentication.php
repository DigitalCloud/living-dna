<?php


namespace DigitalCloud\LivingDna\Modules;


class Authentication extends Client
{
    public function login()
    {
        return self::send('post', 'api/auth', json_encode([
            'client_id' => config("dna.client_id"),
            'client_secret' => config("dna.client_secret")
        ]));
    }
}