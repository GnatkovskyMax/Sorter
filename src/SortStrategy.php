<?php

/*
 * This file is part of the PHP library "Sorter" package.
 *
 * (c) Maxim Gnatkovsky <Gnatkovsky@bigmir.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gnatkovsky;

class SortStrategy
{
    private $sortStrategy;
    private $originArray;
    public function __construct(SortingInterface $strategy)
    {
        $this->sortStrategy=$strategy;
    }
    public function doSorting($data)
    {
        $this->originArray=$data;

        return  $this->sortStrategy->sorting($data);
    }
    public function getOriginArray()
    {
        return $this->originArray;
    }
}
