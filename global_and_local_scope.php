<?php 
   

  $x = 5;//global scope
  function myTest(){
    global $x;
    echo "<p> Variable x inside function is: $x </p>";
  } 
  myTest();
  echo "<p> Variable x inside function is: $x </p>";

  
   $x = 5;
   $y = 10;

   function myTest1(){
    $GLOBALS['y'] = $GLOBALS['x'] + 10;
   }
   myTest1();
   echo "<br> $x <br>";

   function myTest2(){
    static $x =0;
    echo "<br> $x ";
    $x++;
   }
   myTest2();
   myTest2();
   myTest2();


   for($i =1;$i<=10;$i++){
    echo "<br> for loop used $i ";

   }

   //the echo statement 
   echo "this ", "string ", "was";

   $text1 = "Learn PHP";
   $text2 = "W3Schools.com";
   $text2 = 5;
   $text3 = 4;
   print("<h2>".$text1."<h2>");

   $list = array("A", "B", "C", "D");

   for ($i = 0; $i < count($list); $i++) {
        echo "list ".$list[$i]."<br>";
   } 
 
?>