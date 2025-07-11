@extends('layout')

@section('title', 'Journal Details')

<!-- this is journal page -->

<style>
    .min-w{
        min-height: 550px;
    }
</style>

@section('content')

    <div class="container p-2">
        <div class="row">

            <!-- ======= Specials Section ======= -->
            <section id="specials" class="specials">
                <div class="container" data-aos="fade-up">

                    <div class="specials-title">
                        <p>{{ $Journal_details->j_name }}</p>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-3">
                            <ul class="nav nav-tabs flex-column">
                                <li class="nav-item p-1">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tab-1">Details</a>
                                </li>
                                <li class="nav-item p-1">
                                    <a class="nav-link active show" data-bs-toggle="tab" href="#tab-2">Aims And Scope</a>
                                </li>
                                <li class="nav-item p-1">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Editorial board</a>
                                </li>
                                <li class="nav-item p-1">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Archives</a>
                                </li>
                                <li class="nav-item p-1">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Indexing</a>
                                </li>
                                <li class="nav-item p-1">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Impact Factor</a>
                                </li>
                                <li class="nav-item p-1">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tab-cer">Certificates</a>
                                </li>
                                <li class="nav-item p-1">
                                    <a class="nav-link" href="/authorGuidlines">Author Guidlines</a>
                                </li>
                                <li class="nav-item p-1">
                                    <a class="nav-link" href="/about">Publisher Details</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <div class="tab-content">
                                <div class="tab-pane" id="tab-1">
                                    <div class="row border border-warning rounded p-3 shadow-lg bg-body min-w">
                                        <div class="col-lg-12 details order-2 order-lg-1">
                                            <h3>Details</h3>
                                            <p class="fst-italic">
                                            <table style="width:75%">
                                                <tbody>
                                                    <tr>
                                                        <th>Journal Name:</th>
                                                        <td>
                                                            {{ $Journal_details->j_name }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Abbr. Title:</th>
                                                        <td>
                                                            {{ $Journal_details->abbr_title }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>ISSN(Online):</th>
                                                        <td>
                                                            {{ $Journal_details->issn }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Subject:</th>
                                                        <td>
                                                            {{ $Journal_details->subject }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Format of Publication:</th>
                                                        <td>
                                                            {{ $Journal_details->format }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Starting year:</th>
                                                        <td>
                                                            2023
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Frequency:</th>
                                                        <td>
                                                            {{ $Journal_details->frequency }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Language: </th>
                                                        <td>
                                                            {{ $Journal_details->language }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Chief Editor:</th>
                                                        <td>
                                                            {{ $Journal_details->chief_editor }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Publisher:</th>
                                                        <td>
                                                            {{ $Journal_details->publisher }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>Country of Origin: </th>
                                                        <td>
                                                            {{ $Journal_details->country_of_origin }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email: </th>
                                                        <td>
                                                            info@IRASSpublishers.com
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active show" id="tab-2">
                                    <div class="row border border-warning rounded p-3 shadow-lg bg-body min-w">
                                        <div class="col-lg-12 details order-2 order-lg-1">
                                            <h3>Aim And Scope</h3>
                                            <p>
                                                {!! $Journal_details->aim_and_scope !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane"
                                    id="tab-3">

                                    <div class="row border border-warning rounded p-3 shadow-lg bg-body min-w">

                                        <div class="row">
                                            <div class="col-lg-12 details order-2 text-center order-lg-1 p-2">
                                                <h3>EDITOR-IN-CHIEF</h3>
                                            </div>
                                        </div>

                                        @foreach ($Chief_editors as $data)
                                            <div class="row">
                                                <div class="col-md-4 offset-md-4">
                                                    <div class="card">
                                                        <div class="editorial pt-3">
                                                            <img src="{{ url('assets/img/editor-img/' . $data->image) }}"
                                                                class="img-fluid rounded-circle border border-info border-3 editorial-img">
                                                        </div>

                                                        <div class="card-body text-center editorial-style">
                                                            <div class="card-title ">{{ $data->name }}</div>
                                                            <div class="card-text pb-2" style="font-size: small"><strong>
                                                                    {{ $data->university }}</strong></div>
                                                            <div class="card-text fst-italic pb-2"
                                                                style="font-size: small; text-align: justify">
                                                                {{ $data->details }} </div>
                                                            <p class="card-text " style="font-size: small"> <b>Profile link:
                                                                    <a class="card-text small" href="{{ $data->profile }}"
                                                                        target="_blank">{{ $data->profile }}</a>
                                                                </b> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                        <br><br>
                                        <div class="row">
                                            <div class="col-lg-12 details order-2 text-center order-lg-1 p-2">
                                                <h3>ASSOCIATE EDITORIAL BOARD</h3>
                                            </div>
                                        </div>

                                        <div class="row p-3">
                                            @foreach ($ass_editors as $data)
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="editorial pt-3">
                                                            <img src="{{ url('assets/img/editor-img/' . $data->image) }}"
                                                                class="img-fluid rounded-circle border border-info border-3 editorial-img">
                                                        </div>

                                                        <div class="card-body text-center editorial-style">
                                                            <div class="card-title ">{{ $data->name }}</div>
                                                            <div class="card-text pb-2" style="font-size: small"><strong>
                                                                    {{ $data->university }}</strong></div>
                                                            <div class="card-text fst-italic pb-2"
                                                                style="font-size: small; text-align: justify">
                                                                {{ $data->details }} </div>
                                                            <p class="card-text " style="font-size: small"> <b>Profile link:
                                                                    <a class="card-text small" href="{{ $data->profile }}"
                                                                        target="_blank">{{ $data->profile }}</a>
                                                                </b> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane" id="tab-4">
                                    <div class="row border border-warning rounded p-3 shadow-lg bg-body min-w">
                                        <div class="col-lg-12 details order-2 order-lg-1">
                                            <h3>Archives</h3>
                                            <p>
                                                @foreach ($volume as $data)
                                                    <button type="button" class="btn btn-outline-success">
                                                        <ul class="nav ">
                                                            <li class="nav-item">
                                                                <a class="nav-link"
                                                                    href="{{ URL('all_issues/' . $data->id) }}">{{ $data->name }}</a>
                                                            </li>
                                                        </ul>
                                                    </button>
                                                @endforeach

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab-issue">
                                    <div class="row border border-warning rounded p-3 shadow-lg bg-body min-w">
                                        <div class="col-lg-12 details order-2 order-lg-1">
                                            <h3>Issues</h3>
                                            <p>
                                                @foreach ($issues as $data)
                                                    <button type="button" class="btn btn-outline-success">
                                                        <ul class="nav ">
                                                            <li class="nav-item">
                                                                <a class="nav-link"
                                                                    href="{{ URL('/issues/' . $data->id) }}">{{ $data->name }}</a>
                                                            </li>
                                                        </ul>
                                                    </button>
                                                @endforeach

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab-5">
                                    <div class="row border border-warning rounded p-3 shadow-lg bg-body min-w">
                                        <div class="col-lg-12 details order-2 order-lg-1">
                                            <h3>Indexing</h3>
                                            <p>
                                            <div class="gallery">
                                                @foreach ($indexing as $index)
                                                    <a target="_blank" class="btn btn-outline-success"
                                                        href="{{ $index->link }}">
                                                        <img src="{{ url('assets/indexing/img/' . $index->img) }}"
                                                            alt="indexing" width="250" height=auto>
                                                    </a> &nbsp; &nbsp; &nbsp;
                                                @endforeach



                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab-6">
                                    <div class="row border border-warning rounded p-3 shadow-lg bg-body min-w">
                                        <div class="col-lg-12 details order-2 order-lg-1">
                                            <h3>Impact Factor</h3>
                                            <p>
                                            <div class="gallery">
                                                @foreach ($impact as $index)
                                                    <a target="_blank" class="" href="{{ $index->link }}">
                                                        {{ $index->name }}
                                                    </a> | &nbsp; &nbsp; &nbsp;
                                                @endforeach



                                            </div>

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab-cer">
                                    <div class="row border border-warning rounded p-3 shadow-lg bg-body min-w">
                                        <div class="col-lg-12 details order-2 order-lg-1">
                                            <h3>Certificates</h3>
                                            <p>
                                            <div class="gallery">
                                                @foreach ($certificates as $index)
                                                    <img src="{{ url('assets/certificate/' . $index->file) }}"
                                                        alt="indexing" width="250" height=auto>
                                                @endforeach



                                            </div>

                                            </p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="">


                                <div class="row border border-warning rounded p-3 shadow-lg bg-body">
                                    <h3>Impact Factor</h3>
                                    <hr>
                                    <p>
                                    <div class="gallery">
                                        @foreach ($impact as $index)
                                            <div>

                                                <a target="_blank" class="" href="{{ $index->link }}">
                                                    {{ $index->name }}
                                                </a>
                                            </div>
                                        @endforeach



                                    </div>

                                    </p>
                                </div>


                                <div class="row border border-warning rounded p-3 shadow-lg bg-body mt-3">
                                    <h3>Certificates</h3>
                                    <hr>
                                    <p>
                                    <div class="gallery">
                                        @foreach ($certificates as $index)
                                            <img src="{{ url('assets/certificate/' . $index->file) }}" alt="indexing"
                                                class="col-12">
                                        @endforeach



                                    </div>

                                    </p>
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
