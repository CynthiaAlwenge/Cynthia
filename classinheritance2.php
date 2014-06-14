<?php
//creating php class
   Class Room {
    public $bed;
    public $window; 
    public $bathroom;

  function __construct($bed, $window, $bathroom)
{

  $this->bed=$bed;
  $this->window=$window;
  $this->bathroom=$bathroom;

}
public function bed()
{
  return $this->bed;
  }
public function window()
{
  return $this->window;
  }

public function bathroom()
{
  return $this->bathroom;
}

   }
   $Room= new Room('one','Zero','one');


   echo "There is ".$Room->bed. " bed in the ". "room"; 
   echo "<br>";
   echo "There is ".$Room->bathroom. " bathroom in the ". "room"; 

  
 ?>
