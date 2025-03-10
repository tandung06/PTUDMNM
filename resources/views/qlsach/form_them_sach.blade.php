<html>
    <body>
        <h2> NHẬP THỂ LOẠI </h2>
        <form action="{{url('/qlsach/luutheloai')}}" method="post">
            {{ csrf_field() }}
            <table> 
                <tr>
                    <td> ID </TD>
                    <td> Tên thể loại </td>
                </tr>
                <tr> 
                    <td> <input type = "text" name='id[]'></td>
                    <td> <input type='text' name='ten_the_loai[]'> <br> </td>
                </tr>
                <tr> 
                    <td> <input type = "text" name='id[]'></td>
                    <td> <input type='text' name='ten_the_loai[]'> <br> </td>
                </tr>
                <tr> 
                    <td colspan="2";align="center">
                         <input type='submit' value='Lưu'> 
                    </td> 
                </tr>
            </table>
        </form>
    </body>
</html>