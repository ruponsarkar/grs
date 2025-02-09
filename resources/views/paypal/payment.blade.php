@extends('layout')
@section('title', 'Payment')
@section('content')

    <div class="container py-3 ">

        <div class="row">
            <div class="col-md-6">
                <div class="card p-3">

                    <h3>
                        Foreign Authors
                    </h3>
                    <p>
                        Foreign authors can conveniently pay their processing fees online in USD using methods such as
                        PayPal,
                        Credit Card, or Debit Card.
                    </p>
                    <div>
                        <select name="" id="selectedUSD" onchange="changeUSD()" class="form-control">
                            <option value="">-select-</option>
                            <option value="20">$20 USD</option>
                            <option value="30">$30 USD</option>
                            <option value="50">$50 USD</option>
                            <option value="75">$75 USD</option>
                            <option value="100">$100 USD</option>
                            <option value="150">$150 USD</option>
                            <option value="200">$200 USD</option>
                            <option value="1">$1 USD</option>
                        </select>

                        <div class="py-2">
                            <button class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Pay
                                Now</button>
                        </div>

                        <div>
                            <strong>
                                To make a payment, please follow these steps:
                            </strong>

                            <div>

                                1. Select the required Payment Option and Fee.
                            </div>
                            <div>

                                2. Click "Pay now" and proceed to the required payment option.
                            </div>
                            <div>

                                3. Check your payable amount and taxes
                            </div>
                            <div>

                                4. Click on PayPal Button and make payment. If you're using a Credit Card or Debit Card
                                click on "Debit or Credit Card"
                            </div>
                            <div>
                                This process will guide you through the payment and checkout procedure for your transaction.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card p-3">
                    <h3>

                        Payment: (Bank Details) -
                    </h3>

                    <div>

                        Bank Name: - <strong> State bank of India</strong>
                    </div>
                    <div>

                        Account number: - <strong> 43358729141</strong>
                    </div>

                    <div>

                        IFSC Code: - <strong> SBIN0002065</strong>
                    </div>
                    {{-- <div>

                        Swift code:-<strong> PUNBINBBMGI</strong>
                    </div> --}}
                    <div>

                        Holder Name:- <strong> Mr. Suhel Alom Laskar</strong>
                    </div>


                </div>
            </div>


            <div class="col-md-6">
                <div class="card p-3">

                    <h3>
                        Indian Authors
                    </h3>
                    <p>
                        Pay online in INR (PayUmoney, UPI, GPay)
                    </p>
                    <div>
                        <img src="assets/QR Code - IRASS Publisher.png" class="col-10" alt="">
                    </div>
                </div>
            </div>


            {{-- modal  --}}

            <!-- Button trigger modal -->
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
            </button> --}}

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 9999999;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Paymet details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <div class="row pb-5">
                                    <div class="col-6"><strong> Proccessing Fees:</strong></div>
                                    <div class="col-6 text-end px-3"><strong> $<span id="proccessingFees"></span> USD
                                        </strong></div>
                                    <div class="col-6"><strong> Tax:</strong></div>
                                    <div class="col-6 text-end px-3"><strong> $<span id="tax"></span> USD </strong>
                                    </div>
                                    <hr class="m-0 p-0">
                                    <div class="col-6"><strong> Total:</strong></div>
                                    <div class="col-6 text-end px-3"><strong> $<span id="total"></span> USD </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <form action="paypal/checkout"> --}}

                            <input type="hidden" value="" name="amount" id="amount">

                            {{-- <div class="modal-footer"> --}}
                                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                {{-- <button type="submit" class="btn btn-primary">Pay Now</button> --}}
                                <div class="m-4 p-3">
                                    <div id="paypal-button-container"></div>
                                </div>
                            {{-- </div> --}}


                        {{-- </form> --}}
                    </div>
                </div>
            </div>


            {{-- modal  --}}

        </div>
    </div>



     {{-- paypal codes  --}}
    <script src="https://www.paypal.com/sdk/js?client-id=ARUuCCL-G9O83pUyjFDasT82KxeK9GPHiwrDHTSgw3wVE9K7VsH0zwkcrNhOQNngSZDoo95re-nGe0Kq&currency=USD"></script>
    <script>
        // Render PayPal buttons
        paypal.Buttons({
            createOrder: function (data, actions) {
                // Get the amount dynamically from the input field
                const amount = document.getElementById('amount').value;
                console.log("amount ====>>>>", amount);
                // Validate the input amount
                if (!amount || amount <= 0) {
                    alert('Please enter a valid amount.');
                    return;
                }

                // Create the order with the dynamic amount
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: amount
                        }
                    }]
                });
            },
            onApprove: function (data, actions) {
                // Capture the payment
                return actions.order.capture().then(function (details) {
                    alert('Transaction completed by ' + details.payer.name.given_name);

                    // Optionally, send details to your server for processing
                    fetch('/paypal/capture', {
                        method: 'post',
                        headers: {
                            'content-type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            orderID: data.orderID
                        })
                    }).then(function (response) {
                        return response.json();
                    }).then(function (data) {
                        if (data.success) {
                        // Redirect to the success page
                        window.location.href = '/paypal/success';
                    } else {
                        // Redirect to the failure page
                        window.location.href = '/paypal/cancel';
                    }
                        console.log(data);
                    });
                });
            },
            onCancel: function (data) {
                alert('Payment canceled!');
            },
            onError: function (err) {
                console.log('Error==>>:', err);
                alert('An error occurred during the transaction.'+ err);
            }
        }).render('#paypal-button-container');
    </script>

    {{-- paypal codes  --}}




    <script>
        function changeUSD() {
            // console.log("==>>here");

            const taxes = [{
                    fees: 20,
                    tax: 2
                },
                {
                    fees: 30,
                    tax: 3
                },
                {
                    fees: 50,
                    tax: 5
                },
                {
                    fees: 75,
                    tax: 7.5
                },
                {
                    fees: 100,
                    tax: 10
                },
                {
                    fees: 150,
                    tax: 15
                },
                {
                    fees: 200,
                    tax: 20
                },
            ]


            const fees = document.getElementById('selectedUSD').value;
            const inputField = document.getElementById('amount');

            console.log("value => ", fees);
            document.getElementById('proccessingFees').innerHTML = fees;

            const taxEntry = taxes.find((entry) => entry.fees === parseFloat(fees));
            const taxAmount = taxEntry ? taxEntry.tax : 0;

            console.log("taxAmount ", taxAmount);

            document.getElementById('tax').innerHTML = taxAmount;
            document.getElementById('total').innerHTML = parseFloat(fees) + parseFloat(taxAmount);
            inputField.value = parseFloat(fees) + parseFloat(taxAmount);

        }
    </script>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>



@endsection
