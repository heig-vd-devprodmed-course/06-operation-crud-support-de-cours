<h1>Modifier la newsletter</h1>
<form method="POST" action="{{ route('newsletters.update', $newsletter->id) }}">
    @csrf
    @method('PUT')
    <input type="email" name="email" value="{{ $newsletter->email }}">
    <button type="submit">Mettre à jour</button>
</form>