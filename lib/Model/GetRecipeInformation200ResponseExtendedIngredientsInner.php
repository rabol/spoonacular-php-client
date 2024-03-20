<?php
/**
 * GetRecipeInformation200ResponseExtendedIngredientsInner
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * spoonacular API
 *
 * The spoonacular Nutrition, Recipe, and Food API allows you to access over thousands of recipes, thousands of ingredients, 800,000 food products, over 100,000 menu items, and restaurants. Our food ontology and semantic recipe search engine makes it possible to search for recipes using natural language queries, such as \"gluten free brownies without sugar\" or \"low fat vegan cupcakes.\" You can automatically calculate the nutritional information for any recipe, analyze recipe costs, visualize ingredient lists, find recipes for what's in your fridge, find recipes based on special diets, nutritional requirements, or favorite ingredients, classify recipes into types and cuisines, convert ingredient amounts, or even compute an entire meal plan. With our powerful API, you can create many kinds of food and especially nutrition apps.  Special diets/dietary requirements currently available include: vegan, vegetarian, pescetarian, gluten free, grain free, dairy free, high protein, whole 30, low sodium, low carb, Paleo, ketogenic, FODMAP, and Primal.
 *
 * The version of the OpenAPI document: 1.1
 * Contact: mail@spoonacular.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use ArrayAccess;
use OpenAPI\Client\ObjectSerializer;

/**
 * GetRecipeInformation200ResponseExtendedIngredientsInner Class Doc Comment
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class GetRecipeInformation200ResponseExtendedIngredientsInner implements \JsonSerializable, ArrayAccess, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'getRecipeInformation_200_response_extendedIngredients_inner';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'aisle' => 'string',
        'amount' => 'float',
        'consitency' => 'string',
        'id' => 'int',
        'image' => 'string',
        'measures' => '\OpenAPI\Client\Model\GetRecipeInformation200ResponseExtendedIngredientsInnerMeasures',
        'meta' => 'string[]',
        'name' => 'string',
        'original' => 'string',
        'original_name' => 'string',
        'unit' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'aisle' => null,
        'amount' => null,
        'consitency' => null,
        'id' => null,
        'image' => null,
        'measures' => null,
        'meta' => null,
        'name' => null,
        'original' => null,
        'original_name' => null,
        'unit' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'aisle' => false,
        'amount' => false,
        'consitency' => false,
        'id' => false,
        'image' => false,
        'measures' => false,
        'meta' => false,
        'name' => false,
        'original' => false,
        'original_name' => false,
        'unit' => false,
    ];

    /**
     * If a nullable field gets set to null, insert it here
     *
     * @var bool[]
     */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return bool[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param  bool[]  $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'aisle' => 'aisle',
        'amount' => 'amount',
        'consitency' => 'consitency',
        'id' => 'id',
        'image' => 'image',
        'measures' => 'measures',
        'meta' => 'meta',
        'name' => 'name',
        'original' => 'original',
        'original_name' => 'originalName',
        'unit' => 'unit',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aisle' => 'setAisle',
        'amount' => 'setAmount',
        'consitency' => 'setConsitency',
        'id' => 'setId',
        'image' => 'setImage',
        'measures' => 'setMeasures',
        'meta' => 'setMeta',
        'name' => 'setName',
        'original' => 'setOriginal',
        'original_name' => 'setOriginalName',
        'unit' => 'setUnit',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aisle' => 'getAisle',
        'amount' => 'getAmount',
        'consitency' => 'getConsitency',
        'id' => 'getId',
        'image' => 'getImage',
        'measures' => 'getMeasures',
        'meta' => 'getMeta',
        'name' => 'getName',
        'original' => 'getOriginal',
        'original_name' => 'getOriginalName',
        'unit' => 'getUnit',
    ];

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
        return self::$openAPIModelName;
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
     * @param  mixed[]  $data  Associated array of property values
     *                         initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('aisle', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('consitency', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('measures', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('original', $data ?? [], null);
        $this->setIfExists('original_name', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array
     *
     * @param  mixed  $defaultValue
     */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['aisle'] === null) {
            $invalidProperties[] = "'aisle' can't be null";
        }
        if ((mb_strlen($this->container['aisle']) < 1)) {
            $invalidProperties[] = "invalid value for 'aisle', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['consitency'] === null) {
            $invalidProperties[] = "'consitency' can't be null";
        }
        if ((mb_strlen($this->container['consitency']) < 1)) {
            $invalidProperties[] = "invalid value for 'consitency', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['image'] === null) {
            $invalidProperties[] = "'image' can't be null";
        }
        if ((mb_strlen($this->container['image']) < 1)) {
            $invalidProperties[] = "invalid value for 'image', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['original'] === null) {
            $invalidProperties[] = "'original' can't be null";
        }
        if ((mb_strlen($this->container['original']) < 1)) {
            $invalidProperties[] = "invalid value for 'original', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['original_name'] === null) {
            $invalidProperties[] = "'original_name' can't be null";
        }
        if ((mb_strlen($this->container['original_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'original_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        if ((mb_strlen($this->container['unit']) < 0)) {
            $invalidProperties[] = "invalid value for 'unit', the character length must be bigger than or equal to 0.";
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
     * Gets aisle
     *
     * @return string
     */
    public function getAisle()
    {
        return $this->container['aisle'];
    }

    /**
     * Sets aisle
     *
     * @param  string  $aisle  aisle
     * @return self
     */
    public function setAisle($aisle)
    {
        if (is_null($aisle)) {
            throw new \InvalidArgumentException('non-nullable aisle cannot be null');
        }

        if ((mb_strlen($aisle) < 1)) {
            throw new \InvalidArgumentException('invalid length for $aisle when calling GetRecipeInformation200ResponseExtendedIngredientsInner., must be bigger than or equal to 1.');
        }

        $this->container['aisle'] = $aisle;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param  float  $amount  amount
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets consitency
     *
     * @return string
     */
    public function getConsitency()
    {
        return $this->container['consitency'];
    }

    /**
     * Sets consitency
     *
     * @param  string  $consitency  consitency
     * @return self
     */
    public function setConsitency($consitency)
    {
        if (is_null($consitency)) {
            throw new \InvalidArgumentException('non-nullable consitency cannot be null');
        }

        if ((mb_strlen($consitency) < 1)) {
            throw new \InvalidArgumentException('invalid length for $consitency when calling GetRecipeInformation200ResponseExtendedIngredientsInner., must be bigger than or equal to 1.');
        }

        $this->container['consitency'] = $consitency;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param  int  $id  id
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param  string  $image  image
     * @return self
     */
    public function setImage($image)
    {
        if (is_null($image)) {
            throw new \InvalidArgumentException('non-nullable image cannot be null');
        }

        if ((mb_strlen($image) < 1)) {
            throw new \InvalidArgumentException('invalid length for $image when calling GetRecipeInformation200ResponseExtendedIngredientsInner., must be bigger than or equal to 1.');
        }

        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets measures
     *
     * @return \OpenAPI\Client\Model\GetRecipeInformation200ResponseExtendedIngredientsInnerMeasures|null
     */
    public function getMeasures()
    {
        return $this->container['measures'];
    }

    /**
     * Sets measures
     *
     * @param  \OpenAPI\Client\Model\GetRecipeInformation200ResponseExtendedIngredientsInnerMeasures|null  $measures  measures
     * @return self
     */
    public function setMeasures($measures)
    {
        if (is_null($measures)) {
            throw new \InvalidArgumentException('non-nullable measures cannot be null');
        }
        $this->container['measures'] = $measures;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return string[]|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param  string[]|null  $meta  meta
     * @return self
     */
    public function setMeta($meta)
    {
        if (is_null($meta)) {
            throw new \InvalidArgumentException('non-nullable meta cannot be null');
        }
        $this->container['meta'] = $meta;

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
     * @param  string  $name  name
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling GetRecipeInformation200ResponseExtendedIngredientsInner., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets original
     *
     * @return string
     */
    public function getOriginal()
    {
        return $this->container['original'];
    }

    /**
     * Sets original
     *
     * @param  string  $original  original
     * @return self
     */
    public function setOriginal($original)
    {
        if (is_null($original)) {
            throw new \InvalidArgumentException('non-nullable original cannot be null');
        }

        if ((mb_strlen($original) < 1)) {
            throw new \InvalidArgumentException('invalid length for $original when calling GetRecipeInformation200ResponseExtendedIngredientsInner., must be bigger than or equal to 1.');
        }

        $this->container['original'] = $original;

        return $this;
    }

    /**
     * Gets original_name
     *
     * @return string
     */
    public function getOriginalName()
    {
        return $this->container['original_name'];
    }

    /**
     * Sets original_name
     *
     * @param  string  $original_name  original_name
     * @return self
     */
    public function setOriginalName($original_name)
    {
        if (is_null($original_name)) {
            throw new \InvalidArgumentException('non-nullable original_name cannot be null');
        }

        if ((mb_strlen($original_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $original_name when calling GetRecipeInformation200ResponseExtendedIngredientsInner., must be bigger than or equal to 1.');
        }

        $this->container['original_name'] = $original_name;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param  string  $unit  unit
     * @return self
     */
    public function setUnit($unit)
    {
        if (is_null($unit)) {
            throw new \InvalidArgumentException('non-nullable unit cannot be null');
        }

        if ((mb_strlen($unit) < 0)) {
            throw new \InvalidArgumentException('invalid length for $unit when calling GetRecipeInformation200ResponseExtendedIngredientsInner., must be bigger than or equal to 0.');
        }

        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  int  $offset  Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param  int  $offset  Offset
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param  int|null  $offset  Offset
     * @param  mixed  $value  Value to be set
     */
    public function offsetSet($offset, $value): void
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
     * @param  int  $offset  Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
