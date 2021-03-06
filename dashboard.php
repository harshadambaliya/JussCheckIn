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
        
                        <button class="nav-link" id="v-pills-property-reports-tab" data-bs-toggle="pill" data-bs-target="#v-pills-property-reports" type="button" role="tab" aria-controls="v-pills-property-reports" aria-selected="false">
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
                            <span>Property Reports</span>
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
                        
                        <button class="nav-link" id="v-pills-staff-duty-tab" data-bs-toggle="pill" data-bs-target="#v-pills-staff-duty" type="button" role="tab" aria-controls="v-pills-staff-duty" aria-selected="false">
                            <svg id="groups_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <rect id="Rectangle_48" data-name="Rectangle 48" width="24" height="24" fill="none"/>
                                <g id="Group_944" data-name="Group 944">
                                    <path id="Path_232" data-name="Path 232" d="M4,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,4,13Zm1.13,1.1A6.983,6.983,0,0,0,4,14a6.95,6.95,0,0,0-2.78.58A2.011,2.011,0,0,0,0,16.43V18H4.5V16.39A4.5,4.5,0,0,1,5.13,14.1ZM20,13a2,2,0,1,0-2-2A2.006,2.006,0,0,0,20,13Zm4,3.43a2.011,2.011,0,0,0-1.22-1.85,6.8,6.8,0,0,0-3.91-.48,4.5,4.5,0,0,1,.63,2.29V18H24Zm-7.76-2.78a10.443,10.443,0,0,0-4.24-.9,10.611,10.611,0,0,0-4.24.9A2.988,2.988,0,0,0,6,16.39V18H18V16.39A2.988,2.988,0,0,0,16.24,13.65ZM8.07,16c.09-.23.13-.39.91-.69a8.423,8.423,0,0,1,6.04,0c.77.3.81.46.91.69ZM12,8a1,1,0,1,1-1,1,1,1,0,0,1,1-1m0-2a3,3,0,1,0,3,3,3,3,0,0,0-3-3Z" fill="#fff"/>
                                </g>
                            </svg>
                            <span>Staff on Duty</span>
                        </button>
                        
                        <button class="nav-link" id="v-pills-create-department-tab" data-bs-toggle="pill" data-bs-target="#v-pills-create-department" type="button" role="tab" aria-controls="v-pills-create-department" aria-selected="false"> 
                            <svg id="add_box_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_243" data-name="Path 243" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_244" data-name="Path 244" d="M19,3H5A2,2,0,0,0,3,5V19a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm0,16H5V5H19Zm-8-2h2V13h4V11H13V7H11v4H7v2h4Z" fill="#fff"/>
                            </svg>
                           <span>Create Department</span>
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
                        
                        <button class="nav-link" id="v-pills-assign-roles-tab" data-bs-toggle="pill" data-bs-target="#v-pills-assign-roles" type="button" role="tab" aria-controls="v-pills-assign-roles" aria-selected="false">
                            <svg id="miscellaneous_services_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Group_1150" data-name="Group 1150">
                                    <rect id="Rectangle_56" data-name="Rectangle 56" width="24" height="24" fill="none"/>
                                </g>
                                <g id="Group_1152" data-name="Group 1152">
                                    <g id="Group_1151" data-name="Group 1151">
                                    <path id="Path_252" data-name="Path 252" d="M14.17,13.71l1.4-2.42a.353.353,0,0,0-.08-.45L14.01,9.68A5.061,5.061,0,0,0,14.06,9a5.337,5.337,0,0,0-.05-.69l1.48-1.16a.353.353,0,0,0,.08-.45l-1.4-2.42a.354.354,0,0,0-.43-.15L12,4.83a5.142,5.142,0,0,0-1.18-.69l-.26-1.85A.364.364,0,0,0,10.21,2H7.41a.363.363,0,0,0-.35.3L6.8,4.15a5.363,5.363,0,0,0-1.18.69l-1.74-.7a.354.354,0,0,0-.43.15L2.05,6.71a.353.353,0,0,0,.08.45L3.61,8.32A5.061,5.061,0,0,0,3.56,9a5.337,5.337,0,0,0,.05.69L2.13,10.85a.353.353,0,0,0-.08.45l1.4,2.42a.354.354,0,0,0,.43.15l1.74-.7a5.142,5.142,0,0,0,1.18.69l.26,1.85a.364.364,0,0,0,.35.29h2.8a.363.363,0,0,0,.35-.3l.26-1.85A5.363,5.363,0,0,0,12,13.16l1.74.7A.354.354,0,0,0,14.17,13.71ZM8.81,11a2,2,0,1,1,2-2A2.006,2.006,0,0,1,8.81,11Z" fill="#fff"/>
                                    <path id="Path_253" data-name="Path 253" d="M21.92,18.67l-.96-.74a3.128,3.128,0,0,0,.04-.44,2.119,2.119,0,0,0-.04-.44l.95-.74a.229.229,0,0,0,.05-.29l-.9-1.55a.233.233,0,0,0-.28-.1l-1.11.45a3.018,3.018,0,0,0-.76-.44l-.17-1.18a.216.216,0,0,0-.21-.2H16.74a.217.217,0,0,0-.22.19l-.17,1.18a3.585,3.585,0,0,0-.76.44l-1.11-.45a.23.23,0,0,0-.28.1l-.9,1.55a.229.229,0,0,0,.05.29l.95.74a3.242,3.242,0,0,0,0,.88l-.95.74a.229.229,0,0,0-.05.29l.9,1.55a.233.233,0,0,0,.28.1l1.11-.45a3.018,3.018,0,0,0,.76.44l.17,1.18a.225.225,0,0,0,.22.19h1.79a.217.217,0,0,0,.22-.19l.17-1.18a3.285,3.285,0,0,0,.75-.44l1.12.45a.23.23,0,0,0,.28-.1l.9-1.55A.217.217,0,0,0,21.92,18.67Zm-4.29.16a1.35,1.35,0,1,1,1.35-1.35A1.351,1.351,0,0,1,17.63,18.83Z" fill="#fff"/>
                                    </g>
                                </g>
                            </svg>

                            <span>Assign Roles</span>
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
                    <!-- Dashboard Content Start -->
                    <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel"  aria-labelledby="v-pills-dashboard-tab">

                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-dashboard-filter">
                                <form class="row align-items-center">
                                    <div class="col-md-3 col-lg-3 col-xl-2 mt-0">
                                        <label for="Recipient's username" class="form-label mb-0">Property :</label>
                                    </div>
                                    <div class="col-md-9 col-lg-9 col-xl-8 mt-0">
                                        <div class="input-group">
                                            <select id="inputState" class="form-select">
                                                <option selected>Select Property</option>
                                                <option>Hotel Greate</option>
                                                <option>Hotel 7 Star </option>
                                                <option>Hotel Awesome</option>
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
                                            <h3 class="jci-total-count-number">5</h3>
                                            <label class="jci-total-count-label">Total Numbers Of Rooms</label>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-total-count-card">
                                            <h3 class="jci-total-count-number">3</h3>
                                            <label class="jci-total-count-label">Booked Rooms</label>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-total-count-card">
                                            <h3 class="jci-total-count-number">2</h3>
                                            <label class="jci-total-count-label">Available Rooms</label>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-total-count-card">
                                            <h3 class="jci-total-count-number">3000</h3>
                                            <label class="jci-total-count-label">Revenue Earned</label>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-6 col-lg-6">
                                        <div class="jci-total-count-card">
                                            <h3 class="jci-total-count-number">1</h3>
                                            <label class="jci-total-count-label">Upcoming Bookings</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Content End -->

                    <!-- Property Reports Content Start -->
                    <div class="tab-pane fade" id="v-pills-property-reports" role="tabpanel" aria-labelledby="v-pills-property-reports-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-property-report">
                                <div class="jci-dashboard-filter">
                                    <form class="row align-items-center">
                                        <div class="col-md-3 col-lg-3 col-xl-2 mt-0">
                                            <label for="Recipient's username" class="form-label mb-0">Property :</label>
                                        </div>
                                        <div class="col-md-9 col-lg-9 col-xl-8 mt-0">
                                            <div class="input-group">
                                                <select id="inputState" class="form-select">
                                                    <option selected>Select Property</option>
                                                    <option>Hotel Greate</option>
                                                    <option>Hotel 7 Star </option>
                                                    <option>Hotel Awesome</option>
                                                </select>
                                                <button class="btn btn-success" type="button" id="button-addon2">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col col-12 col-md-12 col-lg-12">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <ul class="jci-property-info-list">
                                                    <li class="jci-property-info-item">
                                                        <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                        </svg>
                                                        <span>5 Rooms</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="pool_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_237" data-name="Path 237" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_238" data-name="Path 238" d="M10,8,6.75,11.25a5.472,5.472,0,0,1,.77.39A1.8,1.8,0,0,0,8.67,12a1.8,1.8,0,0,0,1.15-.36A3.891,3.891,0,0,1,12.01,11a3.825,3.825,0,0,1,2.18.64,1.877,1.877,0,0,0,1.15.36,1.816,1.816,0,0,0,1.15-.36c.12-.07.26-.15.41-.23L10.48,5C8.93,3.45,7.5,2.99,5,3V5.5A4.921,4.921,0,0,1,9,7Zm12,8.5h0Zm-16.65-1a1.877,1.877,0,0,1,1.15.36,3.825,3.825,0,0,0,2.18.64,3.825,3.825,0,0,0,2.18-.64,1.8,1.8,0,0,1,1.15-.36,1.877,1.877,0,0,1,1.15.36,4.033,4.033,0,0,0,4.36,0,1.8,1.8,0,0,1,1.15-.36,1.877,1.877,0,0,1,1.15.36,3.855,3.855,0,0,0,2.16.64v-2a1.877,1.877,0,0,1-1.15-.36,4.033,4.033,0,0,0-4.36,0,1.816,1.816,0,0,1-1.15.36,1.877,1.877,0,0,1-1.15-.36,3.825,3.825,0,0,0-2.18-.64,3.825,3.825,0,0,0-2.18.64,1.8,1.8,0,0,1-1.15.36,1.877,1.877,0,0,1-1.15-.36,3.825,3.825,0,0,0-2.18-.64,3.825,3.825,0,0,0-2.18.64A1.8,1.8,0,0,1,2,14.5v2a3.958,3.958,0,0,0,2.2-.64,1.816,1.816,0,0,1,1.15-.36ZM18.67,18a3.825,3.825,0,0,0-2.18.64,1.816,1.816,0,0,1-1.15.36,1.877,1.877,0,0,1-1.15-.36A3.825,3.825,0,0,0,12.01,18a3.891,3.891,0,0,0-2.19.64A1.8,1.8,0,0,1,8.67,19a1.8,1.8,0,0,1-1.15-.36A3.825,3.825,0,0,0,5.34,18a3.891,3.891,0,0,0-2.19.64A1.8,1.8,0,0,1,2,19v2a3.891,3.891,0,0,0,2.19-.64A1.816,1.816,0,0,1,5.34,20a1.816,1.816,0,0,1,1.15.36A3.825,3.825,0,0,0,8.67,21a3.891,3.891,0,0,0,2.19-.64A1.8,1.8,0,0,1,12.01,20a1.877,1.877,0,0,1,1.15.36,4.033,4.033,0,0,0,4.36,0A1.8,1.8,0,0,1,18.67,20a1.877,1.877,0,0,1,1.15.36A3.825,3.825,0,0,0,22,21V19a1.8,1.8,0,0,1-1.15-.36A3.825,3.825,0,0,0,18.67,18Z" fill="#4ab862"/>
                                                            <circle id="Ellipse_40" data-name="Ellipse 40" cx="2.5" cy="2.5" r="2.5" transform="translate(14.232 3)" fill="#4ab862"/>
                                                        </svg>
                                                        <span>02 Swimming pool</span>
                                                    </li>
                                                    <li class="jci-property-info-item">
                                                        <svg id="description_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_239" data-name="Path 239" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_240" data-name="Path 240" d="M8,16h8v2H8Zm0-4h8v2H8ZM14,2H6A2.006,2.006,0,0,0,4,4V20a2,2,0,0,0,1.99,2H18a2.006,2.006,0,0,0,2-2V8Zm4,18H6V4h7V9h5Z" fill="#4ab862"/>
                                                        </svg>

                                                        <span>15 Request</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Property Reports Content End -->

                    <!-- Room Booking Status Content Start -->
                    <div class="tab-pane fade" id="v-pills-room-booking" role="tabpanel" aria-labelledby="v-pills-room-booking-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-room-booking">
                                <div class="jci-dashboard-filter">
                                    <form class="row align-items-center">
                                        <div class="col-md-3 col-lg-3 col-xl-2 mt-0">
                                            <label for="Recipient's username" class="form-label mb-0">Property :</label>
                                        </div>
                                        <div class="col-md-9 col-lg-9 col-xl-8 mt-0">
                                            <div class="input-group">
                                                <select id="inputState" class="form-select">
                                                    <option selected>Select Property</option>
                                                    <option>Hotel Greate</option>
                                                    <option>Hotel 7 Star </option>
                                                    <option>Hotel Awesome</option>
                                                </select>
                                                <button class="btn btn-success" type="button" id="button-addon2">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="jci-dashboard-filter">
                                    <form class="row align-items-center">
                                        <div class="col-md-4 col-lg-4 col-xl-2">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Booking id">
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-xl-2">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Guest name">
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-xl-2">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Room no.">
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-xl-2">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Date Range">
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-xl-2">
                                            <button class="btn btn-success" type="button" >Search</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col col-12 col-md-12 col-lg-12">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Salama Property, Torridge Cir. Syracuse, Connecticut 3564</h3>
                                                <div class="jci-property-details">
                                                    <div class="jci-property-details__inner">
                                                        <label class="jci-property-details-title"><span>Room Type: </span> Swimming Pool View</label>
                                                        <ul class="jci-property-info-list">
                                                            <li class="jci-property-info-item">
                                                                <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                                </svg>
                                                                <span>5 Rooms</span>
                                                            </li>
                                                            <li class="jci-property-info-item">
                                                                <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                                </svg>
                                                                <span>3 Rooms Booked</span>
                                                            </li>
                                                            <li class="jci-property-info-item">
                                                                <svg id="meeting_room_black_24dp_1_" data-name="meeting_room_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_235" data-name="Path 235" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_236" data-name="Path 236" d="M19,19V4H15V3H5V19H3v2H15V6h2V21h4V19Zm-6,0H7V5h6Zm-3-8h2v2H10Z" fill="#4ab862"/>
                                                                </svg>
                                                                <span>2 Rooms available</span>
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
                                        <div class="col-md-3 col-lg-3 col-xl-2 mt-0">
                                            <label for="Recipient's username" class="form-label mb-0">Property :</label>
                                        </div>
                                        <div class="col-md-9 col-lg-9 col-xl-8 mt-0">
                                            <div class="input-group">
                                                <select id="inputState" class="form-select">
                                                    <option selected>Select Property</option>
                                                    <option>Hotel Greate</option>
                                                    <option>Hotel 7 Star </option>
                                                    <option>Hotel Awesome</option>
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
                                    <div class="col col-12 col-md-12 col-lg-12 col-xl-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Room Type:- Swimming pool View</h3>
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
                                    <div class="col col-12 col-md-12 col-lg-12 col-xl-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Room Type:- With Balcony</h3>
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
                                                        <span>03 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-12 col-lg-12 col-xl-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Room Type:- AC Room</h3>
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
                                                        <span>04 People</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-12 col-lg-12 col-xl-6">
                                        <div class="jci-property-report-card">
                                            <div class="jci-property-img">
                                                <img src="assets/images/property-img1.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="jci-property-card-body">
                                                <h3 class="jci-property-name">Room Type:- Non AC Room</h3>
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
                                                        <span>01 People</span>
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
                    
                    <!-- Staff on Duty Content Stat -->
                    <div class="tab-pane fade" id="v-pills-staff-duty" role="tabpanel"  aria-labelledby="v-pills-staff-duty-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-staff-duty">
                                <div class="jci-content-area">
                                    <div class="jci-dashboard-filter">
                                        <form class="row align-items-center">
                                            <div class="col-md-3 col-lg-3 col-xl-2 mt-0">
                                            <label for="Recipient's username" class="form-label mb-0">Property :</label>
                                            </div>
                                            <div class="col-md-9 col-lg-9 col-xl-8 mt-0">
                                                <div class="input-group">
                                                    <select id="inputState" class="form-select">
                                                        <option selected>Select Property</option>
                                                        <option>Hotel Greate</option>
                                                        <option>Hotel 7 Star </option>
                                                        <option>Hotel Awesome</option>
                                                    </select>
                                                    <button class="btn btn-success" type="button" id="button-addon2">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                <th scope="col">Employee Name</th>
                                                <th scope="col">Employee Role</th>
                                                <th scope="col">Employee Department</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Abbott Addison</td>
                                                    <td>Waiter</td>
                                                    <td>Serving</td>
                                                </tr>
                                                <tr>
                                                    <td>Alston Anderson</td>
                                                    <td>housekeeping</td>
                                                    <td>Cleanliness</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashby Barker</td>
                                                    <td>Laundry</td>
                                                    <td>Laundry</td>
                                                </tr>
                                                <tr>
                                                    <td>Baron Barrett</td>
                                                    <td>Chef</td>
                                                    <td>Kitchen</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Staff on Duty Content End -->

                    
                    <!-- Create Department Content Start -->
                    <div class="tab-pane fade" id="v-pills-create-department" role="tabpanel"  aria-labelledby="v-pills-create-department-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-create-department h-100">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Create Department</h2>

                                    <form class="row g-3">
                                        <div class="col-md-12 col-lg-12 col-xl-6">
                                            <label for="inputDepartmentName" class="form-label">Department Name</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Department Name">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xl-6">
                                            <label for="inputPassword4" class="form-label">Department Description</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Department Description">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Create Department</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Create Department Content End -->

                    
                    <!-- Add New Employee Content Start -->
                    <div class="tab-pane fade" id="v-pills-add-employees" role="tabpanel"  aria-labelledby="v-pills-add-employees-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-create-department h-100">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Add New Employee</h2>
                                    <form class="row g-3">
                                        <div class="col-md-12 col-lg-12 col-xl-6">
                                            <label for="inputDepartmentName" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Department">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xl-6">
                                            <label for="inputPassword4" class="form-label">Email ID</label>
                                            <input type="email" class="form-control" id="inputPassword4" placeholder="Email ID">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xl-6">
                                            <label for="inputPassword4" class="form-label">Contact Number</label>
                                            <input type="number" class="form-control" id="inputPassword4" placeholder="Enter Contact Number">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xl-6">
                                            <label for="inputPassword4" class="form-label">Department</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">Select Department</option>
                                                <option>Serving</option>
                                                <option>Cleanliness</option>
                                                <option>Laundry</option>
                                                <option>Kitchen</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xl-6">
                                            <label for="inputPassword4" class="form-label">Roles</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">Select Roles</option>
                                                <option>Waiter</option>
                                                <option>Housekeeping</option>
                                                <option>Laundry</option>
                                                <option>Chef</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xl-6">
                                            <label for="inputPassword4" class="form-label">Property</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">Select Property</option>
                                                <option>Hotel Greate</option>
                                                <option>Hotel 7 Star </option>
                                                <option>Hotel Awesome</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Create Department</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add New Employee Content End -->

                    <div class="tab-pane fade" id="v-pills-assign-roles" role="tabpanel"  aria-labelledby="v-pills-assign-roles-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-assign-roles h-100">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Assign Roles</h2>
                                    <form class="row g-3">
                                        <div class="col-md-12 col-lg-12 col-xl-6">
                                            <label for="inputDepartmentName" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Department">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xl-6">
                                            <label for="inputPassword4" class="form-label">Email ID</label>
                                            <input type="email" class="form-control" id="inputPassword4" placeholder="Email ID">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xl-6">
                                            <label for="inputPassword4" class="form-label">Contact Number</label>
                                            <input type="number" class="form-control" id="inputPassword4" placeholder="Enter Contact Number">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xl-6">
                                            <label for="inputPassword4" class="form-label">Department</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">Select Department</option>
                                                <option>Serving</option>
                                                <option>Cleanliness</option>
                                                <option>Laundry</option>
                                                <option>Kitchen</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xl-6">
                                            <label for="inputPassword4" class="form-label">Roles</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">Select Roles</option>
                                                <option>Waiter</option>
                                                <option>Housekeeping</option>
                                                <option>Laundry</option>
                                                <option>Chef</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xl-6">
                                            <label for="inputPassword4" class="form-label">Property</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">Select Property</option>
                                                <option>Hotel Greate</option>
                                                <option>Hotel 7 Star </option>
                                                <option>Hotel Awesome</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Create Department</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
    
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
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Dashboard Section End -->

<?php
    include('include/footer.php');
?>