@extends('dashboard/layout/main')
@section('konten')
    <div class="card mb-4">
      <h5 class="card-header">Edit Blog</h5>
      <hr>
      <div class="card-body">
        <form action="/dashboard/blog/{{ $blog->slug }}" method="POST" class="mb-5" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" value="{{ old('title', $blog->title) }}" autofocus class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title"/>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                      </div>
                      <div class="mb-3">
                          <label for="slug" class="form-label">Slug</label>
                          <input type="text" name="slug" value="{{ old('slug', $blog->slug) }}" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Slug"/>
                          @error('slug')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror  
                      </div>
                      <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select name="category_id" class="form-select" id="category">
                            @foreach ($categories as $category)
                            @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else 
                            <option value="{{ $category->id }}">{{ $category->name }}</option> 
                            @endif
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-danger" style="font-size: 13px">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="image" class="form-label">Blog Image</label>
                        <input type="hidden" name="old_image" value="{{ $blog->image }}">
                        @if ($blog->image)
                        <img src="{{ url('uploud/blog').'/'.$blog->image }}" class="img-preview img-fluid mb-3 col-lg-5 d-block">
                        @else
                        <img class="img-preview img-fluid mb-3 col-lg-5">
                        @endif
                        <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        @error('body')
                            <p class="text-danger" style="font-size: 13px">{{ $message }}</p>
                        @enderror
                        <input type="hidden" name="body" id="body" value="{{ old('body', $blog->body) }}">
                        <trix-editor input="body"></trix-editor>
                    </div>
                </div>
            </div>
              <button type="submit" class="btn btn-primary me-2">Update Blog</button>
              <a href="/dashboard/blog" class="btn btn-secondary me-2">Cancel</a>
        </form>
      </div>
    </div>
  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');
    title.addEventListener('keyup', function(){
        slug.value = title.value.toLowerCase().replaceAll(/ /g,"-");
    });
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault(); 
    })

    function previewImage(){
    const img = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');
    imgPreview.style.display = 'block';

    const blob = URL.createObjectURL(img.files[0]);
    imgPreview.src = blob;
    }
</script>
@endsection