@extends('layoutfront')
@section('title')
    <title>{{ $seoSetting->seo_title }}</title>
@endsection
@section('meta')
    <meta name="description" content="{{ $seoSetting->seo_description }}">
@endsection

@section('public-content')


<div id="hero" class="w-full relative mt-16 flex flex-col text-white bg-black min-h-[75vh]">
    <div class="z-10 space-y-4 text-center py-8 aos-init aos-animate" data-aos="fade-up">
        <p class="text-6xl font-medium">Welcome to J-Rich</p>
        <p class="text-6xl font-medium">Tech</p>
        <p class="text-2xl font-light">Where opportunity meets innovation</p>
    </div>

    <div class="z-10 my-8 w-full flex justify-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        <a class="btn btn-primary inline px-8 p-3" href="./register">Get Started</a>
    </div>

    <div class="z-10 text-center mb-12 tracking-wide opacity-80 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <p>Dive into the world of digital assets trading</p>
    </div>

    <img src="./assets/images/herobg.png" alt="" class="absolute inset-0 z-0 opacity-30 w-full object-cover h-full">
</div>
        <!-- How it works -->
<div class="w-full p-5 md:p-24 space-y-16 relative" id="howto">
    <div class="space-y-4 text-center">
        <p class="font-semibold tracking-tighter text-4xl md:text-6xl">
            The safest way to Buy, Sell, Save
        </p>
        <p class="font-semibold tracking-tighter text-4xl md:text-6xl">
            And Convert Your Assets.
        </p>
    </div>

    <div class="flex items-center flex-col md:flex-row">
        <div class="md:w-1/2 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
            <img src="./assets/images/gift_card_default.png" class="max-h-[4ovh]">
        </div>

        <div class="w-full md:w-1/2 py-8 px-4 md:px-12 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <p class="text-info font-medium mb-8 text-2xl">
                How to get started
            </p>

            <div class="space-y-8">
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" class="w-full p-4 bg-black rounded-full flex items-center space-x-4 aos-init aos-animate">
                    <div class="w-12 h-12 font-bold text-xl grid place-content-center rounded-full bg-info text-black">
                        01
                    </div>
                    <p class="text-2xl text-info">Sign Up</p>
                </div>
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" class="w-full p-4 bg-black rounded-full flex items-center space-x-4 aos-init aos-animate">
                    <div class="w-12 h-12 font-bold text-xl grid place-content-center rounded-full bg-info text-black">
                        02
                    </div>
                    <p class="text-2xl text-info">Verify account</p>
                </div>
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" class="w-full p-4 bg-black rounded-full flex items-center space-x-4 aos-init aos-animate">
                    <div class="w-12 h-12 font-bold text-xl grid place-content-center rounded-full bg-info text-black">
                        03
                    </div>
                    <p class="text-2xl text-info">Select asset and trade</p>
                </div>
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" class="w-full p-4 bg-black rounded-full flex items-center space-x-4 aos-init aos-animate">
                    <div class="w-12 h-12 font-bold text-xl grid place-content-center rounded-full bg-info text-black">
                        04
                    </div>
                    <p class="text-2xl text-info">Receive payment</p>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute -top-24 left-4 md:-top-32 md:left-16">
        <img src="./assets/images/btc_3d.png" class="h-16 md:h-32 floating">
    </div>
</div>
        <div class="relative w-full p-5 py-8 md:p-24 space-y-16 bg-black text-white" id="specialty">
    <div class="space-y-8 text-center">
        <p class="font-semibold tracking-tighter text-4xl md:text-6xl">
            What Sets Us Apart
        </p>
        <p class="font-light tracking-tighster opacity-80 md:px-24">
            At J-Rich Tech, we take so much pride in our uniqueness. There are
            a thousand and one reasons why our users keep using our platform,
            and have so many good things to say about us.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <div data-aos="fade-up" data-aos-duration="1000" class="bg-black ring-[0.5px] ring-primary shadosw-lg shadow-primary/30 p-8 px-12 text-center min-h-[300px] space-y-12 w-full rounded-2xl flex flex-col items-center aos-init">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_48_46)">
                    <path d="M40 80C18 80 0 62 0 40C0 18 18 0 40 0C62 0 80 18 80 40C80 62 62 80 40 80ZM40 8C22.4 8 8 22.4 8 40C8 57.6 22.4 72 40 72C57.6 72 72 57.6 72 40C72 22.4 57.6 8 40 8Z" fill="#FD9A35"></path>
                    <path d="M40 64.7999C26.2666 64.7999 15.2 53.5999 15.2 40C15.2 26.4 26.2666 15.2 40 15.2C53.7333 15.2 64.7999 26.4 64.7999 40C64.7999 53.5999 53.7333 64.7999 40 64.7999ZM40 23.2C30.6666 23.2 23.2 30.8 23.2 40C23.2 49.2 30.6666 56.7999 40 56.7999C49.3333 56.7999 56.7999 49.3333 56.7999 40C56.7999 30.6666 49.3333 23.2 40 23.2Z" fill="#FD9A35"></path>
                    <path d="M40 50.1334C34.4 50.1334 29.7334 45.6001 29.7334 39.8668C29.7334 34.1334 34.2667 29.6001 40 29.6001C45.6 29.6001 50.2667 34.1334 50.2667 39.8668C50.2667 45.6001 45.6 50.1334 40 50.1334ZM40 37.7334C38.8 37.7334 37.7334 38.6668 37.7334 40.0001C37.7334 41.3334 38.6667 42.2668 40 42.2668C41.3334 42.2668 42.2667 41.3334 42.2667 40.0001C42.2667 38.6668 41.2 37.7334 40 37.7334Z" fill="#FD9A35"></path>
                </g>
                <defs>
                    <clippath id="clip0_48_46">
                        <rect width="80" height="80" fill="white"></rect>
                    </clippath>
                </defs>
            </svg>

            <p class="text-sm">Lightning-fast transactions</p>

            <p class="text-sm">
                You will never miss an opportunity in a fast-paced market
            </p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" class="bg-black ring-[0.5px] ring-primary shadosw-lg shadow-primary/30 p-8 px-12 text-center min-h-[300px] space-y-12 w-full rounded-2xl flex flex-col items-center aos-init">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M39.3334 36.3333C31.7667 34.3667 29.3334 32.3333 29.3334 29.1667C29.3334 25.5333 32.7 23 38.3334 23C44.2667 23 46.4667 25.8333 46.6667 30H54.0334C53.8 24.2667 50.3 19 43.3334 17.3V10H33.3334V17.2C26.8667 18.6 21.6667 22.8 21.6667 29.2333C21.6667 36.9333 28.0334 40.7667 37.3334 43C45.6667 45 47.3334 47.9333 47.3334 51.0333C47.3334 53.3333 45.7 57 38.3334 57C31.4667 57 28.7667 53.9333 28.4 50H21.0667C21.4667 57.3 26.9334 61.4 33.3334 62.7667V70H43.3334V62.8333C49.8334 61.6 55 57.8333 55 51C55 41.5333 46.9 38.3 39.3334 36.3333Z" fill="#FD9A35"></path>
            </svg>

            <p class="text-sm">Low Fees</p>

            <p class="text-sm">
                With our low competitive fees, more of your profits stay in your
                pocket
            </p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" class="bg-black ring-[0.5px] ring-primary shadosw-lg shadow-primary/30 p-8 px-12 text-center min-h-[300px] space-y-12 w-full rounded-2xl flex flex-col items-center aos-init">
            <svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_321)">
                    <g clip-path="url(#clip1_1_321)">
                        <path d="M71.25 75C69.125 75 67.5 73.3723 67.5 71.2437V37.5626C67.5 21.0351 54 7.51252 37.5 7.51252C21 7.51252 7.5 21.0351 7.5 37.5626V71.2437C7.5 73.3723 5.875 75 3.75 75C1.625 75 0 73.3723 0 71.2437V37.5626C0 16.9032 16.875 0 37.5 0C58.125 0 75 16.9032 75 37.5626V71.2437C75 73.3723 73.25 75 71.25 75Z" fill="#FD9A35"></path>
                        <path d="M14.875 75H3.75C1.625 75 0 73.3723 0 71.2437V43.3222C0 41.1936 1.625 39.5659 3.75 39.5659H18.75C20.875 39.5659 22.5 41.1936 22.5 43.3222V67.4874C22.5 71.6193 19 75 14.875 75ZM7.5 67.4874H14.875C14.875 67.4874 15 67.4874 15 67.3622V47.0784H7.5V67.4874Z" fill="#FD9A35"></path>
                        <path d="M71.25 75H60.125C55.875 75 52.5 71.6193 52.5 67.3622V43.3222C52.5 41.1936 54.125 39.5659 56.25 39.5659H71.25C73.375 39.5659 75 41.1936 75 43.3222V71.3689C75 73.3723 73.25 75 71.25 75ZM60 47.0784V67.4874C60 67.4874 60 67.6127 60.125 67.6127H67.5V47.0784H60Z" fill="#FD9A35"></path>
                    </g>
                </g>
                <defs>
                    <clippath id="clip0_1_321">
                        <rect width="75" height="75" fill="white"></rect>
                    </clippath>
                    <clippath id="clip1_1_321">
                        <rect width="75" height="75" fill="white"></rect>
                    </clippath>
                </defs>
            </svg>

            <p class="text-sm">Responsive Customer Support</p>

            <p class="text-sm">
                Our team of dedicated customer support agents is always
                available
            </p>
        </div>
    </div>
</div>
        <div class="w-full p-5 py-16 md:p-24 md:px-32 space-y-8 md:space-y-16 relative" id="features">
    <div class="space-y-3 md:space-y-8 text-center">
        <p class="font-semibold tracking-tighter text-4xl md:text-6xl">
            Why Choose Us
        </p>
        <p class="font-light tracking-tighster opacity-80 md:px-24">
            Hundreds of thousands use J-Rich Tech
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-[360px] gap-y-12 md:gap-y-24 aos-init" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="w-full">
            <div class="flit space-x-4 md:space-x-8">
                <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_100)">
                        <path d="M31.9583 29.5208C25.8104 27.9229 23.8333 26.2708 23.8333 23.6979C23.8333 20.7458 26.5688 18.6875 31.1458 18.6875C35.9667 18.6875 37.7542 20.9896 37.9167 24.375H43.9021C43.7125 19.7167 40.8688 15.4375 35.2083 14.0563V8.125H27.0833V13.975C21.8292 15.1125 17.6042 18.525 17.6042 23.7521C17.6042 30.0083 22.7771 33.1229 30.3333 34.9375C37.1042 36.5625 38.4583 38.9458 38.4583 41.4646C38.4583 43.3333 37.1313 46.3125 31.1458 46.3125C25.5667 46.3125 23.3729 43.8208 23.075 40.625H17.1167C17.4417 46.5562 21.8833 49.8875 27.0833 50.9979V56.875H35.2083V51.0521C40.4896 50.05 44.6875 46.9896 44.6875 41.4375C44.6875 33.7458 38.1063 31.1187 31.9583 29.5208Z" fill="#FD9A35"></path>
                    </g>
                    <defs>
                        <clippath id="clip0_1_100">
                            <rect width="65" height="65" fill="white"></rect>
                        </clippath>
                    </defs>
                </svg>
                <div class="">
                    <p class="font-medium text-black text-base md:text-2xl">
                        Diverse Asset Portfolio
                    </p>
                    <p class="text-gray-600 text-xs md:text-sm">
                        You get access to a range of digital assets, allowing
                        you to diversify and maximize your portfolio.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="flit space-x-4 md:space-x-8">
                <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M48.75 21.6666H46.0416V16.2499C46.0416 8.77492 39.975 2.70825 32.5 2.70825C25.025 2.70825 18.9583 8.77492 18.9583 16.2499V21.6666H16.25C13.2708 21.6666 10.8333 24.1041 10.8333 27.0833V54.1666C10.8333 57.1458 13.2708 59.5833 16.25 59.5833H48.75C51.7291 59.5833 54.1666 57.1458 54.1666 54.1666V27.0833C54.1666 24.1041 51.7291 21.6666 48.75 21.6666ZM24.375 16.2499C24.375 11.7541 28.0041 8.12492 32.5 8.12492C36.9958 8.12492 40.625 11.7541 40.625 16.2499V21.6666H24.375V16.2499ZM48.75 54.1666H16.25V27.0833H48.75V54.1666ZM32.5 46.0416C35.4791 46.0416 37.9166 43.6041 37.9166 40.6249C37.9166 37.6458 35.4791 35.2083 32.5 35.2083C29.5208 35.2083 27.0833 37.6458 27.0833 40.6249C27.0833 43.6041 29.5208 46.0416 32.5 46.0416Z" fill="#FD9A35"></path>
                </svg>

                <div class="">
                    <p class="font-medium text-black text-base md:text-2xl">
                        Safe And Secure Trading Platform
                    </p>
                    <p class="text-gray-600 text-xs md:text-sm">
                        We employ state-of-the-art security measures to keep
                        your assets safe and secure at all times.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="flit space-x-4 md:space-x-8">
                <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_124)">
                        <path d="M23.4632 44.5159C22.6688 44.5159 21.9736 44.218 21.3778 43.6221C20.1861 42.4305 20.1861 40.5437 21.3778 39.4513L52.3611 8.46797C53.5528 7.2763 55.4396 7.2763 56.532 8.46797C57.7236 9.65964 57.7236 11.5464 56.532 12.6388L25.6479 43.6221C25.0521 44.218 24.2577 44.5159 23.4632 44.5159Z" fill="#FD9A35"></path>
                        <path d="M32.2021 62.2915C31.0104 62.2915 30.0174 61.5963 29.5208 60.6033L21.2785 43.7213L4.39652 35.479C3.40347 34.9824 2.70833 33.9894 2.70833 32.7977C2.70833 31.7054 3.30416 30.613 4.29722 30.1165L57.9222 3.00605C59.1139 2.41022 60.5042 2.60883 61.3979 3.60189C62.2917 4.49564 62.4903 5.88592 61.9937 7.07758L34.8833 60.7026C34.3868 61.6956 33.3937 62.2915 32.2021 62.2915ZM12.341 32.7977L24.7542 38.8554C25.35 39.1533 25.8465 39.6498 26.1444 40.2456L32.2021 52.6588L52.5597 12.4401L12.341 32.7977Z" fill="#FD9A35"></path>
                    </g>
                    <defs>
                        <clippath id="clip0_1_124">
                            <rect width="59.5833" height="59.5833" fill="white" transform="translate(2.70833 2.70825)"></rect>
                        </clippath>
                    </defs>
                </svg>
                <div class="">
                    <p class="font-medium text-black text-base md:text-2xl">
                        Fast And Easy Trading
                    </p>
                    <p class="text-gray-600 text-xs md:text-sm">
                        Our user interface is easy to use for both seasoned
                        traders and beginners.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="flit space-x-4 md:space-x-8">
                <svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_146)">
                        <g clip-path="url(#clip1_1_146)">
                            <path d="M33.5869 61.6305C33.0434 61.6305 32.6087 61.5218 32.0652 61.3045C21.3043 55.6523 14.5652 44.674 14.5652 32.5001C14.5652 20.3262 21.3043 9.34793 32.0652 3.69576C33.6956 2.82619 35.6521 3.47836 36.413 5.1088C37.2826 6.73923 36.6304 8.69576 35 9.45662C26.5217 14.0218 21.1956 22.8262 21.1956 32.5001C21.1956 42.174 26.5217 50.9784 35.1087 55.5436C36.7391 56.4131 37.2826 58.3697 36.5217 59.8914C35.8695 61.0871 34.7826 61.6305 33.5869 61.6305Z" fill="#FD9A35"></path>
                            <path d="M31.4131 61.6304C30.2174 61.6304 29.1305 60.9783 28.4783 59.8913C27.6087 58.2609 28.2609 56.3044 29.8913 55.5435C38.4783 51.087 43.8044 42.1739 43.8044 32.5C43.8044 22.8261 38.4783 14.0217 29.8913 9.45653C28.2609 8.58696 27.7174 6.63044 28.4783 5.1087C29.3479 3.47827 31.3044 2.93479 32.8261 3.69566C43.587 9.34783 50.3261 20.3261 50.3261 32.5C50.3261 44.6739 43.587 55.6522 32.8261 61.3044C32.5 61.5217 31.9565 61.6304 31.4131 61.6304Z" fill="#FD9A35"></path>
                            <path d="M61.7391 35.761H3.26087C1.41304 35.761 0 34.348 0 32.5001C0 30.6523 1.41304 29.2393 3.26087 29.2393H61.7391C63.587 29.2393 65 30.6523 65 32.5001C65 34.348 63.587 35.761 61.7391 35.761Z" fill="#FD9A35"></path>
                            <path d="M32.5 65C14.5652 65 0 50.4348 0 32.5C0 14.5652 14.5652 0 32.5 0C50.4348 0 65 14.5652 65 32.5C65 50.4348 50.4348 65 32.5 65ZM32.5 6.52174C18.1522 6.52174 6.52174 18.1522 6.52174 32.5C6.52174 46.8478 18.1522 58.4783 32.5 58.4783C46.8478 58.4783 58.4783 46.8478 58.4783 32.5C58.4783 18.1522 46.8478 6.52174 32.5 6.52174Z" fill="#FD9A35"></path>
                        </g>
                    </g>
                    <defs>
                        <clippath id="clip0_1_146">
                            <rect width="65" height="65" fill="white"></rect>
                        </clippath>
                        <clippath id="clip1_1_146">
                            <rect width="65" height="65" fill="white"></rect>
                        </clippath>
                    </defs>
                </svg>
                <div class="">
                    <p class="font-medium text-black text-base md:text-2xl">
                        Global Reach Enabled
                    </p>
                    <p class="text-gray-600 text-xs md:text-sm">
                        No matter where you are in the world, you can trade
                        easily with J-Rich Tech.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute -top-16 left-8 md:-top-28 md:left-16 z-10">
        <img src="./assets/images/btc_3d.png" class="h-16  md:h-32 floating">
    </div>
</div>
        <div class="relative w-full p-5 py-8 md:p-24 space-y-16 bg-black text-white" id="community">
    <div class="space-y-8 text-center aos-init" data-aos="fade-down" data-aos-duration="1800">
        <p class="font-medisum text-4xl md:text-6xl md:px-24 leading-snug md:tracking-tight">
            We're a community driven space where innovation meets opportunity
        </p>
    </div>
</div>
        <div class="w-full p-5 py-16 md:p-24 md:px-32 space-y-8 md:space-y-16 relative" id="testimonials">
    <div class="space-y-6 text-center aos-init" data-aos="zoom-in-up" data-aos-duration="1000">
        <p class="font-semibold tracking-tighter text-6xl">
            500k+ Users Worldwide
        </p>
        <p class="font-light tracking-tighster opacity-80 px-24">
            See what our users have to say about us.
        </p>
    </div>
    <div class="absolute -bottom-12 right-16 z-10">
        <img src="./assets/images/btc_3d.png" class="h-24 floating">
    </div>

    <div class="relative grid grid-cols-1 md:grid-cols-3 gap-16 min-h-[45vh] bordser">
        <div data-aos="fade-up" data-aos-duration="1000" class="w-full h-full space-y-16 flex flex-col items-center p-8 border border-primary rounded-2xl shadow aos-init">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-info">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46"></path>
            </svg>

            <p class="text-xs text-gray-500 text-center">
                I've been trading for several years, and I can say that J-Rich has redefined my trading experience.
            </p>

            <div class="space-x-2 flit flex-col">
                <img class="w-12 h-12 rounded-full" src="./assets/images/testimonial1.png">
                <p class="font-medium">- Debby</p>
                <p class="text-sx font-medium text-info">Crypto Trader</p>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" class="w-full h-full space-y-16 flex flex-col items-center p-8 border border-primary rounded-2xl shadow aos-init">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-info">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46"></path>
            </svg>

            <p class="text-xs text-gray-500 text-center">
                J-Rich has made trading easy fo me with its easy-to-use interface 
            </p>

            <div class="space-x-2 flit flex-col">
                <img class="w-12 h-12 rounded-full" src="./assets/images/testimonial2.png">
                <p class="font-medium">- Abel</p>
                <p class="text-sx font-medium text-info">Stock Manager</p>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600" class="w-full h-full space-y-16 flex flex-col items-center p-8 border border-primary rounded-2xl shadow aos-init">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-info">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46"></path>
            </svg>

            <p class="text-xs text-gray-500 text-center">
                This is my go-to in navigating the complexities of the financial markets.
            </p>

            <div class="space-x-2 flit flex-col">
                <img class="w-12 h-12 rounded-full" src="./assets/images/testimonial3.png">
                <p class="font-medium">- Peter</p>
                <p class="text-sx font-medium text-info">Crypto Trader</p>
            </div>
        </div>
    </div>
</div>


@endsection