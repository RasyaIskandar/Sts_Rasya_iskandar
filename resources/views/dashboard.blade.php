<x-app-layout>
    <x-slot name="header">


        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pendaftaran Sekolah Smk Pesat It Xpro</h2>
                    <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Hanya untuk orang tua/siswa</p>
                </div>
                <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                    <!-- Pricing Card -->
                    <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                        <h3 class="mb-4 text-2xl font-semibold">List Pendaftaran</h3>
                        <div class="flex justify-center items-baseline my-8">
                        </div>
                        <a href="{{ route('siswas.create') }}">
                            <button type="button
                            href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">   Klik</button>
                        </a>
                    </div>
                    <!-- Pricing Card -->
                    <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                        <h3 class="mb-4 text-2xl font-semibold">Daftar Siswa Smk Pesat</h3>
                        <div class="flex justify-center items-baseline my-8">
                        </div>
                        <a href="{{ route('siswas.index') }}" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Klik</a>
                    </div>
                    <!-- Pricing Card -->
                    <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                        <h3 class="mb-4 text-2xl font-semibold">Info Jurusan</h3>
                        <div class="flex justify-center items-baseline my-8">
                        </div>
                        <a href="{{ route('jurusans.index') }}" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Klik</a>
                    </div>
                </div>
            </div>
          </section>    



</x-app-layout>