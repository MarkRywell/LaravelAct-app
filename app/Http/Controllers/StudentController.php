<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{   

    public function login(Request $request){

        $id = $request->input('username');
        $lastName = $request->input('password');

        /*$id_DB = Student::where('id', $id)->pluck('id')->first();

        echo $id_DB;*/
        if(Student::where('id', $id)->exists()){

            $student = DB::select('Select id, lastName FROM students where id = ?', [$id]);

                if (Student::where('lastName', $lastName)->exists()){
                    
                    if ($lastName == $student[0]->lastName){
                        $students = Student::all();
                        return view('User_homepage', [
                            'students' => $students,
                        ]);
                    }
                     
                }
                else { 
                    echo "Login Unsuccessful!<br/>";
                    echo '<a href = "/">Back to Login Page</a>';          
                }   

        }
        else {
            echo "Login Unsuccessful!<br/>";
            echo '<a href = "/">Back to Login Page</a>';
        }

    }

    public function displayData() {
        $students = Student::all();

        return view('User_homepage', [
            'students' => $students,
        ]);
    }

    public function fetchID($studID) {

        $student = Student::findOrFail($studID);
        
        return view('update_process', ['student' => $student]);
    }

    public function register_page() {
        return view('register_page');
    }

    public function update($id) {

        $student = DB::select('select * from students where id = ?', [$id]);
        return view('/update_process', ['student' => $student]);
    }

    public function updateRequest(Request $request, $id) {
        $lastName = $request->input('lastName');
        $firstName = $request->input('firstName');
        $MI = $request->input('MI');
        $course = $request->input('course');
        $yearlevel = $request->input('yearlevel');
        DB::update('update students set lastName = ?, firstName = ?, MI = ?, course = ?, yearlevel = ? where id = ?',[$lastName, $firstName, $MI, $course, $yearlevel, $id]);

        echo "Record updated successfully.<br/>";
        echo '<a href = "/User_homepage">Back to Records</a>';
    }

    public function delete($studID) {
        
        DB::table('students')
            ->where('id', $studID)
            ->update(['status' => 'Deleted']);

        return redirect('/User_homepage');
    }


    public function InsertData() {
        
        $student = new Student();
        
        $student->id = request('id');
        $student->lastName = request('lastName');
        $student->firstName= request('firstName');
        $student->MI = request('MI');
        $student->course = request('course');
        $student->yearLevel = request('yearLevel');
        $student->user_level = "User";
        $student->status = "Active";

        $student->save();

        return redirect('/')->with('mssg', 'Student Registered!');

    }

}
