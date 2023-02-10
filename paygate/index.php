<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TEDxIITGn Payment Gateway</title>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <!-- External CSS file -->
  <style>
    <?php include 'CSS/main.css'; ?>
    <?php include 'CSS/footer.css'; ?>
  </style>
</head>

<body>
  <!-- Include Nav-Bar -->
<!--   
  <div class="nav nav-bar">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
      <img class="tedx-image" src="Assests/img/tedx_IITB.png" alt="">
    </div>
    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>

    <div class="nav-links">
      <a class="section-item" href="#">Home</a>
      <a class="section-item" href="#About-tedx">About</a>
      <a class="section-item" href="#speakers">Speakers</a>
      <a class="section-item" href="#">Talk</a>
      <a class="section-item" href="team.html">Team</a>
      <a href="registeration.html"><button class="get-tickets">Get Tickets</button></a>
    </div>

  </div> -->

  <!-- HTML | Forms -->
  <div class="mainscreen">
    <div class="card">
      <div class="leftside">
        <img src="https://avatars.githubusercontent.com/u/33686558?s=280&v=4" class="product" alt="Shoes" />
      </div>
      <div class="rightside">
        <form action="">
          <h1>CheckOut</h1>
          <h2>Payment Information</h2>
          <h4 id = "your-name">Your Name</h4>
          <input type="textbox" class="inputbox" name="name" id="name" required />
          <h4>Enter Amount</h4>
          <input type="number" class="inputbox" name="amt" id="amt" required />
          <!--         <p>Enter your Email-Id</p>
          <input type="number" class="inputbox" name="card_number" id="card_number" required /> -->
          <p></p>
          <button type="button" class="button" name="btn" value="Pay now" onclick="pay_now()">Check-Out</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <section class="footer-class">
    <footer>
      <div class="container">
        <div class="row">
          <div class="footer-col col-sm-3">
            <h4>About TEDx</h4>
            <p>TEDx is a local, self-organized event that brings people together to share a TED-like experience.</p>
          </div>
          <div class="footer-col col-sm-3">
            <h4>Explore</h4>
            <ul>
              <li><a href="#">TEDx Talks</a></li>
              <li><a href="#">Organize a TEDx Event</a></li>
              <li><a href="#">Become a TEDx Partner</a></li>
            </ul>
          </div>
          <div class="footer-col col-sm-3">
            <h4>Follow Us</h4>
            <ul>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Instagram</a></li>
            </ul>
          </div>
          <div class="footer-col col-sm-3">
            <h4>Contact</h4>
            <ul>
              <li>TEDx</li>
              <li>123 Main Street</li>
              <li>Anytown, USA</li>
              <li>123-456-7890</li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </section>

</body>
<!-- Activates Razorpay pop-ups onclicking the check-out button -->
<script>
  function pay_now() {
    var name = jQuery('#name').val();
    var amt = jQuery('#amt').val();
    jQuery.ajax({
      type: 'post',
      url: 'payment_process.php',
      data: "&amt=" + amt + "&name=" + name,
      success: function(result) {
        var options = {
          "key": "rzp_test_eZd7Iu0T63e1pq", // Enter the Key ID generated from the Dashboard
          "amount": amt * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
          "currency": "INR",
          "name": "TEDxIITGandhinagar",
          "description": "Test Transaction",
          "image": "https://avatars.githubusercontent.com/u/33686558?s=280&v=4",
          "handler": function(response) {
            // console.log(response);

            // Now, we want this data to update in our database defined in db.php
            jQuery.ajax({
              type: 'post',
              url: 'payment_process.php',
              data: "payment_id=" + response.razorpay_payment_id,
              success: function(result) {
                window.location.href = "thank_you.php";
              }
            });
          }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
      }
    });

  }
</script>

</html>