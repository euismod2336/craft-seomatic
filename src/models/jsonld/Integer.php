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

use nystudio107\seomatic\models\MetaJsonLd;

/**
 * schema.org version: v15.0-release
 * Integer - Data type: Integer.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/Integer
 */
class Integer extends MetaJsonLd implements IntegerInterface, NumberInterface
{
	use IntegerTrait;
	use NumberTrait;

	/**
	 * The Schema.org Type Name
	 *
	 * @var string
	 */
	public static $schemaTypeName = 'Integer';

	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	public static $schemaTypeScope = 'https://schema.org/Integer';

	/**
	 * The Schema.org Type Extends
	 *
	 * @var string
	 */
	public static $schemaTypeExtends = 'Number';

	/**
	 * The Schema.org Type Description
	 *
	 * @var string
	 */
	public static $schemaTypeDescription = 'Data type: Integer.';


	/**
	 * @inheritdoc
	 */
	public function getSchemaPropertyNames(): array
	{
		return array_keys($this->getSchemaPropertyExpectedTypes());
	}


	/**
	 * @inheritdoc
	 */
	public function getSchemaPropertyExpectedTypes(): array
	{
		return [

		];
	}


	/**
	 * @inheritdoc
	 */
	public function getSchemaPropertyDescriptions(): array
	{
		return [

		];
	}


	/**
	 * @inheritdoc
	 */
	public function getGoogleRequiredSchema(): array
	{
		return [];
	}


	/**
	 * @inheritdoc
	 */
	public function getGoogleRecommendedSchema(): array
	{
		return [];
	}


	/**
	 * @inheritdoc
	 */
	public function defineRules(): array
	{
		$rules = parent::defineRules();
		    $rules = array_merge($rules, [
		        [$this->getSchemaPropertyNames(), 'validateJsonSchema'],
		        [$this->getGoogleRequiredSchema(), 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
		        [$this->getGoogleRecommendedSchema(), 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
		    ]);

		    return $rules;
	}
}
