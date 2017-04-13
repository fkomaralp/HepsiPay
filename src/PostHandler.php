<?php

namespace Fkomaralp\HepsiPay;

class PostHandler implements PostHandlerInterface
{
    /**
     * Destructor.
     */
    public function __destruct()
    {
        unset($this);
    }

    /**
     * Set key/value in post.
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function set($key, $value)
    {
        $_POST[$key] = $value;
    }

    /**
     * Retrieve value stored in post by key.
     *
     * @param mixed $key
     * @param mixed $default
     */
    public function get($key = null, $default = null)
    {
       if(isset($_POST) and !empty($_POST)) {
            if($key) {
                if($key and isset($_POST[$key]) and !empty($_POST[$key])) {
                    return $_POST[$key];
                }
            } else {
                return $_POST;
            }
        }
        
        return $default;
    }
    
    /**
     * Check as boolean the global post variable is exist or not
     *
     * @return bool
     */
    public function hasPost($key = null)
    {
        if(isset($_POST) and !empty($_POST)) {
            if($key) {
                if($key and isset($_POST[$key]) and !empty($_POST[$key])) {
                    return true;
                }
            } else {
                return true;
            }
        }
        
        return false;
    }
}
