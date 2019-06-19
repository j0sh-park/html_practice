<?php
$name = $_POST['name'];
$email = $_POST['email'];
$category = $_POST['category'];

$conn = mysqli_connect( // DB 연결
    'localhost',
    'member',
    'password',
    'member'
);
// $qry = "INSERT INTO member (name, email, category) VALUES ('$name', '$email', '$category');"; // member insert query
$qry = 'INSERT INTO member (name, email, category) VALUES ("'.$name.'", "'.$email.'", "'.$category.'");'; // member insert query

echo $qry;
echo '<br/>';
$result = mysqli_query($conn, $qry); // query 실행
echo "<script>location.href='/';</script>"; // 루트 디렉토리로 이동

echo $name;
echo '<br/>';
echo $email;
echo '<br/>';
echo $category;
?>