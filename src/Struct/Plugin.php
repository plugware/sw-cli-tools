<?php

namespace ShopwareCli\Struct;

use ShopwareCli\Struct;

/**
 * Shopware plugin struct
 *
 * Class Plugin
 * @package ShopwareCli\Struct
 */
class Plugin extends Struct
{
    public $name;

    public $cloneUrlHttp;

    public $cloneUrlSsh;

    public $module;

    public $repository;

    public $repoType;
}
