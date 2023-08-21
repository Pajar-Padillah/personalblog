@extends('dashboard/layout/main')
@section('konten')
@extends('dashboard/layout/main')
@section('konten')
<div class="col-lg-7">
    <div class="card mb-4">
      <h5 class="card-header">Edit Categories</h5>
      <hr>
      <div class="card-body">
        <form action="/dashboard/categories/{{ $category->slug }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" value="{{ old('name', $category->name) }}" autofocus class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name"/>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              </div>
              <div class="mb-3">
                  <label for="slug" class="form-label">Slug</label>
                  <input type="text" readonly name="slug" value="{{ old('slug', $category->slug) }}" autofocus class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Slug"/>
                  @error('slug')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror  
              </div>
              <button type="submit" class="btn btn-primary me-2">Update Category</button>
              <a href="/dashboard/categories" class="btn btn-secondary me-2">Cancel</a>
        </form>
      </div>
    </div>
  </div>
  <script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');
    name.addEventListener('keyup', function(){
        slug.value = name.value.toLowerCase().replaceAll(/ /g,"-");
    });
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault(); 
    })
</script>
@endsection
@endsection