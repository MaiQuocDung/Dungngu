<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('Asia/Ho_Chi_Minh');

$vnp_HashSecret = "Y0XCNOCNR895HJZKSLGD0OCZ93YQ5V2T"; 

$inputData = array();
$data = $_GET; 
foreach ($data as $key => $value) {
    if (substr($key, 0, 4) == "vnp_") {
        $inputData[$key] = $value;
    }
}

$vnp_SecureHash = $inputData['vnp_SecureHash'];
unset($inputData['vnp_SecureHash']);

ksort($inputData);
$hashData = "";
$i = 0;
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashData .= '&' . urlencode($key) . "=" . urlencode((string)$value);
    } else {
        $hashData .= urlencode($key) . "=" . urlencode((string)$value);
        $i = 1;
    }
}

$secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);

if ($secureHash === $vnp_SecureHash) {
 
    $orderID = $inputData['vnp_TxnRef'];
    $amount = $inputData['vnp_Amount'];
    $responseCode = $inputData['vnp_ResponseCode'];

    if ($responseCode == '00') {
        echo "Thanh toán thành công. Mã đơn hàng: " . $orderID . " Số tiền: " . $amount;
    } else {
        echo "Thanh toán thất bại. Mã đơn hàng: " . $orderID;
    }
    file_put_contents('ipn_log.txt', print_r($inputData, true), FILE_APPEND);
} else {
    echo "Chữ ký không hợp lệ";
    file_put_contents('ipn_log.txt', "Invalid signature: " . print_r($inputData, true), FILE_APPEND);
}
?>
