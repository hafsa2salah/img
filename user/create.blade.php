<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء مستخدم</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f9f9f9;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        label, input, button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            font-size: 16px;
        }
        input[type="text"],
        input[type="file"] {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #ff69b4; /* Pink button */
            color: #fff;
            border: none;
            padding: 10px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #ff4c8b;
        }
        .error-message {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <form action="{{ url('/user/store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">الاسم:</label>
        <input type="text" id="name" name="name" required>
        @error('name') <div class="error-message">{{ $message }}</div> @enderror

        <label for="image">تحميل الصورة:</label>
        <input type="file" id="image" name="image" accept="image/*" required>
        @error('image') <div class="error-message">{{ $message }}</div> @enderror

        <button type="submit">إرسال</button>
    </form>
</body>
</html>
