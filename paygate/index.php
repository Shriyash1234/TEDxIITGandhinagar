<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<!-- External CSS file -->
<style>
<?php include 'CSS/main.css'; ?>
</style>  

<!-- HTML | Forms -->
<div class="mainscreen">
  <div class="card">
    <div class="leftside">
      <img
           src="https://i.pinimg.com/originals/18/9d/dc/189ddc1221d9c1c779dda4ad37a35fa1.png"
           class="product"
           alt="Shoes"
           />
    </div>
    <div class="rightside">
      <form action="">
        <h1>CheckOut</h1>
        <h2>Payment Information</h2>
        <p>Your Name</p>
        <input type="textbox" class="inputbox" name="name" id = "name" required />
        <p>Enter Amount</p>
        <input type="number" class="inputbox" name="amt" id="amt" required />
<!--         <p>Enter your Email-Id</p>
        <input type="number" class="inputbox" name="card_number" id="card_number" required /> -->
        <p></p>
        <button type="button" class="button" name = "btn" value = "Pay now" onclick = "pay_now()">Check-Out</button>
      </form>
    </div>
  </div>
</div>

<!-- Activates Razorpay pop-ups onclicking the check-out button -->
<script>
    function pay_now(){
        var name = jQuery('#name').val();
        var amt = jQuery('#amt').val();
        jQuery.ajax({
            type: 'post',
            url: 'payment_process.php',
            data: "&amt="+amt+"&name="+name,
            success:function(result){
                var options = {
                    "key": "rzp_test_eZd7Iu0T63e1pq", // Enter the Key ID generated from the Dashboard
                    "amount": amt * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                    "currency": "INR",
                    "name": "TEDxIITGandhinagar",
                    "description": "Test Transaction",
                    "image": "https://avatars.githubusercontent.com/u/33686558?s=280&v=4",
                    "handler": function (response){
                        // console.log(response);
                        
                        // Now, we want this data to update in our database defined in db.php
                        jQuery.ajax({
                            type: 'post',
                            url: 'payment_process.php',
                            data: "payment_id="+response.razorpay_payment_id,
                            success:function(result){
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