<table border="1">
    
    @foreach($data as $row)
    <tr>
        <td>
            {{$row->name}}
        </td>
    </tr>
    @endforeach
</table>