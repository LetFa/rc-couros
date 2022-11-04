<?php $this->layout('components/_theme') ?>


<div class="container-fluid ">
    <div class="row">
        <div class="col-md-12">
            <div class="contato text-center">
                <h1>Nos envia uma mensagem!</h1>
                <p>Para dúvidas ou mais informações entre em contato conosco:</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 text-center contato-1">
            <h1>Acesse nossas redes sociais:</h1>
            <div class="contato-icon">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-whatsapp"></i>
            </div>
            <h2>Nossos Contatos:</h2>
            <div class="row icon-row">
                <div class="tel col-md-6">
                    <i class="bi bi-telephone"></i> (18)99759-7292
                </div>
                <div class="email col-md-6">
                    <i class="bi bi-envelope"></i> example@gmail.com
                </div>
            </div>
            <div class="contato-local">
                <i class="bi bi-geo-alt-fill"></i>Rua: Guarani, n 1887 São Bras
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.530076734957!2d-50.32494748560115!3d-21.290061187531293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949614e676bacb2d%3A0x60fdee8ced23c06a!2sR.%20Guarani%2C%201887%20-%20Jardim%20Sao%20Braz%2C%20Birigui%20-%20SP%2C%2016202-001!5e0!3m2!1spt-BR!2sbr!4v1667585120343!5m2!1spt-BR!2sbr" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-md-6 text-center contato-2">
            <h1>Insira seus dados:</h1>
            <form action="">
                <div class="form-group">
                    <div class="column">
                        <label for="name" class="text-danger">Insira seu nome:</label>
                        <input class="form-control" type="text" placeholder="Nome completo">
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="column">
                        <label for="email" class="text-danger">Insira seu email:</label>
                        <input class="form-control" type="email" placeholder="example@gmail.com">
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="column">
                        <label for="email" class="text-danger">Insira seu telefone:</label>
                        <input class="form-control" type="tel" placeholder="(xx) xxxx-xxxx">
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="column">
                        <label for="msg" class="text-danger">Insira sua mensagem:</label>
                        <textarea class="form-control" name="msg" id="msg" cols="30" rows="10" placeholder="Deixe sua mensagem aqui..."></textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark mt-3">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
