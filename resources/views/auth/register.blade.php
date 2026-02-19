<x-layout>
    <form action="/register" method="POST">
    @csrf

    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
        <legend class="fieldset-legend">Register</legend>

        <label class="label">Name</label>
        <input type="text" class="input" placeholder="Name" name="name" required/>

        <label class="label">Email</label>
        <input type="email" class="input" placeholder="Email" name="email" required/>

        <label class="label">Password</label>
        <input type="password" class="input" placeholder="Password" name="password" required/>

        <button class="btn btn-neutral mt-4">Register</button>

        

    </fieldset>

    </form>
</x-layout>