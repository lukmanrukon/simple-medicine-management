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
      <th scope="col">Action</th>
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
      <td class="align-middle">
      <form action="{{ route('medicines.destroy', $med->ml_id) }}" method="post">
        <a href="{{ route('medicines.show', $med->ml_id)}}" class="btn btn-info">Show</a>
        <a href="{{ route('medicines.edit', $med->ml_id)}}" class="btn btn-primary">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')">Delete</button>
        </form>
      </td>

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
