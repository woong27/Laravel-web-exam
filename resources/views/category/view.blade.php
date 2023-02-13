@extends('layouts.webstudy')

@section('content')
{{-- 내용 --}}
<div class="container">
    {{-- 카테고리 수정, 삭제 --}}
    <div class="row my-3">
        <div class="col-12">
            {{-- 수정기능 --}}
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="Movie">
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-12">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-info" type="submit">수정</button>
                <button class="btn btn-danger" type="submit">삭제</button>
            </div>
        </div>
    </div>
</div>
@endsection