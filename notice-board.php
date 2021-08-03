<!doctype html>
<html class="no-js" lang="">
<?php
    $conn = mysqli_connect('localhost','root','', 'ibaseip') or die('Error Encountered');
    $result = mysqli_query($conn,"SELECT * FROM notice");
    
?>


<?php
include'header.php';    
?>

            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Notice Board</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Notice</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Add Notice Area Start Here -->
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Create A Notice</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <form action="noticeinsert.php" method="POST" class="new-added-form">
                                    <div class="row">
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" placeholder="" class="form-control">
                                        </div>
                                        <div  class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Details</label>
                                            <textarea style="height: 100px;" class="form-control" name="details" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Photo </label>
                                            <input type="file" name="upload" class="form-control" >
                                            <i class="fas fa-file"></i>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Posted By </label>
                                            <input type="text" placeholder="" name="author" class="form-control">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        

                                        
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Date</label>
                                            <input type="text" placeholder="" name="date"
                                                class="form-control air-datepicker">
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" name="submit"
                                                class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                            <button type="reset"
                                                class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Add Notice Area End Here -->
                    <!-- All Notice Area Start Here -->
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Notice Board</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <form class="mg-b-20">
                                    <div class="row gutters-8">
                                        <div class="col-lg-5 col-12 form-group">
                                            <input type="text" placeholder="Search by Date ..." class="form-control">
                                        </div>
                                        <div class="col-lg-5 col-12 form-group">
                                            <input type="text" placeholder="Search by Title ..." class="form-control">
                                        </div>
                                        <div class="col-lg-2 col-12 form-group">
                                            <button type="submit"
                                                class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="notice-board-wrap">

                                    <?php
while($row = mysqli_fetch_array($result))
{
?>
                                    <div class="notice-list">
                                        <div class="post-date bg-yellow">
                                            <?php echo $row['date']; ?>
                                        </div>
                                        <h2 class="notice-title"><a href="#">
                                                <?php echo $row['remarks'] ; ?>
                                            </a></h2>
                                            <p class="notice-title"><a href="#">
                                                <?php echo $row['details'] ; ?>
                                            </a></p>    
                                        <div class="entry-meta">
                                        <img src="notice/<?php echo $row['picture']; ?>" >
                                        </div>
                                        <div class="entry-meta">
                                           <p>posted by:  <?php echo  $row['author']; ?> </p>
                                        </div>
                                    </div>
                                    <?php
}
mysqli_close($conn);
?>
                                    <!-- <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom
                                                text of the printing Great School manag mene esom text of the printing
                                                manag
                                                mene esom text of the printing.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom
                                                text of the printing Great School manag mene esom text of the printing
                                                manag
                                                mene esom text of the printing.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- All Notice Area End Here -->
                </div>
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">IBA</a> 2021. All rights reserved. Designed by <a
                            href="#">Csoft</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/notice-board.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 11:38:59 GMT -->

</html>