<?php

namespace Bestlong\Database;

/**
 * Class Model
 * @package Bestlong\Database
 */
abstract class Model
{

    /** @var string 資料表名稱 */
    protected $table;

    /** @var string 主鍵名稱 */
    protected $primaryKey = 'id';

    /** @var array 資料表的欄位列表 */
    protected $fields = array();

    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->table = get_class($this);
        foreach ($attributes as $key => $attribute) {
            $this->attributes[$key] = $attribute;
        }
    }

    public function __get($key)
    {
        return $this->attributes[$key];
    }

    public function __set($key, $value)
    {
        return $this->attributes[$key] = $value;
    }

    public function __isset($name)
    {
        return isset($this->attributes[$name]);
    }

    public function __unset($name)
    {
        unset($this->attributes[$name]);
    }
}
