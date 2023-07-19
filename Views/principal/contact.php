<?php include_once 'Views/Template-principal/header.php'?>

    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contactanos</h1>
            <p>
                Proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet.
            </p>
        </div>
    </div>

    

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Nombre</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Ingrese su nombre">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Correo Electronico</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Ingrese su correo">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Titulo</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Ingrese un titulo">
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Mensage</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Ingrese aquí su mensaje" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Footer -->
    <?php include_once 'Views/Template-principal/footer.php'?>
    <!-- Start Slider Script -->
</body>

</html>