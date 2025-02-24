<x-app-layout>
    <div>
        <ul>
            @foreach ($tweets as $chirp)
                <li style="margin-bottom:2em">
                    <form method="POST" action="{{ route('chirps.destroy', $chirp) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Supprimer</button>
                    </form>
                    {{ $chirp->content }}
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
