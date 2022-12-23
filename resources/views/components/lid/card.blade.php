<div class="c-card">
    <div class="flex justify-between">
        <div class="w-full space-y-4">
            <p>
                <b>Naam: </b> {{ $item->Voornaam }} {{ $item->Achternaam }}
            </p>
            <p>
                <b>Geboortedatum: </b> {{ $item->Gebdatum }}
            </p>
            <p>
                <b>Sterkte: </b> {{ $item->Sterkte }}
            </p>
            <p>
                <b>Verkortenaam: </b> {{ $item->Verkortenaam }}
            </p>
        </div>
    </div>
    <div class="flex justify-between mt-4">
        <a class="text-blue-400">
            Bewerken
        </a>
        <a class="text-blue-400">
            Verwijderen
        </a>
    </div>
</div>
