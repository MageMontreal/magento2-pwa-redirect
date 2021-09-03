<?php

namespace MageMontreal\PwaRedirect\Plugin;

use MageMontreal\PwaRedirect\Helper\Config;
use Magento\Cms\Controller\Index\Index;
use Magento\Framework\App\ActionFactory;
use Magento\Framework\Controller\ResultFactory;

class IndexPlugin
{
    protected Config $config;
    protected ActionFactory $actionFactory;
    protected ResultFactory $resultFactory;

    public function __construct(
        Config $config,
        ActionFactory $actionFactory,
        ResultFactory $resultFactory
    ) {
        $this->config = $config;
        $this->actionFactory = $actionFactory;
        $this->resultFactory = $resultFactory;
    }


    /**
     * @param Index $subject
     * @param string|null $coreRoute
     * @return array
     */
    public function beforeExecute(Index $subject, $coreRoute = null): array
    {
        if ($this->config->isEnabled() && $this->config->getRedirectUrl()) {
            header('Location: ' . $this->config->getRedirectUrl());
            exit;
        }
        return [$coreRoute];
    }
}
