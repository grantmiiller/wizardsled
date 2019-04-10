<!DOCTYPE html>
<html>
<head>
  <title>Wizard Sled Store</title>
  <link rel="stylesheet" href="assets/style.css"/>
</head>
<body>
  <div class="site-header">
    <div class="header-content">
      <h1>Wizard Sled</h1>
    </div>
  </div>
  <div class="site-container">
    <div class="checkout-greeting">
      <h2>Hi <?php print $user->username ?>! Ready to check out?</h2>
      <p>Your total comes to <span class="total-cost">$320.02</p>
      <p class="assurance">
        You can be assured that your credit card remains secure and that it is literally impossible for someone to steal it from our site. Have no worries!
      </p>
      <p class="not-liable">
        Wizard Sled is not liable for the safety of your credit card information and no way can guarantee that it would be stolen. Users accessing this site agree to do it at their own risk and give up also civil liberties doing so.
      </p>
    </div>
    <div class="payment-form-container">
      <h3>Confirm Purchase</h3>
      <form id="ccForm">
        <label for="name">Owner Name:</label>
        <input type="text" name="name" />
        <label for="cc-num">Card Number:</label>
        <input type="text" name="cc-num" placeholder="xxxx-xxxx-xxxx-xxxx" />
        <input type="submit" value="Confirm" />
      </form>
    </div>
  </div>
  <div class="footer">
    Copyright 2019. No Rights Reserved. Go Away
  </div>
  <script type="text/javascript" src="assets/form.js"></script>
</body>
</html>
