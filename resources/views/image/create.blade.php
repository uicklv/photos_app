<h1>Upload new image</h1>
<form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <lable for="file">File</lable>
        <input type="file" name="file" id="file">
        @error('file')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <lable for="title">Title</lable>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        @error('title')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Upload</button>
</form>
