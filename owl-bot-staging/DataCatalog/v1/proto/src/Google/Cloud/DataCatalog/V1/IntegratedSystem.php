<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/common.proto

namespace Google\Cloud\DataCatalog\V1;

use UnexpectedValueException;

/**
 * This enum lists all the systems that Data Catalog integrates with.
 *
 * Protobuf type <code>google.cloud.datacatalog.v1.IntegratedSystem</code>
 */
class IntegratedSystem
{
    /**
     * Default unknown system.
     *
     * Generated from protobuf enum <code>INTEGRATED_SYSTEM_UNSPECIFIED = 0;</code>
     */
    const INTEGRATED_SYSTEM_UNSPECIFIED = 0;
    /**
     * BigQuery.
     *
     * Generated from protobuf enum <code>BIGQUERY = 1;</code>
     */
    const BIGQUERY = 1;
    /**
     * Cloud Pub/Sub.
     *
     * Generated from protobuf enum <code>CLOUD_PUBSUB = 2;</code>
     */
    const CLOUD_PUBSUB = 2;
    /**
     * Dataproc Metastore.
     *
     * Generated from protobuf enum <code>DATAPROC_METASTORE = 3;</code>
     */
    const DATAPROC_METASTORE = 3;

    private static $valueToName = [
        self::INTEGRATED_SYSTEM_UNSPECIFIED => 'INTEGRATED_SYSTEM_UNSPECIFIED',
        self::BIGQUERY => 'BIGQUERY',
        self::CLOUD_PUBSUB => 'CLOUD_PUBSUB',
        self::DATAPROC_METASTORE => 'DATAPROC_METASTORE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

