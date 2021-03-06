<?php
namespace Shopping\ApiTKUrlBundle\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * Class Filter
 *
 * @package App\Dto
 * @Annotation
 */
class Filter
{
    const COMPARISON_EQUALS = 'eq';
    const COMPARISON_NOTEQUALS = 'neq';
    const COMPARISON_GREATERTHAN = 'gt';
    const COMPARISON_GREATERTHANEQUALS = 'gteq';
    const COMPARISON_LESSTHAN = 'lt';
    const COMPARISON_LESSTHANEQUALS = 'lteq';
    const COMPARISON_IN = 'in';
    const COMPARISON_NOTIN = 'nin';

    /**
     * Specify the name of this filter.
     *
     * @var string
     */
    public $name;

    /**
     * Specify what comparisons are allowed for this filter.
     *
     * @var string[]
     */
    public $allowedComparisons = ['eq', 'neq', 'gt', 'gteq', 'lt', 'lteq', 'in', 'nin'];

    /**
     * Specify what values are allowed for this filter.
     *
     * @var array
     */
    public $enum = [];

    /**
     * When the automatic ApiService->applyToQueryBuilder() method is used, it will use the "name" on the primary
     * table by default. If you need this filter to select for a different field or for a joined table, you can use this
     * option (f.e. "u.foobar").
     *
     * @var string
     */
    public $queryBuilderName = null;

    /**
     * Params will, by default, be automatically applied to the QueryBuilder with the correct
     * filter (allowedComparisons). In case you need a field with special handling, eg. a search that goes
     * across multiple fields, set this attribute to false to prevent it being added to the QueryBuilder
     * automatically.
     *
     * @var bool
     */
    public $autoApply = true;
}