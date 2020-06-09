@extends("bookstore_laravel.backend.layouts.main")

@section("title", "Danh sách books")

@section("content")

<div class="container">
    <div class="row">
        <h1>Quản lý sách</h1>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-md-12">
            <a href="{{ url("/backend/create") }}" class="btn btn-info">Thêm sách</a>
        </div>
        <div class="col-md-12">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sách</th>
                    <th scope="col">Giới thiệu</th>
                    <th scope="col">Giá bán</th>
                    <th scope="col">Hành động</th>
                </tr>
                </thead>
                <tbody>
                <!-- vì ta truyền data rồi thì biến $books sử dụng được để foreach  -->
                @foreach($books as $book)`
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->book_name}}</td>
                    <td>{{$book->book_intro}}</td>
                    <td>{{$book->book_price_core}}</td>
                    <td>
                        <a href="{{ url("/backend/edit/$book->id") }}" class="btn btn-warning">Sửa</a>
                        <a href="{{ url("/backend/delete/$book->id") }}" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                 @endforeach

                </tbody>

            </table>
            {{ $books->links() }}
        </div>
    </div>
</div>

@endsection
