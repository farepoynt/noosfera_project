<?php

$user = "root";
$pass = "";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    //$dbh->exec("insert into FOO (test1, test2, test3, test4) values ('23', 'Joe', 'Bloggs', 'azaza')");
    //$dbh->exec("DELETE FROM FOO WHERE test1='23'");
    foreach ($dbh->query('SELECT * from FOO') as $row) {
        foreach ($row as $key => $value) {
            print($key . "=" . $value . "<br>");
        }  
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>