<x-mail::message>
    <h5> Cher Responsable de pôle,</h5><br>
    J'espère que ce message vous trouve en pleine forme. Je suis ravi(e) de vous informer que nous avons un nouveau membre qui vient de rejoindre notre communauté. <br>
    {{ $user->name }} est maintenant officiellement Adherent de notre association. <br>

    En tant que responsable, nous avons prions de prendre les mesures nécessaires pour créer les accès requis afin que {{ $user->name }} puisse pleinement profiter de notre plateforme. <br>

    Nous pensons que l'arrivée de {{ $user->name }} enrichira notre communauté, et nous encourageons tous les membres à lui réserver un accueil chaleureux. <br>

    Cordialement,<br>
    {{ config('app.name') }}
</x-mail::message>
