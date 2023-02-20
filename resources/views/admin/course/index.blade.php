@extends('admin.layout')

@section('content')
    <div class="continer m-3">
        <div class="d-flex  m-5">
            <h6 class="fs-1">courses</h6>
            <a class="btn btn-sm btn-primary mx-5" href="{{ route("admin.course.create") }}">add new</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">price</th>
                    <th scope="col">desc</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $c)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $c->name }}</td>
                        <td>{{ $c->price }}</td>
                        <td>{{ $c->desc }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route("admin.course.edit",$c->id) }}">edit</a>
                            <a class="btn btn-sm btn-danger"  href="{{ route("admin.course.delete",$c->id) }}">delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
