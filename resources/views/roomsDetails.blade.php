@extends("layout")
@section("title","RoomDetails")
@section("content")

<!-- MAIN -->
<main>
        <section class="ultimate">
            <div>
                <p class="ultimate__title">THE ULTIMATE LUXURY</p>
                <h2 class="ultimate__description">Ultimate Room</h2>
            </div>
            <div class="ultimate__box">
                <span class="ultimate__box--link">
                    <a href="index">Home |&nbsp;</a>
                    <a href="roomsDetails">Rooms Details</a>
                </span>
            </div>
        </section>

        <!-- PAGE DETAILS -->
      <div class="pageDetails">
        <div class="pageDetails__container">

          <section class="pageDetails__container__box">
            <div class="pageDetails__container__box--items">
              <div>
                <h4>DOUBLE BED</h4>
                <h2>Luxury Double Bed</h2>
              </div>
              <div class="pageDetails__container__box--items--price">
                  <p>$500</p>
                  <sub>/Night</sub>
              </div>
            </div>

            <div class="pageDetails__container__box--image">
              <img src="./assets/rooms/room3.jpg" alt="offer hotel room" />
            </div>
          </section>

          <section class="pageDetails__container__form">
            <h3 class="pageDetails__container__form--title">Check Availability</h3>
              <form method="post">
              @csrf
                <label class="pageDetails__container__form--label" for="checkIn">Check In</label>
                <input
                  class="pageDetails__container__form--input"
                  type="date"
                  name="checkIn"
                  id="detailsCheckIn"
                  value="2023-09-01"
                />
                <label class="pageDetails__container__form--label" for="checkIn">Check Out</label>
                <input
                  class="pageDetails__container__form--input"
                  type="date"
                  name="checkOut"
                  id="detailsCheckOut"
                  value="2023-09-10"
                />
                <button type="submit" class="pageDetails__container__form--btn">Check Availability</button>
              </form>
          </section>

          <section class="pageDetails__container__description">
            <p>
              A Luxury Double Bed room is the epitome of opulence and comfort, offering a lavish and spacious haven for discerning travelers seeking the ultimate retreat. This well-appointed room is designed with meticulous attention to detail, featuring a grand double bed adorned with premium linens and plush pillows to ensure a restful night's sleep. The elegant decor and tasteful furnishings create an ambiance of sophistication and tranquility, making it a perfect choice for both leisure and business travelers.

Guests staying in a Luxury Double Bed room can indulge in modern amenities, including a flat-screen TV, high-speed Wi-Fi, and a well-stocked minibar. The en-suite bathroom is a sanctuary of relaxation, complete with luxurious toiletries, a rainfall shower, and a deep soaking tub. Whether you're unwinding after a day of exploring the city or preparing for an important business meeting, this room provides the ideal retreat.
            </p>
          </section> 
        </div>

        <section class="pageDetails__amenities">
          <h2 class="pageDetails__amenities--title">Amenities</h2>
          <hr />
          <div class="pageDetails__amenities__container">
            <div class="pageDetails__amenities__container--items">
              <img class="pageDetails__amenities__container--items--image"
                src="./assets/offers/air.svg" alt="air"/>
              <p class="pageDetails__amenities__container--items--text">Air Conditioner</p>
            </div>

            <div class="pageDetails__amenities__container--items">
              <img class="pageDetails__amenities__container--items--image"
                src="./assets/offers/wifi.svg" alt="wifi"/>
              <p class="pageDetails__amenities__container--items--text">High speed WiFi</p>
            </div>

            <div class="pageDetails__amenities__container--items">
              <img class="pageDetails__amenities__container--items--image"
                src="./assets/offers/strong.svg" alt="strong Locker"/>
              <p class="pageDetails__amenities__container--items--text">Strong Locker</p>
            </div>

            <div class="pageDetails__amenities__container--items">
              <img class="pageDetails__amenities__container--items--image"
                src="./assets/offers/breakfast.svg" alt="breakfast"/>
              <p class="pageDetails__amenities__container--items--text">Breakfast</p>
            </div>

            <div class="pageDetails__amenities__container--items">
              <img class="pageDetails__amenities__container--items--image"
                src="./assets/offers/kitchen.svg" alt="kitchen"/>
              <p class="pageDetails__amenities__container--items--text">Kitchen</p>
            </div>

            <div class="pageDetails__amenities__container--items">
              <img class="pageDetails__amenities__container--items--image"
                src="./assets/offers/smart.svg" alt="Smart Security"/>
              <p class="pageDetails__amenities__container--items--text">Smart Security</p>
            </div>

            <div class="pageDetails__amenities__container--items">
              <img class="pageDetails__amenities__container--items--image"
                src="./assets/offers/cleaning.svg" alt="cleaning"/>
              <p class="pageDetails__amenities__container--items--text">Cleaning</p>
            </div>

            <div class="pageDetails__amenities__container--items">
              <img class="pageDetails__amenities__container--items--image"
                src="./assets/offers/shower.svg" alt="shower"/>
              <p class="pageDetails__amenities__container--items--text">Shower</p>
            </div>

            <div class="pageDetails__amenities__container--items">
              <img class="pageDetails__amenities__container--items--image"
                src="./assets/offers/support.svg" alt="support"/>
              <p class="pageDetails__amenities__container--items--text">24/7 Online Support</p>
            </div>

            <div class="pageDetails__amenities__container--items">
              <img class="pageDetails__amenities__container--items--image"
                src="./assets/offers/grocery.svg" alt="grocery"/>
              <p class="pageDetails__amenities__container--items--text">Grocery</p>
            </div>

            <div class="pageDetails__amenities__container--items">
              <img class="pageDetails__amenities__container--items--image"
                src="./assets/offers/single.svg" alt="single bed"/>
              <p class="pageDetails__amenities__container--items--text">Single Bed</p>
            </div>

            <div class="pageDetails__amenities__container--items">
              <img class="pageDetails__amenities__container--items--image"
                src="./assets/offers/expert.svg" alt="Expert Team"/>
              <p class="pageDetails__amenities__container--items--text">Expert Team</p>
            </div>

            <div class="pageDetails__amenities__container--items">
              <img class="pageDetails__amenities__container--items--image"
                src="./assets/offers/shop.svg" alt="Shop near"/>
              <p class="pageDetails__amenities__container--items--text">Shop near</p>
            </div>

            <div class="pageDetails__amenities__container--items">
              <img class="pageDetails__amenities__container--items--image"
                src="./assets/offers/towels.svg" alt="Towels"/>
              <p class="pageDetails__amenities__container--items--text">Towels</p>
            </div>
          </div>
        </section>

        <section class="pageDetails__person">
          <div class="pageDetails__person__avatar">
            <img class="pageDetails__person__avatar--image"
              src="./assets/rooms/donals.jpg" alt="avatar"/>
          </div>
          <img
            class="pageDetails__person__avatar--check"
            src="./assets/rooms/checkIcon.svg" alt="Check"/>
          <h3 class="pageDetails__person__title">Donald H. Hilixer</h3>
          <h6 class="pageDetails__person__subtitle">FOUNDER, HILIX</h6>
          <p class="pageDetails__person__text">
            A visionary leader with a passion for innovation and a relentless drive for excellence.</p>
        </section>

        <section class="pageDetails__cancellation">
          <h2>Cancellation</h2>
          <hr />
          <p>
            At Hotel Miranda, we understand that plans can change. That's why we offer the flexibility of canceling your reservation up to 14 days before your scheduled check-in date without any penalties. We value your convenience and want to ensure that you have the freedom to adjust your plans as needed. So, rest assured, if your plans change, you can count on us to accommodate your needs..
          </p>
        </section>
      </div>

      <section class="related">
          <h3 class="related__title">Related Rooms</h3>
          <div class="related__rooms">

          <div>
            <div class="roomsPage__image">
                <img src="./assets/rooms/room4.jpg" alt="Room">
            </div>
            <div class="roomsPage__icons">
                <img class="roomsPage__icons__image" src="./assets/rooms/icons__mobile.svg" alt="">
            </div>
            <h4 class="roomsPage__title">Minimal Duplex Room</h4>
            <p class="roomsPage__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do
                eiusmod
                tempor.</p>
            <div class="roomsPage__info">
                <p>$345/Night</p>
                <p><a href="roomsDetails">Booking Now</a></p>
            </div>
          </div>

          <div>
            <div class="roomsPage__image">
                <img src="./assets/rooms/room6.jpg" alt="Room">
            </div>
            <div class="roomsPage__icons">
                <img class="roomsPage__icons__image" src="./assets/rooms/icons__mobile.svg" alt="">
            </div>
            <h4 class="roomsPage__title">Minimal Duplex Room</h4>
            <p class="roomsPage__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do
                eiusmod
                tempor.</p>
            <div class="roomsPage__info">
                <p>$345/Night</p>
                <p><a href="roomsDetails">Booking Now</a></p>
            </div>
          </div>
      </section>   
    </main>
    @endsection