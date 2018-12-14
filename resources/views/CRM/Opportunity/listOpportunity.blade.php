@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Opportunity</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Opportunity List</li>
      </ol>
    </div>
  </div>

@endsection

@section('MainContent')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Opportunity</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Opportunity List</li>
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
<div class="row">
  <div class="col-12">

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Opportunity List</h3>
      </div>

       {{ $opportunitydata['dataArray']['data']['0']['opportunities_account_name'] }}
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <td>Opportunity ID</td>
              <td>Deal Owner</td>
              <td>Deal Name</td>
              <td>Account Name</td>
              <td>Type</td>
              <td>Lead ID</td>
              <td>Campaign ID</td>
              <td>Contact ID</td>
              <td>Amount</td>
              <td>Closing Date</td>
              <td>Stage</td>
              <td>Probability</td>
              <td>Expectation Revenue</td>
              <td>Description</td>
            </tr>
          </thead>
          <tbody>
            @foreach($opportunitydata['dataArray']['data'] as $opportunities)
             {{ $opportunities['opportunities_account_name']}}<br>
            <tr>

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

@endsection

@section('bodyScriptUpdate')
 
@endsection