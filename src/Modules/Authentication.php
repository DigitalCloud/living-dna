<?php


namespace DigitalCloud\LivingDna\Modules;


class Authentication extends Client
{
    public function login()
    {
        return self::send('post', 'api/auth', json_encode([
            'client_id' => config("living-dna.client_id"),
            'client_secret' => config("living-dna.client_secret")
        ]));
    }

    public function refresh($refresh_token)
    {
        return self::send('post', 'api/auth/refresh', json_encode([
            'client_id' => config("living-dna.client_id"),
            'client_secret' => config("living-dna.client_secret"),
            'refresh_token' => $refresh_token
        ]));
    }
}