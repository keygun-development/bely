<table class="c-table__scroll-wrapper bg-white">
    <tr class="border-b">
        <th class="col-1 p-2 md:p-4" colspan="2">
            Naam
        </th>
        <th class="p-2 md:p-4">
            G
        </th>
        <th class="p-2 md:p-4">
            W
        </th>
        <th class="p-2 md:p-4">
            V
        </th>
        <th class="p-2 md:p-4">
            SV
        </th>
        <th class="p-2 md:p-4">
            ST
        </th>
        <th class="p-2 md:p-4">
            DS
        </th>
        <th class="p-2 md:p-4">
            WP
        </th>
    </tr>
    @foreach($spelers as $key => $speler)
        <tr class="border-t">
            <td class="p-2 md:p-4">
                {{ $key+1 }}
            </td>
            <td class="p-2 md:p-4 text-left">
                {{ $speler->name }}
            </td>
            <td class="p-2 md:p-4">
                {{ $speler->gespeeld }}
            </td>
            <td class="p-2 md:p-4">
                {{ $speler->win }}
            </td>
            <td class="p-2 md:p-4">
                {{ $speler->verlies }}
            </td>
            <td class="p-2 md:p-4">
                {{ $speler->scorevoor }}
            </td>
            <td class="p-2 md:p-4">
                {{ $speler->scoretegen }}
            </td>
            <td class="p-2 md:p-4">
                {{ $speler->doelsaldo }}
            </td>
            <td class="p-2 md:p-4">
                {{ round($speler->winstpercentage) }}%
            </td>
        </tr>
    @endforeach
</table>
