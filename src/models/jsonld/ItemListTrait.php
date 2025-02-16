<?php

/**
 * SEOmatic plugin for Craft CMS 3
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful, and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2023 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

/**
 * schema.org version: v15.0-release
 * Trait for ItemList.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/ItemList
 */
trait ItemListTrait
{
    /**
     * Type of ordering (e.g. Ascending, Descending, Unordered).
     *
     * @var string|ItemListOrderType|Text
     */
    public $itemListOrder;

    /**
     * The number of items in an ItemList. Note that some descriptions might not
     * fully describe all items in a list (e.g., multi-page pagination); in such
     * cases, the numberOfItems would be for the entire list.
     *
     * @var int|Integer
     */
    public $numberOfItems;

    /**
     * For itemListElement values, you can use simple strings (e.g. "Peter",
     * "Paul", "Mary"), existing entities, or use ListItem.  Text values are best
     * if the elements in the list are plain strings. Existing entities are best
     * for a simple, unordered list of existing things in your data. ListItem is
     * used with ordered lists when you want to provide additional context about
     * the element in that list or when the same item might be in different places
     * in different lists.  Note: The order of elements in your mark-up is not
     * sufficient for indicating the order or elements.  Use ListItem with a
     * 'position' property in such cases.
     *
     * @var string|ListItem|Text|Thing
     */
    public $itemListElement;
}
