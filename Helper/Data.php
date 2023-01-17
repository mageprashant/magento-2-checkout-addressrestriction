<?php

namespace MagePrashant\Addressrestriction\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper 
{

    const XML_PATH_ENABLE = 'mageprashant_addressrestrict/general/is_enabled';

    protected $storeManager;
    
    protected $store = null;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context, 
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        $this->storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getStore()
    {
        if($this->store === null) {
            $this->store = $this->storeManager->getStore();
        }
        return $this->store;
    }
    
    public function getConfigValue($path) 
	{
        return $this->scopeConfig->getValue($path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getIsEnabled() 
	{
        return $this->scopeConfig->getValue(self::XML_PATH_ENABLE);
    }
}