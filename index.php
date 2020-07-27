<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Microrent</title>
    <?php include "components/head.html"; ?>
    
</head>

<body>
    <?php include "components/nav.php"; ?>         

    <section id="banner">
    </section>

    <section id="product-carousel">
        <a id="back" class="hide-on-small-only"><i class="material-icons">chevron_left</i></a>
        <a id="forward" class="hide-on-small-only"><i class="material-icons">chevron_right</i></a>
        <div class="carousel">
            <div class="carousel-item">
                <div class="card">
                    <div class="card-content p-4 center-align">
                        <img src="images/laptop.png">
                        <h4>Product Title</h4>
                        <button class="btn secondary primary-hover">Buy</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="card-content p-4 center-align">
                        <img src="images/computers.png">
                        <h4>Product Title</h4>
                        <button class="btn secondary primary-hover">Buy</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="card-content p-4 center-align">
                        <img src="images/apple.png">
                        <h4>Product Title</h4>
                        <button class="btn secondary primary-hover">Buy</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="card-content p-4 center-align">
                        <img src="images/ipad.png">
                        <h4>Product Title</h4>
                        <button class="btn secondary primary-hover">Buy</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="card-content p-4 center-align">
                        <img src="images/printers.png">
                        <h4>Product Title</h4>
                        <button class="btn secondary primary-hover">Buy</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container">
        <div class="row">
            <div class="col m6">
                <h2>About Us</h2>
                <div class="brief-about">
                    <p>
                        The company's hardware division has well trained young technocrat entrepreneurs who provide prompt services to our prestigious clients. 90% of our rentals are executed the same day and half of those are done within three business hours. Our technical
                        support staffs is provided with mobile phones and conveyance and is available for immediate technical support to ensure prompt and quality service at client's site. For installations of more than 50 computers we provide "Resident
                        Service Engineer". When you call "MICRORENT INDIA" you will always hear a friendly, courteous individual who is responsive and respectful. Our prompt and quality service by qualified engineers have bagged us a large customer base
                        which include Government and Public sector, Multinational Companies, Mega Blue Chip Companies, Foreign as well as leading Indian Banks, leading Software Houses, International Airlines etc. Our rental services are Daily/ Weekly/
                        Monthly/ Yearly at most competitive rates.
                    </p>
                </div>

                <button class="btn secondary primary-hover">Read more</button>
                <br />
                <br />
            </div>
            <div class="col m6">
                <img src="images/home.jpg" class="full p-4" /> </div>
        </div>
    </section>

    <section id="contact" class="container">
        <div class="row">
            <div class="col m4 full">
                <h4 style="margin-bottom: .6em;">Contact Us</h4>
                <form class="validate p-4 card">

                    <div class="input-field"><input type="text" name="name" id="c_name" required="" value="">
                        <label for="c_name">
                            Name
                        </label>
                    </div>
                    <div class="input-field"><input type="email" name="email" id="c_email" required="" value="">
                        <label for="c_email">
                            Email
                        </label>
                    </div>
                    <div class="input-field"><input type="tel" name="number" id="c_number" required="" minlength="10" maxlength="12" value="">
                        <label for="c_number">
                            Number
                        </label>
                    </div>

                    <div class="input-field">
                        <textarea id="c_message" class="materialize-textarea" data-length="100" required="" name="message"></textarea>
                        <label for="c_message">Message</label>
                    </div>

                    <button type="submit" class="btn secondary primary-hover right">Send</button>
                    <br clear="both">
                </form>

            </div>
            <div class="col s12 m8">
                <h4 class="px-2">Why Choose us</h4>
                <div class="row">
                    <div class="col s12 m6">
                        <div class="card horizontal px-2">
                            <div class="card-image">
                                <img src="images/onsite-computer-repair.png">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>Onsite Support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="card horizontal px-2">
                            <div class="card-image">
                                <img src="images/hourglass.png">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>Flexible Duration</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="card horizontal px-2">
                            <div class="card-image">
                                <img src="images/delivery-truck.png">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>Quick Delivery</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="card horizontal px-2">
                            <div class="card-image">
                                <img src="images/customer-service.png">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>24/7/365 Support Time</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="stats">
        <div>
            <div class="container white-text">
                <br />
                <div class="row py-4">
                    <div class="col m3">
                        <h2>1200+</h2>
                        <h4>Projects completed</h4>
                    </div>
                    <div class="col m3">
                        <h2>2000+</h2>
                        <h4>Machines</h4>
                    </div>
                    <div class="col m3">
                        <h2>14</h2>
                        <h4>Year of experience</h4>
                    </div>
                    <div class="col m3">
                        <h2>165</h2>
                        <h4>Happy Clients</h4>
                    </div>
                </div>
                <br />
            </div>
        </div>
    </section>

    <section id="testimonial" class="container">
        <h2>Testimonials</h2>
        <br />
        <div class="row p-4">
            <div class="col l4 my-4">
                <div class="card grey lighten-5 p-4">
                    <span class="prefix">“</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At dolore ipsa officiis, esse aperiam dolorem nostrum iste libero architecto quod placeat dolores tempora minima molestiae veniam iusto eaque dolor vel.
                    </p>
                    <br />
                    <br />
                    <div class="yb secondary"></div>
                    <div class="border full"></div>
                </div>
            </div>
            <div class="col l4 my-4">
                <div class="card grey lighten-5 p-4">
                    <span class="prefix">“</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At dolore ipsa officiis, esse aperiam dolorem nostrum iste libero architecto quod placeat dolores tempora minima molestiae veniam iusto eaque dolor vel.
                    </p>
                    <br />
                    <br />
                    <div class="yb secondary"></div>
                    <div class="border full"></div>
                </div>
            </div>
            <div class="col l4 my-4">
                <div class="card grey lighten-5 p-4">
                    <span class="prefix">“</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At dolore ipsa officiis, esse aperiam dolorem nostrum iste libero architecto quod placeat dolores tempora minima molestiae veniam iusto eaque dolor vel.
                    </p>
                    <br />
                    <br />
                    <div class="yb secondary"></div>
                    <div class="border full"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="clients" class="container">
        <h2>Clients</h2>
        <div class="row">
            <div class="col s12 m6 l3 full">
                <div class="p-2">
                    <div class="card grey lighten-5 p-4 center-align">
                        <img src="images/coca-cola.png">
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 full">
                <div class="p-2">
                    <div class="card grey lighten-5 p-4 center-align">
                        <img src="images/pepsi.png">
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 full">
                <div class="p-2">
                    <div class="card grey lighten-5 p-4 center-align">
                        <img src="images/hcl.png">
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 full">
                <div class="p-2">
                    <div class="card grey lighten-5 p-4 center-align">
                        <img src="images/th.jpg">
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 full">
                <div class="p-2">
                    <div class="card grey lighten-5 p-4 center-align">
                        <img src="images/network18.png">
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 full">
                <div class="p-2">
                    <div class="card grey lighten-5 p-4 center-align">
                        <img src="images/th (1).jpg">
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 full">
                <div class="p-2">
                    <div class="card grey lighten-5 p-4 center-align">
                        <img src="images/BHEL_Logo.png">
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 full">
                <div class="p-2">
                    <div class="card grey lighten-5 p-4 center-align">
                        <img src="images/ntpc.png">
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 full">
                <div class="p-2">
                    <div class="card grey lighten-5 p-4 center-align">
                        <img src="images/hyundai.png">
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 full">
                <div class="p-2">
                    <div class="card grey lighten-5 p-4 center-align">
                        <img src="images/samsung.png">
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 full">
                <div class="p-2">
                    <div class="card grey lighten-5 p-4 center-align">
                        <img src="images/NIIT_Logo.png">
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 full">
                <div class="p-2">
                    <div class="card grey lighten-5 p-4 center-align">
                        <img src="images/itc.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "components/footer.html"; ?>
</body>

</html>