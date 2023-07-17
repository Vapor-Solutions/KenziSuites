<x-mail::message>
# Customer Contact Details.

{{-- The body of your message. --}}
<p>Name: {{ $emailData['name']}}</p>
<p>Email: {{ $emailData['email'] }}</p>
<p>Phone: {{ $emailData['phone'] }}</p>
<p>Message: {{ $emailData['body'] }}</p>

<x-mail::button :url="$url">
Dashboard
</x-mail::button>

Thanks,<br>
{{ $emailData['name']}}
</x-mail::message>
