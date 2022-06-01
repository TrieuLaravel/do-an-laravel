@extends('admin.layout.layout')

@section('content')
    <label for="#">Dang nhap</label>
    <form action="#">
        @csrf
        <div>
            <input type="text" placeholder="Tai Khoan" name="username" required>
        </div><br>
        <div>
            <input type="password" placeholder="Mat khau" name="password" id="password" required>
        </div>
        <br>
        <div class="container">
            <input type="checkbox" onclick="checkPass()"> Hien mat khau
        </div>
        <br>
        <div>
            <div></div>
                <a href="#">Tao tai khoan</a>
            </div>
            <div>
                <a href="#">Quen mat khau</a>
            </div>
        </div>
        <button type="submit">Dang nhap</button>
    </form>
@endsection