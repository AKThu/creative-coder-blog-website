<nav class="bg-tertiary-background drop-shadow-lg-blue sticky top-0 z-50">
    <div class="max-w-screen-xl flex flex-row justify-between items-center mx-auto p-4">
        <a href="/">
            <span class="text-2xl font-semibold whitespace-nowrap">
                <img src="/assets/logo/logo_b&w.png"
                     alt="taka_tech_logo"
                     class="h-6 sm:h-10 w-auto mb-1">
            </span>
        </a>
        <div>
            <ul class="w-fit text-lg font-light flex flex-row gap-x-10 p-4 text-white">
                <li>
                    <a href="/#home" class="hover:text-lightblue1">Home</a>
                </li>
                <li>
                    <a href="/#blogs"
                       class="hover:text-lightblue1">Blogs</a>
                </li>
                <li>
                    <a href="#subscribe" class="hover:text-lightblue1">Subscribe</a>
                </li>
            </ul>
        </div>
        <div>
            @auth
                <form action="logout" method="POST">
                    @csrf
                    <button
                        type="submit"
                        class="px-3 py-1 bg-red-500 rounded-lg">
                        Logout
                    </button>
                </form>
            @else
                <a
                    class="mx-2"
                    href="/login">
                    Login
                </a>
                <a
                    class="mx-2"
                    href="/register">
                    Register
                </a>
            @endauth
        </div>
</nav>
