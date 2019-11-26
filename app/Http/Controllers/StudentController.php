<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\etudiants;
use DB;

class StudentController extends Controller
{
   /* public function newEtudiant(){
        $newEtu=new etudiants;
        $newEtu->nom='hjk';
        $newEtu->prenom='k';
        $newEtu->email='rgh';
        $newEtu->mat='rgh';
        $newEtu->annee='1cp';
        $newEtu->password='me';

        $newEtu->grp='1';


        $newEtu->save();

    }*/
    public function store(Request $request){
      
        $this->validate($request, [
            'nom'    =>  'required',
            'prenom'     =>  'required',
            'annee'     =>  'required',
            'grp'     =>  'required',
            'mat'     =>  'required',
            'email'     =>  'required',
            'password'     =>  'required'
        ]);
        $student = new etudiants([
            'nom'    =>  $request->get('nom'),
            'prenom'     =>  $request->get('prenom'),
            'annee'    =>  $request->get('annee'),
            'grp'    =>  $request->get('grp'),
            'mat'    =>  $request->get('mat'),
            'email'    =>  $request->get('email'),
            'password'    =>  $request->get('password'),

        ]);
        $student->save();
        return redirect()->route('student.index')->with('success', 'Data Added');
    }
 /* //return $request->all();         
        $newEtu=new etudiants();
        $newEtu->nom=$request->input('nom');
        $newEtu->prenom=$request->input('prenom');
        $newEtu->email=$request->input('email');
        $newEtu->mat=$request->input('mat');
        $newEtu->grp=$request->input('grp');
        $newEtu->annee=$request->input('annee');
        $newEtu->password=$request->input('password');

        


        $newEtu->save();
        return view('student.create');
        //return view('store') ;*/

   /* public function search()
    {
        $q = Input::get ( 'q' );
        if($q != ""){
            $etudiants = etudiants::where ( 'nom', 'LIKE', '%' . $q . '%' )->orWhere ( 'prenom', 'LIKE', '%' . $q . '%' )->get ();
            if (count ( $etudiants ) > 0)
                //return view ( 'welcome' )->withDetails ( $etudiants )->withQuery ( $q );
                return view ( 'student.search' )->withDetails ( $etudiants )->withQuery ( $q );
            else
               // return view ( 'welcome' )->withMessage ( 'Non trouve! essayer une autre fois !' );
                return view ( 'student.search' )->withMessage ( 'Non trouve! essayer une autre fois !' );
        }
        //return view ( 'search-functionality-in-laravel/welcome' )->withMessage ( 'Non trouve! essayer une autre fois !' );
        return view ( 'student.search' )->withMessage ( 'Non trouve! essayer une autre fois !' );
    } */
    
    public function index(){
        $students = etudiants::all()->toArray();
        return view('student.index', compact('students'));
    }
    public function create()
    {
            return view('student.create');
    }
  

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
