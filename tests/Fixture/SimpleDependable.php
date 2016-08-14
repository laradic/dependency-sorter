<?php
/**
 * Part of the CLI PHP packages.
 *
 * License and copyright information bundled with this package in the LICENSE file
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
