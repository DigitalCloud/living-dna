<?php
/**
 * Created by PhpStorm.
 * User: Digital 2
 * Date: 2/28/2019
 * Time: 12:19 PM
 */

return [
    'base_url' => env("DNA_BASE_URL", 'https://api.staging.livingdna.com'),
    'api_url' => env("DNA_API_URL", 'https://ms-gateway.staging.livingdna.com/partner'),
    'client_id' => env("DNA_CLIENT_ID"),
    'client_secret' => env("DNA_CLIENT_SECRET"),
];