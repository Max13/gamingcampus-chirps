<x-app-layout>
    <div>
        <ul>
            <li>Author: {{ $chirp->author->name }}</li>
            <li>Content: {{ $chirp->content }}</li>
            <li>Submitted at: {{ $chirp->created_at->toDateTimeString() }}</li>
        </ul>
    </div>
</x-app-layout>
