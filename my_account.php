<?php include 'inc/header.php';?>

<div class="inner-ban">
    <img src="{{ asset('frontend/images/inner-ban.jpg') }}" alt="">
    <div class="ban text">
        <h2>My Accounts</h2>
        <ul>
            <li><a href="{{ route('satirtha.home') }}">Home <i class="fas fa-chevron-right"></i></a></li>
            <li>My Accounts</li>
        </ul>
    </div>
</div>

<section class="account">
    <div class="container">
        <div class="row">
              <div class="col-lg-3 col-md-4">
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#account">My Account</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#order">My Orders</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#address">Manage address</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#edit">Edit Account</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#change">Change Password</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#">Log Out</a>
                    </li>
                  </ul>
              </div>
              <div class="col-lg-9 col-md-8">
                  <div class="tab-content">
                    <div id="account" class="tab-pane active">
                      <div class="row account_info">
                          <div class="col-lg-4 col-md-3">
                              <div class="acc_info">
                                <h5>Name</h5>
                                <h3>Anthony E Simpson</h3>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-3">
                            <div class="acc_info">
                              <h5>Email</h5>
                              <h3>John@gmail.com</h3>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-3">
                            <div class="acc_info">
                              <h5>Contact Number</h5>
                              <h3>+91 9876543210</h3>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-3">
                            <div class="acc_info">
                              <h5>Birthday</h5>
                              <h3>8/10/1999</h3>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-3">
                            <div class="acc_info">
                              <h5>Street</h5>
                              <h3>4767  Burnside Court</h3>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-3">
                            <div class="acc_info">
                              <h5>City</h5>
                              <h3>Phoenix</h3>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-3">
                            <div class="acc_info">
                              <h5>State</h5>
                              <h3>AZ</h3>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-3">
                            <div class="acc_info">
                              <h5>State Full</h5>
                              <h3>Arizona</h3>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <div class="acc_info">
                              <h5>Zip Code</h5>
                              <h3>85004</h3>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div id="order" class="order_table tab-pane fade">
                      <table>
                          <tr>
                              <th>Order ID</th>
                              <th>Date</th>
                              <th>Status</th>
                              <th>Total</th>
                              <th>Actions</th>
                          </tr>
                          <?php for ($i=0; $i <2 ; $i++) { ?>
                          <tr>
                              <td>1</td>
                              <td>May 10, 2018</td>
                              <td>Processing</td>
                              <td>$25.00 for 1 item</td>
                              <td>
                                <button onclick="myFunction(<?= $i; ?>)">Details <i class="fas fa-chevron-down"></i></button></td>
                          </tr>
                          <tr>
                                <td colspan="5" style="padding: 0; padding: 0;     border-top: solid 1px transparent !important;     border-bottom: solid 1px transparent !important;">
                                    <table id="myDIV<?= $i; ?>" class="myDIV-class">
                                      <tr>
                                          <td><img src="images/acy-img.png"></td>
                                          <td>Acrylic block</td>
                                          <td>1</td>
                                          <td>$25.00</td>
                                          <td><a href="#">Track Your Order</a></td>
                                      </tr>
                                      <tr>
                                          <td><img src="images/acy-img.png"></td>
                                          <td>Acrylic block</td>
                                          <td>1</td>
                                          <td>$25.00</td>
                                          <td><a href="#">Track Your Order</a></td>
                                      </tr>
                                  </table>    
                                </td>
                            </tr>
                        <?php } ?>
                          <tr>
                              <td>2</td>
                              <td>May 10, 2018</td>
                              <td>Processing</td>
                              <td>$25.00 for 1 item</td>
                              <td>
                                <button onclick="myFunction(1)">Details <i class="fas fa-chevron-down"></i></button></td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>May 10, 2018</td>
                              <td>Processing</td>
                              <td>$25.00 for 1 item</td>
                              <td>
                                <button onclick="myFunction(1)">Details <i class="fas fa-chevron-down"></i></button></td>
                          </tr>
                          <tr>
                              <td>4</td>
                              <td>May 10, 2018</td>
                              <td>Processing</td>
                              <td>$25.00 for 1 item</td>
                              <td>
                                <button onclick="myFunction(1)">Details <i class="fas fa-chevron-down"></i></button></td>
                          </tr>
                          <tr>
                              <td>1</td>
                              <td>May 10, 2018</td>
                              <td>Processing</td>
                              <td>$25.00 for 1 item</td>
                              <td>
                                <button onclick="myFunction(1)">Details <i class="fas fa-chevron-down"></i></button></td>
                          </tr>
                      </table>
                    </div>
                    <div id="address" class="man_address tab-pane fade">
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                      <div class="row">
                          <div class="col-lg-4 col-md-6">
                              <div class="man_info">
                                  <h3>Jasmine</h3>
                                  <ul>
                                      <li>4301 Peacock Springs Trl Orlando FL</li>
                                      <li>P: (123) 456-7890</li>
                                      <li><a href="#" data-toggle="modal" data-target="#myModal4">Edit</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                              <div class="man_info">
                                  <h3>Bernadette</h3>
                                  <ul>
                                      <li>4301 Peacock Springs Trl Orlando FL</li>
                                      <li>P: (123) 456-7890</li>
                                      <li><a href="#" data-toggle="modal" data-target="#myModal4">Edit</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                              <div class="man_info">
                                  <h3>Alexandra</h3>
                                  <ul>
                                      <li>4301 Peacock Springs Trl Orlando FL</li>
                                      <li>P: (123) 456-7890</li>
                                      <li><a href="#" data-toggle="modal" data-target="#myModal4">Edit</a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div id="edit" class="edit_table tab-pane fade">
                      <form>
                          <div class="row">
                              <div class="col-lg-4 col-md-4">
                                  <input type="text" name="" placeholder="Anthony E Simpson">
                              </div>
                              <div class="col-lg-4 col-md-4">
                                  <input type="email" name="" placeholder="John@gmail.com">
                              </div>
                              <div class="col-lg-4 col-md-4">
                                  <input type="tel" name="" placeholder="+91 9876543210">
                              </div>
                              <div class="col-lg-4 col-md-4">
                                  <input type="date" name="">
                              </div>
                              <div class="col-lg-4 col-md-4">
                                  <input type="text" name="" placeholder="4767  Burnside Court">
                              </div>
                              <div class="col-lg-4 col-md-4">
                                  <input type="text" name="" placeholder="Phoenix">
                              </div>
                              <div class="col-lg-4 col-md-4">
                                  <input type="text" name="" placeholder="AZ">
                              </div>
                              <div class="col-lg-4 col-md-4">
                                  <input type="text" name="" placeholder="Arizona">
                              </div>
                              <div class="col-lg-4 col-md-4">
                                  <input type="text" name="" placeholder="85004">
                              </div>
                              <div class="col-lg-12">
                                  <input type="submit" name="" value="Save">
                              </div>
                          </div>
                      </form>
                    </div>
                    <div id="change" class="edit_table tab-pane fade">
                      <form>
                          <div class="row">
                              <div class="col-lg-12">
                                  <input type="text" name="" placeholder="Old Password">
                              </div>
                              <div class="col-lg-12">
                                  <input type="text" name="" placeholder="New Password">
                              </div>
                              <div class="col-lg-12">
                                  <input type="text" name="" placeholder="Confirm Password">
                              </div>
                              <div class="col-lg-12">
                                  <input type="submit" name="" value="Save">
                              </div>
                          </div>
                      </form>
                    </div>
                  </div>
              </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>
<?php include 'inc/footer.php';?>