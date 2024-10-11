<?php
get_header();
/* Template name: Calculator */
?>
<section class="calc-block calc-section">
    <div class="wrapper">
        <div class="calc-content">
            <div class="calc-left">
                <div class="calc-step" data-calc-types="checkTypes">
                    <h5 class="step-title"><span></span>Оберіть тип сайту</h5>
                    <div class="radio-block w-100"> <input type="radio" id="radio-calc-1" name="typeSite" class="quiz-radio" value="700" checked="checked" data-calc-type="e-commerce"> <label for="radio-calc-1"><span class="circle"></span>Інтернет-магазин</label> <a href="rozrobka-sajtiv/internet-magazin"> Детальніше </a> </div>
                    <div class="radio-block w-100"> <input type="radio" id="radio-calc-2" name="typeSite" class="quiz-radio" value="300" data-calc-type="corporate"> <label for="radio-calc-2"><span class="circle"></span>Сайт для компанії</label> <a href="rozrobka-sajtiv/korporativnij-sajt"> Детальніше </a> </div>
                    <div class="radio-block w-100"> <input type="radio" id="radio-calc-3" name="typeSite" class="quiz-radio" value="300" data-calc-type="landing"> <label for="radio-calc-3"><span class="circle"></span>landing-page</label> <a href="rozrobka-sajtiv/landing-page"> Детальніше </a> </div>
                </div>
                <div class="calc-step">
                    <h5 class="step-title"><span></span>Оберіть тип дизайну</h5>
                    <div class="radio-block w-100"> <input type="radio" id="radio-calc-6" name="typeDesign" class="quiz-radio" value="0" checked="checked"> <label for="radio-calc-6"><span class="circle"></span>Шаблонний</label> </div>
                    <div class="radio-block w-100"> <input type="radio" id="radio-calc-7" name="typeDesign" class="quiz-radio" value="200"> <label for="radio-calc-7"><span class="circle"></span>Індивидуальний</label> </div>
                </div>
                <div class="calc-step">
                    <h5 class="step-title"> <span></span>Оберіть варіанти дизайну </h5>
                    <div class="radio-block w-100"> <input type="radio" id="radio-calc-9" name="countTemplate" class="quiz-radio" value="-40" checked="checked"> <label for="radio-calc-9"><span class="circle"></span>1 – ПК або мобайл</label> </div>
                    <div class="radio-block w-100"> <input type="radio" id="radio-calc-10" name="countTemplate" class="quiz-radio" value="0"> <label for="radio-calc-10"><span class="circle"></span>2 – ПК та мобайл</label> </div>
                    <div class="radio-block w-100"> <input type="radio" id="radio-calc-11" name="countTemplate" class="quiz-radio" value="20"> <label for="radio-calc-11"><span class="circle"></span>3 – ПК, мобайл та планшет</label> </div>
                    <div class="radio-block w-100"> <input type="radio" id="radio-calc-12" name="countTemplate" class="quiz-radio" value="50"> <label for="radio-calc-12"><span class="circle"></span>4 та більше розширень</label> </div>
                </div>
                <div class="calc-step">
                    <h5 class="step-title"> <span></span>Оберіть кількість мов </h5>
                    <div class="radio-block w-100"> <input type="radio" id="radio-calc-13" name="cms" class="quiz-radio" value="0" checked="checked"> <label for="radio-calc-13"><span class="circle"></span>1 мова</label> </div>
                    <div class="radio-block w-100"> <input type="radio" id="radio-calc-14" name="cms" class="quiz-radio" value="100"> <label for="radio-calc-14"><span class="circle"></span>Багатомовність</label> </div>
                </div>
                <div class="calc-step step-100 d-flex" data-calc-title="additiolalFunc">
                    <h5 class="step-title"> <span></span> Оберіть додатковий функціонал </h5>
                    <!-- <div class="checkbox-block w-30 show"> <input type="checkbox" id="checkbox-calc-1" name="additiolal-1" class="quiz-checkbox" value="50"> <label for="checkbox-calc-1"><span class="circle"></span>Налаштування Google Analytics</label> </div> -->
                    <!-- <div class="checkbox-block w-30 show"> <input type="checkbox" id="checkbox-calc-2" name="additiolal-2" class="quiz-checkbox" value="1200"> <label for="checkbox-calc-2"><span class="circle"></span>Зв'язування сайту з Facebook Pixel</label> </div> -->
                    <div class="checkbox-block w-30 hide"> <input type="checkbox" id="checkbox-calc-4" name="additiolal-4" class="quiz-checkbox" data-show="e-commerce" value="40"> <label for="checkbox-calc-4"><span class="circle"></span>Інтеграція Нової Пошти</label> </div>
                    <div class="checkbox-block w-30 show"> <input type="checkbox" id="checkbox-calc-5" name="additiolal-5" class="quiz-checkbox" value="100"> <label for="checkbox-calc-5"><span class="circle"></span>Синхронізація с CRM</label> </div>
                    <div class="checkbox-block w-30 show"> <input type="checkbox" id="checkbox-calc-6" name="additiolal-6" class="quiz-checkbox" value="100"> <label for="checkbox-calc-6"><span class="circle"></span>Відправка замовлень в Telegram</label> </div>
                    <div class="checkbox-block w-30 show"> <input type="checkbox" id="checkbox-calc-7" name="additiolal-7" class="quiz-checkbox" value="80"> <label for="checkbox-calc-7"><span class="circle"></span>Пошук з автодоповненням</label> </div>
                    <div class="checkbox-block w-30 show"> <input type="checkbox" id="checkbox-calc-8" name="additiolal-8" class="quiz-checkbox" value="50"> <label for="checkbox-calc-8"><span class="circle"></span>Робота з Google Maps API</label> </div>
                    <div class="checkbox-block w-30 show"> <input type="checkbox" id="checkbox-calc-9" name="additiolal-9" class="quiz-checkbox" value="100"> <label for="checkbox-calc-9"><span class="circle"></span>Онлайн консультант</label> </div>
                    <div class="checkbox-block w-30 hide"> <input type="checkbox" id="checkbox-calc-10" name="additiolal-10" class="quiz-checkbox" data-show="e-commerce" value="30"> <label for="checkbox-calc-10"><span class="circle"></span>Оплата LiqPay</label> </div>
                    <div class="checkbox-block w-30 show"> <input type="checkbox" id="checkbox-calc-11" name="additiolal-11" class="quiz-checkbox" value="40"> <label for="checkbox-calc-11"><span class="circle"></span>FAQ</label> </div>
                    <div class="checkbox-block w-30 show"> <input type="checkbox" id="checkbox-calc-12" name="additiolal-12" class="quiz-checkbox" value="100"> <label for="checkbox-calc-12"><span class="circle"></span>Купити в 1 клік</label> </div>
                    <div class="checkbox-block w-30 hide"> <input type="checkbox" id="checkbox-calc-13" name="additiolal-13" class="quiz-checkbox" data-show="e-commerce" value="60"> <label for="checkbox-calc-13"><span class="circle"></span>Бронювання товару</label> </div>
                    <div class="checkbox-block w-30 hide"> <input type="checkbox" id="checkbox-calc-14" name="additiolal-14" class="quiz-checkbox" data-show="e-commerce" value="50"> <label for="checkbox-calc-14"><span class="circle"></span>Відгуки про товар</label> </div>
                    <div class="checkbox-block w-30 hide"> <input type="checkbox" id="checkbox-calc-15" name="additiolal-15" class="quiz-checkbox" data-show="e-commerce" value="80"> <label for="checkbox-calc-15"><span class="circle"></span>Товари, які переглядали</label> </div>
                    <div class="checkbox-block w-30 hide"> <input type="checkbox" id="checkbox-calc-16" name="additiolal-16" class="quiz-checkbox" data-show="e-commerce" value="100"> <label for="checkbox-calc-16"><span class="circle"></span>Швидкий перегляд товару</label> </div>
                    <div class="checkbox-block w-30 show"> <input type="checkbox" id="checkbox-calc-17" name="additiolal-17" class="quiz-checkbox" value="60"> <label for="checkbox-calc-17"><span class="circle"></span>Фільтрація</label> </div>
                    <div class="checkbox-block w-30 hide"> <input type="checkbox" id="checkbox-calc-18" name="additiolal-18" class="quiz-checkbox" data-show="e-commerce" value="100"> <label for="checkbox-calc-18"><span class="circle"></span>Порівняння товарів</label> </div>
                    <div class="checkbox-block w-30 hide"> <input type="checkbox" id="checkbox-calc-19" name="additiolal-19" class="quiz-checkbox" data-show="e-commerce" value="50"> <label for="checkbox-calc-19"><span class="circle"></span>Збережені товари</label> </div>
                    <div class="checkbox-block w-30 show"> <input type="checkbox" id="checkbox-calc-20" name="additiolal-20" class="quiz-checkbox" value="50"> <label for="checkbox-calc-20"><span class="circle"></span>Оптові ціни</label> </div>
                    <div class="checkbox-block w-30 hide"> <input type="checkbox" id="checkbox-calc-21" name="additiolal-21" class="quiz-checkbox" data-show="e-commerce" value="80"> <label for="checkbox-calc-21"><span class="circle"></span>Модифікація товару</label> </div>
                    <div class="checkbox-block w-30 hide"> <input type="checkbox" id="checkbox-calc-22" name="additiolal-22" class="quiz-checkbox" data-show="e-commerce" value="150"> <label for="checkbox-calc-22"><span class="circle"></span>Особистий кабінет</label> </div>
                </div>
                <div class="calc-step step-100 d-flex" data-calc-title="additiolalServices">
                    <h5 class="step-title"> <span></span> Чи потрібні вам додаткові послуги? </h5>
                    <div class="checkbox-block w-30"> <input type="checkbox" id="additional-service-1" name="additional-service-1" class="quiz-checkbox" value="50"> <label for="additional-service-1"><span class="circle"></span>Налаштування Google Analytics</label> </div>
                    <div class="checkbox-block w-30"> <input type="checkbox" id="additional-service-2" name="additional-service-2" class="quiz-checkbox" value="50"> <label for="additional-service-2"><span class="circle"></span>SEO-підготовка</label> </div>
                    <!-- <div class="checkbox-block w-30"> <input type="checkbox" id="additional-service-3" name="additional-service-3" class="quiz-checkbox" value="10000"> <label for="additional-service-3"><span class="circle"></span>Прототип сайту</label> </div> -->
                    <div class="checkbox-block w-30"> <input type="checkbox" id="additional-service-4" name="additional-service-4" class="quiz-checkbox" value="50"> <label for="additional-service-4"><span class="circle"></span>Внутрішня SEO-оптимізація</label> </div>
                    <div class="checkbox-block w-30"> <input type="checkbox" id="additional-service-5" name="additional-service-5" class="quiz-checkbox" value="50"> <label for="additional-service-5"><span class="circle"></span>Оптимізація швидкості завантаження</label> </div>
                    <!-- <div class="checkbox-block w-30"> <input type="checkbox" id="additional-service-6" name="additional-service-6" class="quiz-checkbox" value="6000"> <label for="additional-service-6"><span class="circle"></span>Створення карти користувача</label> </div> -->
                </div>
            </div>
            <div class="calc-right">
                <div class="pin-spacer">
                    <div class="calc-fix">
                        <h5 class="calc-title">Вартість створення сайту:</h5>
                        <p class="calc-price"><span>2&nbsp;400</span> $</p>
                        <div class="calc-other-price">
                            <p>Вартість додаткових послуг:</p>
                            <p><span>0</span> $</p>
                        </div> <button class="btn btn-orange size-big" data-action="modal" data-target="fixPrice"> Прорахувати точну вартість </button>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>