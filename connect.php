<?php
    $serverName = "finalteamserver2023.database.windows.net"; 
    $connectionOptions = array(
        "Database" => "teamtwoDB", 
        "Uid" => "finalteam2", 
        "PWD" => "finalteam123!." 
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
?>