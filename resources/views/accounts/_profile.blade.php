<section class="flex justify-between rounded-md p-5 shadow-md">
    <div class="flex items-center justify-start gap-3">
        <figure class="h-[150px] w-[150px]">
            <img src="https://th.bing.com/th/id/R.02757b7ecfeb9cde9a5f2cc6021c021d?rik=rxoxiP9oDFYCOQ&riu=http%3a%2f%2fwww.fubiz.net%2fwp-content%2fuploads%2f2014%2f02%2fAnimal-10.jpg&ehk=078lsX6qUX2LxYOEQR4U1SqQV%2bvxqApZHfsiKfWgplA%3d&risl=&pid=ImgRaw&r=0"
                alt="Profile Picture" class="rounded-full object-contain object-center">
        </figure>

        <div>
            <h1 class="text-xl font-semibold">Your Name</h1>
            <p>Your Email</p>
            <p>Your Role</p>
        </div>
    </div>

    <div>
        <x-button.primary id="edit-btn">Edit</x-button.primary>
    </div>
</section>

@include('accounts._form')
