<x-guest-layout>
    <div class="bg-[#F8F9FA]">
        <div class="flex flex-wrap space-x-2 py-2   border-b shadow px-4">
            <a href="#" class="text-gray-500 hover:text-gray-700">Home</a>
            <span class="mx-2 text-gray-400">/</span>
            <a href="#" class="text-gray-500 hover:text-gray-700">Contact Us</a>
        </div>

        <div class="min-h-screen flex flex-col">
            <main class="flex-1">
                @if($success = session(\App\Mixin\ResponseMixin::SUCCESS_MESSAGE_SESSION_KEY))
                    <div class="w-full flex flex-wrap">
                        <div class="w-full p-4 bg-green-300">{{ $success }}</div>
                    </div>
                @endif
                @if($error = session(\App\Mixin\ResponseMixin::ERROR_MESSAGE_SESSION_KEY))
                    <div class="w-full flex flex-wrap">
                        <div class="w-full p-4 bg-red-300">{{ $error }}</div>
                    </div>
                @endif

                <div class="container mx-auto px-4 py-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h2 class="text-xl font-bold mb-4">Send Us a Message</h2>
                            <form class="{{route('contactUs')}}" method="post">
                                @csrf
                                     <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="name">Name</label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="text" placeholder="Your Name">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="email" placeholder="Your Email">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="email">Phone</label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="phone" id="phone" type="number" placeholder="Your phone">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="message">Message</label>
                                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="message" id="message" placeholder="Your Message"></textarea>
                                </div>
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Send</button>
                            </form>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold mb-4">Get in Touch</h2>
                             <div>
                                 {!! \App\Models\ConfigDictionary::get('description')??"" !!}
                             </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
  </x-guest-layout>
