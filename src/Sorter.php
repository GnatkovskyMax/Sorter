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
     * Creating a sorting logic class.
     * @param SortingInterface $logic
     */
    public function __construct(SortingInterface $logic)
    {
        $this->sortLogic=$logic;
    }

    /**
     * Using methods of sorting in class`s context Sorter.
     * @param array $data
     * @return array
     */
    public function doSorting(array $data):array
    {
        return  $this->sortLogic->sorting($data);
    }

    /**
     * This method allow to replace the logic of sorting.
     * @param SortingInterface $logic
     */

    public function setLogic(SortingInterface $logic){
      $this->sortLogic=$logic;
    }
}
