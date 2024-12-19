<?php

namespace App\Http\Controllers\Api;
use App\models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //Create Student
    public function CreateStudent(Request $request) {

    }
    //List Students
        public function listStudents(Student $students) {
            $students=Student::all();
            return $students;
            //dd($students);
    }
    // Single student API
      public function getSingleStudent(Student $students,$id)
      {
        $students=student::find($id);
        return $students;
      }
    // Update Student
        public function updateStudent(Request $reques , $id) {
    }
    // Delte Student
        public function deleteStudent(Student $students,$id) {
            $students=student::find($id);
            $students->delete();
            $students=Student::all();
            return $students;
        }
}
