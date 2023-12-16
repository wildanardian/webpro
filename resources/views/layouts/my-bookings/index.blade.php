@extends('layouts.main')
@section('content')
    @if (count($bookings) == 0)
        <div class="col container mt-5">
            <div class="shadow p-3 mb-5 bg-white rounded" style="width: 1325px;">
                <p class="text-center fw-bold" style="font-size: 30px;">My Bookings</p>
                <hr class="mt-3" style="width: 99%">
                <p class="text-center fw-bold" style="font-size: 30px; color: #f2f2f2;"> YOU DONT HAVE ANY BOOKINGS</p>

                <hr class="mt-3" style="width: 99%;">

                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('my-bookings.create') }}" style="text-decoration: none;">
                        <button class="btn btn-success " style="width: 15%;">
                            <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
                            Add Booking
                        </button>
                    </a>
                </div>

                <div class="bottom" style="margin-top: 500px;">
                    <footer>
                        <hr class="mt-3" style="width: 99%;">
                    </footer>
                </div>
            </div>
        </div>
    @else
        @foreach ($bookings as $booking)
            <div class="mt-5 " style="margin: 0 64px; min-height: 60vh;">
                <div class="row gap-4">
                    <div class="col-12">
                        <div class="position-relative card p-4 border">
                            <div class="d-flex flex-wrap gap-4">
                                <img class="rounded-3" src="Util/detail.png" alt="" width="200">

                                <div class="flex-fill flex-shrink">
                                    <div class="d-inline-flex flex-column justify-content-between h-100">
                                        <div>
                                            <h5 class="fw-bold">{{ $booking->restaurant_name }}/h5>

                                            <div class="d-flex align-items-center gap-2 mb-3">
                                                <div class="card px-2 py-1 text-center">{{ $booking->day }}</div>
                                                <div class="card px-2 py-1 text-center">{{ $booking->time }}</div>
                                                <div class="card px-2 py-1 text-center">{{ $booking->seat_type }}</div>
                                            </div>
                                        </div>

                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <button type="button" class="btn btn-outline-secondary">Cancel Booking</button>
                                            <button type="button" class="btn btn-success">Confirm RSVP</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <span class="position-absolute" style="opacity: 0.5; top: 12px; right: 12px;">
                                Seat Number: {{ $booking->seat_number }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection
