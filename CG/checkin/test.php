<?php 
class Car
{
    public static function model()
    {
         self::getModel();
    }

    protected static function getModel()
    {
        echo "I am a Car!";
    }

}
car::model();
class Mercedes extends Car
{

   protected static function getModel()
   {
       echo "I am a Mercedes!";
   }

}


?>