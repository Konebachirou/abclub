<x-mail::message>
    <h5> Bienvenue {{ $user->name }}</h5><br>
    Au nom de tous les membres de l'African Business Club, je vous souhaite la bienvenue.
    Nous vous communiquons vos identifiants pour vous connecter sur votre espace administrateur.<br>
    -Identifiant: {{ $user->email }}<br>
    -Mot de Passe : {{ $password }}<br>
    Connectez vous à votre espace administrateur via ce lien et changez votre mot de passe.
    <x-mail::button :url="$url" color="success">
        Cliquez-ici
    </x-mail::button>
    Cordialement,<br>
    {{ config('app.name') }}
</x-mail::message>
