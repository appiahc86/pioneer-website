
<div style="background: #2a2929; color: white; clear: both;" class="p-5">

<div class="container">
    <div class="row">
        <div class="col-md-3 text-center">
            <img src="img/logo.svg" width="70" height="100" alt="base logo">
            <hr style="color: #c6c4c4; border: 1px solid #c6c4c4;">
        </div>

        <div class="col-md-4">
            <h5>GET IN TOUCH</h5>
            <span><span class="fas fa-envelope"></span> <span class="sm-hide">Email</span>: <span class="text-white-50">info@pioneerwheels.com</span></span><br>
            <div class="mt-2"><span class="fas fa-phone"></span> <span class="sm-hide">Tel</span>: <a href="tel:+27739212240" class="text-white-50">+27739212240</a></div>
            <div class="mt-2"><span class="fas fa-map-marker"></span> <span class="sm-hide">Address</span>: <span class="text-white-50">117 Main Rd, Newlands, Randburg, 2092</span></div>
            <hr style="color: #c6c4c4; border: 1px solid #c6c4c4;">
        </div>

        <hr>
        <div class="col-md-5">
            <h5>SOCIAL ICONS</h5>
            <div class="flex-container">
                <a href="https://api.whatsapp.com/send?phone=+27739212240"><img src="img/whatsapp.jpeg" class="img-fluid social-icons" alt=""></a>
                <a href="https://www.facebook.com/pages/category/Automotive--Aircraft---Boat/Pioneer-wheels-110877014041229/" style="margin-left: 10px;"><img src="img/facebook.jpeg" class="img-fluid social-icons" alt=""></a>
                <a style="margin-left: 10px;" href="https://www.instagram.com/pioneerwheels98/"><img src="img/instagram.jpg" class="img-fluid social-icons" alt=""></a>
                <a style="margin-left: 10px;" href="https://twitter.com/pioneerwheels98"><img src="img/twitter.png" class="img-fluid social-icons" alt=""></a>
            </div>
            <hr style="color: #c6c4c4; border: 1px solid #c6c4c4;">
        </div>
    </div>
</div>
    <footer style="color: black; clear: both;" class="pb-2 pt-5">
        <div class="text-center" style="color: #ccc;">&copy; <?php echo date('Y'); ?> Pioneer Wheels all rights reserved.</div>
    </footer>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>


<script>
    window.onload = function () {

        let index = document.querySelector('#index-page');
        let about = document.querySelector('#about-page');
        let services = document.querySelector('#services-page');
        let contact = document.querySelector('#contact-page');

        let page = "<?php echo $_SESSION['page']; ?>"

        switch (page) {
            case 'about':
                about.classList.add('active');
                break;
            case 'services':
                services.classList.add('active');
                break;
            case 'contact':
                contact.classList.add('active');
                break;
            default:
                index.classList.add('active');
                break;
        }




    }
</script>

</body>
</html>