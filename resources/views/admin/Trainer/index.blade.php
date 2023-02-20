@extends('admin.layout')

@section('content')
    <div class="continer m-3">
        <div class="d-flex m-5">
            <h6 class="fs-1">trainers</h6>
            <a class="btn btn-sm btn-primary mx-5" href="{{ route("admin.trainer.create") }}">add new</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">phone</th>
                    <th scope="col">spec</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Trainers as $t)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $t->name }}</td>
                        <td>{{ $t->phone }}</td>
                        <td>{{ $t->spec }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route("admin.trainer.edit",$t->id) }}">edit</a>
                            <a class="btn btn-sm btn-danger"  href="{{ route("admin.trainer.delete",$t->id) }}">delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
