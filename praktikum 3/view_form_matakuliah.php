<html>
<head>
    <title> Form Input Mata Kuliah </title>
</head>

<body>
    <center> 
    <form action = "<?=base_url('matakuliah/cetak'); ?>"method="post">
<table>
        <tr> 
            <th colspan = "3">
                Form Input Data Mata Kuliah
            </th>
            </tr>
            
            <tr>
                <th colspan = "3">
                </th>
            </tr>

            <tr>
                <th>Kode MATKUL</th>
                <th>:</th>
                <td>
                    <input type = "text" name="kode" id="kode">
                </td>
            </tr>
            <tr> 
                <th> Nama MATKUL </th>
                <td>:</td>
                <td>
                    <input type = "text" name = "nama" id ="nama">
                </td>
            </tr>
            <tr> 
                <th> SKS </th>
                <td>:</td>
                <td>
                <select name ="SKS" id="sks">
                    <option value=""> Pilih 2 </option>
                    <option value=""> Pilih 3 </option>
                    <option value=""> Pilih 4 </option>
                </select>
                </td>
            </tr>
            <tr>
            <th colspan="3" align = "center">
                <input type = "submit" value = "submit">
                </th>
            </tr>


    </table>
    </form>
    </center>            
    </body>
    </html>

    
    