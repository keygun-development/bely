<div id="navigation" class="c-header">
    <ul class="hidden md:flex w-full justify-center">
        <x-navigation></x-navigation>
    </ul>
    <div class="flex md:hidden justify-end w-full">
        <mobile-menu
            ref="mobileMenuRef"
        >
            <template v-slot:disclosure="slotProps">
                <div @click="this.$refs.mobileMenuRef.disclose()"
                     class="c-header__bars z-10"
                     :class="slotProps.active ? 'menu-open' : ''">
                    <div class="one"></div>
                    <div class="two my-1"></div>
                    <div class="three"></div>
                </div>
            </template>
            <template #menuopen>
                <div
                    class="absolute top-0 bottom-0 sm:w-4/12 w-8/12 right-0 bg-black h-screen shadow-lg py-20 z-[2]">
                    <div class="flex flex-col">
                        <ul>
                            <x-navigation></x-navigation>
                        </ul>
                    </div>
                </div>
            </template>
        </mobile-menu>
    </div>
    <div class="flex justify-center mt-12 mb-4">
        <h2 class="tracking-[10px] text-2xl font-bold text-white uppercase text-center">
            Tik 'm aan ouwe!
        </h2>
    </div>
</div>
