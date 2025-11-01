<?php
    $cricket=array("virat","de villers","gayle","sachin","boult");
    echo"<h3>Displaying names in Table Format</h3>";
    echo"<br>==============================<br/>";
    echo"<br>Names of cricket players as stored array:<br/>";
    print_r($cricket);
    echo"<br><br>Names of cricket  players displayed in a table:<br/>";
    echo"<table border='2' cellpadding='5' cellspacing='0'>";
    echo"<tr><th>Player Names</th></tr>" ;
    foreach($cricket as $player)
    {
        echo"<tr><td>$player</td></tr>";
    }
    echo"</table>";
?>


















</php>