<div id="aviapark"
    class="content-center">

    <h1 class="h1_line">
        Наш авиапарк
    </h1>

    <div class="aviapark-controls">
        <div @click="avia_page = 'low'" :class="{'active': avia_page == 'low'}">
            Малый класс
        </div>
        <div @click="avia_page = 'middle'" :class="{'active': avia_page == 'middle'}">
            Средний класс
        </div>
        <div @click="avia_page = 'big'" :class="{'active': avia_page == 'big'}">
            Большой класс
        </div>
    </div>

    <div v-show="avia_page == 'low'">
        @include('blocks.aviapark.low')
    </div>

    <div v-show="avia_page == 'middle'">
        @include('blocks.aviapark.middle')
    </div>

    <div v-show="avia_page == 'big'">
        @include('blocks.aviapark.big')
    </div>

</div>
