<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <form action="" enctype="multipart/form-data" method="post">
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td><input type="text" name="barang" id=""></td>
                </tr>
                <tr>
                    <td>Foto Barang</td>
                    <td><input type="file" name="foto_barang" id=""></td>
                </tr>
                <tr>
                    <td>Catatan Barang</td>
                    <td><textarea name="catatan" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="submit"></td>
                </tr>
            </table>
        </form>
    </div>
    <a href="#" id="btnklik">kilk</a>
    <hr>
    <center></center>
    <script>
        var btn = document.getElementById("btnklik");

        btn.addEventListener('click', function() {
            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log(xhr.responseText);
                }
            }
            xhr.open('GET', 'form-edit.php', true);
            xhr.send();
        })
    </script>
</body>
</html>