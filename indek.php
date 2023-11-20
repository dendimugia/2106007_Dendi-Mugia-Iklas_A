<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Pendaftaran GMAIL</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
      <div class="header">
        <h1>Form Pendaftaran GMAIL</h1> 
      </div>
      <div class="content">
        <p>Pastikan anda telah mengisi dengan benar formulir pendaftaran dibawah ini:</p>
        <span>*</span> Wajib
        <br>
        <br>
      <form method="post" action="proses_input.php">
        <div class="form-row">
          <label for="Nama">1. Nama Lengkap <span>*</span></label>
          <input class="full-input" type="text" name="Nama" id="Nama" placeholder="Nama lengkap anda" required>
        </div>
        <div class="form-row">
          <label for="JK">2. Jenis Kelamin <span>*</span></label>
          <input type="radio" name="JK"  id="JK" value="Laki-laki">Laki-laki
          <br>
          <input type="radio" name="JK"  id="JK" value="Perempuan">Perempuan
        </div>
        <div class="form-row">
            <label for="tanggalLahir">3. Tanggal Lahir <span>*</span></label>
            <input type="date" name="tanggalLahir" id="tanggalLahir"  required><br>
        </div>
        <div class="form-row">
            <label for="Username">4. Username <span>*</span></label>
            <input class="full-input" type="text" name="Username" id="Username"  required><br>
        </div>
        <div class="form-row">
          <label for="Password">5. Password <span>*</span></label>
            <input  class="full-input" type="password" name="Password" id="Password"   required><br>
        </div>
        <div class="form-row">
          <label for="No">6. No Handphone<span>*</span></label>
          <input class="full-input" type="tel" name="No" id="No" pattern="\d\d\d\d\d\d\d\d\d\d\d\d" required placeholder=" Masukkan No.Hp 08xxxxxxxxxx" required>
        </div>
        
        </div>
        <div class="form-submit">
          <button>DAFTAR</button>
        </div>
      </form>
      </div>
    </div>

</body>

</html>