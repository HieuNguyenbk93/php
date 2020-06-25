@extends('layout')

@section('content')
<br>
<div class="row">
    <div class="col col-md-6 offset-md-3">
        <h3>Đăng bài</h3>
        <form action="/qa/store" method="POST">
            @csrf
            <div class="form-group">
                <label>Tiêu đề</label>
                <input type="text" class="form-control" placeholder="Nhập tiêu đề" name="title">
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <input type="text" class="form-control" placeholder="Nhập nội dung" name="content">
            </div>
        <button type="submit" class="btn btn-primary">Đăng câu hỏi</button>
        <button type="button" class="btn btn-secondary">Quay lại</button>
        </form>
    </div>
</div>
<br>
@endsection