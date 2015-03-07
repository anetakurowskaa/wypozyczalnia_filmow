<?PHP
   $adresat = 'anetakurowskaa@gmail.com';    // pod ten adres zostanie wysłana wiadomosc
   @$email = $_POST['tel'];
   @$content = $_POST['content'];
   $header =    "From: ktos@serwer.pl \nContent-Type:".
         ' text/plain;charset="utf-8"'.
         "\nContent-Transfer-Encoding: 8bit";
   if (mail($adresat, 'List ze strony', $content, $header))
      echo '<p>Twoja wiadomość została wysłana</p>'; 

   else
    echo '<p><b>NIE</b> wysłano maila!</p>';
   header( 'Location: http://v-ie.uek.krakow.pl/~s176350/projekt/projekt/index.php' ); //przekierowanie po wysłaniu formularza.
    

?>



<!-- 
$to      = 'anetakurowskaa@gmail.com';
$subject = "wiadomość z wypożyczalni";
$message = $_POST['content'];
$headers = 'From: ' . $_POST['tel'] . "\r\n" .  'Reply-To: ' . $_POST['tel'] . "\r\n" . 'Content-type: text/html; charset=utf-8';
   
mail($to, $subject, $message, $headers);

header( 'Location: http://v-ie.uek.krakow.pl/~s176350/projekt/projekt/index.php' ); //przekierowanie po wysłaniu formularza.

?>
-->

<!----

//--- początek funkcji weryfikującej adres e-mail ---
        function checkMail($checkmail) {
          if(filter_var($checkmail, FILTER_VALIDATE_EMAIL)) {
            if(checkdnsrr(array_pop(explode(&quot;@&quot;,$checkmail)),&quot;MX&quot;)){
                return true;
              }else{
                return false;
              }
          } else {
            return false;
          }
        }
        //--- koniec funkcji ---
       
        if(checkMail($formEmail))
               
                {
-------->