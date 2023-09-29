<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('add-student')}}" method= "post">
        @csrf
        Name <input type="text" name="name"><br>
        <button type="submit">Submit</button>
        </form>
        <table border="1">
            <tr>
                <td>
                    #
                </td>
                <td>
                    Name
                </td>
                <td colspan="2">
                    Action               
                 </td>
            </tr>  
            @if ($data->count()>0)
            @foreach($data as $key=>$value )
            <tr>
                <td>
                    {{ $key++ }}                    
                </td>
                <td>
                    {{ $value->name }}
                </td>
                <td>
                    <a href="{{ route('view-student',$value->id)}}">Edit</a>|  <a href="{{route('delete-student',$value->id)}}">Delete</a>
                </td>
            </tr>
               @endforeach     
               @else  
              <tr>
                <td>
                    No data found
                </td>
              </tr>
            @endif 
        </table>     

</body>
</html>