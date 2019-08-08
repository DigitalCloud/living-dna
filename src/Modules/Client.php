<?php

namespace DigitalCloud\LivingDna\Modules;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\UnauthorizedException;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Client as GuzzleClient;

abstract class Client
{
    public static function send($func, $route, $parameters = [], $headers = [])
    {
        try {
            if (is_array($parameters) && $parameters) {
                $data["form_params"] = $parameters;
            } elseif (is_string($parameters) && $parameters) {
                $data["body"] = $parameters;
            }

            $data["headers"] = array_merge($headers, self::getHeaders());

            return self::getResult((new GuzzleClient())->$func(config("living-dna.api_url") . "/$route", $data));
        } catch (\Exception  $exception) {
            throw $exception;
        }
    }

    public static function getHeaders()
    {
        $headers = [
            "Accept" => "application/json",
            "Content-Type" => "application/json",
        ];

        if (Session::has('dna')) {
            $headers["Authorization"] = "Bearer " . Session::get("dna.access_token");
        }

        return $headers;
    }

    private static function getResult(ResponseInterface $response)
    {
        return json_decode((string)$response->getBody(), true);
    }
}