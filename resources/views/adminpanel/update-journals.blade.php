@extends('adminpanel/layout')

@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')



@section('content')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>




<style>
  body {
    /* font: normal 18px/1.5 "Fira Sans", "Helvetica Neue", sans-serif; */
    background: #3AAFAB;
    color: #000;
  }

  .container {
    width: 80%;
    max-width: 1200px;
    margin: 0 auto;
  }

  .container * {
    box-sizing: border-box;
  }

  .flex-outer,
  .flex-inner {
    list-style-type: none;
    padding: 0;
  }

  .flex-outer {
    max-width: 800px;
    margin: 0 auto;
  }

  .flex-outer li,
  .flex-inner {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }

  .flex-inner {
    padding: 0 8px;
    justify-content: space-between;
  }

  .flex-outer>li:not(:last-child) {
    margin-bottom: 20px;
  }

  /* .flex-outer li label,
  .flex-outer li p {
    padding: 8px;
    font-weight: 300;
    letter-spacing: .09em;
    text-transform: uppercase;
  }

  .flex-outer>li>label,
  .flex-outer li p {
    flex: 1 0 120px;
    max-width: 220px;
  } */

  .flex-outer>li>label+*,
  .flex-inner {
    flex: 1 0 220px;
  }

  /* .flex-outer li p {
    margin: 0;
  } */

  .flex-outer li input:not([type='checkbox']),
  .flex-outer li textarea,
  select {
    padding: 15px;
    border: none;
  }

  .flex-outer li button {
    margin-left: auto;
    padding: 8px 16px;
    border: none;
    background: #333;
    color: #f3f3f3;
    text-transform: uppercase;
    letter-spacing: .09em;
    border-radius: 2px;
  }

  .flex-inner li {
    width: 100px;
  }
</style>
<div class="container">
<br/>
<br/>
  @if(session()->has('message'))
  <div class="alert alert-success">
    {{ session()->get('message') }}
  </div>
  @endif

  <div class="error_msg">
    <ul>
      @foreach($errors->all() as $e)
      <li>{{ $e }}</li>
      @endforeach
    </ul>
  </div>



  <form method="POST" action="{{URL('updateJournalsData/'.$journal->j_id)}}">
    @csrf
    <ul class="flex-outer">
      <li>
        <label for="first-name">Journal Name</label> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="name" name="jname" value="{{$journal->j_name}}">
      </li>
      <li>
        <label for="last-name">Abbr. title</label>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="university" name="abbr" value="{{$journal->abbr_title}}">
      </li>
      <li>
        <label for="last-name">ISSN</label>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="university" name="issn" value="{{$journal->issn}}">
      </li>
      <li>
        <label for="email">Frequency</label>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="details" name="frequency" value="{{$journal->frequency}}">
      </li>
      <li>
        <label for="phone">Language</label>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="type" name="language" value="{{$journal->language}}">
      </li>

      <li>
        <label for="phone">Chief Editor</label>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="type" name="chief" value="{{$journal->chief_editor}}">
      </li>

      <li>
        <label for="phone">Publisher</label>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="type" name="publisher" value="{{$journal->publisher}}">
      </li>

      <li>
        <label for="phone">Country of Origin</label>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="type" name="country" value="{{$journal->country_of_origin}}">
      </li>

      <li>
        <label for="phone">Aim and Scope</label>

        <textarea class="form-control summernote" name="aim" placeholder="Aim and Scope" > {{$journal->aim_and_scope}}  </textarea>

        {{-- <textarea name="aim" id="aim" cols="30" rows="20">{{$journal->aim_and_scope}}</textarea> --}}

      </li>


      <li>

        <input type="hidden" name="id" value="{{$journal->j_id}}">

      <li>
        <button type="submit" name="submit">Update Details</button>
      </li>
    </ul>
  </form>

  <br><br><br><br><br><br><br><br>

  <form action="{{URL('updateJournalPhoto/'.$journal->j_id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <ul class="flex-outer">
      <li>
        <label for="phone">Change image</label>
        <input type="file" name="photo">
        <button type="submit" name="img-change">Change Image</button>
      </li>
    </ul>
  </form>



</div>



<script>
  $('.summernote').summernote({
    placeholder: 'write here',
    tabsize: 2,
    height: 500
  });
</script>
@endsection