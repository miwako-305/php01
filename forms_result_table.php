<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問い合わせ結果</title>
</head>
<body>
<table>
<tr><th>受信時間</th><th>名前</th><th>メールアドレス</th><th>電話番号</th><th>住所</th><th>問い合わせ内容</th></tr>
<?php
$fp = fopen("data/froms_data.txt","r");        
while(!feof($fp)){
    $text = fgets($fp);
    $myarray = explode(",",$text); //文字列を配列に変換する方法
 
    print "<tr>\n";
    foreach($myarray as $substr) {
        print "<td>$substr</td>";
     }



    // echo $text.'<br>';
    
    // $line = fgets($fp);
    // if (trim($line) != null){
    //     list($name,$mail,$phone,$address,$content) = explode("\t",$line);
    //     print "<tr>\n";
    //     print "<td>$name</td><td>$mail</td><td>$phone</td>";
    //     print "<td>$address</td><td>$content</td>";
    //     print "</tr>\n";
    // }
}
fclose($fp);
?>
</table>
</body>
</html>