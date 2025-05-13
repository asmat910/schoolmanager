<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <style>
         body {
            background-image: url('your-image-url.jpg'); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.8); /* Adds a slight transparency effect */
            padding: 20px;
            border-radius: 10px;
        }

    </style> --}}
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Add Teacher</h2>
    <form action="store_data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="teacherName" class="form-label">Teacher Name</label>
            <input type="text" name="name" class="form-control" id="teacherName" placeholder="Enter teacher's name" required>
        </div>

        <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <select name="department" class="form-select" id="department">
                <option selected>Select Department</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Physics">Physics</option>
                <option value="Biology">Biology</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" name="dob" class="form-control" id="dob" required>
        </div>

        <div class="mb-3">
            <label for="doj" class="form-label">Date of Joining</label>
            <input type="date" name="doj" class="form-control" id="doj" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>