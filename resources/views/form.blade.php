<form method="post" action="{{URL::to('/addprocess')}}">
    @csrf
    Name : <input type="text" name="txt1" />
    Mobile : <input type="text" name="txt2" />
    <input type="submit" />
</form>