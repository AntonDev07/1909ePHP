@extends("bookstore_laravel.backend.layouts.main")

@section("title", "Tạo books")

@section("content")
<div class="row">
    <h1>Thêm sách</h1>
    <div class="col-md-12">
        <a href="{{ url("/backend/index")}}" class="btn btn-info">Quay về</a>
    </div>
    <div class="col-md-12">
        {{--@if($errors->any())--}}
            {{--<div class="alert alert-danger">--}}
                {{--<ul>--}}
                    {{--@foreach ($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--@endif--}}
        <form name="book" action="{{ url("/backend/create") }}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}
            <div class="form-group">
                <label>book_name</label>
                <input type="text" name="book_name" class="form-control " value="">

                @error('book_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label>book_slug</label>
                <input type="text" name="book_slug" class="form-control" value="">

                @error('book_slug')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label>book_intro</label>
                <textarea class="form-control" name="book_intro"></textarea>
            </div>
            <div class="form-group">
                <label>book_desc</label>
                <textarea class="form-control" name="book_desc"></textarea>
            </div>
            <div class="form-group">
                <label>book_main_image</label>
                <input type="file" name="book_main_image" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>book_images</label>
                <!-- thêm nhiều file bằng multiple vào thẻ input -->
                <input type="file" name="book_images[]" class="form-control" value="" multiple="multiple">

                @error('book_images[]')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>book_author</label>
                <input type="text" name="book_author" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>book_price_core</label>
                <input type="text" name="book_price_core" class="form-control" value="">

                @error('book_price_core')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>book_price_sell</label>
                <input type="text" name="book_price_sell" class="form-control" value="">

                @error('book_price_sell')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>book_status</label>
                <select name="book_status">
                    <option value="1">Xuất bản</option>
                    <option value="2">Không xuất bản</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tạo sách</button>
        </form>
    </div>
</div>
@endsection
