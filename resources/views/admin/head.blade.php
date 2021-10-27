<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{$title}}</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{url('/template/admin/plugins/fontawesome-free/css/all.min.css')}}"> 

<!-- icheck bootstrap -->
<link rel="stylesheet" href="{{url('template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}"> 

<!-- Theme style -->
<link rel="stylesheet" href="{{url('/template/admin/dist/css/adminlte.min.css')}}"> 

<link rel="stylesheet" href="{{url('/template/admin/dist/css/adminlte.min.css')}}"> 

<link rel="stylesheet" href="{{url('/template/scss/_main-sidebar.scss')}}"> 
<!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet" href="{{url('/template/admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
@yield('head')
<style>
    .hidden{
        display: none;
    }
</style>
