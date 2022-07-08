<?php 

namespace V4U\CustomerAccountLinksManager\Plugin;

use Closure;
use Magento\Framework\View\Element\AbstractBlock;
use Magento\Framework\View\Element\Html\Links;
use V4U\CustomerAccountLinksManager\Helper\Data;

class LinksPlugin
{
    /** @var Data */
    protected $_helperData;

    /**
     * LinksPlugin constructor.
     * @param Data $helperData
     */
    public function __construct(
        Data $helperData
    ) {
        $this->_helperData = $helperData;
    }

    public function afterRenderLink(Links $subject, $result,AbstractBlock $link)
    {
        $hideBlockNames = explode(",",$this->_helperData->getBlockNames());
            if($this->_helperData->getEnabled() && $this->_helperData->getBlockNames()){
                foreach ($hideBlockNames as $hideBlockName) {
                    if($link->getNameInLayout() == $hideBlockName){
                        $result = "";
                    }
                }
            }
        return $result;
    }
}