<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: benchmark.proto

namespace Benchmark;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>benchmark.Last_reply</code>
 */
class Last_reply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 postid = 1;</code>
     */
    private $postid = 0;
    /**
     * Generated from protobuf field <code>string avatar = 2;</code>
     */
    private $avatar = '';
    /**
     * Generated from protobuf field <code>string content = 3;</code>
     */
    private $content = '';
    /**
     * Generated from protobuf field <code>string content_original = 4;</code>
     */
    private $content_original = '';
    /**
     * Generated from protobuf field <code>string created = 5;</code>
     */
    private $created = '';
    /**
     * Generated from protobuf field <code>string created_display = 6;</code>
     */
    private $created_display = '';
    /**
     * Generated from protobuf field <code>string username = 7;</code>
     */
    private $username = '';
    /**
     * Generated from protobuf field <code>string fullname = 8;</code>
     */
    private $fullname = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Any titleurl = 9;</code>
     */
    private $titleurl = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Any title = 10;</code>
     */
    private $title = null;
    /**
     * Generated from protobuf field <code>uint32 official = 11;</code>
     */
    private $official = 0;
    /**
     * Generated from protobuf field <code>uint32 ispro = 12;</code>
     */
    private $ispro = 0;
    /**
     * Generated from protobuf field <code>uint32 ispinned = 13;</code>
     */
    private $ispinned = 0;
    /**
     * Generated from protobuf field <code>uint32 trending = 14;</code>
     */
    private $trending = 0;
    /**
     * Generated from protobuf field <code>string replies = 15;</code>
     */
    private $replies = '';
    /**
     * Generated from protobuf field <code>uint32 likes = 16;</code>
     */
    private $likes = 0;
    /**
     * Generated from protobuf field <code>uint32 dislikes = 17;</code>
     */
    private $dislikes = 0;
    /**
     * Generated from protobuf field <code>uint32 reposted = 18;</code>
     */
    private $reposted = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Any repostedfrom = 19;</code>
     */
    private $repostedfrom = null;
    /**
     * Generated from protobuf field <code>uint32 liked = 20;</code>
     */
    private $liked = 0;
    /**
     * Generated from protobuf field <code>string likers = 21;</code>
     */
    private $likers = '';
    /**
     * Generated from protobuf field <code>uint32 saved = 22;</code>
     */
    private $saved = 0;
    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any images = 23;</code>
     */
    private $images;
    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any attachment = 24;</code>
     */
    private $attachment;
    /**
     * Generated from protobuf field <code>uint32 parent_postid = 25;</code>
     */
    private $parent_postid = 0;
    /**
     * Generated from protobuf field <code>uint32 disliked = 26;</code>
     */
    private $disliked = 0;
    /**
     * Generated from protobuf field <code>uint32 follow = 27;</code>
     */
    private $follow = 0;
    /**
     * Generated from protobuf field <code>string newsfeed_source = 28;</code>
     */
    private $newsfeed_source = '';
    /**
     * Generated from protobuf field <code>string newsfeed_label = 29;</code>
     */
    private $newsfeed_label = '';
    /**
     * Generated from protobuf field <code>string newsfeed_img = 30;</code>
     */
    private $newsfeed_img = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Any linkpreview = 31;</code>
     */
    private $linkpreview = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Any tradeshare = 32;</code>
     */
    private $tradeshare = null;
    /**
     * Generated from protobuf field <code>string total_share = 33;</code>
     */
    private $total_share = '';
    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any target_price = 34;</code>
     */
    private $target_price;
    /**
     * Generated from protobuf field <code>.google.protobuf.Any country = 35;</code>
     */
    private $country = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Any last_reply_date = 36;</code>
     */
    private $last_reply_date = null;
    /**
     * Generated from protobuf field <code>uint32 isnews = 37;</code>
     */
    private $isnews = 0;
    /**
     * Generated from protobuf field <code>uint32 isreport = 38;</code>
     */
    private $isreport = 0;
    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any topics = 39;</code>
     */
    private $topics;
    /**
     * Generated from protobuf field <code>.google.protobuf.Any last_reply = 40;</code>
     */
    private $last_reply = null;
    /**
     * Generated from protobuf field <code>.benchmark.Mask_html mask_html = 41;</code>
     */
    private $mask_html = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $postid
     *     @type string $avatar
     *     @type string $content
     *     @type string $content_original
     *     @type string $created
     *     @type string $created_display
     *     @type string $username
     *     @type string $fullname
     *     @type \Google\Protobuf\Any $titleurl
     *     @type \Google\Protobuf\Any $title
     *     @type int $official
     *     @type int $ispro
     *     @type int $ispinned
     *     @type int $trending
     *     @type string $replies
     *     @type int $likes
     *     @type int $dislikes
     *     @type int $reposted
     *     @type \Google\Protobuf\Any $repostedfrom
     *     @type int $liked
     *     @type string $likers
     *     @type int $saved
     *     @type \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $images
     *     @type \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $attachment
     *     @type int $parent_postid
     *     @type int $disliked
     *     @type int $follow
     *     @type string $newsfeed_source
     *     @type string $newsfeed_label
     *     @type string $newsfeed_img
     *     @type \Google\Protobuf\Any $linkpreview
     *     @type \Google\Protobuf\Any $tradeshare
     *     @type string $total_share
     *     @type \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $target_price
     *     @type \Google\Protobuf\Any $country
     *     @type \Google\Protobuf\Any $last_reply_date
     *     @type int $isnews
     *     @type int $isreport
     *     @type \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $topics
     *     @type \Google\Protobuf\Any $last_reply
     *     @type \Benchmark\Mask_html $mask_html
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Benchmark::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 postid = 1;</code>
     * @return int
     */
    public function getPostid()
    {
        return $this->postid;
    }

    /**
     * Generated from protobuf field <code>uint32 postid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPostid($var)
    {
        GPBUtil::checkUint32($var);
        $this->postid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string avatar = 2;</code>
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Generated from protobuf field <code>string avatar = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAvatar($var)
    {
        GPBUtil::checkString($var, True);
        $this->avatar = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string content = 3;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Generated from protobuf field <code>string content = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string content_original = 4;</code>
     * @return string
     */
    public function getContentOriginal()
    {
        return $this->content_original;
    }

    /**
     * Generated from protobuf field <code>string content_original = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setContentOriginal($var)
    {
        GPBUtil::checkString($var, True);
        $this->content_original = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string created = 5;</code>
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Generated from protobuf field <code>string created = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCreated($var)
    {
        GPBUtil::checkString($var, True);
        $this->created = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string created_display = 6;</code>
     * @return string
     */
    public function getCreatedDisplay()
    {
        return $this->created_display;
    }

    /**
     * Generated from protobuf field <code>string created_display = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedDisplay($var)
    {
        GPBUtil::checkString($var, True);
        $this->created_display = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string username = 7;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Generated from protobuf field <code>string username = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fullname = 8;</code>
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Generated from protobuf field <code>string fullname = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setFullname($var)
    {
        GPBUtil::checkString($var, True);
        $this->fullname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any titleurl = 9;</code>
     * @return \Google\Protobuf\Any
     */
    public function getTitleurl()
    {
        return $this->titleurl;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any titleurl = 9;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setTitleurl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->titleurl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any title = 10;</code>
     * @return \Google\Protobuf\Any
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any title = 10;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 official = 11;</code>
     * @return int
     */
    public function getOfficial()
    {
        return $this->official;
    }

    /**
     * Generated from protobuf field <code>uint32 official = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setOfficial($var)
    {
        GPBUtil::checkUint32($var);
        $this->official = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ispro = 12;</code>
     * @return int
     */
    public function getIspro()
    {
        return $this->ispro;
    }

    /**
     * Generated from protobuf field <code>uint32 ispro = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setIspro($var)
    {
        GPBUtil::checkUint32($var);
        $this->ispro = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ispinned = 13;</code>
     * @return int
     */
    public function getIspinned()
    {
        return $this->ispinned;
    }

    /**
     * Generated from protobuf field <code>uint32 ispinned = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setIspinned($var)
    {
        GPBUtil::checkUint32($var);
        $this->ispinned = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 trending = 14;</code>
     * @return int
     */
    public function getTrending()
    {
        return $this->trending;
    }

    /**
     * Generated from protobuf field <code>uint32 trending = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setTrending($var)
    {
        GPBUtil::checkUint32($var);
        $this->trending = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string replies = 15;</code>
     * @return string
     */
    public function getReplies()
    {
        return $this->replies;
    }

    /**
     * Generated from protobuf field <code>string replies = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setReplies($var)
    {
        GPBUtil::checkString($var, True);
        $this->replies = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 likes = 16;</code>
     * @return int
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Generated from protobuf field <code>uint32 likes = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setLikes($var)
    {
        GPBUtil::checkUint32($var);
        $this->likes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dislikes = 17;</code>
     * @return int
     */
    public function getDislikes()
    {
        return $this->dislikes;
    }

    /**
     * Generated from protobuf field <code>uint32 dislikes = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setDislikes($var)
    {
        GPBUtil::checkUint32($var);
        $this->dislikes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 reposted = 18;</code>
     * @return int
     */
    public function getReposted()
    {
        return $this->reposted;
    }

    /**
     * Generated from protobuf field <code>uint32 reposted = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setReposted($var)
    {
        GPBUtil::checkUint32($var);
        $this->reposted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any repostedfrom = 19;</code>
     * @return \Google\Protobuf\Any
     */
    public function getRepostedfrom()
    {
        return $this->repostedfrom;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any repostedfrom = 19;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setRepostedfrom($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->repostedfrom = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 liked = 20;</code>
     * @return int
     */
    public function getLiked()
    {
        return $this->liked;
    }

    /**
     * Generated from protobuf field <code>uint32 liked = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setLiked($var)
    {
        GPBUtil::checkUint32($var);
        $this->liked = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string likers = 21;</code>
     * @return string
     */
    public function getLikers()
    {
        return $this->likers;
    }

    /**
     * Generated from protobuf field <code>string likers = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setLikers($var)
    {
        GPBUtil::checkString($var, True);
        $this->likers = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 saved = 22;</code>
     * @return int
     */
    public function getSaved()
    {
        return $this->saved;
    }

    /**
     * Generated from protobuf field <code>uint32 saved = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setSaved($var)
    {
        GPBUtil::checkUint32($var);
        $this->saved = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any images = 23;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any images = 23;</code>
     * @param \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->images = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any attachment = 24;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any attachment = 24;</code>
     * @param \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttachment($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->attachment = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 parent_postid = 25;</code>
     * @return int
     */
    public function getParentPostid()
    {
        return $this->parent_postid;
    }

    /**
     * Generated from protobuf field <code>uint32 parent_postid = 25;</code>
     * @param int $var
     * @return $this
     */
    public function setParentPostid($var)
    {
        GPBUtil::checkUint32($var);
        $this->parent_postid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 disliked = 26;</code>
     * @return int
     */
    public function getDisliked()
    {
        return $this->disliked;
    }

    /**
     * Generated from protobuf field <code>uint32 disliked = 26;</code>
     * @param int $var
     * @return $this
     */
    public function setDisliked($var)
    {
        GPBUtil::checkUint32($var);
        $this->disliked = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 follow = 27;</code>
     * @return int
     */
    public function getFollow()
    {
        return $this->follow;
    }

    /**
     * Generated from protobuf field <code>uint32 follow = 27;</code>
     * @param int $var
     * @return $this
     */
    public function setFollow($var)
    {
        GPBUtil::checkUint32($var);
        $this->follow = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string newsfeed_source = 28;</code>
     * @return string
     */
    public function getNewsfeedSource()
    {
        return $this->newsfeed_source;
    }

    /**
     * Generated from protobuf field <code>string newsfeed_source = 28;</code>
     * @param string $var
     * @return $this
     */
    public function setNewsfeedSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->newsfeed_source = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string newsfeed_label = 29;</code>
     * @return string
     */
    public function getNewsfeedLabel()
    {
        return $this->newsfeed_label;
    }

    /**
     * Generated from protobuf field <code>string newsfeed_label = 29;</code>
     * @param string $var
     * @return $this
     */
    public function setNewsfeedLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->newsfeed_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string newsfeed_img = 30;</code>
     * @return string
     */
    public function getNewsfeedImg()
    {
        return $this->newsfeed_img;
    }

    /**
     * Generated from protobuf field <code>string newsfeed_img = 30;</code>
     * @param string $var
     * @return $this
     */
    public function setNewsfeedImg($var)
    {
        GPBUtil::checkString($var, True);
        $this->newsfeed_img = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any linkpreview = 31;</code>
     * @return \Google\Protobuf\Any
     */
    public function getLinkpreview()
    {
        return $this->linkpreview;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any linkpreview = 31;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setLinkpreview($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->linkpreview = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any tradeshare = 32;</code>
     * @return \Google\Protobuf\Any
     */
    public function getTradeshare()
    {
        return $this->tradeshare;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any tradeshare = 32;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setTradeshare($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->tradeshare = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string total_share = 33;</code>
     * @return string
     */
    public function getTotalShare()
    {
        return $this->total_share;
    }

    /**
     * Generated from protobuf field <code>string total_share = 33;</code>
     * @param string $var
     * @return $this
     */
    public function setTotalShare($var)
    {
        GPBUtil::checkString($var, True);
        $this->total_share = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any target_price = 34;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargetPrice()
    {
        return $this->target_price;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any target_price = 34;</code>
     * @param \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargetPrice($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->target_price = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any country = 35;</code>
     * @return \Google\Protobuf\Any
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any country = 35;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->country = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any last_reply_date = 36;</code>
     * @return \Google\Protobuf\Any
     */
    public function getLastReplyDate()
    {
        return $this->last_reply_date;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any last_reply_date = 36;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setLastReplyDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->last_reply_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 isnews = 37;</code>
     * @return int
     */
    public function getIsnews()
    {
        return $this->isnews;
    }

    /**
     * Generated from protobuf field <code>uint32 isnews = 37;</code>
     * @param int $var
     * @return $this
     */
    public function setIsnews($var)
    {
        GPBUtil::checkUint32($var);
        $this->isnews = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 isreport = 38;</code>
     * @return int
     */
    public function getIsreport()
    {
        return $this->isreport;
    }

    /**
     * Generated from protobuf field <code>uint32 isreport = 38;</code>
     * @param int $var
     * @return $this
     */
    public function setIsreport($var)
    {
        GPBUtil::checkUint32($var);
        $this->isreport = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any topics = 39;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any topics = 39;</code>
     * @param \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTopics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->topics = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any last_reply = 40;</code>
     * @return \Google\Protobuf\Any
     */
    public function getLastReply()
    {
        return $this->last_reply;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any last_reply = 40;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setLastReply($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->last_reply = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.benchmark.Mask_html mask_html = 41;</code>
     * @return \Benchmark\Mask_html
     */
    public function getMaskHtml()
    {
        return $this->mask_html;
    }

    /**
     * Generated from protobuf field <code>.benchmark.Mask_html mask_html = 41;</code>
     * @param \Benchmark\Mask_html $var
     * @return $this
     */
    public function setMaskHtml($var)
    {
        GPBUtil::checkMessage($var, \Benchmark\Mask_html::class);
        $this->mask_html = $var;

        return $this;
    }

}
