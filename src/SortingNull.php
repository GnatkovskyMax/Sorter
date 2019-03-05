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
 * Class SortingNull
 * @package Gnatkovsky
 * This class does not have logic of sorting.
 * It is example of Nullobject pattern.
 */
class SortingNull implements SortingInterface
{
    /**
     * Method sorting
     * This method does not sort the values ​​of the array, but just returns the entered data.
     * @param array $data
     * @return array
     */
    public function sorting(array $data): array
    {
        return [];
    }
}
