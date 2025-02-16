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
 * Trait for MediaSubscription.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/MediaSubscription
 */
trait MediaSubscriptionTrait
{
    /**
     * An Offer which must be accepted before the user can perform the Action. For
     * example, the user may need to buy a movie before being able to watch it.
     *
     * @var Offer
     */
    public $expectsAcceptanceOf;

    /**
     * The Organization responsible for authenticating the user's subscription.
     * For example, many media apps require a cable/satellite provider to
     * authenticate your subscription before playing media.
     *
     * @var Organization
     */
    public $authenticator;
}
