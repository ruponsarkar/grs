@extends('layout')

@section('title', 'Journal Details')

<!-- this is journal page -->

@section('content')

<div class="container p-2">
    <div class="row">

        <!-- ======= Specials Section ======= -->
        <section id="specials" class="specials">
            <div class="container" data-aos="fade-up">

                <div class="specials-title">
                    <p>{{$Journal_details->j_name}}</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item p-1">
                                <a class="nav-link" href="/journal-details/{{$Journal_details->slug}}">Aims And Scope</a>
                            </li>
                            <li class="nav-item p-1">
                                <a class="nav-link" href="/journal-details/{{$Journal_details->slug}}">Editorial board</a>
                            </li>
                            <li class="nav-item p-1">
                                <a class="nav-link active" href="/journal-details/{{$Journal_details->slug}}">Archives</a>
                            </li>
                            <li class="nav-item p-1">
                                <a class="nav-link" href="/journal-details/{{$Journal_details->slug}}">Indexing</a>
                            </li>
                            <li class="nav-item p-1">
                                <a class="nav-link" href="/journal-details/{{$Journal_details->slug}}">Impact Factor</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">


                            <div class="tab-pane active show" id="tab-4">
                                <div class="row border border-warning rounded p-3">
                                    <div class="col-lg-12 details order-2 order-lg-1">
                                        <h3>All Issues</h3>
                                        <p>


                                        @foreach($issues as $data)
                                            <button type="button" class="btn btn-outline-success">
                                                <ul class="nav shadow-lg bg-body rounded">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ URL('/issues/'.$data->id ) }}">{{$data->name}}</a>
                                                    </li>
                                                </ul>
                                            </button>
                                            @endforeach

                                        </p>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <br><br>

            </div>
        </section><!-- End Specials Section -->
    </div>
</div>
<br>
<br>

@endsection