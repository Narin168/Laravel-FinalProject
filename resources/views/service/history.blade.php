@foreach($histories as $item)
{{-- <div class="reveal card shadow p-0 mx-4 my-2" style="width: 18rem;"> --}}
    
    <div class=" card shadow p-0 mx-4 my-2" style="width: 18rem;">
        <img src="{{$item->imgurl}}" alt="...">
        <h5 class="card-title pt-2">{{$item->name}} </h5>
        <p class="card-text pt-2">{{$item->description}}  <br><b>Date : {{$item->created_at}}</b></p>
        <a href="{{ url('/checkout', ['id' => $item->service_id]) }}" class="btn btn-primary ">Book Again</a>
    </div>
{{-- </div> --}}
@endforeach