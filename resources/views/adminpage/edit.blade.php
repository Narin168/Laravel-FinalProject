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
        <div class="card-body">
            
      
            <form action="{{ url('admin/' .$services->id) }}" method="post">
              {!! csrf_field() !!}
              @method("PATCH")
              <input type="hidden" name="id" id="id" value="{{$services->id}}" id="id" />
              <label>Name</label> 
              <input type="text" name="name" id="name"value="{{$services->name}}" class="form-control">
              <br>
              <label>Category</label>
              <select name="category_id" id="category_id"  class="form-control">
                  <option value="1">Electrical</option>
                  <option value="2">Plumbing</option>
                  <option value="3">Cleaning</option>
                  <option value="4">Painting.</option>
                  <option value="5">Flooring</option>
                  <option value="6">Carpentry</option>
                </select>
              <br>
              <label>Description</label>
              <input type="text" name="description" id="description"value="{{$services->description}}" class="form-control">
              <br>
              <label>Image URL</label>
              <input type="text" name="imgurl" id="imgurl"value="{{$services->imgurl}}" class="form-control">
              <input type="submit" value="Save" class="btn btn-success">
          </form>
        
        </div>

    </div>
    
</section
@endsection