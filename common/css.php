<meta name="google-site-verification" content="-csooiiKYbENTldppI9DrbICbzpNR9xxyttlca-q70w" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z8FDMMYYD6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z8FDMMYYD6');
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Outfit:wght@100..900&display=swap" media="print" onload="this.media='all'">
<noscript>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Outfit:wght@100..900&display=swap">
</noscript>

<style>
  :root {
    --font-DM-Sans: "DM Sans", sans-serif;
    --font-Outfit: "Outfit", sans-serif;
    --primary-color: rgba(248, 78, 29, 1);
    --secondary-color: rgba(3, 35, 48, 1);
    --primary-black: rgba(2, 17, 24, 1);
    --paragraph-bg-dark: rgba(237, 237, 237, 1);
    --white-color: rgba(255, 255, 255, 1);
  }

  *, *::before, *::after {
    box-sizing: border-box;
  }

  body {
    margin: 0;
    font-family: var(--font-Outfit);
    color: var(--primary-black);
    background-color: var(--white-color);
  }

  a {
    text-decoration: none;
    color: inherit;
  }

  img {
    max-width: 100%;
    height: auto;
    display: block;
  }

  ul {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .top-bar-section {
    background-color: var(--secondary-color);
    color: var(--white-color);
    font-size: 14px;
  }

  .top-bar-section .container-custom {
    max-width: 1320px;
    margin: 0 auto;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    flex-wrap: wrap;
  }

  .top-bar-section a {
    color: var(--white-color);
  }

  .top-bar-section .top-bar-end ul {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
  }

  header {
    background-color: var(--white-color);
    width: 100%;
  }

  header .container-custom {
    max-width: 1320px;
    margin: 0 auto;
    padding: 16px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
  }

  header .menu-list {
    display: flex;
    gap: 18px;
    flex-wrap: wrap;
  }

  header .menu-list a {
    color: var(--primary-black);
    font-size: 16px;
  }

  .header-btn {
    background-color: var(--primary-color);
    color: var(--white-color);
    padding: 12px 20px;
    border-radius: 4px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    line-height: 1;
  }

  .banner-section {
    background-color: var(--secondary-color);
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1920px;
    width: 100%;
    margin: 0 auto;
    min-height: 680px;
  }

  .banner-section .banner-content {
    padding: 0 0 0 70px;
    max-width: 825px;
    width: 100%;
  }

  .banner-section .banner-content .sub-title {
    display: flex;
    align-items: center;
    gap: 4px;
    flex-wrap: wrap;
  }

  .banner-section .banner-content .sub-title span {
    color: var(--white-color);
    font-size: 14px;
  }

  .banner-section .banner-content h1 {
    font-weight: 700;
    font-size: 48px;
    line-height: 1.2;
    color: var(--white-color);
    margin: 18px 0 24px;
  }

  .banner-section .banner-content p {
    font-family: var(--font-DM-Sans);
    font-size: 16px;
    line-height: 1.4;
    color: var(--paragraph-bg-dark);
    margin: 0 0 12px;
  }

  .primary-btn1 {
    background-color: var(--primary-color);
    font-family: var(--font-Outfit);
    font-weight: 500;
    font-size: 18px;
    color: var(--white-color);
    line-height: 1;
    padding: 16px 32px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    white-space: nowrap;
  }

  .banner-section .right-side-area {
    max-width: 1100px;
    width: 100%;
  }

  .banner-section .banner-img-wrap {
    position: relative;
  }

  .banner-section .swiper {
    width: 100%;
    overflow: hidden;
  }

  .banner-section .swiper-wrapper {
    display: flex;
  }

  .banner-section .swiper-slide {
    flex: 0 0 100%;
  }

  .banner-section .swiper-slide img {
    width: 100%;
    height: auto;
    object-fit: cover;
    min-height: 520px;
  }

  @media (max-width: 1199px) {
    .banner-section .banner-content {
      padding-left: 40px;
    }

    .banner-section .banner-content h1 {
      font-size: 30px;
    }
  }

  @media (max-width: 991px) {
    .banner-section {
      flex-direction: column;
    }

    .banner-section .banner-content {
      padding: 80px 30px;
    }

    .banner-section .right-side-area {
      display: none;
    }

    header .menu-list {
      display: none;
    }
  }

  @media (max-width: 576px) {
    .banner-section .banner-content {
      padding: 80px 20px;
    }

    .banner-section .banner-content h1 {
      font-size: 32px;
    }
  }
</style>

<link rel="stylesheet" href="assets/css/swiper-bundle.min.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="assets/css/swiper-bundle.min.css"></noscript>
<link rel="stylesheet" href="assets/css/jquery-ui.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="assets/css/jquery-ui.css"></noscript>
<link rel="stylesheet" href="assets/css/boxicons.min.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="assets/css/boxicons.min.css"></noscript>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="assets/css/bootstrap.min.css"></noscript>
<link rel="stylesheet" href="assets/css/bootstrap-icons.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="assets/css/bootstrap-icons.css"></noscript>
<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="assets/css/jquery.fancybox.min.css"></noscript>
<link rel="stylesheet" href="assets/css/animate.min.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="assets/css/animate.min.css"></noscript>
<link rel="stylesheet" href="assets/css/nice-select.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="assets/css/nice-select.css"></noscript>
<link rel="stylesheet" href="assets/css/select2.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="assets/css/select2.css"></noscript>
<link rel="stylesheet" href="assets/css/style.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="assets/css/style.css"></noscript>
<link rel="stylesheet" href="assets/css/my.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="assets/css/my.css"></noscript>
