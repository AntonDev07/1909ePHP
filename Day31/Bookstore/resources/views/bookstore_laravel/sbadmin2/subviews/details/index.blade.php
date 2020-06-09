@extends('bookstore_laravel.sbadmin2.layouts.app')


@section('title', 'Book')

@section('content')

    {{-- Tiếp tục thêm view blade create, edit, delete sau khi tạo xong database  --}}



    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Đơn hàng</h1>
        <a href="{{ url('/backend/sbadmin2/index') }}" class="h3 mb-0 text-gray-800">Quay về</a>

    </div>
    <div class="row">


        <!-- Area Chart -->
        <div class="col-xl-6 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                    <h6 class="m-0 font-weight-bold text-primary">Order Details</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table">
                        @if( $order )

                        <tr>
                            <th scope="col">Date added</th>
                            <td>{{ $order->created_at }}</td>
                        </tr>

                        <tr>
                            <th scope="col">Payment method</th>
                            <td>{{ $order->payment_method }}</td>
                        </tr>

                        <tr>
                            <th scope="col">Payment address</th>
                            <td>{{ $order->payment_address }}</td>
                        </tr>

                        <tr>
                            <th scope="col">Status</th>
                            <td>
                                @php
                                    if ( isset($order->order_status_id) ) {
                                      $array = array(
                                          0 => 'Từ chối',
                                          1 => 'Chờ duyệt',
                                          2 => 'Đang vận chuyển',
                                          3 => 'Hoàn tất'
                                      );
                                    }
                                @endphp
                                {{$array[$order->order_status_id]}}
                            </td>

                        </tr>

                        <tr>
                            <th scope="col">Total</th>
                            <td>{{$order->total}}</td>
                        </tr>
                        @endif
                    </table>


                </div>
            </div>
        </div>


        <div class="col-xl-6 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Shipping address</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table">
                        @if($order)

                        <tr>
                            <th scope="col">Shipping firstname</th>
                            <th scope="row">{{$order->shipping_firstname}}</th>
                        </tr>

                        <tr>
                            <th scope="col">Shipping lastname</th>
                            <td>{{$order->shipping_firstname}}</td>
                        </tr>

                        <tr>
                            <th scope="col">Shipping address</th>
                            <td>{{$order->shipping_address}}</td>
                        </tr>

                        <tr>
                            <th scope="col">Shipping company</th>
                            <td>{{$order->shipping_company}}</td>
                        </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Orders Books</h6>
                </div>
                <div class="card-body">
                    <!-- Table Orrder product here -->
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Book name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($order_books)
                            @foreach($order_books as $order_book)
                                <tr>
                                    <th scope="row">{{$order_book->name}}</th>
                                    <td>{{$order_book->slug}}</td>
                                    <td>{{$order_book->desc}}</td>
                                    <td>{{$order_book->price}}</td>
                                    <td>{{$order_book->quantity}}</td>
                                    <td>{{$order_book->total}}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>

@endsection



