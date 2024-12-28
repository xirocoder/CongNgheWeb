<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::paginate(10); 
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all(); // Lấy danh sách sinh viên để chọn
        return view('courses.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'name'   => 'required',                                  
        'description'   => 'required',                  
        'difficulty'       => 'required|in:beginner,intermediate,advanced',
        'price'        => 'required|numeric|min:0',
        'start_date' => 'required|date',
        ]);

        Course::create($request->all());

        return redirect()->route('courses.index')->with('success', 'Vấn đề đã được thêm thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::findOrFail($id);
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            // Kiểm tra dữ liệu đầu vào (validation)
            $request->validate([
                'name'   => 'required',                                  
                'description'   => 'required',                  
                'difficulty'       => 'required|in:beginner,intermediate,advanced',
                'price'        => 'required|numeric|min:0',
                'start_date' => 'required|date',
                ]);
        

            $course = Course::find($id);
            

            $course->update($request->all());
        

            return redirect()->route('courses.index')->with('success', 'Vấn đề được cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Vấn đề đã được xóa thành công!');
    }
}
