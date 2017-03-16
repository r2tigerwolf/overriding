<?php
    class parentClass
    {
        public function method1()
        {
            echo "Hi, this is method1";
        }
        public function method2()
        {
            echo "Hi, this is method2";
        }    
    }
    
    class childClass extends parentClass
    {
        function method1($obj) //overriding function method1
        {
            echo $obj;
        }
    }
    
    $obj = new childClass();
    $parentObj = new parentClass;
    $parentObj->method1();
    echo "<br />";
    $obj->method1("This is Overriding method1");//it will print This is Overriding method1
    echo "<br />";
    $obj->method2();//it will print Hi, this is method2
?>