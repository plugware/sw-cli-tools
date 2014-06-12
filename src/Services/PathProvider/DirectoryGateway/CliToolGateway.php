<?php

namespace ShopwareCli\Services\PathProvider\DirectoryGateway;

class CliToolGateway implements DirectoryGatewayInterface
{
    /**
     * @var string
     */
    private $basePath;

    /**
     * @param $basePath
     */
    public function __construct($basePath)
    {
        $this->basePath = rtrim($basePath, '/');
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath()
    {
        return $this->basePath;
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheDir()
    {
        return $this->getBasePath() . '/cache';
    }

    /**
     * {@inheritdoc}
     */
    public function getAssetsDir()
    {
        return $this->getBasePath() . '/assets';
    }

    /**
     * {@inheritdoc}
     */
    public function getPluginDir()
    {
        return $this->getBasePath() . '/plugins';
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigDir()
    {
        return $this->getBasePath();
    }

}