<h1>Students List</h1>

<table border="1">
    <tr>
        <td>Name</td>
        <td>Age</td>
        <td>Operation</td>
    </tr>
    @foreach ($students as $item)
    <tr>
        <td>{{$item['name']}}</td>
        <td>{{$item['age']}}</td>
        <td><a href={{"delete/".$item['name']}}>Delete</a>
            <a href={{"edit/".$item['name']}}>Edit</a>
        </td>
    </tr>
    @endforeach
</table>

<div>
    {{$students->links()}}
</div>

<style>
    .w-5{
        display: none;
    }
</style>