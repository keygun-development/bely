<table class="c-table__scroll-wrapper bg-white">
    <tr class="border-b">
        <th class="col-1" colspan="2">
            Naam
        </th>
        <th>
            G
        </th>
        <th>
            W
        </th>
        <th>
            V
        </th>
        <th>
            SV
        </th>
        <th>
            ST
        </th>
        <th>
            DS
        </th>
        <th>
            WP
        </th>
    </tr>
    @foreach($spelers as $key => $speler)
        <tr class="border-t">
            <td>
                {{ $key+1 }}
            </td>
            <td onclick="window.location='/leden/{{ $speler->userid }}'" class="cursor-pointer hover:underline">
                {{ $speler->name }}
            </td>
            <td>
                {{ $speler->gespeeld }}
            </td>
            <td>
                {{ $speler->win }}
            </td>
            <td>
                {{ $speler->verlies }}
            </td>
            <td>
                {{ $speler->scorevoor }}
            </td>
            <td>
                {{ $speler->scoretegen }}
            </td>
            <td>
                {{ $speler->doelsaldo }}
            </td>
            <td>
                {{ $speler->winstpercentage }}%
            </td>
        </tr>
    @endforeach
</table>
