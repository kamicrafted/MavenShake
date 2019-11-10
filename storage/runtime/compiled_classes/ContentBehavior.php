<?php // vfZEvcktR1X7j
/**
 * @link http://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license http://craftcms.com/license
 */

namespace craft\behaviors;

use yii\base\Behavior;

/**
 * Content behavior
 *
 * This class provides attributes for all the unique custom field handles.
 */
class ContentBehavior extends Behavior
{
    // Static
    // =========================================================================

    /**
     * @var string[] List of supported field handles.
     */
    public static $fieldHandles = [
        'recipe' => true,
        'productPhoto' => true,
        'description' => true,
        'intro' => true,
        'headline' => true,
        'subhead' => true,
        'cta' => true,
        'keyart' => true,
        'richtext' => true,
        'highlights' => true,
        'layout' => true,
        'sectionLink' => true,
        'sectionImage' => true,
        'bgColor' => true,
        'ingredients' => true,
        'image' => true,
        'ingredientName' => true,
        'ctaUrl' => true,
    ];

    // Properties
    // =========================================================================

    /**
     * @var mixed Value for field with the handle “recipe”.
     */
    public $recipe;

    /**
     * @var \craft\elements\db\AssetQuery Value for field with the handle “productPhoto”.
     */
    public $productPhoto;

    /**
     * @var mixed Value for field with the handle “description”.
     */
    public $description;

    /**
     * @var mixed Value for field with the handle “intro”.
     */
    public $intro;

    /**
     * @var mixed|string|null Value for field with the handle “headline”.
     */
    public $headline;

    /**
     * @var string|null Value for field with the handle “subhead”.
     */
    public $subhead;

    /**
     * @var string|null Value for field with the handle “cta”.
     */
    public $cta;

    /**
     * @var \craft\elements\db\AssetQuery Value for field with the handle “keyart”.
     */
    public $keyart;

    /**
     * @var mixed Value for field with the handle “richtext”.
     */
    public $richtext;

    /**
     * @var \craft\elements\db\MatrixBlockQuery Value for field with the handle “highlights”.
     */
    public $highlights;

    /**
     * @var \craft\fields\data\SingleOptionFieldData Value for field with the handle “layout”.
     */
    public $layout;

    /**
     * @var mixed Value for field with the handle “sectionLink”.
     */
    public $sectionLink;

    /**
     * @var \craft\elements\db\AssetQuery Value for field with the handle “sectionImage”.
     */
    public $sectionImage;

    /**
     * @var \craft\fields\data\ColorData|null Value for field with the handle “bgColor”.
     */
    public $bgColor;

    /**
     * @var \craft\elements\db\MatrixBlockQuery Value for field with the handle “ingredients”.
     */
    public $ingredients;

    /**
     * @var \craft\elements\db\AssetQuery Value for field with the handle “image”.
     */
    public $image;

    /**
     * @var string|null Value for field with the handle “ingredientName”.
     */
    public $ingredientName;

    /**
     * @var string|null Value for field with the handle “ctaUrl”.
     */
    public $ctaUrl;

    /**
     * @var array Additional custom field values we don’t know about yet.
     */
    private $_customFieldValues = [];

    // Magic Property Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function __isset($name)
    {
        if (isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::__isset($name);
    }

    /**
     * @inheritdoc
     */
    public function __get($name)
    {
        if (isset(self::$fieldHandles[$name])) {
            return $this->_customFieldValues[$name] ?? null;
        }
        return parent::__get($name);
    }

    /**
     * @inheritdoc
     */
    public function __set($name, $value)
    {
        if (isset(self::$fieldHandles[$name])) {
            $this->_customFieldValues[$name] = $value;
            return;
        }
        parent::__set($name, $value);
    }

    /**
     * @inheritdoc
     */
    public function canGetProperty($name, $checkVars = true)
    {
        if ($checkVars && isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::canGetProperty($name, $checkVars);
    }

    /**
     * @inheritdoc
     */
    public function canSetProperty($name, $checkVars = true)
    {
        if ($checkVars && isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::canSetProperty($name, $checkVars);
    }
}
