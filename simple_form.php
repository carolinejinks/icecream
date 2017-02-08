<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Ice Cream Flavors Simple Form </title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
    <script src="js/simple.js"></script>
</head>

<body>
<div id="container">

<h1>Sock Market</h1>

<div id="flavors">

<form id="iceacreamform" method="post" action="simple_form.php" autocomplete="off">
    <label for="flavor">Flavor </label>
	<input type="text" name="flavor" id="flavor" maxlength="140" required>

    <label for="location">Location </label>
    <input type="text" name="location" id="location" maxlength="50" required>

    <label for="vendor">Vendor </label>
	<input type="text" name="vendor" id="vendor" maxlength="50" required>

	<input type="submit" id="submit" value="Submit">
</form>

</div>

</div> <!-- close container -->
</body>
</html>
