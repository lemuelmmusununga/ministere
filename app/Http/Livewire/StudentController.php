<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Models\Student;
class StudentController extends Component
{
    public function render()
    {
        $students = Student::orderBy('id','DESC')->get();
        return view('livewire.student-controller',['students'=>$students]);
    }
}
