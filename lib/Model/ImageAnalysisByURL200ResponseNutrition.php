<?php
/**
 * ImageAnalysisByURL200ResponseNutrition
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
 * ImageAnalysisByURL200ResponseNutrition Class Doc Comment
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class ImageAnalysisByURL200ResponseNutrition implements \JsonSerializable, ArrayAccess, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'imageAnalysisByURL_200_response_nutrition';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'recipes_used' => 'int',
        'calories' => '\OpenAPI\Client\Model\ImageAnalysisByURL200ResponseNutritionCalories',
        'fat' => '\OpenAPI\Client\Model\ImageAnalysisByURL200ResponseNutritionCalories',
        'protein' => '\OpenAPI\Client\Model\ImageAnalysisByURL200ResponseNutritionCalories',
        'carbs' => '\OpenAPI\Client\Model\ImageAnalysisByURL200ResponseNutritionCalories',
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
        'recipes_used' => null,
        'calories' => null,
        'fat' => null,
        'protein' => null,
        'carbs' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'recipes_used' => false,
        'calories' => false,
        'fat' => false,
        'protein' => false,
        'carbs' => false,
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
        'recipes_used' => 'recipesUsed',
        'calories' => 'calories',
        'fat' => 'fat',
        'protein' => 'protein',
        'carbs' => 'carbs',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recipes_used' => 'setRecipesUsed',
        'calories' => 'setCalories',
        'fat' => 'setFat',
        'protein' => 'setProtein',
        'carbs' => 'setCarbs',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recipes_used' => 'getRecipesUsed',
        'calories' => 'getCalories',
        'fat' => 'getFat',
        'protein' => 'getProtein',
        'carbs' => 'getCarbs',
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
        $this->setIfExists('recipes_used', $data ?? [], null);
        $this->setIfExists('calories', $data ?? [], null);
        $this->setIfExists('fat', $data ?? [], null);
        $this->setIfExists('protein', $data ?? [], null);
        $this->setIfExists('carbs', $data ?? [], null);
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

        if ($this->container['recipes_used'] === null) {
            $invalidProperties[] = "'recipes_used' can't be null";
        }
        if ($this->container['calories'] === null) {
            $invalidProperties[] = "'calories' can't be null";
        }
        if ($this->container['fat'] === null) {
            $invalidProperties[] = "'fat' can't be null";
        }
        if ($this->container['protein'] === null) {
            $invalidProperties[] = "'protein' can't be null";
        }
        if ($this->container['carbs'] === null) {
            $invalidProperties[] = "'carbs' can't be null";
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
     * Gets recipes_used
     *
     * @return int
     */
    public function getRecipesUsed()
    {
        return $this->container['recipes_used'];
    }

    /**
     * Sets recipes_used
     *
     * @param  int  $recipes_used  recipes_used
     * @return self
     */
    public function setRecipesUsed($recipes_used)
    {
        if (is_null($recipes_used)) {
            throw new \InvalidArgumentException('non-nullable recipes_used cannot be null');
        }
        $this->container['recipes_used'] = $recipes_used;

        return $this;
    }

    /**
     * Gets calories
     *
     * @return \OpenAPI\Client\Model\ImageAnalysisByURL200ResponseNutritionCalories
     */
    public function getCalories()
    {
        return $this->container['calories'];
    }

    /**
     * Sets calories
     *
     * @param  \OpenAPI\Client\Model\ImageAnalysisByURL200ResponseNutritionCalories  $calories  calories
     * @return self
     */
    public function setCalories($calories)
    {
        if (is_null($calories)) {
            throw new \InvalidArgumentException('non-nullable calories cannot be null');
        }
        $this->container['calories'] = $calories;

        return $this;
    }

    /**
     * Gets fat
     *
     * @return \OpenAPI\Client\Model\ImageAnalysisByURL200ResponseNutritionCalories
     */
    public function getFat()
    {
        return $this->container['fat'];
    }

    /**
     * Sets fat
     *
     * @param  \OpenAPI\Client\Model\ImageAnalysisByURL200ResponseNutritionCalories  $fat  fat
     * @return self
     */
    public function setFat($fat)
    {
        if (is_null($fat)) {
            throw new \InvalidArgumentException('non-nullable fat cannot be null');
        }
        $this->container['fat'] = $fat;

        return $this;
    }

    /**
     * Gets protein
     *
     * @return \OpenAPI\Client\Model\ImageAnalysisByURL200ResponseNutritionCalories
     */
    public function getProtein()
    {
        return $this->container['protein'];
    }

    /**
     * Sets protein
     *
     * @param  \OpenAPI\Client\Model\ImageAnalysisByURL200ResponseNutritionCalories  $protein  protein
     * @return self
     */
    public function setProtein($protein)
    {
        if (is_null($protein)) {
            throw new \InvalidArgumentException('non-nullable protein cannot be null');
        }
        $this->container['protein'] = $protein;

        return $this;
    }

    /**
     * Gets carbs
     *
     * @return \OpenAPI\Client\Model\ImageAnalysisByURL200ResponseNutritionCalories
     */
    public function getCarbs()
    {
        return $this->container['carbs'];
    }

    /**
     * Sets carbs
     *
     * @param  \OpenAPI\Client\Model\ImageAnalysisByURL200ResponseNutritionCalories  $carbs  carbs
     * @return self
     */
    public function setCarbs($carbs)
    {
        if (is_null($carbs)) {
            throw new \InvalidArgumentException('non-nullable carbs cannot be null');
        }
        $this->container['carbs'] = $carbs;

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
