@component('mail::message')
# Message from Contact Form @ {{ config('app.name') }}


*   **Name:** {{ $form['name'] }}
*   **Email:** {{ $form['email'] }}
*   **Phone:** {{ $form['phone'] }}
*   **Message**
{{ $form['message'] }}
@endcomponent
