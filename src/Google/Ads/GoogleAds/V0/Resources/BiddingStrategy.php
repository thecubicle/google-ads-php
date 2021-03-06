<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/bidding_strategy.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A bidding strategy.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.BiddingStrategy</code>
 */
class BiddingStrategy extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the bidding strategy.
     * Bidding strategy resource names have the form:
     * `customers/{customer_id}/biddingStrategies/{bidding_strategy_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The ID of the bidding strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     */
    private $id = null;
    /**
     * The name of the bidding strategy.
     * All bidding strategies within an account must be named distinctly.
     * The length of this string should be between 1 and 255, inclusive,
     * in UTF-8 bytes, (trimmed).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     */
    private $name = null;
    /**
     * The type of the bidding strategy.
     * Create a bidding strategy by setting the bidding scheme.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.BiddingStrategyTypeEnum.BiddingStrategyType type = 5;</code>
     */
    private $type = 0;
    protected $scheme;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the bidding strategy.
     *           Bidding strategy resource names have the form:
     *           `customers/{customer_id}/biddingStrategies/{bidding_strategy_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the bidding strategy.
     *     @type \Google\Protobuf\StringValue $name
     *           The name of the bidding strategy.
     *           All bidding strategies within an account must be named distinctly.
     *           The length of this string should be between 1 and 255, inclusive,
     *           in UTF-8 bytes, (trimmed).
     *     @type int $type
     *           The type of the bidding strategy.
     *           Create a bidding strategy by setting the bidding scheme.
     *           This field is read-only.
     *     @type \Google\Ads\GoogleAds\V0\Common\EnhancedCpc $enhanced_cpc
     *           A bidding strategy that raises bids for clicks that seem more likely to
     *           lead to a conversion and lowers them for clicks where they seem less
     *           likely.
     *     @type \Google\Ads\GoogleAds\V0\Common\PageOnePromoted $page_one_promoted
     *           A bidding strategy that sets max CPC bids to target impressions on
     *           page one or page one promoted slots on google.com.
     *     @type \Google\Ads\GoogleAds\V0\Common\TargetCpa $target_cpa
     *           A bidding strategy that sets bids to help get as many conversions as
     *           possible at the target cost-per-acquisition (CPA) you set.
     *     @type \Google\Ads\GoogleAds\V0\Common\TargetOutrankShare $target_outrank_share
     *           A bidding strategy that sets bids based on the target fraction of
     *           auctions where the advertiser should outrank a specific competitor.
     *     @type \Google\Ads\GoogleAds\V0\Common\TargetRoas $target_roas
     *           A bidding strategy that helps you maximize revenue while averaging a
     *           specific target Return On Ad Spend (ROAS).
     *     @type \Google\Ads\GoogleAds\V0\Common\TargetSpend $target_spend
     *           A bid strategy that sets your bids to help get as many clicks as
     *           possible within your budget.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\BiddingStrategy::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the bidding strategy.
     * Bidding strategy resource names have the form:
     * `customers/{customer_id}/biddingStrategies/{bidding_strategy_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the bidding strategy.
     * Bidding strategy resource names have the form:
     * `customers/{customer_id}/biddingStrategies/{bidding_strategy_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The ID of the bidding strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID of the bidding strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * The name of the bidding strategy.
     * All bidding strategies within an account must be named distinctly.
     * The length of this string should be between 1 and 255, inclusive,
     * in UTF-8 bytes, (trimmed).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the bidding strategy.
     * All bidding strategies within an account must be named distinctly.
     * The length of this string should be between 1 and 255, inclusive,
     * in UTF-8 bytes, (trimmed).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * The type of the bidding strategy.
     * Create a bidding strategy by setting the bidding scheme.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.BiddingStrategyTypeEnum.BiddingStrategyType type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the bidding strategy.
     * Create a bidding strategy by setting the bidding scheme.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.BiddingStrategyTypeEnum.BiddingStrategyType type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\BiddingStrategyTypeEnum_BiddingStrategyType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * A bidding strategy that raises bids for clicks that seem more likely to
     * lead to a conversion and lowers them for clicks where they seem less
     * likely.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.EnhancedCpc enhanced_cpc = 7;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\EnhancedCpc
     */
    public function getEnhancedCpc()
    {
        return $this->readOneof(7);
    }

    /**
     * A bidding strategy that raises bids for clicks that seem more likely to
     * lead to a conversion and lowers them for clicks where they seem less
     * likely.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.EnhancedCpc enhanced_cpc = 7;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\EnhancedCpc $var
     * @return $this
     */
    public function setEnhancedCpc($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\EnhancedCpc::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * A bidding strategy that sets max CPC bids to target impressions on
     * page one or page one promoted slots on google.com.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.PageOnePromoted page_one_promoted = 8;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\PageOnePromoted
     */
    public function getPageOnePromoted()
    {
        return $this->readOneof(8);
    }

    /**
     * A bidding strategy that sets max CPC bids to target impressions on
     * page one or page one promoted slots on google.com.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.PageOnePromoted page_one_promoted = 8;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\PageOnePromoted $var
     * @return $this
     */
    public function setPageOnePromoted($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\PageOnePromoted::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * A bidding strategy that sets bids to help get as many conversions as
     * possible at the target cost-per-acquisition (CPA) you set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.TargetCpa target_cpa = 9;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\TargetCpa
     */
    public function getTargetCpa()
    {
        return $this->readOneof(9);
    }

    /**
     * A bidding strategy that sets bids to help get as many conversions as
     * possible at the target cost-per-acquisition (CPA) you set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.TargetCpa target_cpa = 9;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\TargetCpa $var
     * @return $this
     */
    public function setTargetCpa($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\TargetCpa::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * A bidding strategy that sets bids based on the target fraction of
     * auctions where the advertiser should outrank a specific competitor.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.TargetOutrankShare target_outrank_share = 10;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\TargetOutrankShare
     */
    public function getTargetOutrankShare()
    {
        return $this->readOneof(10);
    }

    /**
     * A bidding strategy that sets bids based on the target fraction of
     * auctions where the advertiser should outrank a specific competitor.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.TargetOutrankShare target_outrank_share = 10;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\TargetOutrankShare $var
     * @return $this
     */
    public function setTargetOutrankShare($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\TargetOutrankShare::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * A bidding strategy that helps you maximize revenue while averaging a
     * specific target Return On Ad Spend (ROAS).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.TargetRoas target_roas = 11;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\TargetRoas
     */
    public function getTargetRoas()
    {
        return $this->readOneof(11);
    }

    /**
     * A bidding strategy that helps you maximize revenue while averaging a
     * specific target Return On Ad Spend (ROAS).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.TargetRoas target_roas = 11;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\TargetRoas $var
     * @return $this
     */
    public function setTargetRoas($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\TargetRoas::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * A bid strategy that sets your bids to help get as many clicks as
     * possible within your budget.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.TargetSpend target_spend = 12;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\TargetSpend
     */
    public function getTargetSpend()
    {
        return $this->readOneof(12);
    }

    /**
     * A bid strategy that sets your bids to help get as many clicks as
     * possible within your budget.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.TargetSpend target_spend = 12;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\TargetSpend $var
     * @return $this
     */
    public function setTargetSpend($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\TargetSpend::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getScheme()
    {
        return $this->whichOneof("scheme");
    }

}

