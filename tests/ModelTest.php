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

    public function testModelTableNameSetterAndGetter()
    {
        $model = new MyModel();
        $this->assertEquals('MyModel', $model->getTable());

        $model->setTable('Allen');
        $this->assertNotEquals('MyModel', $model->getTable());
        $this->assertEquals('Allen', $model->getTable());
    }
}

class MyModel extends \Bestlong\Database\Model
{
}
