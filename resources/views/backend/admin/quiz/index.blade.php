@extends('backend.admin.layouts.app')
@section('content')
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content pt-4">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>QUIZ LIST</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="all_services" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Points/Marks</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $sr_no=1; ?>
                        @foreach($user_answers as $user_answer)
                        <tr>
                            <td>{{$sr_no++}}</td>
                            <td>{{$user_answer->user->name}}</td>
                            <td>{{$user_answer->user->email}}</td>
                            <td>{{$user_answer->user_points}}</td>
                            <td>{{$user_answer->quiz_date}}</td>
                        </tr>
                        @endforeach
                    </tbody>
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
    <!-- /.content -->
</div>
@endsection
@section('script')
@endsection
