@extends('adminpanel/layout')

@section('title', 'Home')
@section('breadcrumb', 'Add Editors')


@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">





        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Add Editors</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                @if(session()->has('message'))
                <div class="alert alert-success">
                  {{ session()->get('message') }}
                </div>
                @endif

                <div class="error_msg">
                  <ul>
                    @foreach($errors->all() as $e)

                    <li>
                      <div class="alert alert-danger">{{ $e }} </div>
                    </li>
                    @endforeach
                  </ul>
                </div>

                <form action="/add-impact" method="post" enctype="multipart/form-data">
                  @csrf

                  <div class="form-group row p-1">
                    <label class="col-sm-4 col-form-label"> Impact Factor:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="name" required="required" placeholder="Impact name">
                    </div>
                  </div>

                  <div class="form-group row p-1">
                    <label class="col-sm-4 col-form-label">Link:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="link" placeholder="Link">
                    </div>
                  </div>
                  <input type="hidden" value="{{$id}}" name="id" id="">

                  <div class="form-group row p-1">
                    <div class="col-sm-12">
                    <div class="d-grid gap-2">

                      <input type="submit" name="submit-journals" value="Save" id="" class="btn btn-block btn-success">
                    </div>
                    </div>
                  </div>





                </form>


              </div>
            </div>
          </div>
        </div>

        <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Add Impact Factor</a>

        </div>
            <br>
            <br>



        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title text-center"> Impact Factor </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example2" class="table table-bordered  table-hover small">
                <thead>
                  <tr class="text-center">
                    <th>Sl No.</th>
                    <th>Impact</th>
                    <th>Link</th>
                    <th>Delete</th>
                  </tr>
                <tbody>
                  @php
                  $counter = 1;
                  @endphp
                  @foreach($datas as $data)
                  <tr>
                    <td class="text-center">{{$counter++}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->link}}</td>

                    <td class="text-center"><a class="confirmation" href="/delete_impact/{{$data->id}}"><i class="fas fa-trash-alt text-danger"></i></a></td>

                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>




@endsection