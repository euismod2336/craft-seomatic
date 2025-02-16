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
 * Trait for MortgageLoan.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/MortgageLoan
 */
trait MortgageLoanTrait
{
    /**
     * Amount of mortgage mandate that can be converted into a proper mortgage at
     * a later stage.
     *
     * @var MonetaryAmount
     */
    public $loanMortgageMandateAmount;

    /**
     * Whether borrower is a resident of the jurisdiction where the property is
     * located.
     *
     * @var bool|Boolean
     */
    public $domiciledMortgage;
}
