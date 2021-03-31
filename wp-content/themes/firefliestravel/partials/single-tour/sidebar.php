<?php
$contact = get_field('contact', 'option');
?>
<aside class="col-lg-4" id="sidebar">
    <div class="box_detail bg-transparent border-0 p-0">
        <a href="https://wa.me/<?= $contact['whatsapp_number'] ?>"
           class="btn btn-phone d-block text-left icon-btn">
            <span><i class=" icon_phone"></i></span> <?= $contact['whatsapp_number'] ?></a>
        <a href="viber://chat?number=%2B<?= $contact['viber_number'] ?>"
           class="btn btn-viber d-block text-left icon-btn"><span>
									<i class="fab fa-viber"></i>
								</span> <?= $contact['viber_number'] ?></a>

    </div>
    <div class="box_detail d-none ">
        <div class="box_detail-header">
            <h5>Booking Contact</h5>
        </div>

        <ul>
            <li>Hunting Line: 01-2365442</li>
            <li>Toll Free: 01-2365442</li>
            <li>Email : info@Firefliestravel.com</li>
        </ul>
    </div>
    <div class="box_detail ">
        <div class="box_detail-header">
            <h5>Request A Callback</h5>
        </div>
        <div class="box_detail-body">
            <?= do_shortcode('[contact-form-7 id="' . get_field('callback_request', 'option') . '"]') ?>
        </div>
    </div>

    <div class="box_detail ">
        <div class="box_detail-header">
            <h5>Get Email This Itinerary</h5>
        </div>
        <div class="box_detail-body">
            <?= do_shortcode('[contact-form-7 id="' . get_field('itinerary_mail', 'option') . '"]') ?>
        </div>
    </div>
    <div class="box_detail booking">
        <div class="box_detail-header">
            <h5>Booking Form</h5>
        </div>
        <div class="box_detail-body">
            <form action="#" class="">
                <div class="form-group">
                    <div class="form-group input-dates">
                        <input class="form-control" type="text" name="dates" placeholder="When..">
                        <i class="icon_calendar"></i>
                    </div>
                    <div class="panel-dropdown">
                        <a href="#">Guests <span class="qtyTotal">1</span></a>
                        <div class="panel-dropdown-content right">
                            <div class="qtyButtons">
                                <label>Adults</label>
                                <div class="qtyDec"></div>
                                <input type="text" name="qtyInput" value="1">
                                <div class="qtyInc"></div>
                            </div>
                            <div class="qtyButtons">
                                <label>Childrens</label>
                                <div class="qtyDec"></div>
                                <input type="text" name="qtyInput" value="0">
                                <div class="qtyInc"></div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn_1 inline-btn w-100" value="Book Now">
            </form>
        </div>
    </div>
    <div class="box_detail booking d-none">
        <div class="price box_detail-header">
            <h4 class="">NPR 52,200 /-</h4>
        </div>
        <div class="form-group input-dates">
            <input class="form-control" type="text" name="dates" placeholder="When..">
            <i class="icon_calendar"></i>
        </div>
        <!-- <div class="panel-dropdown">
            <a href="#">Guests <span class="qtyTotal">1</span></a>
            <div class="panel-dropdown-content right">
                <div class="qtyButtons">
                    <label>Adults</label>
                    <input type="text" name="qtyInput" value="1">
                </div>
                <div class="qtyButtons">
                    <label>Childrens</label>
                    <input type="text" name="qtyInput" value="0">
                </div>
            </div>
        </div> -->
        <a href="cart-1.html" class="btn_1 full-width purchase">Book Now</a>
        <div class="text-center"><small>No money charged in this step</small></div>
        <hr>
        <div class="box_detail-footer d-flex align-items-center">
            <h6>Inquiry : </h6>
            <ul class="d-flex inquiry-icon inquiry-icon--square ml-2">
                <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i> </a></li>
                <li><a href="#" class="viber"> <i class="fab fa-viber"></i> </a></li>
                <li><a href="#" class="whatsapp"> <i class="fab fa-whatsapp"></i> </a></li>
            </ul>
        </div>
    </div>
</aside>
