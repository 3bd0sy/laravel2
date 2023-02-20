@extends('admin.layout')

@section('content')
    <div class="continer m-3">
        <div class="d-flex m-5">
            <h6 class="fs-1">categories</h6>
            <a class="btn btn-sm btn-primary mx-5" href="{{ route("admin.cats.create") }}">add new</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cats as $cat)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $cat->name }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route("admin.cats.edit",$cat->id) }}">edit</a>
                            <a class="btn btn-sm btn-danger"  href="{{ route("admin.cats.delete",$cat->id) }}">delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
