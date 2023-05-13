<div class="modal fade" id="changepassword<?php echo $Id; ?>" tabindex="-1" role="dialog" aria-labelledby="changepassword<?php echo $Id; ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(111 202 203);">
        <h5 class="modal-title" id="changepassword<?php echo $Id; ?>">User Id: <b><?php echo $Id; ?></b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">               
            <form action="partials/_userManage.php" method="post">
                <div class="form-group">
                    <b><label for="npass">New Password</label></b>
                    <input class="form-control" id="npass" name="npass"  type="text">
                </div>
                <div class="form-group">
                    <b><label for="npass">Re enter new Password</label></b>
                    <input class="form-control" id="rnpass" name="rnpass"  type="text">
                </div>
                <button type="submit" name="editUser" class="btn btn-success">Update</button>
            </form>
    </div>
  </div>
</div>



<button class="btn btn-sm btn-primary"style="margin:5px 5px; width:100%;" data-toggle="modal" data-target="#changepassword' .$Id. '" type="button">Change Password</button>'






<div class="modal fade" id="changepassword<?php echo $Id; ?>" tabindex="-1" role="dialog" aria-labelledby="changepassword<?php echo $Id; ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(111 202 203);">
        <h5 class="modal-title" id="changepassword<?php echo $Id; ?>">User Name: <b><?php echo $name; ?></b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">               
            <form action="partials/_userManage.php" method="post">
                <div class="form-group">
                    <b><label for="npass">New Password</label></b>
                    <input class="form-control" id="npass" name="npass"  type="text">
                    <input class="form-control" id="npass" name="id" value="<?php echo $Id; ?>" type="hidden">

                </div>
                
                <button type="submit" name="changepassword" class="btn btn-success">Update</button>
            </form>
    </div>
  </div>
</div>
    </div>

    

    