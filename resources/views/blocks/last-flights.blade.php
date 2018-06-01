<div
    class="last-flights">
    <div
        class="content-center">

        <h1
            class="h1_line">
            Последние совершенные рейсы
        </h1>

        <div
            class="last-flights-board__wrapper">
            <table
                class="last-flights-board">
                <thead>
                    <tr>
                        <th
                            class="last-flights-board__date">
                            Дата перелёта
                        </th>
                        <th>
                            Страна отправления
                        </th>
                        <th>
                            Страна назначения
                        </th>
                        <th
                            class="last-flights-board__model">
                            Модель самолёта
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div
                                class="last-flights-board__char-wrapper">
                                <span v-for="char in getDate()">@{{ char }}</span>
                            </div>
                        </td>
                        <td
                            colspan="2">
                            <div
                                class="last-flights-board__char-wrapper">
                                <span v-for="char in destinations[0][0]">@{{ char }}</span>
                                <span>-</span>
                                <span v-for="char in destinations[0][1]">@{{ char }}</span>
                            </div>
                        </td>
                        <td>
                            <div
                                class="last-flights-board__char-wrapper">
                                <span>S</span>
                                <span>U</span>
                                <span>J</span>
                                <span>E</span>
                                <span>T</span>
                                <span>1</span>
                                <span>0</span>
                                <span>0</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div
                                class="last-flights-board__char-wrapper">
                                <span v-for="char in getDate(2)">@{{ char }}</span>
                            </div>
                        </td>
                        <td
                            colspan="2">
                            <div
                                class="last-flights-board__char-wrapper">
                                <span v-for="char in destinations[1][0]">@{{ char }}</span>
                                <span>-</span>
                                <span v-for="char in destinations[1][1]">@{{ char }}</span>
                            </div>
                        </td>
                        <td>
                            <div
                                class="last-flights-board__char-wrapper">
                                <span>S</span>
                                <span>U</span>
                                <span>J</span>
                                <span>E</span>
                                <span>T</span>
                                <span>1</span>
                                <span>0</span>
                                <span>0</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div
                                class="last-flights-board__char-wrapper">
                                <span v-for="char in getDate(3)">@{{ char }}</span>
                            </div>
                        </td>
                        <td
                            colspan="2">
                            <div
                                class="last-flights-board__char-wrapper">
                                <span v-for="char in destinations[2][0]">@{{ char }}</span>
                                <span>-</span>
                                <span v-for="char in destinations[2][1]">@{{ char }}</span>
                            </div>
                        </td>
                        <td>
                            <div
                                class="last-flights-board__char-wrapper">
                                <span>S</span>
                                <span>U</span>
                                <span>J</span>
                                <span>E</span>
                                <span>T</span>
                                <span>1</span>
                                <span>0</span>
                                <span>0</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
