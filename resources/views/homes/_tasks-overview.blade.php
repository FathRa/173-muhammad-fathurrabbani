<section>
    <div class="flex items-center justify-between border-0 border-b-2 border-gray-500">
        <header>
            <h2 class="text-xl font-bold">Tasks Overview</h2>
        </header>

        <nav>
            <ul id="tab" class="flex gap-5">
                <li id="all-task" class="tab-active cursor-pointer p-2">All Tasks</li>
                <li id="open-task" class="cursor-pointer p-2">Open Tasks</li>
                <li id="on-progress" class="cursor-pointer p-2">On Progress Tasks</li>
                <li id="closed-task" class="cursor-pointer p-2">Closed Tasks</li>
            </ul>
        </nav>
    </div>

    <div id="tab-content" class="grid grid-flow-row gap-2 py-10">
        <div data-id="all-task" class="block">
            <div
                class="flex justify-between rounded-md border border-l-4 border-gray-300 border-l-green-500 p-3 shadow-md">
                <div>
                    <header class="flex gap-2">
                        <h3 class="text-lg">Title Example</h3>
                        <div>
                            <span class="rounded-full bg-green-500 px-2 py-1 text-sm text-white">Easy</span>
                        </div>
                    </header>
                    <div>
                        <figure class="flex items-center justify-start gap-2">
                            <img src="https://th.bing.com/th/id/R.02757b7ecfeb9cde9a5f2cc6021c021d?rik=rxoxiP9oDFYCOQ&riu=http%3a%2f%2fwww.fubiz.net%2fwp-content%2fuploads%2f2014%2f02%2fAnimal-10.jpg&ehk=078lsX6qUX2LxYOEQR4U1SqQV%2bvxqApZHfsiKfWgplA%3d&risl=&pid=ImgRaw&r=0"
                                alt="Profile Picture" class="h-10 w-10 rounded-full object-contain object-center">
                            <figcaption class="text-wrap">Your Name</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="flex items-center">
                    <h3 class="my-auto text-center text-lg">Open</h3>
                </div>
                <div class="grid grid-flow-row">
                    <div>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">PHP</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">JS</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">FUNDAMENTAL</span>
                    </div>
                    <p class="text-end text-sm">2 Days Ago</p>
                </div>
            </div>
            <div
                class="flex justify-between rounded-md border border-l-4 border-gray-300 border-l-yellow-500 p-3 shadow-md">
                <div>
                    <header class="flex gap-2">
                        <h3 class="text-lg">Title Example</h3>
                        <div>
                            <span class="rounded-full bg-yellow-500 px-2 py-1 text-sm text-white">Medium</span>
                        </div>
                    </header>
                    <div>
                        <figure class="flex items-center justify-start gap-2">
                            <img src="https://th.bing.com/th/id/R.02757b7ecfeb9cde9a5f2cc6021c021d?rik=rxoxiP9oDFYCOQ&riu=http%3a%2f%2fwww.fubiz.net%2fwp-content%2fuploads%2f2014%2f02%2fAnimal-10.jpg&ehk=078lsX6qUX2LxYOEQR4U1SqQV%2bvxqApZHfsiKfWgplA%3d&risl=&pid=ImgRaw&r=0"
                                alt="Profile Picture" class="h-10 w-10 rounded-full object-contain object-center">
                            <figcaption class="text-wrap">Your Name</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="flex items-center">
                    <h3 class="my-auto text-center text-lg">Closed</h3>
                </div>
                <div class="grid grid-flow-row">
                    <div>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">PHP</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">JS</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">FUNDAMENTAL</span>
                    </div>
                    <p class="text-end text-sm">2 Days Ago</p>
                </div>
            </div>
            <div
                class="flex justify-between rounded-md border border-l-4 border-gray-300 border-l-red-500 p-3 shadow-md">
                <div>
                    <header class="flex gap-2">
                        <h3 class="text-lg">Title Example</h3>
                        <div>
                            <span class="rounded-full bg-red-500 px-2 py-1 text-sm text-white">Hard</span>
                        </div>
                    </header>
                    <div>
                        <figure class="flex items-center justify-start gap-2">
                            <img src="https://th.bing.com/th/id/R.02757b7ecfeb9cde9a5f2cc6021c021d?rik=rxoxiP9oDFYCOQ&riu=http%3a%2f%2fwww.fubiz.net%2fwp-content%2fuploads%2f2014%2f02%2fAnimal-10.jpg&ehk=078lsX6qUX2LxYOEQR4U1SqQV%2bvxqApZHfsiKfWgplA%3d&risl=&pid=ImgRaw&r=0"
                                alt="Profile Picture" class="h-10 w-10 rounded-full object-contain object-center">
                            <figcaption class="text-wrap">Your Name</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="flex items-center">
                    <h3 class="my-auto text-center text-lg">On Progress</h3>
                </div>
                <div class="grid grid-flow-row">
                    <div>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">PHP</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">JS</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">FUNDAMENTAL</span>
                    </div>
                    <p class="text-end text-sm">2 Days Ago</p>
                </div>
            </div>
        </div>
        <div data-id="open-task" class="hidden">
            <div
                class="flex justify-between rounded-md border border-l-4 border-gray-300 border-l-green-500 p-3 shadow-md">
                <div>
                    <header class="flex gap-2">
                        <h3 class="text-lg">Title Example</h3>
                        <div>
                            <span class="rounded-full bg-green-500 px-2 py-1 text-sm text-white">Easy</span>
                        </div>
                    </header>
                    <div>
                        <figure class="flex items-center justify-start gap-2">
                            <img src="https://th.bing.com/th/id/R.02757b7ecfeb9cde9a5f2cc6021c021d?rik=rxoxiP9oDFYCOQ&riu=http%3a%2f%2fwww.fubiz.net%2fwp-content%2fuploads%2f2014%2f02%2fAnimal-10.jpg&ehk=078lsX6qUX2LxYOEQR4U1SqQV%2bvxqApZHfsiKfWgplA%3d&risl=&pid=ImgRaw&r=0"
                                alt="Profile Picture" class="h-10 w-10 rounded-full object-contain object-center">
                            <figcaption class="text-wrap">Your Name</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="flex items-center">
                    <h3 class="my-auto text-center text-lg">Open</h3>
                </div>
                <div class="grid grid-flow-row">
                    <div>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">PHP</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">JS</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">FUNDAMENTAL</span>
                    </div>
                    <p class="text-end text-sm">2 Days Ago</p>
                </div>
            </div>
            <div
                class="flex justify-between rounded-md border border-l-4 border-gray-300 border-l-yellow-500 p-3 shadow-md">
                <div>
                    <header class="flex gap-2">
                        <h3 class="text-lg">Title Example</h3>
                        <div>
                            <span class="rounded-full bg-yellow-500 px-2 py-1 text-sm text-white">Medium</span>
                        </div>
                    </header>
                    <div>
                        <figure class="flex items-center justify-start gap-2">
                            <img src="https://th.bing.com/th/id/R.02757b7ecfeb9cde9a5f2cc6021c021d?rik=rxoxiP9oDFYCOQ&riu=http%3a%2f%2fwww.fubiz.net%2fwp-content%2fuploads%2f2014%2f02%2fAnimal-10.jpg&ehk=078lsX6qUX2LxYOEQR4U1SqQV%2bvxqApZHfsiKfWgplA%3d&risl=&pid=ImgRaw&r=0"
                                alt="Profile Picture" class="h-10 w-10 rounded-full object-contain object-center">
                            <figcaption class="text-wrap">Your Name</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="flex items-center">
                    <h3 class="my-auto text-center text-lg">Open</h3>
                </div>
                <div class="grid grid-flow-row">
                    <div>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">PHP</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">JS</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">FUNDAMENTAL</span>
                    </div>
                    <p class="text-end text-sm">2 Days Ago</p>
                </div>
            </div>
            <div
                class="flex justify-between rounded-md border border-l-4 border-gray-300 border-l-red-500 p-3 shadow-md">
                <div>
                    <header class="flex gap-2">
                        <h3 class="text-lg">Title Example</h3>
                        <div>
                            <span class="rounded-full bg-red-500 px-2 py-1 text-sm text-white">Hard</span>
                        </div>
                    </header>
                    <div>
                        <figure class="flex items-center justify-start gap-2">
                            <img src="https://th.bing.com/th/id/R.02757b7ecfeb9cde9a5f2cc6021c021d?rik=rxoxiP9oDFYCOQ&riu=http%3a%2f%2fwww.fubiz.net%2fwp-content%2fuploads%2f2014%2f02%2fAnimal-10.jpg&ehk=078lsX6qUX2LxYOEQR4U1SqQV%2bvxqApZHfsiKfWgplA%3d&risl=&pid=ImgRaw&r=0"
                                alt="Profile Picture" class="h-10 w-10 rounded-full object-contain object-center">
                            <figcaption class="text-wrap">Your Name</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="flex items-center">
                    <h3 class="my-auto text-center text-lg">Open</h3>
                </div>
                <div class="grid grid-flow-row">
                    <div>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">PHP</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">JS</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">FUNDAMENTAL</span>
                    </div>
                    <p class="text-end text-sm">2 Days Ago</p>
                </div>
            </div>
        </div>
        <div data-id="on-progress" class="hidden">
            <div
                class="flex justify-between rounded-md border border-l-4 border-gray-300 border-l-green-500 p-3 shadow-md">
                <div>
                    <header class="flex gap-2">
                        <h3 class="text-lg">Title Example</h3>
                        <div>
                            <span class="rounded-full bg-green-500 px-2 py-1 text-sm text-white">Easy</span>
                        </div>
                    </header>
                    <div>
                        <figure class="flex items-center justify-start gap-2">
                            <img src="https://th.bing.com/th/id/R.02757b7ecfeb9cde9a5f2cc6021c021d?rik=rxoxiP9oDFYCOQ&riu=http%3a%2f%2fwww.fubiz.net%2fwp-content%2fuploads%2f2014%2f02%2fAnimal-10.jpg&ehk=078lsX6qUX2LxYOEQR4U1SqQV%2bvxqApZHfsiKfWgplA%3d&risl=&pid=ImgRaw&r=0"
                                alt="Profile Picture" class="h-10 w-10 rounded-full object-contain object-center">
                            <figcaption class="text-wrap">Your Name</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="flex items-center">
                    <h3 class="my-auto text-center text-lg">On Progress</h3>
                </div>
                <div class="grid grid-flow-row">
                    <div>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">PHP</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">JS</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">FUNDAMENTAL</span>
                    </div>
                    <p class="text-end text-sm">2 Days Ago</p>
                </div>
            </div>
            <div
                class="flex justify-between rounded-md border border-l-4 border-gray-300 border-l-yellow-500 p-3 shadow-md">
                <div>
                    <header class="flex gap-2">
                        <h3 class="text-lg">Title Example</h3>
                        <div>
                            <span class="rounded-full bg-yellow-500 px-2 py-1 text-sm text-white">Medium</span>
                        </div>
                    </header>
                    <div>
                        <figure class="flex items-center justify-start gap-2">
                            <img src="https://th.bing.com/th/id/R.02757b7ecfeb9cde9a5f2cc6021c021d?rik=rxoxiP9oDFYCOQ&riu=http%3a%2f%2fwww.fubiz.net%2fwp-content%2fuploads%2f2014%2f02%2fAnimal-10.jpg&ehk=078lsX6qUX2LxYOEQR4U1SqQV%2bvxqApZHfsiKfWgplA%3d&risl=&pid=ImgRaw&r=0"
                                alt="Profile Picture" class="h-10 w-10 rounded-full object-contain object-center">
                            <figcaption class="text-wrap">Your Name</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="flex items-center">
                    <h3 class="my-auto text-center text-lg">On Progress</h3>
                </div>
                <div class="grid grid-flow-row">
                    <div>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">PHP</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">JS</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">FUNDAMENTAL</span>
                    </div>
                    <p class="text-end text-sm">2 Days Ago</p>
                </div>
            </div>
            <div
                class="flex justify-between rounded-md border border-l-4 border-gray-300 border-l-red-500 p-3 shadow-md">
                <div>
                    <header class="flex gap-2">
                        <h3 class="text-lg">Title Example</h3>
                        <div>
                            <span class="rounded-full bg-red-500 px-2 py-1 text-sm text-white">Hard</span>
                        </div>
                    </header>
                    <div>
                        <figure class="flex items-center justify-start gap-2">
                            <img src="https://th.bing.com/th/id/R.02757b7ecfeb9cde9a5f2cc6021c021d?rik=rxoxiP9oDFYCOQ&riu=http%3a%2f%2fwww.fubiz.net%2fwp-content%2fuploads%2f2014%2f02%2fAnimal-10.jpg&ehk=078lsX6qUX2LxYOEQR4U1SqQV%2bvxqApZHfsiKfWgplA%3d&risl=&pid=ImgRaw&r=0"
                                alt="Profile Picture" class="h-10 w-10 rounded-full object-contain object-center">
                            <figcaption class="text-wrap">Your Name</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="flex items-center">
                    <h3 class="my-auto text-center text-lg">On Progress</h3>
                </div>
                <div class="grid grid-flow-row">
                    <div>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">PHP</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">JS</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">FUNDAMENTAL</span>
                    </div>
                    <p class="text-end text-sm">2 Days Ago</p>
                </div>
            </div>
        </div>
        <div data-id="closed-task" class="hidden">
            <div
                class="flex justify-between rounded-md border border-l-4 border-gray-300 border-l-green-500 p-3 shadow-md">
                <div>
                    <header class="flex gap-2">
                        <h3 class="text-lg">Title Example</h3>
                        <div>
                            <span class="rounded-full bg-green-500 px-2 py-1 text-sm text-white">Easy</span>
                        </div>
                    </header>
                    <div>
                        <figure class="flex items-center justify-start gap-2">
                            <img src="https://th.bing.com/th/id/R.02757b7ecfeb9cde9a5f2cc6021c021d?rik=rxoxiP9oDFYCOQ&riu=http%3a%2f%2fwww.fubiz.net%2fwp-content%2fuploads%2f2014%2f02%2fAnimal-10.jpg&ehk=078lsX6qUX2LxYOEQR4U1SqQV%2bvxqApZHfsiKfWgplA%3d&risl=&pid=ImgRaw&r=0"
                                alt="Profile Picture" class="h-10 w-10 rounded-full object-contain object-center">
                            <figcaption class="text-wrap">Your Name</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="flex items-center">
                    <h3 class="my-auto text-center text-lg">Closed</h3>
                </div>
                <div class="grid grid-flow-row">
                    <div>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">PHP</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">JS</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">FUNDAMENTAL</span>
                    </div>
                    <p class="text-end text-sm">2 Days Ago</p>
                </div>
            </div>
            <div
                class="flex justify-between rounded-md border border-l-4 border-gray-300 border-l-yellow-500 p-3 shadow-md">
                <div>
                    <header class="flex gap-2">
                        <h3 class="text-lg">Title Example</h3>
                        <div>
                            <span class="rounded-full bg-yellow-500 px-2 py-1 text-sm text-white">Medium</span>
                        </div>
                    </header>
                    <div>
                        <figure class="flex items-center justify-start gap-2">
                            <img src="https://th.bing.com/th/id/R.02757b7ecfeb9cde9a5f2cc6021c021d?rik=rxoxiP9oDFYCOQ&riu=http%3a%2f%2fwww.fubiz.net%2fwp-content%2fuploads%2f2014%2f02%2fAnimal-10.jpg&ehk=078lsX6qUX2LxYOEQR4U1SqQV%2bvxqApZHfsiKfWgplA%3d&risl=&pid=ImgRaw&r=0"
                                alt="Profile Picture" class="h-10 w-10 rounded-full object-contain object-center">
                            <figcaption class="text-wrap">Your Name</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="flex items-center">
                    <h3 class="my-auto text-center text-lg">Closed</h3>
                </div>
                <div class="grid grid-flow-row">
                    <div>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">PHP</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">JS</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">FUNDAMENTAL</span>
                    </div>
                    <p class="text-end text-sm">2 Days Ago</p>
                </div>
            </div>
            <div
                class="flex justify-between rounded-md border border-l-4 border-gray-300 border-l-red-500 p-3 shadow-md">
                <div>
                    <header class="flex gap-2">
                        <h3 class="text-lg">Title Example</h3>
                        <div>
                            <span class="rounded-full bg-red-500 px-2 py-1 text-sm text-white">Hard</span>
                        </div>
                    </header>
                    <div>
                        <figure class="flex items-center justify-start gap-2">
                            <img src="https://th.bing.com/th/id/R.02757b7ecfeb9cde9a5f2cc6021c021d?rik=rxoxiP9oDFYCOQ&riu=http%3a%2f%2fwww.fubiz.net%2fwp-content%2fuploads%2f2014%2f02%2fAnimal-10.jpg&ehk=078lsX6qUX2LxYOEQR4U1SqQV%2bvxqApZHfsiKfWgplA%3d&risl=&pid=ImgRaw&r=0"
                                alt="Profile Picture" class="h-10 w-10 rounded-full object-contain object-center">
                            <figcaption class="text-wrap">Your Name</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="flex items-center">
                    <h3 class="my-auto text-center text-lg">Closed</h3>
                </div>
                <div class="grid grid-flow-row">
                    <div>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">PHP</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">JS</span>
                        <span class="rounded-full bg-violet-500 px-2 py-1 text-sm text-white">FUNDAMENTAL</span>
                    </div>
                    <p class="text-end text-sm">2 Days Ago</p>
                </div>
            </div>
        </div>
    </div>
</section>

@section('script')
    <script src="{{ asset('js/home/task-overview.js') }}"></script>
@endsection
