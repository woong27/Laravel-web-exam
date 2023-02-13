@extends('layouts.webstudy')

@section('content')
{{-- 내용 --}}
<div class="container">
    <div class="row">
        <div class="col-12 border border-1 mt-5">
            <h3>Lorem ipsum dolor sit amet.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptates saepe alias, odit debitis ducimus explicabo aliquam architecto vitae minus eius magnam natus unde eligendi! Provident dolorum cupiditate quisquam ratione?</p>
            <hr>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
              <button class="btn me-md-2 btn-secondary" type="button">Edit</button>
              <button class="btn btn-danger" type="button">Delete</button>
            </div>
        </div>

        <div class="row my-3">
          <div class="col-12">
            <div class="d-grid gap-2 col-3 mx-auto">
              <button class="btn btn-outline-danger" type="button">
                <i class="fa-solid fa-heart"></i>4
              </button>
            </div>
          </div>
        </div>

        <div class="row my-3">
          <div class="col-12">
            <ul class="list-group">
              <li class="list-group-item">An item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
              <li class="list-group-item">A fourth item</li>
              <li class="list-group-item">And a fifth one</li>
            </ul>

            <div class="input-group my-3">
              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn btn-primary" type="button">Submit</button>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection