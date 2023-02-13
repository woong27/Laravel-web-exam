@extends('layouts.webstudy')

@section('content')
{{-- 내용 --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            <label>Category Title</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary" type="button">생성</button>
            </div>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <ul class="list-group">
                <li class="list-group-item"><a href="{{url('/')}}/category/1/view">Movie</a></li>
                <li class="list-group-item">Music</li>
              </ul>
        </div>
    </div>
</div>
@endsection