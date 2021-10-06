<x-backendtemplate>

	<div class="col-12 col-xl-8 mb-4">
        <h3 class="font-weight-bold"> Act </h3>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
        	<div class="card-header bg-transparent border-bottom-0">
				<h2 class="pt-2 d-inline-block"> {{ $act->name }} </h2>

        		<div class="btn-group btn-group-sm float-right" role="group" aria-label="Basic example">
                  	<a href="{{ route('master.act.index') }}" class="btn btn-success" data-toggle='tooltip' data-placement='top' title='{{ __('Show All') }}'>
                  		<i class="mdi mdi-skip-backward text-white font-weight-bolder"></i>
                  	</a>
                  	<a href="{{ route('master.act.edit', $act->id) }}" class="btn btn-warning" data-toggle='tooltip' data-placement='top' title='{{ __('Edit') }}'>
                  		<i class='mdi mdi-pencil text-white font-weight-bolder'></i>
                  	</a>


                  	<a class="btn btn-danger deleteBtn" data-id="{{ $act->id }}" data-toggle='tooltip' data-placement='top' title='{{ __('Remove') }}'>
                  		<i class='mdi mdi-window-close text-white font-weight-bolder'></i>
                  	</a>
                </div>
        	</div>
            <div class="card-body">

            	<div class="row">
            		<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
            			<img src="{{ $act->photo }}" class="img-fluid">
            		</div>
            		<div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
            			<nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
							    <a class="nav-link active" id="nav-information-tab" data-toggle="tab" href="#nav-information" role="tab" aria-controls="nav-information" aria-selected="true">Information</a>
							    <a class="nav-link" id="nav-acting-tab" data-toggle="tab" href="#nav-acting" role="tab" aria-controls="nav-acting" aria-selected="false">Acting</a>
							    <a class="nav-link" id="nav-gallery-tab" data-toggle="tab" href="#nav-gallery" role="tab" aria-controls="nav-gallery" aria-selected="false">Gallery</a>
							  </div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
							  	<div class="tab-pane fade show active" id="nav-information" role="tabpanel" aria-labelledby="nav-information-tab">
							  		<div class="form-group">
							  			<p class="font-weight-bolder"> Type </p>
							  			<p> {{ $act->status }} </p>
							  		</div>

							  		<div class="form-group">
							  			<p class="font-weight-bolder"> Gender </p>
							  			<p> {{ $act->gender }} </p>
							  		</div>

							  		<div class="form-group">
							  			<p class="font-weight-bolder"> Date of Birth </p>
							  			<p> {{ $act->dob }} </p>
							  		</div>

							  		<div class="form-group">
							  			<p class="font-weight-bolder"> Place of Birth </p>
							  			<p> {{ $act->pob }} </p>
							  		</div>

							  		<div class="form-group">
							  			<p class="font-weight-bolder"> Biography </p>
							  			<p> {!! $act->bio !!} </p>
							  		</div>

							  	</div>
							  	<div class="tab-pane fade" id="nav-acting" role="tabpanel" aria-labelledby="nav-acting-tab">
							  		
							  	</div>
							  	<div class="tab-pane fade" id="nav-gallery" role="tabpanel" aria-labelledby="nav-gallery-tab">
							  		
							  	</div>
						</div>
            		</div>
            	</div>
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

            // DELETE
            $('.card').on('click', '.deleteBtn', function () {
     
                var id = $(this).data("id");
                
                var url="{{route('master.act.destroy',':id')}}";
                url=url.replace(':id',id);



                Swal.fire({
                    title: 'Are you sure want to Delete?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#74b72e',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                title: 'SUCCESS !',
                                text: 'Your data has been deleted successfully',
                                icon: 'success',
                                showConfirmButton: false,
                                timer : 1500
                            }).then(
                                function()
                                {
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });

                                    $.ajax({
                                        url: url,
                                        type: "DELETE",
                                        dataType: 'json',
                                        success: function (data){
                                            window.location.href = "{{URL::to('master/act')}}";
                                        }
                                    });
                                }
                            );
                        }
                    });
            });

        });
    </script>

@stop

</x-backendtemplate>