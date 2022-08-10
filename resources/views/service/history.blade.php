@foreach($histories as $item)
{{-- <div class="reveal card shadow p-0 mx-4 my-2" style="width: 18rem;"> --}}

    <div class="reveal card shadow p-0 pb-2 m-4" style="width: 18rem;" >
        <img src="{{$item->imgurl}}" alt="...">
            <div class="card-body">
                <h5 class="card-title ">{{$item->name}} </h5>
                <p class="card-text p-1"><b>Date : {{$item->created_at}}</b></p>
                <a href="{{ url('/checkout', ['id' => $item->service_id]) }}" class="btn btn-primary">Book Again</a>
            </div>
        </div>
{{-- </div> --}}
@endforeach
