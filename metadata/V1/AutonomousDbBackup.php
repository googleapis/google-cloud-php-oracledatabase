<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/autonomous_db_backup.proto

namespace GPBMetadata\Google\Cloud\Oracledatabase\V1;

class AutonomousDbBackup
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/cloud/oracledatabase/v1/autonomous_db_backup.protogoogle.cloud.oracledatabase.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�
AutonomousDatabaseBackup
name (	B�AU
autonomous_database (	B8�A�A2
0oracledatabase.googleapis.com/AutonomousDatabase
display_name (	B�A[

properties (2B.google.cloud.oracledatabase.v1.AutonomousDatabaseBackupPropertiesB�AY
labels (2D.google.cloud.oracledatabase.v1.AutonomousDatabaseBackup.LabelsEntryB�A-
LabelsEntry
key (	
value (	:8:��A�
6oracledatabase.googleapis.com/AutonomousDatabaseBackup^projects/{project}/locations/{location}/autonomousDatabaseBackups/{autonomous_database_backup}*autonomousDatabaseBackups2autonomousDatabaseBackup"�
"AutonomousDatabaseBackupProperties
ocid (	B�A"
retention_period_days (B�A
compartment_id (	B�A
database_size_tb (B�A

db_version (	B�A 
is_long_term_backup (B�A 
is_automatic_backup (B�A
is_restorable (B�A
key_store_id	 (	B�A
key_store_wallet
 (	B�A

kms_key_id (	B�A
kms_key_version_id (	B�A
lifecycle_details (	B�Af
lifecycle_state (2H.google.cloud.oracledatabase.v1.AutonomousDatabaseBackupProperties.StateB�A
size_tb (B�A<
available_till_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A3

start_time (2.google.protobuf.TimestampB�AZ
type (2G.google.cloud.oracledatabase.v1.AutonomousDatabaseBackupProperties.TypeB�A
vault_id (	B�A"m
State
STATE_UNSPECIFIED 
CREATING

ACTIVE
DELETING
DELETED

FAILED
UPDATING"F
Type
TYPE_UNSPECIFIED 
INCREMENTAL
FULL
	LONG_TERMB�
"com.google.cloud.oracledatabase.v1BAutonomousDbBackupProtoPZJcloud.google.com/go/oracledatabase/apiv1/oracledatabasepb;oracledatabasepb�Google.Cloud.OracleDatabase.V1�Google\\Cloud\\OracleDatabase\\V1�!Google::Cloud::OracleDatabase::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

