<html> 
    <style>
        table 
            { 
                width: 100px;
                margin: 0 auto;
            }
    </style>
    <body>
        <form action="{{url('them_the_loai')}}" method="post">
        {{ csrf_field() }}
            <table> 
                <tr> 
                    <td> ID </td> 
                    <td> Tên thể loại</td>
                </tr>
                <tr> 
                    <td> <input type='number' name='nhap_id'> <br> </td>
                    <td> <input type='text' name='nhap_theloai'> <br> </td>
                </tr>
                <tr> 
                    <td colspan="2" style="text-align: center"> <input type='submit' value='Lưu'> </td> 
                </tr>
            </table>
            
        </form>     
    </body>
</html>
