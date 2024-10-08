<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="LoginRegister/LoginRegisterStyling.css">
    <link rel="stylesheet" href="LoginRegister/LoginRegisterStyling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>{{ Config('app.name') }}</title>
</head>
<style>
    body {
        background-color: white;
    }

    * {
        font-family: "montserrat";
    }

    .UserType {
        outline: none;
        background: none;
        border: none;
        color: white;
        font-weight: 700;
        font-size: 60px;
        border-radius: 8px;
        transition: all 0.3s;

    }

    .UserType:hover {
        background-color: #00000075
    }

    .tph-icons {
        color: #cc1c22;
    }

    .infos {
        font-weight: 500;
        size: 13px;
    }

    .icons {
        color: #333333;
        transition: 0.3s;
    }

    .icons:hover {
        color: #cc1c22;
    }

    .cardentials {
        font-style: none;
        text-underline-offset: none;
        transition: 0.3s;
        color: #333333;
        font-weight: 500;
        size: 13px;
    }

    .cardentials:hover {
        color: #cc1c22;
        text-decoration: none;
    }

    .top-header {
        font-size: 14px;
        color: #ffffff;
        background-color: white;
    }

    .top-header .contact-info i {
        margin-right: 5px;
    }

    .top-header .user-actions a {
        color: #333;
    }

    .top-header .user-actions a:hover {
        color: #007bff;
    }

    .main-header .logo img {
        max-height: 40px;
    }

    .Lego {
        text-decoration: none;
        font-family: "Courier New", Courier, monospace;
        font-weight: 700;
        font-size: 32px;
        color: #333;
        transition: 0.25s;
    }

    .Lego:hover {
        color: #cc1c22;
    }

    .main-header .navbar-nav .nav-item .nav-link {
        color: #333;
        padding: 0 20px;
    }

    .main-header .navbar-nav .nav-item.active .nav-link,
    .main-header .navbar-nav .nav-item .nav-link:hover {
        color: #cc1c22;
        border-bottom: solid 2px #cc1c22;
    }

    .navbar-nav {
        width: max-content;
    }

    .navbar-nav .nav-item {
        width: max-content;
    }

    .main-header .cart a {
        color: #333;
        position: relative;
    }

    .main-header .cart:hover {
        color: #cc1c22;
    }

    .main-header .cart a .badge {
        position: absolute;
        top: -10px;
        right: -10px;
        font-size: 10px;
    }

    .cart-view {
        position: absolute;
        top: 100px;
        right: 0;
        width: 300px;
        background: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: opacity 0.3s, visibility 0.3s;
        z-index: 1000;
        opacity: 0;
        visibility: hidden;
    }

    .cart-view.show {
        opacity: 1;
        visibility: visible;
    }

    .cart-view .cart-content {
        max-height: 300px;
        overflow-y: auto;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: -250px;
        width: 250px;
        height: 100%;
        background: #000000;
        color: #fff;
        transition: all 0.3s;
        z-index: 1000;
        padding-top: 60px;
    }

    .SideBarLogo {
        max-width: 120px;
    }

    .sidebar.active {
        left: 0;
    }

    .sidebar-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 15px;
    }

    .sidebar-header .close {
        font-size: 30px;
        color: #fff;
        cursor: pointer;
        transition: 0.3s;
    }

    .sidebar ul.components {
        padding: 20px 0;
    }

    .sidebar ul li {
        padding: 10px;
        padding-left: 20px;
        list-style: none;
    }

    .sidebar .components .MenuItem .linkItem {
        color: #fff;
        text-decoration: none;
        display: block;
        transition: 0.3s;
    }

    .sidebar .components .MenuItem .linkItem:hover,
    .sidebar .components .MenuItem.active .linkItem,
    .sidebar .components .MenuItem .linkItem:focus {
        color: #cc1c22;
    }

    #sidebarCollapseBtn {
        background-color: #00000000;
        border: none;
        outline: none;
        transition: 0.3s;
    }

    #sidebarCollapseBtn:hover {
        color: #cc1c22;
    }

    .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        border-bottom: none;
    }

    .card-img-top {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        height: 250px;
        object-fit: cover;
    }

    .profile-section {
        display: flex;
    }

    .profile-section img {
        margin-right: 10px;
    }

    .ProfileBack {
        max-height: 400px;
    }

    .AcademyImg {
        border: 3px solid #333;
        width: 150px;
        height: 150px;
    }

    .ProfileInfo {
        position: relative;
        bottom: 50px;
    }

    .profile-section h5 {
        margin: 0;
        font-size: 1.2rem;
    }

    .profile-section p {
        margin: 0;
        color: gray;
        font-size: 0.9rem;
    }

    .AcademyButton {
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg,
                rgba(2, 0, 36, 1) 25%,
                rgba(213, 1, 1, 1) 98%);
        font-weight: 700;
        color: white;
        transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .AcademyButton:hover {
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg,
                rgba(213, 1, 1, 1) 25%,
                rgba(2, 0, 36, 1) 98%);
    }

    .ConfgButton {
        cursor: pointer;
        position: relative;
        padding: 10px 12px;
        font-size: 16px;
        color: rgb(193, 3, 3);
        border: 2px solid rgb(193, 3, 3);
        border-radius: 34px;
        background-color: transparent;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
        overflow: hidden;
    }

    .ConfgButton::before {
        content: "";
        position: absolute;
        inset: 0;
        margin: auto;
        min-width: 40px;
        width: 50px;
        height: 50px;
        border-radius: inherit;
        scale: 0;
        z-index: -1;
        background-color: rgb(193, 3, 3);
        transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .ConfgButton:hover::before {
        scale: 3;
    }

    .ConfgButton:hover {
        color: #ffffff;
        scale: 1.1;
        box-shadow: 0 0px 20px rgba(193, 163, 98, 0.4);
    }

    .ConfgButton:active {
        scale: 1;
    }

    .btn-link {
        color: #000;
        text-decoration: none;
    }

    .btn-link:hover {
        text-decoration: underline;
    }

    .TabsTitle {
        font-weight: 700;
        color: #cc1c22;
    }

    .CounterRow {
        padding: 15px;
    }

    .AcademyInfoImg {
        background-image: url(img/Garduation.jpeg);
        background-size: cover;
        border-radius: 15px;
        height: 500px;
    }

    .BannerAcademyinfo {
        background-image: url(img/large-modern-office-building.jpg);
        background-size: cover;
        background-blend-mode: darken;
        background-color: rgba(0, 0, 0, 0.7);
    }

    .BannerAcademyHead {
        font-size: 37px;
        font-weight: 700;
    }

    .BannerAcademyP {
        font-size: 27px;
        font-weight: 500;
    }

    .BannerCol {
        padding: 150px;
    }

    .imgGallery {
        border-radius: 12px;
        width: 50px;
        height: 50px;
    }

    .Loading {
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
        visibility: hidden;
        position: absolute;
    }

    .loader {
        position: relative;
        width: 200px;
        height: 200px;
        perspective: 800px;
    }

    .crystal {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 60px;
        height: 60px;
        opacity: 0;
        transform-origin: bottom center;
        transform: translate(-50%, -50%) rotateX(45deg) rotateZ(0deg);
        animation: spin 4s linear infinite, emerge 2s ease-in-out infinite alternate,
            fadeIn 0.3s ease-out forwards;
        border-radius: 10px;
        visibility: hidden;
    }

    @keyframes spin {
        from {
            transform: translate(-50%, -50%) rotateX(45deg) rotateZ(0deg);
        }

        to {
            transform: translate(-50%, -50%) rotateX(45deg) rotateZ(360deg);
        }
    }

    @keyframes emerge {

        0%,
        100% {
            transform: translate(-50%, -50%) scale(0.5);
            opacity: 0;
        }

        50% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        to {
            visibility: visible;
            opacity: 0.8;
        }
    }

    .crystal:nth-child(1) {
        background: linear-gradient(45deg, #66000a, #336699);
        animation-delay: 0s;
    }

    .crystal:nth-child(2) {
        background: linear-gradient(45deg, #990017, #3366cc);
        animation-delay: 0.3s;
    }

    .crystal:nth-child(3) {
        background: linear-gradient(45deg, #cc0025, #3399ff);
        animation-delay: 0.6s;
    }

    .crystal:nth-child(4) {
        background: linear-gradient(45deg, #ff0033, #66ccff);
        animation-delay: 0.9s;
    }

    .crystal:nth-child(5) {
        background: linear-gradient(45deg, #ff3347, #99ccff);
        animation-delay: 1.2s;
    }

    .crystal:nth-child(6) {
        background: linear-gradient(45deg, #ff6666, #ccffff);
        animation-delay: 1.5s;
    }

    .row.gallery {
        transform: translate(-9999px, -9999px);
        opacity: 0;
        transition: opacity 0.3s;
        position: absolute;
    }

    .row.gallery.show {
        position: relative;
        transform: translate(0, 0);
        opacity: 1;
    }

    .online {
        background-color: hsla(137, 99%, 34%, 0.2);
        width: 35%;
        height: 15%;
        border-radius: 5px;
        font-weight: 400;
        font-size: 16px;
    }

    .offline {
        background-color: #cc1c2233;
        width: 35%;
        height: 15%;
        border-radius: 5px;
    }

    .cardCourseTitle {
        font-weight: 700;
        font-size: 16px;
    }

    .Location {
        font-size: 14px;
    }

    .footer {
        background-image: url(img/University.jpeg);
        background-size: cover;
        background-blend-mode: darken;
        background-color: rgba(0, 0, 0, 0.7);
    }

    .footer h5 {
        color: red;
    }

    .footer a {
        color: #fff;
        text-decoration: none;
    }

    .footer a:hover {
        text-decoration: underline;
    }

    .footer .social-links a {
        color: #fff;
        margin: 0 10px;
        font-size: 1.2em;
    }

    .footer hr {
        border-top: 1px solid #7f8c8d;
    }

    .footer p {
        margin: 0;
    }

    .footer .text-center img {
        width: 100px;
    }

    .back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        display: none;
        z-index: 1000;
    }

    /*Home Styling*/

    .Home-Banner {
        background-image: url(img/HomeBanner.jpeg);
        background-size: cover;
    }

    .StartButton {
        outline: none;
        border: none;
        border-radius: 100px;
        width: 150px;
        color: white;
        height: 40px;
        background: -webkit-linear-gradient(180deg, #60191b, transparent) #cc1c22;
        transition: 0.3s ease-in-out;
        font-weight: 700;
    }

    .StartButton:hover {
        background: -webkit-linear-gradient(180deg, #cc1c22, transparent) #60191b;
    }

    .WVideo {
        outline: none;
        border: none;
        border-radius: 100px;
        width: 150px;
        color: #333;
        height: 40px;
        background: -webkit-linear-gradient(180deg, #d3d3d3, transparent) #eeecec;
        transition: 0.3s ease-in-out;
        font-weight: 500;
    }

    .WVideo:hover {
        background: -webkit-linear-gradient(180deg, #eeecec, transparent) #d3d3d3;
    }

    .USersBtn {
        outline: none;
        border: none;
        background-color: #ffffff57;
        width: 235px;
        height: 150px;
        font-weight: 600;
        font-size: 35px;
        color: #660004;
        margin-top: 20px;
    }

    .USersTitle {
        font-size: 20px;
        font-weight: 500;
    }

    .search-container {
        display: flex;
        align-items: center;
        border: 1px solid #ffa4a4;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        height: 66px;
        width: 100%;
        margin-bottom: 15px;
        float: right;
    }

    .search-button {
        background-color: #ffecec;
        border-radius: 8px;
        border: none;
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 12px;
    }

    .search-button svg {
        width: 20px;
        height: 20px;
    }

    .search-input {
        border: none;
        padding: 10px;
        flex: 1;
        font-size: 16px;
        outline: none;
    }

    .search-input::placeholder {
        color: #9e9e9e;
    }

    .carouselContiner {
        background-color: #ffeaeb;
        border-radius: 10px;
        padding: 24px 32px 24px 32px;
    }

    .category-Btn {
        border: 1px solid #cc1c22;
        border-radius: 10px;
        margin: 0 5px;
        background-color: #fff;
        color: #000;
        width: 165px;
        height: 65px;
        transition: 0.3s;
    }

    .category-Btn.active,
    .category-Btn:hover {
        color: #ff5a5a;
        background-color: #fff;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        border-radius: 50%;
        color: #333;
    }

    .CarousalControl::after {
        color: #333;
    }

    .content {
        padding: 20px;
        border: 1px solid #ddd;
        margin-top: 20px;
        opacity: 0;
        /* Initially set opacity to 0 (transparent) */
        transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
        /* Transition for opacity and visibility changes */
        visibility: hidden;
        /* Make it hidden but still takes space */
        /* Still needed for initial hiding */
        position: absolute;
    }

    /*? Courses page Styling*/

    .SubHeader {
        background-image: url(img/Subheader.jpeg);
        background-size: cover;
        background-blend-mode: darken;
        background-color: rgba(0, 0, 0, 0.7);
    }

    .content-section {
        transform: translate(-9999px, -9999px);
        opacity: 0;
        transition: opacity 1s;
        position: absolute;
    }

    .content-section.active {
        position: relative;
        transform: translate(0, 0);
        opacity: 1;
    }

    .navPag.active .page-item {
        background-color: red;
        border-color: red;
        color: white;
    }

    .navpagUl .page-item {
        margin: 5px;
        background-color: #f1f1f1;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        align-items: center;
        padding: 6px;
        transition: 0.3s;
    }

    .navpagUl .page-item:hover,
    .navpagUl .page-item.active {
        background-color: red;
        color: white;
    }

    .navPag {
        color: black;
        transition: 0.3s;
    }

    .navpagUl .page-item .navPag:hover,
    .navpagUl .page-item .navPag.active {
        color: white;
    }

    .badgeSail {
        outline: none;
        border: none;
        background-color: red;
        border-radius: 5px;
        color: white;
        width: min-content;
        height: min-content;
    }

    .CourseINclud {
        border: 1px solid black;
        border-radius: 5px;
    }

    .LearnList {
        list-style: none;
    }

    .LearnList li::before {
        content: "✔️ ";
    }

    .accordion-button-styled {
        outline: none;
        border: none;
        background-color: white;
        width: 100%;
        font-size: 18px;
        transition: 0.3s;
        height: 50px;
    }

    .student-review {
        text-align: center;
        padding: 30px;
    }

    .student-review h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .rating {
        margin-bottom: 10px;
    }

    .rating-number {
        font-size: 48px;
        color: #f9a825;
    }

    .rating-details {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .rating-bar {
        width: 100%;
        height: 8px;
        background-color: #ddd;
        border-radius: 4px;
    }

    .progress-bar {
        background-color: #f9a825;
        border-radius: 4px;
    }

    .rating-info {
        display: flex;
        align-items: center;
    }

    .rating-value {
        font-size: 20px;
        margin-right: 10px;
    }

    .rating-count {
        font-size: 16px;
        color: #aaa;
    }

    .stats {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .stat-item {
        width: 48%;
        text-align: center;
        margin-bottom: 10px;
    }

    .stat-value {
        font-size: 18px;
        color: #f9a825;
        margin-bottom: 5px;
    }

    .stat-label {
        font-size: 14px;
        color: #aaa;
    }

    /*? About Page styling*/
    .SubHeaderAbout {
        background-image: url(img/Container.png);
    }

    .SubHeaderAboutImg {
        width: 100%;
    }

    .InfoCounterAbout {
        background-color: #cc1c2226;
        background-image: url(img/Container.png);
        background-size: cover;
        background-position: 30px;
    }

    .InfoCounterAbouticon {
        max-width: 70px;
    }

    .carousel-item {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .carousel-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        /* 3 columns */
        grid-gap: 15px;
    }

    .carousel-grid-item {
        padding: 20px;
        text-align: center;
    }

    .sectionOfvideotrailer {
        background-image: url(img/backgroundSectionabout.jpeg);
        background-size: cover;
        background-blend-mode: darken;
        background-color: rgba(0, 0, 0, 0.7);
    }

    .VideoButton {
        outline: none;
        border: none;
        background: none;
        font-size: 30px;
        color: white;
        transition: 0.3s;
    }

    .VideoButton:hover {
        background-blend-mode: darken;
        background-color: rgba(0, 0, 0, 0.7);
        border-radius: 12px;
    }

    .MembersImg {
        max-width: 250px;
        max-height: 250px;
    }

    .TitleOfIcon {
        font-size: 30px;
        font-weight: 600;
    }

    .ContantFieldStyling {
        background-color: #eeeeee;
        border: none;
        outline: none;
        border-radius: 12px;
        height: 60px;
        padding-left: 30px;
    }

    .MessageFieldStyling {
        background-color: #eeeeee;
        border: none;
        outline: none;
        border-radius: 12px;
        height: 220px;
        padding-left: 30px;
    }

    .ContactSubmit {
        outline: none;
        border: none;
        border-radius: 8px;
        color: white;
        width: 100px;
        height: 40px;
        background: -webkit-linear-gradient(180deg, #60191b, transparent) #cc1c22;
        transition: 0.3s ease-in-out;
    }

    .ContactSubmit:hover {
        background: -webkit-linear-gradient(180deg, #cc1c22, transparent) #60191b;
    }

    .background {
        background: url(../img/University.jpeg) no-repeat center center/cover;
        background-size: cover;
        background-blend-mode: darken;
        background-color: rgba(0, 0, 0, 0.7);
    }

    .login-box {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 24px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
        padding: 30px;
        border: 2px solid white;
    }

    .firstStep {
        width: 22px;
        height: 100%;
        color: white;
        background-color: #CC1C22;
        border-radius: 4px;
        font-size: 15px;

    }

    .firstStepText {
        font-size: 14px;
        font-weight: 400;
        color: white;
        padding-left: 8px;
    }

    .secondStep {
        width: 22px;
        height: 100%;
        color: #CC1C22;
        background-color: white;
        border-radius: 4px;
        font-size: 15px;
    }

    .firstStep2 {
        width: 22px;
        height: 100%;
        color: #CC1C22;
        background-color: white;
        border-radius: 4px;
        font-size: 15px;

    }

    .secondStep2 {
        width: 22px;
        height: 100%;
        color: white;
        background-color: #CC1C22;
        border-radius: 4px;
        font-size: 15px;
    }

    .fromIMg {
        max-width: 180px;
    }

    .form-label {
        display: block;
    }

    .form-check-label {
        margin-right: 20px;
        color: #F1F1F1;
    }

    .btn-outline-secondary {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    .btn-outline-secondary i {
        font-size: 20px;
    }

    .text-muted {
        font-size: 0.9rem;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .form__group {
        position: relative;
        padding: 20px 0 0;
        width: 100%;
        max-width: 400px;
    }

    .form__field {
        font-family: inherit;
        width: 100%;
        border: none;
        border-bottom: 2px solid #F1F1F1;
        outline: 0;
        font-size: 17px;
        color: #fff;
        padding: 7px 0;
        background: transparent;
        transition: border-color 0.2s;
    }

    .form__field::placeholder {
        color: transparent;
    }

    .form__field:placeholder-shown~.form__label {
        font-size: 17px;
        cursor: text;
        top: 20px;
    }

    .form__label {
        position: absolute;
        top: 0;

        display: block;
        transition: 0.2s;
        font-size: 17px;
        color: #F1F1F1;
        pointer-events: none;

    }

    .form__field:focus {
        padding-bottom: 6px;
        font-weight: 700;
        border-width: 3px;
        border-image: linear-gradient(to right, #60191B, #CC1C22);
        border-image-slice: 1;
    }

    .form__field:focus~.form__label {
        position: absolute;
        top: 0;
        display: block;
        transition: 0.2s;
        font-size: 17px;
        color: #CC1C22;
        font-weight: 700;
    }

    /* reset input */
    .form__field:required,
    .form__field:invalid {
        box-shadow: none;
    }

    .checky {
        background-color: transparent;

    }

    .LogINBtn {
        outline: none;
        border: none;
        border-radius: 8px;
        color: white;
        width: 100%;
        height: 40px;
        background: -webkit-linear-gradient(180deg, #60191B, transparent) #CC1C22;
        transition: 0.3s ease-in-out;
    }

    .LogINBtn:hover {
        background: -webkit-linear-gradient(180deg, #CC1C22, transparent) #60191B
    }






    /*? mobile size layout*/
    @media screen and (max-width: 600px) {
        .BannerAcademyImg {
            visibility: hidden;
            clear: both;
            float: left;
            margin: 10px auto 5px 20px;
            width: 28%;
            display: none;
        }

        .WVideo {
            margin-top: 20px;
        }

        .homeBannerGirl {
            display: none;
        }

        .category-Btn {
            border: 1px solid #cc1c22;
            border-radius: 10px;
            margin: 0 5px;
            background-color: #fff;
            color: #000;
            width: 130px;
            height: 40px;
            transition: 0.3s;
        }

        .carouselAbout {
            display: none;
        }
    }
</style>

<body>




    <div>
        {{-- Page Content --}}
        @yield('content')
    </div>




    <!-- Footer -->


    <button type="button" class="btn btn-dark back-to-top" id="back-to-top">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5" />
        </svg>
    </button>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="js/burger-menu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({

            offset: 200, // Offset (in px) from the original trigger point
            duration: 1000, // Duration of animation (in ms)
            easing: 'ease-in-out-sine', // Easing function
            delay: 100, // Delay before the animation starts (in ms)
            once: true, // Whether animation should happen only once - while scrolling down
            mirror: false, // Whether elements should animate out while scrolling past them
        });
    </script>
</body>

</html>
