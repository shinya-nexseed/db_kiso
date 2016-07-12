<?php
    // DBの接続処理
    $dsn = 'mysql:dbname=phpkiso4;host=localhost';
    $user ='root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');

    // 読込 (READ)
    $sql = 'SELECT * FROM `anketo` WHERE 1'; // ①sql文を作成
    echo $sql
    echo '<br>';
    $stmt = $dbh->prepare($sql); // ②DBにsql文をセットする
    $stmt->execute(); // ③sql文実行
    // var_dump($stmt);
    // 基本的なsqlのCRUD処理はこの３手順

    // SELECTの場合はプラス２つ手順が必要

    while (1) {
        // ④PHPで使用できるデータへ変換
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($record == false) {
            break;
        }

        // ⑤表示します
        echo $record['code'];
        echo ' - ';
        echo $record['nickname'];
        echo ' - ';
        echo $record['email'];
        echo ' - ';
        echo $record['goiken'];
        echo ' - ';
        echo '<br>';

    }


    // 作成 (CREATE)
    $sql = 'INSERT INTO `anketo` SET `code`=NULL,
                                     `nickname`="php",
                                     `email`="php@mail",
                                     `goiken`="programming"
                                    ';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    // 更新 (UPDATE)

    // 削除 (DELETE)

 ?>
