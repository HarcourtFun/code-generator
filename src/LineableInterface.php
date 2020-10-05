<?php

namespace Harcourt\CodeGenerator;

/**
 * Interface LineableInterface
 * @package Harcourt\CodeGenerator
 */
interface LineableInterface
{
    /**
     * @return string|string[]
     */
    public function toLines();
}