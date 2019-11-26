
@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add Data</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="post" action="{{url('student')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="nom" class="form-control" placeholder="entrez le nom" />
   </div>
   <div class="form-group">
    <input type="text" name="prenom" class="form-control" placeholder="entrez le prenom" />
   </div>
   <div class="form-group">
    <input type="text" name="annee" class="form-control" placeholder="entrez l annee" />
   </div>
   <div class="form-group">
    <input type="text" name="grp" class="form-control" placeholder="entrez le grp" />
   </div>
   <div class="form-group">
    <input type="text" name="mat" class="form-control" placeholder="entrez le matricule" />
   </div>
   <div class="form-group">
    <input type="text" name="email" class="form-control" placeholder="entrez l email" />
   </div>
   <div class="form-group">
    <input type="text" name="password" class="form-control" placeholder="entrez le password" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>
@endsection