<x-layout>
    <form action="/login" method="POST">
    @csrf

    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
        <legend class="fieldset-legend">Login</legend>

        <label class="label">Email</label>
        <input type="email" class="input" placeholder="Email" name="email" required/>
        <x-error name="email"/>

        <label class="label">Password</label>
        <input type="password" class="input" placeholder="Password" name="password" required/>
        <x-error name="password"/>

        <button class="btn btn-neutral mt-4">Login</button>        

    </fieldset>

    </form>
</x-layout>