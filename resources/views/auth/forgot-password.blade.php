<x-guest-layout>
  <div class="mb-4 text-sm text-gray-600">
    {{ __('Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e enviaremos um e-mail com um link de redefinição de senha que permitirá que você escolha um novo.') }}
  </div>

  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <form method="POST" action="{{ route('password.email') }}">
    @csrf

    <!-- Email Address -->
    <div>
      <x-input-label for="email" :value="__('Email')" />
      <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required
        autofocus />
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div class="mt-4 flex items-center justify-end">
      <x-primary-button>
        {{ __('Enviar Link de Redefinição') }}
      </x-primary-button>
    </div>
  </form>
</x-guest-layout>
