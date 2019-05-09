<?php
    $serverName = "johandicodingwebappserver.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "User", // update me
        "Uid" => "dicoding", // update me
        "PWD" => "Johan300998" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "Select * FROM [dbo].[user]";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['ID'] . " " . $row['NAME'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>