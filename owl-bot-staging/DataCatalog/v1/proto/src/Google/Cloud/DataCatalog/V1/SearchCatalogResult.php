<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/search.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result in the response to a search request.
 * Each result captures details of one entry that matches the search.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.SearchCatalogResult</code>
 */
class SearchCatalogResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of the search result.
     * You can use this field to determine which get method to call to fetch the
     * full resource.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SearchResultType search_result_type = 1;</code>
     */
    protected $search_result_type = 0;
    /**
     * Sub-type of the search result.
     * A dot-delimited full type of the resource. The same type you
     * specify in the `type` search predicate.
     * Examples: `entry.table`, `entry.dataStream`, `tagTemplate`.
     *
     * Generated from protobuf field <code>string search_result_subtype = 2;</code>
     */
    protected $search_result_subtype = '';
    /**
     * The relative name of the resource in URL format.
     * Examples:
     *  * `projects/{PROJECT_ID}/locations/{LOCATION_ID}/entryGroups/{ENTRY_GROUP_ID}/entries/{ENTRY_ID}`
     *  * `projects/{PROJECT_ID}/tagTemplates/{TAG_TEMPLATE_ID}`
     *
     * Generated from protobuf field <code>string relative_resource_name = 3;</code>
     */
    protected $relative_resource_name = '';
    /**
     * The full name of the Google Cloud resource the entry belongs to.
     * For more information, see [Full Resource Name]
     * (/apis/design/resource_names#full_resource_name).
     * Example:
     * `//bigquery.googleapis.com/projects/PROJECT_ID/datasets/DATASET_ID/tables/TABLE_ID`
     *
     * Generated from protobuf field <code>string linked_resource = 4;</code>
     */
    protected $linked_resource = '';
    /**
     * The last modification timestamp of the entry in the source system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modify_time = 7;</code>
     */
    protected $modify_time = null;
    /**
     * Fully qualified name (FQN) of the resource.
     * FQNs take two forms:
     * * For non-regionalized resources:
     *   `{SYSTEM}:{PROJECT}.{PATH_TO_RESOURCE_SEPARATED_WITH_DOTS}`
     * * For regionalized resources:
     *   `{SYSTEM}:{PROJECT}.{LOCATION_ID}.{PATH_TO_RESOURCE_SEPARATED_WITH_DOTS}`
     * Example for a DPMS table:
     * `dataproc_metastore:PROJECT_ID.LOCATION_ID.INSTANCE_ID.DATABASE_ID.TABLE_ID`
     *
     * Generated from protobuf field <code>string fully_qualified_name = 10;</code>
     */
    protected $fully_qualified_name = '';
    /**
     * The display name of the result.
     *
     * Generated from protobuf field <code>string display_name = 12;</code>
     */
    protected $display_name = '';
    /**
     * Entry description that can consist of several sentences or paragraphs that
     * describe entry contents.
     *
     * Generated from protobuf field <code>string description = 13;</code>
     */
    protected $description = '';
    protected $system;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $search_result_type
     *           Type of the search result.
     *           You can use this field to determine which get method to call to fetch the
     *           full resource.
     *     @type string $search_result_subtype
     *           Sub-type of the search result.
     *           A dot-delimited full type of the resource. The same type you
     *           specify in the `type` search predicate.
     *           Examples: `entry.table`, `entry.dataStream`, `tagTemplate`.
     *     @type string $relative_resource_name
     *           The relative name of the resource in URL format.
     *           Examples:
     *            * `projects/{PROJECT_ID}/locations/{LOCATION_ID}/entryGroups/{ENTRY_GROUP_ID}/entries/{ENTRY_ID}`
     *            * `projects/{PROJECT_ID}/tagTemplates/{TAG_TEMPLATE_ID}`
     *     @type string $linked_resource
     *           The full name of the Google Cloud resource the entry belongs to.
     *           For more information, see [Full Resource Name]
     *           (/apis/design/resource_names#full_resource_name).
     *           Example:
     *           `//bigquery.googleapis.com/projects/PROJECT_ID/datasets/DATASET_ID/tables/TABLE_ID`
     *     @type \Google\Protobuf\Timestamp $modify_time
     *           The last modification timestamp of the entry in the source system.
     *     @type int $integrated_system
     *           Output only. The source system that Data Catalog automatically integrates  with, such
     *           as BigQuery, Cloud Pub/Sub, or Dataproc Metastore.
     *     @type string $user_specified_system
     *           Custom source system that you can manually integrate Data Catalog with.
     *     @type string $fully_qualified_name
     *           Fully qualified name (FQN) of the resource.
     *           FQNs take two forms:
     *           * For non-regionalized resources:
     *             `{SYSTEM}:{PROJECT}.{PATH_TO_RESOURCE_SEPARATED_WITH_DOTS}`
     *           * For regionalized resources:
     *             `{SYSTEM}:{PROJECT}.{LOCATION_ID}.{PATH_TO_RESOURCE_SEPARATED_WITH_DOTS}`
     *           Example for a DPMS table:
     *           `dataproc_metastore:PROJECT_ID.LOCATION_ID.INSTANCE_ID.DATABASE_ID.TABLE_ID`
     *     @type string $display_name
     *           The display name of the result.
     *     @type string $description
     *           Entry description that can consist of several sentences or paragraphs that
     *           describe entry contents.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Search::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of the search result.
     * You can use this field to determine which get method to call to fetch the
     * full resource.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SearchResultType search_result_type = 1;</code>
     * @return int
     */
    public function getSearchResultType()
    {
        return $this->search_result_type;
    }

    /**
     * Type of the search result.
     * You can use this field to determine which get method to call to fetch the
     * full resource.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SearchResultType search_result_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSearchResultType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataCatalog\V1\SearchResultType::class);
        $this->search_result_type = $var;

        return $this;
    }

    /**
     * Sub-type of the search result.
     * A dot-delimited full type of the resource. The same type you
     * specify in the `type` search predicate.
     * Examples: `entry.table`, `entry.dataStream`, `tagTemplate`.
     *
     * Generated from protobuf field <code>string search_result_subtype = 2;</code>
     * @return string
     */
    public function getSearchResultSubtype()
    {
        return $this->search_result_subtype;
    }

    /**
     * Sub-type of the search result.
     * A dot-delimited full type of the resource. The same type you
     * specify in the `type` search predicate.
     * Examples: `entry.table`, `entry.dataStream`, `tagTemplate`.
     *
     * Generated from protobuf field <code>string search_result_subtype = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSearchResultSubtype($var)
    {
        GPBUtil::checkString($var, True);
        $this->search_result_subtype = $var;

        return $this;
    }

    /**
     * The relative name of the resource in URL format.
     * Examples:
     *  * `projects/{PROJECT_ID}/locations/{LOCATION_ID}/entryGroups/{ENTRY_GROUP_ID}/entries/{ENTRY_ID}`
     *  * `projects/{PROJECT_ID}/tagTemplates/{TAG_TEMPLATE_ID}`
     *
     * Generated from protobuf field <code>string relative_resource_name = 3;</code>
     * @return string
     */
    public function getRelativeResourceName()
    {
        return $this->relative_resource_name;
    }

    /**
     * The relative name of the resource in URL format.
     * Examples:
     *  * `projects/{PROJECT_ID}/locations/{LOCATION_ID}/entryGroups/{ENTRY_GROUP_ID}/entries/{ENTRY_ID}`
     *  * `projects/{PROJECT_ID}/tagTemplates/{TAG_TEMPLATE_ID}`
     *
     * Generated from protobuf field <code>string relative_resource_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRelativeResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->relative_resource_name = $var;

        return $this;
    }

    /**
     * The full name of the Google Cloud resource the entry belongs to.
     * For more information, see [Full Resource Name]
     * (/apis/design/resource_names#full_resource_name).
     * Example:
     * `//bigquery.googleapis.com/projects/PROJECT_ID/datasets/DATASET_ID/tables/TABLE_ID`
     *
     * Generated from protobuf field <code>string linked_resource = 4;</code>
     * @return string
     */
    public function getLinkedResource()
    {
        return $this->linked_resource;
    }

    /**
     * The full name of the Google Cloud resource the entry belongs to.
     * For more information, see [Full Resource Name]
     * (/apis/design/resource_names#full_resource_name).
     * Example:
     * `//bigquery.googleapis.com/projects/PROJECT_ID/datasets/DATASET_ID/tables/TABLE_ID`
     *
     * Generated from protobuf field <code>string linked_resource = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLinkedResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->linked_resource = $var;

        return $this;
    }

    /**
     * The last modification timestamp of the entry in the source system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modify_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getModifyTime()
    {
        return $this->modify_time;
    }

    public function hasModifyTime()
    {
        return isset($this->modify_time);
    }

    public function clearModifyTime()
    {
        unset($this->modify_time);
    }

    /**
     * The last modification timestamp of the entry in the source system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modify_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setModifyTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->modify_time = $var;

        return $this;
    }

    /**
     * Output only. The source system that Data Catalog automatically integrates  with, such
     * as BigQuery, Cloud Pub/Sub, or Dataproc Metastore.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.IntegratedSystem integrated_system = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getIntegratedSystem()
    {
        return $this->readOneof(8);
    }

    public function hasIntegratedSystem()
    {
        return $this->hasOneof(8);
    }

    /**
     * Output only. The source system that Data Catalog automatically integrates  with, such
     * as BigQuery, Cloud Pub/Sub, or Dataproc Metastore.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.IntegratedSystem integrated_system = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setIntegratedSystem($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataCatalog\V1\IntegratedSystem::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Custom source system that you can manually integrate Data Catalog with.
     *
     * Generated from protobuf field <code>string user_specified_system = 9;</code>
     * @return string
     */
    public function getUserSpecifiedSystem()
    {
        return $this->readOneof(9);
    }

    public function hasUserSpecifiedSystem()
    {
        return $this->hasOneof(9);
    }

    /**
     * Custom source system that you can manually integrate Data Catalog with.
     *
     * Generated from protobuf field <code>string user_specified_system = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setUserSpecifiedSystem($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Fully qualified name (FQN) of the resource.
     * FQNs take two forms:
     * * For non-regionalized resources:
     *   `{SYSTEM}:{PROJECT}.{PATH_TO_RESOURCE_SEPARATED_WITH_DOTS}`
     * * For regionalized resources:
     *   `{SYSTEM}:{PROJECT}.{LOCATION_ID}.{PATH_TO_RESOURCE_SEPARATED_WITH_DOTS}`
     * Example for a DPMS table:
     * `dataproc_metastore:PROJECT_ID.LOCATION_ID.INSTANCE_ID.DATABASE_ID.TABLE_ID`
     *
     * Generated from protobuf field <code>string fully_qualified_name = 10;</code>
     * @return string
     */
    public function getFullyQualifiedName()
    {
        return $this->fully_qualified_name;
    }

    /**
     * Fully qualified name (FQN) of the resource.
     * FQNs take two forms:
     * * For non-regionalized resources:
     *   `{SYSTEM}:{PROJECT}.{PATH_TO_RESOURCE_SEPARATED_WITH_DOTS}`
     * * For regionalized resources:
     *   `{SYSTEM}:{PROJECT}.{LOCATION_ID}.{PATH_TO_RESOURCE_SEPARATED_WITH_DOTS}`
     * Example for a DPMS table:
     * `dataproc_metastore:PROJECT_ID.LOCATION_ID.INSTANCE_ID.DATABASE_ID.TABLE_ID`
     *
     * Generated from protobuf field <code>string fully_qualified_name = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setFullyQualifiedName($var)
    {
        GPBUtil::checkString($var, True);
        $this->fully_qualified_name = $var;

        return $this;
    }

    /**
     * The display name of the result.
     *
     * Generated from protobuf field <code>string display_name = 12;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The display name of the result.
     *
     * Generated from protobuf field <code>string display_name = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Entry description that can consist of several sentences or paragraphs that
     * describe entry contents.
     *
     * Generated from protobuf field <code>string description = 13;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Entry description that can consist of several sentences or paragraphs that
     * describe entry contents.
     *
     * Generated from protobuf field <code>string description = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSystem()
    {
        return $this->whichOneof("system");
    }

}

