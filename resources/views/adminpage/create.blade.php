
@extends('adminlayout.master')
@section('content')
<style>
    .main--content {
   position: absolute;
   top: 0;
   right: 0;
   height: 100%;
   width: calc(100% - 320px);
   padding: 0 40px;
   overflow-y: scroll;
   transition: .3s;
    }

</style>
<section class="main">
    <div class="main--content">
        <form action="{{ url('/admin') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label> 
            <input type="text" name="name" id="name" class="form-control">
            <br>
            <label>Category</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="1">Electrical</option>
                <option value="2">Plumbing</option>
                <option value="3">Cleaning</option>
                <option value="4">Painting.</option>
                <option value="5">Flooring</option>
                <option value="6">Carpentry</option>
              </select>
            <br>
            <label>Description</label>
            <input type="text" name="description" id="description" class="form-control">
            <br>
            <label>Image URL</label>
            <input type="text" name="imgurl" id="imgurl" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success">

    </div>
    
</section
@endsection