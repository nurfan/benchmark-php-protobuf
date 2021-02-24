<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: benchmark.proto

namespace Benchmark;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>benchmark.Attr</code>
 */
class Attr extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string class = 1;</code>
     */
    private $class = '';
    /**
     * Generated from protobuf field <code>string data_company = 2;</code>
     */
    private $data_company = '';
    /**
     * Generated from protobuf field <code>string href = 3;</code>
     */
    private $href = '';
    /**
     * Generated from protobuf field <code>string target = 4;</code>
     */
    private $target = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $class
     *     @type string $data_company
     *     @type string $href
     *     @type string $target
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Benchmark::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string class = 1;</code>
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Generated from protobuf field <code>string class = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setClass($var)
    {
        GPBUtil::checkString($var, True);
        $this->class = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string data_company = 2;</code>
     * @return string
     */
    public function getDataCompany()
    {
        return $this->data_company;
    }

    /**
     * Generated from protobuf field <code>string data_company = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDataCompany($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_company = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string href = 3;</code>
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Generated from protobuf field <code>string href = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setHref($var)
    {
        GPBUtil::checkString($var, True);
        $this->href = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string target = 4;</code>
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Generated from protobuf field <code>string target = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->target = $var;

        return $this;
    }

}

