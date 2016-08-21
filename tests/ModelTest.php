<?php

class ModelTest extends PHPUnit_Framework_TestCase
{
    public function testSetValueByConstruct()
    {
        $model = new MyModel(['name' => 'Allen']);
        $this->assertEquals('Allen', $model->name);
    }

    public function testSetValueBySetter()
    {
        $model = new MyModel();
        $model->name = 'Allen';
        $this->assertEquals('Allen', $model->name);
    }

    public function testIsSetAndUnSet()
    {
        $model = new MyModel();
        $this->assertFalse(isset($model->name));

        $model->name = 'Allen';
        $this->assertTrue(isset($model->name));

        unset($model->name);
        $this->assertFalse(isset($model->name));
    }
}

class MyModel extends \Bestlong\Database\Model
{
}
