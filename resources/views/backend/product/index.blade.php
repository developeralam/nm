@extends('backend.layouts.app')
@section('title', 'Product List')
@section('breadcrumbs')
    <h4 class="page-title pull-left">Product List</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="{{route('dashboard')}}">Home</a></li>
        <li><span>Product List</span></li>
    </ul>
@endsection
@section('content')
    <div class="site-config">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Product List</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col" width="15%">Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (App\Models\Product::getAllProduct() as $product)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{Str::of($product->name)->limit(30)}}</td>
                                    <td><img src="{{asset(''.$product->image)}}" alt=""></td>
                                    <td>{{strip_tags(Str::of($product->description)->limit(30))}}</td>
                                    <td>
                                        <ul class="d-flex justify-content-center">
                                            <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                            <li>
                                                <form action="{{route('product.destroy', $product->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="text-danger border-0" type="submit"><i class="ti-trash"></i></button>
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
