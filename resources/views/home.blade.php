@extends('template')
@section('tittle', 'Home')
@section('content')

<div class="container-xxl py-6 pb-5" id="team">
    <div class="container">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h1 class="display-5 mb-0">Items</h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="https://www.linkedin.com/in/jorgerosales88/" target="_blank">Get in touch!</a>
            </div>
        </div>
        <div class="row g-4">
            @if (count($catalog_data) > 0)
                @foreach($catalog_data as $item)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <img src="{{$item->image}}" alt="{{ $item->name }}" class="img-fluid rounded">
                            <div class="team-text bg-white rounded-end p-4">
                                <div>
                                    <h5>{{$item->name}}</h5>
                                    <span>{{$item->description}}</span>
                                    <i class="fa fa-arrow-right fa-2x text-primary"></i>
                                </div>
                            </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-lg-12">
                    <h1 class="display-5 mb-0">No items found, please add something to the database.</h1>
                </div>
            @endif

        </div>
    </div>
</div>

@endsection