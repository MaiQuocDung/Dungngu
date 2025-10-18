<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VNPay Payment Integration</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            margin-top: 0;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group input[type="hidden"] {
            display: none;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Thanh Toán VNPay</h2>
        <form id="paymentForm" action="process_payment.php" method="post">
            <div class="form-group">
                <label for="order_type">Loại đơn hàng</label>
                <input type="text" id="order_type" name="order_type" value="billpayment">
            </div>
            <div class="form-group">
                <label for="order_id">Mã đơn hàng</label>
                <input type="text" id="order_id" name="order_id" value="123456">
            </div>
            <div class="form-group">
                <label for="amount">Số tiền</label>
                <input type="text" id="amount" name="amount" value="100000">
            </div>
            <div class="form-group">
                <label for="order_desc">Mô tả đơn hàng</label>
                <input type="text" id="order_desc" name="order_desc" value="Thanh toán hóa đơn">
            </div>
            <div class="form-group">
                <label for="bank_code">Mã ngân hàng</label>
                <input type="text" id="bank_code" name="bank_code" value="NCB">
            </div>
            <div class="form-group">
                <label for="language">Ngôn ngữ</label>
                <input type="text" id="language" name="language" value="vn">
            </div>
            <div class="form-group">
                <label for="txt_billing_fullname">Họ và tên</label>
                <input type="text" id="txt_billing_fullname" name="txt_billing_fullname" value="Nguyen Van A">
            </div>
            <div class="form-group">
                <label for="txt_billing_mobile">Số điện thoại</label>
                <input type="text" id="txt_billing_mobile" name="txt_billing_mobile" value="0949671111">
            </div>
            <div class="form-group">
                <label for="txt_billing_email">Email</label>
                <input type="text" id="txt_billing_email" name="txt_billing_email" value="p0BzK@example.com">
            </div>
            <div class="form-group">
                <label for="txt_billing_address">Địa chỉ</label>
                <input type="text" id="txt_billing_address" name="txt_billing_address" value="Ha Noi">
            </div>
            <input type="hidden" name="redirect" value="1">
            <div class="form-group">
                <button type="submit">Thanh Toán</button>
            </div>
        </form>
    </div>

</body>
</html>
