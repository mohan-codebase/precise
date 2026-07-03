<?php
session_start();

if (!isset($_SESSION['razorpay_order_id']) || !isset($_SESSION['amount'])) {
    die('Order not created');
}

$razorpayOrderId = $_SESSION['razorpay_order_id'];
$amount = $_SESSION['amount'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Razorpay Payment</title>
    <!-- Include the Razorpay checkout script -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
    <button id="rzp-button1">Pay with Razorpay</button>
    <script>
        var options = {
            "key": "rzp_test_Uymitt5bu4Dp7Q", // Enter the Test/Live API Key ID here
            "amount": "<?php echo $amount; ?>", // Amount is in currency subunits. Default currency is INR. Hence, 100 refers to 100 paise
            "currency": "INR",
            "name": "Precise3DM",
            "description": "Product Purchase",
            "image": "https://your-awesome-site.com/your_logo.jpg",
            "order_id": "<?php echo $razorpayOrderId; ?>", // This is the order ID obtained in Step 1
            "handler": function (response){
                // Send the response to your server
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "verify.php", true);
                xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        alert(xhr.responseText); // or handle success response as needed
                    }
                };
                xhr.send(JSON.stringify({
                    razorpay_payment_id: response.razorpay_payment_id,
                    razorpay_order_id: response.razorpay_order_id,
                    razorpay_signature: response.razorpay_signature
                }));
            },
            "prefill": {
                "name": "John Doe",
                "email": "john.doe@example.com"
            },
            "theme": {
                "color": "#F37254"
            }
        };
        var rzp1 = new Razorpay(options);
        document.getElementById('rzp-button1').onclick = function(e){
            rzp1.open();
            e.preventDefault();
        }
    </script>
</body>
</html>
