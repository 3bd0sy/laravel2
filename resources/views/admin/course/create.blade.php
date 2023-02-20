@extends('admin.layout')

@section('content')
    <div class="continer m-3">
        <div class="d-flex m-5">
            <h6 class="fs-1">courses / add new </h6>
            <a href="{{ route('admin.course.index') }}" class="btn btn-sm btn-primary">Back</a>
        </div>
        <form class="row g-3" method="POST" action="{{ route('admin.course.store') }}">
            @csrf
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="validationDefault01" required>
            </div>

            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">price</label>
                <input type="text" name="price" class="form-control" id="validationDefault01" required>
            </div>

            <div class="col-md-4 ">
                <label for="validationDefault01" class="form-label">desc</label>
                <input type="text" name="desc" class="form-control" id="validationDefault01" required>
            </div>

            <div class="col-md-4 ">
                <label for="">cats</label>

                <select name="cat_id" class="form-select">
                    @foreach ($cats as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div >

                <div class="col-md-4 ">

                <label for="">trainers</label>
                <select name="trianer_id" class="form-select">
                    @foreach ($trainers as $t)
                        <option value="{{ $t->id }}">{{ $t->name }}</option>
                    @endforeach

                </select>


            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
