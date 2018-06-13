<div
    class="header-large">

    <header id="header"
        class="header">
        <div
            class="header__wrapper">

            <div
                class="header__left">
                <a
                    title="Erdman Private Jets"
                    class="header__logo"
                    href="/">
                    Erdman Private Jets
                </a>
            </div>

            <ul
                class="header-phone">
                <li
                    class="header-phone__item">
                    +7 (495) 662-95-20
                </li>
                <li
                    class="header-phone__item">
                    info@erdmanjets.ru
                </li>
            </ul>

            <ul
                class="header-menu"> 
                <li
                    class="header-menu__item">
                    <a onclick="scrollMenu('aviapark')"
                        href="#aviapark"
                        title="Парк Самолётов">
                        Парк Самолётов
                    </a>
                </li>
                <li
                    class="header-menu__item">
                    <a onclick="scrollMenu('destinations')"
                        href="#destinations"
                        title="Направления">
                        Направления
                    </a>
                </li>
                <li
                    class="header-menu__item">
                    <a onclick="scrollMenu('services')"
                        href="#services"
                        title="Услуги">
                        Услуги
                    </a>
                </li>
                <li
                    class="header-menu__item">
                    <a onclick="scrollMenu('contacts')"
                        href="#contacts"
                        title="Контакты">
                        Контакты
                    </a>
                </li>
            </ul>

        </div>
    </header>

    <div
        class="header-search">
        <div
            class="header-search__title">
            Оставить заявку на рейс
        </div>

        <h1>
            Быстрый запрос стоимости аренды самолета
        </h1>

        <form v-if="!request_top_sent"
            class="header-search__form">
            <div
                class="from-row from-row_icon from-row_icon-location">
                <input v-model="request_top.from"
                    type="text"
                    class="input-text"
                    placeholder="Откуда"
                />
            </div>
            <div
                class="from-row from-row_icon from-row_icon-location">
                <input v-model="request_top.to"
                    type="text"
                    class="input-text"
                    placeholder="Куда"
                />
            </div>
            
            <div
                class="from-row from-row_icon from-row_icon-calendar">
                <datepicker placeholder="Дата вылета" v-model="request_top.date" :language="ru"></datepicker>
            </div>
           
            <div
                class="input-phone-mask">
                <input v-model="request_top.passengers"
                    type="text"
        					class="input-text input-phone-mask"
        					placeholder="+7 (___) ___-__-__"
                            v-mask="'+7 (###) ###-##-##'"
                            v-model="request.phone"
                />
            </div>
            
            <button @click.prevent="makeRequestTop"
                class="header-search__button">
            </button>
        </form>
        <div v-else>
            <h2 class="request-sent" style='color: white'>Сообщение отправлено!</h2>
        </div>
    </div>

</div>
