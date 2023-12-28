<x-app-layout>

    <x-slot name="title">MIA School</x-slot>

    {{-- slider --}}
    <section
        class="relative bg-[url(https://images.unsplash.com/photo-1604014237800-1c9102c219da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80)] bg-cover bg-center bg-no-repeat">
        <div class="absolute inset-0 bg-black/75">
        </div>

        <div
            class="relative mx-auto max-w-screen-xl px-4 py-32 justify-center items-center sm:px-6 flex lg:h-screen lg:px-8">
            <div class="max-w-xl text-center">
                <h1 class="text-3xl font-extrabold text-white uppercase sm:text-5xl">
                    MIA School Group
                </h1>

                <div class="mt-8 flex flex-wrap gap-4 text-center items-center justify-center">
                    <a href="#"
                        class="block w-full rounded bg-indigo-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-indigo-700 focus:outline-none focus:ring active:bg-indigo-500 sm:w-auto">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- about --}}
    <section class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="flex justify-center items-center relative h-40 rounded-lg sm:h-80 lg:h-full">
                <img alt="Party"
                    src="https://images.unsplash.com/photo-1527529482837-4698179dc6ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    class="sm:absolute sm:left-0 sm:top-0 lg:top-0 lg:left-0 lg:mt-20 h-full w-40 sm:h-72 sm:w-72 object-cover" />
                <img alt="Party"
                    src="https://images.unsplash.com/photo-1503676382389-4809596d5290?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHN0dWRlbnR8ZW58MHx8MHx8fDA%3D"
                    class="sm:absolute sm:top-0 sm:right-0 lg:top-0 lg:left-0 sm:ml-32 h-full w-40 sm:h-72 sm:w-72 object-cover" />
            </div>
            <div class="mt-10 py-10 sm:mt-0 text-center sm:text-left">
                <h2 class="w-full text-3xl text-indigo-500 font-bold sm:text-4xl">About the University of
                    MIA</h2>

                <p class="mt-4 leading-loose text-gray-600">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
                    eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae eius
                    quidem quam repellat.
                </p>

                <a href="#"
                    class="mt-8 inline-block uppercase rounded bg-indigo-600 px-8 py-2 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                    Read More
                </a>
            </div>
        </div>
    </section>

    {{-- overview --}}
    <section class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
        <div class="md:flex md:items-end md:justify-center">
            <div class="text-center">
                <h2 class="text-4xl font-bold tracking-tight text-indigo-900 sm:text-5xl">
                    University Overview
                </h2>

                <p class="mt-2 font-semibold text-lg leading-relaxed text-indigo-700">
                    Lorem ipsum dolor sitsit amet consectetur adipisicing elit. amet consectetur adipisicing elit.
                </p>
            </div>
        </div>

        <div class="mt-8 grid grid-cols-1 md:grid-cols-3">
            <div class="flex h-full flex-col justify-between bg-white p-2">
                <div>
                    <div class="flex justify-center text-green-500">
                        <img class="rounded-lg"
                            src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHN0dWRlbnR8ZW58MHx8MHx8fDA%3D"
                            alt="">
                    </div>

                    <div class="mt-2">
                        <p class="text-2xl text-center font-bold text-indigo-600">Curriculum</p>
                    </div>
                </div>
            </div>
            <div class="flex h-full flex-col justify-between bg-white p-2">
                <div>
                    <div class="flex justify-center text-green-500">
                        <img class="rounded-lg"
                            src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHN0dWRlbnR8ZW58MHx8MHx8fDA%3D"
                            alt="">
                    </div>

                    <div class="mt-2">
                        <p class="text-2xl text-center font-bold text-indigo-600">Teaching Staff</p>
                    </div>
                </div>
            </div>
            <div class="flex h-full flex-col justify-between bg-white p-2">
                <div>
                    <div class="flex justify-center text-green-500">
                        <img class="rounded-lg"
                            src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHN0dWRlbnR8ZW58MHx8MHx8fDA%3D"
                            alt="">
                    </div>

                    <div class="mt-2">
                        <p class="text-2xl text-center font-bold text-indigo-600">School & Depertment</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- blog --}}
    <section class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
        <div class="md:flex md:items-end md:justify-center">
            <div class="text-center">
                <h2 class="text-4xl font-bold tracking-tight text-indigo-900 sm:text-5xl">
                    Our Faciilites
                </h2>

                <p class="mt-2 font-semibold text-lg leading-relaxed text-indigo-700">
                    Lorem ipsum dolor sitsit amet consectetur adipisicing elit. amet consectetur adipisicing elit.
                </p>
            </div>
        </div>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3">
            <div class="flex h-full flex-col justify-between bg-white p-2">
                <div class="overflow-hidden rounded-lg border border-gray-100 bg-gray-300 drop-shadow-lg">
                    <img alt="Office"
                        src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                        class="h-56 w-full object-cover" />

                    <div class="p-4 sm:p-6">
                        <a href="#">
                            <h3 class="text-lg font-medium text-indigo-500">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
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
                <div class="overflow-hidden rounded-lg border border-gray-100 bg-gray-300 drop-shadow-lg">
                    <img alt="Office"
                        src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2xhc3MlMjByb29tfGVufDB8fDB8fHww"
                        class="h-56 w-full object-cover" />

                    <div class="p-4 sm:p-6">
                        <a href="#">
                            <h3 class="text-lg font-medium text-indigo-500">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
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
                <div class="overflow-hidden rounded-lg border border-gray-100 bg-gray-300 drop-shadow-lg">
                    <img alt="Office"
                        src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2xhc3MlMjByb29tfGVufDB8fDB8fHww"
                        class="h-56 w-full object-cover" />

                    <div class="p-4 sm:p-6">
                        <a href="#">
                            <h3 class="text-lg font-medium text-indigo-500">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
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
    <section
        class="relative bg-[url(https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8c3R1ZGVudHN8ZW58MHx8MHx8fDA%3D)] bg-cover bg-center bg-no-repeat">
        <div class="absolute inset-0 bg-black/55">
        </div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 justify-center items-center sm:px-6 flex lg:px-8">
            <div class="max-w-xl text-center">
                <h1 class="text-5xl font-bold text-white uppercase sm:text-5xl">
                    Our Mission
                </h1>
                <p class="text-white text-3xl mt-4 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Voluptas, reiciendis.</p>

            </div>
        </div>
    </section>

    {{-- contact --}}
    <section class="bg-indigo-500">
        <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2">
                <div class="flex h-full flex-col p-2 text-white">
                    <div class="">
                        <h3 class="text-3xl font-medium ">
                            Contact Information
                        </h3>
                        <h3 class="text-xl">How to get in touch us</h3>
                    </div>
                    <div class="flex flex-col space-y-4 mt-14">
                        <div class="flex flex-col">
                            <h3 class="text-xl font-semibold">Phone Number</h3>
                            <a href="" class="">+959 123456789</a>
                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-xl font-semibold">Email Address</h3>
                            <a href="" class="">info@miaschool.com</a>
                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-xl font-semibold">Address</h3>
                            <a href="" class="">59 Street, Between 28st and 39st, Mandalay, Myanmar.</a>
                        </div>
                    </div>
                </div>
                <div class="flex h-full flex-col justify-between p-2">
                    <iframe class="rounded-lg w-full h-80" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30547.767540269615!2d96.124928!3d16.8525824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194eb70b00001%3A0xb2a1f5694971b1b6!2sMICT%20Park%20Main%20Building!5e0!3m2!1sen!2smm!4v1703581917446!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <p class="mt-5 text-white text-center">@mismyanmar</p>
        </div>
    </section>

</x-app-layout>
