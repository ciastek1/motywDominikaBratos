<?php
/* Template Name: Strona główna */
get_header();
?>
<section id="hero" class="hero" style="background: linear-gradient(rgba(104, 92, 92, 0.8), rgba(44, 62, 80, 0.8)), url('<?php echo get_template_directory_uri(); ?>/assets/images/zdjecie1.jpg') center/cover no-repeat;">
    <div class="container hero-content">
        <h1><?php echo (get_bloginfo('name')); ?></h1>
        <p><?php echo (get_bloginfo('description')); ?></p>
        <a href="#offers" class="btn">Sprawdź ofertę</a>
    </div>
</section>
<!-- O nas -->
<section id="about" class="container">
    <h2>O nas</h2>
    <div class="about-grid">
        <div class="about-text">
            <p>Nasza księgarnia to wrota do nowej przestrzeni, przestrzeni przepełnionej beztroską chwilą, wypoczynkiem i odcięciem się od rzeczywistości... książki, ebooki oraz audiobooki to coś więcej dla nas niż papier czy słuchawki, to świat który okazuje nam coś innego niż zwyczajna rutyna człowieka.</p>
        </div>
        <div class="about-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/zdjecie2.jpg" alt="wnętrze księgarni">
        </div>
    </div>
</section>

<!-- Oferta -->
<section id="offers" class="container">
    <h2>Nasze propozycje</h2>
    <div class="offers-grid">
        <article class="card">
            <div class="emoji" aria-hidden="true">📕</div>
            <h3>Książki drukowane</h3>
            <p>Literatura piękna, kryminały, reportaże, poezja – ponad 10 000 tytułów w magazynie.</p>
        </article>
        <article class="card">
            <div class="emoji" aria-hidden="true">📱</div>
            <h3>E-booki</h3>
            <p>Bestsellery w formatach EPUB, MOBI i PDF.</p>
        </article>
        <article class="card">
            <div class="emoji" aria-hidden="true">🎧</div>
            <h3>Audiobooki</h3>
            <p>Dla tych, którzy lubią słuchać – w drodze, na spacerze.</p>
        </article>
    </div>
</section>

<!-- Kontakt -->
<section id="contact" class="container">
    <h2>Kontakt'</h2>
    <div class="contact-grid">
        <div class="contact-info">
            <p><strong><?php bloginfo('name'); ?></strong><br> 
            ul. Grzybowska 12<br>
            00-132 Warszawa</p>
            <p>📞 22 123 45 67<br>
            ✉️ kontakt@slowowslowo.pl</p>
            <p>Pn–Pt: 8:00–20:00<br>Sob–Nd: Nieczynne</p>
        </div>
        
        <div class="contact-form">
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Imię i nazwisko</label>
                    <input type="text" id="name" name="name" placeholder='Jan Kowalski' required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="email">Adres e-mail</label>
                    <input type="email" id="email" name="email" placeholder="jan@example.pl" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="message">Wiadomość'</label>
                    <textarea id="message" name="message" rows="4" placeholder="Napisz do nas..." required></textarea>
                </div>
                <button type="submit" class="btn">Wyślij wiadomość</button>
                <div id="formFeedback" class="form-message" role="alert"></div>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>