@component('mail::message')
    # Réinitialisation de mot de passe

    Bonjour {{ $user->name }},

    Votre mot de passe a été réinitialisé avec succès. Voici votre nouveau mot de passe temporaire :
    **{{ $newPassword }}**.

    Nous vous recommandons de changer votre mot de passe dès que possible après vous être connecté.

    @component('mail::button', ['url' => ''])
        Changer le mot de passe
    @endcomponent

    Merci,<br>
    {{ config('app.name') }}
@endcomponent
