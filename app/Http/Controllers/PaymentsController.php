<?php

namespace Multiversum\Http\Controllers;

use Illuminate\Http\Request;
use Multiversum\Http\Requests;
use Paypal;

class PaymentsController extends Controller
{
    protected $apiContext;

    public function __construct()
    {
        $this->apiContext = Paypal::ApiContext(
            config('services.paypal.client_id'),
            config('services.paypal.secret')
        );

        $this->apiContext->setConfig([
            'mode' => 'sandbox',
            'service.EndPoint' => 'https://api.sandbox.paypal.com',
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path('logs/paypal.log'),
            'log.LogLevel' => 'FINE'
        ]);
    }

    public function listPayments()
    {
        $payments = Paypal::getAll(['count' => 1, 'start_index' => 0], $this->apiContext);

        return $payments;
    }
}
