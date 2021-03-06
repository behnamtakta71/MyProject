@extends('user.Profile.master')
@section('header')
    <header class="header header-responsive" id="site-header-responsive">

        <div class="header-content-wrapper">
            <ul class="nav nav-tabs mobile-app-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#request" role="tab">
                        <div class="control-icon has-items">
                            <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                            <div class="label-avatar bg-blue">6</div>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#chat" role="tab">
                        <div class="control-icon has-items">
                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                            <div class="label-avatar bg-purple">2</div>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#notification" role="tab">
                        <div class="control-icon has-items">
                            <svg class="olymp-thunder-icon"><use xlink:href="icons/icons.svg#olymp-thunder-icon"></use></svg>
                            <div class="label-avatar bg-primary">8</div>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#search" role="tab">
                        <svg class="olymp-magnifying-glass-icon"><use xlink:href="icons/icons.svg#olymp-magnifying-glass-icon"></use></svg>
                        <svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content tab-content-responsive">

            <div class="tab-pane " id="request" role="tabpanel">

                <div class="mCustomScrollbar ps ps--theme_default" data-mcs-theme="dark" data-ps-id="7fbe0237-9956-ec98-0f05-99d0b82716dd">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">دخواست های دوستان</h6>
                        <a href="#">یافتن دوستان</a>
                        <a href="#">تنظیمات</a>
                    </div>
                    <ul class="notification-list friend-requests">
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar55-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">محمد محمدی زاده</a>
                                <span class="chat-message-item">دوست متقابل: فاطمه کاظمی زاده</span>
                            </div>
                            <span class="notification-icon">
                                    <a href="#" class="accept-request">
                                        <span class="icon-add without-text">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                        </span>
                            </a>

                            <a href="#" class="accept-request request-del">
                                <span class="icon-minus">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                        </span>
                            </a>

                            </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar56-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">زهرا باقری</a>
                                <span class="chat-message-item">4 دوست مشترک</span>
                            </div>
                            <span class="notification-icon">
                                    <a href="#" class="accept-request">
                                        <span class="icon-add without-text">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                        </span>
                            </a>

                            <a href="#" class="accept-request request-del">
                                <span class="icon-minus">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                        </span>
                            </a>

                            </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                        <li class="accepted">
                            <div class="author-thumb">
                                <img src="img/avatar57-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                شما و <a href="#" class="h6 notification-friend">دلآرام</a> اکنون دوست هستید. برروی<a href="#" class="notification-link">دیوار</a> او چیزی بنویسید.
                            </div>
                            <span class="notification-icon">
                                    <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar58-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">آزاده اسلامی</a>
                                <span class="chat-message-item">9 دوست مشترک</span>
                            </div>
                            <span class="notification-icon">
                                    <a href="#" class="accept-request">
                                        <span class="icon-add without-text">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                        </span>
                            </a>

                            <a href="#" class="accept-request request-del">
                                <span class="icon-minus">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                        </span>
                            </a>

                            </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="view-all bg-blue">بررسی همه رویداد ها</a>
                    <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: -6px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>

            </div>

            <div class="tab-pane " id="chat" role="tabpanel">

                <div class="mCustomScrollbar ps ps--theme_default" data-mcs-theme="dark" data-ps-id="c9ef3b23-408c-5eca-54a2-0db00afc7201">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">چت / پیامها</h6>
                        <a href="#">تنظیم به عنوان خوانده شده</a>
                        <a href="#">تنظیمات</a>
                    </div>

                    <ul class="notification-list chat-message">
                        <li class="message-unread">
                            <div class="author-thumb">
                                <img src="img/avatar59-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">محمد کریمی فرد</a>
                                <span class="chat-message-item">سلام جیمز! این دیانا است، من فقط می خواستم به شما اطلاع دهم که ما مجبوریم برنامه ریزی کنیم ...</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ساعت قبل</time></span>
                            </div>
                            <span class="notification-icon">
                                    <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                </span>
                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar60-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">فاطمه منصور نژاد</a>
                                <span class="chat-message-item">خیلی عالیه، فردا شما را ملاقات خواهم کرد.</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ساعت قبل</time></span>
                            </div>
                            <span class="notification-icon">
                                    <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar61-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">زهرا ساداتی</a>
                                <span class="chat-message-item">سلام امروز هوا چطور است؟</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 9:56pm</time></span>
                            </div>
                            <span class="notification-icon">
                                        <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                    </span>
                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>

                        <li class="chat-group">
                            <div class="author-thumb">
                                <img src="img/avatar11-sm.jpg" alt="author">
                                <img src="img/avatar12-sm.jpg" alt="author">
                                <img src="img/avatar13-sm.jpg" alt="author">
                                <img src="img/avatar10-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">شما, فاطمه, زهرا &amp; محدثه +3</a>
                                <span class="last-message-author">محدثه:</span>
                                <span class="chat-message-item">بله همه چیز تحت کنترل است!</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">12 اردیبهشت 10:23am</time></span>
                            </div>
                            <span class="notification-icon">
                                        <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                    </span>
                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                    </ul>

                    <a href="#" class="view-all bg-purple">مشاهده تمام پیام ها</a>
                    <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: -6px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>

            </div>

            <div class="tab-pane " id="notification" role="tabpanel">

                <div class="mCustomScrollbar ps ps--theme_default" data-mcs-theme="dark" data-ps-id="4392e0f3-d1ea-0b7e-e1a2-e3c36bd5cbf8">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">اطلاعیه ها</h6>
                        <a href="#">تنظیم به عنوان خوانده شده</a>
                        <a href="#">تنظیمات</a>
                    </div>

                    <ul class="notification-list">
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar62-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <div><a href="#" class="h6 notification-friend">کاظمی زاده</a> یک نظر جدید در <a href="#" class="notification-link">استاتوس پروفایل</a> شما ارسال کرد.</div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ساعت قبل</time></span>
                            </div>
                            <span class="notification-icon">
                                        <svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
                                    </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>

                        <li class="un-read">
                            <div class="author-thumb">
                                <img src="img/avatar63-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <div>You and <a href="#" class="h6 notification-friend">نادیا قربانی زاده</a> اکنون دوست شماست!</div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 ساعت قبل</time></span>
                            </div>
                            <span class="notification-icon">
                                        <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                    </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>

                        <li class="with-comment-photo">
                            <div class="author-thumb">
                                <img src="img/avatar64-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <div><a href="#" class="h6 notification-friend">سارا عدالت پور</a> یک نظر جدید در<a href="#" class="notification-link">عکس</a> ارسال کرد.</div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 10:25</time></span>
                            </div>
                            <span class="notification-icon">
                                        <svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
                                    </span>

                            <div class="comment-photo">
                                <img src="img/comment-photo1.jpg" alt="photo">
                                <span>“این عکس عالی به نظر میرسه.. عالیه..!”</span>
                            </div>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar65-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <div><a href="#" class="h6 notification-friend">باقری</a> از شما در رویداد <a href="#" class="notification-link">Gotham Bar</a> دعوت نمود.</div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">28 اردیبهشت 8:29</time></span>
                            </div>
                            <span class="notification-icon">
                                        <svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                    </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar66-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <div><a href="#" class="h6 notification-friend">کاظمی زاده</a>درباره <a href="#" class="notification-link">استاتوس پروفایل</a> یک نظر جدید ارسال کرد.</div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">28 اردیبهشت 8:29</time></span>
                            </div>
                            <span class="notification-icon">
                                        <svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
                                    </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>
                    </ul>

                    <a href="#" class="view-all bg-primary">مشاهده تمام اطلاعیه ها</a>
                    <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: -6px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>

            </div>

            <div class="tab-pane " id="search" role="tabpanel">


                <form class="search-bar w-search notification-list friend-requests">
                    <div class="form-group with-button is-empty">
                        <input class="form-control js-user-search selectized" placeholder="Search here people or pages..." type="text" tabindex="-1" style="display: none;" value=""><div class="selectize-control form-control js-user-search multi rtl"><div class="selectize-input items not-full has-options"><input type="text" autocomplete="off" tabindex="" placeholder="Search here people or pages..." style="width: 243.375px;"></div><div class="selectize-dropdown multi form-control js-user-search" style="display: none; width: 0px; top: 70px; left: 0px;"><div class="selectize-dropdown-content"></div></div></div>
                        <span class="material-input"></span></div>
                </form>


            </div>

        </div>
        <!-- ... end  Tab panes -->

    </header>
    <div class="header-spacer header-spacer-small"></div>
    <div class="main-header">
        <div class="content-bg-wrap">
            <div class="content-bg bg-account"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto col-md-8 col-sm-12 col-xs-12">
                    <div class="main-header-content">
                        <h1>مشخصات خود را سفارشی کنید!</h1>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img class="img-bottom" src="img/account-bottom.png" alt="friends">
    </div>
@endsection
@section('content-y-a)
    <div class="row">
    <div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
        <div class="ui-block">
            <div class="ui-block-title">
                <h6 class="title">درخواست های دوستی</h6>
                <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
            </div>

            <ul class="notification-list friend-requests">
                <li>
                    <div class="author-thumb">
                        <img src="img/avatar15-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">حدیث باقری</a>
                        <span class="chat-message-item">دوست متقابل: سمانه کاشانی</span>
                    </div>
                    <span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add">
									<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
								پذیرفتن درخواست
							</a>

							<a href="#" class="accept-request request-del">
								<span class="icon-minus">
									<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>

						</span>

                    <div class="more">
                        <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                        <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="img/avatar16-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">استیو جابز</a>
                        <span class="chat-message-item">4 دوست مشترک</span>
                    </div>
                    <span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add">
									<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
								پذیرفتن درخواست
							</a>

							<a href="#" class="accept-request request-del">
								<span class="icon-minus">
									<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>

						</span>

                    <div class="more">
                        <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                        <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                    </div>
                </li>

                <li class="accepted">
                    <div class="author-thumb">
                        <img src="img/avatar17-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        شما و <a href="#" class="h6 notification-friend">مریم شکوری</a> فقط با هم دوست باشید. نوشته شده در <a href="#" class="notification-link">دیوار او</a>.
                    </div>
                    <span class="notification-icon">
							<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
						</span>

                    <div class="more">
                        <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                        <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="img/avatar18-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">پوشاک گوچی</a>
                        <span class="chat-message-item">9 دوست مشترک</span>
                    </div>
                    <span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add">
									<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
								پذیرفتن درخواست
							</a>

							<a href="#" class="accept-request request-del">
								<span class="icon-minus">
									<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>

						</span>

                    <div class="more">
                        <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                        <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                    </div>
                </li>

            </ul>

        </div>

    </div>
@endsection