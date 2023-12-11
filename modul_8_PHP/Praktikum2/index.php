<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Data</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    form {
      max-width: 500px;
      width: 100%;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input, textarea {
      width: 97%;
      padding: 8px;
      margin-bottom: 15px;
    }

    /* Penambahan CSS untuk jenis kelamin */
    label[for="laki-laki"], label[for="perempuan"] {
    display: inline-block;
    margin-right: 10px;
    }
    button {
      padding: 10px;
      background-color: #3498db;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    button:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <form action="handle_form.php" method="post">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="website">Website:</label>
    <input type="url" name="website" id="website">

    <label for="komentar">Komentar:</label>
    <textarea name="komentar" id="komentar" rows="4" required></textarea>

    <label for="gender">Jenis Kelamin:</label>
    <div>
    <input type="radio" name="gender" id="laki-laki" value="laki-laki" required>
    <label for="laki-laki">Laki-Laki</label>

    <input type="radio" name="gender" id="perempuan" value="perempuan" required>
    <label for="perempuan">Perempuan</label>
    </div>

    <button type="submit">Kirim Data</button>
  </form>
</body>
</html>