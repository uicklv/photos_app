<h1>Edit image</h1>
<x-form action="{{ route('images.update', $image->id) }}" method="PUT">
    <div>
       <img src="{{ $image->fileUrl() }}" alt="{{ $image->title }}" width="400">
    </div>
    <div>
        <lable for="title">Title</lable>
        <input type="text" name="title" id="title" value="{{ old('title', $image->title) }}">
        @error('title')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Update</button>
</x-form>
