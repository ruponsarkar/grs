<h1>Payment Canceled</h1>
<a href="/">Go Home</a>

@if (session()->has('error'))
    <div class="alert alert-success text-center">
        {{ session()->get('error') }}
    </div>
@endif
