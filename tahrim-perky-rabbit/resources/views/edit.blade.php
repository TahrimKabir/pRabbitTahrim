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
                    <form action="{{route('update')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="d-block">Name
                                    <input type="hidden" name="id" value="{{$emp->id}}">
                                    <input type="text" name="name" class="form-control" id="name" value="{{$emp->name}}">
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="d-block">Email
                                    <input type="email" name="email" class="form-control" id="email" value="{{$emp->email}}">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="phone" class="d-block">Phone
                                    <input type="phone" name="phone" class="form-control" id="phone" value="{{$emp->phone}}">
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label for="dept" class="d-block">Department
                                   <select name="dept" id="dept" class="select2 form-control" style="width:100%;">
                                   @foreach($dept as $d)
                                   <option value="{{$d->id}}" @if($d->id==$emp->dept_id) selected @endif>{{$d->name}}</option>
                                   @endforeach
                                   </select>
                                </label>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="address" class="d-block">Address
                                    <textarea name="address" id="address" cols="30" rows="3" class="form-control">{{$emp->address}}</textarea>
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