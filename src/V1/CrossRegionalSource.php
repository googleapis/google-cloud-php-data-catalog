<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/policytagmanagerserialization.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cross-regional source used to import an existing taxonomy into a different
 * region.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.CrossRegionalSource</code>
 */
class CrossRegionalSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the source taxonomy to import.
     *
     * Generated from protobuf field <code>string taxonomy = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $taxonomy = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $taxonomy
     *           Required. The resource name of the source taxonomy to import.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Policytagmanagerserialization::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the source taxonomy to import.
     *
     * Generated from protobuf field <code>string taxonomy = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTaxonomy()
    {
        return $this->taxonomy;
    }

    /**
     * Required. The resource name of the source taxonomy to import.
     *
     * Generated from protobuf field <code>string taxonomy = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTaxonomy($var)
    {
        GPBUtil::checkString($var, True);
        $this->taxonomy = $var;

        return $this;
    }

}

