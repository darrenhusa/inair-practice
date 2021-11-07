<template>
  <div>
    <div>Hello World.</div>
    <p>{{ url }}</p>
  </div>
</template>

<script>
  export default {
    props: ['url'],

    mounted() {
      console.log("Example component mounted");
    }
  };
</script>