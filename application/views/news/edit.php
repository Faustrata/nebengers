        <form action="<?php echo site_url('news/mengupdate')?>" method="post">
                <input type="hidden" name="id" value="<?php echo $detail['id']; ?>">
                <table style="align:center">
                    <tr>
                        <td>Judul</td>
                        <td>:</td>
                        <td><input type="text" value="<?php echo $detail['title']; ?>" style="width:100%; height:30px; font-size:16px" name="judul" required></td>
                    </tr>   
                    <tr>
                        <td>Slug</td>
                        <td>:</td>
                        <td>
                            <select name="slug" style="width:100%; height:30px; font-size:16px" >
                                <option><?php echo $detail['slug']; ?></option>
                                <option>slug1</option>
                                <option>slug2</option>
                                <option>slug3</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Isi</td>
                        <td>:</td>
                        <td><textarea name="isi" rows="8" cols="50" required><?php echo $detail['text']; ?></textarea></td>
                    </tr> 
                    <tr>
                        <td colspan="3">
                            <button style="background:#cc99ff; width:100%; height:40px;" type="submit">Update</button>
                        </td>
                    </tr>        
                </table>
        </form>
    </body>
</html>