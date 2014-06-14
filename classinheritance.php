<?php
require ('index2.php');
echo "<br>";
// create php class
   class Hotel extends Room{ 
    public $room;
    public $floor;

 function __construct($room, $floor)

{
  $this->room = $room;
  $this->floor = $floor;

}

    function room()
    {
      return $this->room;
    }

    function floor()
    {
      return $this->floor;
    }
  }

  $Hotel = new Hotel("10" , "", "10" ,"");
 

  echo "There are ".$Hotel->room. " rooms in the ". $Hotel->floor. " Hotel"; 
  echo "<br>";
  echo "There are ". $Hotel->room . "floors in the " . "Hotel"; 
?>
