<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace MageMontreal\PwaRedirect\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;

class Config extends AbstractHelper
{
    const IS_ENABLED = 'pwaredirect/config/is_enabled';
    const URL_REDIRECT = 'pwaredirect/config/redirect_url';

    /**
     * @param Context $context
     */
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * Check whether the module is enabled or not
     * 
     * @return bool
     */
    public function isEnabled(): bool
    {
        return (boolean) $this->scopeConfig->isSetFlag(self::IS_ENABLED);
    }

    /**
     * Get the headless URL salved via admin panel
     * 
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->scopeConfig->getValue(self::URL_REDIRECT);
    }
}
