<!-- External CSS file -->
<style>
    .redirect-button{
        background-color: rgb(46, 164, 79);
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
</style>
<h1>
    Thank you, your payment is Successful !!
</h1>
<button class="redirect-button" onclick = "window.location.href = '../index.html';">
    Go back to Homepage
</button>
