<footer class="est_en_bas_de_page">
    <div
        class="bg-light  d-flex flex-column flex-lg-row justify-content-between align-items-center p-3 position-relative bottom-0 w-100">
        <div class="justify-content-lg-evenly">
            <p class="text-black fw-normal mx-lg-5 text-center text-lg-start">Team Fleury &copy;</p>
            <p class="text-black fw-normal mx-lg-5 text-center text-lg-start">contact@teamfleury.fr</p>
            <p class="text-black fw-normal mx-lg-5 text-center text-lg-start">08 07 06 05 04</p>
        </div>
        <div>
            <div class="d-flex justify-content-evenly align-items-center mx-10 my-0">
                <img class="footer__img" src="../photos/icons8-github-48.png" alt="GitHub">
                <img class="footer__img" src="../photos/icons8-linkedin-48.png" alt="LinkedIn">
                <img class="footer__img" src="../photos/icons8-instagram-50.png" alt="Instagram">
            </div>

        </div>
    </div>
    <!-- rajout du texte pour afficher la valeur de dateFirstVisit suite à la session -->
    <?= "<h6 class='text-secondary'> Première connexion {$_SESSION['dateFirstVisit']} : Le compteur de vue {$count}</h6>" ?>
</footer>


</body>

</html>