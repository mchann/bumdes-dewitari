@extends('layout.main')

@section('content')
    {{-- Expeditions Packets start --}}
    <div class="container-fluid pt-4 pb-5 px-5">
        <div class="container">
            {{-- Teks --}}
            <div class="row justify-content-center gap-3">
                <div class="container">
                    <div class="text-center mb-3">
                        <h3 class="text-primary text-uppercase mb-4" style="letter-spacing: 3px;">Study Trip Packages</h3>
                    </div>

                    <div class="d-flex flex-wrap justify-content-center px-3 gap-3">
                        {{-- Card 1 --}}
                        <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                            <div class="text-dark" style="text-decoration: none;">
                                <img class="card-img-top rounded" src="https://dewitari.com/storage/img/01JCAV8BBMJG1NX6XEBGA3H1SJ.webp" alt="Study to Tamansari 1">
                                <div class="card-body">
                                    <h4>Study to Tamansari 1</h4>
                                    <p class="text-secondary" style="min-height: 75px">Learn to make <strong>traditional food</strong> and explore the wonders of <strong>Seruni tourism</strong>.</p>
                                    <hr>
                                    <div class="row align-items-center px-2">
                                        <div class="col-6">
                                            <span class="fac-text">
                                                <i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3" style="color: #9ad3ff;"></i>Meal 1x
                                            </span><br>
                                            <span class="fac-text">
                                                <i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Snacks 2x
                                            </span><br>
                                            <span class="fac-text">
                                                <i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Merchandise
                                            </span><br>
                                        </div>
                                        <div class="text-center col-6">
                                            <p class="price-text mb-1 fw-bold">1 Days</p>
                                            <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                                <span class="price-text fw-bold d-block">Rp 220.000/Pax</span>
                                                <span class="price-text-2 fw-bold text-muted d-block">Min book 20 pax</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Card 2 --}}
                        <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                            <div class="text-dark" style="text-decoration: none;">
                                <img class="card-img-top rounded" src="https://dewitari.com/storage/img/01JCAVDT0T0SQ7XPJ0WA5FSDTJ.webp" alt="Study to Tamansari 2">
                                <div class="card-body">
                                    <h4>Study to Tamansari 2</h4>
                                    <p class="text-secondary" style="min-height: 75px">Immerse yourself in <strong>Osing culture</strong>, learn to make <strong>traditional food</strong>, create beautiful <strong>Banyuwangi batik</strong>, and explore the wonders of <strong>Seruni tourism</strong>.</p>
                                    <hr>
                                    <div class="row align-items-center px-2">
                                        <div class="col-6">
                                            <span class="fac-text">
                                                <i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3" style="color: #9ad3ff;"></i>Meal 4x
                                            </span><br>
                                            <span class="fac-text">
                                                <i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Snacks 2x
                                            </span><br>
                                            <span class="fac-text">
                                                <i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Merchandise
                                            </span><br>
                                        </div>
                                        <div class="text-center col-6">
                                            <p class="price-text mb-1 fw-bold">2 Days &amp; 1 Night(s)</p>
                                            <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                                <span class="price-text fw-bold d-block">Rp 620.000/Pax</span>
                                                <span class="price-text-2 fw-bold text-muted d-block">Min book 20 pax</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Private Trip Packages --}}
            <div class="container">
                <div class="text-center mb-3">
                    <h3 class="text-primary text-uppercase mb-4" style="letter-spacing: 3px;">Private Trip Packages</h3>
                </div>

                <div class="d-flex flex-wrap justify-content-center px-3 gap-3">
                    {{-- Card 1 --}}
                    <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                        <div class="text-dark" style="text-decoration: none;">
                            <img class="card-img-top rounded" src="https://dewitari.com/storage/img/01JCAVEKTS7Z3A7BH2RZZ2Z7E9.webp" alt="Private Trip - Explore Ijen">
                            <div class="card-body">
                                <h4>Private Trip - Explore Ijen</h4>
                                <p class="text-secondary" style="min-height: 75px">Discover the mesmerizing <strong>Ijen Blue Fire</strong>, witness the breathtaking <strong>sunrise over Ijen</strong>, and marvel at the beauty of <strong>Tosca Lake</strong>.</p>
                                <hr>
                                <div class="row align-items-center px-2">
                                    <div class="col-6">
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3" style="color: #9ad3ff;"></i>Homestay</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Meal 1x</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Tour Guide</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Health Insurance</span><br>
                                    </div>
                                    <div class="text-center col-6">
                                        <p class="price-text mb-1 fw-bold">2 Days &amp; 1 Night(s)</p>
                                        <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                            <span class="price-text fw-bold d-block">Rp 1.400.000/Pax</span>
                                            <span class="price-text-2 fw-bold text-muted d-block">Min book 1 pax</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card 2 --}}
                    <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                        <div class="text-dark" style="text-decoration: none;">
                            <img class="card-img-top rounded" src="https://dewitari.com/storage/img/01JCAVGZR5XJAE9BCQ5A043QVS.webp" alt="Private Trip - Explore Seruni">
                            <div class="card-body">
                                <h4>Private Trip - Explore Seruni</h4>
                                <p class="text-secondary" style="min-height: 75px">Discover the mesmerizing <strong>Ijen Blue Fire</strong>, witness <strong>sunrise over Ijen</strong>, the beauty of <strong>Tosca Lake</strong>, and enjoy the serene natural springs of <strong>Sendang Seruni</strong>.</p>
                                <hr>
                                <div class="row align-items-center px-2">
                                    <div class="col-6">
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3" style="color: #9ad3ff;"></i>Homestay</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Meal 1x</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Tour Guide</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Health Insurance</span><br>
                                    </div>
                                    <div class="text-center col-6">
                                        <p class="price-text mb-1 fw-bold">2 Days &amp; 1 Night(s)</p>
                                        <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                            <span class="price-text fw-bold d-block">Rp 1.710.000/Pax</span>
                                            <span class="price-text-2 fw-bold text-muted d-block">Min book 1 pax</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card 3 --}}
                    <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                        <div class="text-dark" style="text-decoration: none;">
                            <img class="card-img-top rounded" src="https://dewitari.com/storage/img/01JCAVGA4CSXG5MEX4KWG3YQFK.webp" alt="Private Trip - Explore Ijen Terracotta">
                            <div class="card-body">
                                <h4>Private Trip - Explore Ijen Terracotta</h4>
                                <p class="text-secondary" style="min-height: 75px">Discover the mesmerizing <strong>Ijen Blue Fire</strong>, witness <strong>sunrise over Ijen</strong>, the beauty of <strong>Tosca Lake</strong>, and immerse yourself in the cultural richness of <strong>Taman Gandrung Terakota</strong>, featuring live performances of the <strong>Gandrung dance</strong>.</p>
                                <hr>
                                <div class="row align-items-center px-2">
                                    <div class="col-6">
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3" style="color: #9ad3ff;"></i>Homestay</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Meal 1x</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Tour Guide</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Health Insurance</span><br>
                                    </div>
                                    <div class="text-center col-6">
                                        <p class="price-text mb-1 fw-bold">2 Days &amp; 1 Night(s)</p>
                                        <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                            <span class="price-text fw-bold d-block">Rp 1.800.000/Pax</span>
                                            <span class="price-text-2 fw-bold text-muted d-block">Min book 1 pax</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card 4 --}}
                    <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                        <div class="text-dark" style="text-decoration: none;">
                            <img class="card-img-top rounded" src="https://dewitari.com/storage/img/01JCAVJYZDNJQY5N7C0852B25M.webp" alt="Private Trip - Explore DEWITARI">
                            <div class="card-body">
                                <h4>Private Trip - Explore DEWITARI</h4>
                                <p class="text-secondary" style="min-height: 75px">Embark on the ultimate adventure, visiting <strong>Ijen Crater</strong>, the tranquil <strong>Sendang Seruni</strong>, and the enchanting <strong>Taman Gandrung Terakota</strong>.</p>
                                <hr>
                                <div class="row align-items-center px-2">
                                    <div class="col-6">
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3" style="color: #9ad3ff;"></i>Homestay</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Meal 1x</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Tour Guide</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Health Insurance</span><br>
                                    </div>
                                    <div class="text-center col-6">
                                        <p class="price-text mb-1 fw-bold">2 Days &amp; 1 Night(s)</p>
                                        <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                            <span class="price-text fw-bold d-block">Rp 1.900.000/Pax</span>
                                            <span class="price-text-2 fw-bold text-muted d-block">Min book 1 pax</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Group Trip Packages --}}
            <div class="container">
                <div class="text-center mb-3">
                    <h3 class="text-primary text-uppercase mb-4" style="letter-spacing: 3px;">Group Trip Packages</h3>
                </div>

                <div class="d-flex flex-wrap justify-content-center px-3 gap-3">
                    {{-- Card 1 --}}
                    <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                        <div class="text-dark" style="text-decoration: none;">
                            <img class="card-img-top rounded" src="https://dewitari.com/storage/img/01JCAVMPSGZSV3F4SBQV4TFAEJ.webp" alt="Group Trip - Explore Ijen 1">
                            <div class="card-body">
                                <h4>Group Trip - Explore Ijen 1</h4>
                                <p class="text-secondary" style="min-height: 75px">Discover the mesmerizing <strong>Ijen Blue Fire</strong>, witness the breathtaking <strong>sunrise over Ijen</strong>, and marvel at the beauty of <strong>Tosca Lake</strong>.</p>
                                <hr>
                                <div class="row align-items-center px-2">
                                    <div class="col-6">
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3" style="color: #9ad3ff;"></i>Homestay</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Meal 1x</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Tour Guide</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Health Insurance</span><br>
                                    </div>
                                    <div class="text-center col-6">
                                        <p class="price-text mb-1 fw-bold">2 Days &amp; 1 Night(s)</p>
                                        <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                            <span class="price-text fw-bold d-block">Rp 590.000/Pax</span>
                                            <span class="price-text-2 fw-bold text-muted d-block">Min book 4 pax</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card 2 --}}
                    <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                        <div class="text-dark" style="text-decoration: none;">
                            <img class="card-img-top rounded" src="https://dewitari.com/storage/img/01JCAVNEXNTH5JK0VR0P1Q6DZW.webp" alt="Group Trip - Explore Ijen 2">
                            <div class="card-body">
                                <h4>Group Trip - Explore Ijen 2</h4>
                                <p class="text-secondary" style="min-height: 75px">Discover the mesmerizing <strong>Ijen Blue Fire</strong>, witness the breathtaking <strong>sunrise over Ijen</strong>, and marvel at the beauty of <strong>Tosca Lake</strong>.</p>
                                <hr>
                                <div class="row align-items-center px-2">
                                    <div class="col-6">
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3" style="color: #9ad3ff;"></i>Homestay</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Meal 1x</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Tour Guide</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Health Insurance</span><br>
                                    </div>
                                    <div class="text-center col-6">
                                        <p class="price-text mb-1 fw-bold">2 Days &amp; 1 Night(s)</p>
                                        <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                            <span class="price-text fw-bold d-block">Rp 630.000/Pax</span>
                                            <span class="price-text-2 fw-bold text-muted d-block">Min book 20 pax</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card 3 --}}
                    <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                        <div class="text-dark" style="text-decoration: none;">
                            <img class="card-img-top rounded" src="https://dewitari.com/storage/img/01JCAVP1VY908DR33R90HQZBGH.webp" alt="Group Trip - Explore DEWITARI 1">
                            <div class="card-body">
                                <h4>Group Trip - Explore DEWITARI 1</h4>
                                <p class="text-secondary" style="min-height: 75px">Embark on the ultimate adventure, visiting <strong>Ijen Crater</strong>, the tranquil <strong>Sendang Seruni</strong>, and the enchanting <strong>Taman Gandrung Terakota</strong> with live performances of the Gandrung dance.</p>
                                <hr>
                                <div class="row align-items-center px-2">
                                    <div class="col-6">
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Meal 1x</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Snack 1x</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Tour Guide</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Health Insurance</span><br>
                                    </div>
                                    <div class="text-center col-6">
                                        <p class="price-text mb-1 fw-bold">1 Days</p>
                                        <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                            <span class="price-text fw-bold d-block">Rp 415.000/Pax</span>
                                            <span class="price-text-2 fw-bold text-muted d-block">Min book 20 pax</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card 4 --}}
                    <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                        <div class="text-dark" style="text-decoration: none;">
                            <img class="card-img-top rounded" src="https://dewitari.com/storage/img/01JCAVPPTQ7R3NM04RSH443KMG.webp" alt="Group Trip - Explore DEWITARI 2">
                            <div class="card-body">
                                <h4>Group Trip - Explore DEWITARI 2</h4>
                                <p class="text-secondary" style="min-height: 75px">Embark on the ultimate adventure, visiting <strong>Ijen Crater</strong>, the tranquil <strong>Sendang Seruni</strong>, and the enchanting <strong>Taman Gandrung Terakota</strong> with live performances of the Gandrung dance.</p>
                                <hr>
                                <div class="row align-items-center px-2">
                                    <div class="col-6">
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3" style="color: #9ad3ff;"></i>Homestay</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Meal 3x</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Snack 1x</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Tour Guide</span><br>
                                        <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2" style="color: #9ad3ff;"></i>Health Insurance</span><br>
                                    </div>
                                    <div class="text-center col-6">
                                        <p class="price-text mb-1 fw-bold">2 Days &amp; 1 Night(s)</p>
                                        <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                            <span class="price-text fw-bold d-block">Rp 1.030.000/Pax</span>
                                            <span class="price-text-2 fw-bold text-muted d-block">Min book 20 pax</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Expeditions Packets end --}}
@endsection