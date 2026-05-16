<x-layout>
  <x-form title="Register an account" description="Start tracking your ideas today.">
    <form action="/register" method="POST" class="mt-10 space-y-4">
      @csrf

      <x-form.field name="name" label="Name" />

      <x-form.field name="email" label="Email" type="email" />

      <x-form.field name="password" label="Password" type="password" />

      <button type="submit" class="btn mt-2 h-10 w-full">Create Account</button>
    </form>
  </x-form>
</x-layout>
