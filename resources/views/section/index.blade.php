
    @extends('layouts.admin')
    @section('content')
    <div class="row">
<div class="col-6">
   <u><i class="fas fa-plus"></i><a href="{{ url('section/create') }}">Add Section</a></u>
</div>
<div class="col-6 text-right">
    <form action="">
        <select class="js-example-basic-single" name="state">
            <option value="AL">select class</option>
            <option value="AL">Class One</option>
            <option value="AL">Class Two</option>
            <option value="AL">Class Three</option>

            <option value="WY">Class Four</option>
          </select>
    </form>
</div>




    </div>



                {{-- <table class="table table-responsive table-warning p-4"> --}}

                    <table id="example" class="table table-striped table-bordered bg-white" style="width:100%">
                    <thead>


                        <th>#</th>
                        <th>Section</th>
                        <th>Category</th>
                        <th>Capacity</th>
                        <th>Teacher Name</th>
                        <th>Note</th>
                        <th>Action</th>

                    </thead>
                    <tbody>
                        {{-- @foreach ($product as $item) --}}
                        <tr class="">


                            <td>1</td>

                                <td>A</td>
                                <td>best</td>

                                <td>10</td>
                                <td data-title="Status">
                                    Masum Billah
                                  </td>
                                  <td></td>
                                  <td data-title="Action">

                                    <a href="" class="btn btn-warning btn-sm mrg" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn btn-danger btn-sm mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fas fa-delete"></i></a>
                                   </td>

                            </tr>
                            <tr class="">


                                <td>2</td>

                                    <td>B</td>
                                    <td>Good</td>

                                    <td>0</td>
                                    <td data-title="Status">
                                        Zahidul Islam
                                      </td>
                                      <td></td>
                                      <td data-title="Action">

                                        <a href="" class="btn btn-warning btn-sm mrg" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-edit"></i></a>
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
