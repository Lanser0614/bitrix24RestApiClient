<?php
declare(strict_types=1);

namespace Lanser\Bitrix24restApi;

use Lanser\Bitrix24restApi\Client\Builder\BitrixRestBuilder;

class TestClass
{
    public function __construct(
        private readonly BitrixRestBuilder $bitrixRestBuilder
    )
    {}

    public function run()
    {

    }
}