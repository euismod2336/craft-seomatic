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
 * Trait for Enumeration.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/Enumeration
 */
trait EnumerationTrait
{
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that
     * supersedes it.
     *
     * @var Class|Property|Enumeration
     */
    public $supersededBy;
}
