<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [Long-running operation][google.longrunning.Operation]
 * response message returned by
 * [ReconcileTags][google.cloud.datacatalog.v1.DataCatalog.ReconcileTags].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.ReconcileTagsResponse</code>
 */
class ReconcileTagsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of tags created in the request.
     *
     * Generated from protobuf field <code>int64 created_tags_count = 1;</code>
     */
    protected $created_tags_count = 0;
    /**
     * Number of tags updated in the request.
     *
     * Generated from protobuf field <code>int64 updated_tags_count = 2;</code>
     */
    protected $updated_tags_count = 0;
    /**
     * Number of tags deleted in the request.
     *
     * Generated from protobuf field <code>int64 deleted_tags_count = 3;</code>
     */
    protected $deleted_tags_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $created_tags_count
     *           Number of tags created in the request.
     *     @type int|string $updated_tags_count
     *           Number of tags updated in the request.
     *     @type int|string $deleted_tags_count
     *           Number of tags deleted in the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of tags created in the request.
     *
     * Generated from protobuf field <code>int64 created_tags_count = 1;</code>
     * @return int|string
     */
    public function getCreatedTagsCount()
    {
        return $this->created_tags_count;
    }

    /**
     * Number of tags created in the request.
     *
     * Generated from protobuf field <code>int64 created_tags_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreatedTagsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->created_tags_count = $var;

        return $this;
    }

    /**
     * Number of tags updated in the request.
     *
     * Generated from protobuf field <code>int64 updated_tags_count = 2;</code>
     * @return int|string
     */
    public function getUpdatedTagsCount()
    {
        return $this->updated_tags_count;
    }

    /**
     * Number of tags updated in the request.
     *
     * Generated from protobuf field <code>int64 updated_tags_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUpdatedTagsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->updated_tags_count = $var;

        return $this;
    }

    /**
     * Number of tags deleted in the request.
     *
     * Generated from protobuf field <code>int64 deleted_tags_count = 3;</code>
     * @return int|string
     */
    public function getDeletedTagsCount()
    {
        return $this->deleted_tags_count;
    }

    /**
     * Number of tags deleted in the request.
     *
     * Generated from protobuf field <code>int64 deleted_tags_count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDeletedTagsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->deleted_tags_count = $var;

        return $this;
    }

}

