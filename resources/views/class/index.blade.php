
    @extends('layouts.admin')
    @section('content')
    <div class="row">
<div class="col-6 p-2 ">
   <u><i class="fas fa-plus"></i><a href="{{ url('acadamic/class/create') }}">Add Class</a></u>
</div>
<div class="col-6 text-right">

</div>
</div>




                {{-- <table class="table table-responsive table-warning p-4"> --}}

                    <table id="example" class="table table-striped table-bordered bg-white" style="width:100%">
                    <thead>


                        <th>#</th>
                        <th>class</th>
                        <th>Class Numeric </th>
                        <th>Teacher Name</th>
                        <th>Note</th>
                        <th>Action</th>

                    </thead>
                    <tbody>
                        {{-- @foreach ($product as $item) --}}
                        <tr class="">


                            <td>
                               1</td>

                                <td>Masum</td>
                                <td>10</td>

                                <td>masum@gmail.com</td>
                                <td data-title="Status">

                                  </td>
                                  <td data-title="Action">
                                    <a href="" class="btn btn-success btn-sm mrg"  data-toggle="tooltip" data-original-title="View"><i class="fa fa-check-square-o"></i></a>
                                    <a href="" class="btn btn-warning btn-sm mrg" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn btn-danger btn-sm mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fas fa-delete"></i></a>
                                   </td>

                            </tr>
                            <tr>
                                    <td>2</td>

                                            <td>Masum</td>
                                            <td>10</td>

                                            <td>masum@gmail.com</td>
                                            <td data-title="Status">

                                              </td>
                                              <td data-title="Action">
                                                <a href="" class="btn btn-success btn-sm mrg"  data-toggle="tooltip" data-original-title="View"><i class="fa fa-check-square-o"></i></a>
                                                <a href="" class="btn btn-warning btn-sm mrg" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn btn-danger btn-sm mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fas fa-delete"></i></a>
                                               </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                        </table>




            @endsection
            @section('js')



            @endsection
         @section('scripts')

             {{-- datatables --}}
             {{-- select2 --}}

         <script type="text/javascript">
            $(document).ready(function() {
    //$('#example').DataTable();
    $('.js-example-basic-single').select2();
    $('#example').DataTable();
} );
         </script>
         @endsection
