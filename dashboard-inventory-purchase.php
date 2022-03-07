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
                        

                        <button class="nav-link active" id="v-pills-list-of-items-tab" data-bs-toggle="pill" data-bs-target="#v-pills-list-of-items" type="button" role="tab" aria-controls="v-pills-list-of-items" aria-selected="false">
                            <svg id="assignment_turned_in_black_24dp_2_" data-name="assignment_turned_in_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_273" data-name="Path 273" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_274" data-name="Path 274" d="M18,9,16.59,7.58,10,14.17,7.41,11.59,6,13l4,4Zm1-6H14.82A2.988,2.988,0,0,0,9.18,3H5a1.752,1.752,0,0,0-.4.04A2.021,2.021,0,0,0,3.16,4.23,1.926,1.926,0,0,0,3,5V19a2.052,2.052,0,0,0,.16.78,2.119,2.119,0,0,0,.43.64,2.008,2.008,0,0,0,1.01.55A2.6,2.6,0,0,0,5,21H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm-7-.25a.75.75,0,1,1-.75.75A.755.755,0,0,1,12,2.75ZM19,19H5V5H19Z" fill="#fff"/>
                            </svg>
                            <span>List of Items</span>
                        </button>
                        
                        <button class="nav-link" id="v-pills-add-items-tab" data-bs-toggle="pill" data-bs-target="#v-pills-add-items" type="button" role="tab" aria-controls="v-pills-add-items" aria-selected="false">
                            <svg id="add_box_black_24dp_1_" data-name="add_box_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_260" data-name="Path 260" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_261" data-name="Path 261" d="M19,3H5A2,2,0,0,0,3,5V19a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm0,16H5V5H19Zm-8-2h2V13h4V11H13V7H11v4H7v2h4Z" fill="#fff"/>
                            </svg>
                            <span>Add Items</span>
                        </button>

                        <button class="nav-link" id="v-pills-suppliers-list-tab" data-bs-toggle="pill" data-bs-target="#v-pills-suppliers-list" type="button" role="tab" aria-controls="v-pills-suppliers-list" aria-selected="false">
                            <svg id="assignment_turned_in_black_24dp_2_" data-name="assignment_turned_in_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_273" data-name="Path 273" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_274" data-name="Path 274" d="M18,9,16.59,7.58,10,14.17,7.41,11.59,6,13l4,4Zm1-6H14.82A2.988,2.988,0,0,0,9.18,3H5a1.752,1.752,0,0,0-.4.04A2.021,2.021,0,0,0,3.16,4.23,1.926,1.926,0,0,0,3,5V19a2.052,2.052,0,0,0,.16.78,2.119,2.119,0,0,0,.43.64,2.008,2.008,0,0,0,1.01.55A2.6,2.6,0,0,0,5,21H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm-7-.25a.75.75,0,1,1-.75.75A.755.755,0,0,1,12,2.75ZM19,19H5V5H19Z" fill="#fff"/>
                            </svg>
                            <span>Suppliers List</span>
                        </button>

                        <button class="nav-link" id="v-pills-add-suppliers-tab" data-bs-toggle="pill" data-bs-target="#v-pills-add-suppliers" type="button" role="tab" aria-controls="v-pills-add-suppliers" aria-selected="false">
                            <svg id="add_box_black_24dp_1_" data-name="add_box_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_260" data-name="Path 260" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_261" data-name="Path 261" d="M19,3H5A2,2,0,0,0,3,5V19a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm0,16H5V5H19Zm-8-2h2V13h4V11H13V7H11v4H7v2h4Z" fill="#fff"/>
                            </svg>
                            <span>Add Suppliers</span>
                        </button>

                        <button class="nav-link" id="v-pills-add-goods-tab" data-bs-toggle="pill" data-bs-target="#v-pills-add-goods" type="button" role="tab" aria-controls="v-pills-add-goods" aria-selected="false">
                            <svg id="add_box_black_24dp_1_" data-name="add_box_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_260" data-name="Path 260" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_261" data-name="Path 261" d="M19,3H5A2,2,0,0,0,3,5V19a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm0,16H5V5H19Zm-8-2h2V13h4V11H13V7H11v4H7v2h4Z" fill="#fff"/>
                            </svg>
                            <span>Add Incoming Goods</span>
                        </button>

                        <button class="nav-link" id="v-pills-details-item-tab" data-bs-toggle="pill" data-bs-target="#v-pills-details-item" type="button" role="tab" aria-controls="v-pills-details-item" aria-selected="true">
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
                            <span>Details Items</span>
                        </button>
        
                        <button class="nav-link" id="v-pills-issue-items-tab" data-bs-toggle="pill" data-bs-target="#v-pills-issue-items" type="button" role="tab" aria-controls="v-pills-issue-items" aria-selected="false">
                            <svg id="assignment_turned_in_black_24dp_2_" data-name="assignment_turned_in_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_273" data-name="Path 273" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_274" data-name="Path 274" d="M18,9,16.59,7.58,10,14.17,7.41,11.59,6,13l4,4Zm1-6H14.82A2.988,2.988,0,0,0,9.18,3H5a1.752,1.752,0,0,0-.4.04A2.021,2.021,0,0,0,3.16,4.23,1.926,1.926,0,0,0,3,5V19a2.052,2.052,0,0,0,.16.78,2.119,2.119,0,0,0,.43.64,2.008,2.008,0,0,0,1.01.55A2.6,2.6,0,0,0,5,21H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm-7-.25a.75.75,0,1,1-.75.75A.755.755,0,0,1,12,2.75ZM19,19H5V5H19Z" fill="#fff"/>
                            </svg>
                            <span>Issued Item Listing</span>
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
                    <!-- Add Items Content Start -->
                    <div class="tab-pane fade " id="v-pills-add-items" role="tabpanel"  aria-labelledby="v-pills-add-items-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-assign-roles h-100">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Add Items</h2>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Items Name</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Item Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Items Description</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Item Description">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Quantity</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Quantity">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Price</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Price">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Item Image</label>
                                            <div class="jci-choose-file-input">
                                                <input type="file" class="form-control" id="inputPassword4">
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-12 pt-3">
                                            <button type="submit" class="btn btn-success">Add Items</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- Add Items Content End -->


                    
                    <!-- List of items Content Start -->
                    <div class="tab-pane fade" id="v-pills-list-of-items" role="tabpanel" aria-labelledby="v-pills-list-of-items-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-pay-salary jci-list-of-items">
                                <h2 class="jci-dashboard-title">List of Items</h2>                                    
                                <div class="row">
                                    <div class="col col-12 col-md-4 col-lg-4">
                                        <div class="jci-property-card card">
                                            <div class="jci-property-card-img">
                                                <img src="http://localhost/jusscheckin/assets/images/mp1.jpg" alt="" class="card-img-top img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <h2 class="jci-list-price mb-2">$230</h2>
                                                <h3 class="jci-property-name mb-3">Vegetables</h3>
                                                <h6 class="jci-list-badage badge mb-3">350 Kg</h6>
                                                <p class="card-body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda facere esse tempore quod? Molestiae at reiciendis </p>
                                                <div class="col-md-12 mt-3">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editItems">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-4 col-lg-4">
                                        <div class="jci-property-card card">
                                            <div class="jci-property-card-img">
                                                <img src="http://localhost/jusscheckin/assets/images/mp1.jpg" alt="" class="card-img-top img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <h2 class="jci-list-price mb-2">$380</h2>
                                                <h3 class="jci-property-name mb-3">Fruites</h3>
                                                <h6 class="jci-list-badage badge mb-3">60 Kg</h6>
                                                <p class="card-body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda facere esse tempore quod? Molestiae at reiciendis </p>
                                                <div class="col-md-12 mt-3">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editItems">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-4 col-lg-4">
                                        <div class="jci-property-card card">
                                            <div class="jci-property-card-img">
                                                <img src="http://localhost/jusscheckin/assets/images/mp1.jpg" alt="" class="card-img-top img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <h2 class="jci-list-price mb-2">$1000</h2>
                                                <h3 class="jci-property-name mb-3">Dry Fruits</h3>
                                                <h6 class="jci-list-badage badge mb-3">50 Kg</h6>
                                                <p class="card-body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda facere esse tempore quod? Molestiae at reiciendis </p>
                                                <div class="col-md-12 mt-3">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editItems">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-4 col-lg-4">
                                        <div class="jci-property-card card">
                                            <div class="jci-property-card-img">
                                                <img src="http://localhost/jusscheckin/assets/images/mp1.jpg" alt="" class="card-img-top img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <h2 class="jci-list-price mb-2">$500</h2>
                                                <h3 class="jci-property-name mb-3">Table Cloths</h3>
                                                <h6 class="jci-list-badage badge mb-3">32 Qty</h6>
                                                <p class="card-body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda facere esse tempore quod? Molestiae at reiciendis </p>
                                                <div class="col-md-12 mt-3">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editItems">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-4 col-lg-4">
                                        <div class="jci-property-card card">
                                            <div class="jci-property-card-img">
                                                <img src="http://localhost/jusscheckin/assets/images/mp1.jpg" alt="" class="card-img-top img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <h2 class="jci-list-price mb-2">$30</h2>
                                                <h3 class="jci-property-name mb-3">Celebration Ribbon</h3>
                                                <h6 class="jci-list-badage badge mb-3">12 Qty</h6>
                                                <p class="card-body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda facere esse tempore quod? Molestiae at reiciendis </p>
                                                <div class="col-md-12 mt-3">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editItems">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-4 col-lg-4">
                                        <div class="jci-property-card card">
                                            <div class="jci-property-card-img">
                                                <img src="http://localhost/jusscheckin/assets/images/mp1.jpg" alt="" class="card-img-top img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <h2 class="jci-list-price mb-2">$650</h2>
                                                <h3 class="jci-property-name mb-3">Hand Grainder</h3>
                                                <h6 class="jci-list-badage badge mb-3">05 Qty</h6>
                                                <p class="card-body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda facere esse tempore quod? Molestiae at reiciendis </p>
                                                <div class="col-md-12 mt-3">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editItems">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- List of items Content End -->

                    <!-- Details Items Content Start -->
                    <div class="tab-pane fade " id="v-pills-details-item" role="tabpanel"  aria-labelledby="v-pills-details-item-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-assign-roles h-100">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Details of Items</h2>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Description</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Description">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Action Items Description</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Action Item Description">
                                        </div>
                                        <div class="col-12 pt-3">
                                            <button type="submit" class="btn btn-danger">Record Damage</button>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Record Expiry</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Expiry Date">
                                        </div>
                                       
                                        
                                        
                                        
                                        <div class="col-12 pt-3">
                                            <button type="submit" class="btn btn-danger">Record Expiry</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- Details Items Content End -->

                    <!-- Add suppliers Content Start -->
                    <div class="tab-pane fade " id="v-pills-add-suppliers" role="tabpanel"  aria-labelledby="v-pills-add-suppliers-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-assign-roles h-100">
                                <div class="jci-content-area">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2 class="jci-dashboard-title">Add Suppliers</h2>
                                        </div>
                                        
                                    </div>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Supplier Name</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Supplier Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Supplier Address</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Supplier Address">
                                        </div>                                        
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Supplier Email</label>
                                            <input type="email" class="form-control" id="inputDepartmentName" placeholder="Enter Supplier Email">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Supplier Contact</label>
                                            <input type="number" class="form-control" id="inputDepartmentName" placeholder="Enter Supplier Contact">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Terms & Condition</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Supplier Terms">
                                        </div>
                                        
                                        
                                        
                                        <div class="col-12 pt-3">
                                            <button type="submit" class="btn btn-success">Add Supplier</button>                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- Add suppliers Content End -->

                    <!-- Add suppliers Content Start -->
                    <div class="tab-pane fade " id="v-pills-add-goods" role="tabpanel"  aria-labelledby="v-pills-add-goods-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-assign-roles h-100">
                                <div class="jci-content-area">
                                    <div class="row">
                                    <h2 class="jci-dashboard-title">Add Incoming Goods to Inventory</h2>
                                    </div>
                                    <form class="row g-3">
                                    <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Select Product</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">Exiting Product</option>
                                                <option>Exiting Product 1</option>
                                                <option>Exiting Product 2</option>
                                                <option>Exiting Product 3</option>
                                                <option>Exiting Product 4</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Quantity</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Enter Quantity">
                                        </div>                                        
                                      
                                        
                                        
                                        
                                        <div class="col-12 pt-3">
                                            <button type="submit" class="btn btn-success">Add Goods</button>
                                           
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- Add suppliers Content End -->


                    <!-- Issued Items listing Content Start -->
                    <div class="tab-pane fade" id="v-pills-issue-items" role="tabpanel" aria-labelledby="v-pills-issue-items-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-content-area">
                                <div class="jci-pay-salary">
                                    <h2 class="jci-dashboard-title">Manage Listing Items issued to Department</h2>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Item Name</th>
                                                <th scope="col">Department Name</th>
                                                <th scope="col">Quantity</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Table Cloths</td>
                                                <td>Admin Staff</td>
                                                <td>32</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Vegetables</td>
                                                <td>Kitchen</td>
                                                <td>350 Kg</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Fruits</td>
                                                <td>Kitchen</td>
                                                <td>60 Kg</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Dry Fruits</td>
                                                <td>Kitchen</td>
                                                <td>50</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Nepkin</td>
                                                <td>Room Cleaning Staff</td>
                                                <td>15</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Bed Sheet Cover</td>
                                                <td>Hotel Staff</td>
                                                <td>12</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Iron</td>
                                                <td>Laudry</td>
                                                <td>03</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Box Files</td>
                                                <td>Front Admin Staff</td>
                                                <td>05</td>
                                                
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Issued Items listing Content End -->


                    <!-- Issued Items listing Content Start -->
                    <div class="tab-pane fade show active" id="v-pills-suppliers-list" role="tabpanel" aria-labelledby="v-pills-suppliers-list-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                        <div class="jci-pay-salary">
                                    <h2 class="jci-dashboard-title">Supplier List</h2>
                                    <div class="row">
                                        <div class="col col-12 col-md-4 col-lg-4">
                                            <div class="jci-property-card card">                                            
                                                <div class="card-body">                                                
                                                    <h3 class="jci-property-name mb-3">John Smith</h3>
                                                    <p class="card-body-text">                                                   
                                                                <span class="icon add mb-2">                                                                
                                                                    Torridge Cir. Syracuse, Connecticut
                                                                </span>
                                                                <span class="icon mail mb-2">                                                                
                                                                    johnsmith@gmail.com
                                                                </span>
                                                                <span class="icon call mb-2">                                                                
                                                                    +91 98980 98980
                                                                </span>
                                                    </p>
                                                    <p class="card-body-text mt-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                                    <div class="col-md-12 mt-3">
                                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editSuppliers">Edit</button>                                                    
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-md-4 col-lg-4">
                                            <div class="jci-property-card card">                                            
                                                <div class="card-body">                                                
                                                    <h3 class="jci-property-name mb-3">Percy Vere</h3>
                                                    <p class="card-body-text">                                                   
                                                                <span class="icon add mb-2">                                                                
                                                                    Torridge Cir. Syracuse, Connecticut
                                                                </span>
                                                                <span class="icon mail mb-2">                                                                
                                                                 percyVere@gmail.com
                                                                </span>
                                                                <span class="icon call mb-2">                                                                
                                                                    +91 98980 98980
                                                                </span>
                                                    </p>
                                                    <p class="card-body-text mt-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                                    <div class="col-md-12 mt-3">
                                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editSuppliers">Edit</button>                                                    
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-md-4 col-lg-4">
                                            <div class="jci-property-card card">                                            
                                                <div class="card-body">                                                
                                                    <h3 class="jci-property-name mb-3">Jack Aranda</h3>
                                                    <p class="card-body-text">                                                   
                                                                <span class="icon add mb-2">                                                                
                                                                    Torridge Cir. Syracuse, Connecticut
                                                                </span>
                                                                <span class="icon mail mb-2">                                                                
                                                                jackAranda@gmail.com
                                                                </span>
                                                                <span class="icon call mb-2">                                                                
                                                                    +91 98980 98980
                                                                </span>
                                                    </p>
                                                    <p class="card-body-text mt-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                                    <div class="col-md-12 mt-3">
                                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editSuppliers">Edit</button>                                                    
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-md-4 col-lg-4">
                                            <div class="jci-property-card card">                                            
                                                <div class="card-body">                                                
                                                    <h3 class="jci-property-name mb-3">Perry Scope</h3>
                                                    <p class="card-body-text">                                                   
                                                                <span class="icon add mb-2">                                                                
                                                                    Torridge Cir. Syracuse, Connecticut
                                                                </span>
                                                                <span class="icon mail mb-2">                                                                
                                                                    perryscope@gmail.com
                                                                </span>
                                                                <span class="icon call mb-2">                                                                
                                                                    +91 98980 98980
                                                                </span>
                                                    </p>
                                                    <p class="card-body-text mt-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                                    <div class="col-md-12 mt-3">
                                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editSuppliers">Edit</button>                                                    
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-md-4 col-lg-4">
                                            <div class="jci-property-card card">                                            
                                                <div class="card-body">                                                
                                                    <h3 class="jci-property-name mb-3">Frank N. Stein</h3>
                                                    <p class="card-body-text">                                                   
                                                                <span class="icon add mb-2">                                                                
                                                                    Torridge Cir. Syracuse, Connecticut
                                                                </span>
                                                                <span class="icon mail mb-2">                                                                
                                                                    johnsmith@gmail.com
                                                                </span>
                                                                <span class="icon call mb-2">                                                                
                                                                    +91 98980 98980
                                                                </span>
                                                    </p>
                                                    <p class="card-body-text mt-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                                    <div class="col-md-12 mt-3">
                                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editSuppliers">Edit</button>                                                    
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-md-4 col-lg-4">
                                            <div class="jci-property-card card">                                            
                                                <div class="card-body">                                                
                                                    <h3 class="jci-property-name mb-3">Roy L. Commishun</h3>
                                                    <p class="card-body-text">                                                   
                                                                <span class="icon add mb-2">                                                                
                                                                    Torridge Cir. Syracuse, Connecticut
                                                                </span>
                                                                <span class="icon mail mb-2">                                                                
                                                                    johnsmith@gmail.com
                                                                </span>
                                                                <span class="icon call mb-2">                                                                
                                                                    +91 98980 98980
                                                                </span>
                                                    </p>
                                                    <p class="card-body-text mt-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                                    <div class="col-md-12 mt-3">
                                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editSuppliers">Edit</button>                                                    
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                        </div>
                    </div>
                    <!-- Issued Items listing Content End -->
                    

                
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Dashboard Section End -->


<!--Edit Items Modal -->
<div class="modal fade" id="editItems" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Items</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
             <form class="row g-3">
                <div class="col-md-12">                                            
                    <label for="inputDepartmentName" class="form-label">Item Name</label>
                    <input type="text" class="form-control" id="inputDepartmentName" placeholder="Salama Property">
                </div>
                <div class="col-md-12">
                    <label for="inputDepartmentName" class="form-label">Item Description</label>
                    <input type="text" class="form-control" id="inputDepartmentName" placeholder="Lorem ipsum dolor">
                </div>
                <div class="col-md-12">
                    <label for="inputDescription" class="form-label">Quantity</label>
                    <input type="text" class="form-control" id="inputDepartmentName" placeholder="12 Qty">
                </div>                
                <div class="col-md-12">
                    <label for="inputDescription" class="form-label">Price</label>
                    <input type="text" class="form-control" id="inputDepartmentName" placeholder="$230">
                </div>    
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Item Image</label>
                    <div class="jci-choose-file-input">
                        <input type="file" class="form-control" id="inputPassword4">
                    </div>
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
<!-- Edit Items Modal end-->


<!--Edit Suppliers Modal -->
<div class="modal fade" id="editSuppliers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Suppliers Edit List</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
             <form class="row g-3">
                <div class="col-md-12">                                            
                    <label for="inputDepartmentName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="inputDepartmentName" placeholder="John Smith">
                </div>
                <div class="col-md-12">
                    <label for="inputDepartmentName" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputDepartmentName" placeholder="Torridge Cir. Syracuse, Connecticut">
                </div>
                <div class="col-md-12">
                    <label for="inputDescription" class="form-label">Email</label>
                    <input type="text" class="form-control" id="inputDepartmentName" placeholder="johnsmith@gmail.com">
                </div>                
                <div class="col-md-12">
                    <label for="inputDescription" class="form-label">Contact</label>
                    <input type="text" class="form-control" id="inputDepartmentName" placeholder="+91 98980 98980">
                </div>    
                
                <div class="col-md-12">
                    <label for="inputDescription" class="form-label">Terms & Condition</label>
                    <input type="text" class="form-control" id="inputDepartmentName" placeholder="Lorem ipsum dolor set amet">
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
<!-- Edit Suppliers Modal end-->


<?php
    include('include/footer.php');
?>