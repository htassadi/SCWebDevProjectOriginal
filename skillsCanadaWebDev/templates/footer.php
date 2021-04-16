<!-- FOOTER -->
<style>
    h1,h2,h3,p,ul{
        margin: 0;
    }

    ul{
        padding: 0;
        list-style: none;
    }

    a{
        text-decoration: none;
    }

    img{
        max-width: 100%;
        height: auto;
    }
    
    footer{
        display: block;
        width: 100%;
        width: calc(100% - 2rem);
        margin-left: 1rem;
        margin-right: 1rem;
        text-align:center;
    }

    .footer-container{
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        row-gap: 2rem;
    }

    .footer-logo{
        font-size: 1.5rem;;
        color:  #069C54;
        font-weight:600;
        margin-bottom: 1rem;
    }

    .bd-grid {
        display: grid;
        gap: 2rem;
    }

    .footer-description{
        display: block;
        font-size: .813rem;
        margin: .25rem 0 1.5rem;
    }

    .footer-social{
        font-size: 1.5rem;
        color: #393939;
        margin-right: 1rem;
        margin-bottom:1rem;
    }

    .footer-title{
        font-size:1.25rem;
        color: #393939;
        margin-bottom: 1rem;
    }

    .footer-adress{
        color: #069C54;
        font-size: 0.8rem
    }

    .footer-link{
        display: inline-block;
        color: #707070;
        margin-bottom: 1rem;
    }

    .footer-link:hover{
        color:#069C54;
    }

    .footer-copy{
        text-align: center;
        font-size: .813rem;
        color: #A6A6A6;
        margin-top: 3.5rem;
    }

    .section{
        padding: 4rem 0 2rem;
        margin-right: 20px;
        margin-left: 20px;
    }

    hr{
        background: gray;
        height: 2px;
        border:0;
        margin-bottom: 25px;
        margin-right:auto;
        margin-left:auto;
        width: 60%;
    }

</style>


<!--========== FOOTER ==========-->
<footer class="footer section">   
    <hr>
    <div class="footer-container bd-grid">
        <div class="footer-content">
            <h1 class="footer-logo">Green Thumb Landscaping</h1>

            <div>
                <a href="#" class="footer-social"><i class='bx bxl-facebook'></i></a>
                <a href="#" class="footer-social"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="footer-social"><i class='bx bxl-twitter'></i></a>
            </div>

            <div class="footer-content">
                <ul class="footer-adress">
                    <li>22 1139 AVE NW</li>
                    <li>EDMONTON AB T5M 2N0</li>
                    <li>780 - 302 - 0635</li>
                    <li>info@greenthumblanscaping.com</li>
                </ul>
            </div>
        </div>

        <div class="footer-content">
            <h3 class="footer-title">Services</h3>
            <ul>
                <li><a href="services.php" class="footer-link">Commercial</a></li>
                <li><a href="services.php" class="footer-link">Residential</a></li>
                <li><a href="customerSupport.php" class="footer-link">Book A Consultation</a></li>
            </ul>
        </div>

        <div class="footer-content">
            <h3 class="footer-title">Information</h3>
            <ul>
                <li><a href="customerSupport.php" class="footer-link">Contact us</a></li>
                <li><a href="#" class="footer-link">Terms of services</a></li>
            </ul>
        </div>
    </div>


    <p class="footer-copy">&#169; 2021 Green Thumb Landscaping. All right reserved</p>
</footer>

<script>
        const menuToggle = document.querySelector('.toggle');
        const showcase = document.querySelector('.showcase');
        
        menuToggle.addEventListener('click', () => {
          menuToggle.classList.toggle('active');
          showcase.classList.toggle('active');
        })
    </script>

</body>