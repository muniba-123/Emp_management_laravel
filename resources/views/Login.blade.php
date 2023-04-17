<form method="POST" action="{{route('login.submit')}}">
    @csrf
    <input name="email"/>
    @error("email")
    <span>{{$message}}</span>
    @enderror
    <input type="password" name="password"/>
    @error("password")
    <span>{{$message}}</span>
    @enderror
    <button type="submit">Submit</button>
</form>