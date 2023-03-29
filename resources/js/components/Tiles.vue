<template>
    <p>
        Spelers wij:
    </p>
    <div class="flex w-full flex-wrap gap-4 items-end">
        <div class="c-button"
             v-for="(player, index) in players"
             @click="togglePlayerWij(player.id)"
             :class="{
                 'c-button__green': selectedPlayersWij.includes(player.id),
                 'c-button__gray': !selectedPlayersWij.includes(player.id),
                 'c-button__red': selectedPlayersZij.includes(player.id),
                 }"
             :key="index">
            {{ player.Verkortenaam }}
        </div>
    </div>
    <p class="mt-4">
        Spelers zij:
    </p>
    <div class="flex w-full flex-wrap gap-4 items-end">
        <div class="c-button"
             v-for="(player, index) in players"
             @click="togglePlayerZij(player.id)"
             :class="{
                 'c-button__green': selectedPlayersZij.includes(player.id),
                 'c-button__gray': !selectedPlayersZij.includes(player.id),
                 'c-button__red': selectedPlayersWij.includes(player.id),
                 }"
             :key="index">
            {{ player.Verkortenaam }}
        </div>
    </div>
    <input type="hidden" name="speler1" :value="selectedPlayersWij[0] ? selectedPlayersWij[0] : ''">
    <input type="hidden" name="speler2" :value="selectedPlayersWij[1] ? selectedPlayersWij[1] : ''">
    <input type="hidden" name="speler3" :value="selectedPlayersWij[2] ? selectedPlayersWij[2] : ''">
    <input type="hidden" name="speler4" :value="selectedPlayersZij[0] ? selectedPlayersZij[0] : ''">
    <input type="hidden" name="speler5" :value="selectedPlayersZij[1] ? selectedPlayersZij[1] : ''">
    <input type="hidden" name="speler6" :value="selectedPlayersZij[2] ? selectedPlayersZij[2] : ''">
</template>
<script setup lang="ts">
import {defineProps, onMounted, ref} from "vue";

const props = defineProps({
    players: {
        type: Object,
        required: true
    },
    selectedWij: {
        type: Array
    },
    selectedZij: {
        type: Array
    }
})

const selectedPlayersWij = ref([])
const selectedPlayersZij = ref([])

onMounted(() => {
    if(props.selectedWij && props.selectedZij) {
        selectedPlayersWij.value = props.selectedWij
        selectedPlayersZij.value = props.selectedZij
    }
})

const togglePlayerWij = (player: any) => {
    if (selectedPlayersWij.value.length === 3 && !selectedPlayersWij.value.includes(player)) return;
    if (selectedPlayersZij.value.includes(player)) return;
    selectedPlayersWij.value.includes(player)
        ? selectedPlayersWij.value.splice(selectedPlayersWij.value.indexOf(player), 1)
        : selectedPlayersWij.value.push(player)

}
const togglePlayerZij = (player: any) => {
    if (selectedPlayersZij.value.length === 3 && !selectedPlayersZij.value.includes(player)) return;
    if (selectedPlayersWij.value.includes(player)) return;
    selectedPlayersZij.value.includes(player)
        ? selectedPlayersZij.value.splice(selectedPlayersZij.value.indexOf(player), 1)
        : selectedPlayersZij.value.push(player)
}
</script>
