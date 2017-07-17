<template>
  <div> 
    <table class="table table-striped table-bordered table-hover">
      <tr :class="classe">
        <td>{{ nome }}</td>
        <td>{{ valor }}</td>
        <td>{{ descricao }}</td>
        <td>{{ quantidade }}</td>
        <td> 
          <a :href="link">
            <span class="glyphicon glyphicon-search"></span>
          </a>
        </td>
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
          },
          link: {
            type: String, 
            required: true
          },
          classe: { 
            type: String,
            required: true
          }
        }
    }
</script>
<style> 

</style>
