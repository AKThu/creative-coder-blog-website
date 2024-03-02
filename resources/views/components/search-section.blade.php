<form action="/"
      class="w-3/4 sm:w-1/2 md:w-5/12 lg:w-2/5 2xl:w-[500px] flex flex-row justify-center items-center mb-5 p-1 rounded-md shadow-sm ring ring-lightblue1 bg-primary-background">

    {{-- Input area --}}
    <input
           value="{{ request('search') }}"
           type="text"
           name="search"
           placeholder="search blogs..."
           class="w-full p-2 rounded-md bg-primary-background focus:outline-none focus:bg-primary-background placeholder:text-gray-500 select-none text-white">

    {{-- Submit button --}}
    <button type="submit"
            class="p-2 fill-lightblue1 hover:fill-blue1 hover:drop-shadow-md">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="24px" height="24px">
            <path
                  d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z" />
        </svg>
    </button>

</form>
