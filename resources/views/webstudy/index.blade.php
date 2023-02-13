@extends('layouts.webstudy')

@section('content')
  <!-- 내용 -->
  <div class="container">
    <div class="row mt-3">
      <div class="col-12">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="{{url('/')}}/create">
            <button class="btn btn-success" type="button">새로운포스팅</button>
          </a>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-12">
        <h4>Movie</h4>
        {{-- bootstrap list-group & badge 답글,좋아요 & font awesome--}}
        <ul class="list-group">
          <li class="list-group-item">
             <a href="{{url('/')}}/1/view">A second item</a> 
            <span class="badge text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
            <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>4</span>
            <br>
            <small>2023-01-16 | by 홍길동</small>
          </li>
          <li class="list-group-item">
            A second item
            <span class="badge text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
            <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>4</span>
            <br>
            <small>2023-01-16 | by 홍길동</small>
          </li>
          <li class="list-group-item">
            A second item
            <span class="badge text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
            <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>4</span>
            <br>
            <small>2023-01-16 | by 홍길동</small>
          </li>
        </ul>
      </div>
      {{-- bootstrap button & 중앙정렬버튼 --}}
      <div class="col-12 my-3">
        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="button" class="btn btn-dark">All Postings of Movie Category</button>
        </div>
      </div>
    </div>
  </div>

@endsection