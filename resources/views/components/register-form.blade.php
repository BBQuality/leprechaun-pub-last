<x-layout>
<div class="p-10">
    <h1 class="mb-8 font-extrabold text-4xl">Register</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        <form>
            <div>
                <label class="block font-semibold" for="name">Name</label>
                <input class="w-full shadow-inner bg-gray-100 rounded-lg placeholder-black text-2xl p-4 border-none block mt-1" id="name" type="text" name="name" required="required" autofocus="autofocus">
            </div>

            <div class="mt-4">
                <label class="block font-semibold" for="email">Email</label>
                <input class="w-full shadow-inner bg-gray-100 rounded-lg placeholder-black text-2xl p-4 border-none block mt-1" id="email" type="email" name="email" required="required">
            </div>

            <div class="mt-4">
                <label class="block font-semibold" for="password">Password</label>
                <input class="w-full shadow-inner bg-gray-100 rounded-lg placeholder-black text-2xl p-4 border-none block mt-1" id="password" type="password" name="password" required="required" autocomplete="new-password">
            </div>

            <div class="flex items-center justify-between mt-8">
                <button type="submit" class="flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">Register</button>
                <a class="font-semibold">
                    Already registered?
                </a>
            </div>
        </form>

        <aside class="">
            <div class="bg-gray-100 p-8 rounded">
                <h2 class="font-bold text-2xl">Instructions</h2>
                <ul class="list-disc mt-4 list-inside">
                    <li>All users must provide a valid email address and password to create an account.</li>
                    <li>Users must not use offensive, vulgar, or otherwise inappropriate language in their username or profile information</li>
                    <li>Users must not create multiple accounts for the same person.</li>
                </ul>
            </div>
        </aside>

    </div>
</div>

</x-layout>