<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <label for="">Nama</label><br>
        <input type="text" class="form-control" name="name" id="" value="{{ old('name') }}" required><br>

        <label for="">Username</label><br>
        <input type="text" class="form-control" name="username" id="" value="{{ old('username') }}" required><br>

        <label for="">Password</label><br>
        <input type="password" class="form-control" name="password" id="" required><br>

        <label for="">Position</label><br>
        <input type="text" name="status" value="1">

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</body>
</html>