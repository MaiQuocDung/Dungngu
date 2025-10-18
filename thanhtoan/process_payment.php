<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('Asia/Ho_Chi_Minh');

$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "https://localhost/TestVNPay/vnpay_ipn.php";
$vnp_TmnCode = "WTL0XMRT"; 
$vnp_HashSecret = "Y0XCNOCNR895HJZKSLGD0OCZ93YQ5V2T"; 

$vnp_TxnRef = $_POST['order_id'] ?? '';
$vnp_OrderInfo = $_POST['order_desc'] ?? '';
$vnp_OrderType = $_POST['order_type'] ?? '';
$vnp_Amount = isset($_POST['amount']) ? $_POST['amount'] * 100 : 0;
$vnp_Locale = $_POST['language'] ?? '';
$vnp_BankCode = $_POST['bank_code'] ?? '';
$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

$vnp_Bill_Mobile = $_POST['txt_billing_mobile'] ?? '';
$vnp_Bill_Email = $_POST['txt_billing_email'] ?? '';
$fullName = trim($_POST['txt_billing_fullname'] ?? '');
$vnp_Bill_FirstName = '';
$vnp_Bill_LastName = '';
if (!empty($fullName)) {
    $name = explode(' ', $fullName);
    $vnp_Bill_FirstName = array_shift($name);
    $vnp_Bill_LastName = array_pop($name);
}
$vnp_Bill_Address = $_POST['txt_billing_address'] ?? '';

$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $vnp_Amount,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => $vnp_OrderInfo,
    "vnp_OrderType" => $vnp_OrderType,
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_TxnRef" => $vnp_TxnRef,
    "vnp_Bill_Mobile" => $vnp_Bill_Mobile,
    "vnp_Bill_Email" => $vnp_Bill_Email,
    "vnp_Bill_FirstName" => $vnp_Bill_FirstName,
    "vnp_Bill_LastName" => $vnp_Bill_LastName,
    "vnp_Bill_Address" => $vnp_Bill_Address,
);

if (!empty($vnp_BankCode)) {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}

ksort($inputData);
$query = "";
$hashdata = "";
$i = 0;
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode((string)$value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode((string)$value);
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode((string)$value) . '&';
}

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
    $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
}

$returnData = array('code' => '00', 'message' => 'success', 'data' => $vnp_Url);
if (isset($_POST['redirect'])) {
    header('Location: ' . $vnp_Url);
    exit();
} else {
    echo json_encode($returnData);
}
?>
