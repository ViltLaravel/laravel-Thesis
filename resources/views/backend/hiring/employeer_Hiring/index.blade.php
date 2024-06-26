@extends('backend.layouts.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Freelancers</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial</th>
                  <th>Freelancer Name</th>
                  <th>Freelancer Email</th>
                  <th>Message</th>
                  <th>Action</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($freelancer as $key => $freelance)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $freelance->name }}</td>
                    <td>{{ $freelance->email }}</td>
                    <td>{{ $freelance->emp_message }}</td>
                    <td>
                      <form action="{{ route('delete.employer') }}" method="POST">
                        @csrf
                          <input type="hidden" name="decline" value="{{ $freelance->id }}">
                          <button style="border:none; color: red;" class="fa fa-trash-alt" type="submit"></button>
                      </form>
                    </td>
                    <td>
                      @if($freelance->status == 1)
                      <button class="btn btn-success">Accepted</button>
                      @else
                      <button class="btn btn-warning">Pending</button>
                      @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Serial</th>
                        <th>Freelancer Name</th>
                        <th>Freelancer Email</th>
                        <th>Message</th>
                        <th>Action</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
</div>

  @endsection
