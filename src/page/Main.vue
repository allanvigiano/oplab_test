<template>
  <main role="main" class="container">
    <div class="jumbotron">
      <h1>This is my applicant program</h1>
      <p class="lead">
        I hope you enjoy this litle program! You can execute the required implamentation by clicking the following buttons:
      </p>

      <p>
        <button
        type="button"
        class="btn btn-secondary btn-lg"
        data-toggle="modal"
        data-target="#staticBackdrop"
        @click='currentModalContent = "bubble-sort"; modalTitle = "Bubble Sort"'
      >General 1 - Implement bubble sort</button>
      </p>

      <p>
        <button
        type="button"
        class="btn btn-secondary btn-lg"
        data-toggle="modal"
        data-target="#staticBackdrop"
        @click='currentModalContent = "linked-list"; modalTitle = "Linked List"' 
      >General 2 - Implement a linked list</button>
      </p>

      <p>
        <button
        type="button"
        class="btn btn-secondary btn-lg"
        data-toggle="modal"
        data-target="#staticBackdrop"
        @click='currentModalContent = "game-of-stones"; modalTitle = "Game of Stones"' 
      >General 3 - Implement the gameOfStones algorithm</button>
      </p>
      <p>
        <button
        type="button"
        class="btn btn-secondary btn-lg"
        data-toggle="modal"
        data-target="#staticBackdrop"
        @click='currentModalContent = "twitter-api"; modalTitle = "Twitter API"' 
      >General 4 -Twitter API</button>
      </p>      
      
    </div>
    
    <!-- Modal who will recive a component selected on button-->
    <div
      class="modal fade"
      id="staticBackdrop"
      data-backdrop="static"
      tabindex="-1"
      role="dialog"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">{{modalTitle}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="onCloseModal(currentModalContent)">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <component v-bind:is="currentModalContent"></component>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import BubbleSort from "../general/BubbleSort.vue";
import LinkedList from '../general/LinkedList.vue';
import GameOfStones from '../general/GameOfStones.vue';
import TwitterApi from '../general/TwitterApi.vue';
export default {
  name: "app",
  components: {
    "bubble-sort": BubbleSort,
    "linked-list": LinkedList,
    "game-of-stones": GameOfStones,
    "twitter-api": TwitterApi,
  },
  data() {
    return {
      modalTitle: '',
      currentModalContent: ''
    };
  },
  methods:{
    onCloseModal(currentModalContent) {
      
    }
  }
};
</script>

<style lang="scss">
</style>
