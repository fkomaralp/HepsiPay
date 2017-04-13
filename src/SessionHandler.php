<?php

namespace Fkomaralp\HepsiPay;

class SessionHandler implements SessionHandlerInterface
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) 
        {
            session_start();
        }
    }

    /**
     * Destructor.
     */
    public function __destruct()
    {
        unset($this);
    }

    /**
     * Set key/value in session.
     *
     * @param mixed $key
     * @param mixed $value
     */
    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Retrieve value stored in session by key.
     *
     * @var mixed
     */
    public function get($key = null, $default = null)
    {
       if(isset($_SESSION) and !empty($_SESSION)) 
       {
            if($key) 
            {
                if($key and isset($_SESSION[$key]) and !empty($_SESSION[$key])) 
                {
                    return $_SESSION[$key];
                }
            } 
            else 
            {
                return $_SESSION;
            }
        }
        
        return $default;
    }

    /**
     * Check the session
     *
     * @return array
     */
    public function hasSession($key = null)
    {
        if(isset($_SESSION) and !empty($_SESSION)) 
        {
            if($key) 
            {
                if($key and isset($_SESSION[$key]) and !empty($_SESSION[$key])) 
                {
                    return true;
                }
            } else 
            {
                return true;
            }
        }
        
        return false;
    }

    /**
     * Destroys the session.
     */
    public function end()
    {
        if (session_status() == PHP_SESSION_ACTIVE) 
        {
             session_destroy();
            $_SESSION = array();
        }       
    }
}