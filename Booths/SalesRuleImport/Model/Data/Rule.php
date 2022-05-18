<?php

namespace Booths\SalesRuleImport\Model\Data;

use Booths\SalesRuleImport\Api\Data\RuleInterface as ExtendRuleInterface;

class Rule extends \Magento\SalesRule\Model\Data\Rule implements ExtendRuleInterface
{
    
    /**
     * Get is_master_rule
     *
     * @return string|null
     */
    public function getIsMasterRule()
    {
        return $this->_get(self::IS_MASTER_RULE);
    }

    /**
     * Set is_master_rule
     *
     * @param string $isMasterRule
     * @return \Magento\SalesRule\Rule\Api\Data\RuleInterface
     */
    public function setIsMasterRule($isMasterRule)
    {
        return $this->setData(self::IS_MASTER_RULE, $isMasterRule);
    }

    /**
     * Get offer_code
     *
     * @return string|null
     */
    public function getOfferCode()
    {
        return $this->_get(self::OFFER_CODE);
    }
    
    /**
     * Set offer_code
     *
     * @param string $offerCode
     * @return \Magento\SalesRule\Rule\Api\Data\RuleInterface
     */
    public function setOfferCode($offerCode)
    {
        return $this->setData(self::OFFER_CODE, $offerCode);
    }
}
