<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/keyword_plan_negative_keyword.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Keyword Plan negative keyword.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.KeywordPlanNegativeKeyword</code>
 */
class KeywordPlanNegativeKeyword extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the Keyword Plan negative keyword.
     * KeywordPlanNegativeKeyword resource names have the form:
     * `customers/{customer_id}/keywordPlanNegativeKeywords/{kp_negative_keyword_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The Keyword Plan campaign to which this negative keyword belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 2;</code>
     */
    private $keyword_plan_campaign = null;
    /**
     * The ID of the Keyword Plan negative keyword.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     */
    private $id = null;
    /**
     * The keyword text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     */
    private $text = null;
    /**
     * The keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 5;</code>
     */
    private $match_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the Keyword Plan negative keyword.
     *           KeywordPlanNegativeKeyword resource names have the form:
     *           `customers/{customer_id}/keywordPlanNegativeKeywords/{kp_negative_keyword_id}`
     *     @type \Google\Protobuf\StringValue $keyword_plan_campaign
     *           The Keyword Plan campaign to which this negative keyword belongs.
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the Keyword Plan negative keyword.
     *     @type \Google\Protobuf\StringValue $text
     *           The keyword text.
     *     @type int $match_type
     *           The keyword match type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\KeywordPlanNegativeKeyword::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the Keyword Plan negative keyword.
     * KeywordPlanNegativeKeyword resource names have the form:
     * `customers/{customer_id}/keywordPlanNegativeKeywords/{kp_negative_keyword_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the Keyword Plan negative keyword.
     * KeywordPlanNegativeKeyword resource names have the form:
     * `customers/{customer_id}/keywordPlanNegativeKeywords/{kp_negative_keyword_id}`
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
     * The Keyword Plan campaign to which this negative keyword belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getKeywordPlanCampaign()
    {
        return $this->keyword_plan_campaign;
    }

    /**
     * The Keyword Plan campaign to which this negative keyword belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_campaign = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setKeywordPlanCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->keyword_plan_campaign = $var;

        return $this;
    }

    /**
     * The ID of the Keyword Plan negative keyword.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID of the Keyword Plan negative keyword.
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
     * The keyword text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * The keyword text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->text = $var;

        return $this;
    }

    /**
     * The keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 5;</code>
     * @return int
     */
    public function getMatchType()
    {
        return $this->match_type;
    }

    /**
     * The keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMatchType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\KeywordMatchTypeEnum_KeywordMatchType::class);
        $this->match_type = $var;

        return $this;
    }

}

