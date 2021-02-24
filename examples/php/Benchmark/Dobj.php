<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: benchmark.proto

namespace Benchmark;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>benchmark.Dobj</code>
 */
class Dobj extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string tag = 1;</code>
     */
    private $tag = '';
    /**
     * Generated from protobuf field <code>.benchmark.Attr2 attr = 2;</code>
     */
    private $attr = null;
    /**
     * Generated from protobuf field <code>string text = 3;</code>
     */
    private $text = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tag
     *     @type \Benchmark\Attr2 $attr
     *     @type string $text
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Benchmark::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string tag = 1;</code>
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Generated from protobuf field <code>string tag = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.benchmark.Attr2 attr = 2;</code>
     * @return \Benchmark\Attr2
     */
    public function getAttr()
    {
        return $this->attr;
    }

    /**
     * Generated from protobuf field <code>.benchmark.Attr2 attr = 2;</code>
     * @param \Benchmark\Attr2 $var
     * @return $this
     */
    public function setAttr($var)
    {
        GPBUtil::checkMessage($var, \Benchmark\Attr2::class);
        $this->attr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string text = 3;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Generated from protobuf field <code>string text = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

}

