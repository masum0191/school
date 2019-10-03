
    @extends('layouts.admin')
    @section('content')
    <div class="row">
<div class="col-6 p-2">
   <u><i class="fas fa-plus"></i><a href="{{ url('staff/create') }}">Add Users</a></u>
</div>
<div class="col-6 text-right">

</div>
</div>




                {{-- <table class="table table-responsive table-warning p-4"> --}}

                    <table id="example" class="table table-striped table-bordered bg-white" style="width:100%">
                    <thead>


                        <th>Photo</th>
                        <th>Name</th>
                        <th>Roll</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>

                    </thead>
                    <tbody>
                        {{-- @foreach ($product as $item) --}}
                        <tr class="">


                            <td>
                                <img
                                    src="{{ asset('asset/images/default.png')  }}"
                                    class="images"
                                    height="50px"
                                    width="50px"
                                    alt=""></td>

                                <td>Masum</td>
                                <td>10</td>

                                <td>masum@gmail.com</td>
                                <td data-title="Status">
                                    <div class="onoffswitch-small" id="1">
                                        <input type="checkbox" id="myonoffswitch1" class="onoffswitch-small-checkbox" name="parents_status" checked="checked">
                                        <label for="myonoffswitch1" class="onoffswitch-small-label">
                                            <span class="onoffswitch-small-inner"></span>
                                            <span class="onoffswitch-small-switch"></span>
                                        </label>
                                    </div>
                                  </td>
                                  <td data-title="Action">
                                    <a href="" class="btn btn-success btn-sm mrg"  data-toggle="tooltip" data-original-title="View"><i class="fa fa-check-square-o"></i></a>
                                    <a href="" class="btn btn-warning btn-sm mrg" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn btn-danger btn-sm mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fas fa-delete"></i></a>
                                   </td>

                            </tr>
                            <tr>
                                    <td>
                                            <img src="{{ asset('asset/images/default.png')  }}"class="images"height="50px" width="50px" alt=""></td>

                                            <td>Masum</td>
                                            <td>10</td>

                                            <td>masum@gmail.com</td>
                                            <td data-title="Status">
                                                <div class="onoffswitch-small" id="1">
                                                    <input type="checkbox" id="myonoffswitch1" class="onoffswitch-small-checkbox" name="parents_status" checked="checked">
                                                    <label for="myonoffswitch1" class="onoffswitch-small-label">
                                                        <span class="onoffswitch-small-inner"></span>
                                                        <span class="onoffswitch-small-switch"></span>
                                                    </label>
                                                </div>
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
