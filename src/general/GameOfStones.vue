<template>
  <pre> <code>
// Complete the gameOfStones function below.
function gameOfStones(n) {
    
    if (checkP2(n % 7)) {
        //I'm really impressed about this solution. I took close to 5 hours to found out this solution.
        //After drawing the play from 0 to 16, I could saw the solution! It's so interesting!
        return 'Second';
    }
    else {
        return 'First';
    }

}
function checkP2(board) {
    //When the player leave 0 or 1 stone at the board, he winds.
    if(board == 0 || board == 1) {
        return true;
    }
    else {
        return false;
    }
}

   </code> </pre>
</template>
<script>
export default {
  name: "game-of-stones",
  components: {},
  data() {
    return {
      proccess: {}
    };
  },
  methods: {
    readLine() {
      return inputString[currentLine++];
    },
    // Complete the gameOfStones function below.
    gameOfStones(n) {},
    main() {
      let process = this.process;
      const ws = fs.createWriteStream(process.env.OUTPUT_PATH);

      const t = parseInt(readLine(), 10);

      for (let tItr = 0; tItr < t; tItr++) {
        const n = parseInt(readLine(), 10);

        let result = gameOfStones(n);

        ws.write(result + "\n");
      }

      ws.end();
    }
  },
  mounted() {
    switch (key) {
      case value:
        break;

      default:
        break;
    }
  }
};
</script>

<style lang="scss">
</style>
