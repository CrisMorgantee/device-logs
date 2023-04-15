<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="min-h-screen bg-gray-50">
          <div class="rounded-md bg-white p-4">
            <h2 class="mb-4 text-xl font-bold text-gray-700">Gerenciamento de dispositivos</h2>

            <div
              class="text-md grid grid-cols-12 gap-4 rounded-md bg-gradient-to-tr from-indigo-600 to-purple-600 py-2 px-4 font-bold text-white">
              <div class="col-span-2">
                <span>Nome do Desktop</span>
              </div>
              <div class="col-span-3">
                <span>Sessão</span>
              </div>
              <div class="col-span-1">
                <span>Patrimônio</span>
              </div>
              <div class="col-span-2">
                <span>Local de Instalação</span>
              </div>
              <div class="col-span-2">
                <span>Início da Sessão</span>
              </div>
              <div class="col-span-2">
                <span>Término da Sessão</span>
              </div>
            </div>
            <div>
              @foreach ($logs as $deviceLog)
                <div class="mt-4 grid grid-cols-12 gap-4 border-t text-sm font-normal">
                  <div class="col-span-2">
                    <span>{{ $deviceLog->machine_name }}</span>
                  </div>
                  <div class="col-span-3">
                    <span>{{ $deviceLog->session }}</span>
                  </div>
                  <div class="col-span-1">
                    <span>{{ $deviceLog->patrimony }}</span>
                  </div>
                  <div class="col-span-2">
                    <span>{{ $deviceLog->location }}</span>
                  </div>
                  <div class="col-span-2">
                    <span>{{ $deviceLog->start_session_at }}</span>
                  </div>
                  <div class="col-span-2">
                    <span>{{ $deviceLog->end_session_at }}</span>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

</x-app-layout>
