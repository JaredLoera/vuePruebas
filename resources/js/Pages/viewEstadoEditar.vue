<template>
    <h1>Editar estado</h1>
    <div class="w-full max-w-xs">
      <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" @submit.prevent="registrar">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Nombre Estado
        </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Nombre" v-model="form.nombre" />
      <br>
      <br>
      <label class="block text-gray-700 text-sm font-bold mb-2" for="last_name">Codigo de estado:</label>
    
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Clave" v-model="form.clave" />
      <br>
      <br>
      <div class="flex items-center justify-between">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
         Guardar
        </button>
        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="/estados">
          Volver
        </a>
      </div>
    </form>
    </div>
  </template>
  <script>
  export default {
      data() {
        return {
          form:this.$inertia.form({
              nombre:null,
              clave:null,
          })
        }
      },
      component:{
  
      },
      mounted() {
       console.log("tamos bien");
      },
      methods:{
        registrar(){this.form.post('/agregarestado')}
      }
    }
  </script>