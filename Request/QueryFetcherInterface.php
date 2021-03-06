<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Request;

use Symfony\Component\HttpFoundation\Request;

/**
 * Helper interface to validate query parameters from the active request.
 *
 * @author Alexander <iam.asm89@gmail.com>
 * @author Lukas Kahwe Smith <smith@pooteeweet.org>
 */
interface QueryFetcherInterface
{
    /**
     * @abstract
     * @param callable $controller
     *
     * @return void
     */
    function setController($controller);

    /**
     * Get a validated query parameter.
     *
     * @param string $name    Name of the query parameter
     * @param Boolean $strict If a requirement mismatch should cause an exception
     *
     * @return mixed Value of the parameter.
     */
    function get($name, $strict = false);

    /**
     * Get all validated query parameter.
     *
     * @param Boolean $strict If a requirement mismatch should cause an exception
     *
     * @return array Values of all the parameters.
     */
    function all($strict = false);
}
