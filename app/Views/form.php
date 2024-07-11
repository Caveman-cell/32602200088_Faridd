<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action= "/form-submit" method="post">
        <?= csrf_field() ?>
        <div style="display: flex; flex-direction: column; width: 500px; margin: auto; padding: 10px; color: blue;
        font-weight: bold;">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" require> <br>
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" require> <br> 
        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" id="kelas" require> <br>  
        <label for="matakuliah">Mata Kuliah:</label>
        <input type="text" name="matakuliah" id="matakuliah" require> <br> 
        <label for="dosen">Dosen Pengampu</label>
        <input type="text" name="dosen" id="dosen" require> <br>    
        <label for="asisten">Asisten Praktikum:</label>
        <input type="text" name="asisten" id="asisten" require> <br>  
        <button type="submit">Submit</button>     
    </div>
    </form>
</body>
</html>