<?php

namespace MageMontreal\PwaRedirect\Plugin;

use MageMontreal\PwaRedirect\Helper\Config;
use Magento\Cms\Controller\Router;
use Magento\Framework\App\Action\Redirect;
use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;

class RouterPlugin
{
    protected Config $config;
    protected ActionFactory $actionFactory;

    public function __construct(
        Config $config,
        ActionFactory $actionFactory
    ) {
        $this->config = $config;
        $this->actionFactory = $actionFactory;
    }
    /**
     * @param Router $subject
     * @param RequestInterface $request
     * @return array
     */
    public function beforeMatch(Router $subject, RequestInterface $request): array
    {
        if ($this->config->isEnabled() && $this->config->getRedirectUrl()) {
            header('Location: ' . $this->config->getRedirectUrl());
            exit;
        }
        return [$request];
    }
}
