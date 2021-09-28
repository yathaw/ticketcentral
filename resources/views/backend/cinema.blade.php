<x-backendtemplate>

    <div class="col-12 col-xl-8 mb-4">
        <h3 class="font-weight-bold"> Cinema </h3>
    </div>

	<div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title d-inline-block"> All List </h4>

                <button class="btn btn-sm btn-inverse-success btn-icon btn-rounded float-right createBtn" data-toggle='tooltip' data-placement='top' title='Add New'> <i class="ti-plus"></i> </button>
                <div class="table-responsive">
                    <table class="table table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Logo</th>
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
                ajax: "{{ route('master.getlistCinemas') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'logo', name: 'logo'},
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