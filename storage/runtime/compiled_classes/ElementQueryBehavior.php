<?php // vfZEvcktR1X7j
/**
 * @link http://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license http://craftcms.com/license
 */

namespace craft\behaviors;

/**
 * Element Query behavior
 *
 * This class provides attributes for all the unique custom field handles.
 *
 * @method self recipe(mixed $value) Sets the [[recipe]] property
 * @method self productPhoto(mixed $value) Sets the [[productPhoto]] property
 * @method self description(mixed $value) Sets the [[description]] property
 * @method self intro(mixed $value) Sets the [[intro]] property
 * @method self headline(mixed $value) Sets the [[headline]] property
 * @method self subhead(mixed $value) Sets the [[subhead]] property
 * @method self cta(mixed $value) Sets the [[cta]] property
 * @method self keyart(mixed $value) Sets the [[keyart]] property
 * @method self richtext(mixed $value) Sets the [[richtext]] property
 * @method self highlights(mixed $value) Sets the [[highlights]] property
 * @method self layout(mixed $value) Sets the [[layout]] property
 * @method self sectionLink(mixed $value) Sets the [[sectionLink]] property
 * @method self sectionImage(mixed $value) Sets the [[sectionImage]] property
 * @method self bgColor(mixed $value) Sets the [[bgColor]] property
 * @method self ingredients(mixed $value) Sets the [[ingredients]] property
 * @method self image(mixed $value) Sets the [[image]] property
 * @method self ingredientName(mixed $value) Sets the [[ingredientName]] property
 * @method self ctaUrl(mixed $value) Sets the [[ctaUrl]] property
 */
class ElementQueryBehavior extends ContentBehavior
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function __call($name, $params)
    {
        if (isset(self::$fieldHandles[$name]) && count($params) === 1) {
            $this->$name = $params[0];
            return $this->owner;
        }
        return parent::__call($name, $params);
    }

    /**
     * @inheritdoc
     */
    public function hasMethod($name)
    {
        if (isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::hasMethod($name);
    }
}
