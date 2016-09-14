<?php
$stus = DB::table("students")->where('name')->get();
$students = DB::table("students")->get();
$classes = DB::table("classes")->get();
$student1 = [
    'name'  => 'Mya Mya'
];
DB::table("students")->insert($student1);
$student2 = [
    'name'  => 'Hla Hla'
];
DB::table("students")->delete(1);
$id = DB::table('students')->insertWithId($student);















