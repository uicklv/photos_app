<x-layout title="All Images">
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

                    <div class="photo-buttons">
                        <div>
                            <a href="{{route('images.edit', $image->id)}}" class="btn btn-sm btn-info me-2">Edit</a>
                            <x-form action="{{route('images.destroy', $image->id)}}" method="DELETE">
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </x-form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $images->links() }}
    </div>
</x-layout>
