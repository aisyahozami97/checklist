@extends('layouts.app')
<style>

</style>
@section('content')
<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<header class="bgimg w3-panel w3-center " style="padding:100px 16px">
  <h1 class="w3-xlarge">TO-DO-LIST</h1>
  <h1>Task Management System</h1>
  
  <div class="w3-padding-32">
    <div class="w3-bar w3-border">
      <a href="http://127.0.0.1:8000/home" class="w3-bar-item w3-button w3-dark-grey">Home</a>
      <a href="http://127.0.0.1:8000/view-records" class="w3-bar-item w3-button w3-light-grey">All Task</a>
      <a href="http://127.0.0.1:8000/edit-records" class="w3-bar-item w3-button w3-light-grey">Manage Task</a>
      
    </div>
  </div>
  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header w3-light-grey">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
              
</header>
  
@endsection