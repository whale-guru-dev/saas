@component('mail::message')
# you received an invitation

We're just letting you know that your have been invited by {{ $invitedBy->email }} to crm system.

You can login here: {{ config('saas.application_url') }}

<div style="padding: 10px; border: 1px dashed #CCCCCC;">
    Login: {{ $account->email }} <br />
    Password: {{ $password }}
</div>
<br />
<br />
You can change your password after login.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
