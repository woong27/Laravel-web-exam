@extends('layouts.webstudy')

@section('inside_head_tag')
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
@endsection

@section('content')
{{-- 내용 --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            <div id="editor"></div>
        </div>
    </div>
</div>
@endsection

@section('before_body_end_tag')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection