@extends('layouts.app')
@section('content')
<div class="max-w-7xl mx-auto">
    <!-- Result content -->
    <form method="GET">
        <input type="text" name="query" placeholder="Cari hadis...">
        <button type="submit">Cari</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Kitab</th>
            <th>Perawi</th>
            <th>Isi Hadist</th>
        </tr>
        @foreach($hadis as $h)
        <tr>
            <td>{{ $h->id }}</td>
            <td>{{ $h->kitab }}</td>
            <td>{{ $h->perawi }}</td>
            <td>{{ $h->isi }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection