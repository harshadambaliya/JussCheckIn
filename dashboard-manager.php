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
        
                        <button class="nav-link" id="v-pills-view-bookings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-view-bookings" type="button" role="tab" aria-controls="v-pills-view-bookings" aria-selected="false">
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
                            <span>View Bookings</span>
                        </button>
        
                        <button class="nav-link" id="v-pills-room-booking-tab" data-bs-toggle="pill" data-bs-target="#v-pills-room-booking" type="button" role="tab" aria-controls="v-pills-room-booking" aria-selected="false">
                            <svg id="meeting_room_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_229" data-name="Path 229" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_230" data-name="Path 230" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#fff"/>
                            </svg>
                            <span>Room Booking Status</span>
                        </button>
        
                        <button class="nav-link" id="v-pills-upcoming-booking-tab" data-bs-toggle="pill" data-bs-target="#v-pills-upcoming-booking" type="button" role="tab" aria-controls="v-pills-upcoming-booking" aria-selected="false">
                            <svg id="upcoming_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Group_942" data-name="Group 942">
                                    <rect id="Rectangle_47" data-name="Rectangle 47" width="24" height="24" fill="none"/>
                                </g>
                                <g id="Group_943" data-name="Group 943">
                                    <path id="Path_231" data-name="Path 231" d="M17.6,10.81,16.19,9.4l3.56-3.55,1.41,1.41C21.05,7.29,17.6,10.81,17.6,10.81ZM13,3H11V8h2ZM6.4,10.81,7.81,9.4,4.26,5.84,2.84,7.26C2.95,7.29,6.4,10.81,6.4,10.81ZM20,14H16.58a5,5,0,0,1-9.16,0H4v5H20V14m0-2a2.006,2.006,0,0,1,2,2v5a2.006,2.006,0,0,1-2,2H4a2.006,2.006,0,0,1-2-2V14a2.006,2.006,0,0,1,2-2H9a3,3,0,0,0,6,0Z" fill="#fff"/>
                                </g>
                            </svg>
                           <span>Upcoming Bookings</span>
                        </button>
                        
                        <button class="nav-link" id="v-pills-add-employees-tab" data-bs-toggle="pill" data-bs-target="#v-pills-add-employees" type="button" role="tab" aria-controls="v-pills-add-employees" aria-selected="false">
                            <svg id="group_add_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Group_966" data-name="Group 966">
                                    <rect id="Rectangle_51" data-name="Rectangle 51" width="24" height="24" fill="none"/>
                                    <rect id="Rectangle_52" data-name="Rectangle 52" width="24" height="24" fill="none"/>
                                </g>
                                <g id="Group_968" data-name="Group 968">
                                    <g id="Group_967" data-name="Group 967">
                                    <path id="Path_245" data-name="Path 245" d="M22,9V7H20V9H18v2h2v2h2V11h2V9Z" fill="#fff"/>
                                    <path id="Path_246" data-name="Path 246" d="M8,12A4,4,0,1,0,4,8,4,4,0,0,0,8,12ZM8,6A2,2,0,1,1,6,8,2.006,2.006,0,0,1,8,6Z" fill="#fff"/>
                                    <path id="Path_247" data-name="Path 247" d="M8,13c-2.67,0-8,1.34-8,4v3H16V17C16,14.34,10.67,13,8,13Zm6,5H2v-.99C2.2,16.29,5.3,15,8,15s5.8,1.29,6,2Z" fill="#fff"/>
                                    <path id="Path_248" data-name="Path 248" d="M12.51,4.05a5.981,5.981,0,0,1,0,7.9,3.98,3.98,0,0,0,0-7.9Z" fill="#fff"/>
                                    <path id="Path_249" data-name="Path 249" d="M16.53,13.83A4.237,4.237,0,0,1,18,17v3h2V17C20,15.55,18.41,14.49,16.53,13.83Z" fill="#fff"/>
                                    </g>
                                </g>
                            </svg>
                            <span>Add Employees</span>
                        </button>
                        
                        <button class="nav-link" id="v-pills-add-assign-tasks-tab" data-bs-toggle="pill" data-bs-target="#v-pills-add-assign-tasks" type="button" role="tab" aria-controls="v-pills-add-assign-tasks" aria-selected="false">
                            <svg id="assignment_turned_in_black_24dp_1_" data-name="assignment_turned_in_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_258" data-name="Path 258" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_259" data-name="Path 259" d="M18,9,16.59,7.58,10,14.17,7.41,11.59,6,13l4,4Zm1-6H14.82A2.988,2.988,0,0,0,9.18,3H5a1.752,1.752,0,0,0-.4.04A2.021,2.021,0,0,0,3.16,4.23,1.926,1.926,0,0,0,3,5V19a2.052,2.052,0,0,0,.16.78,2.119,2.119,0,0,0,.43.64,2.008,2.008,0,0,0,1.01.55A2.6,2.6,0,0,0,5,21H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm-7-.25a.75.75,0,1,1-.75.75A.755.755,0,0,1,12,2.75ZM19,19H5V5H19Z" fill="#fff"/>
                            </svg>
                            <span>Assign Tasks</span>
                        </button>
                        
                        <button class="nav-link" id="v-pills-add-property-tab" data-bs-toggle="pill" data-bs-target="#v-pills-add-property" type="button" role="tab" aria-controls="v-pills-add-property" aria-selected="false">
                            <svg id="add_box_black_24dp_1_" data-name="add_box_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_260" data-name="Path 260" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_261" data-name="Path 261" d="M19,3H5A2,2,0,0,0,3,5V19a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm0,16H5V5H19Zm-8-2h2V13h4V11H13V7H11v4H7v2h4Z" fill="#fff"/>
                            </svg>
                            <span>Add Property</span>
                        </button>
        
                        <button class="nav-link" id="v-pills-guest-facilities-tab" data-bs-toggle="pill" data-bs-target="#v-pills-guest-facilities" type="button" role="tab" aria-controls="v-pills-guest-facilities" aria-selected="false">
                            <svg id="add_box_black_24dp_1_" data-name="add_box_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_262" data-name="Path 262" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_263" data-name="Path 263" d="M19,3H5A2,2,0,0,0,3,5V19a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm0,16H5V5H19Zm-8-2h2V13h4V11H13V7H11v4H7v2h4Z" fill="#fff"/>
                            </svg>
                           <span>Add Guest Facilities</span>
                        </button>
                        
                        <button class="nav-link" id="v-pills-approvals-tab" data-bs-toggle="pill" data-bs-target="#v-pills-approvals" type="button" role="tab" aria-controls="v-pills-approvals" aria-selected="false">
                            <svg id="approval_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Group_969" data-name="Group 969">
                                    <rect id="Rectangle_53" data-name="Rectangle 53" width="24" height="24" fill="none"/>
                                </g>
                                <g id="Group_971" data-name="Group 971">
                                    <g id="Group_970" data-name="Group 970">
                                    <path id="Path_250" data-name="Path 250" d="M4,16v6H20V16a2.006,2.006,0,0,0-2-2H6A2.006,2.006,0,0,0,4,16Zm14,2H6V16H18ZM12,2A5,5,0,0,0,7,7l5,7,5-7A5,5,0,0,0,12,2Zm0,9L9,7a3,3,0,0,1,6,0Z" fill="#fff"/>
                                    </g>
                                </g>
                            </svg>

                           <span>Approvals</span>
                        </button>
                        
                        <button class="nav-link" id="v-pills-add-restaurants-tab" data-bs-toggle="pill" data-bs-target="#v-pills-add-restaurants" type="button" role="tab" aria-controls="v-pills-add-restaurants" aria-selected="false">
                            <svg id="add_business_black_24dp_1_" data-name="add_business_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Group_1167" data-name="Group 1167">
                                    <rect id="Rectangle_57" data-name="Rectangle 57" width="24" height="24" fill="none"/>
                                </g>
                                <g id="Group_1169" data-name="Group 1169">
                                    <g id="Group_1168" data-name="Group 1168">
                                    <rect id="Rectangle_58" data-name="Rectangle 58" width="15" height="2" transform="translate(2 4)" fill="#fff"/>
                                    <path id="Path_264" data-name="Path 264" d="M15,17h2V14h1V12L17,7H2L1,12v2H2v6h9V14h4ZM9,18H4V14H9ZM3.04,12l.6-3H15.36l.6,3Z" fill="#fff"/>
                                    <path id="Path_265" data-name="Path 265" d="M23,18H20V15H18v3H15v2h3v3h2V20h3Z" fill="#fff"/>
                                    </g>
                                </g>
                            </svg>
                           <span>Add Restaurants</span>
                        </button>
                        
                        <button class="nav-link" id="v-pills-room-services-tab" data-bs-toggle="pill" data-bs-target="#v-pills-room-services" type="button" role="tab" aria-controls="v-pills-room-services" aria-selected="false">
                            <svg id="playlist_add_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Group_1170" data-name="Group 1170">
                                    <rect id="Rectangle_59" data-name="Rectangle 59" width="24" height="24" fill="none"/>
                                </g>
                                <g id="Group_1171" data-name="Group 1171">
                                    <path id="Path_266" data-name="Path 266" d="M14,10H3v2H14Zm0-4H3V8H14Zm4,8V10H16v4H12v2h4v4h2V16h4V14ZM3,16h7V14H3Z" fill="#fff"/>
                                </g>
                            </svg>
                           <span>Add List of room services</span>
                        </button>

                        <button class="nav-link" id="v-pills-add-travel-agent-tab" data-bs-toggle="pill" data-bs-target="#v-pills-add-travel-agent" type="button" role="tab" aria-controls="v-pills-add-travel-agent" aria-selected="false">
                            <svg id="add_road_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Group_1175" data-name="Group 1175">
                                    <rect id="Rectangle_66" data-name="Rectangle 66" width="24" height="24" fill="none"/>
                                </g>
                                <g id="Group_1177" data-name="Group 1177">
                                    <g id="Group_1176" data-name="Group 1176">
                                    <path id="Path_268" data-name="Path 268" d="M20,18V15H18v3H15v2h3v3h2V20h3V18Z" fill="#fff"/>
                                    <rect id="Rectangle_67" data-name="Rectangle 67" width="2" height="9" transform="translate(18 4)" fill="#fff"/>
                                    <rect id="Rectangle_68" data-name="Rectangle 68" width="2" height="16" transform="translate(4 4)" fill="#fff"/>
                                    <rect id="Rectangle_69" data-name="Rectangle 69" width="2" height="4" transform="translate(11 4)" fill="#fff"/>
                                    <rect id="Rectangle_70" data-name="Rectangle 70" width="2" height="4" transform="translate(11 10)" fill="#fff"/>
                                    <rect id="Rectangle_71" data-name="Rectangle 71" width="2" height="4" transform="translate(11 16)" fill="#fff"/>
                                    </g>
                                </g>
                            </svg>
                           <span>Add travel Agent</span>
                        </button>

                        <button class="nav-link" id="v-pills-agent-commission-tab" data-bs-toggle="pill" data-bs-target="#v-pills-agent-commission" type="button" role="tab" aria-controls="v-pills-agent-commission" aria-selected="false">
                            <svg id="add_road_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Group_1175" data-name="Group 1175">
                                    <rect id="Rectangle_66" data-name="Rectangle 66" width="24" height="24" fill="none"/>
                                </g>
                                <g id="Group_1177" data-name="Group 1177">
                                    <g id="Group_1176" data-name="Group 1176">
                                    <path id="Path_268" data-name="Path 268" d="M20,18V15H18v3H15v2h3v3h2V20h3V18Z" fill="#fff"/>
                                    <rect id="Rectangle_67" data-name="Rectangle 67" width="2" height="9" transform="translate(18 4)" fill="#fff"/>
                                    <rect id="Rectangle_68" data-name="Rectangle 68" width="2" height="16" transform="translate(4 4)" fill="#fff"/>
                                    <rect id="Rectangle_69" data-name="Rectangle 69" width="2" height="4" transform="translate(11 4)" fill="#fff"/>
                                    <rect id="Rectangle_70" data-name="Rectangle 70" width="2" height="4" transform="translate(11 10)" fill="#fff"/>
                                    <rect id="Rectangle_71" data-name="Rectangle 71" width="2" height="4" transform="translate(11 16)" fill="#fff"/>
                                    </g>
                                </g>
                            </svg>
                           <span>Travel Agent Commission</span>
                        </button>

                        <button class="nav-link" id="v-pills-discounts-coupon-tab" data-bs-toggle="pill" data-bs-target="#v-pills-discounts-coupon" type="button" role="tab" aria-controls="v-pills-discounts-coupon" aria-selected="false">
                            <svg id="local_offer_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_269" data-name="Path 269" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_270" data-name="Path 270" d="M21.41,11.58l-9-9A1.987,1.987,0,0,0,11,2H4A2.006,2.006,0,0,0,2,4v7a2,2,0,0,0,.59,1.42l9,9A1.987,1.987,0,0,0,13,22a1.955,1.955,0,0,0,1.41-.59l7-7A1.955,1.955,0,0,0,22,13,2.02,2.02,0,0,0,21.41,11.58ZM13,20.01,4,11V4h7V3.99l9,9Z" fill="#fff"/>
                                <circle id="Ellipse_41" data-name="Ellipse 41" cx="1.5" cy="1.5" r="1.5" transform="translate(5 5)" fill="#fff"/>
                            </svg>
                           <span>Offers and discounts coupon</span>
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
                            <div class="jci-dashboard-filter">
                                <form class="row align-items-center">
                                    <div class="col-md-2 mt-0">
                                        <label for="Recipient's username" class="form-label mb-0">Property :</label>
                                    </div>
                                    <div class="col-md-8 mt-0">
                                        <div class="input-group">
                                            <select id="inputState" class="form-select">
                                                <option selected>Select Property</option>
                                                <option>...</option>
                                            </select>
                                            <button class="btn btn-success" type="button" id="button-addon2">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="jci-total-count-data">
                                <div class="row">
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-total-count-card">
                                            <h3 class="jci-total-count-number">499</h3>
                                            <label class="jci-total-count-label">Total Numbers Of Rooms</label>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-total-count-card">
                                            <h3 class="jci-total-count-number">458</h3>
                                            <label class="jci-total-count-label">Booked Rooms</label>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-total-count-card">
                                            <h3 class="jci-total-count-number">41</h3>
                                            <label class="jci-total-count-label">Available Rooms</label>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-total-count-card">
                                            <h3 class="jci-total-count-number">458899</h3>
                                            <label class="jci-total-count-label">Revenue Earned</label>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-total-count-card">
                                            <h3 class="jci-total-count-number">59</h3>
                                            <label class="jci-total-count-label">Upcoming Bookings</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Content End -->

                    <!-- View Bookings Content Start -->
                    <div class="tab-pane fade" id="v-pills-view-bookings" role="tabpanel" aria-labelledby="v-pills-view-bookings-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-view-booking">
                                <div class="jci-dashboard-filter">
                                    <form class="row align-items-center">
                                        <div class="col-md-2 mt-0">
                                            <label for="Recipient's username" class="form-label mb-0">Property :</label>
                                        </div>
                                        <div class="col-md-8 mt-0">
                                            <div class="input-group">
                                                <select id="inputState" class="form-select">
                                                    <option selected>Select Property</option>
                                                    <option>Property name 1</option>
                                                    <option>Property name 2</option>
                                                    <option>Property name 3</option>
                                                    <option>Property name 4</option>
                                                </select>
                                                <button class="btn btn-success" type="button" id="button-addon2">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="jci-dashboard-filter">
                                    <form class="row align-items-center">
                                        <div class="col-md-3">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Booking id">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Guest name">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Date Range">
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-success" type="button" >Search</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>01 Room</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="groups_black_24dp_1_" data-name="groups_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <rect id="Rectangle_54" data-name="Rectangle 54" width="24" height="24" fill="none"/>
                                                                <g id="Group_981" data-name="Group 981">
                                                                    <path id="Path_251" data-name="Path 251" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#4ab862"/>
                                                                </g>
                                                            </svg>
                                                            <span>02 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>01 Room</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="groups_black_24dp_1_" data-name="groups_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <rect id="Rectangle_54" data-name="Rectangle 54" width="24" height="24" fill="none"/>
                                                                <g id="Group_981" data-name="Group 981">
                                                                    <path id="Path_251" data-name="Path 251" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#4ab862"/>
                                                                </g>
                                                            </svg>
                                                            <span>02 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>01 Room</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="groups_black_24dp_1_" data-name="groups_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <rect id="Rectangle_54" data-name="Rectangle 54" width="24" height="24" fill="none"/>
                                                                <g id="Group_981" data-name="Group 981">
                                                                    <path id="Path_251" data-name="Path 251" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#4ab862"/>
                                                                </g>
                                                            </svg>
                                                            <span>02 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>01 Room</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="groups_black_24dp_1_" data-name="groups_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <rect id="Rectangle_54" data-name="Rectangle 54" width="24" height="24" fill="none"/>
                                                                <g id="Group_981" data-name="Group 981">
                                                                    <path id="Path_251" data-name="Path 251" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#4ab862"/>
                                                                </g>
                                                            </svg>
                                                            <span>02 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>01 Room</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="groups_black_24dp_1_" data-name="groups_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <rect id="Rectangle_54" data-name="Rectangle 54" width="24" height="24" fill="none"/>
                                                                <g id="Group_981" data-name="Group 981">
                                                                    <path id="Path_251" data-name="Path 251" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#4ab862"/>
                                                                </g>
                                                            </svg>
                                                            <span>02 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>01 Room</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="groups_black_24dp_1_" data-name="groups_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <rect id="Rectangle_54" data-name="Rectangle 54" width="24" height="24" fill="none"/>
                                                                <g id="Group_981" data-name="Group 981">
                                                                    <path id="Path_251" data-name="Path 251" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#4ab862"/>
                                                                </g>
                                                            </svg>
                                                            <span>02 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>01 Room</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="groups_black_24dp_1_" data-name="groups_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <rect id="Rectangle_54" data-name="Rectangle 54" width="24" height="24" fill="none"/>
                                                                <g id="Group_981" data-name="Group 981">
                                                                    <path id="Path_251" data-name="Path 251" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#4ab862"/>
                                                                </g>
                                                            </svg>
                                                            <span>02 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>01 Room</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="groups_black_24dp_1_" data-name="groups_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <rect id="Rectangle_54" data-name="Rectangle 54" width="24" height="24" fill="none"/>
                                                                <g id="Group_981" data-name="Group 981">
                                                                    <path id="Path_251" data-name="Path 251" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#4ab862"/>
                                                                </g>
                                                            </svg>
                                                            <span>02 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- View Bookings Content End -->

                    <!-- Room Booking Status Content Start -->
                    <div class="tab-pane fade" id="v-pills-room-booking" role="tabpanel" aria-labelledby="v-pills-room-booking-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-room-booking">
                                <div class="jci-dashboard-filter">
                                    <form class="row align-items-center">
                                        <div class="col-md-2 mt-0">
                                            <label for="Recipient's username" class="form-label mb-0">Property :</label>
                                        </div>
                                        <div class="col-md-8 mt-0">
                                            <div class="input-group">
                                                <select id="inputState" class="form-select">
                                                    <option selected>Select Property</option>
                                                    <option>Property name 1</option>
                                                    <option>Property name 2</option>
                                                    <option>Property name 3</option>
                                                    <option>Property name 4</option>
                                                </select>
                                                <button class="btn btn-success" type="button" id="button-addon2">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="jci-dashboard-filter">
                                    <form class="row align-items-center">
                                        <div class="col-md-2">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Booking id">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Guest name">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Room no.">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Date Range">
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-success" type="button" >Search</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col col-12 col-md-12 col-lg-12">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <div class="jci-property-details">
                                                    <div class="jci-property-details__inner">
                                                        <label class="jci-property-details-title"><span>Property Type: </span> Swimming Pool View</label>
                                                        <ul class="jci-property-info-list">
                                                            <li class="jci-property-info-item">
                                                                <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                                </svg>
                                                                <span>189 Rooms</span>
                                                            </li>
                                                            <li class="jci-property-info-item">
                                                                <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                                </svg>
                                                                <span>49 Rooms Booked</span>
                                                            </li>
                                                            <li class="jci-property-info-item">
                                                                <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                                </svg>
                                                                <span>49 Rooms available</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="jci-property-details__inner">
                                                        <label class="jci-property-details-title"><span>Property Type:</span> Swimming Pool View</label>
                                                        <ul class="jci-property-info-list">
                                                            <li class="jci-property-info-item">
                                                                <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                                </svg>
                                                                <span>189 Rooms</span>
                                                            </li>
                                                            <li class="jci-property-info-item">
                                                                <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                                </svg>
                                                                <span>49 Rooms Booked</span>
                                                            </li>
                                                            <li class="jci-property-info-item">
                                                                <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                                </svg>
                                                                <span>49 Rooms available</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="jci-property-details__inner">
                                                        <label class="jci-property-details-title"><span>Property Type:</span> Swimming Pool View</label>
                                                        <ul class="jci-property-info-list">
                                                            <li class="jci-property-info-item">
                                                                <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                                </svg>
                                                                <span>189 Rooms</span>
                                                            </li>
                                                            <li class="jci-property-info-item">
                                                                <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                                </svg>
                                                                <span>49 Rooms Booked</span>
                                                            </li>
                                                            <li class="jci-property-info-item">
                                                                <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                                </svg>
                                                                <span>49 Rooms available</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                    <!-- Room Booking Status Content End -->
                    
                    <!-- Upcoming Bookings Content Start -->
                    <div class="tab-pane fade" id="v-pills-upcoming-booking" role="tabpanel"  aria-labelledby="v-pills-upcoming-booking-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-upcoming-booking">
                                <div class="jci-dashboard-filter">
                                    <form class="row align-items-center">
                                        <div class="col-md-2 mt-0">
                                            <label for="Recipient's username" class="form-label mb-0">Property :</label>
                                        </div>
                                        <div class="col-md-8 mt-0">
                                            <div class="input-group">
                                                <select id="inputState" class="form-select">
                                                    <option selected>Select Property</option>
                                                    <option>Property name 1</option>
                                                    <option>Property name 2</option>
                                                    <option>Property name 3</option>
                                                    <option>Property name 4</option>
                                                </select>
                                                <button class="btn btn-success" type="button" id="button-addon2">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="jci-dashboard-filter">
                                    <form class="row align-items-center">
                                        <div class="col-md-3">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Booking id">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Guest name">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Date Range">
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-success" type="button" >Search</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>01 Room</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="groups_black_24dp_1_" data-name="groups_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <rect id="Rectangle_54" data-name="Rectangle 54" width="24" height="24" fill="none"/>
                                                                <g id="Group_981" data-name="Group 981">
                                                                    <path id="Path_251" data-name="Path 251" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#4ab862"/>
                                                                </g>
                                                            </svg>
                                                            <span>02 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>01 Room</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="groups_black_24dp_1_" data-name="groups_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <rect id="Rectangle_54" data-name="Rectangle 54" width="24" height="24" fill="none"/>
                                                                <g id="Group_981" data-name="Group 981">
                                                                    <path id="Path_251" data-name="Path 251" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#4ab862"/>
                                                                </g>
                                                            </svg>
                                                            <span>02 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>01 Room</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="groups_black_24dp_1_" data-name="groups_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <rect id="Rectangle_54" data-name="Rectangle 54" width="24" height="24" fill="none"/>
                                                                <g id="Group_981" data-name="Group 981">
                                                                    <path id="Path_251" data-name="Path 251" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#4ab862"/>
                                                                </g>
                                                            </svg>
                                                            <span>02 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>01 Room</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="groups_black_24dp_1_" data-name="groups_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <rect id="Rectangle_54" data-name="Rectangle 54" width="24" height="24" fill="none"/>
                                                                <g id="Group_981" data-name="Group 981">
                                                                    <path id="Path_251" data-name="Path 251" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#4ab862"/>
                                                                </g>
                                                            </svg>
                                                            <span>02 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>01 Room</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="groups_black_24dp_1_" data-name="groups_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <rect id="Rectangle_54" data-name="Rectangle 54" width="24" height="24" fill="none"/>
                                                                <g id="Group_981" data-name="Group 981">
                                                                    <path id="Path_251" data-name="Path 251" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#4ab862"/>
                                                                </g>
                                                            </svg>
                                                            <span>02 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>01 Room</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="groups_black_24dp_1_" data-name="groups_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <rect id="Rectangle_54" data-name="Rectangle 54" width="24" height="24" fill="none"/>
                                                                <g id="Group_981" data-name="Group 981">
                                                                    <path id="Path_251" data-name="Path 251" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#4ab862"/>
                                                                </g>
                                                            </svg>
                                                            <span>02 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>01 Room</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="groups_black_24dp_1_" data-name="groups_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <rect id="Rectangle_54" data-name="Rectangle 54" width="24" height="24" fill="none"/>
                                                                <g id="Group_981" data-name="Group 981">
                                                                    <path id="Path_251" data-name="Path 251" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#4ab862"/>
                                                                </g>
                                                            </svg>
                                                            <span>02 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="/assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>01 Room</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="groups_black_24dp_1_" data-name="groups_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <rect id="Rectangle_54" data-name="Rectangle 54" width="24" height="24" fill="none"/>
                                                                <g id="Group_981" data-name="Group 981">
                                                                    <path id="Path_251" data-name="Path 251" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#4ab862"/>
                                                                </g>
                                                            </svg>
                                                            <span>02 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Upcoming Bookings Content End -->
                    
                    <!-- Add New Employee Content Start -->
                    <div class="tab-pane fade" id="v-pills-add-employees" role="tabpanel"  aria-labelledby="v-pills-add-employees-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-new-employee h-100">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Add New Employee</h2>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Department">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Email ID</label>
                                            <input type="email" class="form-control" id="inputPassword4" placeholder="Email ID">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Contact Number</label>
                                            <input type="number" class="form-control" id="inputPassword4" placeholder="Enter Contact Number">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Department</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">Select Department</option>
                                                <option>Department 1</option>
                                                <option>Department 2</option>
                                                <option>Department 3</option>
                                                <option>Department 4</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Roles</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">Select Roles</option>
                                                <option>Roles 1</option>
                                                <option>Roles 2</option>
                                                <option>Roles 3</option>
                                                <option>Roles 4</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Add Employee</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add New Employee Content End -->

                    <!-- Add Assign Tasks Content Stat -->
                    <div class="tab-pane fade" id="v-pills-add-assign-tasks" role="tabpanel"  aria-labelledby="v-pills-add-assign-tasks-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-assign-tasks">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Create Tasks</h2>
                                    <form class="row g-3 mb-5">
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Task Title</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Task Title">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Task Description</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Task Description">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Add Task</button>
                                        </div>
                                    </form>
                                    
                                    
                                    <h2 class="jci-dashboard-title">Assign Tasks</h2>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Employee Name</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">Select Employee Name</option>
                                                <option>Select Employee Name 1</option>
                                                <option>Select Employee Name 2</option>
                                                <option>Select Employee Name 3</option>
                                                <option>Select Employee Name 4</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Employee Department</label>
                                            <input type="number" class="form-control" id="inputPassword4" placeholder="Select Employee Department">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Employee Tasks</label>
                                            <select id="inputState" class="form-select">
                                                <option selected=""> Select Task</option>
                                                <option>Task 1</option>
                                                <option>Task 2</option>
                                                <option>Task 3</option>
                                                <option>Task 4</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Assign Task</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Assign Tasks Content End -->
                    
                    <!-- Add Property Content Start -->
                    <div class="tab-pane fade" id="v-pills-add-property" role="tabpanel"  aria-labelledby="v-pills-add-property-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-assign-roles h-100">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Add Property</h2>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Property Name</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">Select Property Name</option>
                                                <option>Property Name 1</option>
                                                <option>Property Name 2</option>
                                                <option>Property Name 3</option>
                                                <option>Property Name 4</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Property Type</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">Select Property Type</option>
                                                <option>Property Type 1</option>
                                                <option>Property Type 2</option>
                                                <option>Property Type 3</option>
                                                <option>Property Type 4</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter address">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Property Image</label>
                                            <div class="jci-choose-file-input">
                                                <input type="file" class="form-control" id="inputPassword4">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Add Property</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- Add Property Content End -->
                    
                    <!-- Add Guest Facilities Content Start -->
                    <div class="tab-pane fade" id="v-pills-guest-facilities" role="tabpanel"  aria-labelledby="v-pills-guest-facilities-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-guest-facilities h-100">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Add Guest Facilities</h2>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Guest Facilities</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Guest Facilities">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Facilities Charge</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Facilities Charge">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Add Facilities</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Guest Facilities Content End -->

                    <!-- Approvals Content Start -->
                    <div class="tab-pane fade" id="v-pills-approvals" role="tabpanel"  aria-labelledby="v-pills-approvals-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-approval h-100">
                                <div class="jci-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                <th scope="col">Request Details</th>
                                                <th scope="col">Status</th>
                                                <th scope="col" class="text-end">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet consectetur</td>
                                                    <td>Pending</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-dark btn-sm">Accept</button>
                                                        <button class="btn btn-danger btn-sm">Reject</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet consectetur</td>
                                                    <td>Pending</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-dark btn-sm">Accept</button>
                                                        <button class="btn btn-danger btn-sm">Reject</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet consectetur</td>
                                                    <td>Pending</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-dark btn-sm">Accept</button>
                                                        <button class="btn btn-danger btn-sm">Reject</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet consectetur</td>
                                                    <td>Pending</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-dark btn-sm">Accept</button>
                                                        <button class="btn btn-danger btn-sm">Reject</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet consectetur</td>
                                                    <td>Pending</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-dark btn-sm">Accept</button>
                                                        <button class="btn btn-danger btn-sm">Reject</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet consectetur</td>
                                                    <td>Pending</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-dark btn-sm">Accept</button>
                                                        <button class="btn btn-danger btn-sm">Reject</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet consectetur</td>
                                                    <td>Pending</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-dark btn-sm">Accept</button>
                                                        <button class="btn btn-danger btn-sm">Reject</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Approvals Content End -->
                    
                    <!-- Add Restaurants Content Start -->
                    <div class="tab-pane fade" id="v-pills-add-restaurants" role="tabpanel"  aria-labelledby="v-pills-add-restaurants-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-add-restaurants h-100">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Add Restaurants</h2>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Restaurant Name</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">Select Property Name</option>
                                                <option>Property Name 1</option>
                                                <option>Property Name 2</option>
                                                <option>Property Name 3</option>
                                                <option>Property Name 4</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Property Name</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Property Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Total Rooms</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Rooms Number">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Total Swimming pool</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Swimming pool Number">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Restaurant Image</label>
                                            <div class="jci-choose-file-input">
                                                <input type="file" class="form-control" id="inputDepartmentName">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Add Restaurants</button>
                                            <button type="submit" class="btn btn-success">Add More Restaurants</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Restaurants Content End -->

                    <!-- Add List of room services Content Start -->
                    <div class="tab-pane fade" id="v-pills-room-services" role="tabpanel"  aria-labelledby="v-pills-room-services-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-room-services h-100">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Add Restaurants</h2>
                                    <form class="row g-3 mb-3">
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Room services</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Room services title">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Room services Charge</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Room services charges">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Add Room services</button>
                                        </div>
                                    </form>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Room Service Name</th>
                                                    <th scope="col">Service Charge</th>
                                                    <th scope="col" class="text-end">Action</th>`
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Service Name</td>
                                                    <td>$10</td>
                                                    <td class="text-end">
                                                        <input type="checkbox" checked data-toggle="toggle" data-on="Enable" data-off="Disable" data-onstyle="success" data-offstyle="danger">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Service Name</td>
                                                    <td>$10</td>
                                                    <td class="text-end">
                                                        <input type="checkbox" checked data-toggle="toggle" data-on="Enable" data-off="Disable" data-onstyle="success" data-offstyle="danger">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Service Name</td>
                                                    <td>$10</td>
                                                    <td class="text-end">
                                                        <input type="checkbox" checked data-toggle="toggle" data-on="Enable" data-off="Disable" data-onstyle="success" data-offstyle="danger">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Service Name</td>
                                                    <td>$10</td>
                                                    <td class="text-end">
                                                        <input type="checkbox" checked data-toggle="toggle" data-on="Enable" data-off="Disable" data-onstyle="success" data-offstyle="danger">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Service Name</td>
                                                    <td>$10</td>
                                                    <td class="text-end">
                                                        <input type="checkbox" checked data-toggle="toggle" data-on="Enable" data-off="Disable" data-onstyle="success" data-offstyle="danger">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Service Name</td>
                                                    <td>$10</td>
                                                    <td class="text-end">
                                                        <input type="checkbox" checked data-toggle="toggle" data-on="Enable" data-off="Disable" data-onstyle="success" data-offstyle="danger">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add List of room services Content End -->

                    <!-- Add travel Agent Content Start -->
                    <div class="tab-pane fade" id="v-pills-add-travel-agent" role="tabpanel"  aria-labelledby="v-pills-add-travel-agent-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-approval h-100">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Add travel Agent</h2>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Agent Name</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter agent name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Travel Agency Name</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter travel agency name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Travels name</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter travels name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Travels Image</label>
                                            <div class="jci-choose-file-input">
                                                <input type="file" class="form-control" id="inputDepartmentName">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Add Travel Agent</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add travel Agent Content End -->

                    <!-- Travel Agent Commission Content Start -->
                    <div class="tab-pane fade" id="v-pills-agent-commission" role="tabpanel"  aria-labelledby="v-pills-agent-commission-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-travel-agent-commission h-100">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Travel Agent Commission</h2>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Agent Name</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">Select Agent Name</option>
                                                <option>Agent Name 1</option>
                                                <option>Agent Name 2</option>
                                                <option>Agent Name 3</option>
                                                <option>Agent Name 4</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Travel Agency Name</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">Select Travel Agency</option>
                                                <option>Agency 1</option>
                                                <option>Agency 2</option>
                                                <option>Agency 3</option>
                                                <option>Agency 4</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Agent Commission</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Agent Commission">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Add Travel Agent</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Travel Agent Commission Content End -->

                    <!-- Add New Employee Content Start -->
                    <div class="tab-pane fade" id="v-pills-discounts-coupon" role="tabpanel"  aria-labelledby="v-pills-discounts-coupon-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-approval h-100">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Property Manager</h2>
                                    <form class="row g-3 mb-5">
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Property Name</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">Select Property Name</option>
                                                <option>Property Name 1</option>
                                                <option>Property Name 2</option>
                                                <option>Property Name 3</option>
                                                <option>Property Name 4</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Add offers</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter offers for property">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Create Offers</button>
                                        </div>
                                    </form>
                                    <h2 class="jci-dashboard-title">Create discounts coupon code</h2>
                                    <form class="row g-3 ">
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Coupon Code</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Coupon Code">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Add discount</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter discount for code">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Create coupon </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add New Employee Content End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Dashboard Section End -->

<?php
    include('include/footer.php');
?>