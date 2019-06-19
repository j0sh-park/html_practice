<meta charset="utf-8" /> 
<style>
table {
  width: 100%;
}
table, th, td {
  border: 1px solid #000000;
}
</style>
<?php
$conn = mysqli_connect( // DB 연결
        'localhost',
        'member',
        'password',
        'member'
);
$qry = 'SELECT * FROM member;'; // member table조회 query
$result = mysqli_query($conn, $qry); // query 실행
?>
<table>
	<thead>
		<th>ID</th>
		<th>name</th>
		<th>Email</th>
		<th>Category</th>
	</thead>
	<tbody>
    <?php while($row = mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['category']; ?></td>
		</tr>
    <?php } ?>
	</tbody>
</table>
