Sample2 Hits :
<?php
$conn = mysqli_connect(
        'localhost',
        'sample',
        'password',
        'sample'
);
$qry = 'SELECT * FROM hits WHERE page=2;';
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_array($result);
$hits = $row['hits'] + 1;
$qry = "UPDATE hits SET hits=$hits WHERE page=2;";
mysqli_query($conn, $qry);
echo $hits;
?>
<br/>
<a href="/">Home</a>
