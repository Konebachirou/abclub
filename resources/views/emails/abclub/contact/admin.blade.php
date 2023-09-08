<x-mail::message>
    # <h3> African Business Club</h3><br>

    Nom et Prenom: {{ $contact->full_name }}<br>
    E-mail: {{ $contact->email }}<br>
    Sujet: {{ $contact->subject }}<br><br>
    Message:<br>
    {{ $contact->message }}

    <x-mail::button :url="$url" color="success">
        Button Text
    </x-mail::button>

    Cordialement,<br>
    {{ config('app.name') }}
</x-mail::message>
