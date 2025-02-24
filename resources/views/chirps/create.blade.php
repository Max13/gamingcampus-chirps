<x-app-layout>
    <form method="POST" action="{{ route('chirps.store') }}">
        @csrf

        <div>
            <x-input-label for="content" :value="__('Content')" />
            <textarea id="content" class="block mt-1 w-full" name="content" required autofocus autocomplete="off">{{ old('content') }}</textarea>
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
