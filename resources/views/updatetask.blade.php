<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Update Task</title>
</head>
<body>
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <form action="/updatetasks" method="post">
            {{csrf_field()}}
            <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/>
            <input type="hidden" name="id" value="{{$taskdata->id}}"/>
            <input type="submit" class="btn btn-warning" value="update"/>
            &nbsp;&nbsp; <input type="button" class="btn btn-danger" value="Cancel"/>
        </form>
    </div>
</body>
</html>