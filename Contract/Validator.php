<?php

/*
 * This file is part of the Orient package.
 *
 * (c) Alessandro Nadalin <alessandro.nadalin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Interface Validator
 *
 * @package     Orient
 * @subpackage  Contract
 * @author      Alessandro Nadalin <alessandro.nadalin@gmail.com>
 */

namespace Orient\Contract;

interface Validator
{
    /**
     * Cleans ad returns the polished $value.
     * 
     * @param   mixed $value
     * @return  mixed
     * @throws  Orient\Exception\validation
     */
    public function clean($value);
}
