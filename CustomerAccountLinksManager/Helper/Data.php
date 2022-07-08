<?php

namespace V4U\CustomerAccountLinksManager\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

	/**
     * Return status
     *
     * @return string
     */

	public function getEnabled(){
		return $this->scopeConfig->getValue('customeraccountlinksmanager/customeraccountlinksmanager/enable',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

    /**
     * Return blocknames
     *
     * @return string
     */

    public function getBlockNames(){
        return $this->scopeConfig->getValue('customeraccountlinksmanager/customeraccountlinksmanager/block_names',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}