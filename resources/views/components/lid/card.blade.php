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
        <a href="/leden/edit/{{ $item->id }}" class="text-blue-400">
            Bewerken
        </a>
        <modal
            :width="'8/12'"
            ref="modal{{ $item->id }}"
        >
            <template #openpopup>
                <a class="text-red-400 cursor-pointer" @click="this.$refs['modal{{ $item->id }}'].openPopup()">
                    Verwijderen
                </a>
            </template>
            <template #popup>
                <div class="text-center">
                    <p class="font-bold">
                        Weet u zeker dat u {{ $item->Verkortenaam }} wilt verwijderen? Hiermee
                        wordt {{ $item->Verkortenaam }} voorgoed verwijderd.
                    </p>
                    <div class="flex justify-center mt-4">
                        <a @click="this.$refs['popupref'].close()"
                           class="c-button c-button__gray cursor-pointer mr-4">
                            Annuleren
                        </a>
                        <form method="POST" action="/lid/delete">
                            @csrf
                            <input type="hidden" name="id"
                                   value="{{ $item->id }}"/>
                            <input type="submit" value="Verwijderen"
                                   class="c-button c-button__red cursor-pointer"/>
                        </form>
                    </div>
                </div>
            </template>
        </modal>
    </div>
</div>
