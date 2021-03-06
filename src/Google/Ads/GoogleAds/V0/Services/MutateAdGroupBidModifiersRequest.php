<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/services/ad_group_bid_modifier_service.proto

namespace Google\Ads\GoogleAds\V0\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [AdGroupBidModifierService.MutateAdGroupBidModifiers][google.ads.googleads.v0.services.AdGroupBidModifierService.MutateAdGroupBidModifiers].
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.services.MutateAdGroupBidModifiersRequest</code>
 */
class MutateAdGroupBidModifiersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the customer whose ad group bid modifiers are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     */
    private $customer_id = '';
    /**
     * The list of operations to perform on individual ad group bid modifiers.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.AdGroupBidModifierOperation operations = 2;</code>
     */
    private $operations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           ID of the customer whose ad group bid modifiers are being modified.
     *     @type \Google\Ads\GoogleAds\V0\Services\AdGroupBidModifierOperation[]|\Google\Protobuf\Internal\RepeatedField $operations
     *           The list of operations to perform on individual ad group bid modifiers.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Services\AdGroupBidModifierService::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of the customer whose ad group bid modifiers are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * ID of the customer whose ad group bid modifiers are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * The list of operations to perform on individual ad group bid modifiers.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.AdGroupBidModifierOperation operations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * The list of operations to perform on individual ad group bid modifiers.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.AdGroupBidModifierOperation operations = 2;</code>
     * @param \Google\Ads\GoogleAds\V0\Services\AdGroupBidModifierOperation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V0\Services\AdGroupBidModifierOperation::class);
        $this->operations = $arr;

        return $this;
    }

}

