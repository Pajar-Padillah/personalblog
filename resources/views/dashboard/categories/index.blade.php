@extends('dashboard/layout/main')
@section('konten')
<div class="card col-lg-8">
    <h4 class="card-header">All Categories</h4>
    <div class="container mb-2">
        <div class="col-lg-4 d-inline">
        <a href="/dashboard/categories/create" class="btn btn-primary btn-sm mb-2 "><span class="tf-icons bx bx-plus-circle"></span>&nbsp; Create new category</a>
        </div>
        <div class="col-lg-4" style="float: right">
          <form action="/dashboard/categories">
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
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @if ($categories->count())
          @foreach ($categories as $key => $item)
          <tr>
              <td>{{ $categories->firstItem() + $key }}</td>
              <td>{{ $item->name}}</td>
              <td>
                  <a href="/dashboard/categories/{{ $item->slug }}/edit" class="badge bg-warning"><i class="tf-icons bx bx-edit-alt"></i></a>
                  <form id="confirm-delete" action="/dashboard/categories/{{ $item->slug }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete') 
                    <button class="badge bg-danger border-0" onclick="confirmDel('confirm-delete')" title='Delete'><i class="tf-icons bx bx-trash"></i></button>
                  </form>
              </td>
          </tr>
          @endforeach
          @else
            <tr class="text-center">
              <td colspan="4">No category found</td>
            </tr>
          @endif
        </tbody>
      </table>
      <div class="mx-3">
        {{ $categories->links() }}
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
            text: "Your category is safe", 
            icon: "error",
            timer: 1500
          });
         }
       });
   }
</script>
@endsection