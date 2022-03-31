<!DOCTYPE html>
<html>
<body>

<?php
    function validationPalindrom()
    {
       $text = $_POST["vartext"]; 
       $splitText = str_split($text);
       for ($i=count($splitText) ; $i >= 0; $i--) {
           $data[] = $splitText[$i];
       }
       if($text===implode($data)){
       		echo '"'.$text.'" Is Palindrome';
        }else{
       		echo '"'.$text.'" Not Palindrome';
       }
    }
    
   if (isset($_POST["vartext"])) {
        echo validationPalindrom();
   }
?> 

<form action="<?php $_SERVER["PHP_SELF"]?>"  method='POST'>
  <label for="fname">Text:</label><br>
  <input type="text" id="fname" name="vartext"><br>
  <input type="submit" value="Submit">
</form> 



</body>
</html>
