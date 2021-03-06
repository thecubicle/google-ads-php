<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/common/matching_function.proto

namespace Google\Ads\GoogleAds\V0\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Matching function associated with a
 * CustomerFeed, CampaignFeed, or AdGroupFeed. The matching function is used
 * to filter the set of feed items selected.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.common.MatchingFunction</code>
 */
class MatchingFunction extends \Google\Protobuf\Internal\Message
{
    /**
     * String representation of the Function.
     * Examples:
     * 1) IDENTITY(true) or IDENTITY(false). All or none feed items serve.
     * 2) EQUALS(CONTEXT.DEVICE,"Mobile")
     * 3) IN(FEED_ITEM_ID,{1000001,1000002,1000003})
     * 4) CONTAINS_ANY(FeedAttribute[12345678,0],{"Mars cruise","Venus cruise"})
     * 5) AND(IN(FEED_ITEM_ID,{10001,10002}),EQUALS(CONTEXT.DEVICE,"Mobile"))
     * See
     * https:
     * //developers.google.com/adwords/api/docs/guides/feed-matching-functions
     * Note that because multiple strings may represent the same underlying
     * function (whitespace and single versus double quotation marks, for
     * example), the value returned may not be identical to the string sent in a
     * mutate request.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue function_string = 1;</code>
     */
    private $function_string = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $function_string
     *           String representation of the Function.
     *           Examples:
     *           1) IDENTITY(true) or IDENTITY(false). All or none feed items serve.
     *           2) EQUALS(CONTEXT.DEVICE,"Mobile")
     *           3) IN(FEED_ITEM_ID,{1000001,1000002,1000003})
     *           4) CONTAINS_ANY(FeedAttribute[12345678,0],{"Mars cruise","Venus cruise"})
     *           5) AND(IN(FEED_ITEM_ID,{10001,10002}),EQUALS(CONTEXT.DEVICE,"Mobile"))
     *           See
     *           https:
     *           //developers.google.com/adwords/api/docs/guides/feed-matching-functions
     *           Note that because multiple strings may represent the same underlying
     *           function (whitespace and single versus double quotation marks, for
     *           example), the value returned may not be identical to the string sent in a
     *           mutate request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\MatchingFunction::initOnce();
        parent::__construct($data);
    }

    /**
     * String representation of the Function.
     * Examples:
     * 1) IDENTITY(true) or IDENTITY(false). All or none feed items serve.
     * 2) EQUALS(CONTEXT.DEVICE,"Mobile")
     * 3) IN(FEED_ITEM_ID,{1000001,1000002,1000003})
     * 4) CONTAINS_ANY(FeedAttribute[12345678,0],{"Mars cruise","Venus cruise"})
     * 5) AND(IN(FEED_ITEM_ID,{10001,10002}),EQUALS(CONTEXT.DEVICE,"Mobile"))
     * See
     * https:
     * //developers.google.com/adwords/api/docs/guides/feed-matching-functions
     * Note that because multiple strings may represent the same underlying
     * function (whitespace and single versus double quotation marks, for
     * example), the value returned may not be identical to the string sent in a
     * mutate request.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue function_string = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFunctionString()
    {
        return $this->function_string;
    }

    /**
     * String representation of the Function.
     * Examples:
     * 1) IDENTITY(true) or IDENTITY(false). All or none feed items serve.
     * 2) EQUALS(CONTEXT.DEVICE,"Mobile")
     * 3) IN(FEED_ITEM_ID,{1000001,1000002,1000003})
     * 4) CONTAINS_ANY(FeedAttribute[12345678,0],{"Mars cruise","Venus cruise"})
     * 5) AND(IN(FEED_ITEM_ID,{10001,10002}),EQUALS(CONTEXT.DEVICE,"Mobile"))
     * See
     * https:
     * //developers.google.com/adwords/api/docs/guides/feed-matching-functions
     * Note that because multiple strings may represent the same underlying
     * function (whitespace and single versus double quotation marks, for
     * example), the value returned may not be identical to the string sent in a
     * mutate request.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue function_string = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFunctionString($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->function_string = $var;

        return $this;
    }

}

