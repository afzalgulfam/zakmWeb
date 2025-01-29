<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<?php
include "conn/conn.php";
$data = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `all_key` WHERE 1"));
$key_name = $data['key_name'];
// Get the plan from POST or GET
$plan = isset($_POST['plan']) ? htmlspecialchars($_POST['plan']) : (isset($_GET['plan']) ? htmlspecialchars($_GET['plan']) : null);

// Determine the amount based on the plan
if ($plan === 'standard') {
    $amount = 1999 * 100; // Standard plan price
} elseif ($plan === 'premium') {
    $amount = 2499 * 100; // Premium plan price
} else {
    $amount = 0; // Invalid plan
}
?>
<div style="display: none;">
    <input type="text" name="name" id="name" value="<?php echo $_POST['name'];?>" />
    <input type="email" name="email" id="email" value="<?php echo $_POST['email'];?>" />
    <input type="text" name="mobile_number" id="mobile_number" value="<?php echo $_POST['mobile_number'];?>"/>
    <input type="text" name="key_name" id="key_name" value="<?php echo $key_name;?>"/>
    <input type="hidden" id="plan" value="<?php echo $plan; ?>" />
</div>
    <script>
var name=jQuery('#name').val();
var email=jQuery('#email').val();
var mobile_number=jQuery('#mobile_number').val();
var key_name=jQuery('#key_name').val();
var plan = jQuery('#plan').val();

// Determine the amount dynamically
var amount;
if (plan === 'Standard') {
    amount = 1999 * 100; // Standard plan
} else if (plan === 'Premium') {
    amount = 2499 * 100; // Premium plan
} else {
    alert("Please choose a valid plan.");
    window.location.href = "https://zakm.in/"; // Redirect to the previous page
    throw new Error("Invalid plan selected.");
}

var options = {
"key": "rzp_live_hXb07C1kaA4P0z",
"amount": amount, // Dynamic amount based on the plan
"currency": "INR",
"name": "Zakm",
"description": "Billing Software",
"image": "../assets/img/logo2.png",
"handler": function (response){
jQuery.ajax({
type:'post',
url:'payment_update.php',
data:"name="+name+"&email="+email+"&mobile_number="+mobile_number+"&key_name="+key_name+"&payment_id="+response.razorpay_payment_id+"&plan="+plan,
success:function(result){
}
});
jQuery.ajax({
type:'post',
url:'mail/simplem',
data:"key_name="+key_name+"&email="+email,
success:function(result){
}
});
alert('your payment is successful! and your (Key) will be sent to your email address!');
// alert('your (Key) will be sent to your email address!');
window.location.href="https://zakm.in/";
},
};
var rzp1 = new Razorpay(options);
rzp1.open();
</script>
