<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-
GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
crossorigin="anonymous">
<title>Posts</title>
</head>
<body>

<h1 style="margin: 50px 50px">Cập nhật thông tin đồ án</h1>

<form action="{{ route('courses.update', $course->id) }}" method="POST" style="margin: 50px 50px">
    @csrf
    @method('PUT')

    <div class="mb-3">
            <label for="name" class="form-label">Tên khóa học</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $course->name }}" required>
            
        </select>
        </div>
    
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $course->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="difficulty" class="form-label">Mức độ </label>
            <select class="form-control" id="form-control" name="difficulty" name="difficulty" required>
                <option value="beginner"{{ $course->difficulty == 'beginner' ? 'selected' : '' }}>beginner </option>
                <option value="intermediate"{{ $course->difficulty == 'intermediate' ? 'selected' : '' }}>intermediate</option>
                <option value="advanced"{{ $course->difficulty == 'advanced' ? 'selected' : '' }}>advanced</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Giá</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $course->price }}" required>
        </div>
        <div class="mb-3">
                        <label for="start_date" class="form-label">start_date</label>
                        <input type="datetime-local" class="form-control" id="start_date" name="start_date" value="{{ $course->start_date }}" required>
                    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>

</body>