@php
    $lang = 'lang="en-US" dir="ltr"';
    if (session()->has('lang')) {
        if (session('lang') == 'ar') {
            $lang = 'lang="ar" dir="rtl"';
        }
    }
@endphp
<!DOCTYPE html>
<html class="html" {!! $lang !!}>

<head>
	<meta charset="UTF-8">
	{{-- <link rel="profile" href="https://gmpg.org/xfn/11"> --}}

    <!-- Google Tag Manager -->
    {{-- <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-PDJMFPNC');
    </script> --}}
    <!-- End Google Tag Manager -->
	<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BPMCXKVTVV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-BPMCXKVTVV');
    </script>
	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- This site is optimized with the Yoast SEO Premium plugin v20.9 (Yoast SEO v20.9) - https://yoast.com/wordpress/plugins/seo/ -->
	<title>{{ __('header.Saudi Construction Excellence Summit 2023') }}</title>
	<link rel="canonical" href="{{ route('home') }}" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Saudi Construction Excellence Summit" />
	<meta property="og:description"
		content="SAUDI CONSTRUCTION EXCELLENCE SUMMIT Achieving construction excellence through future technologies &#038; strategies Register 0 + Attendees 0 + Speakers 0 + Panel Discussions 0 + Workshops 0 + Associations 0 + Media Partners Under the Patronage of H.E Mr. Majed Bin Abdullah Al-Hogail Minister of Municipal &#038; Rural Affairs &#038; Housing Overview Saudi Arabia’s infrastructure [&hellip;]" />
	<meta property="og:url" content="https://scesummit-sa.com/" />
	<meta property="og:site_name" content="Saudi Construction Excellence Summit 2023" />
	<meta property="article:publisher" content="https://www.facebook.com/SCESUMMIT" />
	<meta property="article:modified_time" content="2023-07-15T10:42:50+00:00" />
	<meta property="og:image"
		content="{{ asset("wp-content/uploads/elementor/thumbs/minister-logo-q3w2o9o2c9zadg451vqsxl2uau2y4cgizezhuc0lc0.jpg") }}" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:label1" content="Est. reading time" />
	<meta name="twitter:data1" content="9 minutes" />


	<link rel="alternate" type="application/rss+xml" title="Saudi Construction Excellence Summit 2023 &raquo; Feed"
		href="feed/index.html" />
	<link rel='stylesheet' id='pa-frontend-css'
		href='{{ asset("wp-content/uploads/premium-addons-elementor/pa-frontend-79a90bf40.min.css@ver=1689419745.css") }}'
		media='all' />
	<link rel='stylesheet' id='wp-block-library-css'
		href='{{ asset("wp-includes/css/dist/block-library/style.min.css@ver=6.2.2.css") }}' media='all' />
	<style id='wp-block-library-theme-inline-css'>
		.wp-block-audio figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-audio figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-audio {
			margin: 0 0 1em
		}

		.wp-block-code {
			border: 1px solid #ccc;
			border-radius: 4px;
			font-family: Menlo, Consolas, monaco, monospace;
			padding: .8em 1em
		}

		.wp-block-embed figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-embed figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-embed {
			margin: 0 0 1em
		}

		.blocks-gallery-caption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .blocks-gallery-caption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-image figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-image figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-image {
			margin: 0 0 1em
		}

		.wp-block-pullquote {
			border-bottom: 4px solid;
			border-top: 4px solid;
			color: currentColor;
			margin-bottom: 1.75em
		}

		.wp-block-pullquote cite,
		.wp-block-pullquote footer,
		.wp-block-pullquote__citation {
			color: currentColor;
			font-size: .8125em;
			font-style: normal;
			text-transform: uppercase
		}

		.wp-block-quote {
			border-left: .25em solid;
			margin: 0 0 1.75em;
			padding-left: 1em
		}

		.wp-block-quote cite,
		.wp-block-quote footer {
			color: currentColor;
			font-size: .8125em;
			font-style: normal;
			position: relative
		}

		.wp-block-quote.has-text-align-right {
			border-left: none;
			border-right: .25em solid;
			padding-left: 0;
			padding-right: 1em
		}

		.wp-block-quote.has-text-align-center {
			border: none;
			padding-left: 0
		}

		.wp-block-quote.is-large,
		.wp-block-quote.is-style-large,
		.wp-block-quote.is-style-plain {
			border: none
		}

		.wp-block-search .wp-block-search__label {
			font-weight: 700
		}

		.wp-block-search__button {
			border: 1px solid #ccc;
			padding: .375em .625em
		}

		:where(.wp-block-group.has-background) {
			padding: 1.25em 2.375em
		}

		.wp-block-separator.has-css-opacity {
			opacity: .4
		}

		.wp-block-separator {
			border: none;
			border-bottom: 2px solid;
			margin-left: auto;
			margin-right: auto
		}

		.wp-block-separator.has-alpha-channel-opacity {
			opacity: 1
		}

		.wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
			width: 100px
		}

		.wp-block-separator.has-background:not(.is-style-dots) {
			border-bottom: none;
			height: 1px
		}

		.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
			height: 2px
		}

		.wp-block-table {
			margin: 0 0 1em
		}

		.wp-block-table td,
		.wp-block-table th {
			word-break: normal
		}

		.wp-block-table figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-table figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-video figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-video figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-video {
			margin: 0 0 1em
		}

		.wp-block-template-part.has-background {
			margin-bottom: 0;
			margin-top: 0;
			padding: 1.25em 2.375em
		}
        .menu-item a.active{
            border-bottom: #38B4B8 solid 3px;
        }
	</style>
	<link rel='stylesheet' id='classic-theme-styles-css' href='{{ asset("wp-includes/css/classic-themes.min.css@ver=6.2.2.css") }}'
		media='all' />
	<style id='global-styles-inline-css'>
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--duotone--dark-grayscale: url('index.html');
			--wp--preset--duotone--grayscale: url('index.html');
			--wp--preset--duotone--purple-yellow: url('index.html');
			--wp--preset--duotone--blue-red: url('index.html');
			--wp--preset--duotone--midnight: url('index.html');
			--wp--preset--duotone--magenta-yellow: url('index.html');
			--wp--preset--duotone--purple-green: url('index.html');
			--wp--preset--duotone--blue-orange: url('index.html');
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
		}

		:where(.is-layout-flex) {
			gap: 0.5em;
		}

		body .is-layout-flow>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		body .is-layout-flow>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		body .is-layout-flow>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		body .is-layout-constrained>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		body .is-layout-constrained>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
			max-width: var(--wp--style--global--content-size);
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained>.alignwide {
			max-width: var(--wp--style--global--wide-size);
		}

		body .is-layout-flex {
			display: flex;
		}

		body .is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		body .is-layout-flex>* {
			margin: 0;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		.wp-block-navigation a:where(:not(.wp-element-button)) {
			color: inherit;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		.wp-block-pullquote {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel='stylesheet' id='contact-form-7-css'
		href='{{ asset("wp-content/plugins/contact-form-7/includes/css/styles.css@ver=5.7.4.css") }}' media='all' />
	<link rel='stylesheet' id='nbcpf-intlTelInput-style-css'
		href='{{ asset("wp-content/plugins/country-phone-field-contact-form-7/assets/css/intlTelInput.min.css@ver=6.2.2.css") }}'
		media='all' />
	<link rel='stylesheet' id='nbcpf-countryFlag-style-css'
		href='{{ asset("wp-content/plugins/country-phone-field-contact-form-7/assets/css/countrySelect.min.css@ver=6.2.2.css") }}'
		media='all' />
	<link rel='stylesheet' id='wpa-css-css' href='{{ asset("wp-content/plugins/honeypot/includes/css/wpa.css@ver=2.1.1.css") }}'
		media='all' />
	<link rel='stylesheet' id='hfe-style-css'
		href='{{ asset("wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css@ver=1.6.13.css") }}'
		media='all' />
	<link rel='stylesheet' id='elementor-frontend-css'
		href='{{ asset("wp-content/plugins/elementor/assets/css/frontend-lite.min.css@ver=3.11.3.css") }}' media='all' />
	<link rel='stylesheet' id='eael-general-css'
		href='{{ asset("wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min.css@ver=5.6.1.css") }}'
		media='all' />
	<link rel='stylesheet' id='eael-674-css'
		href='{{ asset("wp-content/uploads/essential-addons-elementor/eael-674.css@ver=1689417770.css") }}' media='all' />
	<link rel='stylesheet' id='elementor-icons-css'
		href='{{ asset("wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css@ver=5.18.0.css") }}' media='all' />
	<style id='elementor-icons-inline-css'>
		.elementor-add-new-section .elementor-add-templately-promo-button {
			background-color: #5d4fff;
			background-image: url({{ asset("wp-content/plugins/essential-addons-for-elementor-lite/assets/admin/images/templately/logo-icon.svg") }});
			background-repeat: no-repeat;
			background-position: center center;
			margin-left: 5px;
			position: relative;
			bottom: 5px;
		}

		.elementor-add-new-section .elementor-add-templately-promo-button {
			background-color: #5d4fff;
			background-image: url("{{ asset("wp-content/plugins/essential-addons-for-elementor-lite/assets/admin/images/templately/logo-icon.svg") }}");
			background-repeat: no-repeat;
			background-position: center center;
			margin-left: 5px;
			position: relative;
			bottom: 5px;
		}
	</style>
	<link rel='stylesheet' id='swiper-css'
		href='{{  asset("wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css@ver=5.3.6.css") }}' media='all' />
	<link rel='stylesheet' id='elementor-post-23-css'
		href='{{  asset("wp-content/uploads/elementor/css/post-23.css@ver=1678354909.css") }}' media='all' />
	<link rel='stylesheet' id='she-header-style-css'
		href='{{  asset("wp-content/plugins/sticky-header-effects-for-elementor/assets/css/she-header-style.css@ver=1.5.5.css") }}'
		media='all' />
	<link rel='stylesheet' id='elementor-post-674-css'
		href='{{  asset("wp-content/uploads/elementor/css/post-674.css@ver=1689418337.css") }}' media='all' />
	<link rel='stylesheet' id='hfe-widgets-style-css'
		href='{{  asset("wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css@ver=1.6.13.css") }}' media='all' />
	<link rel='stylesheet' id='elementor-post-10-css'
		href='{{  asset("wp-content/uploads/elementor/css/post-10.css@ver=1684064422.css") }}' media='all' />
	<link rel='stylesheet' id='elementor-post-169-css'
		href='{{  asset("wp-content/uploads/elementor/css/post-169.css@ver=1683905107.css") }}' media='all' />
	<link rel='stylesheet' id='qi-addons-for-elementor-grid-style-css'
		href='{{  asset("wp-content/plugins/qi-addons-for-elementor/assets/css/grid.min.css@ver=6.2.2.css") }}' media='all' />
	<link rel='stylesheet' id='qi-addons-for-elementor-helper-parts-style-css'
		href='{{  asset("wp-content/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css@ver=6.2.2.css") }}' media='all' />
	<link rel='stylesheet' id='qi-addons-for-elementor-style-css'
		href='{{  asset("wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css@ver=6.2.2.css") }}' media='all' />
	<link rel='stylesheet' id='font-awesome-css'
		href='{{  asset("wp-content/themes/oceanwp/assets/fonts/fontawesome/css/all.min.css@ver=5.15.1.css") }}' media='all' />
	<link rel='stylesheet' id='simple-line-icons-css'
		href='{{  asset("wp-content/themes/oceanwp/assets/css/third/simple-line-icons.min.css@ver=2.4.0.css") }}' media='all' />
	<link rel='stylesheet' id='oceanwp-style-css'
		href='{{  asset("wp-content/themes/oceanwp/assets/css/style.min.css@ver=3.4.2.css") }}' media='all' />
	<link rel='stylesheet' id='elementor-icons-ekiticons-css'
		href='{{  asset("wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css@ver=2.8.5.css") }}'
		media='all' />
	<link rel='stylesheet' id='skb-cife-elegant_icon-css'
		href='{{  asset("wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/elegant.css@ver=1.0.5.css") }}' media='all' />
	<link rel='stylesheet' id='skb-cife-linearicons_icon-css'
		href='{{  asset("wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/linearicons.css@ver=1.0.5.css") }}'
		media='all' />
	<link rel='stylesheet' id='skb-cife-themify_icon-css'
		href='{{  asset("wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/themify.css@ver=1.0.5.css") }}' media='all' />
	<link rel='stylesheet' id='ekit-widget-styles-css'
		href='{{ asset("wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css@ver=2.8.5.css") }}'
		media='all' />
	<link rel='stylesheet' id='ekit-responsive-css'
		href='{{ asset("wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css@ver=2.8.5.css") }}' media='all' />
	<link rel='stylesheet' id='oe-widgets-style-css'
		href='{{ asset("wp-content/plugins/ocean-extra/assets/css/widgets.css@ver=6.2.2.css") }}' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css'
		href='https://fonts.googleapis.com/css?family=Yantramanav%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CInter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.2.2'
		media='all' />
	<link rel='stylesheet' id='elementor-icons-shared-0-css'
		href='{{ asset("wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css@ver=5.15.3.css") }}'
		media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-solid-css'
		href='{{ asset("wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css@ver=5.15.3.css") }}' media='all' />
	<link rel='stylesheet' id='elementor-icons-skb_cife-elegant-icon-css'
		href='{{ asset("wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/elegant.css@ver=1.0.5.css") }}' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-regular-css'
		href='{{ asset("wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css@ver=5.15.3.css") }}' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-brands-css'
		href='{{ asset("wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css@ver=5.15.3.css") }}' media='all' />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<script src='{{ asset("wp-includes/js/jquery/jquery.min.js@ver=3.6.4") }}' id='jquery-core-js'></script>
	<script src='{{ asset("wp-includes/js/jquery/jquery-migrate.min.js@ver=3.4.0") }}' id='jquery-migrate-js'></script>
	<script src='{{ asset("wp-content/plugins/sticky-header-effects-for-elementor/assets/js/she-header.js@ver=1.5.5") }}'
		id='she-header-js'></script>


	<!-- /end HFCM by 99 Robots -->
	<!-- HFCM by 99 Robots - Snippet # 2: Mailchimp -->
	<script
		id="mcjs">!function (c, h, i, m, p) { m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p) }(document, "script", "https://chimpstatic.com/mcjs-connected/js/users/8a6fc758abdd52e25bb09b814/a901e6499987d5faacb15ff78.js");</script>
	<!-- /end HFCM by 99 Robots -->
	<!-- HFCM by 99 Robots - Snippet # 3: google search console -->
	<meta name="google-site-verification" content="3kdARpEy7t-GAsmp8OQyPXCvJzmSfQA8_liPgedvNhM" />
	<!-- /end HFCM by 99 Robots -->

	<link rel="icon" href="{{ asset("wp-content/uploads/2023/02/cropped-building-pattern-32x32.jpg") }}" sizes="32x32" />
	<link rel="icon" href="{{ asset("wp-content/uploads/2023/02/cropped-building-pattern-192x192.jpg") }}" sizes="192x192" />
	<link rel="apple-touch-icon" href="{{ asset("wp-content/uploads/2023/02/cropped-building-pattern-180x180.jpg") }}" />
	<meta name="msapplication-TileImage"
		content="{{ asset("wp-content/uploads/2023/02/cropped-building-pattern-270x270.jpg") }}" />
	<style id="wp-custom-css">
		/** Start Block Kit CSS:143-3-7969bb877702491bc5ca272e536ada9d **/
		.envato-block__preview {
			overflow: visible
		}

		/* Material Button Click Effect */
		.envato-kit-140-material-hit .menu-item a,
		.envato-kit-140-material-button .elementor-button {
			background-position: center;
			transition: background 0.8s
		}

		.envato-kit-140-material-hit .menu-item a:hover,
		.envato-kit-140-material-button .elementor-button:hover {
			background: radial-gradient(circle, transparent 1%, #fff 1%) center/15000%
		}

		.envato-kit-140-material-hit .menu-item a:active,
		.envato-kit-140-material-button .elementor-button:active {
			background-color: #FFF;
			background-size: 100%;
			transition: background 0s
		}

		/* Field Shadow */
		.envato-kit-140-big-shadow-form .elementor-field-textual {
			box-shadow: 0 20px 30px rgba(0, 0, 0, .05)
		}

		/* FAQ */
		.envato-kit-140-faq .elementor-accordion .elementor-accordion-item {
			border-width: 0 0 1px !important
		}

		/* Scrollable Columns */
		.envato-kit-140-scrollable {
			height: 100%;
			overflow: auto;
			overflow-x: hidden
		}

		/* ImageBox:No Space */
		.envato-kit-140-imagebox-nospace:hover {
			transform: scale(1.1);
			transition: all 0.3s
		}

		.envato-kit-140-imagebox-nospace figure {
			line-height: 0
		}

		.envato-kit-140-slide .elementor-slide-content {
			background: #FFF;
			margin-left: -60px;
			padding: 1em
		}

		.envato-kit-140-carousel .slick-active:not(.slick-current) img {
			padding: 20px !important;
			transition: all .9s
		}

		/** End Block Kit CSS:143-3-7969bb877702491bc5ca272e536ada9d **/
		/* registration form */
		.fname,
		.lname,
		.job,
		.company,
		.industry,
		.email,
		.number,
		.interest,
		.mobilenum,
		.ticket {
			width: 50%;
			padding-right: 10px
		}

		.message {
			padding-right: 10px
		}

		.row-name,
		.row-job,
		.row-email,
		.row-phone,
		.row-ticket {
			display: flex
		}

		.wpcf7 input:not([type=submit]),
		.wpcf7 select,
		.wpcf7 textarea {
			padding: 8px
		}

		/** Start Block Kit CSS:141-3-1d55f1e76be9fb1a8d9de88accbe962f **/
		.envato-kit-138-bracket .elementor-widget-container>*:before {
			content: "[";
			color: #ffab00;
			display: inline-block;
			margin-right: 4px;
			line-height: 1em;
			position: relative;
			top: -1px
		}

		.envato-kit-138-bracket .elementor-widget-container>*:after {
			content: "]";
			color: #ffab00;
			display: inline-block;
			margin-left: 4px;
			line-height: 1em;
			position: relative;
			top: -1px
		}

		/** End Block Kit CSS:141-3-1d55f1e76be9fb1a8d9de88accbe962f **/
		/** Start Block Kit CSS:71-3-d415519effd9e11f35d2438c58ea7ebf **/
		.envato-block__preview {
			overflow: visible
		}

		/** End Block Kit CSS:71-3-d415519effd9e11f35d2438c58ea7ebf **/
	</style>
	<!-- OceanWP CSS -->
	<style type="text/css">
		/* Header CSS */
		#site-header.has-header-media .overlay-header-media {
			background-color: rgba(0, 0, 0, 0.5)
		}
        .elementor-10 .elementor-element.elementor-element-08733a2:not(.elementor-motion-effects-element-type-background), .elementor-10 .elementor-element.elementor-element-08733a2 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            padding: 0.5rem 50px;
        }
	</style>
    <?php
    if (session()->has('lang') && session('lang') == 'ar') {
    ?>
    @include('layout.ar_font')
    <?php
    }
    ?>
    @stack('css')
</head>
