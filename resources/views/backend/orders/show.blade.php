@extends('backend.layouts.master')

@section('title', 'Tags Details')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">Show Tag</div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('orders.index') }}" class="btn btn-sm btn-outline-primary">List</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <th>{{ $order->product->title }}</th>
                        </tr>

                        <tr>
                            <th>Products Information </th>
                            <th>
                            @foreach($productInfo as $key=>$value)
                                {{ $key .' : ' . $value }} <br>
                                @endforeach

                            </th>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

