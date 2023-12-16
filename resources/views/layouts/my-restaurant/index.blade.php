@extends('layouts.main')
@section('content')
    <div class="col container mt-5">
        <div class="shadow p-3 mb-5 bg-white rounded">
            <p class="text-center fw-bold" style="font-size: 30px;">My Restaurant</p>
            <hr class="mt-3" style="width: 99%">
            @if ($restaurants == null)
                <p class="text-center fw-bold" style="font-size: 30px; color: #f2f2f2;"> YOU DONT HAVE ANY RESTAURANT</p>
            @endif

            <hr class="mt-3" style="width: 99%;">

            {{-- @if (Auth::user()->restaurant == null)
                <a href="{{ route('my-restaurant.create') }}" style="text-decoration: none;">
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-success " style="width: 15%;">
                            <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
                            Add Restaurant
                        </button>
                    </div>
                </a>
            @else
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('my-restaurant.edit', Auth::user()->restaurant->id) }}" style="text-decoration: none;">
                        <button class="btn btn-success " style="width: 15%;">
                            <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
                            Edit Restaurant
                        </button>
                    </a>
                </div>
            @endif --}}

            <div class="d-flex justify-content-center align-items-center">
                <a href="{{ route('restaurant.create') }}" style="text-decoration: none;">
                    <input class="btn btn-success " style="" value="Add Restaurant">
                    <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
                    </input>
                </a>
            </div>

            <div class="container mt-3">
                <div class="row">
                    @foreach ($restaurants as $restaurant)
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="" class="card-img-top" alt="Gambar Restoran">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $restaurant->name }}</h5>
                                    <p class="card-text">{{ $restaurant->address }}</p>
                                    <p class="card-text">{{ $restaurant->contact }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="bottom" style="margin-top: 500px;">
                <footer>
                    <hr class="mt-3" style="width: 99%;">
                </footer>
            </div>

        </div>
    </div>
@endsection
