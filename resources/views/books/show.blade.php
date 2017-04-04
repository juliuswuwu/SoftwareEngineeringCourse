@extends('layout.masterTemplate')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../resources/views/books/showbook.css" />

</head>
<title>{{$books->title}}</title>
<body>
<table  class="table-fill">
    <thead>
    <tr>
        <th class="text-left">
            Tags
        </th>
        <th class="text-left">
            Values
        </th>
    </tr>
    </thead>
    @foreach($books as $key=>$value)
        <tr>
            <td class="text-left">
                <strong>{{$key}}:</strong>
            </td>
            <td class="text-left">
                {{$value}}
            </td>

        </tr>
    @endforeach
</table>
</body>

</html>
@endsection