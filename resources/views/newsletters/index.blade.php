<!-- resources/views/newsletters/index.blade.php -->
@extends('template')

@section('titre')
    Liste des inscriptions à la newsletter
@endsection

@section('contenu')
    <div class="container mt-4">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h2>Liste des abonnés</h2>

        @if ($newsletters->isEmpty())
            <p>Aucune inscription pour le moment.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Date d'inscription</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($newsletters as $newsletter)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $newsletter->email }}</td>
                            <td>{{ $newsletter->created_at->format('d/m/Y H:i') }}</td>
                            <td class="d-flex gap-2">
                                
                                <!-- UPDATE -->
                                <a href="{{ route('newsletters.edit', $newsletter->id) }}" class="btn btn-sm btn-outline-secondary">Modifier</a>

                                <!-- DELETE -->
                                <form action="{{ route('newsletters.delete', $newsletter->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Confirmer la suppression ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <!-- CREATE -->
        <a href="{{ route('newsletters.create') }}" class="btn btn-primary mt-3">
            Ajouter une adresse
        </a>
    </div>
@endsection
