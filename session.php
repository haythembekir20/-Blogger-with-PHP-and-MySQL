<?php
if (session_id() == "")
{
   session_start();
}
$admin='';
$jour='';
include('action/config.php');
if(isset($_SESSION['username'])){
    $login='';
    $logout='<li><a href="action/logout.php">Logout</a></li>';

    $email=$_SESSION['username'];
    $rolesql="SELECT * from user where username ='$email'";
    $roleresult=mysqli_query($cx,$rolesql);
    $datarl=mysqli_fetch_array($roleresult);
    $role=$datarl['role'];
    if($role == '1'){
        $jour='                <li>
        <a href="topic.php">Topic</a>
    </li>
    <li>
    <a href="managetopic.php">Manage Topic </a>
</li>
    ';
    $logout='
    <li><a href="action/logout.php">Logout</a></li>';
    }
    if($role == '2'){
        $admin='                <li>
        <a href="adminpanel.php">Admin Panel</a>
    </li>';
    }
    
}
    else{
    $login='                        <nav class="nav-right">
    <ul class="nav-list nav-list-primary no-style-list text-upper">
        <li class="nav-item nav-icon user-icon">
            <a href="javascript:;" class="text-center" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.822 18.096c-3.439-.794-6.64-1.49-5.09-4.418 4.72-8.912 1.251-13.678-3.732-13.678-5.082 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-3.073.71-3.188 2.236-3.178 4.904l.004 1h23.99l.004-.969c.012-2.688-.092-4.222-3.176-4.935z"/></svg>                                    </a>
            <ul class="dropdown">
                <li>
                    <a href="signup.php">Sign up</a>
                </li>
                <li>
                    <a href="index.php">Log in</a>
                </li>
            </ul>
        </li>
        
    </ul>
</nav>';
    
$logout='';
$email='';
    }


?>