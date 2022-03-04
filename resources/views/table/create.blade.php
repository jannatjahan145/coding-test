@php
$branch1 = [
    [
    'branch' => 'branch 1',
    'staff' => ['s 1','s 2'],
    ],
    [
    'branch' => 'branch 2',
    'staff' => ['s 3','s 4','s 5'],
    ],
    [
    'branch' => 'branch 3',
    'staff' => ['s 6','s 7','s 8','s 9'],
    ],
];

$branch2 = [
    [
    'branch' => 'branch 4',
    'staff' => ['s 10','s 11','s 12','s 13','s 14'],
    ],
    [
    'branch' => 'branch 5',
    'staff' => ['s 15','s 16','s 17','s 18','s 19','s 20'],
    ],
];

$rows = [

    [
        'company'   => 'comapny 1',
        'branch' => array($branch1),
    ],
    [
        'company'   => 'company 2',
        'branch' => array($branch2),
    ],
];
$i =1 ;
@endphp


<table border="1" class="cm table">
    <tr class="head">
        <th>Comapany's Name</th>
        <th>Branch's Name</th>
        <th>Staff's Name</th>
    </tr>
    <tbody align="center">
        @foreach($rows as $key => $row)
        <tr>
            <td class="company"> {{$row['company']}}</td>
            <td class="branch">
                @foreach($row['branch'] as $sKey => $branch)
                @foreach($branch as $Key => $b)
                <table border="1" class="branch{{$i++}}">
                    <tr  width="100%">
                        <td style="border-top: none;padding: 0.75rem 0;">{{ $b['branch'] }}</td>
                    </tr>
                </table>
                @endforeach
                @endforeach
            </td>
            <td class="staff">
            @foreach($row['branch'] as $sKey => $branch)
            @foreach($branch as $v => $fs)
            @foreach($fs['staff'] as $fr)
                <table width="100%" border="1" class="staff{{$v}}">
                   <tr>
                       <td style="border-top: none;padding: 0.75rem 0;">{{ $fr }}</td>
                   </tr>
                </table>
        @endforeach
        @endforeach
        @endforeach
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

<div style="height: 300px;"></div>