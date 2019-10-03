
    @extends('layouts.admin')
    @section('content')
    <div class="row">
<div class="col-6">
   <u><i class="fas fa-plus"></i><a href="{{ url('student/create') }}">Add Student</a></u>
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
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a
                class="nav-item nav-link active"
                id="nav-home-tab"
                data-toggle="tab"
                href="#nav-home"
                role="tab"
                aria-controls="nav-home"
                aria-selected="true">All Students</a>
            <a
                class="nav-item nav-link"
                id="nav-profile-tab"
                data-toggle="tab"
                href="#nav-profile"
                role="tab"
                aria-controls="nav-profile"
                aria-selected="false">Section A (Best)</a>
            <a
                class="nav-item nav-link"
                id="nav-contact-tab"
                data-toggle="tab"
                href="#nav-contact"
                role="tab"
                aria-controls="nav-contact"
                aria-selected="false">Section B (Good)</a>

                <a
                class="nav-item nav-link"
                id="nav-contact-tab"
                data-toggle="tab"
                href="#nav-Average"
                role="tab"
                aria-controls="nav-contact"
                aria-selected="false">Section c (Average)</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div
            class="tab-pane fade show active"
            id="nav-home"
            role="tabpanel"
            aria-labelledby="nav-home-tab">
            <div class="col-lg-12">

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
                                        <a href="" class="btn btn-success btn-sm mrg"  ><i class="fas fa-ad"></i></a>
                                        <a href="" class="btn btn-warning btn-sm mrg" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-edit"></i></a>
                                        <a href="" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn btn-danger btn-sm mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fas fa-delete"></i></a>
                                       </td>

                                </tr>
                            {{-- @endforeach --}}
                        </tbody>
                        </table>

                    </div>
                </div>
                <div
                    class="tab-pane fade"
                    id="nav-profile"
                    role="tabpanel"
                    aria-labelledby="nav-profile-tab">Section a </div>
                <div
                    class="tab-pane fade"
                    id="nav-contact"
                    role="tabpanel"
                    aria-labelledby="nav-contact-tab">Section B</div>
                    <div
                    class="tab-pane fade"
                    id="nav-Average"
                    role="tabpanel"
                    aria-labelledby="nav-contact-tab">Section C</div>
            </div>
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
