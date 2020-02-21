<template>
<li>
    <div class="playlist-add">
        <img src="/images/playlist.svg" alt="">
        <input type="text" @keyup="enter" v-model="val">
    </div>
</li>
</template>

<script>
export default {
    data: function(){
        return{
            val: null
        }
    },
    props: {
        playlist: Array
    },
    mounted: function(){
        document.querySelector('.playlist-add input').focus();
        document.querySelector('.menu-wrapper').scrollTop = 10000;
    },
    methods:{
        enter: function(e){
            if(event.keyCode == 13){
                if(this.val){
                    this.playlist.push({
                        id: new Date().getTime(),
                        title: this.val,
                        slug: this.val
                    });
                    this.val = null;
                    this.$emit('hide');
                }
                else{
                    this.val = null;
                    this.$emit('hide');
                }
            }
        }
    }
}
</script>