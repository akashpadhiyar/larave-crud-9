<h3>Display</h3>
<table border='1'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach($mydata as $userdata)
        <tr>
            <td>{{$userdata->name}}</td>
            <td>{{$userdata->mobileno}}</td>
            <td>
                <a href="/delete/{{$userdata->id}}">Delete</a> |
                 <a href="/edit/{{$userdata->id}}">Edit</a>
            </td>
        </tr>
    @endforeach
</table>