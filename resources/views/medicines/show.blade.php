
@extends('medicines.layout')
@section('content')
<div class="wrapperdiv">
    @if($medicine)
<div class="row pb-5">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="card" style="width: 20rem;">
            <img src="{{ asset('assets/uploads/'.$medicine->ml_photo ) }}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{ $medicine->ml_name }}</h5>
                <p class="card-text">{{ $medicine->ml_generic }} | {{ $medicine->ml_category }} | {{ $medicine->ml_pharmaceutical }}</p>
                <p>
                    {{ $medicine->ml_desc }}
                </p>
            </div>
        </div>
    </div>
    <div class="col-4"></div>
</div>
    @endif
</div>
@endsection
