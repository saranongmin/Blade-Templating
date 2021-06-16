@extends('backend.layouts.master')

@section('title', 'orders')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">Orders</div>
                <div class="col-md-6 text-right">

                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
{{--                id="dataTable"--}}
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL#</th>
                        <th>Name</th>
                        <th style="width: 150px; text-align: center;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(session()->has('status'))
                        <div class="alert alert-success">
                            <p>{{ session('status') }}</p>
                        </div>
                    @endif
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ ++$sl }}</td>
                        <td>{{ $order->product->title }}</td>
                        <td>
                            <a href="{{route('orders.show',$order->id)}}" class="btn btn-sm btn-outline-info">Show</a>
                            <form action="{{route('orders.destroy',$order->id)}}" method="post" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are You Sure Want To Delete?')">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{--{{ $orders->links() }}--}}
        </div>

    </div>

</div>
@endsection

@push('css')
    <!-- Custom styles for this page -->
    <link href="{{ asset('ui/backend') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@push('script')
    <!-- Page level plugins -->
    <script src="{{ asset('ui/backend') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('ui/backend') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('ui/backend') }}/js/demo/datatables-demo.js"></script>
@endpush
