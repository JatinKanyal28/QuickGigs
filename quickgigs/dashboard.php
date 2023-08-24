<?php
 session_start();
 if(!isset($_SESSION['username']))
{
    header("location: login.php");
}
$id=$_SESSION['username'];
?>
  <?php include 'include/connection.php'; ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>QUICK GIG | Find and Hire Specialized Talenties</title>

        <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">

        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/style-starter.css">
    </head>
    <body>
        <!--w3l-header-->
        <?php include 'include/header.php'; ?>
        <!-- //w3l-header -->
        <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
        <div class="container grid-breadcrumb py-2">
            <h2 class="title-big">Dashboard</h2>
            <ul class="breadcrumbs-custom-path mt-md-2">
                <li><a href="index.php">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Dashboard</li>
            </ul>
        </div>
    </div>
</section>
        <!--  services section -->

        <div class="w3l-about-us best-rooms py-5">
            <div class="container py-lg-5 py-sm-4">
                <h3 class="title-big text-center mb-md-5 mb-4">Dashboard</h3>
                <!-- SIRF TITLE KE LIYE RAKHA HOON
<div class="cont-details">
<p>Register Yourself</p>
<h3 class="title-big">My Details</h3>
</div>
-->
                    <div class="row mt-5">
                        <div class="maghny-gd-1 col-lg-50 col-md-12">
                            <table class="table">
                                <tr>
                                    <!-- <th>Sr.no</th> -->
                                    <th>Img</th>
                                    <th>Name</th>
                                    <th>Gig</th>
                                    <th>Gigname</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>LocalArea</th>
                                    <th>Action</th>
                                </tr>
                                <?php 
                                include 'include/connection.php';

                                // $str=1; //show.php ka id in order

                                $sql="select * from gigtable join gig on gig.gid=gigtable.gig join state_list on state_list.id=gigtable.sname join all_cities on all_cities.city_code=gigtable.cname join local_area on local_area.lid=gigtable.localarea where user_id='$id'";
                                $result=$conn->query($sql);
                                while ($we=$result->fetch_object()) {
                                ?>
                                <tr>
                                     <!-- <td><?php echo $str; ?></td> -->
                                    <td><img src="upload/<?php echo $we->myphoto; ?>" alt="" style="width:50px; height:50px;"></td>
                                    <td><?php echo $we->fname." ".$we->lname; ?></td>
                                    <td><?php echo $we->developer; ?></td>
                                    <td><?php echo $we->gname; ?></td>
                                    <td><?php echo $we->state; ?></td>
                                    <td><?php echo $we->city_name; ?></td>
                                    <td><?php echo $we->localname; ?></td>
                                    <td>
                                        <a href="edit.php?eid=<?php echo $we->uid; ?>" class="btn btn-info mb-1">EDIT</a>
                                        <a href="function.php?did=<?php echo $we->uid; ?>" class="btn btn-danger">DELETE</a>
                                    </td>
                                </tr>
                                <?php
                                         // $str++;
                                    }
                                ?>
                            </table>
                        </div>
                    </div>

               
            </div>
        </div>
        <!-- footer -->
        <?php include 'include/footer.php' ; ?>
        <!-- /footer -->      
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->


        <!-- Template JavaScript -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>

        <script src="assets/js/owl.carousel.js"></script>
        <!-- script for banner slider-->
        <script>
            $(document).ready(function () {
                $('.owl-one').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: false,
                    responsiveClass: true,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        480: {
                            items: 1,
                            nav: false
                        },
                        667: {
                            items: 1,
                            nav: true
                        },
                        1000: {
                            items: 1,
                            nav: true
                        }
                    }
                })
            })
        </script>
        <!-- //script -->

        <!-- script for owlcarousel -->
        <script>
            $(document).ready(function () {
                $('.owl-testimonial').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: true,
                    responsiveClass: true,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        480: {
                            items: 1,
                            nav: false
                        },
                        667: {
                            items: 1,
                            nav: true
                        },
                        1000: {
                            items: 1,
                            nav: true
                        }
                    }
                })
            })
        </script>
        <!-- //script for owlcarousel -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

                $('.popup-with-move-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-slide-bottom'
                });
            });
        </script>


        <!-- disable body scroll which navbar is in active -->
        <script>
            $(function () {
                $('.navbar-toggler').click(function () {
                    $('body').toggleClass('noscroll');
                })
            });
        </script>
        <!-- disable body scroll which navbar is in active -->

        <script src="assets/js/bootstrap.min.js"></script>

    </body>

</html>