@extends('dashboard/layout/main')
@section('konten')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
        <h4 class="card-header">Blog Detail</h4>
        <hr>
            <div class="card-body">
            <h5 class="card-text">{{ $blog->title }}</h5>
            <p class="d-inline">
                <a class="btn btn-success btn-sm me-1" href="/dashboard/blog" role="button">
                <i class="tf-icons bx bx-arrow-back"></i> Back to all my blog</a>
                <a class="btn btn-warning btn-sm me-1" href="/dashboard/blog/{{ $blog->slug }}/edit" role="button">
                <i class="tf-icons bx bx-edit-alt"></i> Edit</a>
                <form action="/dashboard/blog/{{ $blog->slug }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm me-1" onclick="confirmDel('confirm-delete')"><i class="tf-icons bx bx-trash"></i> Delete</button>
                </form>
            </p>
            <div class="d-grid d-sm-flex p-3 border">
            @if ($blog->image)
            <img src="{{ url('uploud/blog').'/'.$blog->image }}" alt="collapse-image" height="300" class="me-4 mb-sm-0 mb-2"/>
            @else
            <img src="/img/avatars/default.jpg" alt="collapse-image" height="300" class="me-4 mb-sm-0 mb-2"/>
            @endif
            <article class="fs-5" style="text-align: justify">
                {!! $blog->body !!}
            </article>
            </div>
        </div>
    </div>
</div>
<script>
    function confirmDel(item_id){
    event.preventDefault();
    swal({
           title: "Are you sure you want to delete?",
           text: "If you delete this, it will be gone forever", 
           icon: "warning",
           buttons: true,
           dangerMode: true,
       })
       .then((willDelete) => {
         if (willDelete) {
           $('#'+item_id).submit(); 
         } else {
          swal({
            title: "Cancelled",
            text: "Your blog is safe", 
            icon: "error",
            timer: 1500
          });
         }
       });
   }
  </script>
@endsection