<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/oracledatabase.proto

namespace Google\Cloud\OracleDatabase\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for `AutonomousDatabase.Stop`.
 *
 * Generated from protobuf message <code>google.cloud.oracledatabase.v1.StopAutonomousDatabaseRequest</code>
 */
class StopAutonomousDatabaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Autonomous Database in the following format:
     * projects/{project}/locations/{location}/autonomousDatabases/{autonomous_database}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the Autonomous Database in the following format:
     *                     projects/{project}/locations/{location}/autonomousDatabases/{autonomous_database}. Please see
     *                     {@see OracleDatabaseClient::autonomousDatabaseName()} for help formatting this field.
     *
     * @return \Google\Cloud\OracleDatabase\V1\StopAutonomousDatabaseRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the Autonomous Database in the following format:
     *           projects/{project}/locations/{location}/autonomousDatabases/{autonomous_database}.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oracledatabase\V1\Oracledatabase::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Autonomous Database in the following format:
     * projects/{project}/locations/{location}/autonomousDatabases/{autonomous_database}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the Autonomous Database in the following format:
     * projects/{project}/locations/{location}/autonomousDatabases/{autonomous_database}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

