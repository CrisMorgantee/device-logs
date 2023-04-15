<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-4">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="min-h-screen bg-gray-50">
          <div class="rounded-md bg-white p-2">
            <div class="mb-2 flex items-center justify-between p-2">
              <h2 class="text-xl font-bold text-gray-700">Gerenciamento de dispositivos</h2>

              <div class="flex items-center justify-between">
                <form action="{{ route('dashboard.search') }}" method="post">
                  <input type="text" name="patrimony" class="rounded-md border-gray-300 py-1 px-4" />
                  <x-primary-button class="ml-3">Buscar Dispositivo</x-primary-button>
                </form>
              </div>
            </div>

            <div
              class="text-md mb-2 grid grid-cols-12 rounded-md bg-gradient-to-tr from-indigo-600 to-purple-600 py-2 px-4 font-bold text-white">
              <div class="col-span-1">
                <span>Patrimônio</span>
              </div>
              <div class="col-span-2">
                <span>Nome do Desktop</span>
              </div>
              <div class="col-span-3">
                <span>Local de Instalação</span>
              </div>
              <div class="col-span-2">
                <span>Sessão</span>
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
                <div class="grid grid-cols-12 gap-4 border-t px-4 py-4 text-sm font-normal first:border-none">
                  <div class="col-span-1">
                    <span>{{ $deviceLog->patrimony }}</span>
                  </div>
                  <div class="col-span-2">
                    <span>{{ $deviceLog->machine_name }}</span>
                  </div>
                  <div class="col-span-3 truncate">
                    <span>{{ $deviceLog->location }}</span>
                  </div>
                  <div class="col-span-2 truncate">
                    <span>{{ $deviceLog->session }}</span>
                  </div>

                  <div class="col-span-2">
                    <span>{{ $deviceLog->start_session_at->format('d/m/Y') }}</span>
                  </div>
                  <div class="col-span-2">
                    <span>{{ $deviceLog->end_session_at->format('d/m/Y') }}</span>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

</x-app-layout>
