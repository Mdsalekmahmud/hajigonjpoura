<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dncc.gov.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Aug 2026 13:55:07 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        html {
            --color-primary-bg: #00A63E;
            --color-primary-light: #2DAB5B;
            --color-primary-dark: #008532;
            --color-primary-text: #ffffff;
            --color-secondary-bg: #DC2626;
            --color-secondary-light: #FEF2F2;
            --color-secondary-dark: #ED3131;
            --color-secondary-text: #ffffff;
            --color-normal-bg: #ffffff;
            --color-normal-light: #f0f0f0;
            --color-normal-dark: #e0e0e0;
            --color-normal-text: #000000;
            --color-dark-bg: #000000;
            --color-dark-light: #202020;
            --color-dark-dark: #404040;
            --color-dark-text: #ffffff;
            --color-success-bg: #28a745;
            --color-success-text: #ffffff;
            --color-danger-bg: #dc3545;
            --color-danger-text: #dc3545;
            --color-warning-bg: #FF6600;
            --color-warning-text: #FF6600;
            --color-info-bg: #17a2b8;
            --color-info-text: #ffffff;
            --color-link-normal: #1568b2;
            --color-link-dark: #1b81dd;
            --color-border-normal: #d0d0d0;
            --color-border-dark: #909090;
            --background-primary-image: url(site-assets/images/bg.png);
            --background-primary-repeat: repeat;
            --background-primary-position: center center;
            --background-primary-color: #ffffff;
            --background-secondary-image: url(site-assets/images/bg.png);
            --background-secondary-repeat: repeat;
            --background-secondary-position: center center;
            --background-secondary-color: #ffffff;
            --container-small: 600px;
            --container-medium: 900px;
            --container-large: 1200px;
            --spacing-small: 8px;
            --spacing-medium: 16px;
            --spacing-large: 24px;
            --radius-small: 4px;
            --radius-medium: 8px;
            --radius-large: 16px;
            --shadow-small: 0px 2px 4px rgba(0, 0, 0, 0.1);
            --shadow-medium: 0px 4px 8px rgba(0, 0, 0, 0.1);
            --shadow-large: 0px 8px 16px rgba(0, 0, 0, 0.1);
            --text-small: 0.75rem;
            --text-medium: 0.9rem;
            --text-large: 1.25rem;
            --font-heading-en: NotoSansBengali-Regular, sans-serif;
            --font-heading-bn: NotoSansBengali-Regular, sans-serif;
            --font-primary-en: NotoSansBengali-Regular, sans-serif;
            --font-primary-bn: NotoSansBengali-Regular, sans-serif;
            --font-secondary-en: NotoSansBengali-Regular, sans-serif;
            --font-secondary-bn: NotoSansBengali-Regular, sans-serif;
            --typography-h1-font-family: var(--font-heading);
            --typography-h1-font-weight: 700;
            --typography-h1-font-size: 32px;
            --typography-h1-line-height: 1.2;
            --typography-h2-font-family: var(--font-heading);
            --typography-h2-font-weight: 700;
            --typography-h2-font-size: 28px;
            --typography-h2-line-height: 1.2;
            --typography-h3-font-family: var(--font-heading);
            --typography-h3-font-weight: 600;
            --typography-h3-font-size: 24px;
            --typography-h3-line-height: 1.5;
            --typography-h4-font-family: var(--font-heading);
            --typography-h4-font-weight: 500;
            --typography-h4-font-size: 20px;
            --typography-h4-line-height: 1.5;
            --typography-h5-font-family: var(--font-heading);
            --typography-h5-font-weight: 500;
            --typography-h5-font-size: 18px;
            --typography-h5-line-height: 1.5;
            --typography-h6-font-family: var(--font-heading);
            --typography-h6-font-weight: 400;
            --typography-h6-font-size: 16px;
            --typography-h6-line-height: 1.5;
            --typography-body-font-family: var(--font-primary);
            --typography-body-font-weight: 400;
            --typography-body-font-size: 14px;
            --typography-body-line-height: 1.2;
            --typography-p-font-family: var(--font-primary);
            --typography-p-font-weight: 400;
            --typography-p-font-size: 14px;
            --typography-p-line-height: 1.2;
            --typography-a-font-family: var(--font-secondary);
            --typography-a-font-weight: 400;
            --typography-a-font-size: 14px;
            --typography-a-line-height: 1.2;
        }

        html,html[lang="en"] {
            --font-heading: NotoSansBengali-Regular, sans-serif;
            --font-primary: NotoSansBengali-Regular, sans-serif;
            --font-secondary: NotoSansBengali-Regular, sans-serif;
        }

        html[lang="bn"] {
            --font-heading: NotoSansBengali-Regular, sans-serif;
            --font-primary: NotoSansBengali-Regular, sans-serif;
            --font-secondary: NotoSansBengali-Regular, sans-serif;
        }

        /* ===== CONTAINER ===== */
        body {
            overflow-x: hidden;
        }

        .col {
            flex: 0 0 auto;
        }

        .container-row,
        .widget-container-row {
            --col-gutter-x: var(--spacing-medium);
            --col-gutter-y: 0;
            /*
  --col-gutter-y: var(--spacing-medium);
  */
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--col-gutter-y));
            margin-right: calc(-.5 * var(--col-gutter-x));
            margin-left: calc(-.5 * var(--col-gutter-x))
                /*
  width:calc(100% + var(--col-gutter-x));
  margin-top:calc(-1 * var(--col-gutter-y));
  margin-left:calc(-1 * var(--col-gutter-x));
  */
        }

        .container-row>*,
        .widget-container-row>* {
            box-sizing: border-box;
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--col-gutter-x) * .5);
            padding-left: calc(var(--col-gutter-x) * .5);
            margin-top: var(--col-gutter-y)
                /*
  width:calc(100% - var(--col-gutter-x));
  max-width:calc(100% - var(--col-gutter-x));
  margin-top:var(--col-gutter-y);
  margin-left:var(--col-gutter-x);
  */
        }

        @media (min-width:600px) {
            .container-col-1 {
                width: 8.3333%;
            }

            .container-col-2 {
                width: 16.666%;
            }

            .container-col-3 {
                width: 25%;
            }

            .container-col-4 {
                width: 33.333%;
            }

            .container-col-5 {
                width: 41.666%;
            }

            .container-col-6 {
                width: 50%;
            }

            .container-col-7 {
                width: 58.333%;
            }

            .container-col-8 {
                width: 66.666%;
            }

            .container-col-9 {
                width: 75%;
            }

            .container-col-10 {
                width: 83.333%;
            }

            .container-col-11 {
                width: 91.666%;
            }

            .container-col-12 {
                width: 100%;
            }
        }
    </style>
    <!-- analytics script -->
    <!-- Matomo Id n/a -->
    <script defer data-domain="dncc.gov.bd"
        src="../analytics-plausible.portal.gov.bd/js/script.file-downloads.hash.outbound-links.pageview-props.tagged-events.js">
    </script>
    <script>
        window.plausible = window.plausible || function() {
            (window.plausible.q = window.plausible.q || []).push(arguments)
        }
    </script>
    <link rel="stylesheet" href="{{ asset('assets/css/phosphor-fill.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/phosphor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/HeaderWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/OfficeFindThreeWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/GlobalSearchWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/LanguageSwitcherWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/BannerSliderImageWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/MenusExpandableWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/MenusWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/NoticeNewsCardWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/TopNewsCardWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/ServiceBoxExpandableStackWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/ServiceBoxStackWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/ServiceBoxWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/HomePhotoSliderWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/popup.html') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/AccessibilityWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/GoToTopWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/PersonCardStackWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/PersonCardWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/CentralEServiceLinkWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/SidebarBarLinkWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/MyGovServiceImageLinkWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/OfficeDigitalServiceImageLinkWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/ImportantLinkCardWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/NationalAnthemWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/BdWorkersTrustBoardImageLinkWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/SocialMediaCardWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/SocialLinkMediaWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/InnovationCornerWidget.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/css/widget-assets/css/OfficeAttachmentApplicationFormWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/CentralBlocksSidebarWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/EmergencyHotlineListCardWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/FooterWidget.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-assets/css/BlockWidget.css') }}">
    <style>
        /* END */
    </style>
    <link rel="stylesheet"
        href="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/npf-themes/theme_2025/assets/css/index.css">

    <!-- RENDERING 687f4277a79706ab75fb122d : 1786110341602 -->
    <title>হোম | হাজীগঞ্জ পৌরসভা কার্যালয়</title>
    <meta name="description" content="" />
    <meta name="keywords"
        content="হোম, ঢাকা উত্তর সিটি কর্পোরেশন, http://dncc.gov.bd, Bangladesh, Bangladesh National Portal, Government of the People's Republic of Bangladesh, গণপ্রজাতন্ত্রী বাংলাদেশ সরকার" />
    <link rel="canonical" href="index.html" />
    <link rel="icon" type="image/x-icon" href="site-assets/images/favicon.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="site-assets/images/favicon.ico" />
    <link rel="shortcut icon" type="image/png" href="site-assets/images/favicon.png" />
    <link rel="shortcut icon" type="image/png" href="site-assets/images/favicon.png" />
    <meta name="author" content="হাজীগঞ্জ পৌরসভা কার্যালয়" />
    <meta property="fb:app_id" content="..............." />
    <meta property="og:url" content="http://dncc.gov.bd/" />
    <meta property="og:site_name" content="হাজীগঞ্জ পৌরসভা কার্যালয়" />
    <meta property="og:type" content="article" />
    <meta property="og:article:section" content="হোম | হাজীগঞ্জ পৌরসভা কার্যালয়" />
    <meta property="og:article:author" content="হাজীগঞ্জ পৌরসভা কার্যালয়" />
    <meta property="og:article:tag" content="হাজীগঞ্জ পৌরসভা কার্যালয়" />
    <meta property="og:article:tag" content="Bangladesh" />
    <meta property="og:article:tag" content="Bangladesh National Portal" />
    <meta property="og:article:tag" content="Government of the People's Republic of Bangladesh" />
    <meta property="og:article:tag" content="গণপ্রজাতন্ত্রী বাংলাদেশ সরকার" />
    <meta property="og:title" content="হোম | হাজীগঞ্জ পৌরসভা কার্যালয়" />
    <meta property="og:description" content="" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="687" />
    <meta property="og:image:height" content="570" />
    <meta property="og:image:secure_url" content="http://dncc.gov.bd/site-assets/images/portal_banner.jpg" />
    <meta property="og:image" content="http://dncc.gov.bd/site-assets/images/portal_banner.jpg" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <div class="container">
        <div class="header">
            <div data-section_type="header" class="droppable">
                <section data-widget_type="widget" data-widget_name="HeaderWidget"
                    class="widget header-widget-section"
                    style="color: var(--color-primary-text); background-color: var(--color-primary-bg)!important;">
                    <div class="header-left-section"> <a class="header-title" href="http://bangladesh.gov.bd/"
                            title="বাংলাদেশ জাতীয় তথ্য বাতায়ন"> বাংলাদেশ জাতীয় তথ্য বাতায়ন </a> </div>
                    <div class="header-left-section">
                        <div class="widget header-dropdown custom-items-center top-menu office-findthree-widget office-findv2-widget"
                            data-widget-id="i8843429953"
                            data-preselect='{&#34;officeTypeId&#34;:&#34;6915c8c02d68425160fc40f1&#34;,&#34;officeLevelId&#34;:&#34;626a41e552093d4768e64b10&#34;,&#34;divisionId&#34;:&#34;6a75de20c4cf6cb34d4bb4e2&#34;,&#34;districtId&#34;:&#34;6a75de20c4cf6cb34d4bb4e3&#34;,&#34;upazilaId&#34;:&#34;6a75de20c4cf6cb34d4bb4e4&#34;,&#34;unionId&#34;:&#34;6a75de20c4cf6cb34d4bb4e5&#34;,&#34;officeId&#34;:&#34;687f4277a79706ab75fb122d&#34;}'>
                            <div class="office-group"> <select name="officeType" id="officeType_i8843429953"
                                    data-lang="bn" title="অধিদপ্তর"
                                    onchange="this.title = this.options[this.selectedIndex].text; window.handleOfficeTypeChangeV3('i8843429953', this, 'i4291311358', 'i8403814732')">
                                    <option value="">অফিসের ধরণ নির্বাচন করুন</option>
                                    <option value="6915c8c02d68425160fc40ec" title="স্বায়ত্তশাসিত"
                                        data-allow-levels='{&#34;head_office&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b10&#34;,&#34;sort_order&#34;:2},&#34;regional_office&#34;:{&#34;id&#34;:&#34;68ef33e2b74cbf429ba5968c&#34;,&#34;sort_order&#34;:3},&#34;divisional_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b11&#34;,&#34;sort_order&#34;:4},&#34;district_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b13&#34;,&#34;sort_order&#34;:5},&#34;city_corporation_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b24&#34;,&#34;sort_order&#34;:6},&#34;upazila_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b14&#34;,&#34;sort_order&#34;:7},&#34;pourashava_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b34&#34;,&#34;sort_order&#34;:8}}'
                                        data-geo-depth="0"> স্বায়ত্তশাসিত </option>
                                    <option value="626a41e552093d4768e64b12" title="মন্ত্রণালয়"
                                        data-allow-levels='{&#34;ministry_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b09&#34;,&#34;sort_order&#34;:1}}'
                                        data-geo-depth="0"> মন্ত্রণালয় </option>
                                    <option value="687df048256c87dc78f1a064" title="মন্ত্রণালয় বিভাগ"
                                        data-allow-levels='{&#34;ministry_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b09&#34;,&#34;sort_order&#34;:1}}'
                                        data-geo-depth="0"> মন্ত্রণালয় বিভাগ </option>
                                    <option value="6915c8c02d68425160fc40f1" title="অধিদপ্তর"
                                        data-allow-levels='{&#34;head_office&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b10&#34;,&#34;sort_order&#34;:2}}'
                                        data-geo-depth="0" selected> অধিদপ্তর </option>
                                    <option value="6a55df7c7e4bf711c06b81ef" title="কর্পোরেশন"
                                        data-allow-levels='{&#34;head_office&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b10&#34;,&#34;sort_order&#34;:2},&#34;regional_office&#34;:{&#34;id&#34;:&#34;68ef33e2b74cbf429ba5968c&#34;,&#34;sort_order&#34;:3},&#34;divisional_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b11&#34;,&#34;sort_order&#34;:4},&#34;district_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b13&#34;,&#34;sort_order&#34;:5},&#34;city_corporation_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b24&#34;,&#34;sort_order&#34;:6},&#34;upazila_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b14&#34;,&#34;sort_order&#34;:7},&#34;pourashava_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b34&#34;,&#34;sort_order&#34;:8}}'
                                        data-geo-depth="0"> কর্পোরেশন </option>
                                    <option value="6a55e0197e4bf711c06b81f2" title="কমিশন"
                                        data-allow-levels='{&#34;head_office&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b10&#34;,&#34;sort_order&#34;:2},&#34;regional_office&#34;:{&#34;id&#34;:&#34;68ef33e2b74cbf429ba5968c&#34;,&#34;sort_order&#34;:3},&#34;divisional_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b11&#34;,&#34;sort_order&#34;:4},&#34;district_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b13&#34;,&#34;sort_order&#34;:5},&#34;city_corporation_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b24&#34;,&#34;sort_order&#34;:6},&#34;upazila_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b14&#34;,&#34;sort_order&#34;:7},&#34;pourashava_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b34&#34;,&#34;sort_order&#34;:8}}'
                                        data-geo-depth="0"> কমিশন </option>
                                    <option value="6a55dfbd7e4bf711c06b81f0" title="কোম্পানি"
                                        data-allow-levels='{&#34;head_office&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b10&#34;,&#34;sort_order&#34;:2},&#34;regional_office&#34;:{&#34;id&#34;:&#34;68ef33e2b74cbf429ba5968c&#34;,&#34;sort_order&#34;:3},&#34;divisional_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b11&#34;,&#34;sort_order&#34;:4},&#34;district_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b13&#34;,&#34;sort_order&#34;:5},&#34;city_corporation_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b24&#34;,&#34;sort_order&#34;:6},&#34;upazila_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b14&#34;,&#34;sort_order&#34;:7},&#34;pourashava_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b34&#34;,&#34;sort_order&#34;:8}}'
                                        data-geo-depth="0"> কোম্পানি </option>
                                    <option value="6a55dfeb7e4bf711c06b81f1" title="কর্তৃপক্ষ/অথরিটি"
                                        data-allow-levels='{&#34;head_office&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b10&#34;,&#34;sort_order&#34;:2},&#34;regional_office&#34;:{&#34;id&#34;:&#34;68ef33e2b74cbf429ba5968c&#34;,&#34;sort_order&#34;:3},&#34;divisional_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b11&#34;,&#34;sort_order&#34;:4},&#34;district_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b13&#34;,&#34;sort_order&#34;:5},&#34;city_corporation_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b24&#34;,&#34;sort_order&#34;:6},&#34;upazila_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b14&#34;,&#34;sort_order&#34;:7},&#34;pourashava_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b34&#34;,&#34;sort_order&#34;:8}}'
                                        data-geo-depth="0"> কর্তৃপক্ষ/অথরিটি </option>
                                    <option value="6a55e03e7e4bf711c06b81f3" title="এজেন্সী"
                                        data-allow-levels='{&#34;head_office&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b10&#34;,&#34;sort_order&#34;:2},&#34;regional_office&#34;:{&#34;id&#34;:&#34;68ef33e2b74cbf429ba5968c&#34;,&#34;sort_order&#34;:3},&#34;divisional_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b11&#34;,&#34;sort_order&#34;:4},&#34;district_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b13&#34;,&#34;sort_order&#34;:5},&#34;city_corporation_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b24&#34;,&#34;sort_order&#34;:6},&#34;upazila_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b14&#34;,&#34;sort_order&#34;:7},&#34;pourashava_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b34&#34;,&#34;sort_order&#34;:8}}'
                                        data-geo-depth="0"> এজেন্সী </option>
                                    <option value="68ef52c26939cf029f3bb06b" title="ব্যাংক / বীমা / আর্থিক প্রতিষ্ঠান"
                                        data-allow-levels='{&#34;head_office&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b10&#34;,&#34;sort_order&#34;:2},&#34;regional_office&#34;:{&#34;id&#34;:&#34;68ef33e2b74cbf429ba5968c&#34;,&#34;sort_order&#34;:3},&#34;divisional_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b11&#34;,&#34;sort_order&#34;:4},&#34;district_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b13&#34;,&#34;sort_order&#34;:5},&#34;city_corporation_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b24&#34;,&#34;sort_order&#34;:6},&#34;upazila_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b14&#34;,&#34;sort_order&#34;:7},&#34;pourashava_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b34&#34;,&#34;sort_order&#34;:8}}'
                                        data-geo-depth="0"> ব্যাংক / বীমা / আর্থিক প্রতিষ্ঠান </option>
                                    <option value="6915c8c02d68425160fc40ed" title="বিভাগীয় পোর্টাল"
                                        data-allow-levels='{&#34;divisional_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b11&#34;,&#34;sort_order&#34;:4}}'
                                        data-geo-depth="1"> বিভাগীয় পোর্টাল </option>
                                    <option value="6915c8c02d68425160fc40ef" title="জেলা পোর্টাল"
                                        data-allow-levels='{&#34;district_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b13&#34;,&#34;sort_order&#34;:5}}'
                                        data-geo-depth="2"> জেলা পোর্টাল </option>
                                    <option value="626a41e552093d4768e64b20" title="পৌরসভা পোর্টাল"
                                        data-allow-levels='{&#34;pourashava_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b34&#34;,&#34;sort_order&#34;:8}}'
                                        data-geo-depth="3"> পৌরসভা পোর্টাল </option>
                                    <option value="626a41e552093d4768e64b16" title="উপজেলা পোর্টাল"
                                        data-allow-levels='{&#34;upazila_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b14&#34;,&#34;sort_order&#34;:7}}'
                                        data-geo-depth="3"> উপজেলা পোর্টাল </option>
                                    <option value="6915c8c02d68425160fc40ee" title="ইউনিয়ন পোর্টাল"
                                        data-allow-levels='{&#34;union_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b15&#34;,&#34;sort_order&#34;:9}}'
                                        data-geo-depth="4"> ইউনিয়ন পোর্টাল </option>
                                    <option value="687df048256c87dc78f1a066" title="রেজাল্ট"
                                        data-allow-levels='{&#34;head_office&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b10&#34;,&#34;sort_order&#34;:2},&#34;regional_office&#34;:{&#34;id&#34;:&#34;68ef33e2b74cbf429ba5968c&#34;,&#34;sort_order&#34;:3},&#34;divisional_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b11&#34;,&#34;sort_order&#34;:4},&#34;district_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b13&#34;,&#34;sort_order&#34;:5},&#34;city_corporation_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b24&#34;,&#34;sort_order&#34;:6},&#34;upazila_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b14&#34;,&#34;sort_order&#34;:7},&#34;pourashava_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b34&#34;,&#34;sort_order&#34;:8}}'
                                        data-geo-depth="0"> রেজাল্ট </option>
                                    <option value="687df048256c87dc78f1a067" title="প্রকল্প"
                                        data-allow-levels='{&#34;head_office&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b10&#34;,&#34;sort_order&#34;:2},&#34;regional_office&#34;:{&#34;id&#34;:&#34;68ef33e2b74cbf429ba5968c&#34;,&#34;sort_order&#34;:3},&#34;divisional_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b11&#34;,&#34;sort_order&#34;:4},&#34;district_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b13&#34;,&#34;sort_order&#34;:5},&#34;city_corporation_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b24&#34;,&#34;sort_order&#34;:6},&#34;upazila_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b14&#34;,&#34;sort_order&#34;:7},&#34;pourashava_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b34&#34;,&#34;sort_order&#34;:8}}'
                                        data-geo-depth="0"> প্রকল্প </option>
                                    <option value="68ef63ed4aea2e96873533f9" title="বিদেশী দূতাবাস/মিশন"
                                        data-allow-levels='{&#34;embassy&#34;:{&#34;id&#34;:&#34;68ef394bec5fb394776a34fd&#34;,&#34;sort_order&#34;:16},&#34;high_commission&#34;:{&#34;id&#34;:&#34;68ef396f6c37f3c4fc8f72fd&#34;,&#34;sort_order&#34;:17},&#34;permanent_mission&#34;:{&#34;id&#34;:&#34;68ef39aa946f997b55bbdfd3&#34;,&#34;sort_order&#34;:18},&#34;consulate_general&#34;:{&#34;id&#34;:&#34;68ef39aa946f997b55bbdfd3&#34;,&#34;sort_order&#34;:19},&#34;consulate&#34;:{&#34;id&#34;:&#34;68ef3aead613d2f8d33344e7&#34;,&#34;sort_order&#34;:20},&#34;legation&#34;:{&#34;id&#34;:&#34;68ef3b2942c4aed96ee13c0f&#34;,&#34;sort_order&#34;:21},&#34;honorary_consul&#34;:{&#34;id&#34;:&#34;68ef3b2942c4aed96ee13c0f&#34;,&#34;sort_order&#34;:22}}'
                                        data-geo-depth="0"> বিদেশী দূতাবাস/মিশন </option>
                                    <option value="68ef64f9d5ac0d4ed289703f" title="জেলা পরিষদ পোর্টাল"
                                        data-allow-levels='{&#34;district_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b13&#34;,&#34;sort_order&#34;:5}}'
                                        data-geo-depth="2"> জেলা পরিষদ পোর্টাল </option>
                                    <option value="6680e6f177db1f8cd71d07d2" title="সিটি কর্পোরেশন পোর্টাল"
                                        data-allow-levels='{&#34;city_corporation_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b24&#34;,&#34;sort_order&#34;:6}}'
                                        data-geo-depth="3"> সিটি কর্পোরেশন পোর্টাল </option>
                                    <option value="687df048256c87dc78f1a069" title="প্রশিক্ষণ"
                                        data-allow-levels='{&#34;head_office&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b10&#34;,&#34;sort_order&#34;:2},&#34;regional_office&#34;:{&#34;id&#34;:&#34;68ef33e2b74cbf429ba5968c&#34;,&#34;sort_order&#34;:3},&#34;divisional_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b11&#34;,&#34;sort_order&#34;:4},&#34;district_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b13&#34;,&#34;sort_order&#34;:5},&#34;city_corporation_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b24&#34;,&#34;sort_order&#34;:6},&#34;upazila_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b14&#34;,&#34;sort_order&#34;:7},&#34;pourashava_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b34&#34;,&#34;sort_order&#34;:8}}'
                                        data-geo-depth="0"> প্রশিক্ষণ </option>
                                    <option value="6915c8c02d68425160fc40f0" title="শিক্ষা প্রতিষ্ঠান"
                                        data-allow-levels='{&#34;school_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b17&#34;,&#34;sort_order&#34;:10},&#34;college&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b18&#34;,&#34;sort_order&#34;:11},&#34;university&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b19&#34;,&#34;sort_order&#34;:12},&#34;madrasha&#34;:{&#34;id&#34;:&#34;68ef389234cf7ce9b5508e1c&#34;,&#34;sort_order&#34;:13},&#34;nursing&#34;:{&#34;id&#34;:&#34;68ef38c7d4a2b15e5259b6a7&#34;,&#34;sort_order&#34;:14},&#34;ploytech&#34;:{&#34;id&#34;:&#34;68ef391c0e99a31ecfa0a2ed&#34;,&#34;sort_order&#34;:15}}'
                                        data-geo-depth="0"> শিক্ষা প্রতিষ্ঠান </option>
                                    <option value="687df048256c87dc78f1a068" title="সরকারি মাঠ পর্যায়ের অফিস"
                                        data-allow-levels='{&#34;regional_office&#34;:{&#34;id&#34;:&#34;68ef33e2b74cbf429ba5968c&#34;,&#34;sort_order&#34;:3},&#34;divisional_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b11&#34;,&#34;sort_order&#34;:4},&#34;district_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b13&#34;,&#34;sort_order&#34;:5},&#34;city_corporation_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b24&#34;,&#34;sort_order&#34;:6},&#34;upazila_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b14&#34;,&#34;sort_order&#34;:7},&#34;pourashava_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b34&#34;,&#34;sort_order&#34;:8},&#34;union_level&#34;:{&#34;id&#34;:&#34;626a41e552093d4768e64b15&#34;,&#34;sort_order&#34;:9}}'
                                        data-geo-depth="0"> সরকারি মাঠ পর্যায়ের অফিস </option>
                                </select>
                                <div id="i4291311358" class='dynamic-dropdowns'></div> <button id="i8403814732"
                                    onclick="window.handleGoClickV3('i4291311358')" disabled>দেখুন</button>
                            </div>
                        </div>
                    </div>
                    <div class="global-searchbar custom-items-center ">
                        <div class='widget global-search-widget'> <input class="input-search" id="8441170914"
                                name="key" placeholder="এখানে খুঁজুন..."
                                onkeypress="window.handleSearchEnter('8441170914', arguments[0])" /> <button
                                type="button" class="btn-search" onclick="window.handleSearchClick('8441170914')">
                                অনুসন্ধান </button> </div>
                        <div class='widget language-switcher-widget'> <input type="hidden" name="lang"
                                id="1758871396" value="bn" />
                            {{-- <button type="button" id="6927949211"
                                data-type="bn" class="btn-lang-change"
                                onclick="window.toggleLanguage('6927949211', '1758871396')"> English </button> </div> --}}
                        </div>
                </section>
                <div data-widget_type="widget" data-widget_name="BannerSliderImageWidget"
                    class="widget banner-slider-image-widget">
                    <div class="home-carousel"> <a class="slider images" target="_blank"> <img class="slider-image"
                                src="{{ asset('storage/slider_1_Hajigonj_big_mosque.jpg') }}" alt="ত্রান বিতরণ"> </a>
                        <a class="slider images" target="_blank"> <img class="slider-image"
                                src="{{ asset('storage/slider_2.jpg') }}" alt="street light"> </a> <a
                            class="slider images" target="_blank"> <img class="slider-image"
                                src="{{ asset('storage/slider_3.jpg') }}" alt="Road"> </a>
                        {{-- <a
                            class="slider images" target="_blank"> <img class="slider-image"
                                src="{{ asset('storage/slider_4.jpg') }}" alt="graveyard"> </a>
                        <a class="slider images" target="_blank"> <img class="slider-image"
                                src="{{ asset('storage/slider_5.jpg') }}" alt="জমা পানি ফেলে দিন তিন দিনে এক দিন">
                        </a> --}}
                        <div class="slider-overlay widget-container-row">
                            <div class="slider-left container-col-4"> <a href="index.html"> <img class="office-logo"
                                        style="width: 150px; height: 150px;" src="{{ asset('storage/logo.jpg') }}"
                                        alt="Office Logo"> </a>
                                <div class="office-left-section">
                                    <h1><a style="text-decoration: none" href="index.html" class="office-title">
                                            হাজীগঞ্জ পৌরসভা কার্যালয় </a></h1>
                                    <!--<p class="office-subtitle">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</p>-->
                                    <p class="office-subtitle">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</p>
                                </div>
                            </div> <!-- <div class="container-col-4">--> <!-- <p class="office-caption">-->
                            <!-- </p>--> <!-- </div>-->
                            <div class="slider-controls container-col-4" style=" opacity: 20%;"> <button
                                    class="nav-btn slider-previous">
                                    <svg width="8" height="13" viewBox="0 0 8 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.70508 11.7868L1.79976 6.88151L6.70508 1.9762" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> </button> <button class="nav-btn slider-play"> <svg width="21"
                                        height="21" viewBox="0 0 21 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.6445 20.8813C13.2967 20.8813 15.8402 19.8278 17.7156 17.9524C19.591 16.0771 20.6445 13.5335 20.6445 10.8813C20.6445 8.22918 19.591 5.68564 17.7156 3.81028C15.8402 1.93492 13.2967 0.881348 10.6445 0.881348C7.99237 0.881348 5.44883 1.93492 3.57346 3.81028C1.6981 5.68564 0.644531 8.22918 0.644531 10.8813C0.644531 13.5335 1.6981 16.0771 3.57346 17.9524C5.44883 19.8278 7.99237 20.8813 10.6445 20.8813ZM10.0883 7.34135C9.90003 7.21575 9.68121 7.14361 9.45518 7.13263C9.22914 7.12165 9.00436 7.17224 8.80482 7.27901C8.60529 7.38577 8.43848 7.5447 8.32219 7.73884C8.2059 7.93298 8.1445 8.15504 8.14453 8.38135V13.3813C8.1445 13.6077 8.2059 13.8297 8.32219 14.0239C8.43848 14.218 8.60529 14.3769 8.80482 14.4837C9.00436 14.5905 9.22914 14.641 9.45518 14.6301C9.68121 14.6191 9.90003 14.5469 10.0883 14.4213L13.8383 11.9213C14.0095 11.8072 14.1498 11.6525 14.2469 11.4711C14.344 11.2897 14.3948 11.0871 14.3948 10.8813C14.3948 10.6756 14.344 10.473 14.2469 10.2916C14.1498 10.1102 14.0095 9.9555 13.8383 9.84135L10.0883 7.34135Z"
                                            fill="currentColor" />
                                    </svg> </button> <button class="nav-btn slider-next"> <svg width="8"
                                        height="13" viewBox="0 0 8 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.58447 11.7868L6.48979 6.88151L1.58447 1.9762" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> </button>
                            </div>
                        </div>
                    </div>
                </div>
                <section data-widget_type="widget" data-widget_name="MenusExpandableWidget"
                    class="widget menus-expandable-widget max-view">
                    <div class="menus-widget-container" style="--home-label:'হোম';">
                        <section class="widget menu-widget"> <span id="menu-toggle" class="hamburger-menu-block">
                                <icon class="hamburger-menu ph ph-list"></icon> <span>মেনু নির্বাচন করুন</span>
                            </span>
                            <ul class="menu-list menu-parent-unordered-list custom-items-center">
                                <li class="megamenu-link "> <a class="menu-parent-list-link home-link"
                                        href="index.html"> </a> </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" আমাদের সম্পর্কে"
                                        href="#" class="menu-parent-list-link"> পৌরসভা তথ্য<icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=" "
                                                    href="#">
                                                    <div> </div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" ইতিহাস"
                                                        class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/unioncouncilinformation">
                                                        <div>পৌরসভার সংক্ষিপ্ত
                                                            বিবরন</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" কার্যাবলী"
                                                        class="menu-sub-child-link"
                                                        href="https://comillaboard.portal.gov.bd/">
                                                        <div>শিক্ষা বিষয়ক তথ্য</div>
                                                    </a> </li>
                                                {{-- <li class="menu-sub-child-list"> <a title=" লোকেশন ও আয়তন"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/6922ded3933eb65569e1da8e.html">
                                                        <div>লোকেশন ও আয়তন</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" ডিএনসিসি&#39;র মানচিত্র"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/6922e133933eb65569e2ad72.html">
                                                        <div>ডিএনসিসি&#39;র মানচিত্র</div>
                                                    </a> </li> --}}
                                            </ul>
                                        </div>
                                        {{-- <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="#">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" সাংগঠনিক কাঠামো"
                                                        class="menu-sub-child-link"
                                                        href="pages/organograms/6922d918933eb65569dfc7d3.html">
                                                        <div>সাংগঠনিক কাঠামো</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" কর্মকর্তাবৃন্দ"
                                                        class="menu-sub-child-link" href="pages/officers.html">
                                                        <div>কর্মকর্তাবৃন্দ</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" ডিএনসিসি কমিউনিটি সার্ভিস লোকেশন মানচিত্র"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/6922dd5c933eb65569e14b80.html">
                                                        <div>ডিএনসিসি কমিউনিটি সার্ভিস লোকেশন মানচিত্র</div>
                                                    </a> </li>
                                            </ul>
                                        </div> --}}
                                        {{-- <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="#">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" অর্থের উৎস"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/6922e134933eb65569e2adc6.html">
                                                        <div>অর্থের উৎস</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" সিটিজেন চার্টার"
                                                        class="menu-sub-child-link"
                                                        href="pages/office-citizen-charters/6922d8a5933eb65569df9880.html">
                                                        <div>সিটিজেন চার্টার</div>
                                                    </a> </li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" বিভাগ সমূহ" href="#"
                                        class="menu-parent-list-link"> আবেদন করুন <icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="#">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" প্রশাসক মহোদয়ের অফিস"
                                                        class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6InIzMmdoY3Y3WXNOSkhYb25IM2loVnc9PSIsInZhbHVlIjoiR1ZPV2FvSGgrSTJ3czRsTUg0Nk84Zz09IiwibWFjIjoiOWJlN2NhYWNlMmIxYTc5YzA0M2M3ZjY5MjBhOTgyNzQzYzQwOTk4NThhNjYxYWEzZmIwNWVjNWEyYTFhZTQxNSJ9">
                                                        <div>নাগরিক আবেদন</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" প্রধান নির্বাহী কর্মকর্তা মহোদয়ের অফিস"
                                                        class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6InlqTGU4N0ZBbHZwTm1cL3kzdTBDUGtRPT0iLCJ2YWx1ZSI6IkdSOFNhQWgzM1VWK3BPQzA3NlJHUkE9PSIsIm1hYyI6IjgxYzU2Yjg0NDUzMmVlNDgzNGRlZGIyZDdiNmM5ZjAyMzM1YjNjMzVkZjdlZGY0ZjAzNzk2YzQwZWM0YTU2NWQifQ==">
                                                        <div>ট্রেড লাইসেন্স আবেদন</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" সচিব মহোদয়ের দপ্তর "
                                                        class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6IldDZU9BZWlkdHlVZTJJZ1kzaTBCZmc9PSIsInZhbHVlIjoiTEExOEJKSzBkN1N1SG1DS3p2dWlsdz09IiwibWFjIjoiYWE3NDU5ZDZlOGY1ZDM0MmM4NjNlN2I0YjgzODhhYWM5NGY5ZmI4ZGQ5YjJlNzkwZWI2NzZhOTU1NDdhMjAxZiJ9">
                                                        <div>ওয়ারিশসনদের আবেদন</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" প্রকৌশল বিভাগ"
                                                        class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6ImY5eFdYTHZibEpteVFPbTNvQXFGbkE9PSIsInZhbHVlIjoiXC95bDRlQjZicFBlUG1lYW81eEZnVXc9PSIsIm1hYyI6IjI1NDNlMjBjNTNiZWE1NDQ5NTZiMzJhMmYyMGEzOWIyNzJlOWI5NzRhOWRkYjljNDhkYmRkYjc0ZTQxZTgxZjgifQ==">
                                                        <div>প্রিমিসেস লাইসেন্স আবেদন</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" আইসিটি সেল"
                                                        class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6InlRcUM2b1lVVmZFOGhXZ25YWjB5dWc9PSIsInZhbHVlIjoibXdPTnZXM0pjV1lTT3NvVGhzNWVQUT09IiwibWFjIjoiZjIyMmE0OTEzOWVmZmJiNzVlOTk1ZDY4YzNiOGUyOGY0NmU2MzM1YmYxNzM1YzY4ZDk3ZTdkMTM3Zjc5OTgzMiJ9">
                                                        <div>পারিবারিক সনদের আবেদন</div>
                                                    </a> </li>
                                                {{-- <li class="menu-sub-child-list"> <a
                                                        title=" স্পেশাল মেট্রোপলিটন ম্যাজিস্ট্রেট এর দপ্তর"
                                                        class="menu-sub-child-link"
                                                        href="pages/officers7d5f.html?filters=%7B%22officer_category%22%3A%226a545ea4306e967d3d75e3b8%22%7D">
                                                        <div>স্পেশাল মেট্রোপলিটন ম্যাজিস্ট্রেট এর দপ্তর</div>
                                                    </a> </li> --}}
                                            </ul>
                                        </div>
                                        {{-- <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="#">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" বর্জ্য ব্যবস্থাপনা বিভাগ"
                                                        class="menu-sub-child-link"
                                                        href="pages/officers88fd.html?filters=%7B%22officer_category%22%3A%20%226922d2b981fc96cef9e9a210%22%7D">
                                                        <div>বর্জ্য ব্যবস্থাপনা বিভাগ</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" নির্বাহী ম্যাজিস্ট্রেট এর দপ্তর"
                                                        class="menu-sub-child-link"
                                                        href="pages/officersb034.html?filters=%7B%22officer_category%22%3A%20%226922d2b981fc96cef9e9a211%22%7D">
                                                        <div>নির্বাহী ম্যাজিস্ট্রেট এর দপ্তর</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" প্রধান সমাজ কল্যাণ ও বস্তি উন্নয়ন বিভাগ"
                                                        class="menu-sub-child-link"
                                                        href="pages/officers34ec.html?filters=%7B%22officer_category%22%3A%20%226922d2ba81fc96cef9e9a272%22%7D">
                                                        <div>প্রধান সমাজ কল্যাণ ও বস্তি উন্নয়ন বিভাগ</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" ভান্ডার ও ক্রয় বিভাগ"
                                                        class="menu-sub-child-link"
                                                        href="pages/officersfe50.html?filters=%7B%22officer_category%22%3A%20%226922d2ba81fc96cef9e9a274%22%7D">
                                                        <div>ভান্ডার ও ক্রয় বিভাগ</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" নিরীক্ষা বিভাগ"
                                                        class="menu-sub-child-link"
                                                        href="pages/officersf5ba.html?filters=%7B%22officer_category%22%3A%20%226922d2ba81fc96cef9e9a276%22%7D">
                                                        <div>নিরীক্ষা বিভাগ</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" পরিবহন বিভাগ"
                                                        class="menu-sub-child-link"
                                                        href="pages/officers153b.html?filters=%7B%22officer_category%22%3A%20%226922d2ba81fc96cef9e9a27a%22%7D">
                                                        <div>পরিবহন বিভাগ</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="#">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" সম্পত্তি বিভাগ"
                                                        class="menu-sub-child-link"
                                                        href="pages/officersabc4.html?filters=%7B%22officer_category%22%3A%20%226922d2ba81fc96cef9e9a281%22%7D">
                                                        <div>সম্পত্তি বিভাগ</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" রাজস্ব বিভাগ"
                                                        class="menu-sub-child-link"
                                                        href="pages/officersb469.html?filters=%7B%22officer_category%22%3A%20%226922d2bb81fc96cef9e9a2c7%22%7D">
                                                        <div>রাজস্ব বিভাগ</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" জনসংযোগ বিভাগ"
                                                        class="menu-sub-child-link"
                                                        href="pages/officers3498.html?filters=%7B%22officer_category%22%3A%20%226922d2bb81fc96cef9e9a2c8%22%7D">
                                                        <div>জনসংযোগ বিভাগ</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" হিসাব বিভাগ"
                                                        class="menu-sub-child-link"
                                                        href="pages/officersb123.html?filters=%7B%22officer_category%22%3A%20%226922d2bb81fc96cef9e9a2c9%22%7D">
                                                        <div>হিসাব বিভাগ</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" স্বাস্থ্য বিভাগ"
                                                        class="menu-sub-child-link"
                                                        href="pages/officers829f.html?filters=%7B%22officer_category%22%3A%20%226922d2bb81fc96cef9e9a2ca%22%7D">
                                                        <div>স্বাস্থ্য বিভাগ</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" নগর পরিকল্পনা বিভাগ"
                                                        class="menu-sub-child-link"
                                                        href="pages/officers3342.html?filters=%7B%22officer_category%22%3A%20%226922d2bb81fc96cef9e9a2cb%22%7D">
                                                        <div>নগর পরিকল্পনা বিভাগ</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" আইন বিভাগ"
                                                        class="menu-sub-child-link"
                                                        href="pages/officers72f5.html?filters=%7B%22officer_category%22%3A%20%226922d2bb81fc96cef9e9a2cc%22%7D">
                                                        <div>আইন বিভাগ</div>
                                                    </a> </li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list">
                                    <a title="অন্যান্য আবেদন" href="#" class="menu-parent-list-link">
                                        অন্যান্য আবেদন
                                        <icon class="menu-parent-list-link-icon ph ph-caret-double-down"></icon>
                                    </a>

                                    <div class="mega-menu-dropdown megaMenu">
                                        <!-- প্রথম কলাম -->
                                        <div class="menu-child-box">
                                            <h6 class="menu-child-title">
                                                <a href="#">
                                                    <div>সনদ সংক্রান্ত আবেদন</div>
                                                </a>
                                            </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6InZwTXkzbUdQRXRBa1VLMmdVRkE5RVE9PSIsInZhbHVlIjoiMTNWaHhDcDd0OWdvYkpqYnpzUkxIZz09IiwibWFjIjoiZGMwMTE4YmU2NGRmM2E4MDMzMjBmMzk0NjQxYTk5NGViMGE4NTExYTU3NmQ1MTRiZTUwNGY1ZmU2NzRmYTQzYyJ9">
                                                        <div>চারিত্রিক সনদের আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6ImJNdk5Bb01ERk5zYlRsVlplK3ZBamc9PSIsInZhbHVlIjoiMVpzS1Irc3JEeEVTNUd2VTNUdVNGZz09IiwibWFjIjoiNWFiMjFlZWU4M2FjNTc2NTRjZTMyMGRjNjBhZjY4Njg5YjIyM2U5MWU1MmU3ZjZhY2E0MDIzN2I3NWI1OTE1YSJ9">
                                                        <div>অবিবাহিত সনদের আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6InZFVEw2dERGRmdzbm40UGp5NjloWGc9PSIsInZhbHVlIjoiREUyRU5zc1VhQXNYQTVjMW10UlwvNEE9PSIsIm1hYyI6IjU5YWI5Y2Y3Mzc3M2EzYWNjODY0NGRmMmJiMzVhMjhhZDg5MzI5ZDM5NzEyMzFmYjhhYjQzYjk4YWU2MzVkNDYifQ==">
                                                        <div>বিবাহিত সনদের আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6IjJ6aFwvOGNmXC9YRFNVT29IZEdlY09XUT09IiwidmFsdWUiOiJ0cEZsWm85WHVOMVBiRVN4dEhyMVFBPT0iLCJtYWMiOiJlMTgwZjNhMWNhZTM3MDVhMDY5MDAxNTViYTg3ZTVkODE1MDBjMDY4MWJiYmUzNWUyMjQxZDJkNDQ3NDliNDQxIn0=">
                                                        <div>মৃত্যু সনদের আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6Imp0UjhoaEFpTEFNd1l2c2oyR2NZRlE9PSIsInZhbHVlIjoiaWpJb2NOYUlZRkljZzRtTmp5RWx0UT09IiwibWFjIjoiNjlmNmU0MTdkMjMxMTI1YTNjYWE2YzVmMDA1M2JlYzBlY2U4NjM2YWI1YTU4NDg2YjIzMDAyOGExMDU4NGE4OSJ9">
                                                        <div>ভূমিহিন সনদের আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6IlozY0JZQU96YWF0Nm5NVVdwT0JHaGc9PSIsInZhbHVlIjoiRjF6c0JBOTB1M1JFVnhSRXVGMG9BUT09IiwibWFjIjoiY2MyZGJmZGYwOWM2ZjQwYmYxZTE1ZDEyZWU3NDlkZDg1NzA1YTMxN2RiOTY2OTE4MTgwMmNiNDI3NWY5ZmQwNyJ9">
                                                        <div>পুনঃ বিবাহ না হওয়া সনদের আবেদন</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- দ্বিতীয় কলাম -->
                                        <div class="menu-child-box">
                                            <h6 class="menu-child-title">
                                                <a href="#">
                                                    <div>প্রত্যয়ন ও অনুমতি সংক্রান্ত</div>
                                                </a>
                                            </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6Imc5T1pPalhLYTBJUzl6OVA4dVRKXC9BPT0iLCJ2YWx1ZSI6ImtuXC9xMlFBT2d4ZU9FVFQ5cGlcL0MrZz09IiwibWFjIjoiODU4M2NhMTM1MTdlYWViOGE2ZTFkNDU4MzA4YzJmZGViOWNlZmIwNDBkNzIzYTdlZDBiY2YxYjU5MjkzZDIxZCJ9">
                                                        <div>ভোটার আইডি স্থানান্তর সনদের আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6Imx5NWxUdEdMamQzZEREWW5seFk3T2c9PSIsInZhbHVlIjoiQitGUFpvZlU1VG0rYWlQbm5kK1RiUT09IiwibWFjIjoiYzg4ODRmN2VjYTI3ZGJhZWQ3ZTQ5NDQ1NWU0NDZiYmQ3ZTlhZmQ4MGY1ZTQyYWNkNDY0ZTU4M2U1MzQ5NjQ4YSJ9">
                                                        <div>নদী ভাঙন সনদের আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6IjdiSlRVdWV6MGsrTlZMTHZsOStaUlE9PSIsInZhbHVlIjoiWHhhQXJ4UzJRV3o3dUk2czd2RmFCQT09IiwibWFjIjoiOGQ0ZTkzYmIzMjI5YzZmNjYxMjNkMTY0NzE2M2FiMDJiZWE1MmQ5M2FjNmM5OTRjZjZmNjAzZmM5NDljNjQxNCJ9">
                                                        <div>অনাপত্তি পত্র আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6IlIxaW1JTHRCeWFhQU9LbWhlcUJiOGc9PSIsInZhbHVlIjoicWZDeVUrcXcyRGdCaGRCcVY3ZHV5dz09IiwibWFjIjoiYzc1MTFmZDczMGMxODBiYjAyMDRhZjQ2YmQyNDM0YmQ1NTE1M2QwNDExNTIyODQ1ZTM0OTRkNTY5M2M0NWI2OSJ9">
                                                        <div>একই নামের প্রত্যয়ন আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6IjJoeXJwWmx1M01tWkRoMjZHQzhDTVE9PSIsInZhbHVlIjoiWUhGYzRUQ2xcL0NPaU1QTGtlVU5BY2c9PSIsIm1hYyI6IjU1ZmU2OGNhZmY0Yjg2Yzg2M2MyMzQ1OTZmNjZjOWNjYjExYzkzODc1N2M2MzFhMmY5MTBhMWQyOGNiYmFiNjcifQ==">
                                                        <div>অনুমতি পত্রের আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6IlFJTVRzYnhGNGl4K0RYeGFyVWozNWc9PSIsInZhbHVlIjoiNGpYMnJUOE12VDYwVkV4QkdZbzFmQT09IiwibWFjIjoiOWExMjBlZmE4M2I1OTYzN2RkZjA5Y2ZiYTUxNTg1NjBiYTBiYzBkODgwNmQ0ZWRlODA3NjZlNmM1YmEwNTg2YSJ9">
                                                        <div>বার্ষিক আয়ের প্রত্যয়ন আবেদন</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- তৃতীয় কলাম -->
                                        <div class="menu-child-box">
                                            <h6 class="menu-child-title">
                                                <a href="#">
                                                    <div>বিবিধ আবেদন</div>
                                                </a>
                                            </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6IkJHVFdmTmRTT3lPM1lPbTl3aTZqTVE9PSIsInZhbHVlIjoiU1BhSllSSmRraTZvSUF6dWRQWUdFUT09IiwibWFjIjoiZWI1MTM0ODZhN2FjNWQ4MjEwN2UzYzI2NGFiODk2YWEzYjBhZTczZmRjZmExMmE2NzdkNzY5MWFmZGQzMmIwNSJ9">
                                                        <div>প্রকৃত বাকঁ ও শ্রবন প্রতিবন্ধী আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6IjhlSk9zYWtKXC9ORjFLQjhWUlF4Q1JBPT0iLCJ2YWx1ZSI6IkF0R1VsVUw3Um1mK0FvOUEwVGppaHc9PSIsIm1hYyI6IjNhODQ5MDFiZTljZGI1NjU1MzE5MjRlZDE2MzY4MDU0YmRjY2VhMjY1NDM2MDBiYmE0MjMxMWY1ODExYTkzNjYifQ==">
                                                        <div>সনাতন ধর্ম অবলম্বী সনদের আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6InozTGdRK3h0b3dGK2lcLzhRQmQyUzlRPT0iLCJ2YWx1ZSI6InBPVEoxWjBRNWRmZ29Ba1FySUhvOXc9PSIsIm1hYyI6Ijg0MjdlMzg0Y2ExMDU0NDAxNTQxYWM1Zjg0ODBkYzdkNzIzMzIxNTdmOGJlN2U3YjE5ZGIyOGIyZmU5OWQ0MWQifQ==">
                                                        <div>প্রত্যয়ন পত্র আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6Im1rSzZqazE2WjczWCtDM2w2WkI5eWc9PSIsInZhbHVlIjoiWVV1UVwvbVZMaDlyRzJabU5tZWJKY1E9PSIsIm1hYyI6ImIyYzY4NDZkNzIyOGZjNzE1ZjBhNGEzMmZkNDA1ODc0OTE0ZTZhMWM0NjZkMTlkZGVmYWM1MzZkMDBiNTZmZWMifQ==">
                                                        <div>রাস্তা খননের অনুমতির আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6Ikpqc1VCOFNkVG96VWhxc1Q0WUE2YWc9PSIsInZhbHVlIjoiRVBieHp1S1Z0NnBVY2MzaGtQZm1kdz09IiwibWFjIjoiZjc4NmRkMzk2M2U2YmVjMTUxZmUwZmQwMGE0ZTVlMzg1YjdkYThlNjhmMTVhYWQ2YTk5MmNiMTA2YTgzMTE0YSJ9">
                                                        <div>পোষা প্রাণীর লাইসেন্সের আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6ImxaNFZzSmRuaGVMOG1aRGR4ZlV3cWc9PSIsInZhbHVlIjoiVnpQc2VveDZFcU42TFwvVzJaZkxUYlE9PSIsIm1hYyI6ImUzM2UxZGFlMDRjNDIwNGZmM2Q3MDcwOTg3OTMyNzcxYWU1ODEyNGE1N2E5OWIzOTI4NjRmZmY2NWRjNmFmYzEifQ==">
                                                        <div>আর্থিক অসচ্ছলতার সনদ আবেদন</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- চতুর্থ কলাম -->
                                        <div class="menu-child-box">
                                            <h6 class="menu-child-title">
                                                <a href="#">
                                                    <div>হোল্ডিং সংক্রান্ত</div>
                                                </a>
                                            </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6Ik1DXC9CZm1GNEZienZqR1k1aTVOQnNBPT0iLCJ2YWx1ZSI6IjFFaU1maVNCbVwvbWtDTE8wQWxHb293PT0iLCJtYWMiOiJiNjkxNGVmNDIzZWQyODUzYTcxNjkzOWIxNjk3N2Y1YjFmMTYyZTc4YTM0YjFmMzZmZmE3NzJjMTA0ODFlNDQwIn0=">
                                                        <div>নতুন হোল্ডিং আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6Im9sdzR1RVAwbWM0WURPK3M4S05wWmc9PSIsInZhbHVlIjoiS3RcL3JvOUU4NkFPZjF2Vko5bk1QUFE9PSIsIm1hYyI6ImZhOWVlNzhiMzI0NjRhY2QzMzQ1NThjYjA5ODBmODBjMzBhM2U0MjJiYjgwNjE3MTEzODU2ZmE2Y2ZhOTM1MTIifQ==">
                                                        <div>হোল্ডিং নামজারির আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6Ik0xXC83ZkllRUJGNU1RazZBZm5aWFJRPT0iLCJ2YWx1ZSI6Ilg5TVFFcTRUN0dPeW1tM2tSTnhBXC9RPT0iLCJtYWMiOiJhZWE4MzJkMzMzYTkxMWU3OTQ3Y2ZhMDAyZWJmNDQ5ZGUzY2ZmMGFkYzNhZWQyMDY5YTcyZDkzZTM2MWVjMjk2In0=">
                                                        <div>ইমারত নির্মাণ আবেদন</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6IkpaY1JMeXJsYnkxT1hkeTRqOFBuc3c9PSIsInZhbHVlIjoiendLVWtGdDZ4MkxBZDRwVzZYalF1Zz09IiwibWFjIjoiMmM1ZjhlYmRlYWEzOTBiZWFhMzIzZDYyNzg1MjM0MzY2N2RhODkwMWJiYjE5ZjJlNTExYmNiMDM1M2UyOWY2ZiJ9">
                                                        <div>ভূমি ব্যবহার ছাড়পত্রের আবেদন</div>
                                                    </a>
                                                </li>
                                                {{-- <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link"
                                                        href="https://hajigonjpoura.org/application/eyJpdiI6ImxaNFZzSmRuaGVMOG1aRGR4ZlV3cWc9PSIsInZhbHVlIjoiVnpQc2VveDZFcU42TFwvVzJaZkxUYlE9PSIsIm1hYyI6ImUzM2UxZGFlMDRjNDIwNGZmM2Q3MDcwOTg3OTMyNzcxYWU1ODEyNGE1N2E5OWIzOTI4NjRmZmY2NWRjNmFmYzEifQ==">
                                                        <div>আর্থিক অসচ্ছলতার সনদ আবেদন</div>
                                                    </a>
                                                </li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list">
                                    <a title="উন্নয়নমূলক প্রকল্প" href="#" class="menu-parent-list-link">
                                        উন্নয়নমূলক প্রকল্প
                                        <icon class="menu-parent-list-link-icon ph ph-caret-double-down"></icon>
                                    </a>

                                    <div class="mega-menu-dropdown megaMenu">
                                        <!-- প্রথম কলাম -->
                                        <div class="menu-child-box">
                                            <h6 class="menu-child-title">
                                                <a href="#">
                                                    <div>অবকাঠামো ও জ্বালানি</div>
                                                </a>
                                            </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link" href="#">
                                                        <div>বিশুদ্ধ পানি ও জল প্রকল্প</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link" href="#">
                                                        <div>বায়োগ্যাস প্রকল্প</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link" href="#">
                                                        <div>সৌর বিদ্যুৎ প্রকল্প</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link" href="#">
                                                        <div>আধুনিক পয়ঃনিষ্কাশন প্রকল্প</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- দ্বিতীয় কলাম -->
                                        <div class="menu-child-box">
                                            <h6 class="menu-child-title">
                                                <a href="#">
                                                    <div>নিরাপত্তা ও পরিবেশ</div>
                                                </a>
                                            </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link" href="#">
                                                        <div>ফায়ার হাইড্রেন্ট প্রকল্প</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link" href="#">
                                                        <div>বর্জ্য ব্যবস্থাপনা প্রকল্প</div>
                                                    </a>
                                                </li>
                                                <li class="menu-sub-child-list">
                                                    <a class="menu-sub-child-link" href="#">
                                                        <div>ভূগর্ভস্থ বিদ্যুৎ ও ইন্টারনেট কেবল প্রকল্প</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" দুর্ঘটনার তথ্যাদি "
                                        href="#" class="menu-parent-list-link"> দুর্ঘটনার তথ্যাদি <icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    {{-- <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=" "
                                                    href="#">
                                                    <div> </div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" প্রজ্ঞাপন /বিজ্ঞপ্তি"
                                                        class="menu-sub-child-link"
                                                        href="pages/notification-circulars.html">
                                                        <div>প্রজ্ঞাপন /বিজ্ঞপ্তি</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" আইন ও নীতিমালা"
                                                        class="menu-sub-child-link" href="pages/policies.html">
                                                        <div> আইন ও নীতিমালা</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" সিটি ডিজিটাল সেন্টারের পরিপত্র"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/6922dc06933eb65569e0e036.html">
                                                        <div>সিটি ডিজিটাল সেন্টারের পরিপত্র</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" রেইট চার্ট"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/6922dfb8933eb65569e23a97.html">
                                                        <div>রেইট চার্ট</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" সিটি কর্পোরেশন আর্দশ কর তফসিল, ২০১৬"
                                                        class="menu-sub-child-link"
                                                        href="https://objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/7f1f5f6f2d104aaebba9c5e53fccdb51.pdf">
                                                        <div>সিটি কর্পোরেশন আর্দশ কর তফসিল, ২০১৬</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" সালিশ কার্যক্রমের তথ্যাদি "
                                        href="#" class="menu-parent-list-link"> সালিশ কার্যক্রমের তথ্যাদি<icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                </li>
                                {{-- <li class="megamenu-link menu-parent-list"> <a title=" ফরম" href="#"
                                        class="menu-parent-list-link"> ফরম <icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=" "
                                                    href="#">
                                                    <div> </div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" প্রয়োজনীয় ফরমসমূহ"
                                                        class="menu-sub-child-link" href="pages/forms.html">
                                                        <div>প্রয়োজনীয় ফরমসমূহ</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" ফরমস পোর্টাল"
                                                        class="menu-sub-child-link" href="#">
                                                        <div>ফরমস পোর্টাল</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" Street Planting - DNCC"
                                                        class="menu-sub-child-link"
                                                        href="https://docs.google.com/forms/d/1yZESiKB_rzk6eA6MwQIzUSJNKh2GpCtr4qmwjrN1CYc/viewform?chromeless=1&amp;amp;edit_requested=true">
                                                        <div>Street Planting - DNCC</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" বাজেট ও প্রকল্প"
                                        href="#" class="menu-parent-list-link"> বাজেট ও প্রকল্প <icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=" "
                                                    href="#">
                                                    <div> </div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" বাজেট"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/6922df87933eb65569e22910.html">
                                                        <div>বাজেট</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" প্রকল্প/কর্মসূচি"
                                                        class="menu-sub-child-link" href="pages/projects.html">
                                                        <div>প্রকল্প/কর্মসূচি</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" ডিএনসিসি উন্নয়ন প্রকল্প (আইডিআরএস) ২০২১)"
                                                        class="menu-sub-child-link"
                                                        href="https://www.arcgis.com/home/webmap/viewer.html?webmap=28a65992f951451b95c5b94bf8d29db5&amp;amp;extent=90.3771,23.7528,90.4405,23.7853">
                                                        <div>ডিএনসিসি উন্নয়ন প্রকল্প (আইডিআরএস) ২০২১)</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" কমিটি" href="#"
                                        class="menu-parent-list-link"> কমিটি <icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="#">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" সকল কমিটি"
                                                        class="menu-sub-child-link" href="pages/committees.html">
                                                        <div>সকল কমিটি</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" যোগাযোগ"
                                        href="pages/static-pages/6922df76933eb65569e2224e.html"
                                        class="menu-parent-list-link"> যোগাযোগ <icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="#">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" যোগাযোগ"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/6922df76933eb65569e2224e.html">
                                                        <div>যোগাযোগ</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" প্রতিবেদন" href="#"
                                        class="menu-parent-list-link"> প্রতিবেদন <icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="pages/static-pages/6922e133933eb65569e2ad72.html">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" বার্ষিক প্রতিবেদন"
                                                        class="menu-sub-child-link" href="pages/annual-reports.html">
                                                        <div>বার্ষিক প্রতিবেদন</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" বিভিন্ন প্রতিবেদন"
                                                        class="menu-sub-child-link"
                                                        href="pages/reportsc046.html?filters=%7B%22reports_type%22%3A%2269413dd4a31054345f0f0218%22%7D">
                                                        <div>বিভিন্ন প্রতিবেদন</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" গ্যালারী" href="#"
                                        class="menu-parent-list-link"> গ্যালারী <icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=" "
                                                    href="#">
                                                    <div> </div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" ফটো গ্যালারী"
                                                        class="menu-sub-child-link" href="pages/photo-galleries.html">
                                                        <div>ফটো গ্যালারী</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" ভিডিও গ্যালারী"
                                                        class="menu-sub-child-link" href="pages/video-galleries.html">
                                                        <div>ভিডিও গ্যালারী</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" আঞ্চলিক কার্যালয়"
                                        href="#" class="menu-parent-list-link"> আঞ্চলিক কার্যালয় <icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="#">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a
                                                        title=" আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল - ১ এর অফিস"
                                                        class="menu-sub-child-link"
                                                        href="pages/officers3647.html?filters=%7B%22officer_category%22%3A%20%226922d2bb81fc96cef9e9a2d6%22%7D">
                                                        <div>আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল - ১ এর অফিস</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল -২ এর অফিস"
                                                        class="menu-sub-child-link"
                                                        href="pages/officers97c3.html?filters=%7B%22officer_category%22%3A%20%226922d2bb81fc96cef9e9a2d7%22%7D">
                                                        <div>আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল -২ এর অফিস</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল -৩ এর অফিস"
                                                        class="menu-sub-child-link"
                                                        href="pages/officerse761.html?filters=%7B%22officer_category%22%3A%20%226922d2bb81fc96cef9e9a2d8%22%7D">
                                                        <div>আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল -৩ এর অফিস</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল-৪ এর অফিস"
                                                        class="menu-sub-child-link"
                                                        href="pages/officerse2e9.html?filters=%7B%22officer_category%22%3A%20%226922d2bb81fc96cef9e9a2da%22%7D">
                                                        <div>আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল-৪ এর অফিস</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল -৫ এর অফিস"
                                                        class="menu-sub-child-link"
                                                        href="pages/officersf099.html?filters=%7B%22officer_category%22%3A%20%226922d2bb81fc96cef9e9a2dc%22%7D">
                                                        <div>আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল -৫ এর অফিস</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="#">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a
                                                        title=" আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল - ৬ এর অফিস"
                                                        class="menu-sub-child-link"
                                                        href="pages/officersa822.html?filters=%7B%22officer_category%22%3A%20%226922d2bc81fc96cef9e9a2f7%22%7D">
                                                        <div>আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল - ৬ এর অফিস</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল - ৭ এর অফিস"
                                                        class="menu-sub-child-link"
                                                        href="pages/officersf859.html?filters=%7B%22officer_category%22%3A%20%226922d2bc81fc96cef9e9a2f8%22%7D">
                                                        <div>আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল - ৭ এর অফিস</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল - ৮ এর অফিস"
                                                        class="menu-sub-child-link"
                                                        href="pages/officers97a6.html?filters=%7B%22officer_category%22%3A%20%226922d2bc81fc96cef9e9a2f9%22%7D">
                                                        <div>আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল - ৮ এর অফিস</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল - ৯ এর অফিস"
                                                        class="menu-sub-child-link"
                                                        href="pages/officersa001.html?filters=%7B%22officer_category%22%3A%20%226922d2bc81fc96cef9e9a2fa%22%7D">
                                                        <div>আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল - ৯ এর অফিস</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল - ১০ এর অফিস"
                                                        class="menu-sub-child-link"
                                                        href="pages/officers5682.html?filters=%7B%22officer_category%22%3A%20%226922d2bc81fc96cef9e9a2fb%22%7D">
                                                        <div>আঞ্চলিক নির্বাহী কর্মকর্তা অঞ্চল - ১০ এর অফিস</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" জলবায়ু সংক্রান্ত"
                                        href="#" class="menu-parent-list-link"> জলবায়ু সংক্রান্ত <icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="#">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" জলবায়ু কর্ম পরিকল্পনা"
                                                        class="menu-sub-child-link"
                                                        href="https://drive.google.com/file/d/1ffWYbDyrC7EAi7FqfIYWDb8FwJAPsxyQ/view?usp=sharing">
                                                        <div>জলবায়ু কর্ম পরিকল্পনা</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" ডেঙ্গু সংক্রান্ত"
                                        href="#" class="menu-parent-list-link"> ডেঙ্গু সংক্রান্ত <icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="#">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" ডেঙ্গু ড্যাসবোর্ড"
                                                        class="menu-sub-child-link"
                                                        href="https://dnccinnovationlab.github.io/dengue-dashboard/">
                                                        <div>ডেঙ্গু ড্যাসবোর্ড</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" দৈনিক ডেঙ্গু পরিস্থিতি ও পর্যালোচনা"
                                                        class="menu-sub-child-link"
                                                        href="pages/reportsdc67.html?filters=%7B%22reports_type%22%3A%2269d2075cf94cbc83926de345%22%7D">
                                                        <div>দৈনিক ডেঙ্গু পরিস্থিতি ও পর্যালোচনা</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" ডেঙ্গু বিষয়ক তথ্য"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/6922dc01933eb65569e0de72.html">
                                                        <div>ডেঙ্গু বিষয়ক তথ্য</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" ডেঙ্গু স্বাস্থ্য বার্তা "
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/6922ddaf933eb65569e15df5.html">
                                                        <div>ডেঙ্গু স্বাস্থ্য বার্তা </div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" ডেঙ্গু পরীক্ষার স্বাস্থ্য কেন্দ্রসমূহ"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/6922df04933eb65569e1f3a3.html">
                                                        <div>ডেঙ্গু পরীক্ষার স্বাস্থ্য কেন্দ্রসমূহ</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" মশক নিধন সংক্রান্ত"
                                        href="#" class="menu-parent-list-link"> মশক নিধন সংক্রান্ত <icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="#">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" মশক নিধন কর্মপরিকল্পনা"
                                                        class="menu-sub-child-link"
                                                        href="pages/mosquito-kill-plans.html">
                                                        <div>মশক নিধন কর্মপরিকল্পনা</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" মশক নিয়ন্ত্রণের সময়সূচী "
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/6922e094933eb65569e27aff.html">
                                                        <div>মশক নিয়ন্ত্রণের সময়সূচী </div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" সার্ভিলেন্স রিপোর্ট"
                                                        class="menu-sub-child-link"
                                                        href="pages/reports5f00.html?filters=%7B%22reports_type%22%3A%2269a6621af681a7e27286ba8c%22%7D">
                                                        <div>সার্ভিলেন্স রিপোর্ট</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" গৃহীত পদক্ষেপসমূহ"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/%e0%a6%97%e0%a7%83%e0%a6%b9%e0%a7%80%e0%a6%a4-%e0%a6%aa%e0%a6%a6%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a7%87%e0%a6%aa%e0%a6%b8%e0%a6%ae%e0%a7%82%e0%a6%b9-oh9wky-69ae3ada7706b1acf8d9a20a.html">
                                                        <div>গৃহীত পদক্ষেপসমূহ</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" নগর স্বাস্থ্য ব্যবস্থাপনা"
                                        href="#" class="menu-parent-list-link"> নগর স্বাস্থ্য ব্যবস্থাপনা <icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="#">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" নগর স্বাস্থ্যের পরিচিতি"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/%e0%a6%a8%e0%a6%97%e0%a6%b0-%e0%a6%b8%e0%a7%8d%e0%a6%ac%e0%a6%be%e0%a6%b8%e0%a7%8d%e0%a6%a5%e0%a7%8d%e0%a6%af%e0%a7%87%e0%a6%b0-%e0%a6%aa%e0%a6%b0%e0%a6%bf%e0%a6%9a%e0%a6%bf%e0%a6%a4%e0%a6%bf-riycb5-69afaa2ecaac5181cddcd451.html">
                                                        <div>নগর স্বাস্থ্যের পরিচিতি</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" নগর স্বাস্থ্যের বিবরণী"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/%e0%a6%a8%e0%a6%97%e0%a6%b0-%e0%a6%b8%e0%a7%8d%e0%a6%ac%e0%a6%be%e0%a6%b8%e0%a7%8d%e0%a6%a5%e0%a7%8d%e0%a6%af%e0%a7%87%e0%a6%b0-%e0%a6%ac%e0%a6%bf%e0%a6%ac%e0%a6%b0%e0%a6%a3%e0%a7%80-pv7ryp-69afaacfa52ffd47032cf98d.html">
                                                        <div>নগর স্বাস্থ্যের বিবরণী</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" নগর স্বাস্থ্য কেন্দ্রসমূহ ও অন্যান্য"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/%e0%a6%a8%e0%a6%97%e0%a6%b0-%e0%a6%b8%e0%a7%8d%e0%a6%ac%e0%a6%be%e0%a6%b8%e0%a7%8d%e0%a6%a5%e0%a7%8d%e0%a6%af-%e0%a6%95%e0%a7%87%e0%a6%a8%e0%a7%8d%e0%a6%a6%e0%a7%8d%e0%a6%b0%e0%a6%b8%e0%a6%ae%e0%a7%82%e0%a6%b9-%e0%a6%93-%e0%a6%85%e0%a6%a8%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%af-gv9ouo-69afaf65caac5181cddcda48.html">
                                                        <div>নগর স্বাস্থ্য কেন্দ্রসমূহ ও অন্যান্য</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" সেবাসমূহ"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/%e0%a6%b8%e0%a7%87%e0%a6%ac%e0%a6%be%e0%a6%b8%e0%a6%ae%e0%a7%82%e0%a6%b9-d4t8es-69afae62e79e59e52d1bdaf7.html">
                                                        <div>সেবাসমূহ</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" অর্জন সমূহ"
                                                        class="menu-sub-child-link" href="#">
                                                        <div>অর্জন সমূহ</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a
                                        title=" ভিটামিন ‘এ’ প্লাস ক্যাম্পেই কেন্দ্রসমূহ" href="#"
                                        class="menu-parent-list-link"> ভিটামিন ‘এ’ প্লাস ক্যাম্পেই কেন্দ্রসমূহ <icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="#">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a title=" স্থায়ী কেন্দ্রের তথ্য"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/permanent-center-information-z2wdz2-6a4099435d1c1bb52cd5d603.html">
                                                        <div>স্থায়ী কেন্দ্রের তথ্য</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a
                                                        title=" ওয়ার্ড ভিত্তিক কেন্দ্রসমূহ"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/vitamin-a-plus-camp-centers-9ogjzs-6a4098070f53a6f67f4c2047.html">
                                                        <div>ওয়ার্ড ভিত্তিক কেন্দ্রসমূহ</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" জন্ম ও মৃত্যু নিবন্ধন"
                                        href="#" class="menu-parent-list-link"> জন্ম ও মৃত্যু নিবন্ধন <icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="#">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a
                                                        title=" দায়িত্বপ্রাপ্ত কর্মকর্তাদের তালিকা"
                                                        class="menu-sub-child-link"
                                                        href="pages/static-pages/6922dd2d933eb65569e13d16.html">
                                                        <div>দায়িত্বপ্রাপ্ত কর্মকর্তাদের তালিকা</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" হিট স্ট্রোক ড্যাশবোর্ড"
                                        href="https://dnccinnovationlab.github.io/heat_stroke_info_dashboard/"
                                        class="menu-parent-list-link"> হিট স্ট্রোক ড্যাশবোর্ড </a> </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" বায়ু মান" href="#"
                                        class="menu-parent-list-link"> বায়ু মান <icon
                                            class="menu-parent-list-link-icon ph ph-caret-double-down"></icon> </a>
                                    <div class="mega-menu-dropdown megaMenu">
                                        <div class="menu-child-box ">
                                            <h6 title=" " class="menu-child-title"> <a title=""
                                                    href="#">
                                                    <div></div>
                                                </a> </h6>
                                            <ul class="menu-sub-child-unordered-list"
                                                aria-labelledby="mega-menu-dropdown-button">
                                                <li class="menu-sub-child-list"> <a
                                                        title=" বায়ু মান ড্যাশবোর্ড (পিএইচসি)"
                                                        class="menu-sub-child-link" href="http://103.30.30.157/">
                                                        <div>বায়ু মান ড্যাশবোর্ড (পিএইচসি)</div>
                                                    </a> </li>
                                                <li class="menu-sub-child-list"> <a title=" বায়ু মান ইনডেস্ক"
                                                        class="menu-sub-child-link"
                                                        href="http://103.30.30.153/website/public-monitoring">
                                                        <div>বায়ু মান ইনডেস্ক</div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="megamenu-link menu-parent-list"> <a title=" মতামত ও অভিযোগ"
                                        href="https://fairdhaka.com/" class="menu-parent-list-link"> মতামত ও অভিযোগ
                                    </a> </li> --}}
                            </ul>
                        </section>
                    </div>
                    <div class="expand-btn"> <span><i class="ph ph-list"></i> আরও</span> <span
                            style="display:none;"><i class="ph ph-caret-up"></i> সংক্ষিপ্ত</span> </div>
                </section>
            </div>
        </div>
        <div class="wrapper">
            <div class="body">
                <div data-section_type="body" class="droppable">
                    <div data-widget_type="widget" data-widget_name="BlockWidget" data-widget_content_type="blocks"
                        data-widget_item="6922d3dfdbfbab28ce042797" class="widget block-widget">
                        <div class="block-widget-container" style="display: flex">
                            <div
                                style="float: left; background-color: red; color:white; margin:5px; padding:2px; font-size: x-large; 
}">
                                স্বাগতম</div>
                            <div class="block-widget-content">
                                {{-- <rt-renderer encoded-content="PG1hcnF1ZWUgZGlyZWN0aW9uPSJsZWZ0IiBzY3JvbGxhbW91bnQ9IjciICJ0aGlzLnN0b3AoKSIgInRoaXMuc3RhcnQoKSI+PHA+PHNwYW4gc3R5bGU9ImNvbG9yOnJnYigwLCAwLCAwKSI+Kirgpqzgpr/gpqbgp43gpq/gpq7gpr7gpqgg4Kah4KeH4KaZ4KeN4KaX4KeBIOCmquCmsOCmv+CmuOCnjeCmpeCmv+CmpOCmv+CmpOCnh8Kg4Kah4KeH4KaZ4KeN4KaX4KeBIOCmuOCmguCmleCnjeCmsOCmvuCmqOCnjeCmpCDgpqrgprDgpr7gpq7gprDgp43gprYg4KaTIOCmquCmsOCngOCmleCnjeCmt+CmvuCmsCDgppzgpqjgp43gpq8g4Kah4Ka/4KaP4Kao4Ka44Ka/4Ka44Ka/4oCZ4KawIOCmleCmqOCnjeCmn+CnjeCmsOCni+CmsiDgprDgp4Hgpq7gp4cg4Kav4KeL4KaX4Ka+4Kav4KeL4KaX4KeH4KawIOCmnOCmqOCnjeCmryDgpoXgpqjgp4HgprDgp4vgpqcg4KaV4Kaw4Ka+IOCmueCmsuCni+ClpMKg4KaV4Kao4KeN4Kaf4KeN4Kaw4KeL4KayIOCmsOCngeCmruCnh+CmsCDgpqvgp4vgpqgg4Kao4Kau4KeN4Kas4Kaw4KaDIOCnpuCnp+CnreCnp+CnrC3gp6bgp6zgp6ngp6rgp6jgp6ssIOCnpuCnp+CnreCnreCnqS3gp6ngp6/gp6ngp6jgp63gp6wsIOCnpuCnp+CnreCnp+Cnqy3gp6jgp6ngp67gp63gp6vgp6oqKsKgPC9zcGFuPjxzcGFuIHN0eWxlPSJjb2xvcjpyZ2IoMCwgMTI4LCAwKSI+4Kah4KeH4KaZ4KeN4KaX4KeBPC9zcGFuPjxzcGFuIHN0eWxlPSJjb2xvcjpyZ2IoMCwgMTAwLCAwKSI+IOCmqOCmv+Cnn+CmqOCnjeCmpOCnjeCmsOCmo+CnhyDgppXgprDgpqjgp4Dgp58g4Ka44KaC4KaV4KeN4Kaw4Ka+4Kao4KeN4KakIOCmoeCmv+Cmj+CmqOCmuOCmv+CmuOCmvyfgprAg4Ka54Kaf4Kay4Ka+4KaH4KaoIOCmqOCmruCnjeCmrOCmsCA8L3NwYW4+PHNwYW4gc3R5bGU9ImNvbG9yOnJnYigwLCAyNTUsIDApIj4o4KenKcKgPC9zcGFuPuCmrOCnjeCmsOCmv+Cml+Cnh+CmgyDgppzgp4fgpqjgpr7gprDgp4fgprIg4KaH4Kau4Kaw4KeB4KayIOCmleCmvuCnn+Cnh+CmuCDgpprgp4zgpqfgp4HgprDgp4A8c3BhbiBzdHlsZT0iY29sb3I6cmdiKDAsIDI1NSwgMCkiPi08L3NwYW4+4Kem4Ken4Ket4Ken4KesLeCnpuCnrOCnqeCnquCnqOCnqyw8c3BhbiBzdHlsZT0iY29sb3I6cmdiKDAsIDI1NSwgMCkiPsKgKOCnqCnCoOCmoeCmvuCmgyDgpq7gp4vgprngpr7gpq7gp43gpq7gpqYg4Kay4KeB4KeO4Kar4KawIOCmsOCmueCmruCmvuCmqC3CoDAxNTIxMjA5NjQ1wqAo4KepKcKg4Kah4Ka+4KaDIOCmruCni+CmgyDgpofgpq7gpqbgpr7gpqbgp4HgprIg4Ka54KaVLTAxNzE1LTIzODc1NCwgKOCnqinCoOCmleCng+Cmt+Cmv+CmrOCmv+CmpiDgpq7gp4vgpoMg4KaG4Ka44Ka/4KarIOCmh+CmleCmrOCmvuCmsi0wMTcxNTQzNjkwNSw8L3NwYW4+wqA8c3BhbiBzdHlsZT0iY29sb3I6cmdiKDI1NSwgMCwgMCkiPijgp6sp4Kah4Ka+LiDgpq7gpr7gpqzgpr/gp5/gpr4g4Ka44KeB4Kay4Kak4Ka+4Kao4Ka+IOCmtuCni+CmreCmvi08L3NwYW4+PHNwYW4gc3R5bGU9ImNvbG9yOnJnYigyNTUsIDAsIDApOyBmb250LWZhbWlseTprYWxwdXJ1c2hyZWd1bGFyOyBmb250LXNpemU6MTRweCI+MDE1MjE0OTU1MjA8L3NwYW4+PHNwYW4gc3R5bGU9ImNvbG9yOnJnYigyNTUsIDAsIDApIj48c3BhbiBzdHlsZT0iZm9udC1mYW1pbHk6a2FscHVydXNocmVndWxhcjsgZm9udC1zaXplOjE0cHgiPiwg4KaF4Kae4KeN4Kaa4KayLeCnpywgKOCnrCnCoDwvc3Bhbj7gpqHgpr4uIOCmruCni+CmueCmvuCmruCnjeCmruCmpiDgprjgpr7gpqbgpq7gpr7gpqjCoCDgprjgpr7gppXgpr/gpqwtPC9zcGFuPjxzcGFuIHN0eWxlPSJjb2xvcjpyZ2IoMjU1LCAwLCAwKTsgZm9udC1mYW1pbHk6a2FscHVydXNocmVndWxhcjsgZm9udC1zaXplOjE0cHgiPjAxNzU5OTQyNDE0PC9zcGFuPjxzcGFuIHN0eWxlPSJjb2xvcjpyZ2IoMjU1LCAwLCAwKSI+PHNwYW4gc3R5bGU9ImZvbnQtZmFtaWx5OmthbHB1cnVzaHJlZ3VsYXI7IGZvbnQtc2l6ZToxNHB4Ij4swqDgpoXgpp7gp43gpprgprIt4KeoLCAo4KetKcKgPC9zcGFuPjwvc3Bhbj7gpqHgpr7gpoMg4KaG4Kac4Ka/4Kac4KeB4KaoIOCmqOCnh+Cmm+CmvjxzcGFuIHN0eWxlPSJjb2xvcjpyZ2IoMjU1LCAwLCAwKSI+LTwvc3Bhbj7gp6bgp6fgp63gp6vgp6zgp6jgp6bgp6/gp6rgp67gp6g8c3BhbiBzdHlsZT0iY29sb3I6cmdiKDI1NSwgMCwgMCkiPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTprYWxwdXJ1c2hyZWd1bGFyOyBmb250LXNpemU6MTRweCI+LCDgpoXgpp7gp43gpprgprIt4KepLCAo4KeuKcKgPC9zcGFuPuCmoeCmvuCmgyDgpq7gpr7gprngpq7gp4Hgpqbgpr4g4KaG4Kay4KeALTAxNzE1NDU2Njk4LMKgPHNwYW4gc3R5bGU9ImZvbnQtZmFtaWx5OmthbHB1cnVzaHJlZ3VsYXI7IGZvbnQtc2l6ZToxNHB4Ij7gpoXgpp7gp43gpprgprIt4KeqLDwvc3Bhbj7CoCjgp68pIOCmoeCmvuCmgyDgpo/gprgg4KaP4KauIOCmk+Cnn+CmvuCmuOCmv+CmruCngeCmsiDgpofgprjgprLgpr7gpq4tMDE3MzU4NDM2OTMswqA8c3BhbiBzdHlsZT0iZm9udC1mYW1pbHk6a2FscHVydXNocmVndWxhcjsgZm9udC1zaXplOjE0cHgiPuCmheCmnuCnjeCmmuCmsi3gp6ssICjgp6fgp6YpwqA8L3NwYW4+4Kah4Ka+4KaDIOCmruCni+CmgyDgpqvgpr/gprDgp4fgpr7gppwg4KaG4Kay4KauLTwvc3Bhbj48c3BhbiBzdHlsZT0iY29sb3I6cmdiKDI1NSwgMCwgMCk7IGZvbnQtZmFtaWx5OmthbHB1cnVzaHJlZ3VsYXI7IGZvbnQtc2l6ZToxNHB4Ij4wMTcxNjM5ODg4Njwvc3Bhbj48c3BhbiBzdHlsZT0iY29sb3I6cmdiKDI1NSwgMCwgMCkiPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTprYWxwdXJ1c2hyZWd1bGFyOyBmb250LXNpemU6MTRweCI+LCDgpoXgpp7gp43gpprgprIt4KesICjgp6fgp6cpPC9zcGFuPuCmoeCmvuCmgyDgpqvgpr7gprDgppzgpr7gpqjgpr4g4KaG4Kar4Kaw4KeL4KacLTwvc3Bhbj48c3BhbiBzdHlsZT0iY29sb3I6cmdiKDI1NSwgMCwgMCk7IGZvbnQtZmFtaWx5OmthbHB1cnVzaHJlZ3VsYXI7IGZvbnQtc2l6ZToxNHB4Ij4wMTc0NDk4OTkwOTwvc3Bhbj48c3BhbiBzdHlsZT0iY29sb3I6cmdiKDI1NSwgMCwgMCkiPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTprYWxwdXJ1c2hyZWd1bGFyOyBmb250LXNpemU6MTRweCI+LMKg4KaF4Kae4KeN4Kaa4KayLeCnrSAo4Ken4KeoKcKgPC9zcGFuPuCmoeCmvi4g4Kau4Ka+4Kas4Ka/4Kef4Ka+IOCmuOCngeCmsuCmpOCmvuCmqOCmviDgprbgp4vgpq3gpr4tPHNwYW4gc3R5bGU9ImZvbnQtZmFtaWx5OmthbHB1cnVzaHJlZ3VsYXI7IGZvbnQtc2l6ZToxNHB4Ij4wMTUyMTQ5NTUyMCzCoDwvc3Bhbj48c3BhbiBzdHlsZT0iZm9udC1mYW1pbHk6a2FscHVydXNocmVndWxhcjsgZm9udC1zaXplOjE0cHgiPuCmheCmnuCnjeCmmuCmsi3gp64gKOCnp+CnqSnCoDwvc3Bhbj7gpqHgpr4uIOCmuOCnh+CmvuCmqOCmv+Cnn+CmviDgprjgp4HgprLgpqTgpr7gpqjgpr4tPHNwYW4gc3R5bGU9ImZvbnQtZmFtaWx5OmthbHB1cnVzaHJlZ3VsYXI7IGZvbnQtc2l6ZToxNHB4Ij4wMTY3ODcxMzk0OSwg4KaF4Kae4KeN4Kaa4KayLeCnryAo4Ken4KeqKSA8L3NwYW4+4Kah4Ka+4KaDIOCmj+CmuCDgpo/gpq4g4KaT4Kef4Ka+4Ka44Ka/4Kau4KeB4KayIOCmh+CmuOCmsuCmvuCmri0wMTczNTg0MzY5Mywg4KaF4Kae4KeN4Kaa4KayLeCnp+Cnpjwvc3Bhbj48c3BhbiBzdHlsZT0iY29sb3I6cmdiKDAsIDI1NSwgMCkiPjxzcGFuIHN0eWxlPSJmb250LXNpemU6MTRweCI+Kio8L3NwYW4+PC9zcGFuPjxzcGFuIHN0eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOnJnYigyNDUsIDI0NSwgMjQ1KTsgZm9udC1mYW1pbHk6a2FscHVydXNocmVndWxhcjsgZm9udC1zaXplOjE0cHgiPuCmhuCmuOCngeCmqCAi4Ka44KeB4Ka44KeN4Kal4Kak4Ka+4KawIOCmnOCmqOCnjeCmr+CnhyDgprjgpr7gpq7gpr7gppzgpr/gppUg4KaG4Kao4KeN4Kam4KeL4Kay4KaoIOCml+CnnOCnhyDgpqTgp4HgprLgpr8iwqA8L3NwYW4+PHNwYW4gc3R5bGU9ImNvbG9yOnJnYigyNTUsIDAsIDApIj48c3BhbiBzdHlsZT0iZm9udC1zaXplOjE0cHgiPsKgPC9zcGFuPuCnp+CnpiDgpp/gpr7gp58g4Ken4KemIOCmruCmv+CmqOCmv+CmnyDgpqrgp43gprDgpqTgpr8g4Ka24Kao4Ka/4Kas4Ka+4KawLCDgpqjgpr/gppwg4Kao4Ka/4KacIOCmrOCmvuCmuOCmviDgppXgprDgpr8g4Kaq4Kaw4Ka/4Ka34KeN4KaV4Ka+4KawKio8L3NwYW4+PHNwYW4gc3R5bGU9ImJhY2tncm91bmQtY29sb3I6cmdiKDI0NSwgMjQ1LCAyNDUpOyBmb250LWZhbWlseTprYWxwdXJ1c2hyZWd1bGFyOyBmb250LXNpemU6MTRweCI+4Kak4Ka/4KaoIOCmpuCmv+CmqOCnhyDgpo/gppUg4Kam4Ka/4KaoIOCmnOCmruCmviDgpqrgpr7gpqjgpr8g4Kar4KeH4Kay4KeHIOCmpuCmv+CmqCoq4Kau4Ka+4Ka44KeN4KaVIOCmhuCmruCmvuCmsCDgprjgp4HgprDgppXgp43gprfgpr4g4Ka44Kas4Ka+4KawPC9zcGFuPjxzcGFuIHN0eWxlPSJjb2xvcjpyZ2IoMjU1LCAwLCAwKSI+wqA8L3NwYW4+PHNwYW4gc3R5bGU9ImZvbnQtc2l6ZToxNHB4Ij48c3BhbiBzdHlsZT0iY29sb3I6I0ZGMDAwMCI+Kio8c3BhbiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjpyZ2IoMjQ1LCAyNDUsIDI0NSk7IGZvbnQtZmFtaWx5OmthbHB1cnVzaHJlZ3VsYXIiPuCmoeCmv+Cmj+CmqOCmuOCmv+CmuOCmv+CmsCDgp6vgpp/gpr8g4Kao4KaX4KawIOCmruCmvuCmpOCng+CmuOCmpuCmqOCnhyDgppXgp4vgpq3gpr/gpqEt4Ken4KevIOCmuOCmguCmleCnjeCmsOCmvuCmqOCnjeCmpCDgpp/gp4fgprLgpr/gpq7gp4fgpqHgpr/gprjgpr/gpqgg4Ka44KeH4Kas4Ka+IOCmquCnjeCmsOCmpuCmvuCmqOClpCDgpq7gpr7gpqTgp4Pgprjgpqbgpqjgp4fgprAg4Kao4Ka+4KauIOCmj+CmrOCmgiDgpp/gp4fgprLgpr/gpqvgp4vgpqgg4Kao4Kau4KeN4Kas4KawOiDgpqrgpr/gpo8t4KenIOCmqOCmvuCmsOCngCDgpq7gp4jgpqTgp43gprDgp4Ag4Kau4KaX4Kas4Ka+4Kac4Ka+4KawLeCnq+CnruCnqeCnp+CnquCnr+CnqeCnqTwvc3Bhbj48c3BhbiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjpyZ2IoMjQ1LCAyNDUsIDI0NSk7IGZvbnQtZmFtaWx5OmthbHB1cnVzaHJlZ3VsYXIiPizCoMKg4Kaq4Ka/4KaPLeCnqCDgpqjgpr7gprDgp4Ag4Kau4KeI4Kak4KeN4Kaw4KeAIOCmruCni+CmueCmvuCmruCnjeCmruCmpuCmquCngeCmsC3gp6bgp6fgp6ngp6fgp6fgp6/gp6rgp6zgp6rgp6ngp6g8L3NwYW4+PHNwYW4gc3R5bGU9ImJhY2tncm91bmQtY29sb3I6cmdiKDI0NSwgMjQ1LCAyNDUpOyBmb250LWZhbWlseTprYWxwdXJ1c2hyZWd1bGFyIj4sIOCmquCmv+Cmjy3gp6kg4Kao4Ka+4Kaw4KeAIOCmruCniOCmpOCnjeCmsOCngCDgpqLgpr7gppXgpr4g4KaG4Ka54Ka44Kao4Ka/4Kef4Ka+IOCmruCmv+CmtuCmqCwg4Kao4KeH4KaV4Ka/4Kas4Ka+4Kec4Ka/4Kaw4Kaf4KeH4KaVLCDgpq7gpr/gprDgpqrgp4HgprAt4Kem4Ken4Kep4Kem4Ken4Ker4Kev4Kes4Keu4Kep4KevPC9zcGFuPjxzcGFuIHN0eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOnJnYigyNDUsIDI0NSwgMjQ1KTsgZm9udC1mYW1pbHk6a2FscHVydXNocmVndWxhciI+LMKg4Kaq4Ka/4KaPLeCnqiDgpqjgpr7gprDgp4Ag4Kau4KeI4Kak4KeN4Kaw4KeAIOCmquCmsuCnjeCmsuCmrOCngCwg4Kau4Ka/4Kaw4Kaq4KeB4KawLeCnpuCnp+CnreCnreCnpuCnreCnqOCnqOCnp+Cnr+Cnqjwvc3Bhbj48c3BhbiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjpyZ2IoMjQ1LCAyNDUsIDI0NSk7IGZvbnQtZmFtaWx5OmthbHB1cnVzaHJlZ3VsYXIiPizCoOCmquCmv+Cmjy3gp6sg4KaH4KaJ4Kaf4Ka/4Kaq4Ka/4KaP4Ka4IOCmieCmpOCnjeCmpOCmsOCmvi3gp6bgp6fgp6ngp6fgp6rgp63gp6zgp6zgp6vgp6rgp6s8L3NwYW4+PC9zcGFuPjwvc3Bhbj48c3BhbiBzdHlsZT0iY29sb3I6cmdiKDAsIDEyOCwgMCkiPsKgPC9zcGFuPjxzcGFuIHN0eWxlPSJjb2xvcjpyZ2IoMjU1LCAwLCAwKSI+Kio8L3NwYW4+PHNwYW4gc3R5bGU9ImNvbG9yOnJnYigwLCAxMjgsIDApIj7CoOCmuOCmruCnn+CmruCmpCDgppXgprDgp43gpqrgp4vgprDgp4fgprbgpqgg4KaV4KawIOCmquCmsOCmv+CmtuCni+CmpyDgppXgprDgp4cg4Kao4KaX4KawIOCmieCmqOCnjeCmqOCnn+CmqOCnhyDgprjgprngpr7gp5/gpqTgpr4g4KaV4Kaw4KeB4KaowqA8L3NwYW4+PHNwYW4gc3R5bGU9ImNvbG9yOnJnYigyNTUsIDAsIDApIj4qKsKgPC9zcGFuPjxzcGFuIHN0eWxlPSJjb2xvcjpyZ2IoMCwgMTI4LCAwKSI+4Kao4Ka/4Kaw4KeN4Kan4Ka+4Kaw4Ka/4KakIOCmoeCmvuCmuOCnjeCmn+CmrOCmv+CmqC/gprLgpr/gpp/gpr7gprDgpqzgpr/gpqgv4KaV4Kao4KeN4Kaf4KeH4KaH4Kao4Ka+4KawIOCmm+CmvuCnnOCmviDgpq/gpqTgp43gprDgpqTgpqTgp43gprAg4Kau4Kef4Kay4Ka+L+CmhuCmrOCmsOCnjeCmnOCmqOCmviDgpqvgp4fgprLgpqzgp4fgpqgg4Kao4Ka+wqA8L3NwYW4+PHNwYW4gc3R5bGU9ImNvbG9yOnJnYigyNTUsIDAsIDApIj4qKjwvc3Bhbj48c3BhbiBzdHlsZT0iY29sb3I6cmdiKDAsIDEyOCwgMCkiPsKg4Kao4Ka/4Kaw4KeN4Kau4Ka+4KaoIOCmuOCmvuCmruCml+CnjeCmsOCngC/gprDgpr7gpqzgpr/gprYv4Kau4Ka+4Kaf4Ka/IOCmh+CmpOCnjeCmr+CmvuCmpuCmvyDgprDgpr7gprjgp43gpqTgpr4v4Kar4KeB4Kaf4Kaq4Ka+4Kak4KeHIOCmsOCnh+CmluCnhyDgpo/gprLgpr7gppXgpr4g4KaF4Kaq4Kaw4Ka/4Kaa4KeN4Kab4Kao4KeN4KaoIOCmkyDgppzgpqjgprjgpr7gpqfgpr7gprDgpqjgp4fgprAg4Kaa4Kay4Ka+4Kaa4Kay4KeHIOCmheCmuOCngeCmrOCmv+Cmp+CmviDgprjgp4Pgprfgp43gpp/gpr8g4KaV4Kaw4Kas4KeH4KaoIOCmqOCmvsKgPC9zcGFuPjxzcGFuIHN0eWxlPSJjb2xvcjpyZ2IoMjU1LCAwLCAwKSI+Kio8L3NwYW4+PHNwYW4gc3R5bGU9ImNvbG9yOnJnYigwLCAxMjgsIDApIj7CoOCmqOCmsOCnjeCmpuCmruCmvuCnnyDgpobgpqzgprDgp43gppzgpqjgpr4v4Kau4Ka+4Kaf4Ka/L+CmrOCmvuCmsuCngSDgpofgpqTgp43gpq/gpr7gpqbgpr8g4Kar4KeH4Kay4Kas4KeH4KaoIOCmqOCmvsKgPC9zcGFuPjxzcGFuIHN0eWxlPSJjb2xvcjpyZ2IoMjU1LCAwLCAwKSI+Kio8L3NwYW4+PHNwYW4gc3R5bGU9ImNvbG9yOnJnYigwLCAxMjgsIDApIj7CoOCmp+CngeCmruCmquCmvuCmqCDgppMg4Kak4Ka+4Kau4Ka+4KaVIOCmuOCnjeCmrOCmvuCmuOCnjeCmpeCnjeCmr+Cnh+CmsCDgppzgpqjgp43gpq8g4Kau4Ka+4Kaw4Ka+4Kak4KeN4Kau4KaVIOCmleCnjeCmt+CmpOCmv+CmleCmsCwg4Kan4KeB4Kau4Kaq4Ka+4KaoIOCmkyDgpqTgpr7gpq7gpr7gppUg4Kab4Ka+4Kec4KeB4KaoLCDgprjgp4Hgprjgp43gpqUg4Kal4Ka+4KaV4KeB4KaowqA8L3NwYW4+PHNwYW4gc3R5bGU9ImNvbG9yOnJnYigyNTUsIDAsIDApIj4qKjwvc3Bhbj48c3BhbiBzdHlsZT0iY29sb3I6cmdiKDAsIDEyOCwgMCkiPsKg4Kau4Ka+4Kam4KaVIOCmuOCnh+CmrOCmqCDgpobgpqrgpqjgpr7gprAsIOCmhuCmquCmqOCmvuCmsCDgpqrgprDgpr/gpqzgpr7gprAg4KaTIOCmuOCmruCmvuCmnOCnh+CmsCDgppXgp43gprfgpqTgpr8g4KaV4Kaw4KeHLCDgpq7gpr7gpqbgppXgppXgp4cg4Kao4Ka+IOCmrOCmsuCmvyDgppMg4Kau4Ka+4Kam4KaV4Kau4KeB4KaV4KeN4KakIOCmuOCmruCmvuCmnCDgppfgp5zgpr/gpaTCoDwvc3Bhbj48L3A+Cgo8cCBzdHlsZT0idGV4dC1hbGlnbjpqdXN0aWZ5Ij7CoDwvcD4KPC9tYXJxdWVlPg=="> --}}
                                <marquee scrollamount="4"
                                    style="font-family: 'Kalpurush', sans-serif; font-size: 16px;    padding-top: 10px;">
                                    <i class="fas fa-play"></i> &nbsp; আপনার সন্তানের জন্ম নিবন্ধন সম্পন্ন
                                    করুন
                                    <i class="fas fa-play"></i> &nbsp; <samp style="color: red">**</samp> আবর্জনা সঠিক
                                    স্থানে ফেলুন
                                    <i class="fas fa-play"></i> &nbsp; <samp style="color: red">**</samp> সময়মতো
                                    পানির বিল পরিশোধ করুন
                                    <i class="fas fa-play"></i> &nbsp;<samp style="color: red">**</samp> যে কোন
                                    স্থাপনা নির্মাণের জন্য পৌরসভার
                                    অনুমোদন গ্রহন করুন এবং পরিকল্পিত নগরায়ণে সহায়তা করুন
                                    <i class="fas fa-play"></i> &nbsp; <samp style="color: red">**</samp> আপনার
                                    পৌরসভাকে পরিচ্ছন্ন রাখুন
                                    <i class="fas fa-play"></i> &nbsp; <samp style="color: red">**</samp> আপনার পৌর কর
                                    নিয়মিত পরিশোধ করুন
                                    <i class="fas fa-play"></i> &nbsp; <samp style="color: red">**</samp> হাজীগঞ্জ
                                    পৌরসভার পক্ষ থেকে সবাইকে শুভেচ্ছা

                                    <i class="fas fa-play"></i> &nbsp; <samp style="color: red">**</samp> মাদক মুক্ত
                                    সমাজ গঠন করুন
                                </marquee>
                                </rt-renderer>
                            </div>
                        </div>
                    </div>
                    <div data-widget_type="widget" data-widget_name="BlockWidget" data-widget_content_type="blocks"
                        data-widget_item="6922d3d2dbfbab28ce041c82" class="widget block-widget">
                        <div class="block-widget-container">
                            <div class="block-widget-content"> <rt-renderer
                                    encoded-content="PG1hcnF1ZWUgY2xhc3M9ImN1c3RvbS1tYXJxdWVlIiBkaXJlY3Rpb249ImxlZnQiIHNjcm9sbGFtb3VudD0iNyIgeG9ubW91c2VvdmVyPSJ0aGlzLnN0b3AoKSIgeG9ubW91c2VvdXQ9InRoaXMuc3RhcnQoKSI+PGg0PjxzcGFuIHN0eWxlPSJjb2xvcjpyZ2IoMjU1LDAsMCkiPioqPC9zcGFuPjxhIGhyZWY9Imh0dHBzOi8vZG5jYy5nb3YuYmQvcGFnZXMvc3RhdGljLXBhZ2VzL3ZpdGFtaW4tYS1wbHVzLWNhbXAtY2VudGVycy05b2dqenMtNmE0MDk4MDcwZjUzYTZmNjdmNGMyMDQ3Ij48c3BhbiBzdHlsZT0iY29sb3I6cmdiKDI1NSwwLDApIj7gpq3gpr/gpp/gpr7gpq7gpr/gpqgg4oCY4KaP4oCZIOCmquCnjeCmsuCmvuCmuCDgppXgp43gpq/gpr7gpq7gp43gpqrgp4fgpocg4KaV4KeH4Kao4KeN4Kam4KeN4Kaw4Ka44Kau4KeC4Ka5PC9zcGFuPjwvYT48c3BhbiBzdHlsZT0iY29sb3I6cmdiKDI1NSwwLDApO2ZvbnQtc2l6ZToxNnB4Ij4gPC9zcGFuPjxzcGFuIHN0eWxlPSJjb2xvcjpyZ2IoMCwxMjgsMCk7Zm9udC1zaXplOjE2cHgiPioqPC9zcGFuPjxhIHN0eWxlPSJmb250LXNpemU6MTRweCIgaHJlZj0iL3BhZ2VzL3N0YXRpYy1wYWdlcy82OTIyZTA3YTkzM2ViNjU1NjllMjc0MDYiPjxzcGFuIHN0eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOnJnYigwLDI1NSwwKTtjb2xvcjpyZ2IoMjU1LDAsMCkiPjxzdHJvbmc+4Kai4Ka+4KaV4Ka+IOCmieCmpOCnjeCmpOCmsCDgprjgpr/gpp/gpr8g4KaV4Kaw4KeN4Kaq4KeL4Kaw4KeH4Ka24Kao4KeH4KawIOCmrOCmv+CmreCmv+CmqOCnjeCmqCDgpoXgpp7gp43gpprgprIvIOCmk+Cnn+CmvuCmsOCnjeCmoeCnh+CmsCDgpqbgpr7gp5/gpr/gpqTgp43gpqzgpqrgp43gprDgpr7gpqrgp43gpqQg4KaV4Kaw4KeN4Kau4KaV4Kaw4KeN4Kak4Ka+4KawICjgprjgp43gpqzgpr7gprjgp43gpqXgp43gpq8g4KaTIOCmrOCmsOCnjeCmnOCnjeCmryDgpqzgpr/gpq3gpr7gppcpIOCmpOCmvuCmsuCmv+CmleCmvjwvc3Ryb25nPjwvc3Bhbj48L2E+PGEgaHJlZj0iL3BhZ2VzL3N0YXRpYy1wYWdlcy82OTIyZTA3YTkzM2ViNjU1NjllMjc0MDYiPjxzcGFuIHN0eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOnJnYigwLDI1NSwwKTtjb2xvcjpyZ2IoMjU1LDAsMCk7Zm9udC1zaXplOjE0cHgiPjxzcGFuIGNsYXNzPSJtYXJrZXIiPjxzdHJvbmc+wqA8L3N0cm9uZz48L3NwYW4+PC9zcGFuPjwvYT48c3BhbiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjpyZ2IoMjU1LDIxNSwwKTtmb250LXNpemU6MTRweCI+PHNwYW4gY2xhc3M9Im1hcmtlciI+PHN0cm9uZz4qKsKgPC9zdHJvbmc+PC9zcGFuPjwvc3Bhbj48c3BhbiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjpyZ2IoMjU1LDIxNSwwKSI+PHN0cm9uZz7gpoXgpqbgp43gpq8g4Kem4KepIOCmhuCml+CmuOCnjeCmnyDgp6jgp6bgp6jgp6wg4KaW4KeN4Kaw4Ka/4KaDIOCmpOCmvuCmsOCmv+CmluCnhyDgpqLgpr7gppXgpr4g4KaJ4Kak4KeN4Kak4KawIOCmuOCmv+Cmn+CmvyDgppXgprDgp43gpqrgp4vgprDgp4fgprbgpqgg4KaG4Kak4Ka+4Kan4KeA4KaoIOCmj+CmsuCmvuCmleCmvuCnnyDgpqzgprDgp43gppzgp43gpq8g4KaF4Kaq4Ka44Ka+4Kaw4Kaj4KeH4KawIOCmquCmsOCmv+CmruCmvuCmoyAtIOCnqSzgp67gp6jgp68g4Kau4KeH4Kaf4KeN4Kaw4Ka/4KaVIOCmn+CmqDwvc3Ryb25nPjwvc3Bhbj48c3BhbiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjpyZ2IoMjU1LDIxNSwwKTtmb250LXNpemU6MTRweCI+PHNwYW4gY2xhc3M9Im1hcmtlciI+PHN0cm9uZz7CoDwvc3Ryb25nPjwvc3Bhbj48L3NwYW4+PGEgc3R5bGU9ImZvbnQtc2l6ZToxNHB4IiBocmVmPSIvcGFnZXMvc3RhdGljLXBhZ2VzLzY5MjJlMDdhOTMzZWI2NTU2OWUyNzQwNiI+PHNwYW4gc3R5bGU9ImNvbG9yOnJnYigyNTUsMCwwKSI+PHN0cm9uZz4qKjwvc3Ryb25nPjwvc3Bhbj48L2E+PC9oND48L21hcnF1ZWU+">
                                    <marquee class="custom-marquee" direction="left" scrollamount="7"
                                        xonmouseover="this.stop()" xonmouseout="this.start()">
                                        <h4><span style="color:rgb(255,0,0)">**</span><a
                                                href="pages/static-pages/vitamin-a-plus-camp-centers-9ogjzs-6a4098070f53a6f67f4c2047.html"><span
                                                    style="color:rgb(255,0,0)">ভিটামিন ‘এ’ প্লাস ক্যাম্পেই
                                                    কেন্দ্রসমূহ</span></a><span
                                                style="color:rgb(255,0,0);font-size:16px"> </span><span
                                                style="color:rgb(0,128,0);font-size:16px">**</span><a
                                                style="font-size:14px"
                                                href="pages/static-pages/6922e07a933eb65569e27406.html"><span
                                                    style="background-color:rgb(0,255,0);color:rgb(255,0,0)"><strong>ঢাকা
                                                        উত্তর সিটি কর্পোরেশনের বিভিন্ন অঞ্চল/ ওয়ার্ডের দায়িত্বপ্রাপ্ত
                                                        কর্মকর্তার (স্বাস্থ্য ও বর্জ্য বিভাগ)
                                                        তালিকা</strong></span></a><a
                                                href="pages/static-pages/6922e07a933eb65569e27406.html"><span
                                                    style="background-color:rgb(0,255,0);color:rgb(255,0,0);font-size:14px"><span
                                                        class="marker"><strong> </strong></span></span></a><span
                                                style="background-color:rgb(255,215,0);font-size:14px"><span
                                                    class="marker"><strong>** </strong></span></span><span
                                                style="background-color:rgb(255,215,0)"><strong>অদ্য ০৩ আগস্ট ২০২৬
                                                    খ্রিঃ তারিখে ঢাকা উত্তর সিটি কর্পোরেশন আতাধীন এলাকায় বর্জ্য অপসারণের
                                                    পরিমাণ - ৩,৮২৯ মেট্রিক টন</strong></span><span
                                                style="background-color:rgb(255,215,0);font-size:14px"><span
                                                    class="marker"><strong> </strong></span></span><a
                                                style="font-size:14px"
                                                href="pages/static-pages/6922e07a933eb65569e27406.html"><span
                                                    style="color:rgb(255,0,0)"><strong>**</strong></span></a></h4>
                                    </marquee>
                                </rt-renderer> </div>
                        </div>
                    </div>
                    <section data-widget_type="widget" data-widget_name="NoticeNewsCardWidget"
                        class="widget notice-news-card-widget">
                        <div class="notice-card">
                            <p class="notice-title"><i class="ph ph-file-text"></i> নোটিশ বোর্ড</p>
                            <ul class="notice-unordered-list">
                                <li class="notice-content-list"> <a class="notice-link"
                                        href="pages/notices/%e0%a6%a1%e0%a6%bf%e0%a6%8f%e0%a6%a8%e0%a6%b8%e0%a6%bf%e0%a6%b8%e0%a6%bf%e0%a6%b0-%e0%a6%b8%e0%a6%95%e0%a6%b2-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a7%8c%e0%a6%b6%e0%a6%b2%e0%a7%80%e0%a6%97%e0%a6%a3%e0%a7%87%e0%a6%b0-%e0%a6%8f%e0%a6%ac%e0%a6%82-%e0%a7%a7%e0%a7%ad%e0%a6%a4%e0%a6%ae-%e0%a6%a5%e0%a7%87%e0%a6%95%e0%a7%87-%e0%a7%a8%e0%a7%a6%e0%a6%a4%e0%a6%ae-%e0%a6%97%e0%a7%8d%e0%a6%b0%e0%a7%87%e0%a6%a1%e0%a7%87%e0%a6%b0-%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%9a%e0%a6%be%e0%a6%b0%e0%a7%80%e0%a6%a6%e0%a7%87%e0%a6%b0-%e0%a6%96%e0%a6%b8%e0%a7%9c%e0%a6%be-%e0%a6%9c%e0%a7%8d%e0%a6%af%e0%a7%87%e0%a6%b7%e0%a7%8d%e0%a6%a0%e0%a6%a4%e0%a6%be-%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a6%be-%e0%a6%9a%e0%a7%82%e0%a7%9c%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a4-%e0%a6%95%e0%a6%b0%e0%a6%a3-%e0%a6%b8%e0%a6%82%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a4-%e0%a6%b8%e0%a6%ad%e0%a6%be%e0%a6%b0-%e0%a6%a8%e0%a7%8b%e0%a6%9f%e0%a6%bf%e0%a6%b6-%e0%a6%b8%e0%a7%8d%e0%a6%ae%e0%a6%be%e0%a6%b0%e0%a6%95-%e0%a6%a8%e0%a6%82-%e0%a7%aa%e0%a7%ac%e0%a7%a7%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%aa%e0%a7%a7%e0%a7%a8%e0%a7%a6%e0%a7%a6%e0%a7%a7%e0%a7%a8%e0%a7%a8%e0%a7%ac-%e0%a7%ac%e0%a7%af%e0%a7%ad-%e0%a6%a4%e0%a6%be%e0%a6%b0%e0%a6%bf%e0%a6%96%e0%a6%83-%e0%a7%a6%e0%a7%a9%e0%a7%a6%e0%a7%ae%e0%a7%a8%e0%a7%a6%e0%a7%a8%e0%a7%ac-vq8ju7">
                                        <div class="notice-content-icon"> <i class="dot"></i> </div>
                                        <div class="notice-text-wrap">
                                            <p title="ডিএনসিসি&#39;র সকল প্রকৌশলীগণের এবং ১৭তম থেকে ২০তম গ্রেডের কর্মচারীদের খসড়া জ্যেষ্ঠতা তালিকা চূড়ান্ত করণ সংক্রান্ত সভার নোটিশ। স্মারক নং- ৪৬.১০.০০০০.০০০.০০৪.১২.০০১২.২৬-৬৯৭; তারিখঃ ০৩/০৮/২০২৬।"
                                                class="notice-text"> ডিএনসিসি&#39;র সকল প্রকৌশলীগণের এবং ১৭তম থেকে
                                                ২০তম গ্রেডের কর্মচারীদের খসড়া জ্যেষ্ঠতা তালিকা চূড়ান্ত করণ সংক্রান্ত
                                                সভার নোটিশ। স্মারক নং- ৪৬.১০.০০০০.০০০.০০৪.১২.০০১২.২৬-৬৯৭; তারিখঃ
                                                ০৩/০৮/২০২৬। </p>
                                            <p class="notice-text"> <span class="notice-tag"><i
                                                        class="ph ph-calendar-dots"></i> ০৩-০৮-২০২৬</span> <strong
                                                    class="notice-tag">নতুন</strong> <strong
                                                    class="notice-tag">সাধারণ</strong> </p>
                                        </div>
                                        <div class="notice-content-icon"> <i class="ph ph-caret-right"></i> </div>
                                    </a> </li>
                                <li class="notice-content-list"> <a class="notice-link"
                                        href="pages/notices/%e0%a6%b8%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a7%87%e0%a6%b0-%e0%a6%a8%e0%a6%bf%e0%a6%b0%e0%a7%8d%e0%a6%ac%e0%a6%9a%e0%a6%a8%e0%a7%80-%e0%a6%87%e0%a6%b6%e0%a6%a4%e0%a7%87%e0%a6%b9%e0%a6%be%e0%a6%b0-%e0%a6%ac%e0%a6%be%e0%a6%b8%e0%a7%8d%e0%a6%a4%e0%a6%ac%e0%a6%be%e0%a7%9f%e0%a6%a8-%e0%a6%b8%e0%a6%82%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a4-%e0%a6%b8%e0%a6%ad%e0%a6%be%e0%a6%b0-%e0%a6%a8%e0%a7%8b%e0%a6%9f%e0%a6%bf%e0%a6%b6-%e0%a6%b8%e0%a7%8d%e0%a6%ae%e0%a6%be%e0%a6%b0%e0%a6%95-%e0%a6%a8%e0%a6%82-%e0%a7%aa%e0%a7%ac%e0%a7%a7%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%ac%e0%a7%af%e0%a7%af%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a8%e0%a7%a8%e0%a7%ac-%e0%a7%aa%e0%a7%ae%e0%a7%a6-%e0%a6%a4%e0%a6%be%e0%a6%b0%e0%a6%bf%e0%a6%96%e0%a6%83-%e0%a7%a6%e0%a7%a9%e0%a7%a6%e0%a7%ae%e0%a7%a8%e0%a7%a6%e0%a7%a8%e0%a7%ac-cls0v2-6a70728ebc7faefed86cc9c1.html">
                                        <div class="notice-content-icon"> <i class="dot"></i> </div>
                                        <div class="notice-text-wrap">
                                            <p title="সরকারের নির্বচনী ইশতেহার বাস্তবায়ন সংক্রান্ত সভার নোটিশ। স্মারক নং- ৪৬.১০.০০০০.০০০.০০৬.৯৯.০০০২.২৬-৪৮০; তারিখঃ ০৩/০৮/২০২৬।"
                                                class="notice-text"> সরকারের নির্বচনী ইশতেহার বাস্তবায়ন সংক্রান্ত সভার
                                                নোটিশ। স্মারক নং- ৪৬.১০.০০০০.০০০.০০৬.৯৯.০০০২.২৬-৪৮০; তারিখঃ ০৩/০৮/২০২৬।
                                            </p>
                                            <p class="notice-text"> <span class="notice-tag"><i
                                                        class="ph ph-calendar-dots"></i> ০৩-০৮-২০২৬</span> <strong
                                                    class="notice-tag">নতুন</strong> <strong
                                                    class="notice-tag">সাধারণ</strong> </p>
                                        </div>
                                        <div class="notice-content-icon"> <i class="ph ph-caret-right"></i> </div>
                                    </a> </li>
                                <li class="notice-content-list"> <a class="notice-link"
                                        href="pages/notices/%e0%a7%a6%e0%a7%ab-%e0%a6%86%e0%a6%97%e0%a6%b8%e0%a7%8d%e0%a6%9f-%e0%a6%9c%e0%a7%81%e0%a6%b2%e0%a6%be%e0%a6%87-%e0%a6%97%e0%a6%a3%e0%a6%85%e0%a6%ad%e0%a7%8d%e0%a6%af%e0%a7%81%e0%a6%a4%e0%a7%8d%e0%a6%a5%e0%a6%be%e0%a6%a8-%e0%a6%a6%e0%a6%bf%e0%a6%ac%e0%a6%b8-%e0%a7%a8%e0%a7%a6%e0%a7%a8%e0%a7%ac-%e0%a6%89%e0%a6%aa%e0%a6%b2%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a7%8d%e0%a6%af%e0%a7%87-%e0%a6%a1%e0%a6%bf%e0%a6%8f%e0%a6%a8%e0%a6%b8%e0%a6%bf%e0%a6%b8%e0%a6%bf%e0%a6%b0-%e0%a6%86%e0%a6%93%e0%a6%a4%e0%a6%be%e0%a6%a7%e0%a7%80%e0%a6%a8-%e0%a6%b6%e0%a6%bf%e0%a6%b6%e0%a7%81-%e0%a6%aa%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%95-%e0%a6%89%e0%a6%a8%e0%a7%8d%e0%a6%ae%e0%a7%81%e0%a6%95%e0%a7%8d%e0%a6%a4-%e0%a6%b0%e0%a7%87%e0%a6%96%e0%a7%87-%e0%a6%b8%e0%a6%bf%e0%a6%a8%e0%a6%be-%e0%a6%9f%e0%a6%bf%e0%a6%95%e0%a6%bf%e0%a6%9f%e0%a7%87-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8%e0%a7%87%e0%a6%b0-%e0%a6%ac%e0%a7%8d%e0%a6%af%e0%a6%ac%e0%a6%b8%e0%a7%8d%e0%a6%a5%e0%a6%be-%e0%a6%b8%e0%a7%8d%e0%a6%ae%e0%a6%be%e0%a6%b0%e0%a6%95-%e0%a6%a8%e0%a6%82-%e0%a7%aa%e0%a7%ac%e0%a7%a7%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a8%e0%a7%a6%e0%a7%a6%e0%a7%a6%e0%a7%a8%e0%a7%ad%e0%a7%ae%e0%a7%a8%e0%a7%a9-%e0%a7%af%e0%a7%ad%e0%a7%a7-%e0%a6%a4%e0%a6%be%e0%a6%b0%e0%a6%bf%e0%a6%96%e0%a6%83-%e0%a7%a6%e0%a7%a9%e0%a7%a6%e0%a7%ae%e0%a7%a8%e0%a7%a6%e0%a7%a8%e0%a7%ac-efhcw3-6">
                                        <div class="notice-content-icon"> <i class="dot"></i> </div>
                                        <div class="notice-text-wrap">
                                            <p title="০৫ আগস্ট জুলাই গণঅভ্যুত্থান দিবস-২০২৬ উপলক্ষ্যে ডিএনসিসি&#39;র আওতাধীন শিশু পার্ক উন্মুক্ত রেখে সিনা টিকিটে প্রদর্শনের ব্যবস্থা। স্মারক নং- ৪৬.১০.০০০০.০২০.০০.২৭৮.২৩-৯৭১; তারিখঃ ০৩/০৮/২০২৬।"
                                                class="notice-text"> ০৫ আগস্ট জুলাই গণঅভ্যুত্থান দিবস-২০২৬ উপলক্ষ্যে
                                                ডিএনসিসি&#39;র আওতাধীন শিশু পার্ক উন্মুক্ত রেখে সিনা টিকিটে প্রদর্শনের
                                                ব্যবস্থা। স্মারক নং- ৪৬.১০.০০০০.০২০.০০.২৭৮.২৩-৯৭১; তারিখঃ ০৩/০৮/২০২৬।
                                            </p>
                                            <p class="notice-text"> <span class="notice-tag"><i
                                                        class="ph ph-calendar-dots"></i> ০৩-০৮-২০২৬</span> <strong
                                                    class="notice-tag">নতুন</strong> <strong
                                                    class="notice-tag">সাধারণ</strong> </p>
                                        </div>
                                        <div class="notice-content-icon"> <i class="ph ph-caret-right"></i> </div>
                                    </a> </li>
                            </ul>
                        </div>
                        <div class="all-btn"> <a href="pages/notices.html"> সকল নোটিশ দেখুন <i
                                    class="ph ph-arrow-right"></i> </a> </div>
                        <div class="news-card">
                            <section style="" class="widget news-card-widget">
                                <div class="news-card-widget-scroll-container">
                                    <div class="news-card-widget-news-title">খবর</div>
                                    <div class="news-card-widget-ticker"> <a
                                            href="pages/meeting-minutes/6a61e2d57e496b05651a5508.html"
                                            class="new-content scroll-text"> ঢাকা উত্তর সিটি কর্পোরেশন সভার (বাজেট)
                                            কার্যবিবরণী (১৬ তম সভা)।</a> <a
                                            href="pages/news/%e0%a6%95%e0%a6%bf%e0%a6%89%e0%a6%b2%e0%a7%87%e0%a6%95%e0%a7%8d%e0%a6%b8-%e0%a6%ae%e0%a6%b6%e0%a6%be-%e0%a6%a8%e0%a6%bf%e0%a7%9f%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a6%a3%e0%a7%87-%e0%a6%a1%e0%a6%bf%e0%a6%8f%e0%a6%a8%e0%a6%b8%e0%a6%bf%e0%a6%b8%e0%a6%bf%e0%a6%a4%e0%a7%87-%e0%a6%b8%e0%a6%ae%e0%a6%a8%e0%a7%8d%e0%a6%ac%e0%a6%bf%e0%a6%a4-%e0%a6%85%e0%a6%ad%e0%a6%bf%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b6%e0%a7%81%e0%a6%b0%e0%a7%81-9f2786-6922da90933eb65569e055eb.html"
                                            class="new-content scroll-text"> কিউলেক্স মশা নিয়ন্ত্রণে ডিএনসিসিতে
                                            সমন্বিত অভিযান শুরু।</a> <a
                                            href="pages/news/%e0%a7%ae-%e0%a6%ae%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%9a-%e0%a6%a5%e0%a7%87%e0%a6%95%e0%a7%87-%e0%a6%a1%e0%a6%bf%e0%a6%8f%e0%a6%a8%e0%a6%b8%e0%a6%bf%e0%a6%b8%e0%a6%bf%e0%a6%a4%e0%a7%87-%e0%a6%95%e0%a6%bf%e0%a6%89%e0%a6%b2%e0%a7%87%e0%a6%95%e0%a7%8d%e0%a6%b8-%e0%a6%ae%e0%a6%b6%e0%a6%be-%e0%a6%a8%e0%a6%bf%e0%a6%a7%e0%a6%a8%e0%a7%87-%e0%a6%b8%e0%a6%ae%e0%a6%a8%e0%a7%8d%e0%a6%ac%e0%a6%bf%e0%a6%a4-%e0%a6%85%e0%a6%ad%e0%a6%bf%e0%a6%af%e0%a6%be%e0%a6%a8-%e0%a6%b6%e0%a7%81%e0%a6%b0%e0%a7%81-2beafc-6922d8de933eb65569dfac3d.html"
                                            class="new-content scroll-text"> ৮ মার্চ থেকে ডিএনসিসিতে কিউলেক্স মশা
                                            নিধনে সমন্বিত অভিযান শুরু।</a> <a
                                            href="pages/news/%e0%a6%a1%e0%a6%bf%e0%a6%8f%e0%a6%a8%e0%a6%b8%e0%a6%bf%e0%a6%b8%e0%a6%bf%e0%a6%b0-%e0%a6%ac%e0%a6%bf%e0%a6%b6%e0%a7%87%e0%a6%b7-%e0%a6%ae%e0%a6%b6%e0%a6%95-%e0%a6%a8%e0%a6%bf%e0%a6%a7%e0%a6%a8-%e0%a6%85%e0%a6%ad%e0%a6%bf%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a7%87%e0%a6%b0-%e0%a6%aa%e0%a6%9e%e0%a7%8d%e0%a6%9a%e0%a6%ae-%e0%a6%a6%e0%a6%bf%e0%a6%a8%e0%a7%87-%e0%a6%9b%e0%a7%9f-%e0%a6%b9%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0-%e0%a6%b8%e0%a7%8d%e0%a6%a5%e0%a6%be%e0%a6%aa%e0%a6%a8%e0%a6%be-d3992a-6922dc44933eb65569e0f60b.html"
                                            class="new-content scroll-text"> ডিএনসিসির বিশেষ মশক নিধন অভিযানের পঞ্চম
                                            দিনে ছয় হাজার স্থাপনা পরিদর্শন, একাশি হাজার টাকা জরিমানা।</a> <a
                                            href="pages/news/%e0%a6%a1%e0%a6%bf%e0%a6%8f%e0%a6%a8%e0%a6%b8%e0%a6%bf%e0%a6%b8%e0%a6%bf%e0%a6%b0-%e0%a6%ac%e0%a6%bf%e0%a6%b6%e0%a7%87%e0%a6%b7-%e0%a6%ae%e0%a6%b6%e0%a6%95-%e0%a6%a8%e0%a6%bf%e0%a6%a7%e0%a6%a8-%e0%a6%85%e0%a6%ad%e0%a6%bf%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a7%87%e0%a6%b0-%e0%a6%9a%e0%a6%a4%e0%a7%81%e0%a6%b0%e0%a7%8d%e0%a6%a5-%e0%a6%a6%e0%a6%bf%e0%a6%a8%e0%a7%87-%e0%a6%b8%e0%a6%be%e0%a7%9c%e0%a7%87-%e0%a6%9b%e0%a7%9f-%e0%a6%b9%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0-085c4f-6922ddd6933eb65569e168d0.html"
                                            class="new-content scroll-text"> ডিএনসিসির বিশেষ মশক নিধন অভিযানের চতুর্থ
                                            দিনে সাড়ে ছয় হাজার স্থাপনা পরিদর্শন, দেড় লাখ টাকা জরিমানা।</a> </div>
                                    <div class="all-btn"> <a href="pages/news/index.html"> সকল </a> </div>
                                </div>
                            </section>
                        </div>
                    </section>
                    <section data-widget_type="widget" data-widget_name="ServiceBoxExpandableStackWidget"
                        class="widget service-box-expandable-stack-widget"> <input type="checkbox"
                            style="display:none;" id="check-789835" class="expand-toggle">
                        <section class="widget service-box-stack-widget widget-container-row">
                            <div class="service-box-stack-widget-header">
                                <p class="service-box-stack-widget-title"> সেবা সমূহ </p> <a
                                    href="pages/service-boxes.html" class="service-box-stack-widget-link"> সব দেখুন
                                </a>
                            </div>
                            <div class='container-col-6'>
                                <div class="widget service-box-widget">
                                    <h1 class="service-box-title" style="color: black;"> আমাদের বিষয়ে </h1>
                                    <div class="service-box-grid">
                                        <div class="service-box-col-span-4 service-box-img-container"> <img
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/ead10c22742a45178eeb786c549ccfff.png"
                                                alt="আমাদের বিষয়ে" /> </div>
                                        <div class="service-box-col-span-8">
                                            <ul class="service-box-list">
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="আমাদের সম্পর্কে"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922e044933eb65569e2644c.html">আমাদের
                                                        সম্পর্কে</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="সাংগঠনিক কাঠামো"
                                                        class="service-box-list-link"
                                                        href="pages/organograms/6922d918933eb65569dfc7d3.html">সাংগঠনিক
                                                        কাঠামো</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="সিটি কর্পোরেশনের ইতিহাস" class="service-box-list-link"
                                                        href="pages/static-pages/6922df2b933eb65569e20537.html">সিটি
                                                        কর্পোরেশনের ইতিহাস</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="লোকেশন ও আয়তন"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922ded3933eb65569e1da8e.html">লোকেশন
                                                        ও আয়তন</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='container-col-6'>
                                <div class="widget service-box-widget">
                                    <h1 class="service-box-title" style="color: black;"> বিজ্ঞপ্তি/আদেশ/দরপত্র </h1>
                                    <div class="service-box-grid">
                                        <div class="service-box-col-span-4 service-box-img-container"> <img
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/9c4ab052ca1d4ccc99059aa8c71a260f.png"
                                                alt="বিজ্ঞপ্তি/আদেশ/দরপত্র" /> </div>
                                        <div class="service-box-col-span-8">
                                            <ul class="service-box-list">
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="দরপত্র"
                                                        class="service-box-list-link"
                                                        href="pages/tenders.html">দরপত্র</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="কোটেশন বিজ্ঞপ্তি"
                                                        class="service-box-list-link"
                                                        href="pages/tenders8023.html?filters=%7B%22tender_type%22%3A%226a1eb325407cdbf736b45ff2%22%7D">কোটেশন
                                                        বিজ্ঞপ্তি</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="অফিস আদেশ"
                                                        class="service-box-list-link"
                                                        href="pages/office-orders.html">অফিস আদেশ</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="নিয়োগ বিজ্ঞপ্তি"
                                                        class="service-box-list-link"
                                                        href="pages/publications.html">নিয়োগ বিজ্ঞপ্তি</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='container-col-6'>
                                <div class="widget service-box-widget">
                                    <h1 class="service-box-title" style="color: black;"> আইন ও বিধিমালা </h1>
                                    <div class="service-box-grid">
                                        <div class="service-box-col-span-4 service-box-img-container"> <img
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/df052eb87bb94b9190ae153f784f4966.png"
                                                alt="আইন ও বিধিমালা" /> </div>
                                        <div class="service-box-col-span-8">
                                            <ul class="service-box-list">
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="প্রজ্ঞাপন/বিজ্ঞপ্তি" class="service-box-list-link"
                                                        href="pages/notification-circulars.html">প্রজ্ঞাপন/বিজ্ঞপ্তি</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="নীতিমালা"
                                                        class="service-box-list-link"
                                                        href="pages/policies.html">নীতিমালা</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="রেইট চার্ট"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922dfb8933eb65569e23a97.html">রেইট
                                                        চার্ট</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="সভার কার্যবিবরণী"
                                                        class="service-box-list-link"
                                                        href="pages/meeting-minutes.html">সভার কার্যবিবরণী</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='container-col-6'>
                                <div class="widget service-box-widget">
                                    <h1 class="service-box-title" style="color: black;"> অভিযোগ প্রতিকার ব্যবস্থাপনা
                                    </h1>
                                    <div class="service-box-grid">
                                        <div class="service-box-col-span-4 service-box-img-container"> <img
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/8dd137f85bd94010891934aa2bd742a4.png"
                                                alt="অভিযোগ প্রতিকার ব্যবস্থাপনা" /> </div>
                                        <div class="service-box-col-span-8">
                                            <ul class="service-box-list">
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="অনিক ও আপিল কর্মকর্তাগণ" class="service-box-list-link"
                                                        href="pages/static-pages/6922e07a933eb65569e273fa.html">অনিক ও
                                                        আপিল কর্মকর্তাগণ</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="মাসিক/ত্রৈমাসিক/বার্ষিক পরিবীক্ষণ/মূল্যায়ন প্রতিবেদন"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922debb933eb65569e1cf62.html">মাসিক/ত্রৈমাসিক/বার্ষিক
                                                        পরিবীক্ষণ/মূল্যায়ন প্রতিবেদন</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="অভিযোগ দাখিল (অনলাইনে আবেদন)"
                                                        class="service-box-list-link"
                                                        href="http://www.grs.gov.bd/">অভিযোগ দাখিল (অনলাইনে আবেদন)</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="আইন ও বিধিমালা"
                                                        class="service-box-list-link"
                                                        href="https://objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-cabinet/2024/12/d5f72d9cac1d476a8a10d6ee8dee6dfb.pdf">আইন
                                                        ও বিধিমালা</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='container-col-6'>
                                <div class="widget service-box-widget">
                                    <h1 class="service-box-title" style="color: black;"> বাজেট ও প্রকল্প </h1>
                                    <div class="service-box-grid">
                                        <div class="service-box-col-span-4 service-box-img-container"> <img
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/b9339e8bad944716bb31374253d03105.png"
                                                alt="বাজেট ও প্রকল্প" /> </div>
                                        <div class="service-box-col-span-8">
                                            <ul class="service-box-list">
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="বাজেট"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922df87933eb65569e22910.html">বাজেট</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="প্রতিবেদন"
                                                        class="service-box-list-link"
                                                        href="pages/annual-reports.html">প্রতিবেদন</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="প্রকল্প/কর্মসূচি"
                                                        class="service-box-list-link"
                                                        href="pages/projects.html">প্রকল্প/কর্মসূচি</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="ই-জিপি ওয়েব লিংক"
                                                        class="service-box-list-link"
                                                        href="https://www.eprocure.gov.bd/">ই-জিপি ওয়েব লিংক</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='container-col-6'>
                                <div class="widget service-box-widget">
                                    <h1 class="service-box-title" style="color: black;"> শুদ্ধাচার </h1>
                                    <div class="service-box-grid">
                                        <div class="service-box-col-span-4 service-box-img-container"> <img
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/07f341a1f0324c629f463311b6b33705.png"
                                                alt="শুদ্ধাচার" /> </div>
                                        <div class="service-box-col-span-8">
                                            <ul class="service-box-list">
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="জাতীয় শুদ্ধাচার কৌশল" class="service-box-list-link"
                                                        href="pages/static-pages/6922e0a6933eb65569e28047.html">জাতীয়
                                                        শুদ্ধাচার কৌশল</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="কমিটি"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922e035933eb65569e26013.html">কমিটি</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="কর্মপরিকল্পনা"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922dfc2933eb65569e23d82.html">কর্মপরিকল্পনা</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="প্রজ্ঞাপন/পরিপত্র/নীতিমালা"
                                                        class="service-box-list-link"
                                                        href="https://objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-cabinet/2024/12/4f3413dc881a429d987691b82d9e657e.pdf">প্রজ্ঞাপন/পরিপত্র/নীতিমালা</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='container-col-6'>
                                <div class="widget service-box-widget">
                                    <h1 class="service-box-title" style="color: black;"> ফরম </h1>
                                    <div class="service-box-grid">
                                        <div class="service-box-col-span-4 service-box-img-container"> <img
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/24a703dba5904503b20d51c8135624cc.png"
                                                alt="ফরম" /> </div>
                                        <div class="service-box-col-span-8">
                                            <ul class="service-box-list">
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="প্রয়োজনীয় ফরমসমূহ" class="service-box-list-link"
                                                        href="pages/forms.html">প্রয়োজনীয় ফরমসমূহ</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="ফরমস পোর্টাল"
                                                        class="service-box-list-link" href="index.html">ফরমস
                                                        পোর্টাল</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="ডাটা সীট"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922de25933eb65569e188d7.html">ডাটা
                                                        সীট</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="অভিযোগ ও পরামর্শ"
                                                        class="service-box-list-link"
                                                        href="pages/web-forms/6922d3c081fc96cef9e9beb2.html">অভিযোগ ও
                                                        পরামর্শ</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='container-col-6'>
                                <div class="widget service-box-widget">
                                    <h1 class="service-box-title" style="color: black;"> তথ্য অধিকার </h1>
                                    <div class="service-box-grid">
                                        <div class="service-box-col-span-4 service-box-img-container"> <img
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/2c9c29991ecb4965b90c00a525607105.png"
                                                alt="তথ্য অধিকার" /> </div>
                                        <div class="service-box-col-span-8">
                                            <ul class="service-box-list">
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="তথ্য প্রদানকারী কর্মকর্তা"
                                                        class="service-box-list-link"
                                                        href="views/info-officers.html">তথ্য প্রদানকারী কর্মকর্তা</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="আবেদন ও আপিল ফরম"
                                                        class="service-box-list-link" href="index.html">আবেদন ও আপিল
                                                        ফরম</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="আইন ও বিধি"
                                                        class="service-box-list-link" href="pages/policies.html">আইন
                                                        ও বিধি</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="বিবিধ"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922df4f933eb65569e21279.html">বিবিধ</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='container-col-6'>
                                <div class="widget service-box-widget">
                                    <h1 class="service-box-title" style="color: black;"> উদ্ভাবনী কার্যক্রম </h1>
                                    <div class="service-box-grid">
                                        <div class="service-box-col-span-4 service-box-img-container"> <img
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/05ac27a863cb4a07a08de53835df48a6.png"
                                                alt="উদ্ভাবনী কার্যক্রম" /> </div>
                                        <div class="service-box-col-span-8">
                                            <ul class="service-box-list">
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="প্রজ্ঞাপন/পরিপত্র/নীতিমালা"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922de5f933eb65569e1a361.html">প্রজ্ঞাপন/পরিপত্র/নীতিমালা</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="ইনোভেশন টিম"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922dc08933eb65569e0e113.html">ইনোভেশন
                                                        টিম</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="বার্ষিক উদ্ভাবন কর্মপরিকল্পনা"
                                                        class="service-box-list-link"
                                                        href="pages/files/6922d9e3933eb65569e00d87.html">বার্ষিক
                                                        উদ্ভাবন কর্মপরিকল্পনা</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="উদ্ভাবনী প্রকল্পসমূহ" class="service-box-list-link"
                                                        href="pages/innovation-corners5b73.html?filters=%7B%22innovation_corner_type%22%3A%20%226922d2bb81fc96cef9e9a2cd%22%7D">উদ্ভাবনী
                                                        প্রকল্পসমূহ</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='container-col-6'>
                                <div class="widget service-box-widget">
                                    <h1 class="service-box-title" style="color: black;"> বার্ষিক কর্মসম্পাদন
                                        ব্যবস্থাপনা </h1>
                                    <div class="service-box-grid">
                                        <div class="service-box-col-span-4 service-box-img-container"> <img
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/a0e36a993f6c4e158808bcd5d3146613.png"
                                                alt="বার্ষিক কর্মসম্পাদন ব্যবস্থাপনা" /> </div>
                                        <div class="service-box-col-span-8">
                                            <ul class="service-box-list">
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="APA টিম"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922de6d933eb65569e1a8d6.html">APA
                                                        টিম</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="চুক্তি ও প্রতিবেদন সমূহ" class="service-box-list-link"
                                                        href="pages/static-pages/6922de44933eb65569e196ce.html">চুক্তি
                                                        ও প্রতিবেদন সমূহ</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="মন্ত্রণালয়/বিভাগের এপিএ মূল্যায়ন"
                                                        class="service-box-list-link"
                                                        href="https://cabinet.gov.bd/pages/static-pages/6940329b35ce18e1c055f482">মন্ত্রণালয়/বিভাগের
                                                        এপিএ মূল্যায়ন</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="এপিএএমএস ওয়েব লিংক" class="service-box-list-link"
                                                        href="https://apams.cabinet.gov.bd/">এপিএএমএস ওয়েব লিংক</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='container-col-6'>
                                <div class="widget service-box-widget">
                                    <h1 class="service-box-title" style="color: black;"> সেবা প্রদান
                                        প্রতিশ্রুতি(সিটিজেন্‌স চার্টার) </h1>
                                    <div class="service-box-grid">
                                        <div class="service-box-col-span-4 service-box-img-container"> <img
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/f499ad2d3ebd42348cdd581225d5f127.png"
                                                alt="সেবা প্রদান প্রতিশ্রুতি(সিটিজেন্‌স চার্টার)" /> </div>
                                        <div class="service-box-col-span-8">
                                            <ul class="service-box-list">
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="সেবা প্রদান প্রতিশ্রুতি(সিটিজেন্‌স চার্টার)"
                                                        class="service-box-list-link"
                                                        href="pages/office-citizen-charters.html">সেবা প্রদান
                                                        প্রতিশ্রুতি(সিটিজেন্‌স চার্টার)</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="ফোকাল পয়েন্ট কর্মকর্তা/পরিবীক্ষণ কমিটি"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922de8a933eb65569e1b67c.html">ফোকাল
                                                        পয়েন্ট কর্মকর্তা/পরিবীক্ষণ কমিটি</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="আইন/বিধি/নীতিমালা/পরিপত্র/নির্দেশিকা/প্রজ্ঞাপন"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922e047933eb65569e26510.html">আইন/বিধি/নীতিমালা/পরিপত্র/নির্দেশিকা/প্রজ্ঞাপন</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="ত্রৈমাসিক/ বার্ষিক পরিবীক্ষণ/ মূল্যায়ন প্রতিবেদন"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922dfc2933eb65569e23d82.html">ত্রৈমাসিক/
                                                        বার্ষিক পরিবীক্ষণ/ মূল্যায়ন প্রতিবেদন</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='container-col-6'>
                                <div class="widget service-box-widget">
                                    <h1 class="service-box-title" style="color: black;"> ই-রেভিনিউ </h1>
                                    <div class="service-box-grid">
                                        <div class="service-box-col-span-4 service-box-img-container"> <img
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/96c543068f1a4745ab0c10768b121b2d.png"
                                                alt="ই-রেভিনিউ" /> </div>
                                        <div class="service-box-col-span-8">
                                            <ul class="service-box-list">
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="নাগরিক পোর্টাল"
                                                        class="service-box-list-link"
                                                        href="https://erevenue.dncc.gov.bd/cp/cportal/cp/northcc.aspx">নাগরিক
                                                        পোর্টাল</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="অফিসার্স পোর্টাল" class="service-box-list-link"
                                                        href="https://erevenue.dncc.gov.bd/Default.aspx?aspxerrorpath=/deafult.aspx">অফিসার্স
                                                        পোর্টাল</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="রেভিনিউ অটোমেশন হেল্পডেস্ক"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922de0a933eb65569e17c42.html">রেভিনিউ
                                                        অটোমেশন হেল্পডেস্ক</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="সিটি কর্পোরেশন আর্দশ কর তফসিল, ২০১৬"
                                                        class="service-box-list-link"
                                                        href="https://objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/24fb96ac9bf94fad8768d1299478009b.pdf">সিটি
                                                        কর্পোরেশন আর্দশ কর তফসিল, ২০১৬</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='container-col-6'>
                                <div class="widget service-box-widget">
                                    <h1 class="service-box-title" style="color: black;"> সিটি কর্পোরেশন পরিচালন
                                        ব্যবস্থা উন্নয়ন কৌশলপত্র ২০২০-২০৩০ </h1>
                                    <div class="service-box-grid">
                                        <div class="service-box-col-span-4 service-box-img-container"> <img
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/4118e4baccf04801ae8e30287e59ccb4.png"
                                                alt="সিটি কর্পোরেশন পরিচালন ব্যবস্থা উন্নয়ন কৌশলপত্র ২০২০-২০৩০" />
                                        </div>
                                        <div class="service-box-col-span-8">
                                            <ul class="service-box-list">
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="SGI পরিকল্পনা ও প্রতিবেদনসমূহ"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922df5a933eb65569e21676.html">SGI
                                                        পরিকল্পনা ও প্রতিবেদনসমূহ</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="বার্ষিক বাজেট ও প্রতিবেদনসমূহ"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922e0e5933eb65569e2913e.html">বার্ষিক
                                                        বাজেট ও প্রতিবেদনসমূহ</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="সাধারণ সভা, স্থায়ী কমিটি, সিটি কর্পোরেশন প্রবিধান ও উপ-আইনসমূহ"
                                                        class="service-box-list-link"
                                                        href="pages/static-pages/6922dbcc933eb65569e0ca18.html">সাধারণ
                                                        সভা, স্থায়ী কমিটি, সিটি কর্পোরেশন প্রবিধান ও উপ-আইনসমূহ</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="নাগরিক সম্পৃক্তকরণ" class="service-box-list-link"
                                                        href="pages/static-pages/6922e065933eb65569e26d88.html">নাগরিক
                                                        সম্পৃক্তকরণ</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='container-col-6'>
                                <div class="widget service-box-widget">
                                    <h1 class="service-box-title" style="color: black;"> স্মার্ট কবরস্থান
                                        ব্যবস্থাপনা সিস্টেম </h1>
                                    <div class="service-box-grid">
                                        <div class="service-box-col-span-4 service-box-img-container"> <img
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/c81c529735bb4f49ab99cb29d5f967fe.png"
                                                alt="স্মার্ট কবরস্থান ব্যবস্থাপনা সিস্টেম" /> </div>
                                        <div class="service-box-col-span-8">
                                            <ul class="service-box-list">
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="ওয়েব পোর্টাল"
                                                        class="service-box-list-link" href="index.html">ওয়েব
                                                        পোর্টাল</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="মোবাইল অ্যাপ"
                                                        class="service-box-list-link"
                                                        href="https://play.google.com/store/apps/details?id=com.data.graveyarddncc">মোবাইল
                                                        অ্যাপ</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="নীতিমালা"
                                                        class="service-box-list-link"
                                                        href="https://objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/a305487967ac4fe99e1ace498c2a8eca.pdf">নীতিমালা</a>
                                                </li>
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a title="যোগাযোগ"
                                                        class="service-box-list-link"
                                                        href="pages/officers.html">যোগাযোগ</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='container-col-6'>
                                <div class="widget service-box-widget">
                                    <h1 class="service-box-title" style="color: black;"> সরকারি কর্মসম্পাদন
                                        পরিবীক্ষণ পদ্ধতি </h1>
                                    <div class="service-box-grid">
                                        <div class="service-box-col-span-4 service-box-img-container"> <img
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2026/6/330dcc33-2639-4894-8d4b-a29bdf7084d4.png"
                                                alt="সরকারি কর্মসম্পাদন পরিবীক্ষণ পদ্ধতি" /> </div>
                                        <div class="service-box-col-span-8">
                                            <ul class="service-box-list">
                                                <li class="service-box-list-item">
                                                    <div class="service-box-bullet"></div> <a
                                                        title="ভিশন মিশন ও ৩ বছর মেয়াদী পরিকল্পনা"
                                                        class="service-box-list-link"
                                                        href="https://objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2026/5/da042684-3bf9-4c2f-992b-51cc53097344.pdf">ভিশন
                                                        মিশন ও ৩ বছর মেয়াদী পরিকল্পনা</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="all-btn-wrapper" style=""> <label for="check-789835" class="all-btn">
                                <span>সকল সেবাসমূহ দেখুন <i class="ph ph-caret-down"></i></span> <span>সংক্ষিপ্ত <i
                                        class="ph ph-caret-up"></i></span> </label> </div>
                    </section>
                    <section data-widget_type="widget" data-widget_name="HomePhotoSliderWidget"
                        class="widget home-photo-slider-widget">
                        <!--<h3 class="home-photo-slider-widget-header">ফটোগ্যালারি</h3>-->
                        <div class="home-photo-slider-widget-carousel">
                            <div class="home-photo-slider-widget-slider home-photo-slider-widget-images"
                                style="background-image:url(../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/a7ffbf91cc7842c1beba4344b887a869.jpg)">
                                <img class="home-photo-slider-widget-slider-image"
                                    src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/a7ffbf91cc7842c1beba4344b887a869.jpg"
                                    alt="এডিস মশা সংক্রান্ত গনবিজ্ঞপ্তি।">
                                <div class="photo-slider-caption">এডিস মশা সংক্রান্ত গনবিজ্ঞপ্তি।</div>
                            </div>
                            <div class="home-photo-slider-widget-slider home-photo-slider-widget-images"
                                style="background-image:url(../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/2448a1e081554dff89e39e3c22266a25.jpg)">
                                <img class="home-photo-slider-widget-slider-image"
                                    src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/2448a1e081554dff89e39e3c22266a25.jpg"
                                    alt="টাইফয়েড টিকাদান">
                                <div class="photo-slider-caption">টাইফয়েড টিকাদান</div>
                            </div>
                            <div class="home-photo-slider-widget-slider home-photo-slider-widget-images"
                                style="background-image:url(../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/6a5e032d620e4f5c8202b38e75f425ea.jpg)">
                                <img class="home-photo-slider-widget-slider-image"
                                    src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/6a5e032d620e4f5c8202b38e75f425ea.jpg"
                                    alt="সঠিক স্থানে বর্জ্য সংরক্ষণ করুন। পরিবেশ সুন্নর রাখুন। সিটি কর্পোরেশনের নির্ধারিত স্থানে বর্জ্য ফেলুন।">
                                <div class="photo-slider-caption">সঠিক স্থানে বর্জ্য সংরক্ষণ করুন। পরিবেশ সুন্নর
                                    রাখুন। সিটি কর্পোরেশনের নির্ধারিত স্থানে বর্জ্য ফেলুন।</div>
                            </div>
                            <div class="home-photo-slider-widget-slider home-photo-slider-widget-images"
                                style="background-image:url(../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/028898a589504f1484ff67e509ed1808.jpg)">
                                <img class="home-photo-slider-widget-slider-image"
                                    src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/028898a589504f1484ff67e509ed1808.jpg"
                                    alt="গণবিজ্ঞপ্তি- এডিস মশা সংক্রান্ত।">
                                <div class="photo-slider-caption">গণবিজ্ঞপ্তি- এডিস মশা সংক্রান্ত।</div>
                            </div>
                            <div class="home-photo-slider-widget-slider home-photo-slider-widget-images"
                                style="background-image:url(../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/7d3572c9ce1047439c3894af8b5cea5c.jpg)">
                                <img class="home-photo-slider-widget-slider-image"
                                    src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/7d3572c9ce1047439c3894af8b5cea5c.jpg"
                                    alt="COVID-19 &#34;টিকা নিতে টাকা লাগে না&#34; গনটিকা কার্যক্রম।">
                                <div class="photo-slider-caption">COVID-19 &#34;টিকা নিতে টাকা লাগে না&#34; গনটিকা
                                    কার্যক্রম।</div>
                            </div> <a class="home-photo-slider-widget-slider-previous">❮</a> <a
                                class="home-photo-slider-widget-slider-next">❯</a>
                        </div> <br>
                        <div class="home-photo-slider-widget-block">
                            <div class="home-photo-slider-widget-navigator"> <img data-current-slide="1"
                                    class="home-photo-slider-widget-slider-navigation-img"
                                    src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/a7ffbf91cc7842c1beba4344b887a869.jpg"
                                    alt="এডিস মশা সংক্রান্ত গনবিজ্ঞপ্তি।"> <img data-current-slide="2"
                                    class="home-photo-slider-widget-slider-navigation-img"
                                    src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/2448a1e081554dff89e39e3c22266a25.jpg"
                                    alt="টাইফয়েড টিকাদান"> <img data-current-slide="3"
                                    class="home-photo-slider-widget-slider-navigation-img"
                                    src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/6a5e032d620e4f5c8202b38e75f425ea.jpg"
                                    alt="সঠিক স্থানে বর্জ্য সংরক্ষণ করুন। পরিবেশ সুন্নর রাখুন। সিটি কর্পোরেশনের নির্ধারিত স্থানে বর্জ্য ফেলুন।">
                                <img data-current-slide="4" class="home-photo-slider-widget-slider-navigation-img"
                                    src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/028898a589504f1484ff67e509ed1808.jpg"
                                    alt="গণবিজ্ঞপ্তি- এডিস মশা সংক্রান্ত।"> <img data-current-slide="5"
                                    class="home-photo-slider-widget-slider-navigation-img"
                                    src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/7d3572c9ce1047439c3894af8b5cea5c.jpg"
                                    alt="COVID-19 &#34;টিকা নিতে টাকা লাগে না&#34; গনটিকা কার্যক্রম।">
                            </div>
                            <div class="home-photo-slider-widget-btn-container">
                                <div class="home-photo-slider-widget-btn-block"> <button
                                        class="home-photo-slider-widget-scroll-left-btn"> 🡸 </button> <button
                                        class="home-photo-slider-widget-scroll-right-btn">🡺</button> </div>
                            </div>
                        </div>
                    </section>
                    <div class="container-col container-col-12" data-widget_type="layout">
    <div data-widget_type="widget" data-widget_name="GetInTouchWidget" class="get-in-touch-widget widget">
        <div class="get-in-touch-container">
            <div class="get-in-touch-row">
                <!-- বাম পাশ: যোগাযোগের ঠিকানা -->
                <div class="get-in-touch-col content-col">
                    <h2 class="get-in-touch-title">যোগাযোগের ঠিকানা</h2>
                    <div class="office-info">
                        <ul class="contact-list">
                            <li><i class="ph-fill ph-map-pin"></i> ঠিকানা: হাজীগঞ্জ পৌরসভা, চাঁদপুর</li>
                            <li><i class="ph-fill ph-phone"></i> ফোন: +৮৮০-১২৩৪-৫৬৭৮৯০</li>
                            <li><i class="ph-fill ph-envelope"></i> ইমেইল: info@hajigonjpoura.org</li>
                            <li><i class="ph-fill ph-clock"></i> অফিস সময়: সকাল ৯টা - বিকাল ৫টা</li>
                        </ul>
                    </div>
                    <div class="social-media-container">
                        <div class="widget social-link-media-widget">
                            <a href="https://www.facebook.com/uno.hajigonj/" title="facebook" style="text-decoration: none;">
                                <i style="color: #3b5998;" class="ph-fill ph-facebook-logo media-icon social-link-media-widget-facebook-icon"></i>
                            </a>
                            <a href="#" title="youtube" style="text-decoration: none;">
                                <i style="color: #ff0000;" class="ph-fill ph-youtube-logo media-icon"></i>
                            </a>
                            <a href="#" title="twitter" style="text-decoration: none;">
                                <i style="color: #1da1f2;" class="ph-fill ph-twitter-logo media-icon"></i>
                            </a>
                            <a href="#" title="linkedin" style="text-decoration: none;">
                                <i style="color: #0a66c2;" class="ph-fill ph-linkedin-logo media-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ডান পাশ: অফিস লোকেশন ও ম্যাপ -->
                <div class="get-in-touch-col map-col">
                    <div class="map-container">
                        <div class="office-location-widget widget">
                            <div class="office-location-widget-container">
                                <h2 class="office-location-widget-title">অফিস লোকেশন ও ডিএনসিসি ম্যাপ</h2>
                                
                                <!-- ম্যাপ: হাজীগঞ্জ উপজেলা -->
                                <div class="office-location-widget-iframe-container">
                                    <iframe 
                                        src="https://www.google.com/maps?q=Hajiganj%20Upazila&amp;z=15&amp;output=embed" 
                                        loading="lazy" 
                                        referrerpolicy="no-referrer-when-downgrade"
                                        style="border:0; width:100%; height:280px; border-radius:12px; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
                                    </iframe>
                                </div>
                                
                                <!-- ছবি: ডিএনসিসি অফিস -->
                                <div style="margin-top:15px; text-align:center;">
                                    <img 
                                        alt="DNCC Office" 
                                        src="{{asset('storage/map.png')}}" 
                                        style="width:100%; object-fit:cover; border-radius:12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08);" 
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- অতিরিক্ত CSS স্টাইল -->
<style>
    /* কন্টেইনার স্টাইল */
    .get-in-touch-container {
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        padding: 30px;
        margin: 20px 0;
    }
    
    .get-in-touch-row {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        gap: 30px;
    }
    
    @media (max-width: 992px) {
        .get-in-touch-row {
            grid-template-columns: 1fr;
        }
    }
    
    /* বাম কলাম স্টাইল */
    .content-col {
        padding: 15px;
    }
    
    .get-in-touch-title {
        font-size: 24px;
        font-weight: 700;
        color: #0a4b78;
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 3px solid #0a4b78;
        display: inline-block;
    }
    
    .contact-list {
        list-style: none;
        padding: 0;
        margin: 0 0 20px 0;
    }
    
    .contact-list li {
        padding: 12px 0;
        font-size: 16px;
        color: #2d3748;
        border-bottom: 1px solid #f0f4f8;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    
    .contact-list li:last-child {
        border-bottom: none;
    }
    
    .contact-list li i {
        font-size: 22px;
        color: #0a4b78;
        width: 30px;
        text-align: center;
    }
    
    /* সোশ্যাল মিডিয়া */
    .social-media-container {
        margin-top: 20px;
        padding-top: 20px;
        border-top: 2px solid #eef2f7;
    }
    
    .social-link-media-widget {
        display: flex;
        gap: 15px;
    }
    
    .social-link-media-widget a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        background: #f8fafc;
        border-radius: 50%;
        transition: all 0.3s ease;
        border: 1px solid #eef2f7;
    }
    
    .social-link-media-widget a:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        background: #fff;
    }
    
    .social-link-media-widget a i {
        font-size: 26px;
        transition: all 0.3s ease;
    }
    
    .social-link-media-widget a:hover i {
        transform: scale(1.1);
    }
    
    /* ডান কলাম - ম্যাপ স্টাইল */
    .map-col {
        padding: 15px;
    }
    
    .office-location-widget-title {
        font-size: 20px;
        font-weight: 600;
        color: #0a4b78;
        margin-bottom: 18px;
        padding-bottom: 10px;
        border-bottom: 2px solid #eef2f7;
    }
    
    .office-location-widget-iframe-container {
        margin-bottom: 15px;
    }
    
    .office-location-widget-iframe-container iframe {
        transition: all 0.3s ease;
    }
    
    .office-location-widget-iframe-container iframe:hover {
        box-shadow: 0 8px 30px rgba(0,0,0,0.12) !important;
    }
    
    /* ছবি স্টাইল */
    .office-location-widget-container img {
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.06);
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .office-location-widget-container img:hover {
        transform: scale(1.01);
        box-shadow: 0 8px 30px rgba(0,0,0,0.15);
    }
    
    /* ফন্ট আইকন (Phosphor) সাপোর্ট */
    @import url('https://unpkg.com/@phosphor-icons/web@2.1.1/src/css/phosphor.css');
</style>
                    <div data-widget_type="widget" data-widget_name="AccessibilityWidget"
                        class="widget accessibility-widget">
                        <div class="accessibility-float fab-icon" id="accessibility-btn" title="এক্সেসিবিলিটি"> <i
                                class="ph ph-wheelchair-motion"></i> </div>
                        <div class="accessibility-card" id="accessibility-card">
                            <h3 id="accessibility-card-title" tabindex="0">এক্সেসিবিলিটি</h3>
                            <div id="accessibility-close" tabindex="0" title="Close">
                                <icon class="ph ph-x-circle"></icon>
                            </div>
                            <div class="item"> <button id="font-increase">ফন্ট বৃদ্ধি</button> <button
                                    id="font-decrease">ফন্ট হ্রাস</button> </div>
                            <div class="item"> <input type="checkbox" id="monochrome" title="মনোক্রোম" />
                                <label for="monochrome">মনোক্রোম</label>
                            </div>
                            <div class="item"> <input type="checkbox" id="inverted" title="ইনভার্ট" /> <label
                                    for="inverted">ইনভার্ট</label> </div>
                            <div class="item"> <input type="checkbox" id="bigCursor" title="বড় কার্সর" />
                                <label for="bigCursor">বড় কার্সর</label>
                            </div>
                            <div class="item"> <input type="checkbox" id="highlightLinks"
                                    title="লিঙ্ক হাইলাইট" /> <label for="highlightLinks">লিঙ্ক হাইলাইট</label>
                            </div>
                            <div class="item"> <input type="checkbox" id="highlightHeadings"
                                    title="শিরোনাম হাইলাইট" /> <label for="highlightHeadings">শিরোনাম
                                    হাইলাইট</label> </div>
                            <div class="item"> <input type="checkbox" id="readingGuideCheckbox"
                                    title="পড়ার গাইড" /> <label for="readingGuideCheckbox">পড়ার গাইড</label>
                            </div>
                            <div class="item"> <button class="accessibility-reset">রিসেট</button> </div> <a
                                class='screen-reader' target="_blank" rel="noreferrer"
                                href="https://www.nvaccess.org/files/nvda/releases/2020.4/nvda_2020.4.exe">স্ক্রিন
                                রিডার ডাউনলোড করুন</a>
                        </div> <!-- TODO: [naeemur] add some more tab navigate options -->
                        <div class="tab-menu"> <a href="#main-content" class="skip-link">কন্টেন্টে চলে যান</a> <a
                                href="#accessibility-card-title" class="skip-link menu-href">এক্সেসিবিলিটি মেনুতে
                                যান</a> </div>
                    </div>
                    <div data-widget_type="widget" data-widget_name="GoToTopWidget"
                        class="widget go-to-top-widget">
                        <div class="go-to-top-float x-fab-icon" id="go-to-top-btn" title="উপরে যান"> <i
                                class="ph ph-caret-up"></i> </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div data-section_type="right" class="droppable">
                    <div data-widget_type="widget" data-widget_name="PersonCardStackWidget"
                        class="widget person-card-stack-widget">
                        <div class="widget person-card-widget">
                            <h1 style="" class="person-card-header">
                                <p><strong>মাননীয় প্রধানমন্ত্রী</strong></p>
                            </h1>
                            <div class="person-card-body "> <img
                                    src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2026/1/3c2d30f7-d6d7-4864-9ffe-8a5e473d4640.jpg"
                                    alt="minister" class="person-card-image" />
                                <div class="person-card-ls"> <strong class="person-card-name ">
                                        <h5 style="text-align:center"><strong>জনাব তারেক রহমান</strong></h5>
                                    </strong> <!-- <p class="person-card-org-name">-->
                                    <!-- ঢাকা উত্তর সিটি কর্পোরেশন--> <!-- </p>--> <a
                                        href="pages/office-heads/%e0%a6%a1-%e0%a6%ae%e0%a7%81%e0%a6%b9%e0%a6%be%e0%a6%ae%e0%a7%8d%e0%a6%ae%e0%a6%a6-%e0%a6%87%e0%a6%89%e0%a6%a8%e0%a7%82%e0%a6%b8-96189c-6922d89fdbfbab28ce045e1e.html"
                                        class="person-card-link">বিস্তারিত</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget person-card-widget">
                            <h1 style="" class="person-card-header">
                                <p><span style="font-family:inherit;font-size:16px"><strong>মাননীয়
                                            মন্ত্রী</strong></span></p>
                            </h1>
                            <div class="person-card-body "> <img
                                    src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2026/1/41e01831-5332-458f-bc66-ecec8c39543b.jpg"
                                    alt="minister" class="person-card-image" />
                                <div class="person-card-ls"> <strong class="person-card-name ">
                                        <h4 style="text-align:center"><strong>জনাব মির্জা ফখরুল ইসলাম আলমগীর</strong>
                                        </h4>
                                        <p style="text-align:center"><span
                                                style="font-family:inherit;font-size:16px"><strong> মাননীয়
                                                    মন্ত্রী</strong></span></p>
                                        <p style="text-align:center"><span style="font-size:16px"><strong>স্থানীয়
                                                    সরকার বিভাগ</strong></span></p>
                                    </strong> <!-- <p class="person-card-org-name">-->
                                    <!-- ঢাকা উত্তর সিটি কর্পোরেশন--> <!-- </p>--> <a
                                        href="pages/office-heads/%e0%a6%9c%e0%a6%a8%e0%a6%be%e0%a6%ac-%e0%a6%86%e0%a6%a6%e0%a6%bf%e0%a6%b2%e0%a7%81%e0%a6%b0-%e0%a6%b0%e0%a6%b9%e0%a6%ae%e0%a6%be%e0%a6%a8-%e0%a6%96%e0%a6%be%e0%a6%a8-f6579b-6922d8a0dbfbab28ce045ecd.html"
                                        class="person-card-link">বিস্তারিত</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget person-card-widget">
                            <h1 style="" class="person-card-header">
                                <p><span style="font-family:inherit;font-size:16px"><strong>মাননীয়
                                            প্রতিমন্ত্রী</strong></span></p>
                            </h1>
                            <div class="person-card-body "> <img
                                    src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2026/4/4eb09b1a-6e6e-4566-83d4-24441eb134e2.jpg"
                                    alt="minister" class="person-card-image" />
                                <div class="person-card-ls"> <strong class="person-card-name ">
                                        <h4 style="text-align:center"><strong>জনাব মীর শাহে আলম, এমপি</strong></h4>
                                        <p style="text-align:center"><span
                                                style="font-family:inherit;font-size:16px"><strong> মাননীয়
                                                    প্রতিমন্ত্রী</strong></span></p>
                                        <p style="text-align:center"><span style="font-size:16px"><strong>স্থানীয়
                                                    সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়</strong></span></p>
                                    </strong> <!-- <p class="person-card-org-name">-->
                                    <!-- ঢাকা উত্তর সিটি কর্পোরেশন--> <!-- </p>--> <a
                                        href="pages/office-heads/%e0%a6%9c%e0%a6%a8%e0%a6%be%e0%a6%ac-%e0%a6%ae%e0%a7%80%e0%a6%b0-%e0%a6%b6%e0%a6%be%e0%a6%b9%e0%a7%87-%e0%a6%86%e0%a6%b2%e0%a6%ae-%e0%a6%8f%e0%a6%ae%e0%a6%aa%e0%a6%bf-w07qch-6a1a84d9977edbd1f13404ab.html"
                                        class="person-card-link">বিস্তারিত</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget person-card-widget">
                            <h1 style="" class="person-card-header">
                                <p><span style="font-size:14px"><strong>প্রশাসক</strong></span></p>
                            </h1>
                            <div class="person-card-body "> <img
                                    src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2026/1/91c5468f-c601-40a1-abb6-63dbdc0b4c5b.jpg"
                                    alt="minister" class="person-card-image" />
                                <div class="person-card-ls"> <strong class="person-card-name ">
                                        <h2 style="text-align:center"><strong>মোঃ শফিকুল ইসলাম খান</strong></h2>
                                        <h3 style="text-align:center"><strong>প্রশাসক</strong></h3>
                                        <p style="text-align:center"> </p>
                                        <p style="text-align:justify"> </p>
                                        <p style="text-align:justify"><br /> </p>
                                    </strong> <!-- <p class="person-card-org-name">-->
                                    <!-- ঢাকা উত্তর সিটি কর্পোরেশন--> <!-- </p>--> <a
                                        href="pages/office-heads/%e0%a6%ae%e0%a7%8b%e0%a6%b9%e0%a6%be%e0%a6%ae%e0%a7%8d%e0%a6%ae%e0%a6%a6-%e0%a6%8f%e0%a6%9c%e0%a6%be%e0%a6%9c-f413bd-6922d8a2dbfbab28ce046016.html"
                                        class="person-card-link">বিস্তারিত</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-widget_type="widget" data-widget_name="BlockWidget"
                        data-widget_content_type="blocks" data-widget_item="6922d3d1dbfbab28ce041c4b"
                        class="widget block-widget">
                        <div class="block-widget-container">
                            <h3 class="block-widget-title"> অভ্যন্তরীণ ই-সেবা </h3>
                            <div class="block-widget-content"> <rt-renderer
                                    encoded-content="PHAgc3R5bGU9InRleHQtYWxpZ246Y2VudGVyIj48YSBocmVmPSJodHRwczovL21haWwuZG5jYy5nb3YuYmQvIj48aW1nIGFsdD0iIiBzcmM9Imh0dHBzOi8vb2JqZWN0c3RvcmFnZS5hcC1kY2MtZ2F6aXB1ci0xLm9yYWNsZWNsb3VkMTUuY29tL24vYXh2amJucXByeWxnL2IvVjJNaW5pc3RyeS9vL29mZmljZS1kbmNjLzIwMjQvMTIvNjM0YjNlZjU4ZDA2NDI0ZjhiZWZiYmRiNzIzMWQyMjYuanBnIiBzdHlsZT0iaGVpZ2h0OjU0cHg7IHdpZHRoOjIxOXB4IiAvPjwvYT48L3A+Cgo8cCBzdHlsZT0idGV4dC1hbGlnbjpjZW50ZXIiPjxhIGhyZWY9Imh0dHBzOi8vZXJldmVudWUuZG5jYy5nb3YuYmQvY3AvY3BvcnRhbC9jcC9ub3J0aGNjLmFzcHgiPjxpbWcgYWx0PSIiIHNyYz0iaHR0cHM6Ly9vYmplY3RzdG9yYWdlLmFwLWRjYy1nYXppcHVyLTEub3JhY2xlY2xvdWQxNS5jb20vbi9heHZqYm5xcHJ5bGcvYi9WMk1pbmlzdHJ5L28vb2ZmaWNlLWRuY2MvMjAyNC8xMi9kN2M1YjViZjBmZDQ0NmJmOGEzMWEwMTIwMTQxZjYxNy5qcGciIHN0eWxlPSJoZWlnaHQ6NTRweDsgd2lkdGg6MjE5cHgiIC8+PC9hPjwvcD4=">
                                    <p style="text-align:center"><a href="https://mail.dncc.gov.bd/"><img
                                                alt=""
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/634b3ef58d06424f8befbbdb7231d226.jpg"
                                                style="height:54px; width:219px" /></a></p>
                                    <p style="text-align:center"><a
                                            href="https://erevenue.dncc.gov.bd/cp/cportal/cp/northcc.aspx"><img
                                                alt=""
                                                src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/office-dncc/2024/12/d7c5b5bf0fd446bf8a31a0120141f617.jpg"
                                                style="height:54px; width:219px" /></a></p>
                                </rt-renderer> </div>
                        </div>
                    </div>
                    <div data-widget_type="widget" data-widget_name="CentralEServiceLinkWidget"
                        class="central-service-link-widget widget">
                        <div class="sidebar-link-widget widget"> <a
                                href="https://bangladesh.gov.bd/site/view/all_eservices_in_bangladesh/"
                                class="sidebar-link-widget-link" target="_blank"> কেন্দ্রীয় ই-সেবাসমূহ </a> </div>
                    </div>
                    <div data-widget_type="widget" data-widget_name="MyGovServiceImageLinkWidget"
                        class="widget my-gov-service-image-link-widget"> <a target="_blank"
                            href="https://www.mygov.bd/"> <img class="image"
                                src="site-assets/images/service_link_5.jpg"> </a> </div>
                    <div data-widget_type="widget" data-widget_name="OfficeDigitalServiceImageLinkWidget"
                        class="widget office-digital-service-image-link-widget"> <a href="#"
                            onclick="window.open('https://www.mygov.bd/serviceByOffice/?agent=np&domain='+location.hostname)">
                            <img class="image" src="site-assets/images/service_link_3.gif"> </a> </div>
                    <div data-widget_type="widget" data-widget_name="ImportantLinkCardWidget"
                        class="widget link-card-widget">
                        <h1 class="link-card-header"> গুরুত্বপূর্ণ লিঙ্ক </h1>
                        <ul class="link-card-body">
                            <li class="link-card-list">
                                <div class="link-card-image"></div> <a target="_blank" class="link-card-a"
                                    href="https://lgd.gov.bd/">স্থানীয় সরকার মন্ত্রণালয়</a>
                            </li>
                            <li class="link-card-list">
                                <div class="link-card-image"></div> <a target="_blank" class="link-card-a"
                                    href="http://bdris.gov.bd/br/application">জন্ম ও মৃত্যু নিবন্ধন</a>
                            </li>
                            <li class="link-card-list">
                                <div class="link-card-image"></div> <a target="_blank" class="link-card-a"
                                    href="https://www.eprocure.gov.bd/">ই-জিপি</a>
                            </li>
                            <li class="link-card-list">
                                <div class="link-card-image"></div> <a target="_blank" class="link-card-a"
                                    href="https://bidaquickserv.org/">ওয়ান স্টপ সার্ভিস (বিডা)</a>
                            </li>
                            <li class="link-card-list">
                                <div class="link-card-image"></div> <a target="_blank" class="link-card-a"
                                    href="http://www.bangladesh.gov.bd/">বাংলাদেশ জাতীয় তথ্য বাতায়ন</a>
                            </li>
                        </ul>
                        <div class="all-btn"> <a href="pages/external-links.html"> সকল </a> </div>
                    </div>
                    <div data-widget_type="widget" data-widget_name="BlockWidget"
                        data-widget_content_type="blocks" data-widget_item="6922d3e3dbfbab28ce042ae5"
                        class="widget block-widget">
                        <div class="block-widget-container">
                            <h3 class="block-widget-title"> এলআইইউপিসিপি </h3>
                            <div class="block-widget-content"> <rt-renderer
                                    encoded-content="PHVsPgoJPGxpPjxhIGhyZWY9Imh0dHA6Ly93d3cudXJiYW5wb3ZlcnR5YmQub3JnLyIgdGFyZ2V0PSJfYmxhbmsiPuCmquCnjeCmsOCmvuCmqOCnjeCmpOCmv+CmlSDgppzgpqjgppfgp4vgprfgp43gpp/gp4DgprAg4Kac4KeA4Kas4Kao4Kau4Ka+4KaoIOCmieCmqOCnjeCmqOCnn+CmqCDgpqrgp43gprDgppXgprLgp43gpqo8L2E+PC9saT4KPC91bD4=">
                                    <ul>
                                        <li><a href="http://www.urbanpovertybd.org/" target="_blank">প্রান্তিক
                                                জনগোষ্টীর জীবনমান উন্নয়ন প্রকল্প</a></li>
                                    </ul>
                                </rt-renderer> </div>
                        </div>
                    </div>
                    <div data-widget_type="widget" data-widget_name="BlockWidget"
                        data-widget_content_type="blocks" data-widget_item="6922d3d4dbfbab28ce041ed8"
                        class="widget block-widget">
                        <div class="block-widget-container">
                            <h3 class="block-widget-title"> সেবা সহজিকরণ </h3>
                            <div class="block-widget-content"> <rt-renderer encoded-content=""></rt-renderer> </div>
                        </div>
                    </div>
                    <div data-widget_type="widget" data-widget_name="BlockWidget"
                        data-widget_content_type="blocks" data-widget_item="6922d401dbfbab28ce043fb5"
                        class="widget block-widget">
                        <div class="block-widget-container">
                            <h3 class="block-widget-title"> বাংলাদেশ ই-ডিরেক্টরি </h3>
                            <div class="block-widget-content"> <rt-renderer
                                    encoded-content="PHA+PGEgaHJlZj0iaHR0cHM6Ly9lZGlyZWN0b3J5LnBvcnRhbC5nb3YuYmQvIj48aW1nIGFsdD0iIiBzcmM9Ii9zaXRlLWFzc2V0cy9pbWFnZXMvc2VydmljZV9saW5rXzEuanBnIiBzdHlsZT0iYm9yZGVyLXN0eWxlOnNvbGlkOyBib3JkZXItd2lkdGg6MXB4OyBjb2xvcjpyZ2IoMTAzLCA0NywgMTQ0KTsgaGVpZ2h0OjQycHg7IHdpZHRoOjEwMCUiIC8+PC9hPjwvcD4=">
                                    <p><a href="https://edirectory.portal.gov.bd/"><img alt=""
                                                src="site-assets/images/service_link_1.jpg"
                                                style="border-style:solid; border-width:1px; color:rgb(103, 47, 144); height:42px; width:100%" /></a>
                                    </p>
                                </rt-renderer> </div>
                        </div>
                    </div>
                    <div data-widget_type="widget" data-widget_name="NationalAnthemWidget"
                        class="widget national-anthem-widget ">
                        <h6 class="national-anthem-header">জাতীয় সঙ্গীত</h6>
                        <div class="national-anthem-audio-block"> <span class="" contenteditable="false">
                                <audio class="national-anthem-audio" controls="" style="width:100%;">
                                    <source
                                        src="https://objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/general-space/bd_national_anthem.mp3"
                                        type="audio/mp3">
                                </audio> </span> </div>
                    </div>
                    <div data-widget_type="widget" data-widget_name="BdWorkersTrustBoardImageLinkWidget"
                        class="widget bd-workers-trust-board-image-link-widget"> <a target="_blank"
                            href="https://bkkb.portal.gov.bd/"> <img class="image"
                                src="site-assets/images/service_link_4.png"> </a> </div>
                    <widget:discount_electronic_toll_lanes_bridges />
                    <div data-widget_type="widget" data-widget_name="SocialMediaCardWidget"
                        class="widget social-media-widget">
                        <h1 class="social-media-header"> সামাজিক যোগাযোগ </h1>
                        <div class="widget social-link-media-widget"> <a
                                href="https://www.youtube.com/channel/UCsdvo0dmOKFdcVJu1UYRBMg" title="youtube"
                                style='text-decoration: none;'> <i
                                    class="ph-fill ph-youtube-logo media-icon social-link-media-widget-youtube-icon"></i>
                            </a> <a href="https://www.facebook.com/dncc.gov.bd/" title="facebook"
                                style='text-decoration: none;'> <i style="color: #3b5998;"
                                    class="ph-fill ph-facebook-logo media-icon social-link-media-widget-facebook-icon "></i>
                            </a> </div>
                    </div>
                    <div data-widget_type="widget" data-widget_name="InnovationCornerWidget"
                        class="widget innovation-corner-widget">
                        <h1 class="innovation-corner-header"> ইনোভেশন কর্নার </h1>
                        <ul class="innovation-corner-body">
                            <li class="innovation-corner-list"> <!--<div class="innovation-corner-image"></div>-->
                                <a class="innovation-corner-list-link"
                                    href="pages/innovation-cornerscbba.html?filters=%7B%22innovation_corner_type%22%3A%226922d2bb81fc96cef9e9a2e3%22%7D">প্রজ্ঞাপন-পরিপত্র-নীতিমালা</a>
                            </li>
                            <li class="innovation-corner-list"> <!--<div class="innovation-corner-image"></div>-->
                                <a class="innovation-corner-list-link"
                                    href="pages/innovation-cornersaaf5.html?filters=%7B%22innovation_corner_type%22%3A%226922d29781fc96cef9e9939d%22%7D">ইনোভেশন
                                    টিম</a>
                            </li>
                            <li class="innovation-corner-list"> <!--<div class="innovation-corner-image"></div>-->
                                <a class="innovation-corner-list-link"
                                    href="pages/innovation-cornerseb2a.html?filters=%7B%22innovation_corner_type%22%3A%226922d2b981fc96cef9e9a1ee%22%7D">বাৎসরিক
                                    উদ্ভাবনী কর্মপরিকল্পনা</a>
                            </li>
                            <li class="innovation-corner-list"> <!--<div class="innovation-corner-image"></div>-->
                                <a class="innovation-corner-list-link"
                                    href="pages/innovation-cornersc6d5.html?filters=%7B%22innovation_corner_type%22%3A%226922d2bb81fc96cef9e9a2cd%22%7D">উদ্ভাবনী
                                    প্রকল্প</a>
                            </li>
                        </ul>
                        <div class="all-btn"> <a href="pages/innovation-corners.html"> সকল </a> </div>
                    </div>
                    <div data-widget_type="widget" data-widget_name="OfficeAttachmentApplicationFormWidget"
                        class="widget office-attachment-application-form-widget">
                        <h1 class="office-attachment-application-form-widget-header"> <a
                                href="https://pms.portal.gov.bd/office/outauth_new_office" target="_blank"> সরকারি
                                অফিসের নতুন ওয়েবসাইটের আবেদন</a> </h1>
                    </div>
                    <div data-widget_type="widget" data-widget_name="BlockWidget"
                        data-widget_content_type="blocks" data-widget_item="6922d40edbfbab28ce0447e5"
                        class="widget block-widget">
                        <div class="block-widget-container">
                            <h3 class="block-widget-title"> বিনিয়োগ শিক্ষা কার্যক্রম </h3>
                            <div class="block-widget-content"> <rt-renderer
                                    encoded-content="PHVsPgoJPGxpPjxhIGhyZWY9Imh0dHA6Ly9maW5saXRiZC5jb20vIiB0YXJnZXQ9Il9ibGFuayIgdGl0bGU9IuCmqOCmleCmsuCnh+CmsCDgppzgpqjgp43gpq8g4KaG4Kas4KeH4Kam4KaoIj7gppPgp5/gp4fgpqzgprjgpr7gpofgpp8g4Kay4Ka/4KaC4KaVPC9hPjwvbGk+Cgk8bGk+PGEgaHJlZj0iaHR0cHM6Ly93d3cueW91dHViZS5jb20vQGZpbmFuY2lhbGxpdGVyYWN5cHJvZ3JhbWJhNjE3OCIgdGFyZ2V0PSJfYmxhbmsiIHRpdGxlPSLgpoct4Ka44KeH4Kas4Ka+4KawIOCmhuCmrOCnh+CmpuCmqCI+4KaH4KaJ4Kaf4Ka/4KaJ4KasIOCmsuCmv+CmguCmlTwvYT48L2xpPgo8L3VsPg==">
                                    <ul>
                                        <li><a href="http://finlitbd.com/" target="_blank"
                                                title="নকলের জন্য আবেদন">ওয়েবসাইট লিংক</a></li>
                                        <li><a href="https://www.youtube.com/@financialliteracyprogramba6178"
                                                target="_blank" title="ই-সেবার আবেদন">ইউটিউব লিংক</a></li>
                                    </ul>
                                </rt-renderer> </div>
                        </div>
                    </div>
                    <div data-widget_type="widget" data-widget_name="CentralBlocksSidebarWidget"
                        class="widget central-blocks-sidebar-widget"> </div>
                    <div data-widget_type="widget" data-widget_name="EmergencyHotlineListCardWidget"
                        class="widget emergency-hotline-card-list-widget">
                        <h3 class="emergency-hotline-card-list-header">জরুরি যোগাযোগ</h3>



                        <!-- Display initial hotlines -->
                        <div class="emergency-hotline-card-list"
                            data-hotline-url="https://bangladesh.gov.bd/site/page/aaebba14-f52a-4a3d-98fd-a3f8b911d3d9">

                            <a class="emergency-hotline-card-list-item"
                                href="https://bangladesh.gov.bd/site/page/aaebba14-f52a-4a3d-98fd-a3f8b911d3d9"
                                target="_blank">
                                <span> সরকারি তথ্য ও সেবা </span>
                                <strong>৩৩৩</strong>
                            </a>

                            <a class="emergency-hotline-card-list-item"
                                href="https://bangladesh.gov.bd/site/page/aaebba14-f52a-4a3d-98fd-a3f8b911d3d9"
                                target="_blank">
                                <span> জরুরি সেবা </span>
                                <strong>৯৯৯</strong>
                            </a>

                            <a class="emergency-hotline-card-list-item"
                                href="https://bangladesh.gov.bd/site/page/aaebba14-f52a-4a3d-98fd-a3f8b911d3d9"
                                target="_blank">
                                <span> ফায়ার সার্ভিস হটলাইন </span>
                                <strong>১০২</strong>
                            </a>

                        </div>


                        <div class="emergency-hotline-card-list-btn" id="toggle-btn">
                            <span>সকল সেবা দেখুন</span>
                            <i class="ph ph-caret-down"></i>
                        </div>


                        <div class="emergency-hotline-card-list-btn emergency-hotline-card-list-btn-all"
                            id="toggle-btn-all">
                            <span>সংক্ষিপ্ত</span>
                            <i class="ph ph-caret-up"></i>
                        </div>
                    </div>

                    <script>
                        const allHotlines = [{
                            "title_en": "Government information and services",
                            "title_bn": "সরকারি তথ্য ও সেবা",
                            "phone_number_en": "333",
                            "phone_number_bn": "৩৩৩",
                            "color": "#14AFFF",
                            "title": "সরকারি তথ্য ও সেবা",
                            "phone_number": "৩৩৩"
                        }, {
                            "title_en": "Emergency services",
                            "title_bn": "জরুরি সেবা",
                            "phone_number_en": "999",
                            "phone_number_bn": "৯৯৯",
                            "color": "#C1282A",
                            "title": "জরুরি সেবা",
                            "phone_number": "৯৯৯"
                        }, {
                            "title_en": "Fire Service Hotline",
                            "title_bn": "ফায়ার সার্ভিস হটলাইন",
                            "phone_number_en": "102",
                            "phone_number_bn": "১০২",
                            "color": "#14AFFF",
                            "title": "ফায়ার সার্ভিস হটলাইন",
                            "phone_number": "১০২"
                        }, {
                            "title_en": "BRTA Service Portal (BSP)",
                            "title_bn": "বিআরটিএ সার্ভিস পোর্টাল (বিএসপি)",
                            "phone_number_en": "16107",
                            "phone_number_bn": "১৬১০৭",
                            "color": "#14AFAA",
                            "title": "বিআরটিএ সার্ভিস পোর্টাল (বিএসপি)",
                            "phone_number": "১৬১০৭"
                        }, {
                            "title_en": "Supreme Court Helpline",
                            "title_bn": "সুপ্রীম কোর্ট হেল্পলাইন",
                            "phone_number_en": "103",
                            "phone_number_bn": "১০৩",
                            "color": "#07a488",
                            "title": "সুপ্রীম কোর্ট হেল্পলাইন",
                            "phone_number": "১০৩"
                        }, {
                            "title_en": "Violence against women and children prevention",
                            "title_bn": "নারী ও শিশু নির্যাতন প্রতিরোধ",
                            "phone_number_en": "109",
                            "phone_number_bn": "১০৯",
                            "color": "#546078",
                            "title": "নারী ও শিশু নির্যাতন প্রতিরোধ",
                            "phone_number": "১০৯"
                        }, {
                            "title_en": "Anti-Corruption Commission",
                            "title_bn": "দুদক",
                            "phone_number_en": "106",
                            "phone_number_bn": "১০৬",
                            "color": "#006A67",
                            "title": "দুদক",
                            "phone_number": "১০৬"
                        }, {
                            "title_en": "Disaster warning",
                            "title_bn": "দুর্যোগের আগাম বার্তা",
                            "phone_number_en": "102",
                            "phone_number_bn": "১০২",
                            "color": "#EA7000",
                            "title": "দুর্যোগের আগাম বার্তা",
                            "phone_number": "১০২"
                        }, {
                            "title_en": "Smart Land Services",
                            "title_bn": "স্মার্ট ভূমি সেবা",
                            "phone_number_en": "16122",
                            "phone_number_bn": "১৬১২২",
                            "color": "#2DAF61",
                            "title": "স্মার্ট ভূমি সেবা",
                            "phone_number": "১৬১২২"
                        }, {
                            "title_en": "Child help line",
                            "title_bn": "শিশু সহায়তা লাইন",
                            "phone_number_en": "1098",
                            "phone_number_bn": "১০৯৮",
                            "color": "#1E90FF",
                            "title": "শিশু সহায়তা লাইন",
                            "phone_number": "১০৯৮"
                        }, {
                            "title_en": "Bangladesh Employees Welfare Board Hotline",
                            "title_bn": "বাংলাদেশ কর্মচারী কল্যাণ বোর্ড হটলাইন",
                            "phone_number_en": "16109",
                            "phone_number_bn": "১৬১০৯",
                            "color": "#EE1C25",
                            "title": "বাংলাদেশ কর্মচারী কল্যাণ বোর্ড হটলাইন",
                            "phone_number": "১৬১০৯"
                        }, {
                            "title_en": "Drug Control Hotline",
                            "title_bn": "মাদকদ্রব্য নিয়ন্ত্রণ হটলাইন",
                            "phone_number_en": "01908888888",
                            "phone_number_bn": "০১৯০৮৮৮৮৮৮৮",
                            "color": "#279E65",
                            "title": "মাদকদ্রব্য নিয়ন্ত্রণ হটলাইন",
                            "phone_number": "০১৯০৮৮৮৮৮৮৮"
                        }, {
                            "title_en": "Emergency Inland Waterway Hotline",
                            "title_bn": "জরুরী অভ্যন্তরীণ নৌ-পরিবহন হটলাইন",
                            "phone_number_en": "16113",
                            "phone_number_bn": "১৬১১৩",
                            "color": "#123675",
                            "title": "জরুরী অভ্যন্তরীণ নৌ-পরিবহন হটলাইন",
                            "phone_number": "১৬১১৩"
                        }, {
                            "title_en": "Passport hotline",
                            "title_bn": "পাসপোর্ট বাতায়ন হটলাইন",
                            "phone_number_en": "16445",
                            "phone_number_bn": "১৬৪৪৫",
                            "title": "পাসপোর্ট বাতায়ন হটলাইন",
                            "phone_number": "১৬৪৪৫"
                        }, {
                            "title_en": "Bangladesh Freedom Fighters Welfare Trust",
                            "title_bn": "বাংলাদেশ মুক্তিযোদ্ধা কল্যাণ ট্রাস্ট",
                            "phone_number_en": "16171",
                            "phone_number_bn": "১৬১৭১",
                            "color": "#EA2B27",
                            "title": "বাংলাদেশ মুক্তিযোদ্ধা কল্যাণ ট্রাস্ট",
                            "phone_number": "১৬১৭১"
                        }, {
                            "title_en": "Probashi Call Center",
                            "title_bn": "প্রবাসী কল সেন্টার",
                            "phone_number_en": "16135",
                            "phone_number_bn": "১৬১৩৫",
                            "color": "#3370FF",
                            "title": "প্রবাসী কল সেন্টার",
                            "phone_number": "১৬১৩৫"
                        }, {
                            "title_en": "E-GP Emergency Hotline",
                            "title_bn": "ই-জিপি ইমার্জেন্সি হটলাইন",
                            "phone_number_en": "16575",
                            "phone_number_bn": "১৬৫৭৫",
                            "color": "#10431C",
                            "title": "ই-জিপি ইমার্জেন্সি হটলাইন",
                            "phone_number": "১৬৫৭৫"
                        }, {
                            "title_en": "Bangladesh Telecommunication Services Hotline",
                            "title_bn": "বাংলাদেশ টেলিযোগাযোগ সেবা সংক্রান্ত হটলাইন",
                            "phone_number_en": "100",
                            "phone_number_bn": "১০০",
                            "color": "#F90101",
                            "title": "বাংলাদেশ টেলিযোগাযোগ সেবা সংক্রান্ত হটলাইন",
                            "phone_number": "১০০"
                        }, {
                            "title_en": "Electricity Department Service Hotline",
                            "title_bn": "বিদ্যুৎ বিভাগ সেবা সংক্রান্ত হটলাইন",
                            "phone_number_en": "16999",
                            "phone_number_bn": "১৬৯৯৯",
                            "color": "#FFA500",
                            "title": "বিদ্যুৎ বিভাগ সেবা সংক্রান্ত হটলাইন",
                            "phone_number": "১৬৯৯৯"
                        }, {
                            "title_en": "Legal Aid Helpline",
                            "title_bn": "লিগ্যাল এইড হেল্পলাইন",
                            "phone_number_en": "16699",
                            "phone_number_bn": "১৬৬৯৯",
                            "color": "#F58A2A",
                            "title": "লিগ্যাল এইড হেল্পলাইন",
                            "phone_number": "১৬৬৯৯"
                        }, {
                            "title_en": "Worker Helpline",
                            "title_bn": "শ্রমিক হেল্পলাইন",
                            "phone_number_en": "16357",
                            "phone_number_bn": "১৬৩৫৭",
                            "color": "#0A663D",
                            "title": "শ্রমিক হেল্পলাইন",
                            "phone_number": "১৬৩৫৭"
                        }, {
                            "title_en": "Universal Pension Scheme Hotline",
                            "title_bn": "সর্বজনীন পেনশন স্কিম হটলাইন",
                            "phone_number_en": "16131",
                            "phone_number_bn": "১৬১৩১",
                            "color": "#017339",
                            "title": "সর্বজনীন পেনশন স্কিম হটলাইন",
                            "phone_number": "১৬১৩১"
                        }, {
                            "title_en": "Bangladesh Coast Guard Hotline",
                            "title_bn": "বাংলাদেশ কোস্ট গার্ড হটলাইন",
                            "phone_number_en": "16111",
                            "phone_number_bn": "১৬১১১",
                            "color": "#110555",
                            "title": "বাংলাদেশ কোস্ট গার্ড হটলাইন",
                            "phone_number": "১৬১১১"
                        }];
                    </script>
                </div>
            </div>
        </div>
        <div class="footer">
            <div data-section_type="footer" class="droppable">
                <footer data-widget_type="widget" data-widget_name="FooterWidget" class="widget footer-widget">
                    <div class="footer-widget-image"></div>
                    <div class="footer-disclaimer"> এই ওয়েবসাইটে প্রকাশিত সকল তথ্য সংশ্লিষ্ট দপ্তর কর্তৃক নিয়মিত
                        হালনাগাদ করা হয়। তথ্যের যথার্থতা, নির্ভুলতা ও নির্ভরযোগ্যতা নিশ্চিত করতে সংশ্লিষ্ট দপ্তর সর্বদা
                        সচেষ্ট। </div>
                    <div class="footer-body ">
                        <div>
                            <ul class="left-ul">
                                <li class="left-ul-list"> <a class="footer-link" href="views/sitemap.html">সাইট
                                        ম্যাপ</a> </li>
                                <li class="left-ul-list"> <a class="footer-link"
                                        href="pages/static-pages/6922df76933eb65569e2224e.html">যোগাযোগ</a> </li>
                                <li class="left-ul-list"> <a class="footer-link" href="#">Download</a> </li>
                                <li class="left-ul-list"> <a class="footer-link"
                                        href="pages/web-forms/6922d3c081fc96cef9e9beb2.html">অভিযোগ ও পরামর্শ</a>
                                </li>
                            </ul>
                            <div class="site-update-block">
                                <p> সাইটটি শেষ হাল-নাগাদ করা হয়েছে: বৃহস্পতিবার, ৬ আগস্ট, ২০২৬ এ ১৩:১২:৩১ </p>
                            </div>
                        </div>
                        <div class="text-xs">
                            <p> পরিকল্পনা এবং বাস্তবায়ন: মন্ত্রিপরিষদ বিভাগ, এটুআই, বিসিসি, ডিওআইসিটি ও বেসিস। </p>
                            <div class="technical-support-block ">
                                <p class="technical-support-text">কারিগরি সহায়তা</p> <img
                                    class="technical-support-image"
                                    data-src="https://objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/undefined"
                                    src="site-assets/images/technical-support.svg" alt="np-logo-set"
                                    onerror="this.onerror=null; this.src='site-assets/images/technical-support.svg';" />
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script>
        const _window = window;
        const _document = document;
    </script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/HeaderWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/OfficeFindThreeWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/GlobalSearchWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/LanguageSwitcherWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/BannerSliderImageWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/MenusExpandableWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/MenusWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/NoticeNewsCardWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/TopNewsCardWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/ServiceBoxExpandableStackWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/ServiceBoxStackWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/ServiceBoxWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/HomePhotoSliderWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/popup.html') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/AccessibilityWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/GoToTopWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/PersonCardStackWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/PersonCardWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/CentralEServiceLinkWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/SidebarBarLinkWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/MyGovServiceImageLinkWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/OfficeDigitalServiceImageLinkWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/ImportantLinkCardWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/NationalAnthemWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/BdWorkersTrustBoardImageLinkWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/SocialMediaCardWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/SocialLinkMediaWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/InnovationCornerWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/OfficeAttachmentApplicationFormWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/CentralBlocksSidebarWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/EmergencyHotlineListCardWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/FooterWidget') }}"></script>
    <script src="{{ asset('assets/css/widget-assets/js/BlockWidget') }}"></script>

    <script
        src="../objectstorage.ap-dcc-gazipur-1.oraclecloud15.com/n/axvjbnqprylg/b/V2Ministry/o/npf-themes/theme_2025/assets/js/index.js">
    </script>
</body>

<!-- Mirrored from dncc.gov.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Aug 2026 13:56:07 GMT -->

</html>
