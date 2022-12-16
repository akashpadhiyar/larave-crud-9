<form method="post" action="{{ route('student.store') }}">
    @csrf
    Name : <input type="text" name="txt1" />
    Mobile : <input type="text" name="txt2" />
    <input type="submit" />
</form>