<?php
/**
 * SearchRecipes200ResponseResultsInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
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
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SearchRecipes200ResponseResultsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SearchRecipes200ResponseResultsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'searchRecipes_200_response_results_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'title' => 'string',
        'image' => 'string',
        'image_type' => 'string',
        'nutrition' => 'object',
        'vegetarian' => 'bool',
        'vegan' => 'bool',
        'gluten_free' => 'bool',
        'dairy_free' => 'bool',
        'very_healthy' => 'bool',
        'cheap' => 'bool',
        'very_popular' => 'bool',
        'sustainable' => 'bool',
        'weight_watcher_smart_points' => 'int',
        'cooking_minutes' => 'int',
        'servings' => 'int',
        'source_url' => 'string',
        'low_fodmap' => 'bool',
        'gaps' => 'string',
        'preparation_minutes' => 'int',
        'aggregate_likes' => 'int',
        'health_score' => 'int',
        'credits_text' => 'string',
        'license' => 'string',
        'source_name' => 'string',
        'price_per_serving' => 'float',
        'ready_in_minutes' => 'int',
        'summary' => 'string',
        'cuisines' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'title' => null,
        'image' => null,
        'image_type' => null,
        'nutrition' => null,
        'vegetarian' => null,
        'vegan' => null,
        'gluten_free' => null,
        'dairy_free' => null,
        'very_healthy' => null,
        'cheap' => null,
        'very_popular' => null,
        'sustainable' => null,
        'weight_watcher_smart_points' => null,
        'cooking_minutes' => null,
        'servings' => null,
        'source_url' => null,
        'low_fodmap' => null,
        'gaps' => null,
        'preparation_minutes' => null,
        'aggregate_likes' => null,
        'health_score' => null,
        'credits_text' => null,
        'license' => null,
        'source_name' => null,
        'price_per_serving' => null,
        'ready_in_minutes' => null,
        'summary' => null,
        'cuisines' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'title' => false,
        'image' => false,
        'image_type' => false,
        'nutrition' => false,
        'vegetarian' => false,
        'vegan' => false,
        'gluten_free' => false,
        'dairy_free' => false,
        'very_healthy' => false,
        'cheap' => false,
        'very_popular' => false,
        'sustainable' => false,
        'weight_watcher_smart_points' => false,
        'cooking_minutes' => false,
        'servings' => false,
        'source_url' => false,
        'low_fodmap' => false,
        'gaps' => false,
        'preparation_minutes' => false,
        'aggregate_likes' => false,
        'health_score' => false,
        'credits_text' => false,
        'license' => false,
        'source_name' => false,
        'price_per_serving' => false,
        'ready_in_minutes' => false,
        'summary' => false,
        'cuisines' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
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
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
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
        'id' => 'id',
        'title' => 'title',
        'image' => 'image',
        'image_type' => 'imageType',
        'nutrition' => 'nutrition',
        'vegetarian' => 'vegetarian',
        'vegan' => 'vegan',
        'gluten_free' => 'glutenFree',
        'dairy_free' => 'dairyFree',
        'very_healthy' => 'veryHealthy',
        'cheap' => 'cheap',
        'very_popular' => 'veryPopular',
        'sustainable' => 'sustainable',
        'weight_watcher_smart_points' => 'weightWatcherSmartPoints',
        'cooking_minutes' => 'cookingMinutes',
        'servings' => 'servings',
        'source_url' => 'sourceUrl',
        'low_fodmap' => 'lowFodmap',
        'gaps' => 'gaps',
        'preparation_minutes' => 'preparationMinutes',
        'aggregate_likes' => 'aggregateLikes',
        'health_score' => 'healthScore',
        'credits_text' => 'creditsText',
        'license' => 'license',
        'source_name' => 'sourceName',
        'price_per_serving' => 'pricePerServing',
        'ready_in_minutes' => 'readyInMinutes',
        'summary' => 'summary',
        'cuisines' => 'cuisines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'image' => 'setImage',
        'image_type' => 'setImageType',
        'nutrition' => 'setNutrition',
        'vegetarian' => 'setVegetarian',
        'vegan' => 'setVegan',
        'gluten_free' => 'setGlutenFree',
        'dairy_free' => 'setDairyFree',
        'very_healthy' => 'setVeryHealthy',
        'cheap' => 'setCheap',
        'very_popular' => 'setVeryPopular',
        'sustainable' => 'setSustainable',
        'weight_watcher_smart_points' => 'setWeightWatcherSmartPoints',
        'cooking_minutes' => 'setCookingMinutes',
        'servings' => 'setServings',
        'source_url' => 'setSourceUrl',
        'low_fodmap' => 'setLowFodmap',
        'gaps' => 'setGaps',
        'preparation_minutes' => 'setPreparationMinutes',
        'aggregate_likes' => 'setAggregateLikes',
        'health_score' => 'setHealthScore',
        'credits_text' => 'setCreditsText',
        'license' => 'setLicense',
        'source_name' => 'setSourceName',
        'price_per_serving' => 'setPricePerServing',
        'ready_in_minutes' => 'setReadyInMinutes',
        'summary' => 'setSummary',
        'cuisines' => 'setCuisines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'image' => 'getImage',
        'image_type' => 'getImageType',
        'nutrition' => 'getNutrition',
        'vegetarian' => 'getVegetarian',
        'vegan' => 'getVegan',
        'gluten_free' => 'getGlutenFree',
        'dairy_free' => 'getDairyFree',
        'very_healthy' => 'getVeryHealthy',
        'cheap' => 'getCheap',
        'very_popular' => 'getVeryPopular',
        'sustainable' => 'getSustainable',
        'weight_watcher_smart_points' => 'getWeightWatcherSmartPoints',
        'cooking_minutes' => 'getCookingMinutes',
        'servings' => 'getServings',
        'source_url' => 'getSourceUrl',
        'low_fodmap' => 'getLowFodmap',
        'gaps' => 'getGaps',
        'preparation_minutes' => 'getPreparationMinutes',
        'aggregate_likes' => 'getAggregateLikes',
        'health_score' => 'getHealthScore',
        'credits_text' => 'getCreditsText',
        'license' => 'getLicense',
        'source_name' => 'getSourceName',
        'price_per_serving' => 'getPricePerServing',
        'ready_in_minutes' => 'getReadyInMinutes',
        'summary' => 'getSummary',
        'cuisines' => 'getCuisines'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('image_type', $data ?? [], null);
        $this->setIfExists('nutrition', $data ?? [], null);
        $this->setIfExists('vegetarian', $data ?? [], null);
        $this->setIfExists('vegan', $data ?? [], null);
        $this->setIfExists('gluten_free', $data ?? [], null);
        $this->setIfExists('dairy_free', $data ?? [], null);
        $this->setIfExists('very_healthy', $data ?? [], null);
        $this->setIfExists('cheap', $data ?? [], null);
        $this->setIfExists('very_popular', $data ?? [], null);
        $this->setIfExists('sustainable', $data ?? [], null);
        $this->setIfExists('weight_watcher_smart_points', $data ?? [], null);
        $this->setIfExists('cooking_minutes', $data ?? [], null);
        $this->setIfExists('servings', $data ?? [], null);
        $this->setIfExists('source_url', $data ?? [], null);
        $this->setIfExists('low_fodmap', $data ?? [], null);
        $this->setIfExists('gaps', $data ?? [], null);
        $this->setIfExists('preparation_minutes', $data ?? [], null);
        $this->setIfExists('aggregate_likes', $data ?? [], null);
        $this->setIfExists('health_score', $data ?? [], null);
        $this->setIfExists('credits_text', $data ?? [], null);
        $this->setIfExists('license', $data ?? [], null);
        $this->setIfExists('source_name', $data ?? [], null);
        $this->setIfExists('price_per_serving', $data ?? [], null);
        $this->setIfExists('ready_in_minutes', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
        $this->setIfExists('cuisines', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['image'] === null) {
            $invalidProperties[] = "'image' can't be null";
        }
        if ((mb_strlen($this->container['image']) < 1)) {
            $invalidProperties[] = "invalid value for 'image', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['image_type'] === null) {
            $invalidProperties[] = "'image_type' can't be null";
        }
        if ((mb_strlen($this->container['image_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'image_type', the character length must be bigger than or equal to 1.";
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }

        if ((mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling SearchRecipes200ResponseResultsInner., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

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
     * @param string $image image
     *
     * @return self
     */
    public function setImage($image)
    {
        if (is_null($image)) {
            throw new \InvalidArgumentException('non-nullable image cannot be null');
        }

        if ((mb_strlen($image) < 1)) {
            throw new \InvalidArgumentException('invalid length for $image when calling SearchRecipes200ResponseResultsInner., must be bigger than or equal to 1.');
        }

        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets image_type
     *
     * @return string
     */
    public function getImageType()
    {
        return $this->container['image_type'];
    }

    /**
     * Sets image_type
     *
     * @param string $image_type image_type
     *
     * @return self
     */
    public function setImageType($image_type)
    {
        if (is_null($image_type)) {
            throw new \InvalidArgumentException('non-nullable image_type cannot be null');
        }

        if ((mb_strlen($image_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $image_type when calling SearchRecipes200ResponseResultsInner., must be bigger than or equal to 1.');
        }

        $this->container['image_type'] = $image_type;

        return $this;
    }

    /**
     * Gets nutrition
     *
     * @return object|null
     */
    public function getNutrition()
    {
        return $this->container['nutrition'];
    }

    /**
     * Sets nutrition
     *
     * @param object|null $nutrition nutrition
     *
     * @return self
     */
    public function setNutrition($nutrition)
    {
        if (is_null($nutrition)) {
            throw new \InvalidArgumentException('non-nullable nutrition cannot be null');
        }


        $this->container['nutrition'] = $nutrition;

        return $this;
    }

    /**
     * Gets vegetarian
     *
     * @return bool|null
     */
    public function getVegetarian()
    {
        return $this->container['vegetarian'];
    }

    /**
     * Sets vegetarian
     *
     * @param bool|null $vegetarian vegetarian
     *
     * @return self
     */
    public function setVegetarian($vegetarian)
    {
        if (is_null($vegetarian)) {
            throw new \InvalidArgumentException('non-nullable vegetarian cannot be null');
        }


        $this->container['vegetarian'] = $vegetarian;

        return $this;
    }

    /**
     * Gets vegan
     *
     * @return bool|null
     */
    public function getVegan()
    {
        return $this->container['vegan'];
    }

    /**
     * Sets vegan
     *
     * @param bool|null $vegan vegan
     *
     * @return self
     */
    public function setVegan($vegan)
    {
        if (is_null($vegan)) {
            throw new \InvalidArgumentException('non-nullable vegan cannot be null');
        }


        $this->container['vegan'] = $vegan;

        return $this;
    }

    /**
     * Gets gluten_free
     *
     * @return bool|null
     */
    public function getGlutenFree()
    {
        return $this->container['gluten_free'];
    }

    /**
     * Sets gluten_free
     *
     * @param bool|null $gluten_free gluten_free
     *
     * @return self
     */
    public function setGlutenFree($gluten_free)
    {
        if (is_null($gluten_free)) {
            throw new \InvalidArgumentException('non-nullable gluten_free cannot be null');
        }


        $this->container['gluten_free'] = $gluten_free;

        return $this;
    }

    /**
     * Gets dairy_free
     *
     * @return bool|null
     */
    public function getDairyFree()
    {
        return $this->container['dairy_free'];
    }

    /**
     * Sets dairy_free
     *
     * @param bool|null $dairy_free dairy_free
     *
     * @return self
     */
    public function setDairyFree($dairy_free)
    {
        if (is_null($dairy_free)) {
            throw new \InvalidArgumentException('non-nullable dairy_free cannot be null');
        }


        $this->container['dairy_free'] = $dairy_free;

        return $this;
    }

    /**
     * Gets very_healthy
     *
     * @return bool|null
     */
    public function getVeryHealthy()
    {
        return $this->container['very_healthy'];
    }

    /**
     * Sets very_healthy
     *
     * @param bool|null $very_healthy very_healthy
     *
     * @return self
     */
    public function setVeryHealthy($very_healthy)
    {
        if (is_null($very_healthy)) {
            throw new \InvalidArgumentException('non-nullable very_healthy cannot be null');
        }


        $this->container['very_healthy'] = $very_healthy;

        return $this;
    }

    /**
     * Gets cheap
     *
     * @return bool|null
     */
    public function getCheap()
    {
        return $this->container['cheap'];
    }

    /**
     * Sets cheap
     *
     * @param bool|null $cheap cheap
     *
     * @return self
     */
    public function setCheap($cheap)
    {
        if (is_null($cheap)) {
            throw new \InvalidArgumentException('non-nullable cheap cannot be null');
        }


        $this->container['cheap'] = $cheap;

        return $this;
    }

    /**
     * Gets very_popular
     *
     * @return bool|null
     */
    public function getVeryPopular()
    {
        return $this->container['very_popular'];
    }

    /**
     * Sets very_popular
     *
     * @param bool|null $very_popular very_popular
     *
     * @return self
     */
    public function setVeryPopular($very_popular)
    {
        if (is_null($very_popular)) {
            throw new \InvalidArgumentException('non-nullable very_popular cannot be null');
        }


        $this->container['very_popular'] = $very_popular;

        return $this;
    }

    /**
     * Gets sustainable
     *
     * @return bool|null
     */
    public function getSustainable()
    {
        return $this->container['sustainable'];
    }

    /**
     * Sets sustainable
     *
     * @param bool|null $sustainable sustainable
     *
     * @return self
     */
    public function setSustainable($sustainable)
    {
        if (is_null($sustainable)) {
            throw new \InvalidArgumentException('non-nullable sustainable cannot be null');
        }


        $this->container['sustainable'] = $sustainable;

        return $this;
    }

    /**
     * Gets weight_watcher_smart_points
     *
     * @return int|null
     */
    public function getWeightWatcherSmartPoints()
    {
        return $this->container['weight_watcher_smart_points'];
    }

    /**
     * Sets weight_watcher_smart_points
     *
     * @param int|null $weight_watcher_smart_points weight_watcher_smart_points
     *
     * @return self
     */
    public function setWeightWatcherSmartPoints($weight_watcher_smart_points)
    {
        if (is_null($weight_watcher_smart_points)) {
            throw new \InvalidArgumentException('non-nullable weight_watcher_smart_points cannot be null');
        }


        $this->container['weight_watcher_smart_points'] = $weight_watcher_smart_points;

        return $this;
    }

    /**
     * Gets cooking_minutes
     *
     * @return int|null
     */
    public function getCookingMinutes()
    {
        return $this->container['cooking_minutes'];
    }

    /**
     * Sets cooking_minutes
     *
     * @param int|null $cooking_minutes cooking_minutes
     *
     * @return self
     */
    public function setCookingMinutes($cooking_minutes)
    {
        if (is_null($cooking_minutes)) {
            throw new \InvalidArgumentException('non-nullable cooking_minutes cannot be null');
        }


        $this->container['cooking_minutes'] = $cooking_minutes;

        return $this;
    }

    /**
     * Gets servings
     *
     * @return int|null
     */
    public function getServings()
    {
        return $this->container['servings'];
    }

    /**
     * Sets servings
     *
     * @param int|null $servings servings
     *
     * @return self
     */
    public function setServings($servings)
    {
        if (is_null($servings)) {
            throw new \InvalidArgumentException('non-nullable servings cannot be null');
        }


        $this->container['servings'] = $servings;

        return $this;
    }

    /**
     * Gets source_url
     *
     * @return string|null
     */
    public function getSourceUrl()
    {
        return $this->container['source_url'];
    }

    /**
     * Sets source_url
     *
     * @param string|null $source_url source_url
     *
     * @return self
     */
    public function setSourceUrl($source_url)
    {
        if (is_null($source_url)) {
            throw new \InvalidArgumentException('non-nullable source_url cannot be null');
        }
        $this->container['source_url'] = $source_url;

        return $this;
    }

    /**
     * Gets low_fodmap
     *
     * @return bool|null
     */
    public function getLowFodmap()
    {
        return $this->container['low_fodmap'];
    }

    /**
     * Sets low_fodmap
     *
     * @param bool|null $low_fodmap low_fodmap
     *
     * @return self
     */
    public function setLowFodmap($low_fodmap)
    {
        if (is_null($low_fodmap)) {
            throw new \InvalidArgumentException('non-nullable low_fodmap cannot be null');
        }
        $this->container['low_fodmap'] = $low_fodmap;

        return $this;
    }

    /**
     * Gets gaps
     *
     * @return string|null
     */
    public function getGaps()
    {
        return $this->container['gaps'];
    }

    /**
     * Sets gaps
     *
     * @param string|null $gaps gaps
     *
     * @return self
     */
    public function setGaps($gaps)
    {
        if (is_null($gaps)) {
            throw new \InvalidArgumentException('non-nullable gaps cannot be null');
        }
        $this->container['gaps'] = $gaps;

        return $this;
    }

    /**
     * Gets preparation_minutes
     *
     * @return int|null
     */
    public function getPreparationMinutes()
    {
        return $this->container['preparation_minutes'];
    }

    /**
     * Sets preparation_minutes
     *
     * @param int|null $preparation_minutes preparation_minutes
     *
     * @return self
     */
    public function setPreparationMinutes($preparation_minutes)
    {
        if (is_null($preparation_minutes)) {
            throw new \InvalidArgumentException('non-nullable preparation_minutes cannot be null');
        }
        $this->container['preparation_minutes'] = $preparation_minutes;

        return $this;
    }

    /**
     * Gets aggregate_likes
     *
     * @return int|null
     */
    public function getAggregateLikes()
    {
        return $this->container['aggregate_likes'];
    }

    /**
     * Sets aggregate_likes
     *
     * @param int|null $aggregate_likes aggregate_likes
     *
     * @return self
     */
    public function setAggregateLikes($aggregate_likes)
    {
        if (is_null($aggregate_likes)) {
            throw new \InvalidArgumentException('non-nullable aggregate_likes cannot be null');
        }
        $this->container['aggregate_likes'] = $aggregate_likes;

        return $this;
    }

    /**
     * Gets health_score
     *
     * @return int|null
     */
    public function getHealthScore()
    {
        return $this->container['health_score'];
    }

    /**
     * Sets health_score
     *
     * @param int|null $health_score health_score
     *
     * @return self
     */
    public function setHealthScore($health_score)
    {
        if (is_null($health_score)) {
            throw new \InvalidArgumentException('non-nullable health_score cannot be null');
        }
        $this->container['health_score'] = $health_score;

        return $this;
    }

    /**
     * Gets credits_text
     *
     * @return string|null
     */
    public function getCreditsText()
    {
        return $this->container['credits_text'];
    }

    /**
     * Sets credits_text
     *
     * @param string|null $credits_text credits_text
     *
     * @return self
     */
    public function setCreditsText($credits_text)
    {
        if (is_null($credits_text)) {
            throw new \InvalidArgumentException('non-nullable credits_text cannot be null');
        }
        $this->container['credits_text'] = $credits_text;

        return $this;
    }

    /**
     * Gets license
     *
     * @return string|null
     */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
     * Sets license
     *
     * @param string|null $license license
     *
     * @return self
     */
    public function setLicense($license)
    {
        if (is_null($license)) {
            throw new \InvalidArgumentException('non-nullable license cannot be null');
        }
        $this->container['license'] = $license;

        return $this;
    }

    /**
     * Gets source_name
     *
     * @return string|null
     */
    public function getSourceName()
    {
        return $this->container['source_name'];
    }

    /**
     * Sets source_name
     *
     * @param string|null $source_name source_name
     *
     * @return self
     */
    public function setSourceName($source_name)
    {
        if (is_null($source_name)) {
            throw new \InvalidArgumentException('non-nullable source_name cannot be null');
        }
        $this->container['source_name'] = $source_name;

        return $this;
    }

    /**
     * Gets price_per_serving
     *
     * @return float|null
     */
    public function getPricePerServing()
    {
        return $this->container['price_per_serving'];
    }

    /**
     * Sets price_per_serving
     *
     * @param float|null $price_per_serving price_per_serving
     *
     * @return self
     */
    public function setPricePerServing($price_per_serving)
    {
        if (is_null($price_per_serving)) {
            throw new \InvalidArgumentException('non-nullable price_per_serving cannot be null');
        }
        $this->container['price_per_serving'] = $price_per_serving;

        return $this;
    }

    /**
     * Gets ready_in_minutes
     *
     * @return int|null
     */
    public function getReadyInMinutes()
    {
        return $this->container['ready_in_minutes'];
    }

    /**
     * Sets ready_in_minutes
     *
     * @param int|null $ready_in_minutes ready_in_minutes
     *
     * @return self
     */
    public function setReadyInMinutes($ready_in_minutes)
    {
        if (is_null($ready_in_minutes)) {
            throw new \InvalidArgumentException('non-nullable ready_in_minutes cannot be null');
        }
        $this->container['ready_in_minutes'] = $ready_in_minutes;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string|null $summary summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        if (is_null($summary)) {
            throw new \InvalidArgumentException('non-nullable summary cannot be null');
        }
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets cuisines
     *
     * @return object|null
     */
    public function getCuisines()
    {
        return $this->container['cuisines'];
    }

    /**
     * Sets cuisines
     *
     * @param object|null $cuisines cuisines
     *
     * @return self
     */
    public function setCuisines($cuisines)
    {
        if (is_null($cuisines)) {
            throw new \InvalidArgumentException('non-nullable cuisines cannot be null');
        }
        $this->container['cuisines'] = $cuisines;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
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
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
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


