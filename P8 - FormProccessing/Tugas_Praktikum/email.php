<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Kontak</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Formulir Kontak</h1>
    <form id="contactForm" method="post" action="send_email.php">
        <label for="name">Nama Lengkap:</label>
        <input type="text" name="name" id="name" required>
        <span class="error" id="name-error"></span>
        <br><br>

        <label for="email">Alamat Email:</label>
        <input type="email" name="email" id="email" required>
        <span class="error" id="email-error"></span>
        <br><br>

        <label for="subjek">Subjek:</label>
        <input type="text" name="subjek" id="subjek" required>
        <span class="error" id="subjek-error"></span>
        <br><br>

        <label for="pesan">Pesan:</label>
        <textarea name="pesan" id="pesan" required></textarea>
        <span class="error" id="pesan-error"></span>
        <br><br>

        <input type="submit" value="Kirim">
    </form>

    <div id="result"></div>

    <script>
        $(document).ready(function() {
            $("#contactForm").submit(function(event) {
                event.preventDefault();
                $(".error").text("");

                var name = $("#name").val();
                var email = $("#email").val();
                var subjek = $("#subjek").val();
                var pesan = $("#pesan").val();
                var valid = true;

                if (name.length < 3) {
                    $("#name-error").text("Nama lengkap minimal 3 karakter.");
                    valid = false;
                }

                var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(email)) {
                    $("#email-error").text("Alamat email tidak valid.");
                    valid = false;
                }

                if (subjek.trim() === "") {
                    $("#subjek-error").text("Subjek tidak boleh kosong.");
                    valid = false;
                }

                if (pesan.trim() === "") {
                    $("#pesan-error").text("Pesan tidak boleh kosong.");
                    valid = false;
                }

                if (valid) {
                    $.ajax({
                        url: "send_email.php",
                        type: "POST",
                        data: {
                            name: name,
                            email: email,
                            subjek: subjek,
                            pesan: pesan
                        },
                        success: function(response) {
                            $("#result").html(response);
                            $("#contactForm")[0].reset();
                        },
                        error: function() {
                            $("#result").html("Terjadi kesalahan saat mengirim pesan.");
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
