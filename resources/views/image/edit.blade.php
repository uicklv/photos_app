<h1>Edit image</h1>
<form action="{{ route('images.update', $image->id) }}" method="POST">
    @csrf
    @method('PUT')
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
</form>
