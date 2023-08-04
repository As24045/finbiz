<?php

include_once 'header.php';


?>

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Blog Details</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="index-2.php">Home</a>
                    <span> / </span>
                    <a href="#" class="active">Blog Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<!-- rts blog mlist area -->
<div class="rts-blog-list-area rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <!-- rts blo post area -->
            <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                <?php 
                $id = $_GET['id'];
                $sql = "select * from blog where id = '$id'";
                $result = $conn->query($sql);
                if ($row = $result->fetch_assoc())
                {

                 ?>




                <!-- single post -->
                <div class="blog-single-post-listing details mb--0">
                    <div class="thumbnail">
                        <img src="assets/images/blog/<?php echo $row['image'];?>" alt="Business-Blog">
                    </div>
                    <div class="blog-listing-content">
                        <div class="user-info">
                            <!-- single info -->
                            <div class="single">
                                <i class="far fa-calendar"></i>
                                <span>
                                    <?php
                                        echo $row['date'];
                                    ?>      
                                </span>
                            </div>
                            <!-- single infoe end -->
                            <!-- single info -->
                            <div class="single">
                                <i class="far fa-clock"></i>
                                <span>
                                    <?php
                                        echo $row['time'];
                                    ?>
                                </span>
                            </div>
                            <!-- single infoe end -->
                         </div>
                        <h3 class="title">
                            <?php
                                echo $row['title'];
                            ?>
                            </h3>
                        <p class="disc para-1">
                            <?php
                                echo $row['discription'];
                            ?>
                        </p>                    
                    </div>
                </div>

<?php } ?>



            </div>
        </div>
    </div>
</div>



            <?php

            include_once 'footer.php'
        ?>








