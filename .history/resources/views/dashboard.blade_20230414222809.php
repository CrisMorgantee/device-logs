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
            <div>
              <h2 class="mb-4 text-xl font-bold text-gray-700">Gerenciamento de dispositivos</h2>
              <div>
                <div>
                  <div
                    class="text-md flex justify-between rounded-md bg-gradient-to-tr from-indigo-600 to-purple-600 py-2 px-4 font-bold text-white">
                    <div>
                      <span>Nome do Dispositivo</span>
                    </div>
                    <div>
                      <span>Sessão</span>
                    </div>
                    <div>
                      <span>Patrimônio</span>
                    </div>
                    <div>
                      <span>Local de Instalação</span>
                    </div>
                    <div>
                      <span>Início da Sessão</span>
                    </div>
                    <div>
                      <span>Término da Sessão</span>
                    </div>
                  </div>
                  <div>
                    <div class="mt-4 flex justify-between space-x-4 border-t text-sm font-normal">
                      @foreach ($logs as $deviceLog)
                        <div class="flex px-2">
                          <span>John Deo</span>
                        </div>
                        <div>
                          <span>johndeo@gmail.com</span>
                        </div>
                        <div class="px-2">
                          <span>Admin</span>
                        </div>
                        <div class="px-2">
                          <span>28/12/2021</span>
                        </div>
                        <div class="px-2">
                          <select>
                            <option>Admin</option>
                            <option>User</option>
                          </select>
                        </div>
                    </div>
                    @endforeach
                    <div class="mt-4 flex justify-between space-x-4 border-t-2 text-sm font-normal">
                      <div class="px-2">
                        <span>John Deo</span>
                      </div>
                      <div>
                        <span>johndeo@gmail.com</span>
                      </div>
                      <div class="px-2">
                        <span>Admin</span>
                      </div>
                      <div class="px-2">
                        <span>28/12/2021</span>
                      </div>
                      <div class="px-2">
                        <select>
                          <option>Admin</option>
                          <option>User</option>
                        </select>
                      </div>
                    </div>
                    <div class="mt-4 flex justify-between space-x-4 border-t-2 text-sm font-normal">
                      <div class="px-2">
                        <span>John Deo</span>
                      </div>
                      <div>
                        <span>johndeo@gmail.com</span>
                      </div>
                      <div class="px-2">
                        <span>Admin</span>
                      </div>
                      <div class="px-2">
                        <span>28/12/2021</span>
                      </div>
                      <div class="px-2">
                        <select>
                          <option>Admin</option>
                          <option>User</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>
