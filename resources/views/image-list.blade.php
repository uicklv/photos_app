<x-layout title="All Images">
    <div class="container-fluid mt-4">
        @include('shared._grid-images', ['images' => $images])
    </div>
</x-layout>
