<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: benchmark.proto

namespace Benchmark;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>benchmark.Elements</code>
 */
class Elements extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.benchmark.Distance distance = 1;</code>
     */
    private $distance = null;
    /**
     * Generated from protobuf field <code>.benchmark.Duration duration = 2;</code>
     */
    private $duration = null;
    /**
     * Generated from protobuf field <code>string status = 3;</code>
     */
    private $status = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Benchmark\Distance $distance
     *     @type \Benchmark\Duration $duration
     *     @type string $status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Benchmark::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.benchmark.Distance distance = 1;</code>
     * @return \Benchmark\Distance
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Generated from protobuf field <code>.benchmark.Distance distance = 1;</code>
     * @param \Benchmark\Distance $var
     * @return $this
     */
    public function setDistance($var)
    {
        GPBUtil::checkMessage($var, \Benchmark\Distance::class);
        $this->distance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.benchmark.Duration duration = 2;</code>
     * @return \Benchmark\Duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Generated from protobuf field <code>.benchmark.Duration duration = 2;</code>
     * @param \Benchmark\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Benchmark\Duration::class);
        $this->duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string status = 3;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>string status = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

}

