<?php include 'inc/header.php';?>

<div class="inner-ban">
    <img src="images/inner-ban.jpg" alt="">
    <div class="ban text">
        <h2>Cart</h2>
        <ul>
            <li><a href="#">Home <i class="fas fa-chevron-right"></i></a></li>
            <li>Cart</li>
        </ul>
    </div>
</div>

<section class="cart_area">
    <div class="container">
        <div class="row">
            <form id="msform">
                <!-- progressbar -->
                <ul id="progressbar">
                <li class="active"><span>Shopping Cart</span></li>
                <li><span>Checkout</span></li>
                <li><span>Thank You</span></li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <div class="row">
                        <div class="col-md-8 cart_table">
                            <table>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="cart_pic_area">
                                            <div class="cart_pic_con">
                                                <img src="images/cart_pic.png">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                            <h3>Canvas Photo Printing</h3>
                                        </div>
                                    </td>
                                    <td><h3>$26.99</h3></td>
                                    <td>
                                        <div class="quantity-block">
                                          <a class="quantity-arrow-minus"> - </a>
                                          <input class="quantity-num" type="number" value="1" />
                                          <a class="quantity-arrow-plus"> + </a>
                                        </div>
                                    </td>
                                    <td><h3><span>$26.99</span></h3></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="cart_pic_area">
                                            <div class="cart_pic_con">
                                                <img src="images/cart_pic.png">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                            <h3>Canvas Photo Printing</h3>
                                        </div>
                                    </td>
                                    <td><h3>$26.99</h3></td>
                                    <td>
                                        <div class="quantity-block">
                                          <a class="quantity-arrow-minus"> - </a>
                                          <input class="quantity-num" type="number" value="1" />
                                          <a class="quantity-arrow-plus"> + </a>
                                        </div>
                                    </td>
                                    <td><h3><span>$26.99</span></h3></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="cart_pic_area">
                                            <div class="cart_pic_con">
                                                <img src="images/cart_pic.png">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                            <h3>Canvas Photo Printing</h3>
                                        </div>
                                    </td>
                                    <td><h3>$26.99</h3></td>
                                    <td>
                                        <div class="quantity-block">
                                          <a class="quantity-arrow-minus"> - </a>
                                          <input class="quantity-num" type="number" value="1" />
                                          <a class="quantity-arrow-plus"> + </a>
                                        </div>
                                    </td>
                                    <td><h3><span>$26.99</span></h3></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <div class="cart_right_bar">
                                <h3>Cart  Totals</h3>
                                <table>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td class="text-right"><strong>$53.98</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td class="text-right"><strong>Flat Rate: $10.00</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <td class="text-right"><strong>$0.00</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total</strong></td>
                                        <td class="text-right"><strong>$63.98</strong></td>
                                    </tr>
                                </table>
                                <a href="#">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                    <input type="button" name="next" class="next action-button" value="Countinue Shopping" />
                </fieldset>
                <fieldset>
                <div class="row">
                        <div class="col-md-8 billing_add">
                            <h2>Billing Address</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="" placeholder="Company name">
                                    </div>
                                    <div class="col-md-6">
                                        <select>
                                            <option>Country / Region</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="" placeholder="Street address *">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="" placeholder="Street address *">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="" placeholder="Town / City *">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="" placeholder="Postcode / ZIP *">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="" placeholder="Phone *">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email" name="" placeholder="Email address *">
                                    </div>
                                    <div class="col-md-12 check_area">
                                         <label for="option-1"><input type="checkbox" name="option-1" id="option-1">Same as Billing  address</label>
                                    </div>

                                    
                                    <div class="col-md-12" id="actions" hidden>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <input type="text" name="" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="" placeholder="Last Name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="" placeholder="Company name">
                                        </div>
                                        <div class="col-md-6">
                                            <select>
                                                <option>Country / Region</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="" placeholder="Street address *">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="" placeholder="Street address *">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="" placeholder="Town / City *">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="" placeholder="Postcode / ZIP *">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="" placeholder="Phone *">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="email" name="" placeholder="Email address *">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Want to add QR Code and Name on the Paint</h4>
                                    </div>
                                      <div class="col-md-12">
                                        <input type="text" name="" placeholder="Enter Your Name For Print">
                                      </div>
                                      <div class="col-md-12">
                                        <input type="text" name="" placeholder="Link to side to be placed on QR Code">
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Pay securely using your Debit/credit card.</h4>
                                        <h5>$63.98</h5>
                                    </div>
                                      <div class="col-md-12">
                                        <label class="big">Card NUmber*</label>
                                        <div class="card_box">
                                            <input type="text" name="" placeholder="1256 2582 3698 1478">
                                            <img src="images/master_icon.png">
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <label class="big">Expiry Date*</label>
                                        <input type="date" name="" placeholder="10-03-24">
                                        </div>
                                        <div class="col-md-6">
                                        <label class="big">Card Code*(CVC)</label>
                                        <input type="text" name="" placeholder="111">
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cart_right_bar">
                                <h3>Cart  Totals</h3>
                                <table>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td class="text-right"><strong>$53.98</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td class="text-right"><strong>Flat Rate: $10.00</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <td class="text-right"><strong>$0.00</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total</strong></td>
                                        <td class="text-right"><strong>$63.98</strong></td>
                                    </tr>
                                </table>
                                <a href="#">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Place order" />
                </fieldset>
                <fieldset>
                <div class="row">
                    <div class="col-md-12">
                        <div class="thank_top_info">
                            <img src="images/thank_tick.png">
                            <h3>Thank you, Your order has been placed.</h3>
                            <ul>
                                <li>
                                    <h4>Order number</h4>
                                    <h5>#1234567890987654321</h5>
                                </li>
                                <li>
                                    <h4>Status</h4>
                                    <h5>Processing</h5>
                                </li>
                                <li>
                                    <h4>Date</h4>
                                    <h5>November 20, 2020</h5>
                                </li>
                                <li>
                                    <h4>Total</h4>
                                    <h5>$63.98</h5>
                                </li>
                                <li>
                                    <h4>Payment method</h4>
                                    <h5>Debit Cart</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 thanks_area">
                            <div class="cart_right_bar">
                                <h3>Cart  Totals</h3>
                                <table>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td class="text-right"><strong>$53.98</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td class="text-right"><strong>Flat Rate: $10.00</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <td class="text-right"><strong>$0.00</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="last"><strong>Total</strong></td>
                                        <td class="text-right last"><strong>$63.98</strong></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thankyou_right">
                                <h2>BILLING ADDRESS</h2>
                                <h4>John Doe</h4>
                                <h4>Donald Company</h4>
                                <h4>Steven street</h4>
                                <h4>El Carjon, CA 92020</h4>
                                <h4>123456789</h4>
                            </div>
                        </div>
                </div>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="submit" name="submit" class="submit action-button" value="Submit" />
                </fieldset>
                </form>
        </div>
    </div>
</section>

<div class="clearfix"></div>
<?php include 'inc/footer.php';?>
