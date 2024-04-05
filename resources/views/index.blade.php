<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            height: 100vh;
        }

        div{
            margin: 20px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        button {
            border-radius: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: 0.3s;
            
        }

        a{
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            color: #fff;
            font-weight: bold;
        }

        button:hover{
            transform: scale(1.08);
        }
    </style>
</head>
<body>
    <h1>Laravel CRUD Simple Project</h1>
    <div>
    <button><a href="/register">Access</a></button>
    </div>
</body>
</html>