<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

// Đường dẫn hiển thị danh sách đồ án (trang chủ)

Route::get('/', [CourseController::class, 'index'])->name('courses.index');

// Đường dẫn để tạo mới một đồ án (hiển thị form thêm mới)
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');

// Đường dẫn để lưu dữ liệu đồ án mới (thực hiện thêm mới)
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');

// Đường dẫn để hiển thị chi tiết một đồ án cụ thể (tuỳ chọn)
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

// Đường dẫn để chỉnh sửa thông tin đồ án (hiển thị form chỉnh sửa)
Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');

// Đường dẫn để cập nhật thông tin đồ án (thực hiện cập nhật)
Route::put('/courses/{id}', [CourseController::class, 'update'])->name('courses.update');

// Đường dẫn để xóa đồ án (thực hiện xóa sau khi có modal xác nhận)
Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');

