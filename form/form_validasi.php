<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi AJAX</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi AJAX</h1>
<form id="myForm">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color: red;"></span><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color: red;"></span><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <span id="password-error" style="color: red;"></span><br>

    <input type="submit" value="Submit">
</form>

<div id="response-message" style="margin-top: 20px;"></div>

<script>
$(document).ready(function(){
    $("#myForm").submit(function(event){
        event.preventDefault();

        var nama = $("#nama").val().trim();
        var email = $("#email").val().trim();
        var password = $("#password").val().trim();
        var valid = true;

        $("#nama-error, #email-error, #password-error").text("");
        $("#response-message").text("");

        if (nama === "") {
            $("#nama-error").text("Nama harus diisi.");
            valid = false;
        }

        if (email === "") {
            $("#email-error").text("Email harus diisi.");
            valid = false;
        }

        if (password.length < 8) {
            $("#password-error").text("Password minimal 8 karakter.");
            valid = false;
        }

        if (valid) {
            $.ajax({
                url: "proses_validasi.php",
                type: "POST",
                data: { nama: nama, email: email, password: password },
                success: function(response){
                    $("#response-message").html("<span style='color: green;'>" + response + "</span>");
                    $("#myForm")[0].reset();
                },
                error: function(){
                    $("#response-message").html("<span style='color: red;'>Terjadi kesalahan saat mengirim data.</span>");
                }
            });
        }
    });
});
</script>
</body>
</html>