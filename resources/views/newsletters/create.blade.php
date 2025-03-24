@extends('template')

@section('titre')
	Inscription Newsletter
@endsection

@section('contenu')
	<form method="POST" action="{{ url('newsletters') }}">
		@csrf
		<input
			name="email"
			type="email"
			placeholder="Votre email"
			value="{{ old('email') }}"
			required
		/>
		@error('email')
			<div class="text-danger">{{ $message }}</div>
		@enderror

		<button type="submit">Envoyer</button>
	</form>
@endsection
