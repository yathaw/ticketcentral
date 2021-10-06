<x-backendtemplate>
    <div class="col-12 col-xl-8 mb-4">
        <h3 class="font-weight-bold"> Act </h3>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title d-inline-block"> Edit Existing Data </h4>

                <a href="{{ route('master.act.index') }}" class="btn btn-sm btn-inverse-success btn-icon btn-rounded float-right py-2" data-toggle='tooltip' data-placement='top' title='{{ __('Show All') }}'> <i class="mdi mdi-skip-backward"></i> </a>

                <form action="{{ route('master.act.update',$act->id) }}" method="POST" enctype="multipart/form-data" class="form-sample">
                @csrf
                @method('PUT') 

                <input type="hidden" name="oldphoto" value="{{ $act->photo }}">

                    <p class="card-description">
                        Personal info
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @if($errors->first('name')) is-invalid @endif" name="name" value="{{ $act->name }}" />
                                    <div class="invalid-feedback"> {{ $errors->first('name') }} </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Gender</label>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender" id="membershipRadios1" value="Male" @if($act->gender == 'Male') checked @endif>
                                            Male
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender" id="membershipRadios2" value="Female" @if($act->gender == 'Female') checked @endif>
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date of Birth</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="date" placeholder="dd/mm/yyyy" name="dob" value="{{ $act->dob }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Place of Birth</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="e.g Yangon" name="pob" value="{{ $act->pob }}"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"> Photo </label>
                                <div class="col-sm-11">
                                    <input type="file" name="photo" onchange="loadFile(event)" class="file-upload-default" id="fileinput_id">
                                    
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" id="fileinput_name">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-custom" type="button">Upload</button>
                                        </span>
                                    </div>

                                    <div class="col-12">
                                        <img id="image" @if($act->photo) src="{{ $act->photo }}" @endif  width="250" class="d-block mt-3">

                                        <div class="delete-button @if($act->photo == null) d-none @endif">
                                            <a class="btn btn-outline-danger btn-sm px-4" onclick="removeImg()">Delete</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 form-control-feedback text-danger"> {{ $errors->first('photo') }} </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label">Type</label>
                                <div class="col-sm-11">
                                    <select class="form-control" name="type">
                                        <option value="Actor" @if($act->status == 'Actor') selected @endif >Actor</option>
                                        <option value="Actress" @if($act->status == 'Actress') selected @endif>Actress</option>
                                        <option value="Director" @if($act->status == 'Director') selected @endif>Director</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label">Bio</label>
                                <div class="col-sm-11">
                                    <textarea class="form-control" rows="5" name="bio">{{ $act->bio }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-custom mr-2">Update</button>
                    <button type="reset" class="btn btn-light">Cancel</button>

                </form>
            </div>


        </div>
    </div>

@section('script_content')
    
    <script type="text/javascript">
        
        var loadFile = function(event){
            var image = document.getElementById('image'); 
            image.src = URL.createObjectURL(event.target.files[0]);

            $('.delete-button').removeClass('d-none');
        }

        function removeImg()
        {
            document.getElementById('image').removeAttribute('src');
            // document.getElementById('input_id').value= null;
            document.getElementById('fileinput_name').value= null;

            $('.delete-button').addClass('d-none');

        }

    </script>

@endsection

</x-backendtemplate>