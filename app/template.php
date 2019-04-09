<!DOCTYPE html>
<html>
<head>
  <title>Wizard Sled Store</title>
</head>
<body>
  <h1>Welcome to the Wizard Sled Store!</h1>
  <h2>Here are your purchases today <?php print $user->username ?></h2>
  <p>Add a new line</p>
  <form id="ccForm">

    <input type="text" name="name" />
    <input type="text" name="cc-num" placeholder="xxxx-xxxx-xxxx-xxxx" />
    <input type="submit" value="Submit" />
  </form>
  <script type="text/javascript" src="assets/form.js"></script>
</body>
</html>
