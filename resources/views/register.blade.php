<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            align-items: center;
            gap:20px;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 50px;
            margin: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group input:focus {
            outline: none;
            border-color: #007bff;
        }

        .form-group textarea:focus {
            outline: none;
            border-color: #007bff;
        }

        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn-submit {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            width: 100px;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    @auth
    <div style="text-align: center">
        <h1>You are logged in</h1>
        <div style="margin-top: 2rem;">
            <form action="/logout" method="post">
                @csrf
                <button class="btn-submit" type="submit">Logout</button>
            </form>
        </div>
    </div>

    <div>
        <div style="margin:2rem">
            <form style="display: flex;justify-content: center;flex-direction: column ;width: 300px; padding: 20px;align-items: center;" action="/post" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="Blog Title"/>
                </div>
                <div class="form-group">
                    <label for="body">Content</label>
                    <textarea name="body" placeholder="Blog Content"></textarea>
                </div>
                <button class="btn-submit">Post</button>
            </form>
        </div>
    </div>
    
    <div>
        @foreach ($posts as $post)
            <div>
                <h3>{{$post['title']}}</h3>
                <p>{{$post['body']}}</p>
            </div>
        @endforeach
    </div>
    
    @else
    
    <h1 style="text-align: center;margin-top:3rem;">Welcome to Laravel Blog</h1>
    <div class="container">
        <h2>Register</h2>
        <form action="/register" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-submit">Register</button>
        </form>
    </div>
    <div class="container">
        <h2>Login</h2>
        <form action="/login" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <button type='submit' class='btn-submit'>Login</button>
            </div>
        </form>
    </div>
    @endauth

</body>
</html>