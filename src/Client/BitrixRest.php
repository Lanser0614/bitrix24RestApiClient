<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi\Client;

use Lanser\Bitrix24restApi\Client\Builder\Response\BitrixResponseDto;

class BitrixRest
{
    protected function baseRequest(string $method, array $data): BitrixResponseDto
    {
        $queryUrl = 'https://bitrix.imzo.uz/rest/397/7mth1xm4i2gf9w3s/' . $method;
        $queryData = http_build_query($data);

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $queryUrl,
            CURLOPT_POSTFIELDS => $queryData,
        ]);

        $result = curl_exec($curl);
        curl_close($curl);

        $data = json_decode($result, true);
        return BitrixResponseDto::fromArray($data);
    }

    protected function makeRequest(string $method, array $fields = [], array $filters = [], ?int $id = null,): BitrixResponseDto
    {
        if (count($fields) > 0) {
            $request['fields'] = $fields;
        }

        if (count($filters) > 0) {
            $request['filter'] = $filters;
        }

        if ($id !== null) {
            $request['id'] = $id;
        }

        if (empty($request)) {
            throw new \InvalidArgumentException();
        }

        return $this->baseRequest($method, $request);

    }
}