<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/policytagmanagerserialization.proto

namespace GPBMetadata\Google\Cloud\Datacatalog\V1;

class Policytagmanagerserialization
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Policytagmanager::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
?google/cloud/datacatalog/v1/policytagmanagerserialization.protogoogle.cloud.datacatalog.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto2google/cloud/datacatalog/v1/policytagmanager.proto"�
SerializedTaxonomy
display_name (	B�A
description (	E
policy_tags (20.google.cloud.datacatalog.v1.SerializedPolicyTagP
activated_policy_types (20.google.cloud.datacatalog.v1.Taxonomy.PolicyType"�
SerializedPolicyTag

policy_tag (	
display_name (	B�A
description (	K
child_policy_tags (20.google.cloud.datacatalog.v1.SerializedPolicyTag"�
ReplaceTaxonomyRequest9
name (	B+�A�A%
#datacatalog.googleapis.com/TaxonomyQ
serialized_taxonomy (2/.google.cloud.datacatalog.v1.SerializedTaxonomyB�A"�
ImportTaxonomiesRequest;
parent (	B+�A�A%#datacatalog.googleapis.com/TaxonomyB
inline_source (2).google.cloud.datacatalog.v1.InlineSourceH Q
cross_regional_source (20.google.cloud.datacatalog.v1.CrossRegionalSourceH B
source"X
InlineSourceH

taxonomies (2/.google.cloud.datacatalog.v1.SerializedTaxonomyB�A"T
CrossRegionalSource=
taxonomy (	B+�A�A%
#datacatalog.googleapis.com/Taxonomy"U
ImportTaxonomiesResponse9

taxonomies (2%.google.cloud.datacatalog.v1.Taxonomy"�
ExportTaxonomiesRequest;
parent (	B+�A�A%#datacatalog.googleapis.com/Taxonomy?

taxonomies (	B+�A�A%
#datacatalog.googleapis.com/Taxonomy
serialized_taxonomies (H B
destination"_
ExportTaxonomiesResponseC

taxonomies (2/.google.cloud.datacatalog.v1.SerializedTaxonomy2�
PolicyTagManagerSerialization�
ReplaceTaxonomy3.google.cloud.datacatalog.v1.ReplaceTaxonomyRequest%.google.cloud.datacatalog.v1.Taxonomy"A���;"6/v1/{name=projects/*/locations/*/taxonomies/*}:replace:*�
ImportTaxonomies4.google.cloud.datacatalog.v1.ImportTaxonomiesRequest5.google.cloud.datacatalog.v1.ImportTaxonomiesResponse"@���:"5/v1/{parent=projects/*/locations/*}/taxonomies:import:*�
ExportTaxonomies4.google.cloud.datacatalog.v1.ExportTaxonomiesRequest5.google.cloud.datacatalog.v1.ExportTaxonomiesResponse"=���75/v1/{parent=projects/*/locations/*}/taxonomies:exportN�Adatacatalog.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.datacatalog.v1B"PolicyTagManagerSerializationProtoPZFgoogle.golang.org/genproto/googleapis/cloud/datacatalog/v1;datacatalog��Google.Cloud.DataCatalog.V1�Google\\Cloud\\DataCatalog\\V1�Google::Cloud::DataCatalog::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

