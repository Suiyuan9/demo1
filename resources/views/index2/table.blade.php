<div class="card-body">
    
        
            <div id="example1_wrapper" class="dataTable_wrapper dt boostrap4">
    <table id="example2" class="table table-bordered table-hover" id=userListing>
        <thead>
            <tr>
                <th>No</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Address</th>
                <th>User image</th>
                <th>User Group</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->image }}</td>
                <td>{{ $employee->userGroup }}</td>
                <td>
                    <form action="{{ route('employee.destroy',$employee->id) }}" method="POST" style="margin: 0%">
   
                        <a class="btn btn-info" href="{{ route('employee.show',$employee->id) }}">Show</a>
        
                        <a class="btn btn-primary" href="{{ route('employee.edit',$employee->id) }}">Edit</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger" id="deleteUser">Delete</button>
                    </form>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
    {!! $employees->withQueryString()->links('pagination::bootstrap-5') !!}
            
        </div>
    
</div>
<!--<script>
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
  </script>-->