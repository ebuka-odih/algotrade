@component('mail::message')
<style>
    table, th, td {
        /*border: 1px solid black;*/
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
        text-align: left;
    }
</style>
## Hello {{ $data['deposit']->user->name  }}

<p>Your deposit order has been placed and is now being waiting for payment. Your deposit details are shown below for your reference:
</p>
<table class="table table-striped" >
    <tr>
        <th>Payment Reference:</th>
        <td>{{ $data['deposit']->transId() }}</td>
    </tr>
    <tr>
        <th>Payment Amount:</th>
        <td>@convert($data['deposit']->showBTCRate()) USD</td>
    </tr>
    <tr>
        <th>Payment Method:</th>
        <td>Crypto Deposit</td>
    </tr>
    <tr>
        <th>Amount To Credit:</th>
        <td>@convert($data['deposit']->amount) USD</td>
    </tr>
</table>
<p>If you have not made the payment yet, please send the amount of @convert($data['deposit']->amount) USD to the wallet address below:</p>

<p>{{ $data['crypto_wallet']->name }} Address: {{ $data['crypto_wallet']->value  }}</p>

<h4>Scan the QRcode below for wallet address</h4>
<div>
    {!! QrCode::size(200)->generate($data['crypto_wallet']->value); !!}

</div>
<br>
<p>Your funds will add into your account as soon as we have confirmed the payment.</p>
<p>Feel free to contact us if you have any questions.</p>
@endcomponent
