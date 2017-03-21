<?php

/**
 * Part of the Laradic PHP Packages.
 *
 * Copyright (c) 2017. Robin Radic.
 *
 * The license can be found in the package and online at https://laradic.mit-license.org.
 *
 * @copyright Copyright 2017 (c) Robin Radic
 * @license https://laradic.mit-license.org The MIT License
 */
namespace Laradic\Tests\Dependencies\Fixture;

use Laradic\DependencySorter\Dependable;

class SimpleDependable implements Dependable
{
    protected $handle;

    protected $deps;

    public function __construct($handle, $deps = [ ])
    {
        $this->handle = $handle;
        $this->deps   = $deps;
    }

    public function getDependencies()
    {
        return $this->deps;
    }

    public function getHandle()
    {
        return $this->handle;
    }
}
