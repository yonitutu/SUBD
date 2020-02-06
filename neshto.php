<html>
<head>
</head>
<body>
<h1 style="text-align: center">Crimes in the world</h1>

<form action="neshto.php" method="get" style="text-align: center;">
            <input type="submit" name="on" value="Show me avarage crimes">
            <input type="submit" name="off" value="Show me sum of the murders">
            <input type="submit" name="all" value="Show me all">
        </form>

<table style="text-align: center;">



<?php
$con = mysqli_connect('localhost','root','root','Crimes');

	if(isset($_GET['on'])) {
        onFunc($con);
    }
    if(isset($_GET['off'])) {
        offFunc($con);
    }
    if(isset($_GET['all'])){
    	allFunc($con);
    }
    	
    

    function onFunc($con){
    	?>
 		<tr>
			<th >Avarage crimes</th>
		</tr>
		<?php
    	$opit1 = mysqli_query($con, "select AVG(violent_crime_total) as Alabama_avg from cities a where a.years >= 1960 AND a.years <= 1980");
		while($row=mysqli_fetch_array($opit1)) {
?>

	<tr>
 		<td><?php echo $row['Alabama_avg']; ?></td>
 	
	</tr>

<?php }} ?>
<?php

 	function offFunc($con){ 
 		?>
 		<tr>
			<th>Sum of murders</th>
		</tr>
		<?php
 		$opit2 = mysqli_query($con, "select SUM(murder_rate) as Sum_mureder from cities a where a.city = 'Alabama';");
		while($row=mysqli_fetch_array($opit2)) {
?>

	<tr>
 		<td><?php echo $row['Sum_mureder']; ?></td>
 	
	</tr>

<?php }} ?>


<?php

 	function allFunc($con){ 
 		?>
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
 		$opit3 = mysqli_query($con, "select * from cities");
		while($row=mysqli_fetch_array($opit3)) {
?>


 	<td><?php echo $row['city']; ?></td>
 	<td><?php echo $row['years']; ?></td>
 	<td><?php echo $row['population']; ?></td>
 	<td><?php echo $row['violent_crime_total']; ?></td>
 	<td><?php echo $row['murder']; ?></td>
 	<td><?php echo $row['legacy_rape1']; ?></td>
 	<td><?php echo $row['revised_rape2']; ?></td>
 	<td><?php echo $row['robbery']; ?></td>
 	<td><?php echo $row['assault']; ?></td>
 	<td><?php echo $row['violet_crime_rate']; ?></td>
 	<td><?php echo $row['murder_rate']; ?></td>
 	<td><?php echo $row['legacy_rape_rate1']; ?></td>
 	<td><?php echo $row['revised_rape_rate2']; ?></td>
 	<td><?php echo $row['robbery_rate']; ?></td>
 	<td><?php echo $row['assault_rate']; ?></td> 	
</tr>

<?php }} ?>
	





	
	</table> 
	
</body>
</html>