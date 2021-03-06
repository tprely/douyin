<?php
/**
 * DiscoveryEntRankRankAlbum
 *
 * PHP version 5
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace swagger_client\Model;

use \ArrayAccess;
use swagger_client\ObjectSerializer;

/**
 * DiscoveryEntRankRankAlbum Class Doc Comment
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DiscoveryEntRankRankAlbum implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'album';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'name' => 'string',
'name_en' => 'string',
'poster' => 'string',
'release_date' => 'string',
'hot' => 'int',
'type' => 'int',
'maoyan_id' => 'string',
'areas' => 'string[]',
'tags' => 'string[]',
'directors' => 'string[]',
'actors' => 'string[]',
'influence_hot' => 'int',
'discussion_hot' => 'int',
'topic_hot' => 'int',
'search_hot' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'name_en' => null,
'poster' => null,
'release_date' => null,
'hot' => null,
'type' => 'int32',
'maoyan_id' => null,
'areas' => null,
'tags' => null,
'directors' => null,
'actors' => null,
'influence_hot' => null,
'discussion_hot' => null,
'topic_hot' => null,
'search_hot' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'name' => 'name',
'name_en' => 'name_en',
'poster' => 'poster',
'release_date' => 'release_date',
'hot' => 'hot',
'type' => 'type',
'maoyan_id' => 'maoyan_id',
'areas' => 'areas',
'tags' => 'tags',
'directors' => 'directors',
'actors' => 'actors',
'influence_hot' => 'influence_hot',
'discussion_hot' => 'discussion_hot',
'topic_hot' => 'topic_hot',
'search_hot' => 'search_hot'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'name_en' => 'setNameEn',
'poster' => 'setPoster',
'release_date' => 'setReleaseDate',
'hot' => 'setHot',
'type' => 'setType',
'maoyan_id' => 'setMaoyanId',
'areas' => 'setAreas',
'tags' => 'setTags',
'directors' => 'setDirectors',
'actors' => 'setActors',
'influence_hot' => 'setInfluenceHot',
'discussion_hot' => 'setDiscussionHot',
'topic_hot' => 'setTopicHot',
'search_hot' => 'setSearchHot'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'name_en' => 'getNameEn',
'poster' => 'getPoster',
'release_date' => 'getReleaseDate',
'hot' => 'getHot',
'type' => 'getType',
'maoyan_id' => 'getMaoyanId',
'areas' => 'getAreas',
'tags' => 'getTags',
'directors' => 'getDirectors',
'actors' => 'getActors',
'influence_hot' => 'getInfluenceHot',
'discussion_hot' => 'getDiscussionHot',
'topic_hot' => 'getTopicHot',
'search_hot' => 'getSearchHot'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name_en'] = isset($data['name_en']) ? $data['name_en'] : null;
        $this->container['poster'] = isset($data['poster']) ? $data['poster'] : null;
        $this->container['release_date'] = isset($data['release_date']) ? $data['release_date'] : null;
        $this->container['hot'] = isset($data['hot']) ? $data['hot'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['maoyan_id'] = isset($data['maoyan_id']) ? $data['maoyan_id'] : null;
        $this->container['areas'] = isset($data['areas']) ? $data['areas'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['directors'] = isset($data['directors']) ? $data['directors'] : null;
        $this->container['actors'] = isset($data['actors']) ? $data['actors'] : null;
        $this->container['influence_hot'] = isset($data['influence_hot']) ? $data['influence_hot'] : null;
        $this->container['discussion_hot'] = isset($data['discussion_hot']) ? $data['discussion_hot'] : null;
        $this->container['topic_hot'] = isset($data['topic_hot']) ? $data['topic_hot'] : null;
        $this->container['search_hot'] = isset($data['search_hot']) ? $data['search_hot'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['poster'] === null) {
            $invalidProperties[] = "'poster' can't be null";
        }
        if ($this->container['release_date'] === null) {
            $invalidProperties[] = "'release_date' can't be null";
        }
        if ($this->container['hot'] === null) {
            $invalidProperties[] = "'hot' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id ??????ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name ??????
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_en
     *
     * @return string
     */
    public function getNameEn()
    {
        return $this->container['name_en'];
    }

    /**
     * Sets name_en
     *
     * @param string $name_en ????????????
     *
     * @return $this
     */
    public function setNameEn($name_en)
    {
        $this->container['name_en'] = $name_en;

        return $this;
    }

    /**
     * Gets poster
     *
     * @return string
     */
    public function getPoster()
    {
        return $this->container['poster'];
    }

    /**
     * Sets poster
     *
     * @param string $poster ??????
     *
     * @return $this
     */
    public function setPoster($poster)
    {
        $this->container['poster'] = $poster;

        return $this;
    }

    /**
     * Gets release_date
     *
     * @return string
     */
    public function getReleaseDate()
    {
        return $this->container['release_date'];
    }

    /**
     * Sets release_date
     *
     * @param string $release_date ????????????
     *
     * @return $this
     */
    public function setReleaseDate($release_date)
    {
        $this->container['release_date'] = $release_date;

        return $this;
    }

    /**
     * Gets hot
     *
     * @return int
     */
    public function getHot()
    {
        return $this->container['hot'];
    }

    /**
     * Sets hot
     *
     * @param int $hot ?????????
     *
     * @return $this
     */
    public function setHot($hot)
    {
        $this->container['hot'] = $hot;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type ?????????1=?????? 2=????????? 3=??????
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets maoyan_id
     *
     * @return string
     */
    public function getMaoyanId()
    {
        return $this->container['maoyan_id'];
    }

    /**
     * Sets maoyan_id
     *
     * @param string $maoyan_id ??????id???????????????????????????????????????
     *
     * @return $this
     */
    public function setMaoyanId($maoyan_id)
    {
        $this->container['maoyan_id'] = $maoyan_id;

        return $this;
    }

    /**
     * Gets areas
     *
     * @return string[]
     */
    public function getAreas()
    {
        return $this->container['areas'];
    }

    /**
     * Sets areas
     *
     * @param string[] $areas ??????
     *
     * @return $this
     */
    public function setAreas($areas)
    {
        $this->container['areas'] = $areas;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags ????????????
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets directors
     *
     * @return string[]
     */
    public function getDirectors()
    {
        return $this->container['directors'];
    }

    /**
     * Sets directors
     *
     * @param string[] $directors ??????
     *
     * @return $this
     */
    public function setDirectors($directors)
    {
        $this->container['directors'] = $directors;

        return $this;
    }

    /**
     * Gets actors
     *
     * @return string[]
     */
    public function getActors()
    {
        return $this->container['actors'];
    }

    /**
     * Sets actors
     *
     * @param string[] $actors ??????
     *
     * @return $this
     */
    public function setActors($actors)
    {
        $this->container['actors'] = $actors;

        return $this;
    }

    /**
     * Gets influence_hot
     *
     * @return int
     */
    public function getInfluenceHot()
    {
        return $this->container['influence_hot'];
    }

    /**
     * Sets influence_hot
     *
     * @param int $influence_hot ???????????????
     *
     * @return $this
     */
    public function setInfluenceHot($influence_hot)
    {
        $this->container['influence_hot'] = $influence_hot;

        return $this;
    }

    /**
     * Gets discussion_hot
     *
     * @return int
     */
    public function getDiscussionHot()
    {
        return $this->container['discussion_hot'];
    }

    /**
     * Sets discussion_hot
     *
     * @param int $discussion_hot ???????????????
     *
     * @return $this
     */
    public function setDiscussionHot($discussion_hot)
    {
        $this->container['discussion_hot'] = $discussion_hot;

        return $this;
    }

    /**
     * Gets topic_hot
     *
     * @return int
     */
    public function getTopicHot()
    {
        return $this->container['topic_hot'];
    }

    /**
     * Sets topic_hot
     *
     * @param int $topic_hot ???????????????
     *
     * @return $this
     */
    public function setTopicHot($topic_hot)
    {
        $this->container['topic_hot'] = $topic_hot;

        return $this;
    }

    /**
     * Gets search_hot
     *
     * @return int
     */
    public function getSearchHot()
    {
        return $this->container['search_hot'];
    }

    /**
     * Sets search_hot
     *
     * @param int $search_hot ????????????
     *
     * @return $this
     */
    public function setSearchHot($search_hot)
    {
        $this->container['search_hot'] = $search_hot;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
