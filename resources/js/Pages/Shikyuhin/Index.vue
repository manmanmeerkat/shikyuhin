
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, createInertiaApp } from '@inertiajs/vue3';
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia'



defineProps({
    shikyuhins: Array
})

const search = ref('')

const searchHinbans = () => {
    Inertia.get(route('shikyuhin.index', { search: search.value }))
}

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900"><section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">支給品ロケーションリスト</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base"></p>
    </div>
    <div class="text-center mb-10">
    <input type="text" name="search" v-model="search">
    <button class="bg-blue-300 ext-white py-2 px-2"
    @click="searchHinbans">検索</button>
    </div>
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">品番</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ロケーション</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">工場</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">管理部署</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="shikyuhin in shikyuhins" :key="shikyuhin.id">
            <td class="px-4 py-3">{{ shikyuhin.number }}</td>
            <td class="px-4 py-3">{{ shikyuhin.location }}</td>
            <td class="px-4 py-3">{{ shikyuhin.plant }}</td>
            <td class="px-4 py-3">{{ shikyuhin.furidashi }}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
      <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </a>
      <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
    </div>
  </div>
</section></div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
