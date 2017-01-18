<head>
    <style>
        .btnPrompt{pointer:cursor}
        #signup-link:hover{cursor:pointer}
    </style>
</head>
<body>
    <div class="col-sm-3">
        <!-- Form --> 
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-log-in"></span> 
                    Log In
                </h3>
            </div>
            <div class="panel-body">
                <form action="index.php/login_controller/login" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="uid" name="uid" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">Log In</button>
                </form>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-log-in"></span> 
                    <a id="signup-link" onclick="showForm()">Send me vacancy notifications</a>

                </h3>
            </div>
            <script>
                function showForm() {
                    var dis = document.getElementById("form-body").style.display;
                    if (dis === 'block')
                        document.getElementById("form-body").style.display = 'none';
                    else
                        document.getElementById("form-body").style.display = 'block';
                    return false;
                }

            </script>
            <div class="panel-body" style="display:none" id="form-body">
                <form id="notification-form" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="sname" name="sname" placeholder="Second Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="repwd" name="repwd" placeholder="Retype-Password">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mob" name="mob" placeholder="Mobile">
                    </div>
                    
                    <div style="text-align:center">
                        <div class="form-group">
                            <select name="cat">
                                <option value='acc'>Accounts</option>
                                <option value='mar'>Marketting</option>
                                <option value='sal'>Sales</option>
                            </select>
                        </div>
                        <button id="submit" type="button" class="btn btn-default" onclick="return submitNotficaionForm()">I'm in</button><br>

                        <!-- Trigger the modal with a button -->


                        <!-- Modal -->
                        <div id="successModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <div class="alert alert-success">
                                            You have successfully registered for notifications.
                                        </div>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-------->
                        <!-- Modal -->
                        <div id="failModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <div id="message" class="alert alert-danger">
                                            Sign up was not successful.
                                        </div>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-------->
                        <script>
                            function showSuccess() {
                                $('#successModal').modal('show');
                                
                            }
                            function showFailed(data) {
                                $("#message").html(data);
                                $('#failModal').modal('show');
                                
                            }
                            function submitNotficaionForm() {
                                $.ajax({
                                    type: "POST",
                                    url: "index.php/notification_controller/addNew",
                                    data: $("#notification-form").serialize(),
                                    success: function (data) {
                                        if (data.trim() === "successful") {
                                            showSuccess();
                                            var form = document.getElementById("notification-form");
                                            form.reset();
                                        } else {
                                            showFailed(data);
                                        }

                                    }
                                });
                                return false;
                            }

                        </script>
                        <a style="cursor:pointer" id="btnPrompt" class="btnPrompt">Change Details</a><br>
                        <a style="cursor:pointer" class="btnPrompt" href="<?php echo base_url() ?>index.php/notification_controller/remove">Disable notifications</a>

                    </div>
                </form>


            </div>
        </div>


        <!-- Progress Bars -->
        <div class="panel panel-default" style="display:none">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-scale"></span> 
                    Dramatically Engage
                </h3>
            </div>
            <div class="panel-body">
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100"
                         aria-valuemin="0" aria-valuemax="100" style="width:100%">
                        100% Proactively Envisioned
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80"
                         aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        80% Objectively Innovated
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45"
                         aria-valuemin="0" aria-valuemax="100" style="width:45%">
                        45% Portalled
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="35"
                         aria-valuemin="0" aria-valuemax="100" style="width:35%">
                        35% Done
                    </div>
                </div>
            </div>
        </div>

        <!-- Text Panel -->
        <div class="panel panel-default" style='display:none'>
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-bullhorn"></span> 
                    Active Predomination
                </h3>
            </div>
            <div class="panel-body">
                <p>Proactively envisioned multimedia based expertise and cross-media growth strategies.</p>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">Resource</button>
                    <button type="button" class="btn btn-default">Envision</button>
                    <button type="button" class="btn btn-default">Niche</button>
                </div>
            </div>
        </div>

        <!-- Map -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-bullhorn"></span> 
                    We are here
                </h3>
            </div>

        </div>
    </div>
</body>