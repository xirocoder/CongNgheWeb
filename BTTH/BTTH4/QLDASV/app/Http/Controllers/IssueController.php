<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use App\Models\Issue;


class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $issues = Issue::with('computer')->paginate(5); // Lấy 5 bản ghi mỗi trang
        return view('issues.index', compact('issues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $computers = Computer::all(); // Lấy danh sách sinh viên để chọn
        return view('issues.create', compact('computers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'computer_id'   => 'required', 
        'reported_by'   => 'required|max:50',             
        'reported_date' => 'required|date',               
        'description'   => 'required',                  
        'urgency'       => 'required|in:Low,Medium,High',
        'status'        => 'required|in:Open,In Progress,Resolved',
        ]);

        Issue::create($request->all());

        return redirect()->route('issues.index')->with('success', 'Vấn đề đã được thêm thành công!');
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
        $issue = Issue::findOrFail($id);
        $computers = Computer::all();
        return view('issues.edit', compact('issue', 'computers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            // Kiểm tra dữ liệu đầu vào (validation)
            $request->validate([
                'computer_id'   => 'required', 
                'reported_by'   => 'required|max:50',             
                'reported_date' => 'required|date',               
                'description'   => 'required',                  
                'urgency'       => 'required|in:Low,Medium,High',
                'status'        => 'required|in:Open,In Progress,Resolved',
            ]);
        
            // Tìm đối tượng Thesis cần cập nhật
            $issue = Issue::find($id);
            
            // Cập nhật thông tin
            $issue->update($request->all());
        
            // Điều hướng trở lại trang index với thông báo thành công
            return redirect()->route('issues.index')->with('success', 'Vấn đề được cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $issue = Issue::findOrFail($id);
        $issue->delete();

        return redirect()->route('issues.index')->with('success', 'Vấn đề đã được xóa thành công!');
    }
}
