<!doctype html>
<html class="no-js" lang="">
    <?php
    $conn = mysqli_connect('localhost','root','', 'ibaseip') or die('Error Encountered');
    $result = mysqli_query($conn,"SELECT * FROM notice");
    $numofstudent=mysqli_query($conn,"SELECT count(*) FROM tblstudent");
    include'header.php';  
    
?>


            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Admin Dashboard</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Admin</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->
                <div class="row gutters-20">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-green ">
                                        <i class="flaticon-classmates text-green"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Students</div>
                                        <div class="item-number">
                                            <?php
                                            while($row = mysqli_fetch_array($numofstudent))
                                            {
                                            ?>   
                                            <div class="post-date ">
                                                <?php echo $row['0'] ;?>
                                            </div>
                                            <?php
                                            }
                                            //mysqli_close($conn);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-blue">
                                        <i class="flaticon-multiple-users-silhouette text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Teachers</div>
                                        <div class="item-number"><span class="counter" data-num="225">225</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-yellow">
                                        <i class="flaticon-couple text-orange"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Batchs</div>
                                        <div class="item-number"><span class="counter" data-num="60">60</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-red">
                                        <i class="flaticon-money text-red"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Earnings</div>
                                        <div class="item-number"><span>TK</span><span class="counter"
                                                data-num="193000">193000 TK</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dashboard summery End Here -->
                <!-- Dashboard Content Start Here -->
                <div class="row gutters-20">
                    <div class="col-12 col-xl-8 col-6-xxxl">
                        <div class="card dashboard-card-one pd-b-20">
                            <!-- <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Earnings</h3>
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
                                <div class="earning-report">
                                    <div class="item-content">
                                        <div class="single-item pseudo-bg-blue">
                                            <h4>Total Collections</h4>
                                            <span>75,000</span>
                                        </div>
                                        <div class="single-item pseudo-bg-red">
                                            <h4>Fees Collection</h4>
                                            <span>15,000</span>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="date-dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">Jan 20, 2019</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Jan 20, 2019</a>
                                            <a class="dropdown-item" href="#">Jan 20, 2021</a>
                                            <a class="dropdown-item" href="#">Jan 20, 2020</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="earning-chart-wrap">
                                    <canvas id="earning-line-chart" width="660" height="320"></canvas>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-12 col-xl-4 col-3-xxxl">
                        <div class="card dashboard-card-two pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Expenses</h3>
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
                                <div class="expense-report">
                                    <div class="monthly-expense pseudo-bg-Aquamarine">
                                        <div class="expense-date">Jan 2019</div>
                                        <div class="expense-amount"><span>$</span> 15,000</div>
                                    </div>
                                    <div class="monthly-expense pseudo-bg-blue">
                                        <div class="expense-date">Feb 2019</div>
                                        <div class="expense-amount"><span>$</span> 10,000</div>
                                    </div>
                                    <div class="monthly-expense pseudo-bg-yellow">
                                        <div class="expense-date">Mar 2019</div>
                                        <div class="expense-amount"><span>$</span> 8,000</div>
                                    </div>
                                </div>
                                <div class="expense-chart-wrap">
                                    <canvas id="expense-bar-chart" width="100" height="300"></canvas>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-12 col-xl-6 col-3-xxxl">
                        <div class="card dashboard-card-three pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Participants</h3>
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
                                <div class="doughnut-chart-wrap">
                                    <canvas id="student-doughnut-chart" width="100" height="300"></canvas>
                                </div>
                                <div class="student-report">
                                    <div class="student-count pseudo-bg-blue">
                                        <h4 class="item-title">Female Participants
                                        </h4>
                                        <div class="item-number">45,000</div>
                                    </div>
                                    <div class="student-count pseudo-bg-yellow">
                                        <h4 class="item-title">Male Participants
                                        </h4>
                                        <div class="item-number">1,05,000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 col-4-xxxl">
                        <div class="card dashboard-card-four pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Event Calender</h3>
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
                                <div class="calender-wrap">
                                    <div id="fc-calender" class="fc-calender"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-4-xxxl">
                        <div class="card dashboard-card-five pd-b-20">
                            <div class="card-body pd-b-14">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Website Traffic</h3>
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
                                <h6 class="traffic-title">Unique Visitors</h6>
                                <div class="traffic-number">2,590</div>
                                <div class="traffic-bar">
                                    <div class="direct" data-toggle="tooltip" data-placement="top" title="Direct">
                                    </div>
                                    <div class="search" data-toggle="tooltip" data-placement="top" title="Search">
                                    </div>
                                    <div class="referrals" data-toggle="tooltip" data-placement="top" title="Referrals">
                                    </div>
                                    <div class="social" data-toggle="tooltip" data-placement="top" title="Social">
                                    </div>
                                </div>
                                <div class="traffic-table table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="t-title pseudo-bg-Aquamarine">Direct</td>
                                                <td>12,890</td>
                                                <td>50%</td>
                                            </tr>
                                            <tr>
                                                <td class="t-title pseudo-bg-blue">Search</td>
                                                <td>7,245</td>
                                                <td>27%</td>
                                            </tr>
                                            <tr>
                                                <td class="t-title pseudo-bg-yellow">Referrals</td>
                                                <td>4,256</td>
                                                <td>8%</td>
                                            </tr>
                                            <tr>
                                                <td class="t-title pseudo-bg-red">Social</td>
                                                <td>500</td>
                                                <td>7%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-4-xxxl">
                        <div class="card dashboard-card-six pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-17">
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
                                <div class="notice-box-wrap">
                                <?php
                            while($row = mysqli_fetch_array($result))
                            {
                            ?>   
                                <div class="notice-list">
                                <div class="post-date bg-yellow"><?php echo $row['date']; ?></div>
                                <h6 class="notice-title"><a href="#"><?php echo $row['remarks'] ; ?></a></h6>
                                <div class="entry-meta"> <?php echo $row['author']; ?> / <span>5 min ago</span></div>
                                </div>
                            <?php
                            }
                            mysqli_close($conn);
                            ?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dashboard Content End Here -->
                <!-- Social Media Start Here -->
                <div class="row gutters-20">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card dashboard-card-seven">
                            <div class="social-media bg-fb hover-fb">
                                <div class="media media-none--lg">
                                    <div class="social-icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <h6 class="item-title">Like us on facebook</h6>
                                    </div>
                                </div>
                                <div class="social-like">30,000</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card dashboard-card-seven">
                            <div class="social-media bg-twitter hover-twitter">
                                <div class="media media-none--lg">
                                    <div class="social-icon">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <h6 class="item-title">Follow us on twitter</h6>
                                    </div>
                                </div>
                                <div class="social-like">1,11,000</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card dashboard-card-seven">
                            <div class="social-media bg-gplus hover-gplus">
                                <div class="media media-none--lg">
                                    <div class="social-icon">
                                        <i class="fab fa-google-plus-g"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <h6 class="item-title">Follow us on googleplus</h6>
                                    </div>
                                </div>
                                <div class="social-like">19,000</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card dashboard-card-seven">
                            <div class="social-media bg-linkedin hover-linked">
                                <div class="media media-none--lg">
                                    <div class="social-icon">
                                        <i class="fab fa-linkedin-in"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <h6 class="item-title">Follow us on linked</h6>
                                    </div>
                                </div>
                                <div class="social-like">45,000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Social Media End Here -->
                <!-- Footer Area Start Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">SEIP-IBA, DU</a> 2021. All rights reserved.</div>
                </footer>
                <!-- Footer Area End Here -->
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
    <!-- Counterup Js -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Moment Js -->
    <script src="js/moment.min.js"></script>
    <!-- Waypoints Js -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Full Calender Js -->
    <script src="js/fullcalendar.min.js"></script>
    <!-- Chart Js -->
    <script src="js/Chart.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 11:38:37 GMT -->

</html>