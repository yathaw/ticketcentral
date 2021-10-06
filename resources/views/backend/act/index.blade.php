<x-backendtemplate>

    <div class="col-12 col-xl-8 mb-4">
        <h3 class="font-weight-bold"> Act </h3>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                @if(session('successMsg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> {{ session('successMsg') }} </strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <h4 class="card-title d-inline-block"> All List </h4>

                <a href="{{ route('master.act.create') }}" class="btn btn-sm btn-inverse-success btn-icon btn-rounded float-right py-2" data-toggle='tooltip' data-placement='top' title='Add New'> <i class="ti-plus"></i> </a>

                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-actor-tab" data-toggle="tab" href="#nav-actor" role="tab" aria-controls="nav-actor" aria-selected="true"> Actor </a>
                        <a class="nav-link" id="nav-actress-tab" data-toggle="tab" href="#nav-actress" role="tab" aria-controls="nav-actress" aria-selected="false">Actress</a>
                        <a class="nav-link" id="nav-director-tab" data-toggle="tab" href="#nav-director" role="tab" aria-controls="nav-director" aria-selected="false"> Director </a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-actor" role="tabpanel" aria-labelledby="nav-actor-tab">
                        <div class="row row-cols-1 row-cols-md-4">
                            @foreach($actors as $actor)
                            <div class="col mb-4">
                                <a href="{{ route('master.act.show',$actor->id) }}" class="text-decoration-none">
                                    <div class="card h-100">
                                        <img src="{{ $actor->photo }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $actor->name }}</h5>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-actress" role="tabpanel" aria-labelledby="nav-actress-tab">
                        <div class="row row-cols-1 row-cols-md-4">
                            @foreach($actresses as $actress)
                            <div class="col mb-4">
                                <a href="{{ route('master.act.show',$actress->id) }}" class="text-decoration-none">
                                    <div class="card h-100">
                                        <img src="{{ $actress->photo }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $actress->name }}</h5>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-director" role="tabpanel" aria-labelledby="nav-director-tab">
                        <div class="row row-cols-1 row-cols-md-4">
                            @if(count($directors) > 0)
                            @foreach($directors as $director)
                            <div class="col mb-4">
                                <a href="{{ route('master.act.show',$director->id) }}" class="text-decoration-none">
                                    <div class="card h-100">
                                        <img src="{{ $director->photo }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $director->name }}</h5>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                            @else
                                <h1> Not Found </h1>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-backendtemplate>