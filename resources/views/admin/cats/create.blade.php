@extends('admin.layout')

@section('content')
    <div class="continer m-3">
        <div class="d-flex m-5">
            <h6 class="fs-1">categories / add new </h6>
            <a href="{{ route("admin.cats.index") }}" class="btn btn-sm btn-primary">Back</a>
        </div>
        <form class="row g-3" method="POST" action="{{ route('admin.cats.store') }}">
            @csrf
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="validationDefault01"  required>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
