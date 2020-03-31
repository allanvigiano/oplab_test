<template>
  <div class="card">
    <div class="card-header">Linked List</div>
    <div class="card-body">
      <p class="card-text">
        {{ viewList }}
        <!-- <button type="button" class="btn btn-link" @click="onShowNext(firstNode)">Show next</button> -->
      </p>

      <div class="input-group mb-2">
        <input
          type="text"
          class="form-control"
          placeholder="Insert a number to delete"
          aria-label="Insert a number to delete"
          aria-describedby="button-addon2"
          v-model="key"
        />
        <div class="input-group-append">
          <button
            class="btn btn btn-outline-danger"
            type="button"
            id="button-addon2"
            @click="onRemove(key)"
          >Remove</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
//Importing class definition
import { Node, Data } from "../classes.js";
export default {
  name: "linked-list",
  components: {},
  data() {
    return {
      key: "",
      fakeValues: [2, 26, 23, 24, 9, 68, 7, 59, 16, 31],
      firstNode: new Node(new Data(0))
    };
  },
  methods: {
    onRemove(value) {
      let auxNode = this.firstNode.next;
      let previousNode = this.firstNode;
      let found = false;

      while (auxNode !== null) {
        if (auxNode.data.value == value) {
          found = true;
          break;
        }
        previousNode = auxNode;
        auxNode = auxNode.next;
      }
      if (!found) {
        return false;
      } else {
        previousNode.next = auxNode.next;
        auxNode = null;
        return true;
      }
    },
    onShowNext() {
      alert();
    }
  },
  computed: {
    viewList() {
      let auxNode = this.firstNode.next;
      let strNodes = "";
      while (auxNode !== null) {
        strNodes += auxNode.data.value + " ";
        auxNode = auxNode.next;
      }
      return strNodes;
    }
  },
  created() {
    let currentNode = this.firstNode;
    for (let index = 0; index < this.fakeValues.length; index++) {
      currentNode.next = new Node(new Data(this.fakeValues[index]), null);
      currentNode = currentNode.next;
    }
  }
};
</script>

<style lang="scss">
</style>
