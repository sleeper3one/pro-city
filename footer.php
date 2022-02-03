<footer>
    <div class="footstrip"></div>

    <div class="footcont">

    <div class="accordion-part mobile">
        <button class="accordion">O NAS</button>
        <div class="panel">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-one' ) ); ?>
        </div>

        <button class="accordion">PORADNIKI</button>
        <div class="panel">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-two' ) ); ?>
        </div>

        <button class="accordion">ZAMÓWIENIA</button>
        <div class="panel">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-three' ) ); ?>
        </div>

        <button class="accordion">KONTAKT</button>
        <div class="panel kontakt">
        <b>GEMMA</b><br>
                Ul. Powstańców Śl. 58C<br>
                53 - 333, Wrocław<br>
                Tel. (71) 734-55-04<br>
                Kom. +48 531-717-818<br>
                biuro@pro-city.pl<br>
        </div>

        <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");

            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
            panel.style.display = "none";
            } else {
            panel.style.display = "block";
            }
        });
        }
        </script>
    </div>

        <div class="row">
            <div class="col segment">
                <div class="desktop">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer-one' ) ); ?>
                </div>

              
            </div>
            
            <div class="col segment">
                <div class="desktop">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer-two' ) ); ?>
                </div>
                
               
                
            </div>
            
            <div class="col segment">
                <div class="desktop">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer-three' ) ); ?>
                </div>
                
                
            </div>
            
            <div class="col segment">
                <div class="desktop">
                         <b>GEMMA</b><br>
                Ul. Powstańców Śl. 58C<br>
                53 - 333, Wrocław<br>
                Tel. (71) 734-55-04<br>
                Kom. +48 531-717-818<br>
                biuro@pro-city.pl<br>
                </div>

            </div>
        </div>
    </div>
    
    <div class="rights">
        © Copright 2008 - 2021 by GEMMA
    </div>
</footer>

<?php wp_footer(); ?>

    </body>
</html>