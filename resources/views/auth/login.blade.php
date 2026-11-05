
<h2>Login</h2>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf

    <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
    <input name="password" type="password" placeholder="Password" required>

    <button type="submit">Login</button>
</form>

<a href="{{ route('register') }}">Create an account</a>
