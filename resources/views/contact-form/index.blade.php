<x-app-layout>
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">Contact Us</h1>
            @if (session()->has('message'))
                <div class="flex items-center justify-between p-4 my-8 text-sm font-semibold text-purple-100 bg-green-400 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
                    x-cloak x-show="showAlert" x-data="{ showAlert: true }" x-init="setTimeout(() => showAlert = false, 3000)">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z">
                            </path>
                        </svg>
                        <span>{{ session('message') }}</span>
                    </div>
                </div>
            @endif
            <form action="{{ route('contact-form.store') }}" method="POST"
                class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                @csrf
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Name" type="text"
                            name="name" id="name" value="{{ old('name') }}" />
                        @error('name')
                            <div class="text-red-300">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Email address"
                            type="email" name="email" id="email" value="{{ old('email') }}" />
                        @error('email')
                            <div class="text-red-300">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div x-data="{ show: true }">
                    <span class="text-xs tracking-tighter leading-tight text-gray-400">Passwords must be 8 characters
                        with a combination of numbers, capital letter and symbol</span>
                    <div class="relative">
                        <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Password"
                            :type="show ? 'password' : 'text'" name="password" id="password"
                            value="{{ old('password') }}" />
                        <div class="absolute top-1/2 right-4 cursor-pointer" style="transform: translateY(-50%);">
                            <svg class="h-4 text-gray-700 block" fill="none" @click="show = !show"
                                :class="{ 'hidden': !show, 'block': show }" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                </path>
                            </svg>

                            <svg class="h-4 text-gray-700 hidden" fill="none" @click="show = !show"
                                :class="{ 'block': !show, 'hidden': show }" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512">
                                <path fill="currentColor"
                                    d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    @error('password')
                        <div class="text-red-300">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <select name="gender" id="gender"
                        class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-500 sm:text-sm">
                        <option class="text-gray-400" value="">Please select Gender</option>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                    @error('gender')
                        <div class="text-red-300">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-wrap items-center justify-between gap-3">
                    <div class="text-gray-500">Are you a Member?</div>

                    @php
                        $members = ['Yes', 'No'];
                    @endphp

                    <div class="flex">
                        <div class="flex gap-1 sm:gap-3">
                            @foreach ($members as $member)
                                <div>
                                    <input type="checkbox" name="isMemeber[]" value="{{ $member }}"
                                        id="{{ $member }}" class="peer hidden" @checked(in_array($member, old('isMemeber', []))) />
                                    <label for="{{ $member }}"
                                        class="flex cursor-pointer items-center justify-center rounded-md border border-gray-100 bg-white px-3 py-2 text-gray-500 hover:border-gray-200 peer-checked:border-indigo-500 peer-checked:bg-indigo-500 peer-checked:text-white">
                                        <p class="text-sm font-medium">{{ $member }}</p>
                                    </label>
                                </div>
                            @endforeach
                            {{-- <div>
                                <input type="checkbox" name="isMemeber[]" value="false" id="false"
                                    class="peer hidden" {{ old('isMemeber') == 'false' ? 'checked' : '' }} />
                                <label for="false"
                                    class="flex cursor-pointer items-center justify-center rounded-md border border-gray-100 bg-white px-3 py-2 text-gray-500 hover:border-gray-200 peer-checked:border-indigo-500 peer-checked:bg-indigo-500 peer-checked:text-white">
                                    <p class="text-sm font-medium">No</p>
                                </label>
                            </div> --}}
                        </div>
                    </div>
                    @error('isMemeber')
                        <div class="text-red-300 mb-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-wrap items-center justify-between gap-3">
                    <div class="text-gray-500">Are you a Adult?</div>

                    <div class="flex gap-1 sm:gap-3">
                        <div>
                            <input type="radio" name="isAdult" value="true" id="adult" class="peer hidden"
                                {{ old('isAdult') == 'true' ? 'checked' : '' }} />
                            <label for="adult"
                                class="flex cursor-pointer items-center justify-center rounded-md border border-gray-100 bg-white px-3 py-2 text-gray-500 hover:border-gray-200 peer-checked:border-indigo-500 peer-checked:bg-indigo-500 peer-checked:text-white">
                                <p class="text-sm font-medium">Adult</p>
                            </label>
                        </div>
                        <div>
                            <input type="radio" name="isAdult" value="false" id="child" class="peer hidden"
                                {{ old('isAdult') == 'false' ? 'checked' : '' }} />
                            <label for="child"
                                class="flex cursor-pointer items-center justify-center rounded-md border border-gray-100 bg-white px-3 py-2 text-gray-500 hover:border-gray-200 peer-checked:border-indigo-500 peer-checked:bg-indigo-500 peer-checked:text-white">
                                <p class="text-sm font-medium">Child</p>
                            </label>
                        </div>
                    </div>
                    @error('isAdult')
                        <div class="text-red-300">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <textarea id="message" name="message" class="mt-2 w-full rounded-lg border-gray-200 align-top shadow-sm sm:text-sm"
                        rows="4" placeholder="Enter any additional message...">{{ old('message') }}</textarea>
                    @error('message')
                        <div class="text-red-300">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit"
                    class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                    Create
                </button>
            </form>
        </div>

        {{-- table --}}
        <div class="overflow-x-auto rounded-lg border border-gray-200 mt-8">
            <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                <thead class="text-left">
                    <tr>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Email</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Password</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Gender</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">IsMember</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">IsAdult</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Message</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"></th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($contacts as $contact)
                        <tr>
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $contact->name }}
                            </td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $contact->email }}</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                {{ Illuminate\Support\Facades\Crypt::decryptString($contact->password) ?? '' }}</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $contact->gender }}</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $contact->isMemeber }}</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $contact->isAdult }}</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $contact->message }}</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                <a href="{{ route('contact-form.edit', $contact) }}"
                                    class="inline-block px-4 py-2 text-xs font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700">
                                    Edit
                                </a>
                            </td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                <form onclick="return confirm('Are you sure?')"
                                    action="{{ route('contact-form.destroy', $contact) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-block px-4 py-2 text-xs font-medium text-white bg-red-600 rounded hover:bg-red-700">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
