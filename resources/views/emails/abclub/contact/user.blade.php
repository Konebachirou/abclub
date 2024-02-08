<x-mail::message>
    # <h3> African Business Club</h3>

    Mr/Mme {{ $contact->full_name }},
    nous avons bien reçu votre message et vous remercions de la confiance et l’intérêt que vous témoignez à
    African Business Club.
    Nous allons étudier votre requête "{{ $contact->subject }}" avec la plus grande attention et nous ne manquerons pas
    de vous repondre.
    Nous vous prions d’agréer, Mr/Mme {{ $contact->full_name }} nos salutations les meilleures.

   

    Cordialement,
    {{ config('app.name') }}
</x-mail::message>
