<?php

declare(strict_types=1);

namespace Booths\SalesRuleImport\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface RuleInterface
{

    public const IS_MASTER_RULE = 'is_master_rule';
    public const OFFER_CODE = 'offer_code';

    /**
     * Get is_master_rule
     *
     * @return string|null
     */
    public function getIsMasterRule();

    /**
     * Set is_master_rule
     *
     * @param string $isMasterRule
     * @return \Magento\SalesRule\Rule\Api\Data\RuleInterface
     */
    public function setIsMasterRule($isMasterRule);

    /**
     * Get offer_code
     *
     * @return string|null
     */
    public function getOfferCode();

    /**
     * Set offer_code
     *
     * @param string $offerCode
     * @return \Magento\SalesRule\Rule\Api\Data\RuleInterface
     */
    public function setOfferCode($offerCode);
}
