<x-mail::message>
    # Introduction

    The body of your message.

    <x-mail::button :url="''">
        Button Text{{ $body . ' ' . $subject }}
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>