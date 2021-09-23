<!Doctype html>
<html>

 <?php
   $mobilia=array(
       array("Televisao",40, 10, 20),
       array("Remote", 20, 20, 21),
       array("Sofa", 29, 21, 12),
       array("Computador", 20, 20, 20) 
   );
 for($row=0; $row<4; $row++){
     echo "<p><b>Esta e a linha numero: $row</b></p>";
     echo "<ul>";
     for($col=0; $col<4; $col++){
         echo "<li>".$mobilia[$row][$col]."</li>"; 
         echo "</ul>"; 
     }  
  }
?>
</html>
