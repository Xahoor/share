<h1>Table</h1>

<table border="2">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Photo</th>
    </tr>

    @foreach ($collection as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['first_name']}}</td>
            <td><img src="{{$item['avatar']}}" alt=""></td>
        </tr>
    @endforeach
</table>