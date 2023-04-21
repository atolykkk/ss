<?php
session_start();

require('connect.php');

function print_user($value){
    echo '<pre>';
    print_r($value);
    echo '<pre>';
}
function db_error($request){
    $error = $request->errorInfo();
    if ($error[0]!== PDO::ERR_NONE){
        print($error[2]);
        exit();
    }
    return true;
}

function all_select($tables){
    global $pdo;
    $quest = "SELECT * FROM $tables";
    $request = $pdo->prepare($quest);
    $request->execute();

    db_error($request);

    return $request->fetchAll();
}
function one_select($tables, $params=[]){
    global $pdo;
    $quest = "SELECT * FROM $tables";

if (!empty($params)) {
    $i = 0;
    foreach($params as $key=>$value){
        if(!is_numeric($value)){
            $value = "'".$value."'";
        }
        if ($i === 0) {
            $quest = $quest . " WHERE $key=$value";
        }
        else {
            $quest = $quest . " AND $key=$value";
        }
        $i++;
    }
}


    $request = $pdo->prepare($quest);
    $request->execute();

    db_error($request);

    return $request->fetch();
}

function insert($tables, $params){
    global $pdo;
    $i = 0;
    $col = '';
    $mask = '';

    foreach($params as $key=>$value){
        if ($i === 0){
            $col = $col."$key";
            $mask = $mask."'"."$value"."'";
        }else{
            $col = $col . ", $key";
            $mask = $mask . ", '" . "$value"."'";
        }
        $i++;
    }

    $sql = "INSERT INTO $tables ($col) VALUES ($mask)";
    // print_user($sql);
    // exit();
    $request = $pdo->prepare($sql);
    $request->execute($params);
    db_error($request);
    return $pdo->lastInsertId();
}


?>