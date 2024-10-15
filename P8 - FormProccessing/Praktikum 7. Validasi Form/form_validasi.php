<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Dengan Validasi</title>
    <script script="jquery-3.7.1"></script>
</head>
<body>
    <h1>Form Input Dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <span id="password-error" style="color:red"></span>
        <br>

        <input type="submit" name="submit" id="">
    </form>

    <script>
        $(document).ready(function(){
            $("#myForm").submit(function (event) {  
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                if (nama == "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;;
                } else {
                    $("#nama-error").text("");   
                }
                
                if (email == ""){
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else if (!validateEmail(email)) {
                    $("#email-error").text("Format email tidak valid.");
                    valid = false;
                }

                if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter.");
                    valid = false;
                }

                if (valid) {
                    $.ajax({
                        url: "proses_validasi.php",
                        type: "POST",
                        data: {nama: nama, email: email, password: password},
                        success: function(response) {
                            // Menampilkan respons dari server ke div hasil
                            $("#hasil").html(response);
                        },
                        error: function() {
                            $("#hasil").html("Terjadi kesalahan saat mengirim data.");
                        }
                    });
                }
            });
            function validateEmail(email) {
                var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }
        });
    </script>
</body>
</html>