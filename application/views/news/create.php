        <form action="<?php echo site_url('news/menambah')?>" method="post">
                <table style="align:center">
                    <tr>
                        <td>Judul</td>
                        <td>:</td>
                        <td><input type="text" style="width:100%; height:30px; font-size:16px" name="judul" required></td>
                    </tr>   
                    <tr>
                        <td>Slug</td>
                        <td>:</td>
                        <td>
                            <select name="slug" style="width:100%; height:30px; font-size:16px" >
                                <option></option>
                                <option>slug1</option>
                                <option>slug2</option>
                                <option>slug3</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Isi</td>
                        <td>:</td>
                        <td><textarea name="isi" rows="8" cols="50" required></textarea></td>
                    </tr> 
                    <tr>
                        <td colspan="3">
                            <button style="background:#00bfff; width:100%; height:40px;" type="submit">Simpan</button>
                        </td>
                    </tr>        
                </table>
        </form>
    </body>
</html>