<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class mystudentcontroller extends Controller
{
    public function addform()
    {
       return view('form');
    }
    public function addformprocess(Request $request)
    {
       $txt1 = $request->input('txt1');
       $txt2 = $request->input('txt2');
       DB::table('student')->insert(
         ['name' => $txt1, 'mobileno' =>$txt2]
     );
       echo "Record Added successfully";
    }
    public function showdata()
    {
      $mydata = DB::table('student')->get();
      return view('table',compact('mydata'));
    }

    public function deletedata($id)
    {
      $deleted = DB::table('student')->where('id', '=', $id)->delete();
      return redirect('/show');
    }

    public function editdata($id)
    {
      $fetchdata = DB::table('student')->where('id', '=', $id)->first();
      return view('edit',compact('fetchdata'));
    }

    public function updatedata(Request $request)
    {
      $txt0 = $request->input('txt0');
      $txt1 = $request->input('txt1');
      $txt2 = $request->input('txt2');
      DB::table('student')
      ->where('id', $txt0)
      ->update(['name' => $txt1, 'mobileno' => $txt2]);
      echo "Record Updated";
    }
}
