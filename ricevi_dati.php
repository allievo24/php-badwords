
       <?php 
        $parolaccia = $_post['parolaccia'];
       
        $testoaDaCensurato ="Chiedi all’utente la sua email,
        controlla che sia nella lista di chi può accedere,
        stampa un messaggio appropriato sull’esito del controllo.
        Gioco dei dadi
        Generare un numero random da 1 a 6, sia per il giocatore sia per il computer.";
       
        $testoDaCensurato = str_replace($parolaccia,"*******",$testoaDaCensurato);
       
   
       

