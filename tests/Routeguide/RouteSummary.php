<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
# source: route_guide.proto

namespace Routeguide;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\RouteGuide;

/**
 * A RouteSummary is received in response to a RecordRoute rpc.
 * It contains the number of individual points received, the number of
 * detected features, and the total distance covered as the cumulative sum of
 * the distance between each point.
 *
 * Generated from protobuf message <code>routeguide.RouteSummary</code>
 */
class RouteSummary extends Message
{
    /**
     * The number of points received.
     *
     * Generated from protobuf field <code>int32 point_count = 1;</code>
     */
    private $point_count = 0;

    /**
     * The number of known features passed while traversing the route.
     *
     * Generated from protobuf field <code>int32 feature_count = 2;</code>
     */
    private $feature_count = 0;

    /**
     * The distance covered in metres.
     *
     * Generated from protobuf field <code>int32 distance = 3;</code>
     */
    private $distance = 0;

    /**
     * The duration of the traversal in seconds.
     *
     * Generated from protobuf field <code>int32 elapsed_time = 4;</code>
     */
    private $elapsed_time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *                    Optional. Data for populating the Message object.
     *
     * @var int $point_count
     *          The number of points received
     * @var int $feature_count
     *          The number of known features passed while traversing the route
     * @var int $distance
     *          The distance covered in metres
     * @var int $elapsed_time
     *          The duration of the traversal in seconds.
     *          }
     */
    public function __construct($data = null)
    {
        RouteGuide::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of points received.
     *
     * Generated from protobuf field <code>int32 point_count = 1;</code>
     * @return int
     */
    public function getPointCount()
    {
        return $this->point_count;
    }

    /**
     * The number of points received.
     *
     * Generated from protobuf field <code>int32 point_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPointCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->point_count = $var;

        return $this;
    }

    /**
     * The number of known features passed while traversing the route.
     *
     * Generated from protobuf field <code>int32 feature_count = 2;</code>
     * @return int
     */
    public function getFeatureCount()
    {
        return $this->feature_count;
    }

    /**
     * The number of known features passed while traversing the route.
     *
     * Generated from protobuf field <code>int32 feature_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFeatureCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->feature_count = $var;

        return $this;
    }

    /**
     * The distance covered in metres.
     *
     * Generated from protobuf field <code>int32 distance = 3;</code>
     * @return int
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * The distance covered in metres.
     *
     * Generated from protobuf field <code>int32 distance = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDistance($var)
    {
        GPBUtil::checkInt32($var);
        $this->distance = $var;

        return $this;
    }

    /**
     * The duration of the traversal in seconds.
     *
     * Generated from protobuf field <code>int32 elapsed_time = 4;</code>
     * @return int
     */
    public function getElapsedTime()
    {
        return $this->elapsed_time;
    }

    /**
     * The duration of the traversal in seconds.
     *
     * Generated from protobuf field <code>int32 elapsed_time = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setElapsedTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->elapsed_time = $var;

        return $this;
    }
}
