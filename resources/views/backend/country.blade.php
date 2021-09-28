<x-backendtemplate>

    <div class="col-12 col-xl-8 mb-4">
        <h3 class="font-weight-bold"> Country </h3>
    </div>

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Create New</h4>
                <form class=" row">
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                        <label class="sr-only" for="inputName">Name</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inputName" name="name" placeholder="e.g US, Myanmar">
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">

                        <button type="submit" class="btn btn-custom mb-2 btn-block"> Save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

	<div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title d-inline-block"> All List </h4>

                <div class="table-responsive">
                    <table class="table table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody ></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<!-- Show Modal -->
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@section('script_content')
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // READ
            var table = $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('master.getlistCountries') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                destroy:true,
                language: {
                   oPaginate: {
                        sNext: '<i class="ti-angle-right"></i>',
                        sPrevious: '<i class="ti-angle-left"></i>',
                        sFirst: '<i class="ti-angle-double-left"></i>',
                        sLast: '<i class="ti-angle-double-right"></i>'
                    }
                } ,

                dom: 'Bfrtip',
            });

            $('.createBtn').on('click', function(){
                $("#showModal").modal("show");
                
                $("form").attr('id', 'addForm');
                $("#exampleModalCenterTitle").text('Add New');
            });

            

        });
    </script>

@stop
</x-backendtemplate>