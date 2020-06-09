@extends("bookstore_laravel.backend.layouts.main")

@section("title", "Xóa books")

@section("content")
<div class="row">
    <h1>Xóa sách</h1>
    <div class="col-md-12">
        <a href="{{ url("/backend/index") }}" class="btn btn-info">Quay về</a>
    </div>
    <div class="col-md-12">


        <form name="book" action="{{ url("/backend/delete/$book->id") }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Bạn muốn xóa :{{$book->book_name}} ?</label>

            </div>

            <button type="submit" class="btn btn-danger">Xóa sách</button>
        </form>
    </div>
</div>
@endsection

