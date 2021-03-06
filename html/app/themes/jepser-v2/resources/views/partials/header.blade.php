<header class="banner">
  <div class="banner__container">
    <a class="banner__brand" href="{{ home_url('/') }}">
        <svg width="62px" height="72px" viewBox="0 0 62 72" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs></defs>
            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="jepser-logo" transform="translate(-52.000000, -22.000000)" stroke="#0010FF">
                    <g id="inner-logo" transform="translate(53.000000, 23.000000)">
                        <path d="" id="Path-2" stroke-width="2"></path>
                        <polygon id="Path-3" stroke-width="1" points="35.644009 0.426295571 6.76012285 16.7859514 0.196913639 31.7522465 15.0248336 50.8396861 36.3788066 68.6695776 59.2651559 35.5204062 58.9371556 11.5827903"></polygon>
                        <polyline id="Path-4" stroke-width="1" points="6.92988863 17.4169676 29.7912536 31.9284185 16.3733505 51.3131084"></polyline>
                        <polyline id="Path-5" stroke-width="1" points="36.7497288 68.268546 27.7130641 53.4290947 16.4041005 51.4418741"></polyline>
                        <polyline id="Path-7" stroke-width="1" points="58.7597023 12.3182285 50.8229918 26.6964293 36.6760568 67.7880768"></polyline>
                        <path d="M58.6809054,36.3282351 L42.1563726,52.4984291" id="Path-8" stroke-width="1"></path>
                        <path d="M36,1 L50.6325055,26.6986155" id="Path-9" stroke-width="1"></path>
                        <path d="M50.5698452,26.9083714 L27.7463381,53.1766809" id="Path-10" stroke-width="1"></path>
                        <polyline id="Path-11" stroke-width="1" points="35.8191765 0.874267509 29.9683231 32.0354962 27.6935594 53.156559"></polyline>
                    </g>
                </g>
            </g>
        </svg>
    </a>
    <nav class="banner__navigation navigation">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'menu_class' => 'nav',
                'container'     => ''
            ])
        !!}
      @endif
    </nav>
  </div>
</header>
@if (!is_front_page())
<div class="page__title page-title">
    <h1 class="page-title__content">
        @if(is_single() || is_home())
            Blog
        @elseif(is_category())
            {{ single_cat_title() }}
        @else
            {{ the_title() }}
        @endif
    </h1>
</div>
@endif
