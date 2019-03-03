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
 * Interface SortingInterface
 * @package Gnatkovsky
 * This interface will be realize by classes with needed logic;
 */
interface SortingInterface
{
    public function sorting(array $data): array;
}
