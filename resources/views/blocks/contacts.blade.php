<div id="contacts"
    class="content-center">
    <h1 class="h1_line">
        Контакты
    </h1>

    <div
    	class="contacts-map">
        <div class="map-overlay">
            <div>
                Адрес: <span class="text-gray">Москва, ул. Мясницкая, 40с1</span>
            </div>
            <div>
                <i class="fas fa-mobile-alt text-gray" style='margin-right: 5px'></i>
                <b>+7 495 6629520</b>
            </div>
            <div style='margin-left: 17px'>
                <b></b>
            </div>
            <div style='margin-left: 17px'>
                <a href='#'>info@erdmanjets.ru</a>
            </div>
        </div>
        <div style='width: 100%; height: 400px' id='gmap'></div>
    </div>

    <div
    	class="contacts-form">
    	<form>
            <div v-show="!request_sent">
                <h3>
        			НАПИСАТЬ НАМ
        		</h3>

        			<div style='width: 250px'
        				class="from-row">
        				<input v-model="request.name"
        					type="text"
        					class="input-text"
        					placeholder="Представьтесь"
        				/>
        			</div>

        			<div style='width: 250px'
        				class="from-row">
        				<input
        					type="text"
        					class="input-text input-phone-mask"
        					placeholder="+7 (___) ___-__-__"
                            v-mask="'+7 (###) ###-##-##'"
                            v-model="request.phone"
        				/>
        			</div>

        			<div style='width: 250px; position: relative'
        				class="from-row">
        				<input v-model="request.email"
        					type="text"
        					class="input-text"
        					placeholder="E-mail"
        				/>
                        <span class="text-gray" style='position: absolute; right: -150px; top: 7px;'>(не обязательно)</span>
        			</div>


        		<div
        			class="from-row">
        			<textarea
        				rows="0"
        				cols="0"
        				class="textarea"
        				placeholder="Ваше сообщение" v-model="request.message"></textarea>
        		</div>

        		<div
        			class="text-center">
        			<button @click.prevent="makeRequest"
        				type="button"
        				class="button">
        				Отправить
        			</button>
        		</div>
            </div>
            <div v-show="request_sent">
                <h3 class="request-sent">Сообщение отправлено!</h3>
            </div>
    	</form>
    </div>
</div>
