<?php

/*
 * This file is part of the library "Sorter" package.
 *
 * (c) Maxim Gnatkovsky <Gnatkovsky@bigmir.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gnatkovsky;

/**
 * @Interface SortingInterface
 * @package Gnatkovsky
 * This interface will be realize by classes with needed logic;
 * @param  array  $data
 * @return array  $data
 */
interface SortingInterface
{
    /**
     *The idea of ​​this method should have the sorting logic that is needed for your project.
     * @param array $data
     * @return array
     */
    public function sorting(array $data): array;
}
