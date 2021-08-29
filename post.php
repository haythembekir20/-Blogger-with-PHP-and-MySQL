<?php
include('./session.php');
include("./action/config.php");
$id=$_GET['id'];
$sql="SELECT * from topic where id='$id'";
$result=mysqli_query($cx,$sql);
$data=mysqli_fetch_array($result);

//  comment
if(isset($_POST['submit'])){
    $comment=$_POST['comment'];

$sql_1="INSERT INTO `comments` ( `name`, `comment`, `idtopic`) VALUES('$email','$comment','$id') ";
mysqli_query($cx, $sql_1);
header("location: ./post.php?id=".$id);
}
////////////////////// LIKE //////////////////////////

if(isset($_GET['like'])){
$sql_l="UPDATE topic set likes = likes+1 where id='$id'";
mysqli_query($cx, $sql_l);
$sql_like="INSERT into likes (`userid`, `topicid`) VALUES ('$email','$id') ";
mysqli_query($cx, $sql_like);

header("location: ./post.php?id=".$id);

}
/// unlike
if(isset($_GET['unlike'])){
    $sql_l="UPDATE topic set likes = likes-1 where id='$id'";
    mysqli_query($cx, $sql_l);
    $sql_like="DELETE from likes where `userid`='$email' and `topicid` = $id";
    mysqli_query($cx, $sql_like);
    
    header("location: ./post.php?id=".$id);
    
    }
$aff_like="SELECT * from likes where  topicid='$id' and userid='$email'";
$aff=mysqli_query($cx, $aff_like);
if(mysqli_num_rows($aff)){
    $print='<a href="?id='.$id.'&unlike=1">UNLIKE</a>';  
}else{
  $print='<a href="?id='.$id.'&like=1">LIKE</a>';

}
?>
<!DOCTYPE html>
<html lang="en" data-navbar="sticky">
	

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>All the money in the world can&#x27;t buy you back good health</title>
        <link href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,400;1,700&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet">
		<link href="./assets/css/screen.mincc76.css?v=63bbb907b5" rel="stylesheet">
		<link rel="canonical" href="index.html" />
    <meta name="referrer" content="no-referrer-when-downgrade" />
    <link rel="amphtml" href="amp/index.html" />
    

    
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "publisher": {
        "@type": "Organization",
        "name": "Reditory",
        "url": "http://reditory.gbjsolution.com/",
        "logo": {
            "@type": "ImageObject",
            "url": "http://reditory.gbjsolution.com/content/images/2020/06/logo.png",
            "width": 303,
            "height": 51
        }
    },
    "author": {
        "@type": "Person",
        "name": "Biswajit Saha",
        "image": {
            "@type": "ImageObject",
            "url": "//www.gravatar.com/avatar/021e64775176cc4c7018e5e867f17de2?s=250&d=mm&r=x",
            "width": 250,
            "height": 250
        },
        "url": "http://reditory.gbjsolution.com/author/biswajit/",
        "sameAs": [
            "https://gbjsolution.com/",
            "https://www.facebook.com/gbjsolution",
            "https://twitter.com/gbjsolution"
        ]
    },
    "headline": "All the money in the world can&#x27;t buy you back good health",
    "url": "http://reditory.gbjsolution.com/all-the-money-in-the-world-cant-buy-you-back-good-health/",
    "datePublished": "2020-05-21T04:20:00.000Z",
    "dateModified": "2020-06-25T13:27:48.000Z",
    "image": {
        "@type": "ImageObject",
        "url": "http://reditory.gbjsolution.com/content/images/2020/06/zen-bear-yoga-IVf7hm88zxY-unsplash.jpg",
        "width": 1000,
        "height": 618
    },
    "keywords": "Lifestyle, Health",
    "description": "My dear, it never rains but it pours. How true the old proverbs are. Here am I,\nwho shall be twenty in September, and yet I never had a proposal till to-day,\nnot a real proposal, and to-day I have had three. Just fancy! THREE proposals in\none day! Isn&#x27;t it awful! I feel sorry, really and truly sorry, for two of the\npoor fellows.\n\nStart where you are\nOh, Mina, I am so happy that I don&#x27;t know what to do with myself. And three\nproposals! But, for goodness&#x27; sake, don&#x27;t tell any of the girls, or they",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "http://reditory.gbjsolution.com/"
    }
}
    </script>

    <script defer src="../../unpkg.com/%40tryghost/portal%400.14.0/umd/portal.min.js" data-ghost="http://reditory.gbjsolution.com/"></script><style type='text/css'> .gh-post-upgrade-cta-content,
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
	<body class="post-template tag-lifestyle tag-health">
		<div class="site-wrap">
        <?php include './header.php';?>
        <div class="container">
    <div class="row">
        <div class="col-md-8">
            <main class="main-content-area">
                <article class="post post-single">
                    <header class="post-header">
                        <div class="tag-wrap">
                        
                            <a href="#" class="tag tag-pill tc-lifestyle"><?php echo $data['genre']; ?></a>
                        </div>
                        <h1 class="post-title"><?php echo $data['titre']; ?></h1>
                        <div class="post-meta">
                            <span class="author">By <a href="../author/biswajit/index.html"><?php echo $data['journlist']; ?></a></span>
                            <time class="pub-date" datetime="2020-05-21"><?php echo $data['date']; ?></time>
                            <span> <?php echo $data['likes'] ; ?> </span>
                            
<?php 


echo $print;
 ?>

                            
                        </div>
                    </header>
                    <div class="post-img-wrap loading-bg">

                            <img  src="<?php echo './images/'.$data['img'];?>" />
                    </div>
                    <div class="post-content">
<?php  
echo $data['description'];
?>
</div>
                </article>
            </main>
            <div class="share-wrap">
    
    <div class="share-links flex">
        </div>
</div>            <div class="ad-spot ad-wrap-content-area text-center">
    
    
</div>            <div class="about-author-wrap">
    <div class="author-card">
        <div class="avatar-wrap loading-bg">
            <a href="#" title="Biswajit Saha">
            <img  src="<?php echo './images/user.png'; //<div class="post-img-wrap loading-bg">?>" />
            </a>
        </div>
        <div class="author-info">
            <h3 class="name h5">Written by <a href="#"><?php echo $data['journlist']; ?></a></h3>
            <?php
             $author=$data['journlist'];
             $sql1="SELECT * FROM USER WHERE username='$author'";
             $result1=mysqli_query($cx,$sql1);
             $dataa=mysqli_fetch_array($result1);

               ?>  
            <div class="bio">
            <?php echo $dataa['bio']; ?>
            </div>
            
        </div>
    </div>
</div>            
                    
<div class="comment-wrap">
    <div class="disqus-comment-wrap">
    <?php 
                   
                   $req="SELECT * from comments WHERE idtopic='$id' ";
                        $res=mysqli_query($cx,$req);
                       while ($r=mysqli_fetch_array($res) )  
                       {  
                           ?>
                           
                          <span> <?php echo $r['name']; ?> <span>  
                          <span> <?php echo $r['comment'] ; ?> <span>
                          <?php
                       }
                   ?>
    <form method="POST">
    <textarea name="comment" placeholder="Describe yourself here">  </textarea>
    <input type="submit" name="submit" value="comment">
    </form>
    
    </div>
    <script>
        var disqus_shortname = 'reditory-ghost-theme'; // required: replace example with your forum shortname
        var pageUrl = 'index.html';
        var pageIdentifier = 'ghost-5dac4ef9fde4fe4312e190fa';
    </script>
</div>        </div>
        <div class="col-md-4">
        <?php  include('./Latestposts.php'); ?>
</div>    </div>
</div>
<?php  include('./footer.php'); ?>	</div>
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
</div>        <script>
			var apiKey = "4687979a8ed338b1860a522cda"
            var nextPage = '';
            var totalPages = '';
			var loadingText ='Loading...';
        </script>
		<script src="./assets/js/app.bundle.mincc76.js?v=63bbb907b5"></script>
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

<!-- Mirrored from reditory.gbjsolution.com/all-the-money-in-the-world-cant-buy-you-back-good-health/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 19:57:36 GMT -->
</html>