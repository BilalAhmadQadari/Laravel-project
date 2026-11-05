
<h2>Register</h2>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif

<form method="POST" action="{{ route('register') }}">
    @csrf

    <input name="name" placeholder="Name" value="{{ old('name') }}" required>
    <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
    <input name="password" type="password" placeholder="Password" required>
    <input name="password_confirmation" type="password" placeholder="Confirm password" required>

    <button type="submit">Register</button>
</form>

<a href="{{ route('login') }}">Already registered? Login</a>
