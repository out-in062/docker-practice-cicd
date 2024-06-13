<?php
$servername = "mysql";
$username = "root";
$password = "morijyobi";
$dbname = "docker-practice-db";

// MySQLデータベースに接続
$conn = new users($servername, $username, $password, $dbname);

// 接続を確認
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// サンプルクエリの実行
$sql = "SELECT * FROM your_table_name";  // 必要に応じてテーブル名を変更
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 結果を出力
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - 名前: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>