@extends('medicines.layout')
@section('content')
<div class="wrapperdiv" id="productSection">
    @if($medicines)
    <ul class="listProducts">
        @foreach($medicines as $med)
        <li>
            <div class="search_products">
                <a href="{{ route('medicines.show', $med->ml_id)}}">
                    <div class="product_logo_img">
                        <img src="{{ asset('assets/uploads/'.$med->ml_photo ) }}" alt="{{ $med->ml_name }}">
                    </div>
                </a>
                <div class="prd_summery">
                    <div class="prd_cats">{{ $med->ml_category }}</div>
                    <div class="prd_generic">{{ $med->ml_generic }}</div>
                    
                    <div class="prd_view_details">
                        <a href="{{ route('medicines.show', $med->ml_id)}}">View Details <i class="fas fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    @endif

</div>
@endsection
