 <?php

 if(isset($_POST['submit_btn']))
 {
  $username = $_POST['name'];
  $password = $_POST['pwd'];
  $text = $username . "," . $password . "\n";
  $fp = fopen('accounts.txt', 'a+');

    if(fwrite($fp, $text))  {
        echo 'saved';

    }
fclose ($fp);    
}

?>
