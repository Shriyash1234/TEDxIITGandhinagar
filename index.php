<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<!-- External CSS file -->
<style>
body {
    font-family: 'Roboto', sans-serif!important;
      margin:0;
      padding:0;
      box-sizing: border-box;
  }
  
  .mainscreen
  {
      min-height: 100vh;
      width: 100%;
      display: flex;
      flex-direction: column;
      background-color: #1c1c1c;
      /* background-image: url("https://wallpaperaccess.com/full/3063067.png"); */
      color:#DC0000;
  }
  
  .card {
      width: 60rem;
      margin: auto;
      background: white;
      position:center;
      align-self: center;
      top: 50rem;
      border-radius: 1.5rem;
      box-shadow: 4px 3px 20px #3535358c;
      display:flex;
      flex-direction: row;
      
  }
  
  .leftside {
      background: #030303;
      width: 25rem;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-top-left-radius: 1.5rem;
      border-bottom-left-radius: 1.5rem;
  }
  .leftside img{
    height: fit-content;
    width: 90%;
    border-radius: 0%;
  }
  
  .product {
      object-fit: cover;
      width: 20em;
      height: 20em;
      border-radius: 100%;
  }
  
  .rightside {
      background-color: #ffffff;
      width: 35rem;
      border-bottom-right-radius: 1.5rem;
      border-top-right-radius: 1.5rem;
      padding: 1rem 2rem 3rem 3rem;
  }
  
  p{
      display:block;
      font-size: 1.1rem;
      font-weight: 400;
      margin: .8rem 0;
  }
  
  .inputbox
  {
      color:#030303;
      width: 100%;
      padding: 0.5rem;
      border: none;
      border-bottom: 1.5px solid #ccc;
      margin-bottom: 1rem;
      border-radius: 0.3rem;
      font-family: 'Roboto', sans-serif;
      color: #615a5a;
      font-size: 1.1rem;
      font-weight: 500;
    outline:none;
  }
  
  .expcvv {
      display:flex;
      justify-content: space-between;
      padding-top: 0.6rem;
  }
  
  .expcvv_text{
      padding-right: 1rem;
  }
  .expcvv_text2{
      padding:0 1rem;
  }
  
  .button{
      background: linear-gradient(
  135deg
  , #DC0000 0%, #850000 100%);
      padding: 15px;
      border: none;
      border-radius: 50px;
      color: white;
      font-weight: 400;
      font-size: 1.2rem;
      margin-top: 10px;
      width:100%;
      cursor: pointer;
      letter-spacing: .11rem;
      outline:none;
  }
  
  .button:hover
  {
      transform: scale(1.05) translateY(-3px);
      box-shadow: 3px 3px 6px #38373785;
  }
  
  @media only screen and (max-width: 1000px) {
      .card{
          flex-direction: column;
          width: 80%;
          border-radius: 1.5rem;
      }
  
      .leftside{
          width: 100%;
          border-top-right-radius: 0;
          border-bottom-left-radius: 0;
        border-top-right-radius:0;
        border-radius:1.5rem;
      }
  
      .rightside{
          width:auto;
          border-bottom-left-radius: 1.5rem;
          padding:0.5rem 3rem 3rem 2rem;
        border-radius:1.5rem;
      }
  }
</style>  

<!-- HTML | Forms -->
<div class="mainscreen">
  <div class="card">
    <div class="leftside">
      <img
           src="./Assests/img/TEDxIITGandhinagar_Logo.jpg"
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
                    // "image": "Assests/img/TEDxIITGandhinagar_Logo.jpg",
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
