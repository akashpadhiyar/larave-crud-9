<form method="post" action="{{ route('student.update',$fetchdata->id) }}">
    @method('PATCH')
    @csrf
    <input type="hidden" value="{{$fetchdata->id}}" name="txt0" />
    Name : <input type="text" value="{{$fetchdata->name}}" name="txt1" />
    <br />
    Mobile : <input type="text" value="{{$fetchdata->mobileno}}" name="txt2" />
    <br />
    <input type="submit" />
</form>