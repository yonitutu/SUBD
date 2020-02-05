<html>
<head>
</head>
<body>
<h1>Connected to sql</h1>


	<table align="center">
		<caption>Crimes in the World</caption>
		<tr>
			<th>City</th>
			<th>Years</th>
			<th>Population</th>
			<th>Total violent crime</th>
			<th>Murder</th>
			<th>Legacy rape</th>
			<th>Revised rape</th>
			<th>Robbery</th>
			<th>Assault</th>
			<th>Violent crime rate</th>
			<th>Murder rate</th>
			<th>Legacy rape rate</th>
			<th>Revised rape rate</th>
			<th>Robbery rate</th>
			<th>Assault rate</th>
		</tr>

<?php
$con = mysqli_connect('localhost','root','root','Crimes');

$query = mysqli_query($con, "select * from cities");
while($row=mysqli_fetch_array($query)) {

print_r($row);


?>
 <tr>
 	<td><? = $row['City']; ?></td>
 	<td><? = $row['Years']; ?></td>
 	<td><? = $row['Population']; ?></td>
 	<td><? = $row['Total violent crime']; ?></td>
 	<td><? = $row['Murder']; ?></td>
 	<td><? = $row['Legacy rape']; ?></td>
 	<td><? = $row['Revised rape']; ?></td>
 	<td><? = $row['Robbery']; ?></td>
 	<td><? = $row['Assault']; ?></td>
 	<td><? = $row['Violent crime rate']; ?></td>
 	<td><? = $row['Murder rate']; ?></td>
 	<td><? = $row['Legacy rape rate']; ?></td>
 	<td><? = $row['Revised rape rate']; ?></td>
 	<td><? = $row['Robbery rate']; ?></td>
 	<td><? = $row['Assault rate']; ?></td>
</tr>

<?php } ?>
</table> 	

	
</body>
</html>