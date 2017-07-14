<template>
  <div class="container"> 
    <table class="table table-striped table-bordered table-hover">
      <tr>
        <td>{{ nome }}</td>
        <td>{{ valor }}</td>
        <td>{{ descricao }}</td>
        <td>{{ quantidade }}</td>
      </tr>
    </table>
  </div>
</template>

<script>
    export default {
        props: {
          nome: {
              type: String, 
              required: true
          },
          valor: {
              type: String, 
              required: true
          },
          descricao: {
              type: String, 
              required: true
          },
          quantidade: {
              type: String, 
              required: true
          }
        }
    }
</script>
<style> 

</style>
