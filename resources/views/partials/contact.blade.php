<section class="relative block py-24 lg:pt-0 bg-black md:mt-0 lg:mt-0" id="contactUs">
    <div class="container mx-auto px-4 mt-10">
        <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
            <div class="w-full lg:w-6/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                    <div class="flex-auto p-5 lg:p-10">
                        <form action="{{ route('contact-us') }}#contactUs" method="post">
                            @csrf
                            @honeypot
                            <h4 class="text-4xl font-bold text-yellow-500">Want to work with us?</h4>
                            <p class="leading-relaxed mt-1 mb-4 text-black">
                                Complete this form and we will get back to you in 24 hours.
                            </p>
                            <div class="relative w-full mb-3 mt-8">
                                <label class="block uppercase text-black text-xs font-bold mb-2 " for="name">
                                    Name</label>
                                <input type="text"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-black bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="Name" value="{{ old('name') }}" name="name"
                                    style="transition: all 0.15s ease 0s" />
                                @error('name')
                                    <span class="text-red-500 font-bold  text-xs">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="relative w-full mb-3 mt-8">
                                <label class="block uppercase text-black text-xs font-bold mb-2 " for="surname">
                                    Surname</label>
                                <input type="text"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-black bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="Surname" value="{{ old('surname') }}" name="surname"
                                    style="transition: all 0.15s ease 0s" />
                                @error('surname')
                                    <span class="text-red-500 font-bold  text-xs">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="relative w-full mb-3 mt-8">
                                <label class="block uppercase text-black text-xs font-bold mb-2 " for="phone">
                                    Phone</label>
                                <input type="text"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-black bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="Phone Number" value="{{ old('phone') }}" name="phone"
                                    style="transition: all 0.15s ease 0s" />
                                @error('phone')
                                    <span class="text-red-500 font-bold  text-xs">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-black text-xs font-bold mb-2"
                                    for="email">Email</label>
                                <input type="email"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-black bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    value="{{ old('email') }}" placeholder="Email" name="email"
                                    style="transition: all 0.15s ease 0s" />
                                @error('email')
                                    <span class="text-red-500 font-bold  text-xs">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="relative w-full mb-3 mt-8">
                                <label class="block uppercase text-black text-xs font-bold mb-2 " for="subject">
                                    Subject</label>
                                <input type="text"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-black bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="Subject" name="subject" value="{{ old('subject') }}"
                                    style="transition: all 0.15s ease 0s" />
                                @error('subject')
                                    <span class="text-red-500 font-bold  text-xs">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-black text-xs font-bold mb-2"
                                    for="message">Message</label>
                                <textarea rows="4" cols="80"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-black bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="Type a message..." value="{{ old('message') }}" name="message"></textarea>
                                @error('message')
                                    <span class="text-red-500 font-bold  text-xs">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="text-center mt-6">
                                <button
                                    class="bg-yellow-500 text-black active:bg-yellow-400 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg  hover:scale-125 outline-none focus:outline-none mr-1 mb-1"
                                    type="submit" style="transition: all 0.15s ease 0s">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session()->has('success'))
        <script>
            Swal.fire({
                title: 'Message Sent!',
                text: "{{ session()->get('success') }}",
                icon: 'success'
            });
        </script>
    @endif

    @if (session()->has('errors'))
        <script>
            Swal.fire({
                title: 'Something Went Wrong!',
                text: 'Please Try Again!',
                icon: 'error'
            });
        </script>
    @endif
@endpush
