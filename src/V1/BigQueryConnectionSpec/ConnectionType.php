<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/bigquery.proto

namespace Google\Cloud\DataCatalog\V1\BigQueryConnectionSpec;

use UnexpectedValueException;

/**
 * The type of the BigQuery connection.
 *
 * Protobuf type <code>google.cloud.datacatalog.v1.BigQueryConnectionSpec.ConnectionType</code>
 */
class ConnectionType
{
    /**
     * Unspecified type.
     *
     * Generated from protobuf enum <code>CONNECTION_TYPE_UNSPECIFIED = 0;</code>
     */
    const CONNECTION_TYPE_UNSPECIFIED = 0;
    /**
     * Cloud SQL connection.
     *
     * Generated from protobuf enum <code>CLOUD_SQL = 1;</code>
     */
    const CLOUD_SQL = 1;

    private static $valueToName = [
        self::CONNECTION_TYPE_UNSPECIFIED => 'CONNECTION_TYPE_UNSPECIFIED',
        self::CLOUD_SQL => 'CLOUD_SQL',
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


