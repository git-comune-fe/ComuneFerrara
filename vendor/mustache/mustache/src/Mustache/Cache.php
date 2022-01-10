<?php

/*
 *
 * (c) 2010-2017 Justin Hileman
 *
 */

/**
 * Mustache Cache interface.
 *
 * Interface for caching and loading Mustache_Template classes
 * generated by the Mustache_Compiler.
 */
interface Mustache_Cache
{
    /**
     * Load a compiled Mustache_Template class from cache.
     *
     * @param string $key
     *
     * @return bool indicates successfully class load
     */
    public function load($key);

    /**
     * Cache and load a compiled Mustache_Template class.
     *
     * @param string $key
     * @param string $value
     */
    public function cache($key, $value);
}