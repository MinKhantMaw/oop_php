<?php

abstract class ParentClass
{
   abstract public function beProgrammer();
}
//child class

class ChildClass extends ParentClass
{

    public function beProgrammer(): string
    {
        return "I am a child class";
    }
}
