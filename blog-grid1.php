
<?php

    include 'header.php';
?>


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Latest Blog Posts</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index-2.php">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Latest Blog Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->



    <!-- rts blog grid area -->
    <div class="rts-blog-grid-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12 pr--40 pr_md--0 pr_sm-controler--0">
                    <div class="row g-5">

                        <?php 
                        $sql = "select * from blog";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc())
                       {
 ?>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <!-- start blog grid inner -->
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="blog-details.php?id=<?php echo $row['id'];?>">
                                        <img src="assets/images/blog/<?php echo $row['image'];?>" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            <i class="fal fa-calendar"></i>
                                            <span>
                                                <?php
                                                    echo $row['date'];
                                                ?>
                                            </span>
                                        </div>
                                        <div class="user">
                                            <i class="fal fa-clock"></i>
                                            <span>
                                                <?php
                                                    echo $row['time']
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-body">
                                    <a href="blog-details.php?id=<?php echo $row['id'];?>">
                                        <h5 class="title"> 
                                            <?php
                                                echo $row['title'];
                                            ?>
                                        </h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

                    

                        <?php

                            include 'footer.php';
                        ?>
