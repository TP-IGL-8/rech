@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Student Data</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('student.create')}}" class="btn btn-primary">Add</a>

   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Annee</th>
    <th>Groupe</th>
    <th>Matricule</th>
    <th>Email</th>
    <th>Password</th>
    <th>Edit</th>
    <th>Delete</th>
   </tr>
   @foreach($students as $row)
   <tr>
    <td>{{$row['nom']}}</td>
    <td>{{$row['prenom']}}</td>
    <td>{{$row['annee']}}</td>
    <td>{{$row['grp']}}</td>
    <td>{{$row['mat']}}</td>
    <td>{{$row['email']}}</td>
    <td>{{$row['password']}}</td>
    <td><a href="{{action('StudentController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
    <td></td>
   </tr>
   @endforeach
  </table>
 </div>
</div>

@endsection
