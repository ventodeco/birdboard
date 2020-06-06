<template>
    <div class="mr-8 flex items-center">
        <button 
            class="rounded-full w-4 h-4 border border-gray-900 mr-2 focus:outline-none" 
            style="background: #fff" 
            @click="selectedTheme = theme-light"></button>
        <button 
            class="rounded-full w-4 h-4 border border-gray-900 mr-2 focus:outline-none" 
            style="background: #222" 
            @click="selectedTheme = theme-dark"></button>
    </div>
</template>

<script>
    export default {
        data() {
            returnselectedTheme: 'theme-light'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        },

        watch: {
            selectedTheme(){
                document.body.className = document.body.className.replace(/theme-\w+/, this.selectedTheme);
            }
        }
    }
</script>
