<h1>Login Page</h1>

{{-- <form action="login-submit" method="POST">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="password" name="password" id="">
    <button type="submit">Submit</button>
</form> --}}


<form action="/course-submit" method="POST">
    @csrf
    <input type="text" name="course">
    <button type="submit">Save</button>
</form>

{{-- <form action="/login-profile" method="post">
    @csrf
    <input type="text" name="email">
    <input type="password" name="password">
    <button type="submit">Login</button>
</form> --}}