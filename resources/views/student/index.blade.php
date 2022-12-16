<h3>Index Display</h3>
<table border='1'>
    <a href="{{ route('student.create') }}">Add</a>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Mobile No</th>
        <th>Action</th>
    </tr>
    @foreach($mydata as $userdata)
    <tr>
    <td>{{$userdata->id}}</td>
    
    <td>{{$userdata->name}}</td>
        <td>{{$userdata->mobileno}}</td>
        <td>
            <form method="post" action="{{ route('student.destroy', $userdata->id) }}">
                @method('DELETE')
                @csrf
                <input type="submit" value="Delete"/>
            </form>
            <a href="{{ route('student.edit', $userdata->id) }}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>