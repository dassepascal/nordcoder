require('./bootstrap');

import { createApp } from "vue";
import router from "./router";
import PostIndex from "./components/PostIndex.vue";

createApp({
    components:{
        PostIndex

    }

})
.use(router)
.mount('#app');

