<form id="changed-form" action="index.php/notification_controller/submitedit" method="POST">
    <div class="form-group">
        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="<?php echo $first_name ?>">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="sname" name="sname" placeholder="Second Name" value="<?php echo $second_name ?>">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email ?>">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" id="repwd" name="repwd" placeholder="Retype-Password">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="mob" name="mob" placeholder="Mobile" value="<?php echo $mobile ?>">
    </div>

    <div style="text-align:center">
        <div class="form-group">
            <select name="cat">
                <option value='acc'>Accounts</option>
                <option value='mar'>Marketting</option>
                <option value='sal'>Sales</option>
            </select>
        </div>
        <button id="submit" type="button" class="btn btn-default" onclick="return submitChangedForm()">Change Details</button>
        
    </div>
</form>