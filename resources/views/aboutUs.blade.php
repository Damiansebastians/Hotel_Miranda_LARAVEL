@extends("layout")
@section("title","About")
@section("content")

 <!-- MAIN -->
 <main>
      <section class="ultimate">
        <div>
          <p class="ultimate__title">THE ULTIMATE LUXURY</p>
          <h2 class="ultimate__description">About Us</h2>
        </div>
        <div class="ultimate__box">
          <span class="ultimate__box--link">
            <a href="index">Home |&nbsp;</a>
            <a href="about">About Us</a>
          </span>
        </div>
      </section>

      <!-- INFO -->
      <section class="info">
        <video
          src="./video/HotelMiranda.mp4"
          autoplay
          muted
          class="info__video"
        >
          Your browser does not support video playback
        </video>
        <h2 class="info__title">
          Hello. Our hotel has been present for over 20 years. We make the best
          for all our customers.
        </h2>
        <div class="info__content">
          <span>
            <div class="info__content-item">
              <img
                src="./assets/aboutUs/breakfast_mobile.png"
                alt="Breakfast"
                class="info__content-img"
              />
              <p class="info__content-text">Breakfast</p>
            </div>
            <div class="info__content-item" id="item-gold">
              <img
                src="./assets/aboutUs/airport_mobile.svg"
                alt="Airplane"
                class="info__content-img"
              />
              <p class="info__content-text">Airport Pickup</p>
            </div>
          </span>
          <span>
            <div class="info__content-item">
              <img
                src="./assets/aboutUs/city_mobile.svg"
                alt="Gps"
                class="info__content-img"
              />
              <p class="info__content-text">City Guide</p>
            </div>
            <div class="info__content-item" id="info__bbq">
              <img
                src="./assets/aboutUs/bbq.svg"
                alt="Bbq"
                class="info__content-img"
              />
              <p class="info__content-text">Bbq party</p>
            </div>
            <div class="info__content-item">
              <img
                src="./assets/aboutUs/room.svg"
                alt="Room"
                class="info__content-img"
              />
              <p class="info__content-text">Luxary Room</p>
            </div>
          </span>
        </div>
      </section>

      <!-- RESTAURANT -->
      <section class="restaurant">
        <div class="restaurant__picture">
          <img
            src="./assets/aboutUs/restaurant_image.jpg"
            alt="Restaurant"
            class="restaurant__picture-image"
          />
        </div>
        <div>
          <h4 class="restaurant__title">Restaurant</h4>
          <h2 class="restaurant__description">
            Get Restaurant Facilities & Many Other More
          </h2>
          <p class="restaurant__text">
            Experience a Multitude of Amenities: From Our Restaurant Facilities
            to an Array of Extraordinary Offerings. Discover a dining experience
            like no other as you explore our comprehensive range of restaurant
            amenities. But that's just the beginning – we also provide a host of
            other exciting options to make your visit truly exceptional.
          </p>
          <button class="restaurant__button">Take a Tour</button>
        </div>
      </section>

      <!-- FACILITIES ABOUT -->
      <section class="facilitiesAbout">
        <h4 class="facilitiesAbout__title">FACILITIES</h4>
        <h2 class="facilitiesAbout__description">Core Features</h2>

        <div class="facilitiesAbout__container">
          <div class="facilitiesAbout__box" id="page1">
            <div class="facilitiesAbout__box__number">
              <p>01</p>
            </div>
            <div class="facilitiesAbout__box__image">
              <img
                src="./assets/aboutUs/facilities_icon_mobile.svg"
                alt="icon stars"
              />
            </div>
            <h3 class="facilitiesAbout__box__subtitle">Have High Rating</h3>
            <p class="facilitiesAbout__box__text">
              Experience excellence at its finest with accommodations that have
              received consistently high ratings from our satisfied guests.
            </p>
          </div>

          <div class="facilitiesAbout__box" id="page2">
            <div class="facilitiesAbout__box__number">
              <p>02</p>
            </div>
            <div class="facilitiesAbout__box__image">
              <img src="./assets/aboutUs/icon2.svg" alt="icon stars" />
            </div>
            <h3 class="facilitiesAbout__box__subtitle">Quiet Hours</h3>
            <p class="facilitiesAbout__box__text">
              Enjoy tranquility and relaxation during your stay with our
              designated quiet hours.
            </p>
          </div>

          <div class="facilitiesAbout__box" id="page3">
            <div class="facilitiesAbout__box__number">
              <p>03</p>
            </div>
            <div class="facilitiesAbout__box__image">
              <img src="./assets/aboutUs/icon3.svg" alt="icon stars" />
            </div>
            <h3 class="facilitiesAbout__box__subtitle">Best Locations</h3>
            <p class="facilitiesAbout__box__text">
              Discover the beauty and convenience of our prime locations. We've
              carefully selected the most desirable spots for our accommodations
              to ensure that you're always in the heart of the action.
            </p>
          </div>

          <div class="facilitiesAbout__box" id="page4">
            <div class="facilitiesAbout__box__number">
              <p>04</p>
            </div>
            <div class="facilitiesAbout__box__image">
              <img
                src="./assets/aboutUs/icon4.svg"
                alt="icon Free Cancellation"
              />
            </div>
            <h3 class="facilitiesAbout__box__subtitle">Free Cancellation</h3>
            <p class="facilitiesAbout__box__text">
              Flexibility is key when planning your trip, which is why we offer
              hassle-free, free cancellation options.
            </p>
          </div>

          <div class="facilitiesAbout__box" id="page5">
            <div class="facilitiesAbout__box__number">
              <p>05</p>
            </div>
            <div class="facilitiesAbout__box__image">
              <img
                src="./assets/aboutUs/icon5.svg"
                alt="icon Payment Options"
              />
            </div>
            <h3 class="facilitiesAbout__box__subtitle">Payment Options</h3>
            <p class="facilitiesAbout__box__text">
              We believe in providing convenience every step of the way,
              starting with flexible payment options.
            </p>
          </div>

          <div class="facilitiesAbout__box" id="page6">
            <div class="facilitiesAbout__box__number">
              <p>06</p>
            </div>
            <div class="facilitiesAbout__box__image">
              <img src="./assets/aboutUs/icon6.svg" alt="icon Special Offers" />
            </div>
            <h3 class="facilitiesAbout__box__subtitle">Special Offers</h3>
            <p class="facilitiesAbout__box__text">
              Unlock exclusive deals and savings with our special offers. We're
              dedicated to providing you with added value during your stay.
            </p>
          </div>
        </div>
      </section>

      <!-- COUNTER -->
      <section class="counter">
        <p class="counter__title">counter</p>
        <h2 class="counter__description">Some Fun Facts</h2>
        <span>
          <div class="counter__items">
            <div class="counter__items--image">
              <img
                src="./assets/aboutUs/about_like_mobile.svg"
                alt="Like icon"
              />
            </div>
            <div class="counter__items--text">
              <p>8000</p>
              <p>Happy Users</p>
            </div>
            <div class="counter__items--vector">
              <img
                src="./assets/aboutUs/about_arrow_mobile.svg"
                alt="Arrow icon"
              />
            </div>
          </div>

          <div class="counter__items">
            <div class="counter__items--image">
              <img
                src="./assets/aboutUs/about_stars_mobile.svg"
                alt="Stars icon"
              />
            </div>
            <div class="counter__items--text">
              <p>10M</p>
              <p>Reviews & Appriciate</p>
            </div>
            <div class="counter__items--vector">
              <img
                src="./assets/aboutUs/about_arrow_mobile.svg"
                alt="Arrow icon"
              />
            </div>
          </div>

          <div class="counter__items">
            <div class="counter__items--image">
              <img
                src="./assets/aboutUs/about_world_mobile.svg"
                alt="World icon"
              />
            </div>
            <div class="counter__items--text">
              <p>100</p>
              <p>Country Coverage</p>
            </div>
            <div class="counter__items--vector">
              <img
                src="./assets/aboutUs/about_arrow_mobile.svg"
                alt="Arrow icon"
              />
            </div>
          </div>
        </span>
        
        <div class="counter__slider">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img
                  src="./assets/sliders/counter_slider.jpg"
                  alt="Happy Users"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="./assets/sliders/counter_slider2.jpg"
                  alt="Teamwork"
                />
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
    </main>
@endsection