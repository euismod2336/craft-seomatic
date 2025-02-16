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
 * Trait for TechArticle.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/TechArticle
 */
trait TechArticleTrait
{
    /**
     * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
     *
     * @var string|Text
     */
    public $proficiencyLevel;

    /**
     * Prerequisites needed to fulfill steps in article.
     *
     * @var string|Text
     */
    public $dependencies;
}
