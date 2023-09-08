@extends("layout")
@section("title","Contact")
@section("content")

<main>
        <!-- ULTIMATE -->
        <section class="ultimate">
            <div>
                <p class="ultimate__title">THE ULTIMATE LUXURY</p>
                <h2 class="ultimate__description">New Details</h2>
            </div>
            <div class="ultimate__box">
                <span class="ultimate__box--link">
                    <a href="index.html">Home |&nbsp;</a>
                    <a href="about.html">Blog</a>
                </span>
            </div>
        </section>

        <!-- CONTACT CARDS -->
        <section class="contact-cards">
            <div class="contact-cards-container">
                <div class="contact-cards-container__items">
                    <img src="./assets/contact/01.svg" alt="01" class="contact-cards-container__items__img">
                    <div>
                        <img src="./assets/contact/email.svg" alt="email" class="contact-cards-container__items__icon">
                        <div class="contact-cards-container__items__text">
                            <h6 class="contact-cards-container__items__text__title">Hotel Address</h6>
                            <p class="contact-cards-container__items__text__info">19/A, Cirikon City hall Tower New
                                York, NYC</p>
                        </div>
                    </div>
                </div>

                <div class="contact-cards-container__items">
                    <img src="./assets/contact/02.svg" alt="01" class="contact-cards-container__items__img">
                    <div>
                        <img src="./assets/contact/phone.svg" alt="email" class="contact-cards-container__items__icon">
                        <div class="contact-cards-container__items__text">
                            <h6 class="contact-cards-container__items__text__title">Phone Number</h6>
                            <p class="contact-cards-container__items__text__info">+ 97656 8675 7864 7 <br>+ 876 766 8675
                                765 6</p>
                        </div>
                    </div>
                </div>

                <div class="contact-cards-container__items">
                    <img src="./assets/contact/03.svg" alt="01" class="contact-cards-container__items__img">
                    <div>
                        <img src="./assets/contact/gps.svg" alt="email" class="contact-cards-container__items__icon">
                        <div class="contact-cards-container__items__text">
                            <h6 class="contact-cards-container__items__text__title">Email</h6>
                            <p class="contact-cards-container__items__text__info">info@webmail.com jobs.webmail@mail.com
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- IMAGE -->
        <section class="image">
            <div class="image__container">
                <img src="./assets/contact/hotel_relax.jpg" alt="Hotel relax">
            </div>
        </section>

        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @else
    <!-- FORM -->
                <form method="post">
            @csrf
            <div class="form">
                <input class="form__input" type="text" name="customer" placeholder="Customer">
                @error('customer')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <input class="form__input" type="email" name="email" placeholder="Email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <input class="form__input" type="number" name="contact" placeholder="Contact Tel">
                @error('contact')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <input class="form__input" type="textarea" name="comment" placeholder="Comment">
                @error('comment')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                
                <button class="form__button" type="submit">Send</button>
            </div>
        </form>
    @endif
</main>