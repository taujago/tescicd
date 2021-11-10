<h1>Hello</h1>
<span>{{ $nama }}</span>

<table>
    @foreach($record as $row)
    <tr>
        <td>{{ $row->nama_kecamatan }}</td>
    </tr>
    @endforeach
</table>