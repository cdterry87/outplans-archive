<x-guest-layout>

    <header>
        <nav class="container flex items-center py-4 mt-4 sm:mt-12">
            <div class="py-1 text-3xl">
                Eleplans
            </div>
            <ul class="hidden sm:flex flex-1 justify-end items-center gap-12 uppercase text-xs">
                <li>
                    <a href="/login" class="button button-red px-7 uppercase">
                        Login
                    </a>
                </li>
                <li>
                    <a href="/register">Register</a>
                </li>
            </ul>
            <div class="flex sm:hidden flex-1 justify-end">
                <i class="fas fa-bars text-2xl"></i>
            </div>
        </nav>
    </header>

    <section class="relative">
        <div class="container flex flex-col-reverse lg:flex-row items-center gap-12 mt-14 lg:mt-20">
            <div class="flex flex-1 flex-col items-center lg:items-start">
                <h2 class="font-bold text-3xl md:text-4xl lg:text-5xl text-center lg:text-left mb-6">Start making plans!</h2>
                <p class="text-bookmark-grey text-lg text-center lg:text-left mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis deleniti deserunt enim et excepturi facere fugiat hic incidunt.
                </p>
                <div class="flex justify-center flex-wrap gap-6">
                    <button type="button" class="button button-purple">
                        Get Started
                    </button>
                </div>
            </div>
            <div class="flex justify-center flex-1 mb-10 md:mb-16 lg:mb-0 z-10">
                <img
                    src="https://images.unsplash.com/photo-1631456715790-d4bc4ffe54d0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80" alt="Hero"
                    class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full"
                >
            </div>
        </div>
        <div class="hidden md:block absolute h-80 w-1/2 top-1 right-0 lg:-bottom-28 lg:-right-56">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#FF0066" d="M25.9,-43.8C33.7,-35.2,40.3,-28.3,42,-20.4C43.6,-12.5,40.3,-3.6,42.5,8.6C44.7,20.9,52.3,36.4,48.7,44C45,51.6,29.9,51.1,18.7,46.7C7.4,42.4,-0.1,34.1,-15.1,36.6C-30.2,39,-52.7,52.1,-65.8,49.9C-78.9,47.6,-82.5,30,-81.7,13.7C-80.9,-2.5,-75.8,-17.4,-61.9,-20.1C-48,-22.9,-25.3,-13.5,-13.5,-20.2C-1.7,-26.9,-0.9,-49.9,4.1,-56.2C9,-62.6,18,-52.3,25.9,-43.8Z" transform="translate(100 100)" />
            </svg>
        </div>
    </section>

    <section class="bg-bookmark-white py-20 mt-20 lg:mt-60">
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
            <h2 class="text-3xl text-center text-bookmark-blue">Features</h2>
        </div>

        <div class="relative mt-20 lg:mt-12">
            <div class="container flex flex-col lg:flex-row items-center justify-center gap-x-24">
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                    <img
                        class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full"
                        src="https://images.unsplash.com/photo-1631451095765-2c91616fc9e6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                        alt=""
                    >
                </div>
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <h3 class="text-3xl text-bookmark-blue text-center">Make and share your plans!</h3>
                    <p class="text-bookmark-grey my-4 text-center lg:text-left sm:w-3/4lg:w-full">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolorum eos expedita facilis inventore molestias perspiciatis praesentium quos. Aperiam assumenda delectus deleniti eaque in incidunt molestiae nemo nihil sint ut?
                    </p>
                    <button type="button" class="button button-red">
                        More Info
                    </button>
                </div>
            </div>
            <div class="hidden lg:block absolute h-80 top-1 w-1/2 lg:-bottom-24 lg:-left-56">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#00A1E4" d="M22.3,-21.2C34.7,-16.2,54.4,-14.6,63.6,-4.9C72.9,4.8,71.6,22.7,63.7,37.3C55.9,51.8,41.5,63.1,28.9,58.7C16.3,54.4,5.5,34.4,-6.4,26.3C-18.3,18.2,-31.4,22,-41.1,17.7C-50.7,13.4,-56.9,1.1,-58.6,-14C-60.3,-29.1,-57.5,-47.1,-47,-52.4C-36.4,-57.7,-18.2,-50.3,-6.6,-42.5C5,-34.6,9.9,-26.2,22.3,-21.2Z" transform="translate(100 100)" />
                </svg>
            </div>
        </div>
    </section>

    <section class="py-20 mt-20">
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
            <h2 class="text-3xl text-center text-bookmark-blue">Check out popular plans near you!</h2>
            <p class="text-center text-bookmark-grey mt-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur distinctio dolor doloribus eius et, illo itaque numquam voluptatibus.
            </p>
        </div>

        <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 max-w-screen-lg mt-16">
            <div class="flex flex-col rounded-md shadow-md">
                <div class="p6 flex flex-col items-center">
                    <img
                        src="https://i.picsum.photos/id/939/200/200.jpg?hmac=iqiSg4LCwK5ANmtBOgb0nQOLsoedkjQNxc_AH-WNlFc"
                        alt="Card">
                    <h4 class="mt-5 mb-2 text-bookmark-blue text-lg">Add to Chrome</h4>
                    <p class="mb-2 text-bookmark-grey font-light">Version 1.0.2</p>
                </div>
                <hr class="border-b border-bookmark-white" />
                <div class="flex p-6">
                    <button type="button" class="flex-1 button button-purple">Install Extension</button>
                </div>
            </div>

            <div class="flex flex-col rounded-md shadow-md">
                <div class="p6 flex flex-col items-center">
                    <img
                        src="https://i.picsum.photos/id/939/200/200.jpg?hmac=iqiSg4LCwK5ANmtBOgb0nQOLsoedkjQNxc_AH-WNlFc"
                        alt="Card">
                    <h4 class="mt-5 mb-2 text-bookmark-blue text-lg">Add to Chrome</h4>
                    <p class="mb-2 text-bookmark-grey font-light">Version 1.0.2</p>
                </div>
                <hr class="border-b border-bookmark-white" />
                <div class="flex p-6">
                    <button type="button" class="flex-1 button button-purple">Install Extension</button>
                </div>
            </div>

            <div class="flex flex-col rounded-md shadow-md">
                <div class="p6 flex flex-col items-center">
                    <img
                        src="https://i.picsum.photos/id/939/200/200.jpg?hmac=iqiSg4LCwK5ANmtBOgb0nQOLsoedkjQNxc_AH-WNlFc"
                        alt="Card">
                    <h4 class="mt-5 mb-2 text-bookmark-blue text-lg">Add to Chrome</h4>
                    <p class="mb-2 text-bookmark-grey font-light">Version 1.0.2</p>
                </div>
                <hr class="border-b border-bookmark-white" />
                <div class="flex p-6">
                    <button type="button" class="flex-1 button button-purple">Install Extension</button>
                </div>
            </div>
        </div>
    </section>

    <section class="class bg-bookmark-white py-20">
        <div class="container">
            <div class="sm:w-3/4 lg:w-8/12 mx-auto px-2 text-center">
                <h2 class="text-3xl text-bookmark-blue mb-10">Frequently Asked Questions</h2>
                <div class="mb-10">
                    <p class="text-bookmark-grey mt-4 font-bold">Lorem ipsum dolor sit amet, consectetur adipisicing voluptatibus?</p>
                    <p class="mt-4">Ducimus eligendi eos esse itaque officia praesentium reprehenderit soluta vitae.</p>
                </div>
                <div class="mb-10">
                    <p class="text-bookmark-grey mt-4 font-bold">Lorem ipsum dolor sit amet, consectetur adipisicing voluptatibus?</p>
                    <p class="mt-4">Ducimus eligendi eos esse itaque officia praesentium reprehenderit soluta vitae.</p>
                </div>
                <div class="mb-10">
                    <p class="text-bookmark-grey mt-4 font-bold">Lorem ipsum dolor sit amet, consectetur adipisicing voluptatibus?</p>
                    <p class="mt-4">Ducimus eligendi eos esse itaque officia praesentium reprehenderit soluta vitae.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-bookmark-purple text-white py-20">
        <div class="container">
            <div class="sm:w-3/4 lg:w-1/2 mx-auto">
                <p class="font-light uppercase text-center mb-8">
                    Our newsletter
                </p>
                <h4 class="text-3xl text-center">Stay up to date with what we are doing</h4>
                <div class="flex flex-col sm:flex-row gap-6 mt-8">
                    <input type="text" placeholder="Enter your email address" class="focus:outline-none flex-1 px-2 py-3 rounded-md text-black">
                    <button type="button" class="flex self-center button button-red">Sign up</button>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-bookmark-blue py-8">
        <div class="container flex flex-col md:flex-row items-center">
            <div class="flex flex-1 flex-wrap items-center justify-center md:justify-start gap-12">
                Eleplans
                <ul class="flex text-white uppercase gap-12 text-xs">
                    <li class="cursor-pointer">
                        <a href="/terms">Terms and Conditions</a>
                    </li>
                    <li class="cursor-pointer">
                        <a href="/privacy">Privacy Policy</a>
                    </li>
                    <li class="cursor-pointer">
                        <a href="/contact">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="flex gap-10 mt-12 md:mt-0 text-white tex-2xl">
                <span><i class="fab fa-twitter"></i></span>
                <span><i class="fab fa-facebook"></i></span>
            </div>
        </div>
    </footer>

</x-guest-layout>
