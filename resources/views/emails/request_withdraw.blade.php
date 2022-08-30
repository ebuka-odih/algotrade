@component('mail::message')
# Withdrawal Request[Pin]

Dear {{ $data['user']->name }}

<br>

<p style="font-size: 18px">A payout request of $@convert($data['withdraw']->amount) has been made to your account and your
    payout/transfer pin is {{ $data['otpcode'] }}
</p>

<br>
<p style="font-size: 18px">If you did not make this payout request please contact Account Support immediately
    to verify and secure your account
</p>


<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
