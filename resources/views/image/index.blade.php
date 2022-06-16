<x-layout title="All Images">
    <section class="py-3 border-bottom bg-white">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col">
                    <a href="{{ route('images.create') }}" class="btn btn-primary">
                        <x-icon src="upload.svg" alt="Upload" class="me-2" />
                        <span>Upload</span>
                    </a>
                </div>
                <div class="col"></div>
                <div class="col text-right">
                    <form class="search-form">
                        <input type="search" name="q" placeholder="Search..." aria-label="Search..." autocomplete="off">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid mt-4">
        @if($message = session('message'))
            <x-alert type="success" dissmissible>
                {{ $component->icon() }}
                {{ $message }}
            </x-alert>
        @endif
        <div class="row" data-masonry='{"percentPosition": true }'>
            @foreach($images as $image)
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <a href="{{ $image->permalink() }}">
                        <img src="{{ $image->fileUrl() }}" alt="{{ $image->title }}" class="card-img-top">
                    </a>

                    @canany(['update', 'delete'], $image)
                        <div class="photo-buttons">
                            @can('update', $image)
                                <a href="{{route('images.edit', $image->id)}}" class="btn btn-sm btn-info me-2">Edit</a>
                            @endcan

                            @can('delete', $image)
                                <x-form action="{{route('images.destroy', $image->id)}}" method="DELETE">
                                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                </x-form>
                            @endcan
                        </div>
                    @endcanany
                </div>
            </div>
            @endforeach
        </div>
        {{ $images->links() }}
    </div>
</x-layout>
