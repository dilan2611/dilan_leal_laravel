<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\curso;

class CursoController extends Controller
{

    public function index()
    {
      $course=curso::all();
      //return$course;
      return view('cursos.index',compact('course'));
    }


    public function create()
    {
        return view('cursos.create');
    }




    public function store(Request $request)
    {
      $course = new curso();
      $course->nombre = $request->input('nombre_del_diseño');
      $course->descripcion= $request->input('descripcion_de_diseño');

      if ($request->hasFile('imagen')){
        $course->imagen = $request->file('imagen')->store('public/cursos');
      }

      $course->save();
      return 'agregado con exito';
    }


   function show(string $id)
    {
        $diseño= curso::find($id);
        return view('cursos.show', compact('diseño'));
    }



    public function edit(string $id)
    {
        $course = curso::find($id);
        return view('cursos.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Curso::find($id);
    $course->nombre = $request->input('nombre');
    $course->descripcion = $request->input('descripcion');

    if ($request->hasFile('imagen')) {
        $course->imagen = $request->file('imagen')->store('public/cursos');
    }

    $course->save();
    return redirect()->route('cursos.index');
    }
    public function destroy(string $id)
    {
        //
    }
}
