<?php

class ModelTest extends PHPUnit_Framework_TestCase
{
    public function testSetValueByConstruct()
    {
        $model = new \Bestlong\Database\Model(['name' => 'Allen']);
        $this->assertEquals('Allen', $model->name);
    }

    public function testSetValueBySetter()
    {
        $model = new \Bestlong\Database\Model();
        $model->name = 'Allen';
        $this->assertEquals('Allen', $model->name);
    }
}
