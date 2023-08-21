@extends('dashboard/layout/main')
@section('konten')
    <div class="card mb-4">
      <h5 class="card-header">Edit Gallery</h5>
      <hr>
      <div class="card-body">
        <form action="/dashboard/gallery/{{ $gallery->id }}" method="POST" class="mb-5" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" value="{{ old('title', $gallery->title) }}" autofocus class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title"/>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                      </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gallery Image</label>
                        <input type="hidden" name="old_image" value="{{ $gallery->image }}">
                        @if ($gallery->image)
                        <img src="{{ url('uploud/gallery').'/'.$gallery->image }}" class="img-preview img-fluid mb-3 col-lg-5 d-block">
                        @else
                        <img class="img-preview img-fluid mb-3 col-lg-5">
                        @endif
                        <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                    <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        @error('desc')
                            <p class="text-danger" style="font-size: 13px">{{ $message }}</p>
                        @enderror
                        <input type="hidden" name="desc" id="desc" value="{{ old('desc', $gallery->desc) }}">
                        <trix-editor input="desc"></trix-editor>
                    </div>
                </div>
            </div>
              <button type="submit" class="btn btn-primary me-2">Edit Gallery</button>
              <a href="/dashboard/gallery" class="btn btn-secondary me-2">Cancel</a>
        </form>
      </div>
    </div>
  <script>
    function previewImage(){
    const img = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');
    imgPreview.style.display = 'block';

    const blob = URL.createObjectURL(img.files[0]);
    imgPreview.src = blob;
    }
</script>
@endsection