<template>
  <div>
    <p>Array length: {{n}}</p>
    <p>
      Array before: {{array}}
      <button
        type="button"
        class="btn btn-primary btn-sm"
        @click="sort"
      >Click to sort</button>
    </p>
    <p>Array sorted: {{sortedArray}}</p>
  </div>
</template>

<script>
export default {
  name: "bubble-sort",
  components: {},
  data() {
    return {
      array: [],
      sortedArray: [],
      n: 10, //Number of items on array
      msg: ""
    };
  },
  methods: {
    sort(event) {
      let arrayMax = [];
      let arrayAux = [];

      //Cloning initial Array to avoid change data on this variable
      for (let index = 0; index < this.array.length; index++) {
          arrayAux.push(this.array[index]);
          
      }

      //Walk throght the initial array n times
      for (let i = 0; i < this.array.length; i++) {
        let maxIndex = 0;

        //Find the max element
        for (let iAux = 0; iAux < arrayAux.length; iAux++) {
          maxIndex = arrayAux[iAux] > arrayAux[maxIndex] ? iAux : maxIndex;
        }
        arrayMax.push(arrayAux[maxIndex]);
        //Remove max element from arrayAux
        arrayAux.splice(maxIndex, 1);
      }
      this.sortedArray = arrayMax;
    }
  },
  mounted() {
    for (let index = 0; index < this.n; index++) {
      this.array.push(Math.floor(Math.random() * 100));
    }
  }
};
</script>

<style lang="scss">
</style>
