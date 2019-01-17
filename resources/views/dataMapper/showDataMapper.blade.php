@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Data Mapper Form
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Data Mapper Form</li>
  </ol>


@endsection

@section('MainContent') 
<div class="row">
  <!--  column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Enter Detail</h3>
            </div>
      <!-- /.card-header -->

      {{-- form--}}
      <form role="form" >
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="mappingPlatform">Mapping Platform</label>
                  <input type="Tell" class="form-control" id="mappingPlatform" name="mappingPlatform" value="{{$data['mapper']['mapping_platform']}}" placeholder="Mapping Platform" >
                </div>

                <div class="form-group">
                  <label for="tableName">Table Name</label>
                  <input type="text" class="form-control" id="tableName" name="tableName" value="{{$data['mapper']['table_name']}}" placeholder="Table Name">
                </div>
                

                <div class="form-group">
                  <label for="tableFieldName">Table Field Name</label>
                  <input type="text" class="form-control" id="tableFieldName" name="tableFieldName" value="{{$data['mapper']['field_name']}}" placeholder="Table Field Name">
                </div>

              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

            {{-- RIght Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                {{-- ........ --}}



                <div class="form-group">
                  <label for="mappingTableName">Mapping Table Name</label>
                  <input type="text" class="form-control" id="mappingTableName" name="mappingTableName" value="{{$data['mapper']['mapping_table_name']}}" placeholder="Mapping Table Name">
                </div>

                <div class="form-group">
                  <label for="mappingFieldName">Mapping Field</label>
                  <input type="text" class="form-control" id="mappingFieldName" name="mappingFieldName" value="{{$data['mapper']['mapping_field_name']}}" placeholder="Mapping Field">
                </div>

                {{-- ........ --}}

              </div>
              {{-- ./FormBOXBody --}} 


            </div>
            {{-- ./RIght Form Field --}}
        </div>

        
      </form>
      {{-- ./Form --}}
    </div>
{{--  ./Horizonantal Form  --}}
  </div>
  {{--  ./Col  --}}
</div>
<!-- /.row -->

@endsection

@section('bodyScriptUpdate')
 
@endsection