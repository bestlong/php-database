<?php

namespace Bestlong\Database;

/**
 * Class Model
 * @package Bestlong\Database
 */
class Model
{

    /** @var string 資料表名稱 */
    protected $table;

    /** @var string 主鍵名稱 */
    protected $primaryKey = 'id';

    /** @var array 資料表的欄位列表 */
    protected $fields = array();

    public function __construct()
    {
        $this->table = get_class($this);
    }
}
