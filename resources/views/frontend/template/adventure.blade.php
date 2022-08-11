@php
    $location_mananger=DB::table('frontend_section_control')->where('id',22)->first();
    $travel_arrangement=DB::table('frontend_section_control')->where('id',23)->first();
    $start_adventure=DB::table('frontend_section_control')->where('id',24)->first();
    $private_guide=DB::table('frontend_section_control')->where('id',25)->first();
    $activity=DB::table('frontend_section_control')->where('id',26)->first();

@endphp
<section class="article">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="left">
                    <div class="row">
                        <div class="col-md-6 col-10 offset-md-0 offset-1 text-center text-sm-left  ">
                            <a href="{{ route('destination',['id'=>8,'url'=>'nepal']) }}" class="text-dark text-decoration-none">
                            <div class="icon">
                                <svg width="71" height="71" viewBox="0 0 71 71" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M68.7791 31.0606C67.5545 31.0606 66.5605 32.0545 66.5605 33.2792V58.4027L48.8116 65.5023V42.1536C48.8116 40.929 47.8177 39.935 46.593 39.935C45.3684 39.935 44.3744 40.929 44.3744 42.1536V65.4979L26.6255 58.3983V23.2466L36.9066 27.3599C38.0292 27.8125 39.3337 27.2623 39.7908 26.1219C40.2478 24.986 39.6932 23.6948 38.5528 23.2377L25.2722 17.922C25.2722 17.922 25.2722 17.922 25.2677 17.922L25.2322 17.9086C24.7042 17.6957 24.1141 17.6957 23.586 17.9086L23.5461 17.922C23.5461 17.922 23.5461 17.922 23.5417 17.922L1.39549 26.7831C0.55685 27.1203 0.00219727 27.9323 0.00219727 28.842V68.777C0.00219727 69.5136 0.370487 70.2013 0.978386 70.614C1.35111 70.8669 1.78152 70.9956 2.22081 70.9956C2.50035 70.9956 2.7799 70.9423 3.04613 70.8358L24.4069 62.2942L45.7278 70.8225C45.7278 70.8225 45.7278 70.8225 45.7322 70.8225L45.7721 70.8403C46.3002 71.0533 46.8903 71.0533 47.4184 70.8403L47.4583 70.8225C47.4583 70.8225 47.4583 70.8225 47.4627 70.8225L69.6089 61.9658C70.4431 61.6242 70.9978 60.8122 70.9978 59.9025V33.2792C70.9978 32.0545 70.0038 31.0606 68.7791 31.0606ZM22.1883 58.3983L4.43942 65.4979V30.3417L22.1883 23.2422V58.3983Z"
                                        fill="#009DD2" />
                                    <path
                                        d="M55.4675 8.87445C51.7979 8.87445 48.8116 11.8607 48.8116 15.5303C48.8116 19.1999 51.7979 22.1861 55.4675 22.1861C59.1371 22.1861 62.1233 19.1999 62.1233 15.5303C62.1233 11.8607 59.1371 8.87445 55.4675 8.87445ZM55.4675 17.7489C54.2428 17.7489 53.2489 16.755 53.2489 15.5303C53.2489 14.3056 54.2428 13.3117 55.4675 13.3117C56.6922 13.3117 57.6861 14.3056 57.6861 15.5303C57.6861 16.755 56.6922 17.7489 55.4675 17.7489Z"
                                        fill="#009DD2" />
                                    <path
                                        d="M55.4675 0C46.9036 0 39.9372 6.96644 39.9372 15.5303C39.9372 23.4995 52.3969 37.6143 53.8168 39.1984C54.2384 39.6643 54.8374 39.935 55.4675 39.935C56.0976 39.935 56.6966 39.6643 57.1181 39.1984C58.538 37.6143 70.9978 23.4995 70.9978 15.5303C70.9978 6.96644 64.0313 0 55.4675 0ZM55.4675 34.3308C50.622 28.5846 44.3744 19.7634 44.3744 15.5303C44.3744 9.41579 49.353 4.43722 55.4675 4.43722C61.582 4.43722 66.5605 9.41579 66.5605 15.5303C66.5605 19.759 60.3129 28.5846 55.4675 34.3308Z"
                                        fill="#009DD2" />
                                </svg>

                            </div>
                            <h2>
                                Location Manager
                            </h2>
                            <p>
                                {{$location_mananger->details}}
                            </p>
                        </a>
                        </div>
                        <div class="col-md-6 col-10 offset-md-0 offset-1 text-center text-sm-left  ">
                            <a href="{{ route('destination',['id'=>8,'url'=>'nepal']) }}" class="text-dark text-decoration-none">

                            <div class="icon">
                                <svg width="61" height="71" viewBox="0 0 61 71" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17.5255 11.2839C17.5255 8.14426 14.9709 5.58966 11.8307 5.58966C8.69113 5.58966 6.13654 8.14426 6.13654 11.2839C6.13654 14.424 8.69113 16.9781 11.8307 16.9781C14.9709 16.9786 17.5255 14.424 17.5255 11.2839ZM8.90997 11.2839C8.90997 9.67344 10.2203 8.3631 11.8307 8.3631C13.4417 8.3631 14.7521 9.67344 14.7521 11.2839C14.7521 12.8943 13.4417 14.2047 11.8307 14.2047C10.2203 14.2052 8.90997 12.8943 8.90997 11.2839Z"
                                        fill="#009DD2" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M50.1031 36.3326C46.5296 36.3326 43.4924 37.2231 41.6566 38.638L36.6834 37.5308C35.9375 37.3645 35.1953 37.8352 35.0285 38.5827C34.8622 39.3303 35.3329 40.0713 36.081 40.2376L39.8929 41.0864C39.8219 41.3632 39.784 41.6482 39.784 41.939C39.784 43.823 41.3262 45.4329 43.7963 46.4383L41.5759 48.7226C41.0423 49.2719 41.0548 50.1499 41.604 50.6835C41.8733 50.9457 42.2221 51.0757 42.5704 51.0757C42.9317 51.0757 43.293 50.9354 43.565 50.6559L46.8454 47.2806C47.8616 47.4523 48.9542 47.5455 50.1031 47.5455C55.9858 47.5455 60.4223 45.135 60.4223 41.939C60.4223 38.7431 55.9858 36.3326 50.1031 36.3326ZM50.1031 44.7721C45.567 44.7721 42.5574 43.0668 42.5574 41.939C42.5574 41.7029 42.6907 41.4418 42.9404 41.1763C42.9832 41.139 43.0238 41.0994 43.0612 41.0561C44.0964 40.0892 46.6585 39.106 50.1031 39.106C54.6392 39.106 57.6488 40.8112 57.6488 41.939C57.6488 43.0668 54.6392 44.7721 50.1031 44.7721Z"
                                        fill="#009DD2" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M33.6131 60.8948L35.8335 58.61C36.367 58.0607 36.3546 57.1832 35.8053 56.6491C35.2566 56.1155 34.3785 56.128 33.8444 56.6772L30.5639 60.052C29.5477 59.8802 28.4551 59.7871 27.3062 59.7871C21.4235 59.7871 16.9871 62.1976 16.9871 65.3935C16.9871 68.5895 21.4235 71 27.3062 71C33.1889 71 37.6254 68.5895 37.6254 65.3935C37.6254 63.5095 36.0832 61.8997 33.6131 60.8948ZM27.3062 68.2266C22.7701 68.2266 19.7605 66.5213 19.7605 65.3935C19.7605 64.2657 22.7701 62.5605 27.3062 62.5605C31.8423 62.5605 34.8519 64.2657 34.8519 65.3935C34.8519 66.5213 31.8423 68.2266 27.3062 68.2266Z"
                                        fill="#009DD2" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M25.2505 37.826C25.3523 37.8488 25.4531 37.8596 25.5533 37.8596C26.1887 37.8596 26.7618 37.4197 26.9054 36.774C27.0717 36.0265 26.6009 35.2855 25.8534 35.1192L22.041 34.2698C22.1125 33.993 22.1499 33.7086 22.1499 33.4172C22.1499 30.8187 19.2595 29.0637 15.9487 28.2744L22.1364 15.8812C22.1461 15.8611 22.1559 15.8406 22.1651 15.82C22.795 14.3861 23.1146 12.8602 23.1146 11.2839C23.1146 5.06207 18.0531 0 11.8308 0C5.60894 0 0.546875 5.06207 0.546875 11.2839C0.546875 12.8596 0.86647 14.3856 1.49699 15.82C1.50566 15.8406 1.51541 15.8611 1.5257 15.8812L7.71935 28.2869C4.39989 29.0951 1.51162 30.8507 1.51162 33.4178C1.51162 36.6137 5.94804 39.0237 11.8308 39.0237C15.4043 39.0237 18.442 38.1331 20.2778 36.7188L25.2505 37.826ZM3.32031 11.2839C3.32031 6.59125 7.13812 2.77344 11.8308 2.77344C16.5234 2.77344 20.3412 6.59125 20.3412 11.2839C20.3412 12.4626 20.105 13.6028 19.6392 14.6738L11.8308 30.3133L4.02288 14.6738C3.55649 13.6023 3.32031 12.4621 3.32031 11.2839ZM4.28506 33.4178C4.28506 32.6892 6.09104 31.4227 8.99611 30.8442L10.5903 34.0369C10.8248 34.5071 11.3053 34.8039 11.8308 34.8039C12.3562 34.8039 12.8367 34.5071 13.0718 34.0369L14.6697 30.8355C17.6078 31.3929 19.3765 32.6561 19.3765 33.4172C19.3765 33.6539 19.2421 33.9161 18.9913 34.1826C18.9491 34.22 18.909 34.259 18.8716 34.3012C17.8364 35.2676 15.2743 36.2502 11.8308 36.2502C7.29467 36.2502 4.28506 34.5455 4.28506 33.4178Z"
                                        fill="#009DD2" />
                                </svg>

                            </div>
                            <h2>
                                Travel Arrangement
                            </h2>
                            <p>{{$travel_arrangement->details}}</p>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-10 offset-md-0 offset-1 text-center text-sm-left  ">
                            <a href="{{ route('destination',['id'=>8,'url'=>'nepal']) }}" class="text-dark text-decoration-none">

                            <div class="icon">
                                <svg width="71" height="71" viewBox="0 0 71 71" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M55.2768 62.2903C54.8444 61.9121 54.1876 61.9564 53.8093 62.3886L49.5214 67.2926C49.0672 67.8125 48.4368 68.1116 47.7465 68.1349C47.0543 68.1596 46.407 67.9025 45.9187 67.4148L42.614 64.1115V61.927C42.614 61.3526 42.1485 60.8869 41.574 60.8869C40.9994 60.8869 40.5339 61.3526 40.5339 61.927V64.5369V64.5476V69.96C40.5339 70.5343 40.9994 71 41.574 71C42.1485 71 42.614 70.5343 42.614 69.96V67.0526L44.4484 68.8861C45.2995 69.7364 46.4642 70.2164 47.6646 70.2164C48.9689 70.2164 50.2296 69.6441 51.0876 68.6616L55.3753 63.7579C55.7534 63.3253 55.7092 62.6683 55.2768 62.2903ZM12.0836 60.8869C11.5091 60.8869 11.0436 61.3526 11.0436 61.927V69.96C11.0436 70.5343 11.5091 71 12.0836 71C12.6581 71 13.1236 70.5343 13.1236 69.96V61.927C13.1236 61.3526 12.658 60.8869 12.0836 60.8869ZM69.6828 16.4884L62.7116 10.8242C62.2294 10.4326 61.5817 10.3549 61.0206 10.622C60.4597 10.8889 60.1112 11.4407 60.1112 12.062V25.4301C60.1112 25.432 60.1116 25.4338 60.1116 25.4357V42.3046L49.6397 54.2479L46.3222 48.0541C44.7389 45.0958 41.8164 43.0051 38.504 42.4612C37.1381 42.237 33.9499 41.7157 32.801 41.5267C31.9424 41.3854 31.3189 40.6518 31.3189 39.7822V38.5531C32.1293 38.0421 32.8902 37.44 33.5841 36.7455C36.0224 34.3058 37.3651 31.0632 37.3651 27.6151V27.163H37.7659C39.8237 27.1725 41.5738 25.4226 41.5738 23.3551C41.5738 22.2582 41.0921 21.2387 40.3108 20.5304C40.9154 19.668 41.0868 18.5347 40.7428 17.5398C40.4457 16.681 39.7991 15.9769 38.9687 15.6084C38.8596 15.5598 38.7494 15.5132 38.6395 15.4658V7.97918C38.6395 3.57954 35.06 0 30.6604 0H18.2506C13.851 0 10.2714 3.57954 10.2714 7.97918V15.4658C10.1619 15.5132 10.052 15.5598 9.94291 15.6082C9.11241 15.9769 8.46578 16.681 8.16874 17.5399C7.82026 18.5478 7.99138 19.6635 8.59877 20.5316C7.81818 21.2394 7.33713 22.2582 7.33713 23.3551C7.33713 25.417 9.0672 27.1748 11.1464 27.163H11.5472V27.6151C11.5472 32.2144 13.964 36.2591 17.5934 38.5472V39.9944C17.5934 40.7934 17.0511 41.4855 16.2752 41.6776L7.63874 43.8076C3.44724 44.8414 0.52002 48.5783 0.52002 52.895V69.96C0.52002 70.5343 0.985541 71 1.56006 71C2.13458 71 2.6001 70.5343 2.6001 69.96V52.895C2.6001 49.5376 4.87681 46.6312 8.13671 45.8272L14.8265 44.1774C16.8948 47.4943 20.5132 49.5231 24.4558 49.5231C28.5466 49.5231 32.2394 47.3779 34.2701 43.8752L38.1674 44.5138C40.8452 44.9535 43.2082 46.6439 44.4884 49.0359L47.8453 55.303C48.1577 55.8877 48.7378 56.2819 49.3967 56.3576C50.0568 56.4334 50.7116 56.1804 51.149 55.6815L58.2719 47.5578L62.7962 52.0838C62.8005 52.0879 62.805 52.0915 62.8093 52.0957L57.0095 58.7288C56.6314 59.1612 56.6756 59.8182 57.108 60.1964C57.5388 60.5731 58.1961 60.5318 58.5756 60.098L68.1346 49.1657C70.0911 46.9464 69.7481 43.3972 67.4572 41.5659C65.9182 40.3356 63.9029 40.1011 62.1916 40.7909V25.9247L69.6828 19.8381C70.1893 19.4264 70.48 18.816 70.48 18.1631C70.48 17.5104 70.1893 16.8999 69.6828 16.4884ZM39.4937 23.3551C39.4937 24.2925 38.704 25.0877 37.7659 25.083H37.3651V21.9268C37.7599 21.9551 38.1527 21.9118 38.5268 21.8031C39.1078 22.0897 39.4937 22.6918 39.4937 23.3551ZM11.5472 25.083H11.1464C10.2029 25.0878 9.41721 24.2938 9.41721 23.3551C9.41721 22.6924 9.80216 22.0914 10.3817 21.8052C10.7559 21.9139 11.1549 21.9581 11.5471 21.9293V25.083H11.5472ZM11.8047 19.7538C11.2088 20.018 10.5187 19.7595 10.2086 19.1816C9.8819 18.5729 10.1559 17.7897 10.7869 17.5095C16.5026 14.9724 22.8007 14.0771 29.002 14.921C29.5701 14.9976 30.0953 14.5998 30.1726 14.0307C30.2502 13.4616 29.8515 12.9374 29.2822 12.8599C23.559 12.0811 17.7571 12.6985 12.3514 14.6429V7.97918C12.3514 4.72635 14.9976 2.08008 18.2505 2.08008H30.6604C33.9132 2.08008 36.5595 4.72635 36.5595 7.97918V14.6425C35.7633 14.3563 34.9575 14.0979 34.1471 13.87C33.5948 13.7146 33.0199 14.0365 32.8643 14.5894C32.7087 15.1423 33.0308 15.7167 33.5837 15.8722C35.1286 16.307 36.6564 16.8578 38.1246 17.5094C38.7503 17.7872 39.026 18.5711 38.7051 19.1773C38.4006 19.7526 37.7171 20.0241 37.1067 19.7537C29.3455 16.3168 19.6692 16.267 11.8047 19.7538ZM13.6273 27.6151V21.2452C20.5667 18.4698 28.3462 18.47 35.2852 21.2456V27.6151C35.2852 30.5078 34.1586 33.2283 32.1131 35.2751C30.0842 37.3054 27.3508 38.448 24.4563 38.448C18.4851 38.4482 13.6273 33.5884 13.6273 27.6151ZM24.4558 47.443C21.4657 47.443 18.7042 46.0131 16.9719 43.6391C18.6676 43.1124 19.8435 41.4163 19.6734 39.609C21.1533 40.2017 22.7673 40.5282 24.4562 40.5282C26.1215 40.5282 27.7373 40.2122 29.2388 39.6134C29.1323 41.4052 30.3669 43.0235 32.0521 43.4876C30.3324 45.9567 27.5321 47.443 24.4558 47.443ZM66.158 43.19C67.5518 44.3041 67.7574 46.4506 66.5686 47.7965L64.1812 50.5268L59.6464 45.9904L61.759 43.581C62.888 42.2923 64.8206 42.1212 66.158 43.19ZM68.3711 18.2237L62.1916 23.2446L62.1911 13.0816L68.3709 18.1028C68.4024 18.1223 68.4032 18.2035 68.3711 18.2237ZM30.1822 26.8273C30.7567 26.8273 31.2222 26.3617 31.2222 25.7873V23.4959C31.2222 22.9215 30.7567 22.4558 30.1822 22.4558C29.6077 22.4558 29.1422 22.9215 29.1422 23.4959V25.7873C29.1422 26.3618 29.6078 26.8273 30.1822 26.8273ZM18.7293 22.456C18.1548 22.456 17.6893 22.9216 17.6893 23.496V25.7874C17.6893 26.3618 18.1548 26.8275 18.7293 26.8275C19.3038 26.8275 19.7693 26.3618 19.7693 25.7874V23.496C19.7693 22.9215 19.3037 22.456 18.7293 22.456ZM27.6581 31.9995C27.3819 31.4961 26.7499 31.3117 26.246 31.5879C25.8555 31.8022 25.2193 32.0541 24.4168 32.0473C23.6465 32.0393 23.0392 31.7932 22.6655 31.5879C22.1614 31.3116 21.5296 31.4957 21.2533 31.9994C20.9769 32.503 21.1612 33.1351 21.6647 33.4116C22.2471 33.7312 23.1936 34.1148 24.395 34.1274C25.6088 34.14 26.6465 33.7408 27.2465 33.4117C27.7502 33.1354 27.9343 32.5032 27.6581 31.9995Z"
                                        fill="#009DD2" />
                                </svg>

                            </div>
                            <h2 class="">
                                <div class="pt-2"></div>
                                Private Guides
                            </h2>
                            <p>{{$private_guide->details}}</p>
                            </a>
                        </div>
                        <div class="col-md-6 col-10 offset-md-0 offset-1 text-center text-sm-left  ">
                            <a href="{{ route('destination',['id'=>8,'url'=>'nepal']) }}" class="text-dark text-decoration-none">

                            <div class="icon">
                                <svg width="71" height="79" viewBox="0 0 71 79" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M70.2199 21.6645V21.5659C69.2801 19.7572 67.552 18.5897 65.642 18.5075C65.4752 18.4911 65.2933 18.4911 65.1266 18.5075C66.218 15.0052 64.4747 11.2233 61.2611 10.0394C60.2 9.64479 59.0479 9.57902 57.9565 9.8421C57.5017 9.94076 57.0469 10.1216 56.6377 10.3354C56.4254 7.01392 54.3942 4.15286 51.4837 3.10052C49.1795 2.24548 46.6329 2.673 44.6622 4.23507C44.1468 4.6297 43.6921 5.10655 43.2828 5.63272C41.4637 0.946495 36.4765 -1.25685 32.1562 0.732737C30.1098 1.66998 28.4878 3.42937 27.6389 5.63272C27.2296 5.10655 26.7749 4.64615 26.2595 4.23507C22.8791 1.58777 18.1495 2.40991 15.709 6.07668C15.4513 6.47131 15.2239 6.88238 15.0268 7.3099C14.6024 8.26358 14.3447 9.28304 14.2841 10.3354C13.8596 10.1052 13.42 9.94076 12.9652 9.8421C9.64547 9.0364 6.35602 11.3055 5.61324 14.9065C5.3707 16.0904 5.43133 17.3401 5.79515 18.4911C5.6284 18.4746 5.44649 18.4746 5.27975 18.4911C3.40006 18.5897 1.68712 19.7407 0.762434 21.5166V21.5988C-0.783761 24.4598 0.0954478 28.1266 2.73307 29.8038C3.47585 30.2806 4.30959 30.5602 5.17364 30.6095H5.47681C6.73499 30.6095 7.96285 30.1491 8.94817 29.2941L22.6365 36.7262L26.4565 47.4141H23.3187C21.3026 47.4141 19.6806 49.1735 19.6806 51.3604C19.6806 53.5473 21.3026 55.3067 23.3187 55.3067H29.3822V60.7986L26.2595 66.4386C25.6683 67.4909 25.5773 68.7734 25.9866 69.9244L28.412 76.5016C29.1548 78.5241 31.2619 79.5271 33.1264 78.7214C34.0359 78.3268 34.7484 77.5704 35.1425 76.6003C35.5063 75.6301 35.5063 74.5449 35.1425 73.5912L33.3841 68.8228L34.9909 65.9288L36.2036 69.8751C36.5674 71.0919 37.4467 72.0291 38.5684 72.4073L44.7532 74.66C46.1629 75.1697 47.7243 74.6929 48.6793 73.4597C48.9825 73.0815 49.2099 72.6211 49.3614 72.1442C49.9981 70.0724 48.9825 67.8362 47.0725 67.1456L42.0094 65.304C41.3728 65.0738 40.6906 65.452 40.4784 66.1426C40.2662 66.8332 40.6148 67.5731 41.2515 67.8033L46.36 69.6614C46.9967 69.8916 47.3302 70.6315 47.118 71.3221C47.0725 71.4865 46.9967 71.6345 46.9057 71.7496C46.5874 72.1607 46.072 72.3087 45.6021 72.1442L39.4021 69.8916C39.0383 69.76 38.7655 69.4476 38.6442 69.0694L36.5371 62.3114C36.3704 61.7523 35.8701 61.3906 35.3244 61.4235C34.809 61.4235 34.3543 61.7852 34.1875 62.3114C34.1572 62.3936 34.1269 62.4758 34.0814 62.558L31.0497 68.0499C30.8526 68.4117 30.8223 68.8392 30.9587 69.2174L32.9293 74.5778C33.1719 75.2519 32.8687 76.0248 32.2472 76.2878C31.6257 76.5509 30.9132 76.2221 30.6707 75.5479L28.2453 68.9708C28.1089 68.5926 28.1392 68.1651 28.3362 67.8198L31.6408 61.9168C31.747 61.7194 31.8076 61.4892 31.8076 61.2426V59.2859H39.0838V61.9168C39.0838 62.6402 39.6295 63.2322 40.2965 63.2322C40.9635 63.2322 41.5092 62.6402 41.5092 61.9168V55.3396H47.5727C49.5888 55.3396 51.2108 53.5802 51.2108 51.3933C51.2108 49.2064 49.5888 47.447 47.5727 47.447H44.4803L48.2549 36.7098L61.9432 29.2776C62.9285 30.1326 64.1564 30.593 65.4146 30.593H65.7632C68.8102 30.4122 71.1446 27.584 70.993 24.279C70.9475 23.3417 70.705 22.4374 70.2654 21.6152L70.2199 21.6645ZM53.0753 22.98L58.9873 26.1699L60.0787 27.3702L49.5282 33.0924L53.0753 22.98ZM47.5727 31.3494L44.5106 21.385L50.7712 22.2236L47.5727 31.3494ZM58.487 12.4894C60.5031 11.9961 62.5193 13.3609 62.974 15.5478C63.2166 16.6823 62.9892 17.8827 62.3525 18.8199L60.7305 21.2864L59.3359 23.3911L53.9242 20.4807L55.7433 15.0545C56.1829 13.7391 57.2289 12.7689 58.487 12.4894ZM46.072 6.43842C48.3761 4.64615 51.5898 5.20521 53.2421 7.70453C54.2274 9.20083 54.4851 11.1246 53.8939 12.8676L53.4543 14.183L52.09 18.228L51.5898 19.7078L43.9346 18.6719V10.9767C43.9194 9.16794 44.7229 7.49077 46.072 6.43842ZM11.9041 26.1699L17.816 22.98L21.3632 33.0924L10.8127 27.3702L11.9041 26.1699ZM20.1505 22.2236L26.4111 21.385L23.3187 31.3494L20.1505 22.2236ZM17.2552 8.54311C17.8464 7.19479 18.9378 6.15889 20.2566 5.68205C20.772 5.48473 21.3026 5.36963 21.8483 5.35319C24.683 5.38608 26.9719 7.8854 26.9719 10.9767V18.6719L19.3016 19.7078L18.8014 18.228L17.4371 14.183L16.9975 12.8676C16.5276 11.4371 16.6185 9.87499 17.2552 8.54311ZM9.02396 13.5746C9.72127 12.8183 10.6763 12.3908 11.6616 12.3908C11.9344 12.3908 12.2225 12.4236 12.4802 12.4894C13.7383 12.8018 14.7691 13.7884 15.1936 15.1203L17.0126 20.5464L11.6464 23.4568L10.9036 22.3387L8.5692 18.8199C7.50809 17.1921 7.67483 14.9723 8.96333 13.5746H9.02396ZM5.38586 28.0444C3.67292 27.9622 2.36926 26.3837 2.44506 24.5256C2.47537 23.983 2.6118 23.4733 2.85434 22.9964L1.7326 22.3058L2.83919 22.8649C3.33942 21.829 4.29443 21.1713 5.3707 21.1219C6.43181 21.0397 7.46261 21.5823 8.06896 22.536L9.61516 24.8709L7.70515 27.0085C7.08364 27.6991 6.21959 28.0444 5.32522 27.9786L5.38586 28.0444ZM23.3187 52.7087C22.6517 52.7087 22.106 52.1168 22.106 51.3933C22.106 50.6698 22.6517 50.0779 23.3187 50.0779H31.0497L29.837 52.7087H23.3187ZM31.8076 43.5007C31.8076 41.3138 33.4296 39.5544 35.4457 39.5544C37.4618 39.5544 39.0838 41.3138 39.0838 43.5007C39.0838 45.6876 37.4618 47.447 35.4457 47.447C33.4296 47.447 31.8076 45.6876 31.8076 43.5007ZM31.8076 56.655V54.3366L33.7782 50.0779H37.1132L39.0838 54.3366V56.655H31.8076ZM48.7854 51.3933C48.7854 52.1168 48.2397 52.7087 47.5727 52.7087H41.0544L39.8417 50.0779H47.5727C48.2397 50.0779 48.7854 50.6698 48.7854 51.3933ZM40.2965 47.447C41.0848 46.3124 41.5092 44.9312 41.5092 43.5007C41.5092 39.8668 38.7958 36.9236 35.4457 36.9236C32.0956 36.9236 29.3822 39.8668 29.3822 43.5007C29.3822 44.9312 29.8066 46.3124 30.5949 47.447H29.0032L24.7133 35.2299L29.0487 21.1384H37.8711C38.5381 21.1384 39.0838 20.5464 39.0838 19.8229C39.0838 19.0995 38.5381 18.5075 37.8711 18.5075H29.3822V9.29949C29.3822 5.66561 32.0956 2.72233 35.4457 2.72233C38.7958 2.72233 41.5092 5.66561 41.5092 9.29949V19.8229C41.5092 19.9709 41.5395 20.1025 41.585 20.234L46.1933 35.2135L41.8882 47.447H40.2965ZM67.84 26.7618C67.2791 27.5018 66.4605 27.9622 65.5813 28.0115C64.687 28.0937 63.7926 27.732 63.1559 27.0414L61.2459 24.9531L62.7921 22.6182C63.7926 21.1055 65.7481 20.7602 67.1427 21.8454C67.5065 22.1249 67.7945 22.4867 68.0219 22.8978V22.9964C68.6737 24.1474 68.6131 25.6437 67.84 26.7618Z"
                                        fill="#009DD2" />
                                </svg>

                            </div>
                            <h2 class="">
                                Activities
                            </h2>
                                                       <p>{{$activity->details}}</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="right-artile mt-md-5 mt-4">
                    <h2>
                        Start your adventure with Us
                    </h2>
                    <p>
                       {{$start_adventure->details}}
                    </p>
                        <a href="{{ route('destination',['id'=>8,'url'=>'nepal']) }}" class="text-white text-decoration-none btn btn-primary">
                    Start Adventure
                        </a>
                </div>
            </div>
        </div>
    </div>
</section>