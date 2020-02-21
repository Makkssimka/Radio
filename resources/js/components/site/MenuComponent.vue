<template>
    <div class="menu-wrapper">
        <div class="logo-wrapper">
            <img src="/images/logo.svg" alt="">
            <div class="text-logo">
                <p>Radio</p>
                <p>Play</p>
            </div>
        </div>
        <ul class="list-menu">
            <li class="head-list">Станции</li>
            <li v-for="item in stations" :key="item.id">
                <a href="#">
                    <img :src="'/images/'+item.icon+'.svg'" alt="">
                    {{ item.title }}
                </a>
            </li>
        </ul>
        <ul class="list-menu">
            <li class="head-list">Плейлисты<span @click="playlistShow">+</span></li>
            <li>
                <a href="#">
                    <img src="/images/popular.svg" alt="">
                    Популярное
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="/images/new.svg" alt="">
                    Новое
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="/images/playlist.svg" alt="">
                    Ваш плейлист
                </a>
            </li>
            <li v-for="item in playlist" :key="item.id">
                <a href="#">
                    <img src="/images/playlist.svg" alt="">
                    {{ item.title }}
                    <span v-html="iconDel" @click.prevent="removePlaylist(item.id)"></span>
                </a>
            </li>
            <playlist-allert-component 
                v-if="playlistAddShow" 
                :playlist="playlist"
                @hide="playlistShow">
            </playlist-allert-component>
        </ul>
    </div>
</template>

<script>
export default {
    data: function(){
        return {
            stations: [
                {
                    id: 1,
                    title: 'Поп музыка',
                    slug: 'pop-music',
                    icon: 'pop'
                },{
                    id: 2,
                    title: 'Рок музыка',
                    slug: 'rock-music',
                    icon: 'rock'
                },{
                    id: 3,
                    title: 'Ретро музыка',
                    slug: 'retro-music',
                    icon: 'retro'
                },{
                    id: 4,
                    title: 'Танцевальные',
                    slug: 'dance',
                    icon: 'dance'
                },{
                    id: 5,
                    title: 'Шансон',
                    slug: 'shanson',
                    icon: 'shanson'
                },{
                    id: 6,
                    title: 'Юмор',
                    slug: 'humor',
                    icon: 'humor'
                }
            ],
            playlist: [],
            playlistAddShow: false,
            iconDel: feather.icons.x.toSvg()
        }
    },
    mounted: function(){
        
    },
    methods: {
        playlistShow: function(){
            this.playlistAddShow = !this.playlistAddShow;
        },
        removePlaylist: function(id){
            let ind = this.playlist.find(element => element.id == id);
            this.playlist.splice(ind, 1);
        }
    }

}
</script>