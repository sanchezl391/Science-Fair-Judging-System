<!doctype html>
<html lang="en">
    <head>
        <title>SFJS admin</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="style.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>

        <!-- WELCOME USER -->
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">Welcome User</span>
            <a class="btn btn-secondary" href="index.php" role="button">Logout</a>
        </nav>

        <br>

        <!-- 2 column Grid containing nav pills and content -->
        <div class="row">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-users" role="tab" aria-controls="home">Users</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-students" role="tab" aria-controls="profile">Students</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-projects" role="tab" aria-controls="messages">Projects</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-reports" role="tab" aria-controls="settings">Reports</a>
                </div>
            </div>
            <div class="col-8">
                <!-- USERS TAB -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-users" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="container">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary btn-block">Add User</button>
                            <button type="button" class="btn btn-danger btn-block">Delete User</button>
                        </div>
                    </div>
                    <!-- STUDENTS TAB -->
                    <div class="tab-pane fade" id="list-students" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="container">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary btn-block">Add User</button>
                            <button type="button" class="btn btn-danger btn-block">Delete User</button>
                        </div>
                    </div>
                    <!-- PROJECTS TAB -->
                    <div class="tab-pane fade" id="list-projects" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="container">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">PID</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Average Score</th>
                                        <th scope="col">Student ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary btn-block">Add User</button>
                            <button type="button" class="btn btn-danger btn-block">Delete User</button>
                        </div>
                    </div>
                    <!-- REPORTS TAB -->
                    <div class="tab-pane fade" id="list-reports" role="tabpanel" aria-labelledby="list-settings-list">
                        <div class="container">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Email</th>
                                        <th scope="col">PID</th>
                                        <th scope="col">Present</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary btn-block">Add User</button>
                            <button type="button" class="btn btn-danger btn-block">Delete User</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>