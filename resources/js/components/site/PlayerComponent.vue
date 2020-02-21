<template>
<div class="player-wrapper">
    <div class="player-info">
        <div class="player-image">
            <img v-if="station" src="" alt="">
            <img v-else src="/images/default-music.jpg" alt="">
        </div>
    </div>
</div>
</template>

<script>
export default {
    data: function(){
        return {
            station: null
        }
    }

}
</script>