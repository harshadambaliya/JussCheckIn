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
                                                <td>John Smith</td>
                                                <td>04</td>
                                                <td class="text-end">
                                                    <button data-bs-toggle="pill" data-bs-target="#v-pills-checkIn" type="button" role="tab" class="btn btn-dark btn-sm">Assign Room</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11 Feb 201</td>
                                                <td>Percy Vere</td>
                                                <td>03</td>
                                                <td class="text-end">
                                                    <button data-bs-toggle="pill" data-bs-target="#v-pills-checkIn" type="button" role="tab" class="btn btn-dark btn-sm">Assign Room</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12 Oct 2021</td>
                                                <td>Jack Aranda</td>
                                                <td>02</td>
                                                <td class="text-end">
                                                    <button data-bs-toggle="pill" data-bs-target="#v-pills-checkIn" type="button" role="tab" class="btn btn-dark btn-sm">Assign Room</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>20 Apr 2021</td>
                                                <td>Fran G. Pani</td>
                                                <td>07</td>
                                                <td class="text-end">
                                                    <button data-bs-toggle="pill" data-bs-target="#v-pills-checkIn" type="button" role="tab" class="btn btn-dark btn-sm">Assign Room</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11 Sep 2021</td>
                                                <td>John Quil</td>
                                                <td>02</td>
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
                                                    <td>John Smith</td>
                                                    <td>305</td>
                                                    <td class="text-center"><b>$150</b></td>
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
                                                                        <td>Laundry</td>
                                                                        <td>$30</td>
                                                                        <td>1</td>
                                                                        <td><b>$30</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Pickup/Drop</td>
                                                                        <td>$100</td>
                                                                        <td>1</td>
                                                                        <td><b>$100</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cleaning</td>
                                                                        <td>$20</td>
                                                                        <td>1</td>
                                                                        <td><b>$20</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <th>Total</th>
                                                                        <th>$150</th>
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
                                                    <td>11 Feb 2021</td>
                                                    <td>Percy Vere</td>
                                                    <td>302</td>
                                                    <td class="text-center"><b>$430</b></td>
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
                                                                        <td>Cheese Pizza</td>
                                                                        <td>$90</td>
                                                                        <td>1</td>
                                                                        <td><b>$90</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cheese Burger</td>
                                                                        <td>$60</td>
                                                                        <td>2</td>
                                                                        <td><b>$120</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Pickup</td>
                                                                        <td>$120</td>
                                                                        <td>1</td>
                                                                        <td><b>$120</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <th>Total</th>
                                                                        <th>$430</th>
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
                                                    <td>02 March 2021</td>
                                                    <td>Jack Aranda</td>
                                                    <td>205</td>
                                                    <td class="text-center"><b>$490</b></td>
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
                                                                        <td>Wash Cloths</td>
                                                                        <td>$30</td>
                                                                        <td>4</td>
                                                                        <td><b>$120</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Laundry</td>
                                                                        <td>$30</td>
                                                                        <td>4</td>
                                                                        <td><b>$120</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Drop other place</td>
                                                                        <td>$125</td>
                                                                        <td>2</td>
                                                                        <td><b>$250</b></td>
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
                                                    <td>05 Sep 2021</td>
                                                    <td>Fran G. Pani</td>
                                                    <td>304</td>
                                                    <td class="text-center"><b>$680</b></td>
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
                                                                        <td>Laundry</td>
                                                                        <td>$180</td>
                                                                        <td>6</td>
                                                                        <td><b>$180</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Pick Up</td>
                                                                        <td>$50</td>
                                                                        <td>2</td>
                                                                        <td><b>$100</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Drop Out Side</td>
                                                                        <td>$200</td>
                                                                        <td>2</td>
                                                                        <td><b>$400</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <th>Total</th>
                                                                        <th>$680</th>
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
                                                    <td>13 Sep 2021</td>
                                                    <td>John Quil</td>
                                                    <td>504</td>
                                                    <td class="text-center"><b>$10390</b></td>
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
                                                                        <td>Food Out Side</td>
                                                                        <td>$149</td>
                                                                        <td>3</td>
                                                                        <td><b>$149</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Drinks</td>
                                                                        <td>$250</td>
                                                                        <td>3</td>
                                                                        <td><b>$750</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Drop</td>
                                                                        <td>$120</td>
                                                                        <td>2</td>
                                                                        <td><b>$240</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <th>Total</th>
                                                                        <th>$10390</th>
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
                                                <td>Aadharcard.jpg</td>                                                
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-success btn-sm">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Percy Vere</td>
                                                <td>Pancard.jpg</td>                                                
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-success btn-sm">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jack Aranda</td>
                                                <td>Election-Card.jpg</td>                                                
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-success btn-sm">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fran G. Pani</td>
                                                <td>Driving Liences.jpg</td>                                                
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-success btn-sm">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>John Quil</td>
                                                <td>Passport.jpg</td>                                                
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
                                                    <th colspan="4">Room Type : Double with A/c</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Room No. 401</td>
                                                    <td>Room No. 302</td>
                                                    <td>Room No. 205</td>
                                                    <td>Room No. 123</td>
                                                </tr>
                                                <tr>
                                                    <td>Room No. 405</td>
                                                    <td>Room No. 304</td>
                                                    <td>Room No. 105</td>
                                                    <td>Room No. 403</td>
                                                </tr>
                                                <tr>
                                                    <td>Room No. 102</td>
                                                    <td>Room No. 101</td>
                                                    <td>Room No. 601</td>
                                                    <td>Room No. 701</td>
                                                </tr>
                                                <tr>
                                                    <td>Room No. 306</td>
                                                    <td>Room No. 305</td>
                                                    <td>Room No. 601</td>
                                                    <td>Room No. 321</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="4">Room Type : Single with A/c</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                    <td>Room No. 401</td>
                                                    <td>Room No. 302</td>
                                                    <td>Room No. 205</td>
                                                    <td>Room No. 123</td>
                                                </tr>
                                                <tr>
                                                    <td>Room No. 405</td>
                                                    <td>Room No. 304</td>
                                                    <td>Room No. 105</td>
                                                    <td>Room No. 403</td>
                                                </tr>
                                                <tr>
                                                    <td>Room No. 102</td>
                                                    <td>Room No. 101</td>
                                                    <td>Room No. 601</td>
                                                    <td>Room No. 701</td>
                                                </tr>
                                                <tr>
                                                    <td>Room No. 306</td>
                                                    <td>Room No. 305</td>
                                                    <td>Room No. 601</td>
                                                    <td>Room No. 321</td>
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
      <div id='calendar'></div>
        <div style='clear:both'></div>
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
<!-- <script>

	$(document).ready(function() {
	    var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		/*  className colors
		
		className: default(transparent), important(red), chill(pink), success(green), info(blue)
		
		*/		
		
		  
		/* initialize the external events
		-----------------------------------------------------------------*/
	
		$('#external-events div.external-event').each(function() {
		
			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			// it doesn't need to have a start or end
			var eventObject = {
				title: $.trim($(this).text()) // use the element's text as the event title
			};
			
			// store the Event Object in the DOM element so we can get to it later
			$(this).data('eventObject', eventObject);
			
			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});
			
		});
	
	
		/* initialize the calendar
		-----------------------------------------------------------------*/
		
		var calendar =  $('#calendar').fullCalendar({
			header: {
				left: 'title',
				center: 'agendaDay,agendaWeek,month',
				right: 'prev,next today'
			},
			editable: true,
			firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
			selectable: true,
			defaultView: 'month',
			
			axisFormat: 'h:mm',
			columnFormat: {
                month: 'ddd',    // Mon
                week: 'ddd d', // Mon 7
                day: 'dddd M/d',  // Monday 9/7
                agendaDay: 'dddd d'
            },
            titleFormat: {
                month: 'MMMM yyyy', // September 2009
                week: "MMMM yyyy", // September 2009
                day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
            },
			allDaySlot: false,
			selectHelper: true,
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
			droppable: true, // this allows things to be dropped onto the calendar !!!
			drop: function(date, allDay) { // this function is called when something is dropped
			
				// retrieve the dropped element's stored Event Object
				var originalEventObject = $(this).data('eventObject');
				
				// we need to copy it, so that multiple events don't have a reference to the same object
				var copiedEventObject = $.extend({}, originalEventObject);
				
				// assign it the date that was reported
				copiedEventObject.start = date;
				copiedEventObject.allDay = allDay;
				
				// render the event on the calendar
				// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
				$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
				
				// is the "remove after drop" checkbox checked?
				if ($('#drop-remove').is(':checked')) {
					// if so, remove the element from the "Draggable Events" list
					$(this).remove();
				}
				
			},
			
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false,
					className: 'info'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false,
					className: 'info'
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false,
					className: 'important'
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false,
					className: 'important'
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false,
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'https://ccp.cloudaccess.net/aff.php?aff=5188',
					className: 'success'
				}
			],			
		});
		
		
	});

</script> -->
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