<aside class="site-sidebar">
            <div class="widget widget-latest-post">
    <h3 class="widget-title text-upper">Latest posts</h3>
    <div class="widget-content">
    <?php 
                   $nb=0;
                   $req="select * from topic order by id DESC ";
                        $res=mysqli_query($cx,$req);
                       while ($r=mysqli_fetch_array($res) and ($nb<5))  
                       {
                           $nb=$nb+1;
                          
                   ?>
        <article class="post post-style-two flex">
            <a href="post.php?id=<?php echo $r['id'];?>" aria-label="Autumn is a second spring when every leaf is a flower">
                <div class="post-img-wrap loading-bg">
                <img  src="<?php echo './images/'.$r['img']; //<div class="post-img-wrap loading-bg">?>" />
                                </div>
            </a>
            <div class="post-content">
                <div class="tag-wrap">
                    <a href="#" class="tag tag-small tc-nature"><?php echo $r['genre']; ?></a>
                </div>
                <h2 class="post-title h5"><a href="post.php?id=<?php echo $r['id'];?>"><?php echo $r['titre']; ?></a></h2>
                <div class="post-meta">
                    <time class="pub-date" ><?php echo $r['date']; ?></time>
                    
                </div>
            </div>
        </article>
        
        <?php  } ?>
        
    </div>
</div>
        

 </aside>