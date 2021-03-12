@extends('backend.layouts.app')
@section('title', 'Dashboard')
@section('breadcrumbs')
    <h4 class="page-title pull-left">Dashboard</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="{{route('dashboard')}}">Home</a></li>
        <li><span>Dashboard</span></li>
    </ul>
@endsection
@section('content')

<div class="message">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Unread Message List</h3>
        </div>
        <div class="card-body">
            <div class="data-tables">
                <table id="dataTable" class="text-center table-striped">
                    <thead class="bg-light text-capitalize">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col" width="15%">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (App\Models\Message::getAllUnreadMessage() as $message)
                            <tr>
                                <th scope="row">{{$loop->index+1}}</th>
                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{Str::of($message->message)->limit(30)}}</td>
                                <td>
                                    <ul class="d-flex justify-content-center">
                                            <li>
                                                <form action="{{route('messages.update', $message->id)}}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-success btn-sm border-0 mr-2" type="submit">Archive</button>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="{{route('messages.destroy', $message->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger border-0" type="submit">Delete</button>
                                                </form>
                                            </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection