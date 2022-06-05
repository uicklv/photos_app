<h1>All Images</h1>

<a href="{{ route('images.create') }}">Upload image</a>

@foreach($images as $image)
    <div>
        <a href="{{ $image->permalink() }}">
            <img src="{{ $image->fileUrl() }}" alt="{{ $image->title }}" width="300">
        </a>
    </div>
@endforeach
