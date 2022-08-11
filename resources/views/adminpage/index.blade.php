@extends('adminlayout.master')
@section('content')
<style>
     .main--content {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: calc(100% - 300px);
    /* padding: 0 40px; */
    overflow-y: scroll;
    transition: .3s;
     }

</style>
    <div class="main--content">
        <div class="row">
            <div class="col-md-12">
                {{-- <div class="card"> --}}
                    <div class="card-body pt-5 pl-5">
                        <a href="{{ url('/admin/create') }}" class="btn btn-success btn-sm " title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Category ID</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->category_id }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td><img src="{{ $item->imgurl }}" alt=""width="100px"></td>
                                        <td>
                                            <a href="{{ url('/admin/' . $item->id) }}" title="View Service"><button class="btn btn-info btn-sm m-1"><i class="fa fa-eye" aria-hidden="true"></i>  </button></a>
                                            <a href="{{ url('/admin/' . $item->id . '/edit') }}" title="Edit SErvice"><button class="btn btn-primary btn-sm m-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  </button></a>
                                            <form method="POST" action="{{ url('/admin' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm m-1" title="Delete Service" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection