<?php
/**
 * Handles post saves and updates, triggering proper plugin
 * functions when necessary
 *
 * @package LBRYPress
 */

class LBRY_Post_Handler
{
    private static $instance = null;

    public static function get_instance()
    {
        // Create the object
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }
}
