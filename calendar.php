<?php
function dataBaseGenerator()
    {
        return new PDO(
            "mysql:host=localhost;dbname=clown;charset=UTF8",
            "root",
            "",
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
    };

    function getAllLieu()
    {
        $dbh = dataBaseGenerator();
        $sth = $dbh->prepare("SELECT * FROM `lieu`");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    };

  //var_dump(getAllLieu());