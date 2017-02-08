<?php include 'database.php'; ?>
<?php
	$query = "SELECT * FROM icecream ORDER BY flavor";
	$icecream = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Bizarre Ice Cream Flavors </title>
		<link href="https://fonts.googleapis.com/css?family=Nosifer|Nunito" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/table.css">
</head>

<body>
<div id="container">

<h1>Bizarre Ice Cream Flavors</h1>

<p class="middle">Here's the scoop! Help the list grow by filling out the flavor form.</p>

<table>
    <tr>
        <th>Flavor</th>
        <th>Location</th>
        <th>Vendor</th>
    </tr>
<!-- begin PHP while-loop to display database query results
     with each row enclosed in LI tags -->
<?php while($row = mysqli_fetch_assoc($icecream)) :  ?>

<tr>
    <td><?php echo $row['flavor']; ?></td>
    <td><?php echo $row['location']; ?></td>
    <td><?php echo $row['vendor']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<p class="middle"><a href="enter_new_record.php">Add flavors</a>: Open the flavor entry form.</p>

</div> <!-- close container -->
</body>
</html>
