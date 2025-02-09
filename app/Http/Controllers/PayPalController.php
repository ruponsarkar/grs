<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use DB;

class PayPalController extends Controller
{

    public function payment(){
        return view('paypal.payment');
    }



    // public function checkout(Request $request)
    // {
    //     $amount = $request->query('amount');
    //     // return $amount;
    //     $provider = new PayPalClient;
    //     $provider->setApiCredentials(config('paypal'));
    //     $paypalToken = $provider->getAccessToken();

    //     $response = $provider->createOrder([
    //         "intent" => "CAPTURE",
    //         "purchase_units" => [
    //             [
    //                 "amount" => [
    //                     "currency_code" => "USD",
    //                     "value" => $amount
    //                 ]
    //             ]
    //         ]
    //     ]);

    //     return $response;

    //     if (isset($response['id'])) {
    //         foreach ($response['links'] as $link) {
    //             if ($link['rel'] === 'approve') {
    //                 return redirect()->away($link['href']);
    //             }
    //         }
    //     }

    //     return redirect()->route('paypal.cancel');
    // }



    // use Srmklive\PayPal\Services\PayPal as PayPalClient;

public function checkout(Request $request)
{
    // Get the amount from the query string
    $amount = $request->query('amount');

    // Validate the amount
    if (!$amount || !is_numeric($amount)) {
        return redirect()->route('paypal.cancel')->with('error', 'Invalid payment amount.');
    }

    // Initialize PayPal client
    $provider = new PayPalClient;
    $provider->setApiCredentials(config('paypal'));

    try {
        // Get PayPal access token
        $paypalToken = $provider->getAccessToken();

        // Create a PayPal order
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $amount
                    ]
                ]
            ],
            "application_context" => [
                "cancel_url" => route('paypal.cancel'), // Cancel route
                "return_url" => route('paypal.success') // Success route
            ]
        ]);

        // return $response->error;

        // Check if the order was successfully created
        if (isset($response['id']) && isset($response['links'])) {
            // Find the approval URL from the links array
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']); // Redirect user to PayPal
                }
            }
        }

        // If no approval URL found, return an error
        return response()->json([
            'success' => false,
            'type' => '1' . ' Unable to create PayPal order',
            'message' => $response,
        ], 400); // 400 Bad Request
        // return redirect()->route('paypal.cancel')->with('error', 'Unable to create PayPal order.'.$response);
    } catch (\Exception $e) {
        // Handle errors
        // return redirect()->route('paypal.cancel')->with('error', 'Something went wrong. Please try again.'.$e);
        return response()->json([
            'success' => false,
            'type' => '2' . ' Something went wrong. Please try again',
            'message' => $e->getMessage(),
        ], 400); // 400 Bad Request
    }
}














    public function success(Request $request)
    {
        return view('paypal.success');
    }

    public function cancel()
    {
        return view('paypal.cancel');
    }


    public function capture(Request $request)
{
    $provider = new \Srmklive\PayPal\Services\PayPal;
    $provider->setApiCredentials(config('paypal'));
    $paypalToken = $provider->getAccessToken();

    // Retrieve order details to check the status
    $order = $provider->showOrderDetails($request->orderID);

    if (isset($order['status']) && $order['status'] === 'COMPLETED') {
        DB::table('payments')->insert([
            'order_id' => $order['id'],
            'data' => json_encode($order),
            'message' => 'Order already captured.',
            'status' => 'COMPLETED',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Order already captured.',
            'data' => $order,
        ]);
    }



    



    // Attempt to capture the order if it's not completed
    $response = $provider->capturePaymentOrder($request->orderID);

    if (isset($response['status']) && $response['status'] === 'COMPLETED') {
        DB::table('payments')->insert([
            'order_id' => $response['id'],
            'data' => json_encode($response),
            'message' => 'Payment captured successfully.',
            'status' => 'COMPLETED',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Payment captured successfully.',
            'data' => $response,
        ]);
    }



    DB::table('payments')->insert([
        'order_id' => $order['id'] ?? null,
        'data' => json_encode($order),
        'message' => 'Payment capture failed.',
        'status' => 'FAILED',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return response()->json([
        'success' => false,
        'message' => 'Payment capture failed.',
        'data' => $response,
    ], 400);
}


    // public function capture(Request $request)
    // {
    //     $provider = new PayPalClient;
    //     $provider->setApiCredentials(config('paypal'));
    //     $paypalToken = $provider->getAccessToken();
        
    //     $response = $provider->capturePaymentOrder($request->orderID);
    //     return $response;

    //     if (isset($response['status']) && $response['status'] === 'COMPLETED') {
    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Payment captured successfully.',
    //             'data' => $response,
    //         ]);
    //     }

    //     return response()->json([
    //         'success' => false,
    //         'message' => 'Payment failed.',
    //         'data' => $response,
    //     ], 400);
    // }
}
