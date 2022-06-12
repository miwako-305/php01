<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>

<?php

$name = $_POST["name"];
$mail = $_POST["mail"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$content = $_POST["content"];
$c = ",";

//文字作成
$str = date("Y-m-d H:i:s").$c.$name.$c.$mail.$c.$phone.$c.$address.$c.$content;
//File書き込み
$file = fopen("data/froms_data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>送信完了</title>
</head>
<body>

<p>送信が完了しました！</p>
<!-- <h2>./data/data.txt を確認しましょう！</h2> -->

<ul>
<li><a href="forms_input.php">戻る</a></li>
<li><a href="forms_result_table.php">結果</a></li>
</ul>
</body>
</html>