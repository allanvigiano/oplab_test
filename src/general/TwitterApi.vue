<template>
  <div class="card">
    <div class="card-header">10 tweets search</div>
    <div class="card-body">
      <div class="input-group mb-2">
        <input
          type="text"
          class="form-control"
          placeholder="Insert a word"
          aria-label="Insert a word"
          aria-describedby="button-addon2"
          v-model="word"
          v-on:keydown.enter="onSearch(word)"
        />
        <div class="input-group-append">
          <button
            class="btn btn-secondary"
            type="button"
            id="button-addon2"
            @click="onSearch(word)"
          >Search</button>
        </div>
      </div>
      <div class="card mb-3" style="max-width: 540px;" v-bind:key="i" v-for="(item, i) in tweets">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img :src="item.profile_img" class="card-img" alt="" />
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{item.name}}</h5>
              <p class="card-text" > {{item.text}}</p>
              <p class="card-text">
                <small class="text-muted">{{item.created_at}}</small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
import VueAxios from "vue-axios";
export default {
  name: "twitter-api",
  components: {},
  data() {
    return {
      word: "",
      tweets: []
    };
  },
  methods: {
    onSearch(word) {
      let newTweets = [];
      this.tweets = null;
      this.tweets = newTweets;
      axios
        .get("http://localhost:8000/q=" + word + "&count=10")
        .then(response => {
          for (let i = 0; i < response.data.statuses.length; i++) {
            let tweet = response.data.statuses[i];

            this.tweets.push({
              name: tweet.user.name,
              text: tweet.text,
              profile_img: tweet.user.profile_image_url,
              created_at: tweet.user.created_at
            });
          }
        });
    }
  },
  mounted() {}
};
</script>

<style lang="scss">
</style>
