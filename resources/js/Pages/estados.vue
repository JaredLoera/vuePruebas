<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

const props = defineProps({
    estados: {
        type: Object,
        default: () => ({}),
    },
    methods: {
      elimianr(){
        router.delete('/estados/')
      }
  },
},
);

</script>
<template>
   <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" onclick="location.href='/inicio'">Volver</button>
<div class="container mx-auto">
    <table  class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
  <thead  class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
        <th scope="col" class="px-6 py-3">#</th>
        <th scope="col" class="px-6 py-3">Nombre</th>
        <th scope="col" class="px-6 py-3">Clave</th>
        <th scope="col" class="px-6 py-3">Ediatar </th>
        <th scope="col" class="px-6 py-3"> Delete </th>
      </tr>
  </thead>
  <tbody>
    <tr v-for="estado in estados"  :key="estado.id">
      <th scope="col">{{ estado.id  }}</th>
      <td>{{ estado.nombre }}</td>
      <td>{{estado.clave }}</td>
      <td class="px-6 py-4">
        <a v-bind:href="'estado/editar/'+estado.id">Edit</a>
      </td>
      <td class="px-6 py-4">
          <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" @click="destroy(estado.id)">Eliminar</button>
      </td>
    </tr>
  </tbody>
</table>
</div>
</template>