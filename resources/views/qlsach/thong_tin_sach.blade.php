<html>
    <head>
    <style>
            table 
            {
                width: 100%;
                border-collapse: collapse;
                
            }
    </style>
    </head>
    <body>
        <table border = "1"> 
            <tr>
                <th> Tiêu đề </th> 
                <th> Tác giả </th> 
            </tr>
            </tr>
            @foreach($sach as $row)
                <tr>
                    <td>{{$row->tieu_de}}</td>
                    <td>{{$row->tac_gia}}</td>
                </tr>
            @endforeach
    </table>
</body>
</html>
 