@extends('main')
@section('wrapper')
@parent
    <!-- Content Wrapper. Contains page content -->
@section('edit')
   
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
             <div class="col-12">
               <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Create Employee</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('create')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="d-block">Name
                                    <input type="text" name="name" class="form-control" id="name">
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="d-block">Email
                                    <input type="email" name="email" class="form-control" id="email">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="phone" class="d-block">Phone
                                    <input type="phone" name="phone" class="form-control" id="phone">
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label for="dept" class="d-block">Department
                                   <select name="dept" id="dept" class="select2 form-control" style="width:100%;">
                                   @foreach($dept as $d)
                                   <option value="{{$d->id}}">{{$d->name}}</option>
                                   @endforeach
                                   </select>
                                </label>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="address" class="d-block">Address
                                    <textarea name="address" id="address" cols="30" rows="3" class="form-control"></textarea>
                                </label>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-block btn-dark">Save</button>
                            </div>
                        </div>
                       </form>
                </div>
               </div>
             </div>
            </div>


        </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
<!-- /.content-wrapper -->
@parent

@endsection
@section('scripts')
@parent
@endsection