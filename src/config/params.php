<?php
/**
 * HiPanel API client made with HiART.
 *
 * @link      https://github.com/hiqdev/hipanel-hiart
 * @package   hipanel-hiart
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

return [
    'hiart.class'           => \hipanel\hiart\Connection::class,
    'hiart.baseUri'         => 'http://hiapi.ahnames.com/',

    'old-hiapi.dbname'      => 'old-hiapi',

    'billing-hiapi.dbname'  => 'billing-hiapi',
    'billing-hiapi.config'  => [],
    'billing-hiapi.baseUri' => 'http://billing-hiapi.ahnames.com/',
];
