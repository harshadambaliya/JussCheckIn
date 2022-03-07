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
                       
        
                        <button class="nav-link active" id="v-pills-manage-order-tab" data-bs-toggle="pill" data-bs-target="#v-pills-manage-order" type="button" role="tab" aria-controls="v-pills-manage-order" aria-selected="false">
                            <svg id="assignment_turned_in_black_24dp_2_" data-name="assignment_turned_in_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_273" data-name="Path 273" d="M0,0H24V24H0Z" fill="none"/>
                                <path id="Path_274" data-name="Path 274" d="M18,9,16.59,7.58,10,14.17,7.41,11.59,6,13l4,4Zm1-6H14.82A2.988,2.988,0,0,0,9.18,3H5a1.752,1.752,0,0,0-.4.04A2.021,2.021,0,0,0,3.16,4.23,1.926,1.926,0,0,0,3,5V19a2.052,2.052,0,0,0,.16.78,2.119,2.119,0,0,0,.43.64,2.008,2.008,0,0,0,1.01.55A2.6,2.6,0,0,0,5,21H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm-7-.25a.75.75,0,1,1-.75.75A.755.755,0,0,1,12,2.75ZM19,19H5V5H19Z" fill="#fff"/>
                            </svg>
                            <span>Manage Orders</span>
                        </button>



                        <button class="nav-link " id="v-pills-cook-order-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cook-order" type="button" role="tab" aria-controls="v-pills-cook-order" aria-selected="true">
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
                            <span>Cook Order</span>
                        </button>

                        <button class="nav-link " id="v-pills-manage-food-tab" data-bs-toggle="pill" data-bs-target="#v-pills-manage-food" type="button" role="tab" aria-controls="v-pills-manage-food" aria-selected="true">
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
                            <span>Manage Food Item</span>
                        </button>

                        <button class="nav-link " id="v-pills-view-item-tab" data-bs-toggle="pill" data-bs-target="#v-pills-view-item" type="button" role="tab" aria-controls="v-pills-view-item" aria-selected="true">
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
                            <span>View Item</span>
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

                    <!-- Manage order Content Start -->
                    <div class="tab-pane fade" id="v-pills-manage-order" role="tabpanel" aria-labelledby="v-pills-manage-order-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-content-area">
                                <div class="jci-pay-salary">
                                    <h2 class="jci-dashboard-title">Manage Orders</h2>
                                    <table class="table table-hover kitchen-pos-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Room No</th>
                                                <th scope="col" class="text-center">Guest Name</th>
                                                <th scope="col" class="text-center" >Order Id</th>                                                
                                                <th scope="col" class="text-center" >Total Amount</th>                                                
                                                <th scope="col" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>402</td>                                                
                                                <td class="text-center">John Smith</td>                                                
                                                <td class="text-center">ORDER04172</td>
                                                <td class="text-center">$250</td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-success btn-sm" >Completed</a>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>301</td>                                                
                                                <td class="text-center">Percy Vere</td>                                                
                                                <td class="text-center">ORDER06587</td>
                                                <td class="text-center">$160</td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-secondary btn-sm" >Pending</a>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>304</td>                                                
                                                <td class="text-center">Jack Aranda</td>                                                
                                                <td class="text-center">ORDER06589</td>
                                                <td class="text-center">$268</td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-warning btn-sm" >In-Progress</a>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>401</td>                                                
                                                <td class="text-center">Fran G. Pani</td>                                                
                                                <td class="text-center">ORDER04365</td>
                                                <td class="text-center">$250</td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-success btn-sm" >Completed</a>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>304</td>                                                
                                                <td class="text-center">John Quil</td>                                                
                                                <td class="text-center">OWPCKK035</td>
                                                <td class="text-center">$168</td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-secondary btn-sm" >Pending</a>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>105</td>                                                
                                                <td class="text-center">Rose Bush</td>                                                
                                                <td class="text-center">ORDER00324</td>
                                                <td class="text-center">$324</td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-warning btn-sm" >In-Progress</a>                                                    
                                                </td>
                                            </tr>
                                           
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Manage order Content End -->

                    <!-- Cook Order Content Start -->
                    <div class="tab-pane fade active" id="v-pills-cook-order" role="tabpanel" aria-labelledby="v-pills-cook-order-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-kitchen-order">
                                <h2 class="jci-dashboard-title">Cook Order</h2>
                                <div class="row">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="js-plan js-plan-primary">
                                            <div class="js-plan-bx">
                                            <h6>Order Id : <strong>ORDER04172</strong></h6>
                                            <h6 class="mb-4">Date : <strong>04 Jan 2022</strong></h6>                                                
                                                <div class="js-plan-data d-flex justify-content-between">
                                                    <div class="js-plan-data-row">
                                                        <h6>Item Title</h6>
                                                    </div>
                                                    <div class="js-plan-data-row">
                                                        <h6>Qty</h6>
                                                    </div>
                                                </div>
                                                <hr class="m-0 mb-3">
                                                <div class="js-plan-data">
                                                    <div class="js-plan-data-items">
                                                        <div class="js-plan-title">
                                                            <p class="text-muted">Masala Dhosa</p>
                                                        </div>
                                                        <div class="js-plan-qty">
                                                            <p class="text-muted">06</p>
                                                        </div>
                                                    </div>
                                                    <div class="js-plan-data-items">
                                                        <div class="js-plan-title">
                                                            <p class="text-muted">Paneer Handi</p>
                                                        </div>
                                                        <div class="js-plan-qty">
                                                            <p class="text-muted">02</p>
                                                        </div>
                                                    </div>
                                                    <div class="js-plan-data-items">
                                                        <div class="js-plan-title">
                                                            <p class="text-muted">Panner Tava</p>
                                                        </div>
                                                        <div class="js-plan-qty">
                                                            <p class="text-muted">04</p>
                                                        </div>
                                                    </div>
                                                    <div class="js-plan-data-items">
                                                        <div class="js-plan-title">
                                                            <p class="text-muted">Dammalu</p>
                                                        </div>
                                                        <div class="js-plan-qty">
                                                            <p class="text-muted">01</p>
                                                        </div>
                                                    </div>
                                                    <div class="js-plan-data-items">
                                                        <div class="js-plan-title">
                                                            <p class="text-muted">Hydrabadi Biryani</p>
                                                        </div>
                                                        <div class="js-plan-qty">
                                                            <p class="text-muted">06</p>
                                                        </div>
                                                    </div>
                                                    <div class="js-plan-data-btn text-center w-100 mt-4">
                                                        <a href="#" class="btn btn-warning btn-md">In Progress</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="js-plan js-plan-success">
                                            <div class="js-plan-bx">
                                            <h6 >Order Id : <strong>ORDER05542</strong></h6>
                                            <h6 class="mb-4">Date : <strong>03 Jan 2022</strong></h6>                                                
                                                <div class="js-plan-data d-flex justify-content-between">
                                                    <div class="js-plan-data-row">
                                                        <h6>Item Title</h6>
                                                    </div>
                                                    <div class="js-plan-data-row">
                                                        <h6>Qty</h6>
                                                    </div>
                                                </div>
                                                <hr class="m-0 mb-3">
                                                <div class="js-plan-data">
                                                    <div class="js-plan-data-items">
                                                        <div class="js-plan-title">
                                                            <p class="text-muted">Cheese Sandwich</p>
                                                        </div>
                                                        <div class="js-plan-qty">
                                                            <p class="text-muted">04</p>
                                                        </div>
                                                    </div>
                                                    <div class="js-plan-data-items">
                                                        <div class="js-plan-title">
                                                            <p class="text-muted">Cheese Dabeli</p>
                                                        </div>
                                                        <div class="js-plan-qty">
                                                            <p class="text-muted">05</p>
                                                        </div>
                                                    </div>
                                                    <div class="js-plan-data-items">
                                                        <div class="js-plan-title">
                                                            <p class="text-muted">Cheese Burger</p>
                                                        </div>
                                                        <div class="js-plan-qty">
                                                            <p class="text-muted">07</p>
                                                        </div>
                                                    </div>
                                                    <div class="js-plan-data-items">
                                                        <div class="js-plan-title">
                                                            <p class="text-muted">Cheese Hod dog</p>
                                                        </div>
                                                        <div class="js-plan-qty">
                                                            <p class="text-muted">03</p>
                                                        </div>
                                                    </div>
                                                    <div class="js-plan-data-items">
                                                        <div class="js-plan-title">
                                                            <p class="text-muted">Cheese Vada Pau</p>
                                                        </div>
                                                        <div class="js-plan-qty">
                                                            <p class="text-muted">06</p>
                                                        </div>
                                                    </div>
                                                    <div class="js-plan-data-btn text-center w-100 mt-4">
                                                        <a href="#" class="btn btn-success btn-md">Completed</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="js-plan js-plan-primary">
                                            <div class="js-plan-bx">
                                            <h6>Order Id : <strong>ORDER0321</strong></h6>
                                            <h6 class="mb-4">Date : <strong>01 Jan 2022</strong></h6>                                                
                                                <div class="js-plan-data d-flex justify-content-between">
                                                    <div class="js-plan-data-row">
                                                        <h6>Item Title</h6>
                                                    </div>
                                                    <div class="js-plan-data-row">
                                                        <h6>Qty</h6>
                                                    </div>
                                                </div>
                                                <hr class="m-0 mb-3">
                                                <div class="js-plan-data">
                                                    <div class="js-plan-data-items">
                                                        <div class="js-plan-title">
                                                            <p class="text-muted">Pizza</p>
                                                        </div>
                                                        <div class="js-plan-qty">
                                                            <p class="text-muted">02</p>
                                                        </div>
                                                    </div>
                                                    <div class="js-plan-data-items">
                                                        <div class="js-plan-title">
                                                            <p class="text-muted">Margerian Pizza</p>
                                                        </div>
                                                        <div class="js-plan-qty">
                                                            <p class="text-muted">04</p>
                                                        </div>
                                                    </div>
                                                    <div class="js-plan-data-items">
                                                        <div class="js-plan-title">
                                                            <p class="text-muted">Cheese Double Dacker Pizza</p>
                                                        </div>
                                                        <div class="js-plan-qty">
                                                            <p class="text-muted">02</p>
                                                        </div>
                                                    </div>
                                                    <div class="js-plan-data-items">
                                                        <div class="js-plan-title">
                                                            <p class="text-muted">Dry Manturian</p>
                                                        </div>
                                                        <div class="js-plan-qty">
                                                            <p class="text-muted">08</p>
                                                        </div>
                                                    </div>
                                                    <div class="js-plan-data-items">
                                                        <div class="js-plan-title">
                                                            <p class="text-muted">Vegetable Cheese Pizza</p>
                                                        </div>
                                                        <div class="js-plan-qty">
                                                            <p class="text-muted">06</p>
                                                        </div>
                                                    </div>
                                                    <div class="js-plan-data-btn text-center w-100 mt-4">
                                                        <a href="#" class="btn btn-warning btn-md">In Progress</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                    
                            </div>
                        </div>
                    </div>
                    <!-- Cook Order Content End -->

                      <!-- Add Property Content Start -->
                      <div class="tab-pane fade " id="v-pills-manage-food" role="tabpanel"  aria-labelledby="v-pills-manage-food-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-assign-roles h-100">
                                <div class="jci-content-area">
                                    <h2 class="jci-dashboard-title">Add Items</h2>
                                    <form class="row g-3">                                       
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Enter Item Name</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Item Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Enter Item Price</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Item Price">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputDepartmentName" class="form-label">Item Description</label>
                                            <input type="text" class="form-control" id="inputDepartmentName" placeholder="Description">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Upload Image</label>
                                            <div class="jci-choose-file-input">
                                                <input type="file" class="form-control" id="inputPassword4">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Add Items</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- Add Property Content End -->

                     <!-- view item Content Start -->
                     <div class="tab-pane fade show" id="v-pills-view-item" role="tabpanel"  aria-labelledby="v-pills-view-item-tab">
                        <div class="jci-dashboard-content-area" data-scrollbar>
                            <div class="jci-upcoming-booking">                                
                                <h2 class="jci-dashboard-title">View Item</h2>                                
                                <div class="row">
                                    <div class="col col-12 col-md-4 col-lg-4">
                                        <div class="jci-property-card card">                                            
                                            <div class="card-body">
                                            <div class="jci-property-card-img mb-3">
                                                <img src="http://localhost/jusscheckin/assets/images/burger.jpg" alt="" class="card-img-top img-fluid">
                                            </div>
                                                <h6 class="price"><strong>$54</strong></h6>
                                                <h3 class="jci-property-name">Aloo Tikky Cheese Burger</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cupiditate omnis!</p>
                                                <div class="col-md-12 mt-3">                                                    
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editproperty">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-4 col-lg-4">
                                        <div class="jci-property-card card">                                            
                                            <div class="card-body">
                                            <div class="jci-property-card-img mb-3">
                                                <img src="http://localhost/jusscheckin/assets/images/burger.jpg" alt="" class="card-img-top img-fluid">
                                            </div>
                                                <h6 class="price"><strong>$54</strong></h6>
                                                <h3 class="jci-property-name">Aloo Tikky Cheese Burger</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cupiditate omnis!</p>
                                                <div class="col-md-12 mt-3">                                                    
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editproperty">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-4 col-lg-4">
                                        <div class="jci-property-card card">                                            
                                            <div class="card-body">
                                            <div class="jci-property-card-img mb-3">
                                                <img src="http://localhost/jusscheckin/assets/images/burger.jpg" alt="" class="card-img-top img-fluid">
                                            </div>
                                                <h6 class="price"><strong>$54</strong></h6>
                                                <h3 class="jci-property-name">Aloo Tikky Cheese Burger</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cupiditate omnis!</p>
                                                <div class="col-md-12 mt-3">                                                    
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editproperty">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-4 col-lg-4">
                                        <div class="jci-property-card card">                                            
                                            <div class="card-body">
                                            <div class="jci-property-card-img mb-3">
                                                <img src="http://localhost/jusscheckin/assets/images/burger.jpg" alt="" class="card-img-top img-fluid">
                                            </div>
                                                <h6 class="price"><strong>$54</strong></h6>
                                                <h3 class="jci-property-name">Aloo Tikky Cheese Burger</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cupiditate omnis!</p>
                                                <div class="col-md-12 mt-3">                                                    
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editproperty">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-4 col-lg-4">
                                        <div class="jci-property-card card">                                            
                                            <div class="card-body">
                                            <div class="jci-property-card-img mb-3">
                                                <img src="http://localhost/jusscheckin/assets/images/burger.jpg" alt="" class="card-img-top img-fluid">
                                            </div>
                                                <h6 class="price"><strong>$54</strong></h6>
                                                <h3 class="jci-property-name">Aloo Tikky Cheese Burger</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cupiditate omnis!</p>
                                                <div class="col-md-12 mt-3">                                                    
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editproperty">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-4 col-lg-4">
                                        <div class="jci-property-card card">                                            
                                            <div class="card-body">
                                            <div class="jci-property-card-img mb-3">
                                                <img src="http://localhost/jusscheckin/assets/images/burger.jpg" alt="" class="card-img-top img-fluid">
                                            </div>
                                                <h6 class="price"><strong>$54</strong></h6>
                                                <h3 class="jci-property-name">Aloo Tikky Cheese Burger</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cupiditate omnis!</p>
                                                <div class="col-md-12 mt-3">                                                    
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editproperty">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>                        
                    </div>
                    <!-- view item Content End -->
                
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

<!--Edit property Modal -->
<div class="modal fade" id="editproperty" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Property</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form class="row g-3">                
                <div class="col-md-12">
                    <label for="inputDepartmentName" class="form-label">Item Name</label>
                    <input type="text" class="form-control" id="inputDepartmentName" placeholder="Aloo Tikky Burger">
                </div>
                <div class="col-md-12">
                    <label for="inputDepartmentName" class="form-label">Item Price</label>
                    <input type="text" class="form-control" id="inputDepartmentName" placeholder="$54">
                </div>
                <div class="col-md-12">
                    <label for="inputDepartmentName" class="form-label">Description</label>
                    <input type="text" class="form-control" id="inputDepartmentName" placeholder="Lorem Ipsum">
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
<!-- Modal property end-->

<?php
    include('include/footer.php');
?>