<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/vm_cluster.proto

namespace Google\Cloud\OracleDatabase\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data collection options for diagnostics.
 *
 * Generated from protobuf message <code>google.cloud.oracledatabase.v1.DataCollectionOptions</code>
 */
class DataCollectionOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Indicates whether diagnostic collection is enabled for the VM
     * cluster
     *
     * Generated from protobuf field <code>bool diagnostics_events_enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $diagnostics_events_enabled = false;
    /**
     * Optional. Indicates whether health monitoring is enabled for the VM cluster
     *
     * Generated from protobuf field <code>bool health_monitoring_enabled = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $health_monitoring_enabled = false;
    /**
     * Optional. Indicates whether incident logs and trace collection are enabled
     * for the VM cluster
     *
     * Generated from protobuf field <code>bool incident_logs_enabled = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $incident_logs_enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $diagnostics_events_enabled
     *           Optional. Indicates whether diagnostic collection is enabled for the VM
     *           cluster
     *     @type bool $health_monitoring_enabled
     *           Optional. Indicates whether health monitoring is enabled for the VM cluster
     *     @type bool $incident_logs_enabled
     *           Optional. Indicates whether incident logs and trace collection are enabled
     *           for the VM cluster
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oracledatabase\V1\VmCluster::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Indicates whether diagnostic collection is enabled for the VM
     * cluster
     *
     * Generated from protobuf field <code>bool diagnostics_events_enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getDiagnosticsEventsEnabled()
    {
        return $this->diagnostics_events_enabled;
    }

    /**
     * Optional. Indicates whether diagnostic collection is enabled for the VM
     * cluster
     *
     * Generated from protobuf field <code>bool diagnostics_events_enabled = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setDiagnosticsEventsEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->diagnostics_events_enabled = $var;

        return $this;
    }

    /**
     * Optional. Indicates whether health monitoring is enabled for the VM cluster
     *
     * Generated from protobuf field <code>bool health_monitoring_enabled = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getHealthMonitoringEnabled()
    {
        return $this->health_monitoring_enabled;
    }

    /**
     * Optional. Indicates whether health monitoring is enabled for the VM cluster
     *
     * Generated from protobuf field <code>bool health_monitoring_enabled = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setHealthMonitoringEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->health_monitoring_enabled = $var;

        return $this;
    }

    /**
     * Optional. Indicates whether incident logs and trace collection are enabled
     * for the VM cluster
     *
     * Generated from protobuf field <code>bool incident_logs_enabled = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getIncidentLogsEnabled()
    {
        return $this->incident_logs_enabled;
    }

    /**
     * Optional. Indicates whether incident logs and trace collection are enabled
     * for the VM cluster
     *
     * Generated from protobuf field <code>bool incident_logs_enabled = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setIncidentLogsEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->incident_logs_enabled = $var;

        return $this;
    }

}
