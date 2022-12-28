<div class="c-card">
    <div class="flex flex-col items-center">
        <h2 class="text-2xl">
            {{ $item->ScoreWij }} - {{ $item->ScoreZij }}
        </h2>
        <p class="mt-4">
            Datum: {{ $item->Datum }}
        </p>
        <p>
            Competitie: {{ $item->Competitie }}
        </p>
        <h2 class="text-xl">
            VS
        </h2>
    </div>
    <div class="flex justify-between">
        <div class="w-6/12">
            @if($item->SpelerWij1)
                <p>
                    {{ \App\Models\Lid::where('id', $item->SpelerWij1)->first()->Verkortenaam }}
                </p>
            @endif
            @if($item->SpelerWij2)
                <p>
                    {{ \App\Models\Lid::where('id', $item->SpelerWij2)->first()->Verkortenaam }}
                </p>
            @endif
            @if($item->SpelerWij3)
                <p>
                    {{ \App\Models\Lid::where('id', $item->SpelerWij3)->first()->Verkortenaam }}
                </p>
            @endif
        </div>
        <div class="w-6/12 flex flex-col items-end">
            @if($item->SpelerZij1)
                <p>
                    {{ \App\Models\Lid::where('id', $item->SpelerZij1)->first()->Verkortenaam }}
                </p>
            @endif
            @if($item->SpelerZij2)
                <p>
                    {{ \App\Models\Lid::where('id', $item->SpelerZij2)->first()->Verkortenaam }}
                </p>
            @endif
            @if($item->SpelerZij3)
                <p>
                    {{ \App\Models\Lid::where('id', $item->SpelerZij3)->first()->Verkortenaam }}
                </p>
            @endif
        </div>
    </div>
    <div class="flex justify-between mt-4">
        <a href="/wedstrijden/edit/{{ $item->id }}" class="text-blue-400">
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
                        Weet u zeker dat u de wedstrijd wilt verwijderen? Hiermee
                        wordt de
                        wedstrijd voorgoed verwijderd.
                    </p>
                    <div class="flex justify-center mt-4">
                        <a @click="this.$refs['popupref'].close()"
                           class="c-button c-button__gray cursor-pointer mr-4">
                            Annuleren
                        </a>
                        <form method="POST" action="/wedstrijd/delete">
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
