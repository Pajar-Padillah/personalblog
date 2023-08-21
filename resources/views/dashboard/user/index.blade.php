@extends('dashboard/layout/main')
@section('konten')
  <div class="row">
    <div class="col-md-12">
      <form href="/dashboard/user/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="card mb-4">
        <h5 class="card-header">Profile Details</h5>
        <!-- Account -->
        <div class="card-body">
          <div class="d-flex align-items-start align-items-sm-center gap-4">
            @if ($user->image)
            <img
            src="{{ url('uploud/user').'/'.$user->image }}"
               alt="user-avatar"
              class="d-block rounded img-preview"
              height="100"
              width="100"
              id="uploadedAvatar"
            />            
            @else 
            <img
               alt="user-avatar"
              class="d-block rounded img-preview"
              height="100"
              width="100"
              id="uploadedAvatar"
            />            
            @endif

            <div class="button-wrapper">
              <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                <span class="d-none d-sm-block">Upload new photo</span>
                <i class="bx bx-upload d-block d-sm-none"></i>
                <input type="hidden" name="old_image" value="{{ $user->image }}">
                <input
                  type="file"
                  id="upload"
                  name="image"
                  class="account-file-input"
                  hidden
                  onchange="previewImage()"
                />
              </label>
              <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 2048k</p>
            </div>
          </div>
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Name</label>
                <input
                  class="form-control @error('name') is-invalid @enderror"
                  type="text"
                  id="name"
                  name="name"
                  value="{{ old('name', $user->name) }}"
                  autofocus
                />
                @error('name')
                <div class="d-block invalid-feedback">{{ $message }}</div>
                @enderror 
              </div>
              <div class="mb-3 col-md-6">
                <label for="username" class="form-label">Username</label>
                <input  class="form-control @error('username') is-invalid @enderror" type="text" name="username" id="username" value="{{ old('username', $user->username) }}" />
                @error('username')
                <div class="d-block invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Email</label>
                <input
                  class="form-control @error('email') is-invalid @enderror"
                  type="text"
                  id="email"
                  name="email"
                  value="{{ old('email', $user->email) }}"
                />
                @error('email')
                <div class="d-block invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Current Password</label>
                <input
                  class="form-control @error('old_password') is-invalid @enderror"
                  type="text"
                  id="password"
                  name="old_password"
                  
                />
                @error('old_password')
                <div class="d-block invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3 col-md-6">
                <label for="password" class="form-label">New Password</label>
                <input
                  class="form-control @error('password') is-invalid @enderror"
                  type="text"
                  id="password"
                  name="password"
                  
                />
                @error('password')
                <div class="d-block invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>
        </div>
        <div class="mt-2">
          <button type="submit" class="btn btn-primary me-2">Update Profile</button>
        </div>
      </form> 
        <!-- /Account -->
      </div>
    </div>
  </div>
<script>
      function previewImage(){
        const img = document.querySelector('#upload');
    const imgPreview = document.querySelector('.img-preview');
    imgPreview.style.display = 'block';

    const blob = URL.createObjectURL(img.files[0]);
    imgPreview.src = blob;
    }
</script>
@endsection