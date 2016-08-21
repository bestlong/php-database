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

        foreach ($attributes as $name => $attribute) {
            $this->attributes[$name] = $attribute;
        }
    }

    public function getTable()
    {
        return $this->table;
    }

    public function setTable($table)
    {
        $this->table = $table;
    }

    public function __get($name)
    {
        return $this->attributes[$name];
    }

    public function __set($name, $value)
    {
        return $this->attributes[$name] = $value;
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
