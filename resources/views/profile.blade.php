<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    <input name="name" value="{{ old('name', auth()->user()->name) }}">
    <input name="email" value="{{ old('email', auth()->user()->email) }}">
    <input name="password" type="password">
    <button type="submit">Aggiorna Profilo</button>
</form>
