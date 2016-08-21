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

    public function testIsSetAndUnSet()
    {
        $model = new \Bestlong\Database\Model();
        $this->assertFalse(isset($model->name));

        $model->name = 'Allen';
        $this->assertTrue(isset($model->name));

        unset($model->name);
        $this->assertFalse(isset($model->name));
    }
}
