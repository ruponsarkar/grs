@extends('layout') @section('title', 'Home') @section('content')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<style>
    #result {
        display: flex;
        gap: 12px;
        flex-direction: row;
        width: 100%;
        flex-wrap: wrap;
    }

    #result .result-field {
        display: flex;
        flex-direction: column;
        width: 46%;
        padding: 7px 14px;
    }
</style>
<div class="container-fluid ">

    <div class="">

        <div class="row pt-2">
            <div class="col-xl-5">
                <div class="card-c">
                    <div class="h-box">
                        <div class="h-box-text p-2">
                           Mission and Vision
                        </div>
                    </div>

                    <div class="row py-2">
                        <div class="col-12 text-center p-3">
                            <h5>Our Mission</h5>
                        <div class="px-2" style="text-align: justify">
                            At IRASS Publisher, our mission is to empower authors and researchers by providing a platform for their unique perspectives. We believe in fostering creativity and promoting voices that reflect the richness of human experience.
                        </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-12 text-center p-3">
                            <h5> Our Vision</h5>
                        <div class="px-2" style="text-align: justify">
                            We envision a world where diverse stories and groundbreaking research thrive, enriching the literary and academic landscape. We aim to be a leading publisher recognized for our commitment to quality, innovation, and inclusivity.
                        </div>
                        </div>
                    </div>


                    <div class="row py-2">
                        <div class="col-12 text-center p-3">
                            <h5>Open Access Policy</h5>
                            <div class="px-2" style="text-align: justify">
                            IRASS Publisher commits to providing open access to all its published content. Our policy
                            ensures that research articles are freely accessible to the public without subscription
                            fees. Authors retain copyright while allowing unrestricted distribution and reproduction in
                            any medium, provided the original work is properly cited. By removing access barriers, IRASS
                            aims to foster a more inclusive and collaborative scientific community.
                            </div>
                        </div>
                    </div>
                    <!-- </section> -->
                </div>
            </div>

            <div class="col-xl-7">
                <section id="hero">
                    <div class="hero-container">
                        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                            <div class="carousel-inner" role="listbox">

                                <!-- Slide 1 -->
                                <div class="carousel-item active" style="background-image: url(assets/img/slide/3.jpg)">
                                    <div class="carousel-container">
                                        <div class="carousel-content">
                                            <h2 class="animate__animated animate__fadeInDown">Welcome to
                                                <span>IRASS Publishers</span>
                                            </h2>
                                            <p class="animate__animated animate__fadeInUp">Writing is a solitary
                                                endeavor,
                                                being an author is not
                                            </p>
                                            <a href=""
                                                class="btn-get-started animate__animated animate__fadeInUp">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 2 -->
                                <div class="carousel-item" style="background-image: url(assets/img/slide/1.jpg)">
                                    <div class="carousel-container">
                                        <div class="carousel-content">
                                            <h2 class="animate__animated fanimate__adeInDown">IRASS
                                                <span>Publishers</span>
                                            </h2>
                                            <p class="animate__animated animate__fadeInUp">Silence is the death of a
                                                story
                                            </p>
                                            <a href=""
                                                class="btn-get-started animate__animated animate__fadeInUp">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 3 -->
                                <div class="carousel-item" style="background-image: url(assets/img/slide/4.jpg)">
                                    <div class="carousel-container">
                                        <div class="carousel-content">
                                            <h2 class="animate__animated animate__fadeInDown">IRASS <span>Publishers
                                                </span></h2>
                                            <p class="animate__animated animate__fadeInUp">lets you feed your inner
                                                control
                                                freak
                                            </p>
                                            <a href=""
                                                class="btn-get-started animate__animated animate__fadeInUp">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                            </a>

                            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                            </a>

                        </div>
                    </div>
                </section>

                <div class="col-12 pt-3">
                    <div class="card-c">
                        <section id="indexing" class="indexing">
                            <div class="h-box">
                                <div class="h-box-text p-2">
                                    Indexing
                                </div>
                            </div>
                            <div class="container" >
                                <div class="indexing-slider swiper">
                                    <div class="swiper-wrapper align-items-center">

                                        @foreach ($indexings as $data)
                                            <div class="swiper-slide">
                                                <img class="img-fluid"
                                                    src="{{ url('assets/indexing/img/' . $data->img) }}"
                                                    alt="Image"
                                                    style="height: 140px; width: 140px; object-fit: contain;">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>

            </div>
        </div>



        <div class="row  py-4">


            <div class="col-md-8">
                <div class="card-c">
                    <div class="h-box">
                        <div class="h-box-text p-2">
                            Latest Article
                        </div>
                    </div>
                    <div class="">
                        @foreach ($latestArticle as $key => $data)
                            <div class="col-lg-12 p-2 d-lg-none d-xl-block">
                                <div class="swiper-slide">
                                    <div class='card'>
                                        <div class="d-flex justify-content-between">
                                            <div class='title'> {{ $key + 1 }}. {{ Str::limit($data->name, 70) }}
                                            </div>
                                            <div class='small p-2'><i class="bi bi-download text-info"></i>
                                                {{ $data->count }}</div>
                                        </div>

                                        <p class="card-icon">
                                            <i class="bi bi-person-circle text-info"></i>
                                            {{ Str::limit($data->aname, 30) }}
                                            <br>
                                            <i class="bi bi-tag-fill text-warning"></i> {{ $data->designation }}
                                        </p>
                                        {{--
                                    <p class='description' style="font-size: 2rem;">
                                        <i class="bi bi-download text-primary"></i>
                                    </p> --}}

                                        <div class="m-3">
                                            <div class="d-flex gap-2">
                                                <div>
                                                    <button class="btn btn-sm btn-success px-2 text-capitalize"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-{{ $data->id }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapseExample-{{ $data->id }}">Abstract</button>
                                                </div>

                                                <div>
                                                    {{-- <button class="btn btn-sm btn-success px-2 text-capitalize">PDF</button> --}}
                                                    <a class="btn btn-sm btn-success px-2 text-capitalize"
                                                        role="button" onclick="onDowload({{ $data->id }})"
                                                        href="{{ URL('assets/articles/' . $data->file) }}"
                                                        download="{{ $data->fileOriginalName ? $data->fileOriginalName : $data->name }}">
                                                        PDF
                                                    </a>
                                                </div>

                                                
                                                <div>
                                                    <a role="button" href="article/{{ $data->slug }}"
                                                        class="btn btn-sm btn-success px-2 text-capitalize">View Article</a>
                                                </div>



                                            </div>
                                            <div class="collapse" id="collapseExample-{{ $data->id }}">
                                                <div class="card card-body">
                                                    {{ $data->abstract }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="col-md-4 ">
                <div class="row">
                    <div class="col-12">
                        <div class="card-c">
                            <div class="h-box">
                                <div class="h-box-text p-2">
                                    Journals
                                </div>
                            </div>
                            <div>
                                <div class="p-3">

                                    @foreach($journals as $data)

                                    <div class="col-sm-12 text-center p-1">
                                        <a role="button" href="{{url('journal-details/'.$data->slug)}}"
                                            class="btn effect01"> {{$data->j_name}}</a>
                                    </div>
                                    @endforeach


                                    {{-- <div class="col-sm-12 text-center p-1">
                                        <a role="button" href="PublicationEthicsandMalpracticeStatement"
                                            class="btn effect01">Publication Ethics and Malpractice Statement</a>
                                    </div>
                                    <div class="col-sm-12 text-center p-1">
                                        <a role="button" href="ManuscriptPreparationGuidelines"
                                            class="btn effect01">Manuscript Preparation Guidelines</a>
                                    </div>
                                    <div class="col-sm-12 text-center p-1">
                                        <a role="button" href="ResearchGuidelines" class="btn effect01">Research
                                            Guidelines</a>
                                    </div>
                                    <div class="col-sm-12 text-center p-1">
                                        <a role="button" href="APAStyle" class="btn effect01">APA Style (6th
                                            Edition)</a>
                                    </div> --}}
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-3">
                        <div class="card-c">
                            <div class="h-box">
                                <div class="h-box-text p-2">
                                    Journal Cover
                                </div>
                            </div>
                            <div class="d-flex justify-content-center gap-2">

                                @foreach ($journals as $data)
                                    <div>
                                        <img src="{{ url('assets/journals/img/' . $data->photo) }}" alt="Image"
                                            class="col-12 p-1">
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="py-3">
                            <div class="card-c">
                                <div class="h-box">
                                    <div class="h-box-text p-2">
                                        Track Manuscript
                                    </div>
                                </div>
                                <div class="row align-items-stretch">
                                    <section>
                                        <div class="access-policy-container p-md-2">
                                            <form id="searchForm">
                                                <input type="text" id="query" placeholder="Search..."
                                                    class="form-control">
                                                <button type="submit" class="btn  btn-info">Search</button>
                                            </form>
        
                                            <div id="result">
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-12 pt-3">
                        <div class="card-c">
                            <section id="indexing" class="indexing">
                                <div class="h-box">
                                    <div class="h-box-text p-2">
                                        Indexing
                                    </div>
                                </div>
                                <div class="container" data-aos="fade-left">
                                    <div class="indexing-slider swiper">
                                        <div class="swiper-wrapper align-items-center">

                                            @foreach ($indexings as $data)
                                                <div class="swiper-slide">
                                                    <img class="img-fluid"
                                                        src="{{ url('assets/indexing/img/' . $data->img) }}"
                                                        alt="Image"
                                                        style="height: 140px; width: 140px; object-fit: contain;">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </section>
                        </div>
                    </div> --}}

                </div>

            </div>
            <!-- <div class="col-md-4 d-flex align-items-center">
                
            </div> -->

        </div>





    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        document.getElementById('searchForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const query = document.getElementById('query').value;
            console.log("query : ", query);

            axios.get(`/api/search?query=${query}`)
                .then(response => {
                    console.log("response :", response);
                    const result = response.data;
                    const resultContainer = document.querySelector('#result');
                    resultContainer.innerHTML = '';

                    if (result && Object.keys(result).length) {
                        const muuidField = document.createElement('div');
                        muuidField.className = 'result-field';
                        muuidField.innerHTML = `<strong>MUUUID:</strong> ${result.muuid}`;
                        resultContainer.appendChild(muuidField);

                        const statusField = document.createElement('div');
                        statusField.className = 'result-field';
                        statusField.innerHTML =
                            `<strong>Status:</strong> ${result.status === 0 ? 'Accecpted' : ''} ${result.status === 1 ? 'Draft' : ''} ${result.status === 2 ? 'Published' : ''} ${result.status === 3 ? 'Rejected': ''}  `;
                        resultContainer.appendChild(statusField);

                        const dateField = document.createElement('div');
                        dateField.className = 'result-field';
                        dateField.innerHTML = `<strong>Date:</strong> ${result.date}`;
                        resultContainer.appendChild(dateField);

                        const dateField2 = document.createElement('div');
                        dateField2.className = 'result-field';

                        dateField2.innerHTML =
                            `<strong> <a href="{{ URL('view-manuscript/${result.muuid}') }}">View File</a></strong>`;
                        resultContainer.appendChild(dateField2);
                    } else {
                        const field = document.createElement('div');
                        field.className = 'result-field';
                        field.textContent = 'No result found.';
                        resultContainer.appendChild(field);
                    }
                })
                .catch(error => {
                    console.error('Error fetching search results:', error);
                });
        });
    </script>
    <script>
        function countFun(id) {
            console.log(id);
            window.location.href = "{{ URL('countDownload') }}/" + id;
        }
    </script>


    <script>
        function onDowload(id) {
            console.log("id : ", id);

            axios.get(`/countDownload/${id}`)
                .then(response => {
                    console.log("response :", response);
                })
                .catch(error => {
                    console.error('Error fetching search results:', error);
                });
        };
    </script>



    {{-- <script>
        function countFun(id) {
            console.log(id);
            window.location.href = "{{ URL('countDownload') }}/" + id;
    }
    </script> --}}


@endsection
