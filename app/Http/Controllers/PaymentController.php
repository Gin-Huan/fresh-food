<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\HistoryPayment;

class PaymentController extends Controller
{
    /**
     * Get List service cua partner.
     */
    private $vnp_TmnCode = "5ULV1749";
    private $vnp_HashSecret = "PDXMVEOBKGMXGQUUTKIYWJOMQPTCFVPZ";
    private $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    private $vnp_Returnurl = "/api/payment/response-payment";

    private $status_payment = [
        'pay' => [
            '00' => 'Giao dịch thành công',
            '01' => 'Giao dịch đã tồn tại',
            '02' => 'Merchant không hợp lệ (kiểm tra lại vnp_TmnCode)',
            '03' => 'Dữ liệu gửi sang không đúng định dạng',
            '04' => 'Khởi tạo GD không thành công do Website đang bị tạm khóa',
            '05' => 'Giao dịch không thành công do: Quý khách nhập sai mật khẩu quá số lần quy định. Xin quý khách vui lòng thực hiện lại giao dịch',
            '13' => 'Giao dịch không thành công do Quý khách nhập sai mật khẩu xác thực giao dịch (OTP). Xin quý khách vui lòng thực hiện lại giao dịch.',
            '07' => 'Giao dịch bị nghi ngờ là giao dịch gian lận',
            '09' => 'Giao dịch không thành công do: Thẻ/Tài khoản của khách hàng chưa đăng ký dịch vụ InternetBanking tại ngân hàng.',
            '10' => 'Giao dịch không thành công do: Khách hàng xác thực thông tin thẻ/tài khoản không đúng quá 3 lần',
            '11' => 'Giao dịch không thành công do: Đã hết hạn chờ thanh toán. Xin quý khách vui lòng thực hiện lại giao dịch.',
            '12' => 'Giao dịch không thành công do: Thẻ/Tài khoản của khách hàng bị khóa.',
            '51' => 'Giao dịch không thành công do: Tài khoản của quý khách không đủ số dư để thực hiện giao dịch.',
            '65' => 'Giao dịch không thành công do: Tài khoản của Quý khách đã vượt quá hạn mức giao dịch trong ngày.',
            '08' => 'Giao dịch không thành công do: Hệ thống Ngân hàng đang bảo trì. Xin quý khách tạm thời không thực hiện giao dịch bằng thẻ/tài khoản của Ngân hàng này.',
            '99' => 'Lỗi không xác định',
            '24' => 'Huỷ giao dịch'
        ]
    ];

    /**
     * Tạo request payment vnpay.
     *
     * @bodyParam proposale_id int required id của proposale theo đối tương user.Example: 8
     * @bodyParam user_id int required id của user .Example: 20
     * @bodyParam amount int required số tiền cần thanh toán. Example: 20000
     * @bodyParam description string required nội dung hay mô tả thanh toán.Example: thanh toán tiệc bàn
     */

    public function create_url_payment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required',
            'amount' => 'required',
            // 'description' => 'required'
        ]);

        if ($validator->fails()) {
            return Helper::sendResponse(false, 'Validator error', 400, $validator->errors()->first());
        }
        $user = null;
        $request->amount = Helper::CurrencyIntToString($request->amount);
        $order = Orders::find($request->order_id);
        $user = User::find($order->customer_id);
        $total_price = (int) $request->amount;
        $list_price = HistoryPayment::where('order_id', $order->id)
            ->where('user_id', $order->customer_id)
            ->where('status', '00')->get();
        foreach ($list_price as $key => $value) {
            $total_price += (int) $value->price;
        }

        $count = HistoryPayment::where('order_id', $order->id)->get()->count();
        $SKU = $user->id . "-" . $order->id . "-" . $count;
        $vnp_TxnRef = $SKU; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = $request->description ? $request->description : "Thanh toán";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $request->amount * 100;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $this->vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => route('payment.payment_from_vnpay'),
            "vnp_TxnRef" => $vnp_TxnRef,
        );
        // dd($inputData);

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $this->vnp_Url . "?" . $query;
        if (isset($this->vnp_HashSecret)) {
            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $this->vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        if ($request->device == 'web') {
            return redirect($vnp_Url);
        }
        // Mail::to($user->email)->send(new SendLinkPayment($vnp_Url));
        return Helper::sendResponse(true, $vnp_Url, 200, 'Success');
    }


    private function update_pay_for_customer($inputData)
    {
        $refId = $inputData['vnp_TxnRef'];
        $array_id = explode("-", $refId);
        // HistoryRevenueForCustomer
        $total_price = 0;
        $Order = Order::find($array_id[1]);
        if (!$Order) {
            return Helper::sendResponse(false, 'Đơn hàng không tồn tại', 404, 'Đơn hàng không tồn tại');
        }
        $new_history = new HistoryPayment();
        $new_history->user_id = $array_id[0];
        $new_history->order_id = $array_id[1];
        $new_history->price = (int) $inputData['vnp_Amount'];
        $new_history->price = (int) $new_history->price / 100;
        $new_history->status = $inputData['vnp_ResponseCode'];
        $new_history->description = $inputData['vnp_OrderInfo'];

        unset($inputData['vnp_Amount']);
        unset($inputData['vnp_OrderInfo']);
        unset($inputData['vnp_TxnRef']);
        $new_history->field_more = json_encode($inputData);
        $new_history->save();

        $Customer = User::find($array_id[0]);
        $Customer->customer()->update(['point' => (int) $new_history->price / 100000]);
        $list_price = HistoryPayment::where('user_id', $Customer->id)
            ->where('order_id', $Order->id)
            ->where('status', '00')->get();
        foreach ($list_price as $key => $value) {
            $total_price += (int) $value->price;
        }

        if ($total_price >= (int) $Order->price) {
            $Order->is_pay = 1;
            $Order->save();
        }
    }


    /**
     * Response payment from vnpay
     *
     */
    public function payment_from_vnpay(Request $request)
    {
        $inputData = array();
        $data = $request->all();
        foreach ($data as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }

        $vnp_SecureHash = $inputData['vnp_SecureHash'];
        unset($inputData['vnp_SecureHashType']);
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . $key . "=" . $value;
            } else {
                $hashData = $hashData . $key . "=" . $value;
                $i = 1;
            }
        }
        $secureHash = hash('sha256', $this->vnp_HashSecret . $hashData);
        $refId = $inputData['vnp_TxnRef'];
        $array_id = explode("-", $refId);
        DB::beginTransaction();
        try {
            //code...
            $array_id = explode("-", $refId);
            $total_price = 0;

            $order = Order::find($array_id[1]);
            if (!$order) {
                return Helper::sendResponse(false, 'Not found', 404, 'Đơn hàng không tồn tại');
            }
            $this->update_pay_for_customer($inputData);

            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            Helper::write_log_error($th, "Mobile", $request->getRequestUri());
            return Helper::sendResponse(false, $th->getMessage(), 500, $th->getMessage());
        }
        if ($inputData['vnp_ResponseCode'] == '00') {
            $message = [
                'status' => 'success',
                'text_status' => $this->status_payment['pay'][$inputData['vnp_ResponseCode']]
            ];
        } else {
            $message = [
                'status' => 'error',
                'text_status' => $this->status_payment['pay'][$inputData['vnp_ResponseCode']]
            ];
        }
        return redirect(route('order.detail', ['id' => $array_id[1]]) . "?pp=payment")->with($message['status'], $message['text_status']);
        return Helper::sendResponse(
            true,
            $this->status_payment['pay'][$inputData['vnp_ResponseCode']],
            200,
            $this->status_payment['pay'][$inputData['vnp_ResponseCode']]
        );
    }


    public function detail_history_payment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required',
            'user_id' => 'required'
        ]);

        if ($validator->fails()) {
            return Helper::sendResponse(false, 'Validator error', 400, $validator->errors()->first());
        }

        $data = HistoryPayment::where('order_id', $request->order_id)
            ->where('user_id', $request->user_id)
            ->orderBy('id', 'desc')
            ->get();
        return Helper::sendResponsePaginating(true, $data, 200, 'success');
    }
}