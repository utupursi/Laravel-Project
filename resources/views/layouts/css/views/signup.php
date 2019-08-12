<div>
    <h1>Sign up</h1>
    <form method="post" >
    <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="name" class="form-control<?php  echo isset($errors['errorname'])&&$errors['errorname']!='' ? ' is-invalid' : ($data['name'] ? ' is-valid' : '') ?>" id="exampleInputEmail1" name="name"
            value="<?php echo $data['name'];?>"
                   placeholder="Enter name">
                   <?php if(isset($errors['errorname'])&&$errors['errorname']!=''):?>
                   <p  class="invalid-feedback"> <?php echo $errors['errorname'];?> </p>
<?php endif;?>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="name" class="form-control<?php  echo isset($errors['errorlastname'])&&$errors['errorlastname']!='' ? ' is-invalid' : ($data['lastname'] ? ' is-valid' : '') ?>" id="exampleInputEmail1" name="lastname"
            value="<?php echo $data['lastname'];?>"
                   placeholder="Enter Last Name">
                   <?php if(isset($errors['errorlastname'])&&$errors['errorlastname']!=''):?>
                   <p  class="invalid-feedback"> <?php echo $errors['errorlastname'];?> </p>
<?php endif;?>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">City</label>
            <input type="text" class="form-control<?php  echo isset($errors['errorcity'])&&$errors['errorcity']!='' ? ' is-invalid' : ($data['city'] ? ' is-valid' : '') ?>" id="exampleInputEmail1" name="city"
            value="<?php echo $data['city'];?>"
                   placeholder="Enter city">
                   <?php if(isset($errors['errorcity'])&&$errors['errorcity']!=''):?>
                   <p  class="invalid-feedback"> <?php echo $errors['errorcity'];?> </p>
<?php endif;?>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control<?php  echo isset($errors['erroraddress'])&&$errors['erroraddress']!='' ? ' is-invalid' : ($data['address'] ? ' is-valid' : '') ?>" id="exampleInputEmail1" name="address"
            value="<?php echo $data['address'];?>"
                   placeholder="Enter address">
                   <?php if(isset($errors['erroraddress'])&&$errors['erroraddress']!=''):?>
                   <p  class="invalid-feedback"> <?php echo $errors['erroraddress'];?> </p>
<?php endif;?>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email"  class="form-control<?php  echo isset($errors['erroremail'])&&$errors['erroremail']!='' ? ' is-invalid' : ($data['email'] ? ' is-valid' : '') ?>" id="exampleInputEmail1" name="email"
            value="<?php echo $data['email'];?>"
                   placeholder="Enter email">
                   <?php if(isset($errors['erroremail'])&&$errors['erroremail']!=''):?>
                   <p  class="invalid-feedback"> <?php echo $errors['erroremail'];?> </p>
<?php endif;?>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control<?php  echo isset($errors['errorpassword'])&&$errors['errorpassword']!='' ? ' is-invalid' : ($data['password'] ? ' is-valid' : '') ?>" id="exampleInputPassword1" 
            value="<?php echo $data['password'];?>"
            name="password" placeholder="Password">
            <?php if(isset($errors['errorpassword'])&&$errors['errorpassword']!=''):?>
                   <p  class="invalid-feedback"> <?php echo $errors['errorpassword'];?> </p>
<?php endif;?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
