<?php
    include('include/header.php');
?>

<!-- Dashboard Section Start -->
<section class="jci-dashboard-section">
    <div class="jci-dashboard__inner">
        <div class="jci-dashboard-sidebar">
            <div class="jci-dashboard-sidebar__inner">
                <div class="jci-dashboard-logo">
                    <img src="assets/images/logo.png" alt="Logo" class="img-fluid">
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
        
                        <button class="nav-link" id="v-pills-manage-block-tab" data-bs-toggle="pill" data-bs-target="#v-pills-manage-block" type="button" role="tab" aria-controls="v-pills-manage-block" aria-selected="false">
                            <svg id="assignment_turned_in_black_24dp_2_" data-name="assignment_turned_in_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_273" data-name="Path 273" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_274" data-name="Path 274" d="M18,9,16.59,7.58,10,14.17,7.41,11.59,6,13l4,4Zm1-6H14.82A2.988,2.988,0,0,0,9.18,3H5a1.752,1.752,0,0,0-.4.04A2.021,2.021,0,0,0,3.16,4.23,1.926,1.926,0,0,0,3,5V19a2.052,2.052,0,0,0,.16.78,2.119,2.119,0,0,0,.43.64,2.008,2.008,0,0,0,1.01.55A2.6,2.6,0,0,0,5,21H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm-7-.25a.75.75,0,1,1-.75.75A.755.755,0,0,1,12,2.75ZM19,19H5V5H19Z" fill="#fff"/>
                            </svg>
                            <span>Manage Block</span>
                        </button>



                        <button class="nav-link" id="v-pills-laundry-req-tab" data-bs-toggle="pill" data-bs-target="#v-pills-laundry-req" type="button" role="tab" aria-controls="v-pills-laundry-req" aria-selected="true">
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
                            <span>Laundry Request</span>
                        </button>


                        <button class="nav-link" id="v-pills-manage-pricing-tab" data-bs-toggle="pill" data-bs-target="#v-pills-manage-pricing" type="button" role="tab" aria-controls="v-pills-manage-pricing" aria-selected="false">
                            <svg id="assignment_turned_in_black_24dp_2_" data-name="assignment_turned_in_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_273" data-name="Path 273" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_274" data-name="Path 274" d="M18,9,16.59,7.58,10,14.17,7.41,11.59,6,13l4,4Zm1-6H14.82A2.988,2.988,0,0,0,9.18,3H5a1.752,1.752,0,0,0-.4.04A2.021,2.021,0,0,0,3.16,4.23,1.926,1.926,0,0,0,3,5V19a2.052,2.052,0,0,0,.16.78,2.119,2.119,0,0,0,.43.64,2.008,2.008,0,0,0,1.01.55A2.6,2.6,0,0,0,5,21H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm-7-.25a.75.75,0,1,1-.75.75A.755.755,0,0,1,12,2.75ZM19,19H5V5H19Z" fill="#fff"/>
                            </svg>
                            <span>Manage Pricing</span>
                        </button>


                        <button class="nav-link" id="v-pills-view-pricing-tab" data-bs-toggle="pill" data-bs-target="#v-pills-view-pricing" type="button" role="tab" aria-controls="v-pills-view-pricing" aria-selected="true">
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
                            <span>View Pricing</span>
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
                    <div class="tab-pane fade " id="v-pills-dashboard" role="tabpanel"  aria-labelledby="v-pills-dashboard-tab">
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
                                            <h3 class="jci-total-count-number">$1999</h3>
                                            <label class="jci-total-count-label">Pay Amount</label>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-total-count-card">
                                            <h3 class="jci-total-count-number">$3499</h3>
                                            <label class="jci-total-count-label">Pay Salary</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Content End -->

                    <!-- Manage block Content Start -->
                    <div class="tab-pane fade" id="v-pills-manage-block" role="tabpanel" aria-labelledby="v-pills-manage-block-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-content-area">
                                <div class="jci-pay-salary">
                                    <h2 class="jci-dashboard-title">Manage Block</h2>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Block Name</th>
                                                <th scope="col" class="text-center">Room Numbers</th>
                                                <th scope="col" class="text-center" >Staff Name</th>                                                
                                                <th scope="col" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>BNC001</td>
                                                <td class="text-center">412</td>
                                                <td>John Smith</td>                                                
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addStaff">Assign Staff</a>
                                                    <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#createBlock">Create Block</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BNC002</td>
                                                <td class="text-center">301</td>
                                                <td>Percy Vere</td>                                                
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-success btn-sm">Assign Staff</a>
                                                    <a href="#" class="btn btn-dark btn-sm">Create Block</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BNC003</td>
                                                <td class="text-center">401</td>
                                                <td>Jack Aranda</td>                                                
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-success btn-sm">Assign Staff</a>
                                                    <a href="#" class="btn btn-dark btn-sm">Create Block</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BNC004</td>
                                                <td class="text-center">201</td>
                                                <td>Fran G. Pani</td>                                                
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-success btn-sm">Assign Staff</a>
                                                    <a href="#" class="btn btn-dark btn-sm">Create Block</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BNC005</td>
                                                <td class="text-center">412</td>
                                                <td>John Quil</td>                                                
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-success btn-sm">Assign Staff</a>
                                                    <a href="#" class="btn btn-dark btn-sm">Create Block</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BNC006</td>
                                                <td class="text-center">304</td>
                                                <td>Rose Bush</td>                                                
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-success btn-sm">Assign Staff</a>
                                                    <a href="#" class="btn btn-dark btn-sm">Create Block</a>
                                                </td>
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Manage block Content End -->

                    <!-- Laundry Content Start -->
                    <div class="tab-pane fade active show" id="v-pills-laundry-req" role="tabpanel" aria-labelledby="v-pills-laundry-req-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-content-area">
                                <div class="jci-pay-salary">
                                    <h2 class="jci-dashboard-title">Laundry Request</h2>
                                    <div class="table-repsonsive">
                                    <table class="table laundry-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Room No</th>
                                                <th scope="col">Total Cloths</th>
                                                <th scope="col">Date & Time</th>                                                
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">        
                                                <td>
                                                    <svg id="add_box_black_24dp_1_" data-name="add_box_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path id="Path_260" data-name="Path 260" d="M0,0H24V24H0Z" fill="none"/>
                                                        <path id="Path_261" data-name="Path 261" d="M19,3H5A2,2,0,0,0,3,5V19a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm0,16H5V5H19Zm-8-2h2V13h4V11H13V7H11v4H7v2h4Z" fill="#4AB862"/>
                                                    </svg>                                                    
                                                     402</td>
                                                <td >26 Cloths</td>
                                                <td>25 Jan 2020 : 10:10 AM</td>                                                
                                                <td>
                                                <span class="badge rounded-pill bg-secondary">Pending</span>
                                                </td>
                                            </tr>
                                            <tr class="billing-details">
                                                <td colspan="6" class="hiddenRow">
                                                    <div class="accordian-body collapse p-3" id="demo1" >  
                                                      <h2 class="jci-dashboard-title">Billing Details </h2>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Date & Time</th>
                                                                    <th scope="col">Room No</th>
                                                                    <th scope="col">Guest Name</th>                                                
                                                                    <th scope="col">Total Clothes</th>
                                                                    <th scope="col">Total Amount</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>25 Jan 2020 : 11:15 AM</td>                                                
                                                                    <td>402</td>
                                                                    <td>John Smith</td>
                                                                    <td >03 Cloths</td>
                                                                    <td>$20</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>24 Jan 2020 : 10:10 AM</td>                                                
                                                                    <td>402</td>
                                                                    <td>Percy Vere</td>
                                                                    <td >12 Cloths</td>
                                                                    <td>$230</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>23 Jan 2020 : 8:05 AM</td>                                                
                                                                    <td>402</td>
                                                                    <td>Fran G. Pani</td>
                                                                    <td >06 Cloths</td>
                                                                    <td>$180</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>22 Jan 2020 : 9:10 AM</td>                                                
                                                                    <td>402</td>
                                                                    <td>John Quil</td>
                                                                    <td >05 Cloths</td>
                                                                    <td>$150</td>
                                                                </tr>
                                                                
                                                            
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr data-toggle="collapse" data-target="#demo2" class="accordion-toggle">        
                                                <td>
                                                    <svg id="add_box_black_24dp_1_" data-name="add_box_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path id="Path_260" data-name="Path 260" d="M0,0H24V24H0Z" fill="none"/>
                                                        <path id="Path_261" data-name="Path 261" d="M19,3H5A2,2,0,0,0,3,5V19a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm0,16H5V5H19Zm-8-2h2V13h4V11H13V7H11v4H7v2h4Z" fill="#4AB862"/>
                                                    </svg>                                                    
                                                     301
                                                </td>
                                                <td >15 Cloths</td>
                                                <td>05 Feb 2020 : 9:10 AM</td>                                                
                                                <td >
                                                <span class="badge rounded-pill bg-primary">Collected</span>
                                                </td>
                                            </tr>
                                            <tr class="billing-details">
                                                <td colspan="6" class="hiddenRow">
                                                    <div class="accordian-body collapse p-3" id="demo2" >  
                                                      <h2 class="jci-dashboard-title">Billing Details </h2>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Date & Time</th>
                                                                    <th scope="col">Room No</th>
                                                                    <th scope="col">Guest Name</th>                                                
                                                                    <th scope="col">Total Clothes</th>
                                                                    <th scope="col">Total Amount</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>05 Feb 2020 : 10:10 AM</td>                                                
                                                                    <td>301</td>
                                                                    <td>Frank N. Stein</td>
                                                                    <td >03 Cloths</td>
                                                                    <td>$150</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>06 Feb 2020 : 11:23 AM</td>                                                
                                                                    <td>301</td>
                                                                    <td>Roy L. Commishun</td>
                                                                    <td >05 Cloths</td>
                                                                    <td>$450</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>18 Feb 2020 : 8:25 AM</td>                                                
                                                                    <td>301</td>
                                                                    <td>Pat Thettick</td>
                                                                    <td >04 Cloths</td>
                                                                    <td>$200</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>12 Feb 2020 : 10:10 AM</td>                                                
                                                                    <td>301</td>
                                                                    <td>Rod Knee</td>
                                                                    <td >03 Cloths</td>
                                                                    <td>$230</td>
                                                                </tr>
                                                                
                                                            
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr data-toggle="collapse" data-target="#demo3" class="accordion-toggle">        
                                                <td>
                                                    <svg id="add_box_black_24dp_1_" data-name="add_box_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path id="Path_260" data-name="Path 260" d="M0,0H24V24H0Z" fill="none"/>
                                                        <path id="Path_261" data-name="Path 261" d="M19,3H5A2,2,0,0,0,3,5V19a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm0,16H5V5H19Zm-8-2h2V13h4V11H13V7H11v4H7v2h4Z" fill="#4AB862"/>
                                                    </svg>                                                    
                                                     201
                                                </td>
                                                <td >18 Cloths</td>
                                                <td>14 Feb 2020 : 2:10 PM</td>                                                
                                                <td >
                                                <span class="badge rounded-pill bg-warning">In Progress</span>
                                                </td>
                                            </tr>
                                            <tr class="billing-details">
                                                <td colspan="6" class="hiddenRow">
                                                    <div class="accordian-body collapse p-3" id="demo3" >  
                                                      <h2 class="jci-dashboard-title">Billing Details </h2>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Date & Time</th>
                                                                    <th scope="col">Room No</th>
                                                                    <th scope="col">Guest Name</th>                                                
                                                                    <th scope="col">Total Clothes</th>
                                                                    <th scope="col">Total Amount</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>25 Feb 2020 : 10:10 AM</td>                                                
                                                                    <td>201</td>
                                                                    <td>Hank R. Cheef</td>
                                                                    <td >04 Cloths</td>
                                                                    <td>$200</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10 Feb 2020 : 9:55 AM</td>                                                
                                                                    <td>201</td>
                                                                    <td>Pat N. Toffis</td>
                                                                    <td >06 Cloths</td>
                                                                    <td>$250</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>02 Feb 2020 : 8:45 AM</td>                                                
                                                                    <td>201</td>
                                                                    <td>Karen Onnabit</td>
                                                                    <td >2 Cloths</td>
                                                                    <td>$230</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13 Feb 2020 : 2:10 PM</td>                                                
                                                                    <td>201</td>
                                                                    <td>Fay Daway</td>
                                                                    <td >6 Cloths</td>
                                                                    <td>$330</td>
                                                                </tr>
                                                                
                                                            
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr data-toggle="collapse" data-target="#demo4" class="accordion-toggle">        
                                                <td>
                                                    <svg id="add_box_black_24dp_1_" data-name="add_box_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path id="Path_260" data-name="Path 260" d="M0,0H24V24H0Z" fill="none"/>
                                                        <path id="Path_261" data-name="Path 261" d="M19,3H5A2,2,0,0,0,3,5V19a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm0,16H5V5H19Zm-8-2h2V13h4V11H13V7H11v4H7v2h4Z" fill="#4AB862"/>
                                                    </svg>                                                    
                                                     304
                                                </td>
                                                <td >16 Cloths</td>
                                                <td>18 Mar 2020 : 4:55 PM</td>                                                
                                                <td >
                                                <span class="badge rounded-pill bg-success">Completed</span>

                                                </td>
                                            </tr>
                                            <tr class="billing-details">
                                                <td colspan="6" class="hiddenRow">
                                                    <div class="accordian-body collapse p-3" id="demo4" >  
                                                      <h2 class="jci-dashboard-title">Billing Details </h2>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Date & Time</th>
                                                                    <th scope="col">Room No</th>
                                                                    <th scope="col">Guest Name</th>                                                
                                                                    <th scope="col">Total Clothes</th>
                                                                    <th scope="col">Total Amount</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>02 Mar 2020 : 10:10 AM</td>                                                
                                                                    <td>304</td>
                                                                    <td>Joe V. Awl</td>
                                                                    <td >04 Cloths</td>
                                                                    <td>$150</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>14 Mar 2020 : 12:10 AM</td>                                                
                                                                    <td>304</td>
                                                                    <td>Wes Yabinlatelee</td>
                                                                    <td >04 Cloths</td>
                                                                    <td>$230</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16 Mar 2020 : 12:10 PM</td>                                                
                                                                    <td>304</td>
                                                                    <td>Colin Sik</td>
                                                                    <td >02 Cloths</td>
                                                                    <td>$130</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15 Mar 2020 : 5:40 PM</td>                                                
                                                                    <td>304</td>
                                                                    <td>Peter Owt</td>
                                                                    <td >04 Cloths</td>
                                                                    <td>$230</td>
                                                                </tr>
                                                                
                                                            
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                           
                                            
                                          
                                            
                                        </tbody>
                                    </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Laundry Content End -->

                     <!-- Add Pricing Content Start -->
                     <div class="tab-pane fade " id="v-pills-manage-pricing" role="tabpanel"  aria-labelledby="v-pills-manage-pricing-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-assign-roles h-100">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Add Pricing</h2>
                                    <form class="row g-3">                                        
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Enter Cloths Type</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Cloths Type">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Enter Per Piece Price</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Price">
                                        </div>                                       
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- Add Pricing Content End -->
                    
                     <!-- View Pricing Start -->
                     <div class="tab-pane active" id="v-pills-view-pricing" role="tabpanel"  aria-labelledby="v-pills-view-pricing-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-approval h-100">
                            <h2 class="jci-dashboard-title">View Pricing</h2>
                                    <div class="row">
                                        <div class="col col-12 col-md-4 col-lg-6 col-xl-4">
                                            <div class="jci-property-card card jci-property-coupon">                                            
                                                <div class="card-body">
                                                    <h3 class="price"><strong>$35</strong></h3>
                                                    <h3 class="jci-property-name">Fency Sari</h3>                                                                                                        
                                                    <div class="col-md-12 mt-3">                                                    
                                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editRoom">Edit</button>
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-md-4 col-lg-6 col-xl-4">
                                            <div class="jci-property-card card jci-property-coupon">                                            
                                                <div class="card-body">
                                                    <h3 class="price"><strong>$35</strong></h3>
                                                    <h3 class="jci-property-name">Fency Sari</h3>  
                                                    <div class="col-md-12 mt-3">                                                    
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editRoom">Edit</button>
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-md-4 col-lg-6 col-xl-4">
                                            <div class="jci-property-card card jci-property-coupon">                                            
                                                <div class="card-body">
                                                    <h3 class="price"><strong>$35</strong></h3>
                                                    <h3 class="jci-property-name">Fency Sari</h3>  
                                                    <div class="col-md-12 mt-3">                                                    
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editRoom">Edit</button>
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-md-4 col-lg-6 col-xl-4">
                                            <div class="jci-property-card card jci-property-coupon">                                            
                                                <div class="card-body">
                                                    <h3 class="price"><strong>$35</strong></h3>
                                                    <h3 class="jci-property-name">Fency Sari</h3>                                                      
                                                    <div class="col-md-12 mt-3">                                                    
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editRoom">Edit</button>
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-md-4 col-lg-6 col-xl-4">
                                            <div class="jci-property-card card jci-property-coupon">                                            
                                                <div class="card-body">
                                                    <h3 class="price"><strong>$35</strong></h3>
                                                    <h3 class="jci-property-name">Fency Sari</h3>                                                      
                                                    <div class="col-md-12 mt-3">                                                    
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editRoom">Edit</button>
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-md-4 col-lg-6 col-xl-4">
                                            <div class="jci-property-card card jci-property-coupon">                                            
                                                <div class="card-body">
                                                    <h3 class="price"><strong>$35</strong></h3>
                                                    <h3 class="jci-property-name">Fency Sari</h3>                                                      
                                                    <div class="col-md-12 mt-3">                                                    
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editRoom">Edit</button>
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                  
                                   
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- View Pricing End -->
                   
                
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Dashboard Section End -->



<!--Add Staff Modal -->
<div class="modal fade" id="addStaff" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Assign Staff</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
             <form class="row g-3">
                <div class="col-md-12">                                            
                <label for="inputPassword4" class="form-label">Select Staff</label>
                    <select id="inputState" class="form-select">
                        <option selected="">Kitchen Staff</option>
                        <option>Staff 1</option>
                        <option>Staff 2</option>
                        <option>Staff 3</option>
                        <option>Staff 4</option>
                    </select>
                </div>                          
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Assign</button>
      </div>
    </div>
  </div>
</div>
<!-- Add Staff Modal end-->



<!--Add Staff Modal -->
<div class="modal fade" id="createBlock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Block</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
             <form class="row g-3">
                <div class="col-md-12">                                            
                    <label for="inputPassword4" class="form-label">Select Room No</label>
                    <select id="choices-multiple-remove-button" placeholder="Select upto 5 tags" multiple>
                        <option value="HTML">HTML</option>
                        <option value="Jquery">Jquery</option>
                        <option value="CSS">CSS</option>
                        <option value="Bootstrap 3">Bootstrap 3</option>
                        <option value="Bootstrap 4">Bootstrap 4</option>
                        <option value="Java">Java</option>
                        <option value="Javascript">Javascript</option>
                        <option value="Angular">Angular</option>
                        <option value="Python">Python</option>
                        <option value="Hybris">Hybris</option>
                        <option value="SQL">SQL</option>
                        <option value="NOSQL">NOSQL</option>
                        <option value="NodeJS">NodeJS</option>
                    </select>
                </div>                          
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Assign</button>
      </div>
    </div>
  </div>
</div>
<!-- Add Staff Modal end-->


<!-- Edit list of rooms-->
<div class="modal fade" id="editRoom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Price</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form class="row g-3">
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Edit Cloth Types</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Fency Sari">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Enter Price</label>
                    <input type="number" class="form-control" id="inputPassword4" placeholder="$35">
                </div>
                
                                       
                                       
             </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Edit list of rooms-->


<?php
    include('include/footer.php');
?>