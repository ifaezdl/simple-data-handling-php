<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="col-md-12 d-flex justify-content-center mt-5"> 
    
        <div class="col-md-4">
        <form id="userForm" action="data-handling.php" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputName" placeholder="name@example.com" name="name">
                <label for="floatingInputName">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInputWeight" placeholder="Weight" name="weight">
                <label for="floatingInputWeight">Weight</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInputHeight" placeholder="Height" name="height">
                <label for="floatingInputHeight">Height</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="floatingInputDate" placeholder="BirthDay" name="birthday">
                <label for="floatingInputDate">BirthDay</label>
            </div>
            <div class="form-floating mb-3">
                <input type="time" class="form-control" id="floatingInputTime" placeholder="Time" name="time">
                <label for="floatingInputTime">Time</label>
            </div>
            <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>
  
</div>  

</body>

</html>
