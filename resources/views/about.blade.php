<x-app-layout>

    {{-- slider --}}
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="object-cover object-center"
                    src="https://images.unsplash.com/photo-1604014237800-1c9102c219da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    alt="">
            </div>
            <div class="swiper-slide">
                <img class="object-cover object-center"
                    src="https://images.unsplash.com/photo-1604014237800-1c9102c219da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    alt="">
            </div>
            <div class="swiper-slide">
                <img class="object-cover object-center"
                    src="https://images.unsplash.com/photo-1604014237800-1c9102c219da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    alt="">
            </div>
            <div class="swiper-slide">
                <img class="object-cover object-center"
                    src="https://images.unsplash.com/photo-1604014237800-1c9102c219da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    alt="">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    {{-- about --}}
    <section class="bg-indigo-500">
        <div class="mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="flex items-center justify-center text-white">
                    <div class="p-12">
                        <h3 class="text-xl sm:text-2xl font-semibold">
                            About Us
                        </h3>
                        <h3 class="text-2xl font-semibold sm:text-4xl">About the <br> MIA International School</h3>
                        <p class="mt-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis eveniet cum ipsum
                            praesentium quasi distinctio ab, dolor suscipit nostrum autem! Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Quod, provident.
                        </p>
                        <p class="mt-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis eveniet cum ipsum
                            praesentium quasi distinctio ab, dolor suscipit nostrum autem! Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Quod, provident.
                        </p>
                    </div>
                </div>
                <div class="flex h-full flex-col justify-between">
                    <img src="https://images.unsplash.com/photo-1604014237800-1c9102c219da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                        class="bg-cover bg-center bg-no-repeat h-full object-cover" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- facilities --}}
    <section class="mx-auto max-w-screen-xl px-4 pt-10 py-4 sm:px-6 lg:px-8">
        <div class="flex-col flex items-end justify-center">
            <div class="text-center mx-auto">
                <h2 class="text-4xl font-bold tracking-tight text-indigo-900 sm:text-5xl">
                    Our Faciilites
                </h2>

                <p class="mt-2 font-semibold text-lg leading-relaxed text-gray-700">
                    Lorem ipsum dolor sitsit amet consectetur adipisicing elit. amet consectetur adipisicing elit.
                </p>
            </div>
            <div id="owl-demo-2" class="owl-carousel owl-theme mt-3">
                {{-- <div class="flex flex-wrap mt-4">
                    <div class="xl:w-1/4 md:w-1/2 p-2">
                        <div class="bg-indigo-400 p-6 rounded-lg text-center text-white">
                            <img class="h-36 rounded-full w-36 mx-auto object-cover object-center mb-6 bg-white"
                                src="https://png.pngtree.com/element_our/20190601/ourmid/pngtree-music-icon-image_1344442.jpg"
                                alt="content">
                            <h2 class="text-2xl font-medium mb-4">Music</h2>
                            <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                                Distillery hexagon disrupt edison bulbche.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/4 md:w-1/2 p-2">
                        <div class="bg-indigo-400 p-6 rounded-lg text-center text-white">
                            <img class="h-36 rounded-full w-36 mx-auto object-cover object-center mb-6 bg-white"
                                src="https://cdn-icons-png.flaticon.com/512/4344/4344985.png" alt="content">
                            <h2 class="text-2xl font-medium mb-4">Sport</h2>
                            <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                                Distillery hexagon disrupt edison bulbche.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/4 md:w-1/2 p-2">
                        <div class="bg-indigo-400 p-6 rounded-lg text-center text-white">
                            <img class="h-36 rounded-full w-36 mx-auto object-cover object-center mb-6"
                                src="https://t3.ftcdn.net/jpg/02/68/26/94/360_F_268269471_g3wufBp7sSADYJY3Ayw4aXBs7EhbnkMJ.jpg"
                                alt="content">
                            <h2 class="text-2xl font-medium mb-4">Academic</h2>
                            <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                                Distillery hexagon disrupt edison bulbche.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/4 md:w-1/2 p-2">
                        <div class="bg-indigo-400 p-6 rounded-lg text-center text-white">
                            <img class="h-36 rounded-full w-36 mx-auto object-cover object-center mb-6 bg-white"
                                src="https://static.thenounproject.com/png/3559943-200.png" alt="content">
                            <h2 class="text-2xl font-medium mb-4">Science</h2>
                            <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                                Distillery hexagon disrupt edison bulbche.</p>
                        </div>
                    </div>
                </div> --}}
                <div class="thumbnail item">
                    <div class="w-full">
                        <div class="bg-indigo-400 p-5 h-[22rem] rounded-lg text-center text-white">
                            <div class="circular-image mx-auto">
                                <img class=""
                                    src="https://png.pngtree.com/element_our/20190601/ourmid/pngtree-music-icon-image_1344442.jpg"
                                    alt="content">
                            </div>
                            <h2 class="text-2xl font-medium mb-4">Music new</h2>
                            <p class="leading-relaxed ">Fingerstache flexitarian street art 8-bit waistcoat.
                                Distillery hexagon disrupt edison bulbche.</p>
                        </div>
                    </div>
                </div>
                <div class="thumbnail item">
                    <div class="w-full">
                        <div class="bg-indigo-400 p-5 h-[22rem] rounded-lg text-center text-white">
                            <div class="circular-image mx-auto">
                                <img class=""
                                    src="https://png.pngtree.com/element_our/20190601/ourmid/pngtree-music-icon-image_1344442.jpg"
                                    alt="content">
                            </div>
                            <h2 class="text-2xl font-medium mb-4">Music new</h2>
                            <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                                Distillery hexagon disrupt edison bulbche.</p>
                        </div>
                    </div>
                </div>
                <div class="thumbnail item">
                    <div class="w-full">
                        <div class="bg-indigo-400 p-5 h-[22rem] rounded-lg text-center text-white">
                            <div class="circular-image mx-auto">
                                <img class=""
                                    src="https://png.pngtree.com/element_our/20190601/ourmid/pngtree-music-icon-image_1344442.jpg"
                                    alt="content">
                            </div>
                            <h2 class="text-2xl font-medium mb-4">Music</h2>
                            <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                                Distillery hexagon disrupt edison bulbche.</p>
                        </div>
                    </div>
                </div>
                <div class="thumbnail item">
                    <div class="w-full">
                        <div class="bg-indigo-400 p-5 h-[22rem] rounded-lg text-center text-white">
                            <div class="circular-image mx-auto">
                                <img class=""
                                    src="https://png.pngtree.com/element_our/20190601/ourmid/pngtree-music-icon-image_1344442.jpg"
                                    alt="content">
                            </div>
                            <h2 class="text-2xl font-medium mb-4">Music</h2>
                            <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                                Distillery hexagon disrupt edison bulbche.</p>
                        </div>
                    </div>
                </div>
                <div class="thumbnail item">
                    <div class="w-full">
                        <div class="bg-indigo-400 p-5 h-[22rem] rounded-lg text-center text-white">
                            <div class="circular-image mx-auto">
                                <img class=""
                                    src="https://png.pngtree.com/element_our/20190601/ourmid/pngtree-music-icon-image_1344442.jpg"
                                    alt="content">
                            </div>
                            <h2 class="text-2xl font-medium mb-4">Music</h2>
                            <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                                Distillery hexagon disrupt edison bulbche.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    {{-- activity --}}
    <section class="mx-auto max-w-screen-xl px-4 py-4 sm:px-6 lg:px-8 ">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="flex h-full flex-col justify-between bg-white p-2">
                <div class="overflow-hidden rounded-lg border border-gray-100 bg-gray-100 drop-shadow-lg">
                    <img alt="Office"
                        src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                        class="h-56 w-full object-cover" />

                    <div class="p-4 sm:p-6">
                        <a href="#">
                            <h3 class="text-xl font-bold text-indigo-500">
                                Activity
                            </h3>
                        </a>

                        <p class="mt-2 line-clamp-3 font-semibold text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                            pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                            quidem.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex h-full flex-col justify-between bg-white p-2">
                <div class="overflow-hidden rounded-lg border border-gray-100 bg-gray-100 drop-shadow-lg">
                    <img alt="Office"
                        src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2xhc3MlMjByb29tfGVufDB8fDB8fHww"
                        class="h-56 w-full object-cover" />

                    <div class="p-4 sm:p-6">
                        <a href="#">
                            <h3 class="text-xl font-bold text-indigo-500">
                                Activity
                            </h3>
                        </a>

                        <p class="mt-2 line-clamp-3 font-semibold text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                            pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                            quidem.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex h-full flex-col justify-between bg-white p-2">
                <div class="overflow-hidden rounded-lg border border-gray-100 bg-gray-100 drop-shadow-lg">
                    <img alt="Office"
                        src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2xhc3MlMjByb29tfGVufDB8fDB8fHww"
                        class="h-56 w-full object-cover" />

                    <div class="p-4 sm:p-6">
                        <a href="#">
                            <h3 class="text-xl font-bold text-indigo-500">
                                Activity
                            </h3>
                        </a>

                        <p class="mt-2 line-clamp-3 font-semibold text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                            pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                            quidem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- our mission --}}
    <section class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
        <div class="mt-8 text-center grid grid-cols-1 gap-8 sm:text-left md:grid-cols-2">
            <div class="flex h-full flex-col p-4">
                <div class="">
                    <h3 class="text-4xl leading-relaxed font-bold text-indigo-500">
                        Overview
                    </h3>
                    <p class="mt-3 text-xl leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Provident tempora
                        vitae asperiores explicabo facere quibusdam vel totam non cumque exercitationem.</p>
                </div>
            </div>
            <div class="flex h-full flex-col p-4">
                <div class="">
                    <h3 class="text-4xl leading-relaxed font-bold text-indigo-500">
                        Overview
                    </h3>
                    <p class="mt-3 text-xl leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Provident tempora
                        vitae asperiores explicabo facere quibusdam vel totam non cumque exercitationem.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- teachers --}}
    <section class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
        <div class="flex-col flex items-end justify-center">
            {{-- <div class="flex flex-wrap">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-indigo-400 p-6 rounded-lg text-center text-white">
                        <img class="h-36 rounded-full w-36 mx-auto object-cover object-center mb-6"
                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="content">
                        <h2 class="text-2xl font-semibold">Miss Amara</h2>
                        <h3 class="font-medium mb-4">Teacher</h3>
                        <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-indigo-400 p-6 rounded-lg text-center text-white">
                        <img class="h-36 rounded-full w-36 mx-auto object-cover object-center mb-6"
                            src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cGVyc29ufGVufDB8fDB8fHww"
                            alt="content">
                        <h2 class="text-2xl font-semibold">Miss New</h2>
                        <h3 class="font-medium mb-4">Teacher</h3>
                        <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-indigo-400 p-6 rounded-lg text-center text-white">
                        <img class="h-36 rounded-full w-36 mx-auto object-cover object-center mb-6"
                            src="https://images.unsplash.com/photo-1552058544-f2b08422138a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8cGVyc29ufGVufDB8fDB8fHww"
                            alt="content">
                        <h2 class="text-2xl font-semibold">John</h2>
                        <h3 class="font-medium mb-4">Teacher</h3>
                        <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-indigo-400 p-6 rounded-lg text-center text-white">
                        <img class="h-36 rounded-full w-36 mx-auto object-cover object-center mb-6"
                            src="https://images.unsplash.com/photo-1554151228-14d9def656e4?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8cGVyc29ufGVufDB8fDB8fHww"
                            alt="content">
                        <h2 class="text-2xl font-semibold">Tezer</h2>
                        <h3 class="font-medium mb-4">Teacher</h3>
                        <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
            </div> --}}
            <div id="owl-demo-1" class="owl-carousel owl-theme">
                <div class="thumbnail item">
                    <div class="bg-indigo-400 p-6 rounded-lg text-center text-white">
                        <div class="circular-image mx-auto">
                            <img class="h-36 rounded-full w-36 mx-auto object-cover object-center mb-6"
                                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="content">
                        </div>
                        <h2 class="text-2xl font-semibold">Miss Amara</h2>
                        <h3 class="font-medium mb-4">Teacher</h3>
                        <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
                <div class="thumbnail item">
                    <div class="bg-indigo-400 p-6 rounded-lg text-center text-white">
                        <div class="circular-image mx-auto">
                            <img class="h-36 rounded-full w-36 mx-auto object-cover object-center mb-6"
                                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="content">
                        </div>
                        <h2 class="text-2xl font-semibold">Miss Amara</h2>
                        <h3 class="font-medium mb-4">Teacher</h3>
                        <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
                <div class="thumbnail item">
                    <div class="bg-indigo-400 p-6 rounded-lg text-center text-white">
                        <div class="circular-image mx-auto">
                            <img class="h-36 rounded-full w-36 mx-auto object-cover object-center mb-6"
                                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="content">
                        </div>
                        <h2 class="text-2xl font-semibold">Miss Amara</h2>
                        <h3 class="font-medium mb-4">Teacher</h3>
                        <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
                <div class="thumbnail item">
                    <div class="bg-indigo-400 p-6 rounded-lg text-center text-white">
                        <div class="circular-image mx-auto">
                            <img class="h-36 rounded-full w-36 mx-auto object-cover object-center mb-6"
                                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="content">
                        </div>
                        <h2 class="text-2xl font-semibold">Miss Amara</h2>
                        <h3 class="font-medium mb-4">Teacher</h3>
                        <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
                <div class="thumbnail item">
                    <div class="bg-indigo-400 p-6 rounded-lg text-center text-white">
                        <div class="circular-image mx-auto">
                            <img class="h-36 rounded-full w-36 mx-auto object-cover object-center mb-6"
                                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="content">
                        </div>
                        <h2 class="text-2xl font-semibold">Miss Amara</h2>
                        <h3 class="font-medium mb-4">Teacher</h3>
                        <p class="leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- footer --}}
    <footer class="bg-indigo-500 text-white">
        <div
            class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex font-medium items-center md:justify-start">
                    <span class="text-6xl max-sm:mx-auto">MIA</span>
                </a>
                <p class="text-xl">International School</p>
            </div>
            <div
                class="flex-grow flex flex-wrap justify-between md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/4 md:w-[45%] w-full px-4">
                    <h2 class="font-medium mb-3 text-xl uppercase">Qucik Navigation</h2>
                    <div class="flex flex-col justify-center space-x-0 lg:flex-row lg:space-x-4">
                        <nav class="list-none lg:mb-10 space-y-2">
                            <li>
                                <a class="cursor-pointer hover:text-gray-800">About</a>
                            </li>
                            <li>
                                <a class="cursor-pointer hover:text-gray-800">Our Facilities</a>
                            </li>
                            <li>
                                <a class="cursor-pointer hover:text-gray-800">Contact Us</a>
                            </li>
                        </nav>
                        <nav class="list-none mt-2 lg:mt-0 mb-10 space-y-2">
                            <li>
                                <a class="cursor-pointer hover:text-gray-800">Overview</a>
                            </li>
                            <li>
                                <a class="cursor-pointer hover:text-gray-800">Our Mission</a>
                            </li>
                        </nav>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full ">
                    <h2 class="font-medium mb-3 text-xl uppercase">Get In Touch</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <p class="">59 Street, Between 38 St and 39 St</p>
                        </li>
                        <li>
                            <p class="">Mandalay, Myanmar</p>
                        </li>
                        <li>
                            <p class="">Tel: +959 123456789</p>
                        </li>
                        <li>
                            <p class="">info@miamyanmar.com</p>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <p class="container px-5 mx-auto pb-3 text-lg text-center sm:text-left">©miamyanmar</p>
    </footer>


</x-app-layout>
