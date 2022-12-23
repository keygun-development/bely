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
            <p>
                {{ \App\Models\Lid::where('id', $item->SpelerWij1)->first()->Verkortenaam }}
            </p>
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
            <p>
                {{ \App\Models\Lid::where('id', $item->SpelerZij1)->first()->Verkortenaam }}
            </p>
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
        <a class="text-blue-400">
            Bewerken
        </a>
        <a class="text-blue-400">
            Verwijderen
        </a>
    </div>
</div>
