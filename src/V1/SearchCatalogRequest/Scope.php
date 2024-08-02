<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1\SearchCatalogRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The criteria that select the subspace used for query matching.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.SearchCatalogRequest.Scope</code>
 */
class Scope extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of organization IDs to search within.
     * To find your organization ID, follow the steps from
     * [Creating and managing organizations]
     * (/resource-manager/docs/creating-managing-organization).
     *
     * Generated from protobuf field <code>repeated string include_org_ids = 2;</code>
     */
    private $include_org_ids;
    /**
     * The list of project IDs to search within.
     * For more information on the distinction between project names, IDs, and
     * numbers, see [Projects](/docs/overview/#projects).
     *
     * Generated from protobuf field <code>repeated string include_project_ids = 3;</code>
     */
    private $include_project_ids;
    /**
     * If `true`, include Google Cloud public datasets in
     * search results. By default, they are excluded.
     * See [Google Cloud Public Datasets](/public-datasets) for more
     * information.
     *
     * Generated from protobuf field <code>bool include_gcp_public_datasets = 7;</code>
     */
    protected $include_gcp_public_datasets = false;
    /**
     * Optional. The list of locations to search within. If empty, all locations
     * are searched.
     * Returns an error if any location in the list isn't one of the [Supported
     * regions](https://cloud.google.com/data-catalog/docs/concepts/regions#supported_regions).
     * If a location is unreachable, its name is returned in the
     * `SearchCatalogResponse.unreachable` field. To get additional information
     * on the error, repeat the search request and set the location name as the
     * value of this parameter.
     *
     * Generated from protobuf field <code>repeated string restricted_locations = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $restricted_locations;
    /**
     * Optional. If `true`, search only among starred entries.
     * By default, all results are returned, starred or not.
     *
     * Generated from protobuf field <code>bool starred_only = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $starred_only = false;
    /**
     * Optional. This field is deprecated. The search mechanism for public and
     * private tag templates is the same.
     *
     * Generated from protobuf field <code>bool include_public_tag_templates = 19 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @deprecated
     */
    protected $include_public_tag_templates = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $include_org_ids
     *           The list of organization IDs to search within.
     *           To find your organization ID, follow the steps from
     *           [Creating and managing organizations]
     *           (/resource-manager/docs/creating-managing-organization).
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $include_project_ids
     *           The list of project IDs to search within.
     *           For more information on the distinction between project names, IDs, and
     *           numbers, see [Projects](/docs/overview/#projects).
     *     @type bool $include_gcp_public_datasets
     *           If `true`, include Google Cloud public datasets in
     *           search results. By default, they are excluded.
     *           See [Google Cloud Public Datasets](/public-datasets) for more
     *           information.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $restricted_locations
     *           Optional. The list of locations to search within. If empty, all locations
     *           are searched.
     *           Returns an error if any location in the list isn't one of the [Supported
     *           regions](https://cloud.google.com/data-catalog/docs/concepts/regions#supported_regions).
     *           If a location is unreachable, its name is returned in the
     *           `SearchCatalogResponse.unreachable` field. To get additional information
     *           on the error, repeat the search request and set the location name as the
     *           value of this parameter.
     *     @type bool $starred_only
     *           Optional. If `true`, search only among starred entries.
     *           By default, all results are returned, starred or not.
     *     @type bool $include_public_tag_templates
     *           Optional. This field is deprecated. The search mechanism for public and
     *           private tag templates is the same.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of organization IDs to search within.
     * To find your organization ID, follow the steps from
     * [Creating and managing organizations]
     * (/resource-manager/docs/creating-managing-organization).
     *
     * Generated from protobuf field <code>repeated string include_org_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludeOrgIds()
    {
        return $this->include_org_ids;
    }

    /**
     * The list of organization IDs to search within.
     * To find your organization ID, follow the steps from
     * [Creating and managing organizations]
     * (/resource-manager/docs/creating-managing-organization).
     *
     * Generated from protobuf field <code>repeated string include_org_ids = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludeOrgIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_org_ids = $arr;

        return $this;
    }

    /**
     * The list of project IDs to search within.
     * For more information on the distinction between project names, IDs, and
     * numbers, see [Projects](/docs/overview/#projects).
     *
     * Generated from protobuf field <code>repeated string include_project_ids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludeProjectIds()
    {
        return $this->include_project_ids;
    }

    /**
     * The list of project IDs to search within.
     * For more information on the distinction between project names, IDs, and
     * numbers, see [Projects](/docs/overview/#projects).
     *
     * Generated from protobuf field <code>repeated string include_project_ids = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludeProjectIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_project_ids = $arr;

        return $this;
    }

    /**
     * If `true`, include Google Cloud public datasets in
     * search results. By default, they are excluded.
     * See [Google Cloud Public Datasets](/public-datasets) for more
     * information.
     *
     * Generated from protobuf field <code>bool include_gcp_public_datasets = 7;</code>
     * @return bool
     */
    public function getIncludeGcpPublicDatasets()
    {
        return $this->include_gcp_public_datasets;
    }

    /**
     * If `true`, include Google Cloud public datasets in
     * search results. By default, they are excluded.
     * See [Google Cloud Public Datasets](/public-datasets) for more
     * information.
     *
     * Generated from protobuf field <code>bool include_gcp_public_datasets = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeGcpPublicDatasets($var)
    {
        GPBUtil::checkBool($var);
        $this->include_gcp_public_datasets = $var;

        return $this;
    }

    /**
     * Optional. The list of locations to search within. If empty, all locations
     * are searched.
     * Returns an error if any location in the list isn't one of the [Supported
     * regions](https://cloud.google.com/data-catalog/docs/concepts/regions#supported_regions).
     * If a location is unreachable, its name is returned in the
     * `SearchCatalogResponse.unreachable` field. To get additional information
     * on the error, repeat the search request and set the location name as the
     * value of this parameter.
     *
     * Generated from protobuf field <code>repeated string restricted_locations = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRestrictedLocations()
    {
        return $this->restricted_locations;
    }

    /**
     * Optional. The list of locations to search within. If empty, all locations
     * are searched.
     * Returns an error if any location in the list isn't one of the [Supported
     * regions](https://cloud.google.com/data-catalog/docs/concepts/regions#supported_regions).
     * If a location is unreachable, its name is returned in the
     * `SearchCatalogResponse.unreachable` field. To get additional information
     * on the error, repeat the search request and set the location name as the
     * value of this parameter.
     *
     * Generated from protobuf field <code>repeated string restricted_locations = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRestrictedLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->restricted_locations = $arr;

        return $this;
    }

    /**
     * Optional. If `true`, search only among starred entries.
     * By default, all results are returned, starred or not.
     *
     * Generated from protobuf field <code>bool starred_only = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getStarredOnly()
    {
        return $this->starred_only;
    }

    /**
     * Optional. If `true`, search only among starred entries.
     * By default, all results are returned, starred or not.
     *
     * Generated from protobuf field <code>bool starred_only = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setStarredOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->starred_only = $var;

        return $this;
    }

    /**
     * Optional. This field is deprecated. The search mechanism for public and
     * private tag templates is the same.
     *
     * Generated from protobuf field <code>bool include_public_tag_templates = 19 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     * @deprecated
     */
    public function getIncludePublicTagTemplates()
    {
        @trigger_error('include_public_tag_templates is deprecated.', E_USER_DEPRECATED);
        return $this->include_public_tag_templates;
    }

    /**
     * Optional. This field is deprecated. The search mechanism for public and
     * private tag templates is the same.
     *
     * Generated from protobuf field <code>bool include_public_tag_templates = 19 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     * @deprecated
     */
    public function setIncludePublicTagTemplates($var)
    {
        @trigger_error('include_public_tag_templates is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkBool($var);
        $this->include_public_tag_templates = $var;

        return $this;
    }

}


