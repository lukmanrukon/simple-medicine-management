@extends('medicines.layout')
@section('content')
<div class="wrapperdiv">

@if($message = Session::get('success'))
<div class="alert alert-success text-center">{{ $message }}</div>
@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Medicine Name</th>
      <th scope="col">Generic</th>
      <th scope="col">Category</th>
      <th scope="col">Pharmaceutical</th>
    </tr>
  </thead>
  @if($medicines)
  <tbody>
      @foreach($medicines as $med)
    <tr>
      <td class="align-middle"><img src="{{ asset('assets/uploads/'.$med->ml_photo ) }}" alt="{{ $med->ml_name }}" class="img-thumbnail" /></td>
      <td class="align-middle">
        <a href="{{ route('medicines.show', $med->ml_id)}}">{{ $med->ml_name }}</a>
      </td>
      <td class="align-middle">{{ $med->ml_generic }}</td>
      <td class="align-middle">{{ $med->ml_category }}</td>
      <td class="align-middle">{{ $med->ml_pharmaceutical }}</td>
      

    </tr>
    @endforeach
  </tbody>
  @endif
</table>
<div class="d-flex">
    <div class="mx-auto">
        {!! $medicines->links() !!}
    </div>
</div>
</div>
@endsection
