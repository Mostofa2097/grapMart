<h1>
    Contact page
</h1>
<form action="{{route('student.store')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter your name" id=""> <br>
    <input type="text" name="email" placeholder="enter your email" id=""><br>
    <button type="submit">submit</button>
</form>