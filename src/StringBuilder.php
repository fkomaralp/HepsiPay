<?php

namespace Fkomaralp\HepsiPay;

class StringBuilder
{
    private $params;

    function __construct($params = null)
    {
        if(!$params)
        {
            if(is_array($params))
            {
                $this->params = $params;
            }
            else
            {
                $this->params = array($params);
            }
        }
    }

    /**
     * @param $params
     * @return StringBuilder
     */
    public static function create($params = null)
    {
        return new StringBuilder($params = null);
    }

    /**
     * @param $superRequestString
     * @return StringBuilder
     */
    public function appendSuper($superRequestString = null)
    {
        if (strlen($superRequestString) > 0)
        {
            $this->params[] = $superRequestString;
        }
        return $this;
    }

    /**
     * @param $key
     * @param $value
     * @return StringBuilder
     */
    public function append($key, $value = null)
    {
        if (empty($value))
        {
            $this->params[] = $key;
        }
        else
        {
            if ($value instanceof RequestInterface)
            {
                $this->params[$key] = $value->getJsonObject();
            }
            else
            {
                $this->params[$key] = $value;
            }
        }
        return $this;
    }

    /**
     * @param $key
     * @param array $array
     * @return StringBuilder
     */
    public function appendArray($key, array $array = array())
    {
        if (!empty($array))
        {
            foreach ($array as $index => $value)
            {
                if ($value instanceof RequestInterface)
                {
                    $this->params[$key][$index] = $value->toHashRequestString();
                }
                else
                {
                    $this->params[$key][$index] = $value;
                }
            }
        }
        return $this;
    }

    /**
     * @param $key
     * @param $value
     * @return StringBuilder
     */
    private function appendKeyValue($key, $value = null)
    {
        if (!empty($value))
        {
            $this->params[$key] = $value;
        }
        return $this;
    }

    /**
     * @param $value
     * @return StringBuilder
     */
    private function appendValue($value = null)
    {
        if (!empty($value))
        {
            $this->params[] = $value;
        }
        return $this;
    }

    /**
     * @param $key
     * @param $value
     * @return StringBuilder
     */
    private function appendKeyValueArray($key, $value = null)
    {
        if (!empty($value))
        {
            $this->params[$key] = $value;
        }
        return $this;
    }

    /**
     * @param $glue
     * @return string
     */
    public function getRequestString($glue = "")
    {
        return implode($glue, $this->params);
    }

    /**
     * @return string
     */
    public function getRequestQueryString()
    {
        return http_build_query($this->params);
    }
}