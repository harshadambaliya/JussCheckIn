<?php
    include('include/header.php');
?>

<!-- Dashboard Section Start -->
<section class="jci-dashboard-section">
    <div class="jci-dashboard__inner">
        <div class="jci-dashboard-sidebar">
            <div class="jci-dashboard-sidebar__inner">
                <div class="jci-dashboard-logo">
                    <img src="/assets/images/logo.png" alt="Logo" class="img-fluid">
                </div>
                <div class="jci-dashboard-sidebar-menu" data-scrollbar>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        
                        <button class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">
                        <svg id="analytics_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <rect id="Rectangle_41" data-name="Rectangle 41" width="24" height="24" fill="none"/>
                                <g id="Group_937" data-name="Group 937">
                                    <path id="Path_228" data-name="Path 228" d="M19,3H5A2.006,2.006,0,0,0,3,5V19a2.006,2.006,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm0,16H5V5H19Z" fill="#fff"/>
                                    <rect id="Rectangle_42" data-name="Rectangle 42" width="2" height="5" transform="translate(7 12)" fill="#fff"/>
                                    <rect id="Rectangle_43" data-name="Rectangle 43" width="2" height="10" transform="translate(15 7)" fill="#fff"/>
                                    <rect id="Rectangle_44" data-name="Rectangle 44" width="2" height="3" transform="translate(11 14)" fill="#fff"/>
                                    <rect id="Rectangle_45" data-name="Rectangle 45" width="2" height="2" transform="translate(11 10)" fill="#fff"/>
                                </g>
                            </svg>
                            <span>Dashboard</span>
                        </button>
        
                        <button class="nav-link" id="v-pills-pay-salary-tab" data-bs-toggle="pill" data-bs-target="#v-pills-pay-salary" type="button" role="tab" aria-controls="v-pills-pay-salary" aria-selected="false">
                            <svg id="assignment_turned_in_black_24dp_2_" data-name="assignment_turned_in_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_273" data-name="Path 273" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_274" data-name="Path 274" d="M18,9,16.59,7.58,10,14.17,7.41,11.59,6,13l4,4Zm1-6H14.82A2.988,2.988,0,0,0,9.18,3H5a1.752,1.752,0,0,0-.4.04A2.021,2.021,0,0,0,3.16,4.23,1.926,1.926,0,0,0,3,5V19a2.052,2.052,0,0,0,.16.78,2.119,2.119,0,0,0,.43.64,2.008,2.008,0,0,0,1.01.55A2.6,2.6,0,0,0,5,21H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm-7-.25a.75.75,0,1,1-.75.75A.755.755,0,0,1,12,2.75ZM19,19H5V5H19Z" fill="#fff"/>
                            </svg>
                            <span>Pay Salary</span>
                        </button>
        
                        <a href="#" class="nav-link">
                            <svg id="logout_black_24dp_1_" data-name="logout_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Group_946" data-name="Group 946">
                                    <path id="Path_233" data-name="Path 233" d="M0,0H24V24H0Z" fill="none"/>
                                </g>
                                <g id="Group_947" data-name="Group 947">
                                    <path id="Path_234" data-name="Path 234" d="M17,8,15.59,9.41,17.17,11H9v2h8.17l-1.58,1.58L17,16l4-4ZM5,5h7V3H5A2.006,2.006,0,0,0,3,5V19a2.006,2.006,0,0,0,2,2h7V19H5Z" fill="#fff"/>
                                </g>
                            </svg>
                            <span>Log Out</span>
                        </a>
        
                    </div>
                </div>
                <div class="jci-dashboard-info">
                    <p class="jci-dashboard-info-text"> © 2021 Juss check In. <br/> All rights reserved.</p>
                </div>
            </div>
        </div>
        <div class="jci-dashboard-content">
            <div class="jci-dashboard-content__inner">
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- Dashboard Content Start -->
                    <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel"  aria-labelledby="v-pills-dashboard-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>

                            <div class="jci-total-count-data">
                                <div class="row">
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-total-count-card">
                                            <h3 class="jci-total-count-number">$5999</h3>
                                            <label class="jci-total-count-label">Receive Amount</label>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-total-count-card">
                                            <h3 class="jci-total-count-number">$2718</h3>
                                            <label class="jci-total-count-label">Pay Amount</label>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-total-count-card">
                                            <h3 class="jci-total-count-number">$2282</h3>
                                            <label class="jci-total-count-label">Pay Salary</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Content End -->

                    <!-- Pay Salary Content Start -->
                    <div class="tab-pane fade" id="v-pills-pay-salary" role="tabpanel" aria-labelledby="v-pills-pay-salary-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-content-area">
                                <div class="jci-pay-salary">
                                    <h2 class="jci-dashboard-title">Pay Salary</h2>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Employee Name</th>
                                                <th scope="col">Department</th>
                                                <th scope="col">Roles</th>
                                                <th scope="col">Salary</th>
                                                <th scope="col" class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>John Smith</td>
                                                <td>Kitchen</td>
                                                <td>Head Chef</td>
                                                <td>$499</td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-success btn-sm">Pay Salary</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Percy Vere</td>
                                                <td>Kitchen</td>
                                                <td>Pastry Chef </td>
                                                <td>$254</td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-success btn-sm">Pay Salary</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jack Aranda</td>
                                                <td>Cleaning Staff</td>
                                                <td>Room Cleaner</td>
                                                <td>$342</td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-success btn-sm">Pay Salary</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fran G. Pani</td>
                                                <td>Finanace</td>
                                                <td>Admin Manager</td>
                                                <td>$541</td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-success btn-sm">Pay Salary</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>John Quil</td>
                                                <td>Hotel Staff</td>
                                                <td>Waiter</td>
                                                <td>$541</td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-success btn-sm">Pay Salary</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rose Bush</td>
                                                <td>Hotel Staff</td>
                                                <td>Receptionist</td>
                                                <td>$541</td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-success btn-sm">Pay Salary</a>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pay Salary Content End -->
                
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Dashboard Section End -->


<?php
    include('include/footer.php');
?>