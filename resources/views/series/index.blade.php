<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie->nome }}
                <form action="{{ route('series.destroy', $serie->id) }}" class="d-inline" method="post"></form>
                    <button class="btn btn-danger btn-sm float-end"> Excluir </button>
            </li>
        @endforeach
    </ul>

</x-layout>
