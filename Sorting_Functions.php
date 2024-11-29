<html>
  <body>
    <?php
      $flowers = array("Sunflower", "Rose", "Dahlia");
      sort($flowers);
      $clength = count($flowers);
      echo "<br><b> Sort Flowers in ascending order </b><br>";
      for ($x = 0; $x < $clength; $x++) {
        echo "<br>";
        echo $flowers[$x]; 
        echo "<br>";
      }
     
      $flower = array("Sunflower", "Rose", "Dahlia");
      rsort($flower);
      $clength = count($flower);
      echo "<br><b>Sort flowers in descending order </b><br>";
      for($x=0; $x<$clength;$x++)
      {
       echo "<br>";
       echo "$flowers[$x]";
       echo "<br>";
      }
  
      $flower = array("one" => "sunflower", "two" => "rose", "three" => "Dahlia");
      asort($flower);
      echo "<br><b>Sort an associative array in ascending order, according to the value</b><br>";
      foreach($flower as $x => $x_value)
      {   
       echo "<br> Key=".$x.", Value=".$x_value;
       echo "<br>";
      }

      $flower = array("one" => "sunflower", "two" => "rose", "three" => "Dahlia");
      ksort($flower);
      echo "<br><b>Sort an associative array in ascending order, according to the key</b><br>";
      foreach($flower as $x => $x_value)
      {   
       echo "<br> Key=".$x.", Value=".$x_value;
       echo "<br>";
      }

      $flower = array("one" => "sunflower", "two" => "rose", "three" => "Dahlia");
      arsort($flower);
      echo "<br><b>Sort an associative array in descending order, according to the value</b><br>";
      foreach($flower as $x => $x_value)
      {   
       echo "<br> Key=".$x.", Value=".$x_value;
       echo "<br>";
      }

      $flower = array("one" => "sunflower", "two" => "rose", "three" => "Dahlia");
      krsort($flower);
      echo "<br><b>Sort an associative array in descending order, according to the key</b><br>";
      foreach($flower as $x => $x_value)
      {   
       echo "<br> Key=".$x.", Value=".$x_value;
       echo "<br>";
      }
    ?>
  </body>
</html>