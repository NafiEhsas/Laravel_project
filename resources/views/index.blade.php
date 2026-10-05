<!DOCTYPE html>
<html lang="ps">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ABNE Library</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/navbar.css">

    <!-- Hero Images -->
    <link rel="preload" as="image" href="/assets/herosection.jpg">
    <link rel="preload" as="image" href="/assets/herosection2.jpg">
    <link rel="preload" as="image" href="/assets/herosection3.jpg">
    <link rel="preload" as="image" href="/assets/herosection4.jpg">

    <style>
        .nav-links li:nth-of-type(1) a::after {
            width: 100%;
            background: linear-gradient(to right, red, yellow);
        }
    </style>
</head>

<body dir="rtl">
   <!-- ================= HEADER ================= -->

    <header>

        <div id="logo_container">
            <img
                src="/assets/logos/Ehsas Library logo design.png"
                alt="احساس کتابتون"
            >
        </div>

        <div id="ad_container">
            <span>
                یو کتاب رانیسي او په پچه اچونه کي ګډون وکړي
            </span>
        </div>

        <div id="buttons_container">

            <!-- Theme Button -->
            <button id="modeBtn" type="button">
                <img
                    src="/assets/headerIcons/sun.png"
                    alt="Theme"
                    width="18"
                    height="18"
                >
            </button>

            <!-- Profile -->
            <button type="button">
                <img
                    src="/assets/profile/profile.png"
                    alt="Profile"
                    width="30"
                    height="30"
                >
            </button>

            <!-- Logout -->
            <button type="button">
                <a href="/login.php">
                    <img
                        src="/assets/icons/logout.png"
                        alt="Logout"
                        width="30"
                        height="30"
                    >
                </a>
            </button>

        </div>

    </header>


    <!-- ================= NAVBAR ================= -->

    <nav class="navbar">

        <div class="nav-container">

            <ul class="nav-links">

                <li>
                    <a href="/index.php">
                        کور پاڼه
                    </a>
                </li>

                <li>
                    <a href="books">
                        کتابونه
                    </a>
                </li>

                <li>
                    <a href="/news.php">
                        خبرونه
                    </a>
                </li>

                <li>
                    <a href="/instructor.php">
                        لارښود
                    </a>
                </li>

                <li>
                    <a href="/visitUs.php">
                        لیدنه وکړئ
                    </a>
                </li>

                <li>
                    <a href="/about.php">
                        زموږ په اړه
                    </a>
                </li>

                <li>
                    <a href="/register.php">
                        غړیتوب
                    </a>
                </li>

            </ul>

        </div>

    </nav>

    

    <!-- ================= HERO ================= -->

    <section class="hero">

        <div class="hero-content">

            <h1>
                احساس کتابتون ته ښه راغلاست
            </h1>

            <h2>
                همدا نن زموږ سره ځان راجستر کړي او د یوی هفتي لپاره زموږ خدمات وړیا تر لاسه کړي
            </h2>

            <button id="registerBtn">

                <a href="/register.php">
                    ځان راجیستر کړي
                </a>

            </button>

        </div>

    </section>


    <!-- ================= SERVICES ================= -->

    <section id="featureSection">

        <h1>
            خدمات
        </h1>

        <div id="featureCards"></div>

    </section>


    <!-- ================= POPULAR BOOKS ================= -->

    <section class="section">

        <h1>
            ډیر خوښ سوي کتابونه
        </h1>

        <div
            class="books"
            id="popularBooks">
        </div>

    </section>


    <!-- ================= SEARCHED BOOKS ================= -->

    <section class="section">

        <h1>
            ډیر پلټل سوي کتابونه
        </h1>

        <div
            class="books"
            id="searchedBooks">
        </div>

    </section>


    <!-- ================= WHY CHOOSE US ================= -->

    <section id="featureSection">

        <h1>
            ولی باید موږ انتخاب کري؟
        </h1>

        <div id="featureCards1"></div>

    </section>


    <!-- ================= TESTIMONIALS ================= -->

    <section>

        <div class="testimonials">

            <h2 dir="rtl">
                نظرونه
            </h2>

            <div
                class="testimonial-container"
                id="testimonialContainer">
            </div>

        </div>

    </section>


    <!-- ================= DEMO VIDEO ================= -->

    <section class="demo-video-section">

        <h1>
            د کتابتون ویډیو ډیمو
        </h1>

        <p>
            زموږ د کتابتون د خدماتو او سیستم لنډه ویډیو وګورئ
        </p>

        <div class="video-container">

            <video
                controls
                autoplay
                muted
                loop
            >

                <source
                    src="/assets/Recording 2026-05-15 221948.mp4"
                    type="video/mp4"
                >

                ستاسو براوزر د ویډیو ملاتړ نه کوي

            </video>

        </div>

    </section>


    <!-- ================= FAQ ================= -->

    <section class="faq-section">

        <h2>
            ډیری پوښتل سوي پوښتني
        </h2>


        <!-- FAQ 1 -->

        <div class="faq-item">

            <button
                class="faq-question"
                type="button"
            >

                څنګه کولای شو کتاب پور کړو؟

                <span>
                    +
                </span>

            </button>

            <div class="faq-answer">

                <p>
                    تاسو کولای شئ د غړیتوب وروسته کتابونه د یوې ټاکلې مودې لپاره پور کړئ.
                </p>

            </div>

        </div>


        <!-- FAQ 2 -->

        <div class="faq-item">

            <button
                class="faq-question"
                type="button"
            >

                ایا آنلاین کتابونه هم شتون لري؟

                <span>
                    +
                </span>

            </button>

            <div class="faq-answer">

                <p>
                    هو، تاسو کولای شئ ډیجیټل او PDF کتابونه آنلاین مطالعه یا ډاونلوډ کړئ.
                </p>

            </div>

        </div>


        <!-- FAQ 3 -->

        <div class="faq-item">

            <button
                class="faq-question"
                type="button"
            >

                د غړیتوب فیس څومره دی؟

                <span>
                    +
                </span>

            </button>

            <div class="faq-answer">

                <p>
                    زموږ د غړیتوب فیس مناسب دی او ځینې خدمات په وړیا ډول هم وړاندې کیږي.
                </p>

            </div>

        </div>


        <!-- FAQ 4 -->

        <div class="faq-item">

            <button
                class="faq-question"
                type="button"
            >

                څنګه حساب جوړ کړو؟

                <span>
                    +
                </span>

            </button>

            <div class="faq-answer">

                <p>
                    د راجستر پاڼې ته لاړ شئ، معلومات داخل کړئ او خپل حساب جوړ کړئ.
                </p>

            </div>

        </div>

    </section>


    <!-- ================= FOOTER ================= -->

    <footer class="footer">

        <div class="footer-container">


            <!-- About -->

            <div class="footer-section-about">

                <h2 class="logo">
                    احساس کتابتون
                </h2>

                <p dir="rtl">
                    احساس کتابتون د زده کړې او پوهې لپاره یو بشپړ ډیجیټل مرکز دی.
                    تاسو کولی شئ دلته کتابونه، څېړنیزې مقالې او نور مهم مواد ومومئ،
                    څو ستاسو د علمي او شخصي پرمختګ ملاتړ وکړي.
                </p>

            </div>


            <!-- Social Media -->

            <div class="socials">

                <h2>
                    موږ وڅاري
                </h2>

                <div>

                    <a
                        href="https://whatsapp.com"
                        target="_blank"
                    >

                        <img
                            src="/assets/logos/whatsapp.png"
                            alt="WhatsApp"
                            width="45"
                            height="45"
                        >

                    </a>


                    <a
                        href="https://facebook.com"
                        target="_blank"
                    >

                        <img
                            src="/assets/logos/facebook.png"
                            alt="Facebook"
                            width="45"
                            height="45"
                        >

                    </a>


                    <a
                        href="https://youtube.com"
                        target="_blank"
                    >

                        <img
                            src="/assets/logos/youtube (1).png"
                            alt="YouTube"
                            width="45"
                            height="45"
                        >

                    </a>

                </div>

            </div>


            <!-- Contact -->

            <div class="footer-section">

                <h2 dir="rtl">
                    اړیکه ونیسي
                </h2>

                <p dir="rtl">

                    <strong>
                        ایمیل:
                    </strong>

                    <span dir="ltr">
                        ABNE.library@gmail.com
                    </span>

                </p>


                <p dir="rtl">

                    <strong>
                        تماس شمیره:
                    </strong>

                    <span dir="ltr">
                        +93 700 000 000
                    </span>

                </p>


                <p dir="rtl">

                    <strong>
                        ادرس:
                    </strong>

                    کندهار، افغانستان

                </p>

            </div>

        </div>


        <!-- Footer Bottom -->

        <div class="footer-bottom">

            <p>
                © 2026 MyLibrary | All Rights Reserved
            </p>

        </div>

    </footer>


    <!-- ================= JAVASCRIPT ================= -->

    <script src="js/app.js"></script>
    <script src="js/theme.js"></script>


    <!-- ================= FAQ SCRIPT ================= -->

    <script>

        const questions =
            document.querySelectorAll(".faq-question");


        questions.forEach(question => {

            question.addEventListener("click", () => {

                const answer =
                    question.nextElementSibling;


                if (answer.style.maxHeight) {

                    answer.style.maxHeight = null;

                } else {

                    answer.style.maxHeight =
                        answer.scrollHeight + "px";

                }

            });

        });

    </script>

</body>

</html>