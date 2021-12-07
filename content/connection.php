<?php
    
    $host = 'redbank.mysql.database.azure.com';
    $username = 'exdwxphprw';
    $password = 'Redbankdb123#';
    $db_name = 'redbank';

    $conn = mysqli_init(); 
    mysqli_ssl_set($conn,NULL,NULL, "../SSL/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
    mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, MYSQLI_CLIENT_SSL);
    if (mysqli_connect_errno($conn)) {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
        }
?> 
