@extends('dashboard/layout/main')
@section('konten')
 <div class="card col-lg-8">
    <h4 class="card-header">Blog Lists</h4>
    <div class="container mb-2">
        <div class="col-lg-4 d-inline">
        <a href="/dashboard/blog/create" class="btn btn-primary btn-sm mb-2 "><span class="tf-icons bx bx-plus-circle"></span>&nbsp; Create new blog</a>
        </div>
          <div class="col-lg-4" style="float: right">
              <form action="/dashboard/blog">
                  <div class="input-group">
                      <input type="text" class="form-control form-control-sm" placeholder="Search.." name="search" value="{{ request('search') }}">
                      <button class="btn btn-primary btn-sm" type="submit"><i class="tf-icons bx bx-search"></i></button>
                  </div>
              </form>
          </div>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Category</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @if ($blog->count())
          @foreach ($blog as $key => $item)
          <tr>
              <td>{{ $blog->firstItem() + $key }}</td>
              <td>{{ $item->title }}</td>
              <td>{{ $item->category->name }}</td>
              <td>
                  <a href="/dashboard/blog/{{ $item->slug }}" class="badge bg-info"><i class="tf-icons bx bx-show"></i></a>
                  <a href="/dashboard/blog/{{ $item->slug }}/edit" class="badge bg-warning"><i class="tf-icons bx bx-edit-alt"></i></a>
                  <form id="confirm-delete" action="/dashboard/blog/{{ $item->slug }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button onclick="confirmDel('confirm-delete')" class="badge bg-danger border-0 confirm-delete"><i class="tf-icons bx bx-trash"></i></button>
                  </form> 
              </td>
          </tr>
          @endforeach
          @else
            <tr class="text-center">
              <td colspan="4">No post found</td>
            </tr>
          @endif
        </tbody>
      </table>
      <div class="mx-3">
        {{ $blog->links() }}
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