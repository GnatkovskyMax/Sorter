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
 * Class SortingRevers
 * @package Gnatkovsky
 * This class has logic of sorting.
 */
class SortingRevers implements SortingInterface
{
    /**
     * Method sorting
     * This method sorts values of array in reverse order.
     * @param array $data
     * @return array
     */
    public function sorting(array $data): array
    {
        \arsort($data);

        return $data;
    }
}
