
@foreach($services as $item)
<div class="card shadow p-0 mx-4 my-2" style="width: 18rem;">
    <img src="{{$item->imgurl}}" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$item->name}} </h5>
        <p class="card-text">{{$item->description}}</p>
        <a href="{{ url('/checkout', ['id' => $item->id]) }}" class="btn btn-primary">Book Now</a>
    </div>
</div>
@endforeach
