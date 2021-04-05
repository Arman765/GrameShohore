<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-social/bootstrap-social.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
        body {
    background-color: #D1C4E9  !important;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.form-group input {
    border: none;
}

.form-group {
    background-color: white;
    border-radius: 12px;
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.2),0px 1px 3px rgba(0, 0, 0, 0.1);
}
.form-group i,
.form-group input::placeholder,
p {
    color: #adb5bd !important;
}
.form-group input:focus,
.form-group input:active {
    box-shadow: none;
}
.btn {
    background-color: #172b4d !important;
    border-color: #172b4d !important;
}
.btn:focus,
.btn:active {
    box-shadow: none !important;
}
.btn:hover {
    transform: translateY(-1px);
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.2),0px 1px 3px rgba(0, 0, 0, 0.1);
}
    </style>
    <title>Update Schedules</title>
</head>

<body>

    <div class="container">
        <form action="UpdatingSchedule.php" method="POST">
            <h3>Schedules</h3>
            <hr>


            <div class="form-group">
                
                <input type="text" name="Bus_ID" class="form-control" placeholder="Enter BUS NO" required>

            </div>
            <div class="form-group">
                
                <input type="text" name="com" class="form-control" placeholder="Which Bus ?" required>
            </div>


            <div class="form-group">
                
                <input type="text" name="Dep_time" class="form-control" placeholder="Time Of Depart ?" required>
            </div>

            <div class="form-group">
               
                <input type="text" name="from" class="form-control" placeholder="From ?" required>
            </div>

            <div class="form-group">
               
                <input type="text" name="to" class="form-control" placeholder="To ?" required>
            </div>
            <div class="form-group">
               
                <input type="date" name="TravelDate" class="form-control" placeholder="Date of Travel ?" required>
            </div>






            <div>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" name="SaveData" class="btn btn-primary">ADD</button>

            </div>
        </form>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html>