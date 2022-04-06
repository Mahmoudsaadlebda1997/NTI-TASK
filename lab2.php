<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    <form method="post" action="">
        <div class="form-group"  >
            <label for="exampleInputname1">name</label>
            <input type="text" name ='name' class="form-control" id="exampleInputname1" placeholder="enter Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text"  name ='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group"  >
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name ='password' class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputAddress1">Address</label>
            <input type="text" name ='address' class="form-control" id="exampleInputAddress1" placeholder="enter Address">
        </div>
        <div class="form-group"  >
            <label for="exampleInputLinkedin1">Linkedin URL</label>
            <input type="text" name ='linkedin' class="form-control" id="exampleInputLinkedin1" placeholder="enter linkedinURL">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
    
    $name=$_POST['name'];   
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $linkedin=$_POST['linkedin'];
    if(empty($name)){
        $errors['Name']= "Required";
    }
    else if (is_numeric($name))
    {
         $errors['Name']= "Name Cannot Be Numbers Only Must Be String";
    }
    if(empty($email)){
        $errors['Email']= "Required";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['Email']= "Invalid Email missing @";
    }
    if(empty($password)){
        $errors['Password']= "Required";
    }
    else if (strlen($password) < 6)
    {
       $errors['Password'] = "Password is too short, minimum is 6 characters.";
    }
    if(empty($address)){
        $errors['Address']= "Required";
    }
    else if (strlen($address) < 10)
    {
       $errors['Address'] = "Address is too short, minimum is 10 characters.";
    }
    if(empty($linkedin)){
        $errors['Linkedin']= "Required";
    }
    else if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$linkedin)) {
        $errors['Linkedin']= "Invalid URL";
    }    
      
    if(count($errors) > 0 ){
        foreach ($errors as $error => $value) {

            echo '*'.$error.':'.$value.'<br>';
        }
    }else{
        echo 'Thx For Sharing Data';
    }
    ?>
</body>
</head>
</html>
