@extends('layouts.main')
@section('content')
    <div class="mt-5" style="margin: 0 64px">
        <div class="row gap-4 gap-lg-0">
            <div class="col-12 col-lg-5">
                <img class="rounded-3" src="{{ asset('image/detail.png') }}" alt="" width="100%">
            </div>
            <div class="col-12 col-lg-7 px-lg-5">
                <div>
                    <h4 class="fw-bold fs-2">The Exquisite</h4>
                    <p class="text-sm text-muted" style="text-align: justify;">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel optio porro consectetur
                        accusantium ex. Maxime ipsum pariatur recusandae inventore? Labore, animi explicabo
                        exercitationem eligendi quam, nulla adipisci eveniet veniam minima sapiente tenetur quos, odio
                        sequi voluptatum iste voluptate. Enim quis voluptates quia necessitatibus quasi voluptate. Et
                        praesentium molestiae fugiat ea! Optio voluptatem quidem corrupti dolor voluptate repellat
                        placeat perferendis pariatur cumque quo laboriosam ut architecto earum mollitia, modi provident
                        voluptas quasi, dicta quas commodi soluta velit! Aut aspernatur voluptate ab repudiandae saepe
                        deleniti vitae exercitationem atque! Quod id quidem dignissimos, earum suscipit, magnam deleniti
                        nemo officia blanditiis quis voluptate necessitatibus soluta quo? Iste eaque ipsa repudiandae
                        voluptatibus sapiente, dolor aliquam perspiciatis, blanditiis incidunt explicabo eius velit
                        reiciendis quis. Doloribus, ipsa!
                    </p>
                </div>

                <hr>

                <div class="selection mb-4">
                    <h5 class="fw-bold mb-3">Schedule</h5>

                    <div class="row mb-3">
                        <div class="col">
                            <input type="checkbox" class="btn-check-day" id="btn-check-1-day" value="senin" autocomplete="off" hidden>
                            <label class="btn btn-outline-secondary w-100 btn-day" for="btn-check-1-day">Senin</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check-day" id="btn-check-2-day" value="selasa" autocomplete="off" hidden>
                            <label class="btn btn-outline-secondary w-100 btn-day" for="btn-check-2-day">Selasa</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check-day" id="btn-check-3-day" value="rabu" autocomplete="off" hidden>
                            <label class="btn btn-outline-secondary w-100 btn-day" for="btn-check-3-day">Rabu</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check-day" id="btn-check-4-day" value="kamis" autocomplete="off" hidden>
                            <label class="btn btn-outline-secondary w-100 btn-day" for="btn-check-4-day">Kamis</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check-day" id="btn-check-5-day" value="jumat" autocomplete="off" hidden>
                            <label class="btn btn-outline-secondary w-100 btn-day" for="btn-check-5-day">Jumat</label>
                        </div>

                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <input type="checkbox" class="btn-check-time" id="btn-check-1-time" value="pagi" autocomplete="off" hidden>
                            <label class="btn btn-outline-secondary w-100 btn-time" for="btn-check-1-time">Pagi</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check-time" id="btn-check-2-time" value="siang" autocomplete="off" hidden>
                            <label class="btn btn-outline-secondary w-100 btn-time" for="btn-check-2-time">Siang</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check-time" id="btn-check-3-time" value="malam" autocomplete="off" hidden>
                            <label class="btn btn-outline-secondary w-100 btn-time" for="btn-check-3-time">Malam
                            </label>
                        </div>

                    </div>


                    <div class="row mb-3">
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btn-check-2-seat" autocomplete="off">
                            <label class="btn btn-outline-secondary w-100 btn-seat" for="btn-check-2-seat">2
                                Seat</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btn-check-family-seat" autocomplete="off">
                            <label class="btn btn-outline-secondary w-100 btn-seat" for="btn-check-family-seat">Family
                                Seat</label>
                        </div>
                    </div>
                </div>

                <a href="my_booking.html">
                    <button class="btn btn-primary btn-lg w-100">Book Now</button>
                </a>

                <hr class="mt-5">

                <div class="mb-3">
                    <h5 class="fw-bold mb-3">Reviews</h5>

                    <div class="card shadow p-4">
                        <h5 class="fw-bold">Jane Doe</h5>
                        <p class="text-muted mb-3">
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."
                        </p>
                        ⭐️⭐️⭐️⭐️⭐️ (5)
                    </div>
                </div>

                <div class="container bg-body-tertiary border border-dark-subtle rounded-3 mt-5 pt-3 pb-3">
                    <form>
                        <h5 class="fw-bold mb-3">Add Your Review</h5>
                        <div class="rating d-flex justify-content-center gap-3 mb-3">
                            <span class="star fa-regular fa-star" data-value="1"></span>
                            <span class="star fa-regular fa-star" data-value="2"></span>
                            <span class="star fa-regular fa-star" data-value="3"></span>
                            <span class="star fa-regular fa-star" data-value="4"></span>
                            <span class="star fa-regular fa-star" data-value="5"></span>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px; resize: none;"></textarea>
                            <label for="floatingTextarea2">Describe your experience</label>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary btn-lg mt-3" type="submit">Add Review</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
