@extends('layouts.app')
@section('title','Home-Page')
@section('content')
<body>
    <h2>login</h2>
    
    <form  action="">
        <div>
            <label for="log">Email</label>
            <input type="email" name="log" placeholder="Email">
            <br>
            <br>
            
            <label for="pas">Password</label>
            <input type="password" name="pas">
            <br>
            <br>

        </div>
        <button type="submit">Login</button>




    </form>
    
</body>
@endsection