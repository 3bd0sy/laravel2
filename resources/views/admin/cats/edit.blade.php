@extends('admin.layout')

@section('content')
    <div class="continer m-3">
        <div class="d-flex m-5">
            <h6 class="fs-1">categories / edit/ {{ $cat->name }} </h6>
            <a href="{{ route("admin.cats.index") }}" class="btn btn-sm btn-primary">Back</a>
        </div>
        <form class="row g-3" method="POST" action="{{ route('admin.cats.update') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $cat->id  }}">
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Name</label>
                <input type="text" name="name" value="{{ $cat->name  }}" class="form-control" id="validationDefault01"  required>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
