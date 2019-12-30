<header class="masthead masthead--fixed" role="banner">
    <!--[if lt IE 9]>
        <div class="message message--browser-warning">
            <div class="message__body">
                <p>Outdated Browser</p>
            </div>
        </div>
    <![endif]-->

    <div class="message message--cookie-warning masthead__cookie-message hidden" data-cookies="">
        <div class="message__body">
        <p>Chúng tôi sử dụng các cookie để mang tới cho bạn trải nghiệm web tuyệt hảo nhất.&nbsp;<a data-id="64257" href="{{url('/')}}" title="Cookie Policy Page">Bạn có thể tìm hiểu thêm tại đây.</a></p>
        </div>
        <a href="#" class="message__close" data-cookies-close="">
     Chặng đường
</a>
    </div>

    <div class="closemainmenu">Close Main Menu</div>
    <div class="masthead__primary">
        <a class="masthead__logo" href="{{url('/')}}">GreenCenterVillass</a>
        <div class="masthead__primary__inner">
            <div class="masthead__dealer">
                <a class="masthead__dealer__link" href="{{url('/')}}">
                    Green Center Villass Hanoi
        </a>
            </div>
            <ul class="navigation masthead__navigation">
                <li class="navigation__item">
                    <a class="navigation__link navigation__link--language " href="#" data-language-toggle="">
                        <span class="navigation__icon" style="margin-top: 22px !important;"></span>
                    </a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link navigation__link--contact " href="tel:+840438240066" data-contact-toggle="">
                        <span class="navigation__icon" style="margin-top: 22px !important;"></span>
                        <span class="navigation__label ">LIÊN HỆ</span>
                    </a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link navigation__link--menu" href="#navigation" data-navigation-toggle="">
                        <span class="navigation__icon"></span>
                        <span class="navigation__label">MENU</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="language-menu language-menu--fixed language-menu--hidden">
            <div class="language-menu__title">Chọn một ngôn ngữ</div>
            <ul class="language-menu__list">
                <li class="language-menu__item">
                    <span>Tiếng Việt</span>
                </li>
            </ul>
        </div>

        <div class="contact-menu contact-menu--fixed contact-menu--hidden">
        <a class="contact-menu__section" href="{{url('/lien-he')}}">
    SẮP XẾP GỌI LẠI
</a>
            <div class="contact-menu__section">
                <span class="dealer-number">
            <a href="tel:+840438240066"><span style="color: #fff; text-decoration:underline">{{$phone_contact->phone}}</span></a>
                </span>
            </div>
        </div>

    </div>

</header>