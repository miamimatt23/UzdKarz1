<html>
  <head>
    <title>Used Cars</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="styles/default.css" rel="stylesheet" type="text/css">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <style>
    .search{padding: 80px 125px; background-image: url(images/search_bg.jpg)}
    .links{background-color: #d4d4d4; padding: 75px 0px;}
    .featured{background-color: #262626; padding: 75px;}
    .contact{background-color: #d4d4d4; padding: 60px 0px;}
    </style>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="float-left">
          <img class="inline-block middle c-01 fluid" src="images/logo.png">
          <a class="inline-block middle no-underline semibold black c-02" href="tel: xxxxxxxxxx">(555) 555 - 5555</a>
        </div>
        <div class="float-right">
          <a class="inline-block middle h-underline black c-03" data-target="about" href="#">ABOUT</a>
          <a class="inline-block middle h-underline black c-03" href="inventory">INVENTORY</a>
          <a class="inline-block middle h-underline black c-03" style="border-right: 0px solid #000; padding-right: 0px;" data-target="contact" href="#">CONTACT</a>
        </div>
      </div>
    </header>
    <section class="search">
      <div class="container center">
        <div class="inline-block">
          <div class="white semibold c-04">INVENTORY SEARCH</div>
          <div class="red italic c-05">26 CARS AVAILABLE</div>
          <div class="left">
            <div class="inline-block">
              <select class="c-06" style="margin-left: 0px;" id="year">
                <option value="0">Any Year</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
              </select>
            </div>
            <div class="inline-block">
              <select class="c-06" id="miles">
                <option value="0">Any Miles</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
              </select>
            </div>
            <div class="inline-block">
              <select class="c-06" id="make">
                <option value="0">Any Make</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
              </select>
            </div>
            <div class="inline-block">
              <select class="c-06" id="price">
                <option value="0">Any Price</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
              </select>
            </div>
          </div>
          <div class="width-100 left">
            <a class="inline-block white semibold no-underline c-07" href="#">SEARCH</a>
          </div>
        </div>
      </div>
    </section>
    <section class="links">
      <div class="container center">
        <a class="white semibold border-box inline-block center c-08" href="inventory"><img class="fluid inline-block middle" src="images/links_inventory.png"><div class="inline-block middle c-09">INVENTORY</div></a>
        <a class="white semibold border-box inline-block center c-08" href="#" target="_blank"><img class="fluid inline-block middle" src="images/links_direction.png"><div class="inline-block middle c-09">DIRECTIONS</div></a>
        <a class="white semibold border-box inline-block center c-08" href="#" data-target="contact"><img class="fluid inline-block middle" src="images/links_contact.png"><div class="inline-block middle c-09">CONTACT</div></a>
      </div>
    </section>
    <section class="featured">
      <div class="container">
        <div class="center red semibold c-10">FEATURED INVENTORY</div>
        <div class="inline-block c-18">
          <img class="inline-block border-box fluid c-11" src="http://placehold.it/275x400?t=Placeholder">
        </div>
        <div class="inline-block c-18">
          <img class="inline-block border-box fluid c-11" src="http://placehold.it/275x400?t=Placeholder">
        </div>
        <div class="inline-block c-18">
          <img class="inline-block border-box fluid c-11" src="http://placehold.it/275x400?t=Placeholder">
        </div>
        <div class="inline-block c-18">
          <img class="inline-block border-box fluid c-11" src="http://placehold.it/275x400?t=Placeholder">
        </div>
      </div>
    </section>
    <section class="contact">
      <div class="container">
        <div class="float-left c-12">
          <div class="black semibold c-14">Full Name:</div>
          <input class="width-100 black c-15" type="text" id="full_name">
          <div class="black semibold c-14">Email Address:</div>
          <input class="width-100 black c-15" type="text" id="email">
          <div class="black semibold c-14">Phone Number:</div>
          <input class="width-100 black c-15" type="text" id="phone">
          <div class="black semibold c-14">Message:</div>
          <textarea class="width-100 black c-15" id="message"></textarea>
          <div class="light red c-16">** We will get back to you as soon as possible.</div>
          <div class="width-100 right">
            <a href="#" class="inline-block red semibold no-underline c-17" id="submit">SUBMIT</a>
          </div>
        </div>
        <div class="float-right border-box c-13">
          <a class="black no-underline semibold block c-25" href="tel: 5555555555"><img class="inline-block middle c-24" src="images/contact_phone.png"><div class="inline-block c-19 semibold middle">(555) 555 - 5555</div></a>
          <a class="black no-underline semibold block c-25" href="mailto: john.doe@example.com"><img class="inline-block middle c-24" src="images/contact_email.png"><div class="inline-block semibold c-19 middle">john.doe@example.com</div></a>
          <div class="c-20 width-100 border-box">
            <div class="width-100 center white bold c-21">STORE HOURS</div>
            <div class="c-26 border-box">
              <div class="inline-block bold c-22">MONDAY</div>
              <div class="inline-block bold c-22 c-23">9AM-5PM</div>
              <div class="inline-block bold c-22">TUESDAY</div>
              <div class="inline-block bold c-22 c-23">9AM-5PM</div>
              <div class="inline-block bold c-22">WEDNESDAY</div>
              <div class="inline-block bold c-22 c-23">9AM-5PM</div>
              <div class="inline-block bold c-22">THURSDAY</div>
              <div class="inline-block bold c-22 c-23">9AM-5PM</div>
              <div class="inline-block bold c-22">FRIDAY</div>
              <div class="inline-block bold c-22 c-23">9AM-5PM</div>
              <div class="inline-block bold c-22">SATURDAY</div>
              <div class="inline-block bold c-22 c-23">10AM-2PM</div>
              <div class="inline-block bold c-22">SUNDAY</div>
              <div class="inline-block bold c-22 c-23">CLOSED</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
