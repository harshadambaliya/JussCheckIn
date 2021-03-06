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
        
                        <button class="nav-link active" id="v-pills-manage-bookings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-manage-bookings" type="button" role="tab" aria-controls="v-pills-manage-bookings" aria-selected="true">
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
                            <span>Manage Bookings</span>
                        </button>

                        
        
                        <button class="nav-link" id="v-pills-checkIn-tab" data-bs-toggle="pill" data-bs-target="#v-pills-checkIn" type="button" role="tab" aria-controls="v-pills-checkIn" aria-selected="false">
                            <svg id="assignment_turned_in_black_24dp_2_" data-name="assignment_turned_in_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_273" data-name="Path 273" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_274" data-name="Path 274" d="M18,9,16.59,7.58,10,14.17,7.41,11.59,6,13l4,4Zm1-6H14.82A2.988,2.988,0,0,0,9.18,3H5a1.752,1.752,0,0,0-.4.04A2.021,2.021,0,0,0,3.16,4.23,1.926,1.926,0,0,0,3,5V19a2.052,2.052,0,0,0,.16.78,2.119,2.119,0,0,0,.43.64,2.008,2.008,0,0,0,1.01.55A2.6,2.6,0,0,0,5,21H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm-7-.25a.75.75,0,1,1-.75.75A.755.755,0,0,1,12,2.75ZM19,19H5V5H19Z" fill="#fff"/>
                            </svg>
                            <span>Check In</span>
                        </button>

                        <button class="nav-link" id="v-pills-checkList-tab" data-bs-toggle="pill" data-bs-target="#v-pills-checkList" type="button" role="tab" aria-controls="v-pills-checkList" aria-selected="false">
                            <svg id="assignment_turned_in_black_24dp_2_" data-name="assignment_turned_in_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_273" data-name="Path 273" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_274" data-name="Path 274" d="M18,9,16.59,7.58,10,14.17,7.41,11.59,6,13l4,4Zm1-6H14.82A2.988,2.988,0,0,0,9.18,3H5a1.752,1.752,0,0,0-.4.04A2.021,2.021,0,0,0,3.16,4.23,1.926,1.926,0,0,0,3,5V19a2.052,2.052,0,0,0,.16.78,2.119,2.119,0,0,0,.43.64,2.008,2.008,0,0,0,1.01.55A2.6,2.6,0,0,0,5,21H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm-7-.25a.75.75,0,1,1-.75.75A.755.755,0,0,1,12,2.75ZM19,19H5V5H19Z" fill="#fff"/>
                            </svg>
                            <span>Check List</span>
                        </button>
                        
                        <button class="nav-link" id="v-pills-assign-room-tab" data-bs-toggle="pill" data-bs-target="#v-pills-assign-room" type="button" role="tab" aria-controls="v-pills-assign-room" aria-selected="false">
                            <svg id="assignment_turned_in_black_24dp_2_" data-name="assignment_turned_in_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_273" data-name="Path 273" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_274" data-name="Path 274" d="M18,9,16.59,7.58,10,14.17,7.41,11.59,6,13l4,4Zm1-6H14.82A2.988,2.988,0,0,0,9.18,3H5a1.752,1.752,0,0,0-.4.04A2.021,2.021,0,0,0,3.16,4.23,1.926,1.926,0,0,0,3,5V19a2.052,2.052,0,0,0,.16.78,2.119,2.119,0,0,0,.43.64,2.008,2.008,0,0,0,1.01.55A2.6,2.6,0,0,0,5,21H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm-7-.25a.75.75,0,1,1-.75.75A.755.755,0,0,1,12,2.75ZM19,19H5V5H19Z" fill="#fff"/>
                            </svg>
                            <span>Assign Room</span>
                        </button>
        
                        <button class="nav-link" id="v-pills-check-out-tab" data-bs-toggle="pill" data-bs-target="#v-pills-check-out" type="button" role="tab" aria-controls="v-pills-check-out" aria-selected="false">
                            <svg id="bookmark_remove_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <rect id="Rectangle_76" data-name="Rectangle 76" width="24" height="24" fill="none"/>
                                <path id="Path_275" data-name="Path 275" d="M17,11v6.97l-5-2.14L7,17.97V5h6V3H7A2.006,2.006,0,0,0,5,5V21l7-3,7,3V11Zm4-4H15V5h6Z" fill="#fff"/>
                            </svg>
                            <span>Check Out</span>
                        </button>
        
                        <button class="nav-link" id="v-pills-book-taxi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-book-taxi" type="button" role="tab" aria-controls="v-pills-book-taxi" aria-selected="false">
                            <svg id="local_taxi_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_276" data-name="Path 276" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_277" data-name="Path 277" d="M18.92,6.01A1.494,1.494,0,0,0,17.5,5H15V3H9V5H6.5A1.5,1.5,0,0,0,5.08,6.01L3,12v8a1,1,0,0,0,1,1H5a1,1,0,0,0,1-1V19H18v1a1,1,0,0,0,1,1h1a1,1,0,0,0,1-1V12ZM6.85,7H17.14l1.04,3H5.81ZM19,17H5V12.34L5.12,12H18.89l.11.34Z" fill="#fff"/>
                                <circle id="Ellipse_42" data-name="Ellipse 42" cx="1.5" cy="1.5" r="1.5" transform="translate(6 13)" fill="#fff"/>
                                <circle id="Ellipse_43" data-name="Ellipse 43" cx="1.5" cy="1.5" r="1.5" transform="translate(15 13)" fill="#fff"/>
                            </svg>
                           <span>Book Taxi</span>
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
                    <p class="jci-dashboard-info-text"> ?? 2021 Juss check In. <br/> All rights reserved.</p>
                </div>
            </div>
        </div>
        <div class="jci-dashboard-content">
            <div class="jci-dashboard-content__inner">
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- Manage Bookings Content Start -->
                    <div class="tab-pane fade" id="v-pills-manage-bookings" role="tabpanel"  aria-labelledby="v-pills-manage-bookings-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-content-area">
                                <div class="jci-title d-flex justify-content-between">
                                    <div class="title">
                                       <h2 class="jci-dashboard-title">Manage Bookings</h2>
                                    </div>
                                    <div class="calendar-view">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal">Calendar View</a>
                                    </div>
                                </div>
                                
                                
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Bookings Date</th>
                                                <th scope="col">Customer Name</th>
                                                <th scope="col">Total Peoples</th>
                                                <th scope="col" class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>10 Oct 2021</td>
                                                <td>Name</td>
                                                <td>10</td>
                                                <td class="text-end">
                                                    <button data-bs-toggle="pill" data-bs-target="#v-pills-checkIn" type="button" role="tab" class="btn btn-dark btn-sm">Assign Room</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10 Oct 2021</td>
                                                <td>Name</td>
                                                <td>10</td>
                                                <td class="text-end">
                                                    <button data-bs-toggle="pill" data-bs-target="#v-pills-checkIn" type="button" role="tab" class="btn btn-dark btn-sm">Assign Room</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10 Oct 2021</td>
                                                <td>Name</td>
                                                <td>10</td>
                                                <td class="text-end">
                                                    <button data-bs-toggle="pill" data-bs-target="#v-pills-checkIn" type="button" role="tab" class="btn btn-dark btn-sm">Assign Room</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10 Oct 2021</td>
                                                <td>Name</td>
                                                <td>10</td>
                                                <td class="text-end">
                                                    <button data-bs-toggle="pill" data-bs-target="#v-pills-checkIn" type="button" role="tab" class="btn btn-dark btn-sm">Assign Room</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10 Oct 2021</td>
                                                <td>Name</td>
                                                <td>10</td>
                                                <td class="text-end">
                                                    <button data-bs-toggle="pill" data-bs-target="#v-pills-checkIn" type="button" role="tab" class="btn btn-dark btn-sm">Assign Room</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Manage Bookings Content End -->

                    <!-- Property Reports Content Start -->
                    <div class="tab-pane fade" id="v-pills-checkIn" role="tabpanel" aria-labelledby="v-pills-checkIn-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-content-area">
                                <div class="jci-property-report">
                                    <h2 class="jci-dashboard-title">Check In</h2>
                                    <form class="row g-3 mb-5">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Guest Name</label>
                                                <select id="inputState" class="form-select">
                                                    <option selected="">Select Guest Name</option>
                                                    <option>Guest Name 1</option>
                                                    <option>Guest Name 2</option>
                                                    <option>Guest Name 3</option>
                                                    <option>Guest Name 4</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">ID proof</label>
                                                <div class="jci-choose-file-input">
                                                    <input type="file" class="form-control" id="inputPassword4">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="jci-add-row"></div>
                                        <div class="col-12 text-center">
                                            <button type="button" id="appendex" class="btn btn-success">Add Guest</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Property Reports Content End -->

                    <!-- Room Booking Status Content Start -->
                    <div class="tab-pane fade" id="v-pills-check-out" role="tabpanel" aria-labelledby="v-pills-check-out-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-content-area">
                                <div class="jci-check-out">
                                    <h2 class="jci-dashboard-title">Check Out</h2>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Bookings Date</th>
                                                    <th scope="col">Customer Name</th>
                                                    <th scope="col">Room No.</th>
                                                    <th scope="col" class="text-end">Bill Ammount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="jci-bill-head">
                                                    <td>10 Oct 2021</td>
                                                    <td>Name</td>
                                                    <td>10</td>
                                                    <td><b>$490</b></td>
                                                </tr>
                                                <tr class="jci-bill-detail">
                                                    <td colspan="4">
                                                        <div class="jci-bill-detail-content">
                                                            <h3 class="jci-bill-detail-title">Bill Details</h3>
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                    <th scope="col">Service NAme</th>
                                                                    <th scope="col">Price</th>
                                                                    <th scope="col">Qty</th>
                                                                    <th scope="col">Sub Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Service NAme</td>
                                                                        <td>$30</td>
                                                                        <td>1</td>
                                                                        <td><b>$30</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Service NAme</td>
                                                                        <td>$30</td>
                                                                        <td>2</td>
                                                                        <td><b>$30</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Service NAme</td>
                                                                        <td>$200</td>
                                                                        <td>2</td>
                                                                        <td><b>$400</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <th>Total</th>
                                                                        <th>$490</th>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="text-end mb-4">
                                                                <button type="button" class="btn btn-success">Check Out</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="jci-bill-head">
                                                    <td>10 Oct 2021</td>
                                                    <td>Name</td>
                                                    <td>10</td>
                                                    <td><b>$490</b></td>
                                                </tr>
                                                <tr class="jci-bill-detail">
                                                    <td colspan="4">
                                                        <div class="jci-bill-detail-content">
                                                            <h3 class="jci-bill-detail-title">Bill Details</h3>
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                    <th scope="col">Service NAme</th>
                                                                    <th scope="col">Price</th>
                                                                    <th scope="col">Qty</th>
                                                                    <th scope="col">Sub Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Service NAme</td>
                                                                        <td>$30</td>
                                                                        <td>1</td>
                                                                        <td><b>$30</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Service NAme</td>
                                                                        <td>$30</td>
                                                                        <td>2</td>
                                                                        <td><b>$30</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Service NAme</td>
                                                                        <td>$200</td>
                                                                        <td>2</td>
                                                                        <td><b>$400</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <th>Total</th>
                                                                        <th>$490</th>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="text-end mb-4">
                                                                <button type="button" class="btn btn-success">Check Out</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="jci-bill-head">
                                                    <td>10 Oct 2021</td>
                                                    <td>Name</td>
                                                    <td>10</td>
                                                    <td><b>$490</b></td>
                                                </tr>
                                                <tr class="jci-bill-detail">
                                                    <td colspan="4">
                                                        <div class="jci-bill-detail-content">
                                                            <h3 class="jci-bill-detail-title">Bill Details</h3>
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                    <th scope="col">Service NAme</th>
                                                                    <th scope="col">Price</th>
                                                                    <th scope="col">Qty</th>
                                                                    <th scope="col">Sub Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Service NAme</td>
                                                                        <td>$30</td>
                                                                        <td>1</td>
                                                                        <td><b>$30</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Service NAme</td>
                                                                        <td>$30</td>
                                                                        <td>2</td>
                                                                        <td><b>$30</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Service NAme</td>
                                                                        <td>$200</td>
                                                                        <td>2</td>
                                                                        <td><b>$400</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <th>Total</th>
                                                                        <th>$490</th>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="text-end mb-4">
                                                                <button type="button" class="btn btn-success">Check Out</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="jci-bill-head">
                                                    <td>10 Oct 2021</td>
                                                    <td>Name</td>
                                                    <td>10</td>
                                                    <td><b>$490</b></td>
                                                </tr>
                                                <tr class="jci-bill-detail">
                                                    <td colspan="4">
                                                        <div class="jci-bill-detail-content">
                                                            <h3 class="jci-bill-detail-title">Bill Details</h3>
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                    <th scope="col">Service NAme</th>
                                                                    <th scope="col">Price</th>
                                                                    <th scope="col">Qty</th>
                                                                    <th scope="col">Sub Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Service NAme</td>
                                                                        <td>$30</td>
                                                                        <td>1</td>
                                                                        <td><b>$30</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Service NAme</td>
                                                                        <td>$30</td>
                                                                        <td>2</td>
                                                                        <td><b>$30</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Service NAme</td>
                                                                        <td>$200</td>
                                                                        <td>2</td>
                                                                        <td><b>$400</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <th>Total</th>
                                                                        <th>$490</th>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="text-end mb-4">
                                                                <button type="button" class="btn btn-success">Check Out</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="jci-bill-head">
                                                    <td>10 Oct 2021</td>
                                                    <td>Name</td>
                                                    <td>10</td>
                                                    <td><b>$490</b></td>
                                                </tr>
                                                <tr class="jci-bill-detail">
                                                    <td colspan="4">
                                                        <div class="jci-bill-detail-content">
                                                            <h3 class="jci-bill-detail-title">Bill Details</h3>
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                    <th scope="col">Service NAme</th>
                                                                    <th scope="col">Price</th>
                                                                    <th scope="col">Qty</th>
                                                                    <th scope="col">Sub Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Service NAme</td>
                                                                        <td>$30</td>
                                                                        <td>1</td>
                                                                        <td><b>$30</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Service NAme</td>
                                                                        <td>$30</td>
                                                                        <td>2</td>
                                                                        <td><b>$30</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Service NAme</td>
                                                                        <td>$200</td>
                                                                        <td>2</td>
                                                                        <td><b>$400</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <th>Total</th>
                                                                        <th>$490</th>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="text-end mb-4">
                                                                <button type="button" class="btn btn-success">Check Out</button>
                                                            </div>
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
                    <!-- Room Booking Status Content End -->


                    <!-- Check List Content Start -->
                    <div class="tab-pane fade show active" id="v-pills-checkList" role="tabpanel"  aria-labelledby="v-pills-checkList-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-content-area">
                                <div class="jci-title d-flex justify-content-between">
                                    <div class="title">
                                       <h2 class="jci-dashboard-title">Check List</h2>
                                    </div>                                    
                                </div>
                                
                                
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Guest Name</th>
                                                <th scope="col">Id Proof</th>                                                
                                                <th scope="col" class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>John Smith</td>
                                                <td>aadharcard.jpg</td>                                                
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-success btn-sm">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>John Smith</td>
                                                <td>aadharcard.jpg</td>                                                
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-success btn-sm">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>John Smith</td>
                                                <td>aadharcard.jpg</td>                                                
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-success btn-sm">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>John Smith</td>
                                                <td>aadharcard.jpg</td>                                                
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-success btn-sm">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>John Smith</td>
                                                <td>aadharcard.jpg</td>                                                
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-success btn-sm">Download</button>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Check List Content End -->
                    
                    <!-- Book Taxi Content Start -->
                    <div class="tab-pane fade" id="v-pills-book-taxi" role="tabpanel"  aria-labelledby="v-pills-book-taxi-tab">
                        <!-- <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-upcoming-booking">
                                
                            </div>
                        </div> -->
                    </div>
                    <!-- Book Taxi Content End -->
                    
                    <!-- Assign Book Content Start -->
                    <div class="tab-pane fade" id="v-pills-assign-room" role="tabpanel"  aria-labelledby="v-pills-assign-room-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-assign-room">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Assign Room</h2>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="4">Room Type : Lorem ipsum dolor sit amet</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Room No. 1</td>
                                                    <td>Room No. 2</td>
                                                    <td>Room No. 3</td>
                                                    <td>Room No. 4</td>
                                                </tr>
                                                <tr>
                                                    <td>Room No. 1</td>
                                                    <td>Room No. 2</td>
                                                    <td>Room No. 3</td>
                                                    <td>Room No. 4</td>
                                                </tr>
                                                <tr>
                                                    <td>Room No. 1</td>
                                                    <td>Room No. 2</td>
                                                    <td>Room No. 3</td>
                                                    <td>Room No. 4</td>
                                                </tr>
                                                <tr>
                                                    <td>Room No. 1</td>
                                                    <td>Room No. 2</td>
                                                    <td>Room No. 3</td>
                                                    <td>Room No. 4</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="4">Room Type : Lorem ipsum dolor sit amet</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Room No. 1</td>
                                                    <td>Room No. 2</td>
                                                    <td>Room No. 3</td>
                                                    <td>Room No. 4</td>
                                                </tr>
                                                <tr>
                                                    <td>Room No. 1</td>
                                                    <td>Room No. 2</td>
                                                    <td>Room No. 3</td>
                                                    <td>Room No. 4</td>
                                                </tr>
                                                <tr>
                                                    <td>Room No. 1</td>
                                                    <td>Room No. 2</td>
                                                    <td>Room No. 3</td>
                                                    <td>Room No. 4</td>
                                                </tr>
                                                <tr>
                                                    <td>Room No. 1</td>
                                                    <td>Room No. 2</td>
                                                    <td>Room No. 3</td>
                                                    <td>Room No. 4</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Assign Book Content End -->                    
                </div>
                <div class="calendar-view">
                <div id="scheduler_here" class="dhx_cal_container" style='width:100%; height:100%;'>
		<div class="dhx_cal_navline">
			<div class="dhx_cal_prev_button">&nbsp;</div>
			<div class="dhx_cal_next_button">&nbsp;</div>
			<div class="dhx_cal_today_button"></div>
			<div class="dhx_cal_date"></div>
			<select id="room_filter" onchange='showRooms(this.value)'></select>
		</div>
		<div class="dhx_cal_header">
		</div>
		<div class="dhx_cal_data">
		</div>		
	</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Dashboard Section End -->


<!-- Checking in available room Modal -->
<div class="modal fade" id="checkingRoomModal" tabindex="-1" aria-labelledby="checkingRdalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="checkingRdalLabel">Checking in available room</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="jci-checkingRoomModal">
                    <form class="row g-3 ">
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Rooms Type</label>
                            <select id="inputState" class="form-select">
                                <option selected="">Select Rooms Type</option>
                                <option>Rooms Type 1</option>
                                <option>Rooms Type 2</option>
                                <option>Rooms Type 3</option>
                                <option>Rooms Type 4</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Room Features</label>
                            <select id="inputState" class="form-select">
                                <option selected="">Select Room Features</option>
                                <option>Room Features 1</option>
                                <option>Room Features 2</option>
                                <option>Room Features 3</option>
                                <option>Room Features 4</option>
                            </select>
                        </div>
                        
                        <div class="col-12 text-center my-4">
                            <a data-toggle="tab" id="jci-checkIn-modal-btn" class="btn btn-success" href="#v-pills-assign-room">Check In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- calendar view -->
<div class="modal  fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Calendar View</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="scheduler_here" class="dhx_cal_container" style='width:100%; height:100%;'>
		<div class="dhx_cal_navline">
			<div class="dhx_cal_prev_button">&nbsp;</div>
			<div class="dhx_cal_next_button">&nbsp;</div>
			<div class="dhx_cal_today_button"></div>
			<div class="dhx_cal_date"></div>
			<select id="room_filter" onchange='showRooms(this.value)'></select>
		</div>
		<div class="dhx_cal_header">
		</div>
		<div class="dhx_cal_data">
		</div>		
	</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- calendar view end-->



<!-- calendar script -->
<script>
   window.showRooms = function showRooms(type) {
  var allRooms = scheduler.serverList("rooms");
	var visibleRooms ;
	if (type == 'all') {
		visibleRooms = allRooms.slice();
	}else{
        visibleRooms = allRooms
          .filter(function(room){
             return room.type == type;
        });
    }

  scheduler.updateCollection("visibleRooms", visibleRooms);
};


scheduler.locale.labels.section_text = 'Name';
scheduler.locale.labels.section_room = 'Room';
scheduler.locale.labels.section_status = 'Status';
scheduler.locale.labels.section_is_paid = 'Paid';
scheduler.locale.labels.section_time = 'Time';

scheduler.config.details_on_create=true;
scheduler.config.details_on_dblclick=true;

//===============
//Configuration
//===============

scheduler.serverList("roomTypes");
scheduler.serverList("roomStatuses");
scheduler.serverList("bookingStatuses");
scheduler.serverList("rooms");

scheduler.createTimelineView({
	name:	"timeline",
	x_unit: "day",
	x_date: "%j",
	x_step: 1,
	x_size: 31,
	section_autoheight: false,
	y_unit:	scheduler.serverList("visibleRooms"),
	y_property:	"room",
	render:"bar",
	round_position:true,
  event_dy: "full",
	dy:60,
	second_scale:{
		x_unit: "month", 
		x_date: "%F, %Y" 
	}
});

scheduler.attachEvent("onBeforeViewChange", function(old_mode,old_date,mode,date){
	var year = date.getFullYear();
	var month= (date.getMonth() + 1);
	var d = new Date(year, month, 0);
	var daysInMonth = d.getDate();
  var timeline = scheduler.getView('timeline'); 
  timeline.x_size = daysInMonth;
	return true;
});

scheduler.date.timeline_start = scheduler.date.month_start;

scheduler.date.add_timeline = function(date, step){
	if(step > 0){
		step = 1;
	}else if(step < 0){
		step = -1;
	}
	return scheduler.date.add(date, step, "month")
};

scheduler.addMarkedTimespan({
  days: [0, 6], 
  zones: "fullday", 
  css: "timeline_weekend"
});


scheduler.config.lightbox.sections=[
  {map_to: "text", name: "text", type: "textarea", height: 24},
  {map_to: "room", name: "room", type: "select", options: scheduler.serverList("visibleRooms")},
  {map_to: "status", name: "status", type: "radio", options: scheduler.serverList("bookingStatuses")},
  {map_to: "is_paid", name: "is_paid", type: "checkbox", checked_value: true, unchecked_value: false},
  {map_to: "time", name: "time", type: "calendar_time"}
];


scheduler.attachEvent('onEventCreated', function (event_id) {
  var ev = scheduler.getEvent(event_id);
  ev.status = 1;
  ev.is_paid = false;
  ev.text = 'new booking';
});

scheduler.attachEvent("onParse", function(){
  showRooms("all");
  
  var roomSelect = document.querySelector("#room_filter");
  var types = scheduler.serverList("roomTypes");
  var typeElements = ["<option value='all'>All</option>"];
  types.forEach(function(type){
     typeElements.push("<option value='"+type.key+"'>" + type.label +"</option>");
  });
  roomSelect.innerHTML = typeElements.join("")
});

var headerHTML = "<div class='timeline_item_separator'></div>" +
    "<div class='timeline_item_cell'>Number</div>" +
    "<div class='timeline_item_separator'></div>" +
    "<div class='timeline_item_cell'>Type</div>" +
    "<div class='timeline_item_separator'></div>" +
    "<div class='timeline_item_cell room_status'>Status</div>";

scheduler.locale.labels.timeline_scale_header = headerHTML;

scheduler.attachEvent("onTemplatesReady", function(){
  
  function findInArray(array, key) {
    for (var i = 0; i < array.length; i++) {
      if (key == array[i].key)
        return array[i];
    }
    return null;
  }

  function getRoomType(key) {
    return findInArray(scheduler.serverList("roomTypes"), key).label;
  }

  function getRoomStatus(key) {
    return findInArray(scheduler.serverList("roomStatuses"), key);
  }

  function getRoom(key) {
    return findInArray(scheduler.serverList("rooms"), key);
  }

  scheduler.templates.timeline_scale_label = function (key, label, section) {
    var roomStatus = getRoomStatus(section.status);
    return ["<div class='timeline_item_separator'></div>",
            "<div class='timeline_item_cell'>" + label + "</div>",
            "<div class='timeline_item_separator'></div>",
            "<div class='timeline_item_cell'>" + getRoomType(section.type) + "</div>",
            "<div class='timeline_item_separator'></div>",
            "<div class='timeline_item_cell room_status'>",
            "<span class='room_status_indicator room_status_indicator_"+section.status+"'></span>",
            "<span class='status-label'>" + roomStatus.label + "</span>",
            "</div>"].join("");
  };
  
  scheduler.templates.event_class = function (start, end, event) {
    return "event_" + (event.status || "");
  };

  function getBookingStatus(key) {
    var bookingStatus = findInArray(scheduler.serverList("bookingStatuses"), key);
    return !bookingStatus ? '' : bookingStatus.label;
  }

  function getPaidStatus(isPaid) {
    return isPaid ? "paid" : "not paid";
  }

  var eventDateFormat = scheduler.date.date_to_str("%d %M %Y");
  scheduler.templates.event_bar_text = function (start, end, event) {
    var paidStatus = getPaidStatus(event.is_paid);
    var startDate = eventDateFormat(event.start_date);
    var endDate = eventDateFormat(event.end_date);
    return [event.text + "<br />",
            startDate + " - " + endDate,
            "<div class='booking_status booking-option'>" + getBookingStatus(event.status) + "</div>",
            "<div class='booking_paid booking-option'>" + paidStatus + "</div>"].join("");
  };
  
  scheduler.templates.tooltip_text = function (start, end, event) {
    var room = getRoom(event.room) || {label: ""};

    var html = [];
    html.push("Booking: <b>" + event.text + "</b>");
    html.push("Room: <b>" + room.label + "</b>");
    html.push("Check-in: <b>" + eventDateFormat(start) + "</b>");
    html.push("Check-out: <b>" + eventDateFormat(end) + "</b>");
    html.push(getBookingStatus(event.status) + ", " + getPaidStatus(event.is_paid));
    return html.join("<br>")
  };

  scheduler.templates.lightbox_header = function (start, end, ev) {
    var formatFunc = scheduler.date.date_to_str('%d.%m.%Y');
    return formatFunc(start) + " - " + formatFunc(end);
  };


});


scheduler.init('scheduler_here',new Date(2017,2,30),"timeline");
scheduler.parse(JSON.stringify({
	"data":[
		{"room":"1","start_date":"2017-03-02","end_date":"2017-03-23","text":"A-12","id":"1","status":"1","is_paid":"1"},
		{"room":"3","start_date":"2017-03-07","end_date":"2017-03-21","text":"A-45","id":"2","status":"2","is_paid":"1"},
		{"room":"5","start_date":"2017-03-06","end_date":"2017-03-14","text":"A-58","id":"3","status":"3","is_paid":"0"},
		{"room":"7","start_date":"2017-03-04","end_date":"2017-03-18","text":"A-28","id":"4","status":"4","is_paid":"0"}],
	"collections":{
		"roomTypes":[
			{"value":"1","label":"1 bed"},
			{"value":"2","label":"2 beds"},
			{"value":"3","label":"3 beds"},
			{"value":"4","label":"4 beds"}
		],
		"roomStatuses":[
			{"value":"1","label":"Ready"},
			{"value":"2","label":"Dirty"},
			{"value":"3","label":"Clean up"}
		],
		"bookingStatuses":[
			{"value":"1","label":"New"},
			{"value":"2","label":"Confirmed"},
			{"value":"3","label":"Arrived"},
			{"value":"4","label":"Checked Out"}
		],
		"rooms":[
			{"value":"1","label":"101","type":"1","status":"1"},
			{"value":"2","label":"102","type":"1","status":"3"},
			{"value":"3","label":"103","type":"1","status":"2"},
			{"value":"4","label":"104","type":"1","status":"1"},
			{"value":"5","label":"105","type":"2","status":"1"},
			{"value":"6","label":"201","type":"2","status":"2"},
			{"value":"7","label":"202","type":"2","status":"1"},
			{"value":"8","label":"203","type":"3","status":"3"},
			{"value":"9","label":"204","type":"3","status":"3"},
			{"value":"10","label":"301","type":"4","status":"2"},
			{"value":"11","label":"302","type":"4","status":"2"}
		]
	}
}),"json");
</script>


<script>
$(document).ready(function(){
  $("#appendex").click(function(){
    $("#jci-add-row").append(" <div class='row'><div class='col-md-6'><label for='inputPassword4' class='form-label'>Guest Name</label><select id='inputState' class='form-select'><option selected=''>Select Guest Name</option><option>Guest Name 1</option><option>Guest Name 4</option></select></div><div class='col-md-6'><label for='inputPassword4' class='form-label'>ID proof</label><div class='jci-choose-file-input'><input type='file' class='form-control' id='inputPassword4'></div></div></div>");
  });
});
</script>

<?php
    include('include/footer.php');
?>