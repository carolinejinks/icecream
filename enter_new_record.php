<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Ice Cream Flavors - Enter </title>
    <link href="https://fonts.googleapis.com/css?family=Nosifer|Nunito" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/table.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
    <script src="js/enter.js"></script>
</head>

<body>
<div id="container">

<h1>Bizarre Ice Cream: Enter New Flavor</h1>

<p class="middle"><a href="inventory.php">View full inventory</a></p>

<div id="flavors">

<form id="flavorform" method="post" autocomplete="off">
<!-- autocomplete="off" ensures form will be empty if user clicks
     the browser's Back button -->
    <label for="flavor">Flavor </label>
	<input type="text" name="flavor" id="flavor" maxlength="140" required>

    <label for="location">Location </label>
    <input type="text" name="location" id="location" maxlength="50" required>

    <label for="vendor">Vendor </label>
	<input type="text" name="vendor" id="vendor" maxlength="50" required>


	<input type="submit" id="submit" value="Submit">
</form>

</div>

<div id="response">
    <p class="announce">Thanks for submitting the form!</p>
    <p class="middle"><a href="enter_new_record.php">Return to the form</a></p>
</div>

</div> <!-- close container -->
</body>
</html>
