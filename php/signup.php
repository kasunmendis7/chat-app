<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        // Let's check whether user email is valid or not
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            // Let's check whether email is already existing in the database or not     
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){ // Check if email already exists
                echo "$email - This email already exist!";
            }else{
                // Check whether user uploaded a file or not
                if(isset($_FILES['image'])){ // If file is uploaded
                    $img_name = $_FILES['image']['name']; // Getting user uploaded image name
                    $img_type = $_FILES['image']['type']; // Getting user uploaded image type
                    $tmp_name = $_FILES['image']['tmp_name']; // This is the temporary name used to save/move the image in our folder
                    
                    // Let's explode the image and get the extension of the image
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode); // Here we get the extension of an user uploaded image file
    
                    $extensions = ["jpeg", "png", "jpg"]; // These are some valid image extension and we have stored them in an array
                    if(in_array($img_ext, $extensions) === true){ // Check if user uploaded image extension is matched with any array extensions
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if(in_array($img_type, $types) === true){
                            $time = time(); // We need this time because when we are uploading user image to in our folder we rename user file with current time
                            $new_img_name = $time.$img_name; // So all the image files will have a unique name
                            // Move the user uploaded image to the particular folder
                            if(move_uploaded_file($tmp_name,"images/".$new_img_name)){ // If user uploaded image moved to the folder successfully
                                $ran_id = rand(time(), 100000000);      
                                $status = "Active now"; // One user signed in then his status will be active now 
                                $encrypt_pass = md5($password);
                                $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}')");
                                if($insert_query){
                                    $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                    if(mysqli_num_rows($select_sql2) > 0){
                                        $result = mysqli_fetch_assoc($select_sql2);
                                        $_SESSION['unique_id'] = $result['unique_id'];
                                        echo "success";
                                    }else{
                                        echo "This email address not Exist!";
                                    }
                                }else{
                                    echo "Something went wrong. Please try again!";
                                }
                            }
                        }else{
                            echo "Please upload an image file - jpeg, png, jpg";
                        }
                    }else{
                        echo "Please upload an image file - jpeg, png, jpg";
                    }
                }
            }
        }else{
            echo "$email is not a valid email!";
        }
    }else{
        echo "All input fields are required!";
    }
?>