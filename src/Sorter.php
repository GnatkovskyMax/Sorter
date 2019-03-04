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
/**
 * Class Sorter
 * @package Gnatkovsky
 */
class Sorter
{
    private $sortLogic;

    /**
     * Sorter constructor.
     * @param SortingInterface $logic
     * Creating a sorting logic class
     */
    public function __construct(SortingInterface $logic)
    {
        $this->sortLogic=$logic;
    }

    /**
     * @param array $data
     * @return array
     * Using methods of sorting in class`s context Sorter;
     */
    public function doSorting(array $data):array
    {
        return  $this->sortLogic->sorting($data);
    }
}
