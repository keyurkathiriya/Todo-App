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
                <h1>TODP APP</h1>
                <a href="/add" class="btn btn-info float-right">Add</a>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Task Name</th>
                            <th>Task Status</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i =1; ?>
                        @foreach($fetch as $row)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$row->taskname}}</td>
                            <td>{{$row->taskstatus}}</td>
                            <td><a href="/edit/{{$row->id}}"  class="btn btn-info">Edit</a></td>
                            <td>
                            <form action="/delete" method="post">
                                <input type="hidden" name="id" value="{{$row->id}}"> 
                                @csrf
                                <button class="btn btn-danger">Delete</button>   
                            </form>
                            </td>
                        </tr>
                        <?php $i++ ?>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>

</body>
</html>