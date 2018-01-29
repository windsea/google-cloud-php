<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta2/dlp.proto

namespace Google\Cloud\Dlp\V2beta2;

/**
 * An enum to represent the various type of DLP jobs.
 *
 * Protobuf enum <code>Google\Privacy\Dlp\V2beta2\DlpJobType</code>
 */
class DlpJobType
{
    /**
     * Generated from protobuf enum <code>DLP_JOB_TYPE_UNSPECIFIED = 0;</code>
     */
    const DLP_JOB_TYPE_UNSPECIFIED = 0;
    /**
     * The job inspected Google Cloud for sensitive data.
     *
     * Generated from protobuf enum <code>INSPECT_JOB = 1;</code>
     */
    const INSPECT_JOB = 1;
    /**
     * The job executed a Risk Analysis computation.
     *
     * Generated from protobuf enum <code>RISK_ANALYSIS_JOB = 2;</code>
     */
    const RISK_ANALYSIS_JOB = 2;
}

