<?php

namespace Multiversum\Http\Controllers;

use Illuminate\Http\Request;
use Multiversum\Http\Requests;
use Paypal;
use Redirect;

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

    public function getCheckout()
    {
        $payer = Paypal::Payer();
        $payer->setPaymentMethod('paypal');

        $amount = Paypal:: Amount();
        $amount->setCurrency('EUR');
        $amount->setTotal(42); // This is the simple way,
        // you can alternatively describe everything in the order separately;
        // Reference the PayPal PHP REST SDK for details.

        $transaction = Paypal::Transaction();
        $transaction->setAmount($amount);
        $transaction->setDescription('What are you selling?');

        $redirectUrls = Paypal::RedirectUrls();
        //$redirectUrls->setReturnUrl(action('PaymentsController@getDone'));
        //$redirectUrls->setCancelUrl(action('PaymentsController@getCancel'));

        $payment = Paypal::Payment();
        $payment->setIntent('sale');
        $payment->setPayer($payer);
        $payment->setRedirectUrls($redirectUrls);
        $payment->setTransactions(array($transaction));

        $response = $payment->create($this->apiContext);
        $redirectUrl = $response->links[1]->href;

        return Redirect::to($redirectUrl);
    }

    public function getDone(Request $request)
    {
        $id = $request->get('paymentId');
        $token = $request->get('token');
        $payer_id = $request->get('PayerID');

        $payment = Paypal::getById($id, $this->apiContext);

        $paymentExecution = Paypal::PaymentExecution();

        $paymentExecution->setPayerId($payer_id);
        $executePayment = $payment->execute($paymentExecution, $this->apiContext);

        // Clear the shopping cart, write to database, send notifications, etc.

        // Thank the user for the purchase
        return view('checkout.done');
    }

    public function getCancel()
    {
        // Curse and humiliate the user for cancelling this most sacred payment (yours)
        return view('checkout.cancel');
    }
}
