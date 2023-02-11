<!-- External CSS file -->
<style>
    body{
        background-color:#1c1c1c;
    }
    h1{
        font-size:2rem;
        color:#54B435;
        margin-bottom: 0.5% !important;
        border-radius:25px;
    }
    h2{
        font-size:1.7rem;
        color:#383838;
        margin-bottom: 5% !important;
        border-radius:25px;
    }
    .upper{
        /* height:10vh; */
        width:100%;
        background-color:#54B435;
        display:flex;
        flex-direction:column;
        align-items:center;
        border-radius:25px 25px 0px 0px;
    }
    .lower{
        width:100%;
        background-color:#fff;
        display:flex;
        flex-direction:column;
        align-items:center;
        text-align:center;
        padding-bottom:5%;
        border-radius:0px 0px 25px 25px;
    }
    .message-box{
        background-color:#1c1c1c;
        display: flex;
        border-radius:0px 0px 25px 25px;
        flex-direction: column;
        justify-content:center;
        align-items:center;
        width:30%;
       
        /* border: 5px solid #DC0000; */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .redirect-button{
        font-size:1.2rem;
        background-color: #54B435;
        color: white;
        height: 40px;
        width: 120px;
        border-radius: 8px;
        border: none;
        font-weight: bold;
        cursor: pointer;
        transition: box-shadow 0.15s;
    }
    .redirect-button:hover{
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.15); /* Given bottom shadow only, right shadow is not given so 0px and blur is given 5px */
    }
    img{
        height:30%;
        width:30%;
    }
    @media all and (max-width:991px){
        .message-box{
            width:50%;
        }
    }
    @media all and (max-width:768px){
        .message-box{
            width:70%;
        }
        h1{
            font-size:1.7rem;
        }
        h2{
            font-size:1.5rem;
        }
    }
    @media all and (max-width:600px){
        h1{
            font-size:1.5rem;
        }
        h2{
            font-size:1.2rem;
        }
    }
    
</style>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="message-box">
        <div class=upper>
            <img src="./Assests/icons/thumbs-up.png" alt="">
        </div>
        <div class=lower>
            <h1>
                Thank you!
            </h1>
            <h2>
                Your payment is sucessful.
            </h2>    
            <button class="redirect-button" onclick = "window.location.href = './index.html';">
                Home
            </button>
        </div>
        
    </div>
</body>

