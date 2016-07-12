<?php

    // DB基礎
    // CRUD処理について
    // データを操作するための基本的な動作をまとめたもの
    // C : Create (作成)
    // R : Read (読込)
    // U : Update (更新)
    // D : Delete (削除)

    // MySQLデータベースで上記処理を行う場合の命令文
    // 「SQL文」というMySQLを操作するための文を使用する必要がある
    // C : INSERT
    // R : SELECT
    // U : UPDATE
    // D : DELETE

    // SQL文法
    // SELECT カラム名 FROM `テーブル名` WHERE 条件
    // 例 : SELECT * FROM `anketo` WHERE 1
    //// 指定したanketoテーブルのデータを全件取得
    ////// WHERE 1 で全件取得という条件になる

    // 例 : SELECT * FROM `anketo` WHERE `code`=1
    //// 指定したanketoテーブルのデータでcodeカラムが1のデータを取得
    ////// WHERE `code`=1 で指定したカラムに指定したデータが入っているデータのみ取得

    
    // INSERT INTO `テーブル名`(`カラム名1`, `カラム名2` ...)
    //   VALUES (データ1, データ2 ...)
    // 例 : INSERT INTO `anketo`(`code`, `nickname`, `email`, `goiken`) VALUES (NULL, 'shiori', 'aaa@gmail.com', 'よろしく')
    //// 指定したanketoテーブルにタプル処理を使ってデータを挿入 (INSERT) する
    ///// SET句を使ったINSERT文も存在する (← こっちがおすすめ)
    // INSERT INTO `anketo` SET `code`=1, `nickname`='seedkun', `email`='aaa@gmail.com'

    // DBへの接続処理

    // 登録処理

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
</head>
<body>
  <h3>ご意見ありがとうございました！</h3>
</body>
</html>

