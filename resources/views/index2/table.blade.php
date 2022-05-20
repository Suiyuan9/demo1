<div class="card-body">
    
        
            <div id="example1_wrapper" class="dataTable_wrapper dt boostrap4">
    <table id="example2" class="table table-bordered table-hover" id=userListing>
        <thead>
            <tr>
                <th>Primary Key ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Password</th>
                <th>User image</th>
                <th>User Group</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->image }}</td>
                <td>{{ $user->group }}</td>
                <td>
                    <form action="{{ route('employee.destroy',$product->id) }}" method="POST">
   
                        <a class="btn btn-info" href="{{ route('employee.show',$product->id) }}">Show</a>
        
                        <a class="btn btn-primary" href="{{ route('employee.edit',$product->id) }}">Edit</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
            
        </div>
    
</div>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>