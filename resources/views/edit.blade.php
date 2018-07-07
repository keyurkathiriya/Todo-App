<!DOCTYPE html>
<html>
<head>
    <title>
        
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TODP APP</h3>
            </div>

            <div class="card-body">
                <form action="/update" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$editdata->id}}">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Task Name</label>
                    <input type="text" class="form-control" id="taskname" name="taskname" aria-describedby="emailHelp" value="{{$editdata->taskname}}" placeholder="Enter Task Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Task Status</label>
                    <input type="text" class="form-control" id="taskstatus" name="taskstatus" value="{{$editdata->taskstatus}}" placeholder="Task Status">
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>