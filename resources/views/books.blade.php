@extends('layout')

@section('content')
    <div class="container">
        <div class="row mt-4 mb-3">
            <div class="col">
                <h4>Books List</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Author</th>
                        <th>Edition</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $i)
                            
                        
                        <tr>
                            <td>{{$i->id}}</td>
                            <td>{{$i->title}}</td>
                            <td>{{$i->description}}</td>
                            <td>{{$i->author}}</td>
                            <td>{{$i->edition}}</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">More</button>
                                <button class="btn btn-sm btn-outline-success">Edite</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection