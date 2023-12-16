@extends('layouts.main')
@section('content')
    <div class="container mt-5">
        <div class="shadow p-3 mb-5 bg-white rounded" style="height: 88%;">
            <p class="text-center fw-bold" style=" font-size: 30px;">My Restaurant</p>
            <hr class="mt-3" style="width: 99%">
            <div class="row">

                <div class="col-md-7">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <label class="col align-content-center fw-bold">Restaurant Photo</label>
                        <div class="position-relative">
                            <div class="container border border-dark"
                                style="width: 100%px; height: 400px;  border-radius: 8px;">
                                <input type="file" id="photo" hidden>
                                <label class="col align-self-center" for="photo" id="photoLabel">
                                    <i class="fa-solid fa-square-plus fa-4x dark"></i>
                                </label>
                            </div>
                            <img class="position-absolute top-0 start-0" id="preview"
                                style="display: none; max-width: 100%; border-radius: 8px;" />
                        </div>
                    </div>
                    <div class="col-md-1"></div>

                </div>

                <div class="col-md-5">
                    <div class="mb-3">
                        <label for="nameRestaurant" class="form-label fw-bold">Name Restaurant</label>
                        <input type="text" class="form-control border-dark" id="nameRestaurant" name="name" value="{{ $restaurant->name }}"
                            style="border-radius: 8px; height: 48px; width: 95%;" placeholder="Restaurant Name">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="fw-bold">Description Restaurant</label>
                        <textarea name="Description" id="" cols="28" rows="5" name="Description" value="{{ $restaurant->description }}"
                            style="resize: none; border-radius: 8px; width: 95%; height: 145px;" placeholder="Restaurant Description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="fw-bold">Address Restaurant</label>
                        <textarea name="Address" id="" cols="28" rows="5" name="Address" value="{{ $restaurant->address }}"
                            style="resize: none; width: 95%; height: 145px; border-radius: 8px;" placeholder="Restaurant Address"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="fw-bold">Opening Day</label>
                        <br>
                        <div class="mb-2" style="display: inline-flex;">
                            <select class="me-2" name="" id="" value="{{ $restaurant->opening_day_from }}"
                                style="width: 130px; height: 30px; border-radius: 8px;">
                                <option selected>Select Day</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                            </select>
                            <label class="fw-bold">To</label>
                            <select class="ms-2" name="" id="" value="{{ $restaurant->closing_day_to }}"
                                style="width: 130px; height: 30px; border-radius: 8px;">
                                <option selected>Select Day</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="fw-bold">Opening Hour</label>
                        <br>
                        <div class="mb-2" style="display: inline-flex;">
                            <select class="me-2" name="" id="" value="{{ $restaurant->opening_hour_from }}"
                                style="width: 130px; height: 30px; border-radius: 8px;">
                                <option selected>Select Hour</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                            </select>
                            <label class="fw-bold">To</label>
                            <select class="ms-2" name="" id="" value="{{ $restaurant->closing_hour_to }}"
                                style="width: 130px; height: 30px; border-radius: 8px;">
                                <option selected>Select Hour</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="contact" class="form-label fw-bold">Contact Restaurant (Whatsapp)</label>
                        <input type="number" class="form-control border-dark" id="contact" name="contact" value="{{ $restaurant->contact }}"
                            style="border-radius: 8px; height: 48px; width: 95%;" placeholder="Contact Whatsapp">
                    </div>
                </div>

                <hr class="mt-3" style="width: 99%">
                <a href="{{ route('restaurant.store') }}" style="text-decoration: none;">
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-success " style="width: 15%;">
                            <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
                            Update Restaurant
                        </button>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
