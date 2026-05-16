<x-layout>
  <x-form title="Log in" description="Glad to have you back.">
    <form action="/login" method="POST" class="mt-10 space-y-4">
      @csrf

      <x-form.field name="email" label="Email" type="email" />

      <x-form.field name="password" label="Password" type="password" />

      <button type="submit" class="btn mt-2 h-10 w-full" data-test="login-button">Sign in</button>
    </form>
  </x-form>
</x-layout>
