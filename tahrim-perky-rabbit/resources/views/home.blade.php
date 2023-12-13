 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>AdminLTE 3 | Dashboard</title>

     @include('layouts.link')
 </head>

 <body class="hold-transition sidebar-mini layout-fixed">
     @section('wrapper')
         <div class="wrapper">

             <!-- Preloader -->
             @include('layouts.loader')

             <!-- Navbar -->
             @include('layouts.nav')
             <!-- /.navbar -->

             <!-- Main Sidebar Container -->
             @include('layouts.sidebar')
             <!-- Content Wrapper. Contains page content -->
         @section('edit')
             @yield('edit')
             <div class="content-wrapper">
                 <!-- Content Header (Page header) -->
                 <div class="content-header">
                     <div class="container-fluid">
                       <div class="col-12">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Department</th>
                                <th>Achievement</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if($dept!=null)
                                @foreach($dept as $d)
                                <tr class="bg-dark">
                                    <td colspan="5" class="display-4 text-center">{{$d->name}}</td>
                                </tr>
                                @php $i=0; @endphp
                                @if($d->emp!=null)
                                @foreach($d->emp as $e)
                                <tr>
                                    <td>{{$e->name}}</td>
                                    <td>{{$e->email}}</td>
                                    <td>{{$e->phone}}</td>
                                    <td>{{$d->name}}</td>
                                    <td> @if($e->eachieve!=null) 
                                        @foreach($e->eachieve as $a)
                                      @if($a->achieve!=null)  {{$a->achieve->name}} @endif
                                        
                                        @php   $i = $i + 1; @endphp
                                        @if($i>0) , @endif
                                        @endforeach
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                       </div>
                     </div>


                 </div>
                 </section>
                 <!-- /.content -->
             </div>
         @show
         <!-- /.content-wrapper -->
         @include('layouts.footer')
     </div>
     <!-- ./wrapper -->
 @show
 @section('scripts')
     @include('layouts.script')
 @show
</body>

</html>
