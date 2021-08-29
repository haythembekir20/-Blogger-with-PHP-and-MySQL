<?php
include('session.php');
if(isset($_FILES['img'])){
    $file_name = $_FILES['img']['name'];
    $file_size =$_FILES['img']['size'];
    $file_tmp =$_FILES['img']['tmp_name'];
    $file_type=$_FILES['img']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['img']['name'])));     
    move_uploaded_file($file_tmp,"./images/".$file_name);   
 }

// initializing variables
$username = "";
$email1    = "";
$error_message="";
//$errors = array(); 

// connect to the database

include("./action/config.php");
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($cx, $_POST['Username']);
  $email1 = mysqli_real_escape_string($cx, $_POST['email']);
  $password_1 = mysqli_real_escape_string($cx, $_POST['Password']);
  $password_2 = mysqli_real_escape_string($cx, $_POST['Passwordagain']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { $error_message="Username is required"; }
  else if (empty($email1)) { $error_message="Email is required"; }
  else if (empty($password_1)) { $error_message="Password is required"; }
  else if ($password_1 != $password_2) {
	$error_message="The two passwords do not match";
  }else if (empty($file_name)){$error_message="You must upload your diplome !";}
  if (empty($error_message)) {
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE  email='$email1' ";
  $result = mysqli_query($cx, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email1) {
      $error_message="email already exists";
    }
  }
}
  // Finally, register user if there are no errors in the form
  if (empty($error_message)) {
  //	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (email, username, pwd, role,image) 
  			  VALUES('$email1', '$username', '$password_1','1','$file_name')";
    mysqli_query($cx, $query);
    $_SESSION['username']=$username;
    //$_SESSION['success'] = "You are now logged in";
    header('location: ./index.php');
  	
  }


}
?>
<!DOCTYPE html>
<html lang="en" data-navbar="sticky">
	
<!-- Mirrored from reditory.gbjsolution.com/signup/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 19:56:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Reditory</title>
        <link href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,400;1,700&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet">
		<link href="assets/css/screen.mincc76.css?v=63bbb907b5" rel="stylesheet">
		<link rel="canonical" href="index.html" />
    <meta name="referrer" content="no-referrer-when-downgrade" />
    
    <meta property="og:site_name" content="Reditory" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Reditory" />
    <meta property="og:url" content="index.html" />
    <meta property="article:publisher" content="https://www.facebook.com/gbjsolution" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Reditory" />
    <meta name="twitter:url" content="index.html" />
    <meta name="twitter:site" content="@gbjsolution" />
    
    <script defer src="../../unpkg.com/%40tryghost/portal%400.14.0/umd/portal.min.js" data-ghost="../index.html"></script><style type='text/css'> .gh-post-upgrade-cta-content,
.gh-post-upgrade-cta {
    display: flex;
    flex-direction: column;
    align-items: center;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-align: center;
    width: 100%;
    color: #ffffff;
    font-size: 16px;
}

.gh-post-upgrade-cta-content {
    border-radius: 8px;
    padding: 40px 4vw;
}

.gh-post-upgrade-cta h2 {
    color: #ffffff;
    font-size: 28px;
    letter-spacing: -0.2px;
    margin: 0;
    padding: 0;
}

.gh-post-upgrade-cta p {
    margin: 20px 0 0;
    padding: 0;
}

.gh-post-upgrade-cta small {
    font-size: 16px;
    letter-spacing: -0.2px;
}

.gh-post-upgrade-cta a {
    color: #ffffff;
    cursor: pointer;
    font-weight: 500;
    box-shadow: none;
    text-decoration: underline;
}

.gh-post-upgrade-cta a:hover {
    color: #ffffff;
    opacity: 0.8;
    box-shadow: none;
    text-decoration: underline;
}

.gh-post-upgrade-cta a.gh-btn {
    display: block;
    background: #ffffff;
    text-decoration: none;
    margin: 28px 0 0;
    padding: 8px 18px;
    border-radius: 4px;
    font-size: 16px;
    font-weight: 600;
}

.gh-post-upgrade-cta a.gh-btn:hover {
    opacity: 0.92;
}</style><script async src="https://js.stripe.com/v3/"></script>
    <meta name="generator" content="Ghost 3.37" />
    <link rel="alternate" type="application/rss+xml" title="Reditory" href="../rss/index.html" />
    <style>
    .tc-technology {--t-color: #1687F7;}
    .tc-inspiration {--t-color: #f7a205;}
    .tc-sports {--t-color: #9c1600;}
    .tc-travel {--t-color: #fc5d00;}
    .tc-business {--t-color: #004fc5;}
    .tc-lifestyle {--t-color: #ff01a3;}
    .tc-health {--t-color: #c908e0;}
    .tc-food {--t-color: #ff1e56;}
    .tc-nature {--t-color: #39b209;}
</style>
<style>
    .switch-mode {
        position:fixed;
        top: 400px;
        right:-100px;
        text-transform: uppercase;
        background-color: var(--black);
        color: var(--white);
        width: 100px;
        text-align: center;
        transition: all 0.25s ease-in-out;
    }
    .switch-mode.visible {
        right: 0px;
    }
    .switch-mode span {
        cursor: pointer;
        display: block;
        padding: 8px;
    }
    .switch-mode .panel-icon {
        position: absolute;
        left: -32px;
        top: 0;
        padding: 8px;
        height: 32px;
        background-color: var(--theme-color);
        line-height: 0;
        border-radius: 5px 0 0 5px;
    }
    .switch-mode .panel-icon svg {
        width: 16px;
        height: 16px;
    }
    .switch-mode .option:hover {
        background: var(--theme-color);
    }
    .switch-mode .option svg{
        width: 16px;
        height: 16px;
        vertical-align: middle;
        margin-right: 4px;
        margin-top:-2px;
    }
    .switch-mode .option.light {background: var(--theme-color);}
    [data-theme="dark"] .switch-mode .option.dark {background: var(--theme-color);}
    [data-theme="dark"] .switch-mode .option.light {background: var(--black);}
</style>

<script>
		if(typeof(Storage) !== 'undefined') {
			if (localStorage.getItem('selected-theme') == 'light') {
				document.documentElement.setAttribute('data-theme', 'light');
			}
			else if (localStorage.getItem('selected-theme') == 'dark') {
				document.documentElement.setAttribute('data-theme', 'dark');
			}
		}
		</script>
	</head>
	<body class="">
		<div class="site-wrap">
	    <?php include 'header.php';?>
    
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="subscription-inner text-center">
                <h1 class="subscription-title">Sign up!</h1>
                <p class="subscription-description">
                    Get access to members only content.
                </p>
                <form class="subscribe-form"  name="f"  method="POST" enctype="multipart/form-data" >
                    <div class="text-center">
                    </div>
                    <div class="form-field-wrap field-group-inline">
                        <div class="container">
                            
                            <div class="row">
                            
                        <label for="Username" class="sr-only">Username</label>
                        <input data-members-email type="text" class="Username form-field" id="Username" name="Username" placeholder="Your Username" >
                        
                        </div>
                        <div class="row">
                        <label for="email" class="sr-only">Email</label>
                        <input data-members-email type="email" class="email form-field" id="email" name="email" placeholder="Your email address" >
                        </div>
                        <div class="row">
                        <label for="Password" class="sr-only">Password</label>
                        <input data-members-email type="text" class="email form-field" id="Password" name="Password" placeholder="Your Password" >
                        </div>
                        <div class="row">
                        <label for="Passwordagain" class="sr-only">Password Again </label>
                        <input data-members-email type="text" class="email form-field" id="Passwordagain" name="Passwordagain" placeholder="Your Password Again" >
                        </div>
                        <div class="row">

                        <input type="file"  class="email form-field" name="img"  id="customFile" />
                        </div>
                        
                        <button class="btn form-field" type="submit" name="reg_user" >Sign up</button>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        
                            <div class="alternate-option">
                            <small>Already have an account? <a href="index.php">Log in</a></small>
                        </div>
                        <div >
                       <p style='color:red;'> <?php echo $error_message;?></p>
                        </div>
                        
                    </div>
                </form>
            </div>
                    </div>
    </div>
</div>
           <?php include 'footer.php';?>
		</div>
		<div class="search-popup js-search-popup">
    <div class="search-popup-bg"></div>
	<a href="javascript:;" class="close-button" id="search-close" aria-label="Close search">
		<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M14.3477 11.9986L21.5075 4.85447C21.821 4.54089 21.9972 4.11558 21.9972 3.67211C21.9972 3.22864 21.821 2.80333 21.5075 2.48975C21.1939 2.17617 20.7687 2 20.3253 2C19.8819 2 19.4566 2.17617 19.1431 2.48975L12 9.65051L4.8569 2.48975C4.54337 2.17617 4.11812 2 3.67471 2C3.2313 2 2.80606 2.17617 2.49252 2.48975C2.17898 2.80333 2.00284 3.22864 2.00284 3.67211C2.00284 4.11558 2.17898 4.54089 2.49252 4.85447L9.65227 11.9986L2.49252 19.1427C2.33646 19.2975 2.21259 19.4817 2.12805 19.6846C2.04352 19.8875 2 20.1052 2 20.3251C2 20.5449 2.04352 20.7626 2.12805 20.9655C2.21259 21.1684 2.33646 21.3526 2.49252 21.5074C2.64731 21.6635 2.83147 21.7874 3.03437 21.8719C3.23727 21.9565 3.4549 22 3.67471 22C3.89452 22 4.11215 21.9565 4.31505 21.8719C4.51796 21.7874 4.70211 21.6635 4.8569 21.5074L12 14.3466L19.1431 21.5074C19.2979 21.6635 19.482 21.7874 19.6849 21.8719C19.8878 21.9565 20.1055 22 20.3253 22C20.5451 22 20.7627 21.9565 20.9656 21.8719C21.1685 21.7874 21.3527 21.6635 21.5075 21.5074C21.6635 21.3526 21.7874 21.1684 21.8719 20.9655C21.9565 20.7626 22 20.5449 22 20.3251C22 20.1052 21.9565 19.8875 21.8719 19.6846C21.7874 19.4817 21.6635 19.2975 21.5075 19.1427L14.3477 11.9986Z"/>
</svg>
	</a>
	<div class="popup-inner">
        <div class="inner-container">
            <div>
            <form class="search-form" id="search-form">
                <div class="field-group-search-form">
                <div class="search-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/></svg></div>
                    <input type="text" class="search-input" placeholder="Type to search" id="search-input" aria-label="Type to search" role="searchbox">
                </div>
            </form>
            </div>
            <div class="search-close-note">Press ESC to close.</div>
            <div class="search-result" id="search-results"></div>
        </div>
	</div>
</div>		<div class="notification notification-subscribe text-center">
    <a class="notification-close" href="javascript:;"><span class="close-icon"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M14.3477 11.9986L21.5075 4.85447C21.821 4.54089 21.9972 4.11558 21.9972 3.67211C21.9972 3.22864 21.821 2.80333 21.5075 2.48975C21.1939 2.17617 20.7687 2 20.3253 2C19.8819 2 19.4566 2.17617 19.1431 2.48975L12 9.65051L4.8569 2.48975C4.54337 2.17617 4.11812 2 3.67471 2C3.2313 2 2.80606 2.17617 2.49252 2.48975C2.17898 2.80333 2.00284 3.22864 2.00284 3.67211C2.00284 4.11558 2.17898 4.54089 2.49252 4.85447L9.65227 11.9986L2.49252 19.1427C2.33646 19.2975 2.21259 19.4817 2.12805 19.6846C2.04352 19.8875 2 20.1052 2 20.3251C2 20.5449 2.04352 20.7626 2.12805 20.9655C2.21259 21.1684 2.33646 21.3526 2.49252 21.5074C2.64731 21.6635 2.83147 21.7874 3.03437 21.8719C3.23727 21.9565 3.4549 22 3.67471 22C3.89452 22 4.11215 21.9565 4.31505 21.8719C4.51796 21.7874 4.70211 21.6635 4.8569 21.5074L12 14.3466L19.1431 21.5074C19.2979 21.6635 19.482 21.7874 19.6849 21.8719C19.8878 21.9565 20.1055 22 20.3253 22C20.5451 22 20.7627 21.9565 20.9656 21.8719C21.1685 21.7874 21.3527 21.6635 21.5075 21.5074C21.6635 21.3526 21.7874 21.1684 21.8719 20.9655C21.9565 20.7626 22 20.5449 22 20.3251C22 20.1052 21.9565 19.8875 21.8719 19.6846C21.7874 19.4817 21.6635 19.2975 21.5075 19.1427L14.3477 11.9986Z"/>
</svg>
</span></a>
    You&#x27;ve successfully subscribed to Reditory
</div>

<div class="notification notification-signup text-center">
    <a class="notification-close" href="javascript:;"><span class="close-icon"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M14.3477 11.9986L21.5075 4.85447C21.821 4.54089 21.9972 4.11558 21.9972 3.67211C21.9972 3.22864 21.821 2.80333 21.5075 2.48975C21.1939 2.17617 20.7687 2 20.3253 2C19.8819 2 19.4566 2.17617 19.1431 2.48975L12 9.65051L4.8569 2.48975C4.54337 2.17617 4.11812 2 3.67471 2C3.2313 2 2.80606 2.17617 2.49252 2.48975C2.17898 2.80333 2.00284 3.22864 2.00284 3.67211C2.00284 4.11558 2.17898 4.54089 2.49252 4.85447L9.65227 11.9986L2.49252 19.1427C2.33646 19.2975 2.21259 19.4817 2.12805 19.6846C2.04352 19.8875 2 20.1052 2 20.3251C2 20.5449 2.04352 20.7626 2.12805 20.9655C2.21259 21.1684 2.33646 21.3526 2.49252 21.5074C2.64731 21.6635 2.83147 21.7874 3.03437 21.8719C3.23727 21.9565 3.4549 22 3.67471 22C3.89452 22 4.11215 21.9565 4.31505 21.8719C4.51796 21.7874 4.70211 21.6635 4.8569 21.5074L12 14.3466L19.1431 21.5074C19.2979 21.6635 19.482 21.7874 19.6849 21.8719C19.8878 21.9565 20.1055 22 20.3253 22C20.5451 22 20.7627 21.9565 20.9656 21.8719C21.1685 21.7874 21.3527 21.6635 21.5075 21.5074C21.6635 21.3526 21.7874 21.1684 21.8719 20.9655C21.9565 20.7626 22 20.5449 22 20.3251C22 20.1052 21.9565 19.8875 21.8719 19.6846C21.7874 19.4817 21.6635 19.2975 21.5075 19.1427L14.3477 11.9986Z"/>
</svg>
</span></a>
    Great! Next, complete checkout to get full access to all premium content.
</div>

<div class="notification notification-signin text-center">
    <a class="notification-close" href="javascript:;"><span class="close-icon"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M14.3477 11.9986L21.5075 4.85447C21.821 4.54089 21.9972 4.11558 21.9972 3.67211C21.9972 3.22864 21.821 2.80333 21.5075 2.48975C21.1939 2.17617 20.7687 2 20.3253 2C19.8819 2 19.4566 2.17617 19.1431 2.48975L12 9.65051L4.8569 2.48975C4.54337 2.17617 4.11812 2 3.67471 2C3.2313 2 2.80606 2.17617 2.49252 2.48975C2.17898 2.80333 2.00284 3.22864 2.00284 3.67211C2.00284 4.11558 2.17898 4.54089 2.49252 4.85447L9.65227 11.9986L2.49252 19.1427C2.33646 19.2975 2.21259 19.4817 2.12805 19.6846C2.04352 19.8875 2 20.1052 2 20.3251C2 20.5449 2.04352 20.7626 2.12805 20.9655C2.21259 21.1684 2.33646 21.3526 2.49252 21.5074C2.64731 21.6635 2.83147 21.7874 3.03437 21.8719C3.23727 21.9565 3.4549 22 3.67471 22C3.89452 22 4.11215 21.9565 4.31505 21.8719C4.51796 21.7874 4.70211 21.6635 4.8569 21.5074L12 14.3466L19.1431 21.5074C19.2979 21.6635 19.482 21.7874 19.6849 21.8719C19.8878 21.9565 20.1055 22 20.3253 22C20.5451 22 20.7627 21.9565 20.9656 21.8719C21.1685 21.7874 21.3527 21.6635 21.5075 21.5074C21.6635 21.3526 21.7874 21.1684 21.8719 20.9655C21.9565 20.7626 22 20.5449 22 20.3251C22 20.1052 21.9565 19.8875 21.8719 19.6846C21.7874 19.4817 21.6635 19.2975 21.5075 19.1427L14.3477 11.9986Z"/>
</svg>
</span></a>
    Welcome back! You&#x27;ve successfully signed in.
</div>

<div class="notification notification-checkout text-center">
    <a class="notification-close" href="javascript:;"><span class="close-icon"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M14.3477 11.9986L21.5075 4.85447C21.821 4.54089 21.9972 4.11558 21.9972 3.67211C21.9972 3.22864 21.821 2.80333 21.5075 2.48975C21.1939 2.17617 20.7687 2 20.3253 2C19.8819 2 19.4566 2.17617 19.1431 2.48975L12 9.65051L4.8569 2.48975C4.54337 2.17617 4.11812 2 3.67471 2C3.2313 2 2.80606 2.17617 2.49252 2.48975C2.17898 2.80333 2.00284 3.22864 2.00284 3.67211C2.00284 4.11558 2.17898 4.54089 2.49252 4.85447L9.65227 11.9986L2.49252 19.1427C2.33646 19.2975 2.21259 19.4817 2.12805 19.6846C2.04352 19.8875 2 20.1052 2 20.3251C2 20.5449 2.04352 20.7626 2.12805 20.9655C2.21259 21.1684 2.33646 21.3526 2.49252 21.5074C2.64731 21.6635 2.83147 21.7874 3.03437 21.8719C3.23727 21.9565 3.4549 22 3.67471 22C3.89452 22 4.11215 21.9565 4.31505 21.8719C4.51796 21.7874 4.70211 21.6635 4.8569 21.5074L12 14.3466L19.1431 21.5074C19.2979 21.6635 19.482 21.7874 19.6849 21.8719C19.8878 21.9565 20.1055 22 20.3253 22C20.5451 22 20.7627 21.9565 20.9656 21.8719C21.1685 21.7874 21.3527 21.6635 21.5075 21.5074C21.6635 21.3526 21.7874 21.1684 21.8719 20.9655C21.9565 20.7626 22 20.5449 22 20.3251C22 20.1052 21.9565 19.8875 21.8719 19.6846C21.7874 19.4817 21.6635 19.2975 21.5075 19.1427L14.3477 11.9986Z"/>
</svg>
</span></a>
    Success! Your account is fully activated, you now have access to all content.
</div>        <script>
			var apiKey = "4687979a8ed338b1860a522cda"
            var nextPage = '';
            var totalPages = '';
			var loadingText ='Loading...';
        </script>
		<script src="../assets/js/app.bundle.mincc76.js?v=63bbb907b5"></script>
        <div class="switch-mode" id="panel">
    <span class="panel-icon" id="show_icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-4.87 7.197-8 11.699-8 16.075 0 4.378 3.579 7.925 8 7.925s8-3.547 8-7.925c0-4.376-3.13-8.878-8-16.075zm-.027 5.12c.467.725 1.027 1.987 1.027 3.32 0 3.908-4 4.548-4 2.17 0-1.633 1.988-4.044 2.973-5.49z"/></svg></span>
    <span class="option dark" id="o-dark"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g data-name="Layer 2"><g data-name="moon"><rect width="24" height="24" opacity="0"/><path d="M12.3 22h-.1a10.31 10.31 0 0 1-7.34-3.15 10.46 10.46 0 0 1-.26-14 10.13 10.13 0 0 1 4-2.74 1 1 0 0 1 1.06.22 1 1 0 0 1 .24 1 8.4 8.4 0 0 0 1.94 8.81 8.47 8.47 0 0 0 8.83 1.94 1 1 0 0 1 1.27 1.29A10.16 10.16 0 0 1 19.6 19a10.28 10.28 0 0 1-7.3 3z"/></g></g></svg>Dark</span>
    <span class="option light" id="o-light"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g data-name="Layer 2"><g data-name="sun"><rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"/><path d="M12 6a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1z"/><path d="M21 11h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2z"/><path d="M6 12a1 1 0 0 0-1-1H3a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1z"/><path d="M6.22 5a1 1 0 0 0-1.39 1.47l1.44 1.39a1 1 0 0 0 .73.28 1 1 0 0 0 .72-.31 1 1 0 0 0 0-1.41z"/><path d="M17 8.14a1 1 0 0 0 .69-.28l1.44-1.39A1 1 0 0 0 17.78 5l-1.44 1.42a1 1 0 0 0 0 1.41 1 1 0 0 0 .66.31z"/><path d="M12 18a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1z"/><path d="M17.73 16.14a1 1 0 0 0-1.39 1.44L17.78 19a1 1 0 0 0 .69.28 1 1 0 0 0 .72-.3 1 1 0 0 0 0-1.42z"/><path d="M6.27 16.14l-1.44 1.39a1 1 0 0 0 0 1.42 1 1 0 0 0 .72.3 1 1 0 0 0 .67-.25l1.44-1.39a1 1 0 0 0-1.39-1.44z"/><path d="M12 8a4 4 0 1 0 4 4 4 4 0 0 0-4-4z"/></g></g></svg>Light</span>
</div>
<script>
    var panel = document.getElementById('panel');
    var showIcon = document.getElementById('show_icon');
    showIcon.addEventListener('click', function(){
        panel.classList.toggle('visible');
    });
    
    var oDark = document.getElementById('o-dark');
    var oLight = document.getElementById('o-light');
    var html = document.documentElement;
    oDark.addEventListener('click', function() {
        html.setAttribute('data-theme', 'dark');
        localStorage.setItem('selected-theme', 'dark');
    });
    oLight.addEventListener('click', function() {
        html.setAttribute('data-theme', 'light');
        localStorage.setItem('selected-theme', 'light');
    });
        
</script>
	</body>

<!-- Mirrored from reditory.gbjsolution.com/signup/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 19:56:23 GMT -->
</html>