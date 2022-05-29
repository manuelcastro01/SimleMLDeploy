<?php

    $P1 = $_POST["P1"];
    $P2 = $_POST["P2"];

    $arg1 = "$P1,$P2";  //Creating a string to send to the python file, we can also do it separatelly

    $command = escapeshellcmd("python3 UseModel.py $arg1"); //Important to use 'python3' if you have a python version >= 3.0

    $output = shell_exec($command);
    echo $output;

?>
