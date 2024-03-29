<div class="hidden md:block c-card">
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
                        <a @click="this.$refs['modal{{ $item->id }}'].close()"
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
<div class="block md:hidden border-t">
    <p class="text-center">
        {{ $item->Datum }}
    </p>
    <div class="flex justify-between mt-2">
        <div class="flex flex-col w-8/12">
            <div class="flex space-x-4">
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
            <div class="flex space-x-4">
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
        <div class="flex flex-col w-1/12">
            <p class="text-center">
                {{ $item->ScoreWij }}
            </p>
            <p class="text-center">
                {{ $item->ScoreZij }}
            </p>
        </div>
    </div>
    <div class="flex justify-between">
        <a href="/wedstrijden/edit/{{ $item->id }}" class="text-blue-400">
            Bewerken
        </a>
        <modal
            :width="'8/12'"
            ref="modalmobile{{ $item->id }}"
        >
            <template #openpopup>
                <a class="text-red-400 cursor-pointer" @click="this.$refs['modalmobile{{ $item->id }}'].openPopup()">
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
                        <a @click="this.$refs['modalmobile{{ $item->id }}'].close()"
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
