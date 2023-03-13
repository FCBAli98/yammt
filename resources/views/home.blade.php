@extends('layouts.app')

@section('content')
<main>

    <!-- head -->
    <section class="head">
        <div class="head__body _container">
            <div class="head__content">
                <div class="head__text">
                    <h1>“YaMMT” IDAK</h1>
                    <h3>«Yagona milliy mehnat tizimi» idoralararo dasturiy-apparat kompleksini boshqarish direksiyasi</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- system -->
    <section class="system">
        <div class="system__body _container">
            <div class="system__title title">
                <h2>Tizim imkoniyatlari</h2>
            </div>
            <div class="system__content">
                <div class="system__box">
                    <picture><source srcset="img/system/icon-system-1.svg" type="image/webp"><img src="/img/system/icon-system-1.svg" alt="Icon"></picture>
                    <p>mehnat munosabatlarini elektron ro‘yxatdan o‘tkazish</p>
                    <span>01</span>
                </div>
                <div class="system__box">
                    <picture><source srcset="img/system/icon-system-2.svg" type="image/webp"><img src="img/system/icon-system-2.svg" alt="Icon"></picture>
                    <p>mehnat resurslarining balansi (markazlashgan hisobi)</p>
                    <span>02</span>
                </div>
                <div class="system__box">
                    <picture><source srcset="img/system/icon-system-3.svg" type="image/webp"><img src="img/system/icon-system-3.svg" alt="Icon"></picture>
                    <p>bo‘sh ish o‘rinlari bazasini avtomatik shakllantirish</p>
                    <span>03</span>
                </div>
                <div class="system__box">
                    <picture><source srcset="img/system/icon-system-4.svg" type="image/webp"><img src="img/system/icon-system-4.svg" alt="Icon"></picture>
                    <p>aholi bandligini monitoring qilish, shuningdek ish joylarini attestatsiyadan o‘tkazish natijalari</p>
                    <span>04</span>
                </div>
                <div class="system__box">
                    <picture><source srcset="img/system/icon-system-5.svg" type="image/webp"><img src="img/system/icon-system-5.svg" alt="Icon"></picture>
                    <p>hududlar kesimida rasmiy va norasmiy mehnat bozori haqida batafsil hisobotlar</p>
                    <span>05</span>
                </div>
                <div class="system__box">
                    <picture><source srcset="img/system/icon-system-6.svg" type="image/webp"><img src="img/system/icon-system-6.svg" alt="Icon"></picture>
                    <p>mehnat bozori ko‘rsatkichlari dinamikasini shakllantirish uchun idoralararo ma’lumotlar almashuvi</p>
                    <span>06</span>
                </div>
                <div class="system__box">
                    <picture><source srcset="img/system/icon-system-7.svg" type="image/webp"><img src="img/system/icon-system-7.svg" alt="Icon"></picture>
                    <p>“ARGOS” axborot tizimi bilan integratsiya hamda ma’lumotlar almashuvini o‘rnatish, davlat hizmatchilari ma’lumotlar bazasini shakllantirish</p>
                    <span>07</span>
                </div>
                <div class="system__box">
                    <picture><source srcset="img/system/icon-system-8.svg" type="image/webp"><img src="img/system/icon-system-8.svg" alt="Icon"></picture>
                    <p>mehnat bozorining, hududlar, jins va yosh omillari, sohalar va mutaxassisliklar kesimida ishchi kuchiga bo‘lgan talab va taklifning rivojlanish tendentsiyalari prognozini shakllantirish</p>
                    <span>08</span>
                </div>
                <div class="system__box">
                    <picture><source srcset="img/system/icon-system-9.svg" type="image/webp"><img src="img/system/icon-system-9.svg" alt="Icon"></picture>
                    <p>ish staji to‘g‘risidagi elektron ma’lumotlar va Davlat soliq qo‘mitasining ma’lumotlar bazasi orqali verifikatsiya qilingan ish haqi to‘g‘risidagi ma’lumotlar asosida davlat pensiyalarini tayinlash</p>
                    <span>09</span>
                </div>
            </div>
    </section>

    <!-- employer -->
    <section class="slide employer">
        <div class="slide__body _container">
            <div class="slide__title title">
                <h2>Ish beruvchi uchun imkoniyatlar</h2>
            </div>
            <div class="slide__content">
                <div class="employer__swiper">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide__box">
                                    <div class="slide__img">
                                        <picture><source srcset="img/employer/icon-employer-1.svg" type="image/webp"><img src="img/employer/icon-employer-1.svg" alt="Icon"></picture>
                                    </div>
                                    <p>Har bir ish beruvchi shahsiy kabinetiga ega (kirish ERI kaliti orqali amalga oshiriladi);</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide__box">
                                    <div class="slide__img">
                                        <picture><source srcset="img/employer/icon-employer-2.svg" type="image/webp"><img src="img/employer/icon-employer-2.svg" alt="Icon"></picture>
                                    </div>
                                    <p>Shtatlar jadvaliga (tashkilot tuzilmasi) asosan bo‘lim hamda ish o‘rinlarini shakllantirish;</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide__box">
                                    <div class="slide__img">
                                        <picture><source srcset="img/employer/icon-employer-3.svg" type="image/webp"><img src="img/employer/icon-employer-3.svg" alt="Icon"></picture>
                                    </div>
                                    <p>Mehnat shartnomasi, unga kiritilgan o‘zgartirishlar hamda shartnoma bekor qilinishini elektron ro‘yxatdan o‘tkazish;</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide__box">
                                    <div class="slide__img">
                                        <picture><source srcset="img/employer/icon-employer-2.svg" type="image/webp"><img src="img/employer/icon-employer-2.svg" alt="Icon"></picture>
                                    </div>
                                    <p>Mehnat shartnomasi, unga kiritilgan o‘zgartirishlar hamda shartnoma bekor qilinishini elektron ro‘yxatdan o‘tkazish;</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide__box">
                                    <div class="slide__img">
                                        <picture><source srcset="img/employer/icon-employer-1.svg" type="image/webp"><img src="img/employer/icon-employer-1.svg" alt="Icon"></picture>
                                    </div>
                                    <p>Har bir ish beruvchi shahsiy kabinetiga ega (kirish ERI kaliti orqali amalga oshiriladi);</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev employer-prev _icon-arrow-down"></div>
                    <div class="swiper-button-next employer-next _icon-arrow-down"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- worker -->
    <section class="slide worker">
        <div class="slide__body _container">
            <div class="slide__title title">
                <h2>Xodim uchun imkoniyatlar</h2>
            </div>
            <div class="slide__content">
                <div class="worker__swiper">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide__box">
                                    <div class="slide__img">
                                        <picture><source srcset="img/worker/icon-worker-1.svg" type="image/webp"><img src="img/worker/icon-worker-1.svg" alt="Icon"></picture>
                                    </div>
                                    <p>Davlat xizmatlaridan foydalanish uchun elektron mehnat daftarcha ma’lumotlaridan foydalanish;</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide__box">
                                    <div class="slide__img">
                                        <picture><source srcset="img/worker/icon-worker-2.svg" type="image/webp"><img src="img/worker/icon-worker-2.svg" alt="Icon"></picture>
                                    </div>
                                    <p>Mustaqil ravishda elektron mehnat daftarchadan ko‘chirma hamda rezyume yuklab olish;</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide__box">
                                    <div class="slide__img">
                                        <picture><source srcset="img/worker/icon-worker-3.svg" type="image/webp"><img src="img/worker/icon-worker-3.svg" alt="Icon"></picture>
                                    </div>
                                    <p>Mehnat daftarchadagi mavjud hatolik bo‘yicha ish beruvchiga xabar berish;</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide__box">
                                    <div class="slide__img">
                                        <picture><source srcset="img/worker/icon-worker-1.svg" type="image/webp"><img src="img/worker/icon-worker-1.svg" alt="Icon"></picture>
                                    </div>
                                    <p>Mehnat shartnomasi, unga kiritilgan o‘zgartirishlar hamda shartnoma bekor qilinishini elektron ro‘yxatdan o‘tkazish;</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide__box">
                                    <div class="slide__img">
                                        <picture><source srcset="img/worker/icon-worker-2.svg" type="image/webp"><img src="img/worker/icon-worker-2.svg" alt="Icon"></picture>
                                    </div>
                                    <p>Har bir ish beruvchi shahsiy kabinetiga ega (kirish ERI kaliti orqali amalga oshiriladi);</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev worker-prev _icon-arrow-down"></div>
                    <div class="swiper-button-next worker-next _icon-arrow-down"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- statistics -->
    <section class="statistics">
        <div class="statistics__body _container">
            <div class="statistics__title title">
                <h2>Statistik ma’lumotlar</h2>
            </div>
            <div class="statistics__content">
                <div class="statistics__map">
                    <picture><source srcset="img/statistics/decor-map.svg" type="image/webp"><img src="img/statistics/decor-map.svg" alt="Map"></picture>
                    <div class="statistics__list">
                        <div class="statistics__item _icon-arrow-right">
                            <span>Vakant ish o‘rinlari: <strong>270 639</strong>, shundan:</span>
                        </div>
                        <div class="statistics__item">
                            <span>Davlat tashkilotlarida: <strong>99 966</strong></span>
                        </div>
                        <div class="statistics__item">
                            <span>Xususiy sub’ektlarda: <strong>170 673</strong></span>
                        </div>
                    </div>
                </div>
                <div class="statistics__cards">
                    <div class="statistics__box">
                        <div class="statistics__img">
                            <picture><source srcset="img/statistics/icon-statistics-1.svg" type="image/webp"><img src="img/statistics/icon-statistics-1.svg" alt="Icon"></picture>
                        </div>
                        <p>Ro‘yxatdan o‘tgan yuridik shaxslar (ish beruvchilar) soni: <strong>650 277</strong> ta</p>
                    </div>
                    <div class="statistics__box">
                        <div class="statistics__img">
                            <picture><source srcset="img/statistics/icon-statistics-2.svg" type="image/webp"><img src="img/statistics/icon-statistics-2.svg" alt="Icon"></picture>
                        </div>
                        <p>Ro‘yxatdan o‘tgan jismoniy shaxslar soni: <strong>5 036 589</strong> ta</p>
                    </div>
                    <div class="statistics__box">
                        <div class="statistics__img">
                            <picture><source srcset="img/statistics/icon-statistics-3.svg" type="image/webp"><img src="img/statistics/icon-statistics-3.svg" alt="Icon"></picture>
                        </div>
                        <p>Ro‘yxatdan o‘tgan jismoniy shaxslar bilan tuzilgan mehnat shartnomalar soni: <strong>5 395 426</strong> ta</p>
                    </div>
                    <div class="statistics__box">
                        <div class="statistics__img">
                            <picture><source srcset="img/statistics/icon-statistics-4.svg" type="image/webp"><img src="img/statistics/icon-statistics-4.svg" alt="Icon"></picture>
                        </div>
                        <p>Elektron mehnat daftarchalari shakllantirildi: <strong>5 036 589</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- person -->
    <section class="person">
        <div class="person__body _container">
            <div class="person__content">
                <div class="person__box">
                    <picture><source srcset="img/person/icon-person-1.svg" type="image/webp"><img src="img/person/icon-person-1.svg" alt="Icon"></picture>
                    <p>Erkak xodimlar soni: <strong>2 729 905</strong></p>
                </div>
                <div class="person__box">
                    <picture><source srcset="img/person/icon-person-2.svg" type="image/webp"><img src="img/person/icon-person-2.svg" alt="Icon"></picture>
                    <p>Ayol xodimlar soni: <strong>2 306 732</strong></p>
                </div>
                <div class="person__box">
                    <picture><source srcset="img/person/icon-person-3.svg" type="image/webp"><img src="img/person/icon-person-3.svg" alt="Icon"></picture>
                    <p>Ishlovchi pensionerlar soni: <strong>1 785 076</strong></p>
                </div>
                <div class="person__box">
                    <picture><source srcset="img/person/icon-person-4.svg" type="image/webp"><img src="img/person/icon-person-4.svg" alt="Icon"></picture>
                    <p>Ishlovchi talabalar soni: <strong>107 003</strong></p>
                </div>
                <div class="person__box">
                    <picture><source srcset="img/person/icon-person-5.svg" type="image/webp"><img src="img/person/icon-person-5.svg" alt="Icon"></picture>
                    <p>18-30 yoshdagi ishchi-xodimlar soni: <strong>1 289 926</strong></p>
                </div>
            </div>
        </div>
    </section>

    <!-- base -->
    <section class="base">
        <div class="base__body _container">
            <div class="base__title title">
                <h2>Yagona milliy mehnat tizimi</h2>
                <h3>bilan integratsiya qilingan davlat organlari axborot tizimlari:</h3>
            </div>
            <div class="base__content">
                <div class="base__text">
                    <strong>YaMMT</strong>
                    <h3>Yagona milliy mehnat tizimi</h3>
                </div>
                <div class="base__wrap">
                    <div class="base__box">
                        <picture><source srcset="img/base/decor-base.svg" type="image/webp"><img src="img/base/decor-base.svg" alt="Decor"></picture>
                        <p>Davlat soliq ko‘mitasi ma’lumotlar bazasi</p>
                    </div>
                    <div class="base__box">
                        <picture><source srcset="img/base/decor-base.svg" type="image/webp"><img src="img/base/decor-base.svg" alt="Decor"></picture>
                        <p>Davlat personallashtirish markazi</p>
                    </div>
                    <div class="base__box">
                        <picture><source srcset="img/base/decor-base.svg" type="image/webp"><img src="img/base/decor-base.svg" alt="Decor"></picture>
                        <p>Davlat statistika qo‘mitasi ma’lumotlar bazasi</p>
                    </div>
                    <div class="base__box">
                        <picture><source srcset="img/base/decor-base.svg" type="image/webp"><img src="img/base/decor-base.svg" alt="Decor"></picture>
                        <p>Moliya vazirligi</p>
                    </div>
                    <div class="base__box">
                        <picture><source srcset="img/base/decor-base.svg" type="image/webp"><img src="img/base/decor-base.svg" alt="Decor"></picture>
                        <p>Byudjetdan tashqari pensiya jamg‘armasi ma’lumotlar bazasi</p>
                    </div>
                    <div class="base__box">
                        <picture><source srcset="img/base/decor-base.svg" type="image/webp"><img src="img/base/decor-base.svg" alt="Decor"></picture>
                        <p>Xalq banki ma’lumotlar bazasi</p>
                    </div>
                    <div class="base__box">
                        <picture><source srcset="img/base/decor-base.svg" type="image/webp"><img src="img/base/decor-base.svg" alt="Decor"></picture>
                        <p>“O‘zarxiv” agentligi</p>
                    </div>
                    <div class="base__box">
                        <picture><source srcset="img/base/decor-base.svg" type="image/webp"><img src="img/base/decor-base.svg" alt="Decor"></picture>
                        <p>Xalq ta’limi vazirligi</p>
                    </div>
                    <div class="base__box">
                        <picture><source srcset="img/base/decor-base.svg" type="image/webp"><img src="img/base/decor-base.svg" alt="Decor"></picture>
                        <p>Oliy va o‘rta maxsus ta’lim vazirligi</p>
                    </div>
                    <div class="base__box">
                        <picture><source srcset="img/base/decor-base.svg" type="image/webp"><img src="img/base/decor-base.svg" alt="Decor"></picture>
                        <p>“ARGOS” axborot tizimi</p>
                    </div>
                    <div class="base__box">
                        <picture><source srcset="img/base/decor-base.svg" type="image/webp"><img src="img/base/decor-base.svg" alt="Decor"></picture>
                        <p>Sog‘liqni saqlash vazirligi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
