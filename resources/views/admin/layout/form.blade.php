@extends('admin.template')
@section('content')
<div class="container px-6 mx-auto grid">
    <h3 class="my-6 text-1xl font-semibold text-gray-700 dark:text-gray-200"> 
      Tempat Magang
    </h3>

    <!-- Form Tempat Magang -->
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <form action="#">
      <label class="block text-sm" for="nama">
        <span class="text-gray-700 dark:text-gray-400">Nama Tempat</span>
        <input
          class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
          id="nama" type="text" placeholder="cth. PT Telkom Indonesia"/>
      </label>
      <label class="block text-sm" for="alamat">
        <span class="text-gray-700 dark:text-gray-400">Alamat</span>
        <input
          class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
          id="alamat" type="text" placeholder="cth. Jalan Mastrip no.21 Jember"/>
      </label>
      <label class="block text-sm" for="kota">
        <span class="text-gray-700 dark:text-gray-400">Kota</span>
        <input
          class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
          id="kota" type="text" placeholder="cth. Jember"/>
      </label>
      <label class="block text-sm" for="detail">
        <span class="text-gray-700 dark:text-gray-400">Detail</span>
        <input
          class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
          id="detail" type="text" placeholder="cth. Kurang Tawu Saya"/>
      </label>
    </div>
    <h3 class="my-6  text-1xl font-semibold text-gray-700 dark:text-gray-200">
      Program Studi
    </h3>
    <!-- Form Prodi -->
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <label class="block text-sm" for="namaProdi">
        <span class="text-gray-700 dark:text-gray-400">Nama Prodi</span>
        <input
          class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
          id="namaProdi" type="text" placeholder="cth. Teknik Informatika"/>
      </label>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        Submit
      </button>
    </div>
    </form>
  </div>
@endsection