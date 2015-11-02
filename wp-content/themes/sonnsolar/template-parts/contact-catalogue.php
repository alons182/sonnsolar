<div class="intro-form">
   <p>Ingresa tu correo para enviarte nuestro catalogo de productos</p> 
</div>
<form action="<?php echo home_url( '/helpers/catalogue-contact.php' ); ?>" data-delay-message="7000" data-remote data-remote-success-message="Su solicitud se ha enviado con éxito. Revisa tu correo electrónico (También en la carpeta de SPAM o No Deseado), en el encontraras el archivo de catalogo solicitado. Gracias">
    
    <p>
     <label>Nombre</label>
     <input type="text" name="name" id="name" required  />
    </p>
    <p>
    <label>Correo</label>
    <input type="email" name="email" id="email" required />
    </p>
    <input type="hidden" name="list" value="SonnSolar" />
    <input type="hidden" name="attachment" value="/uploads" />
    <input type="submit" class="color" value="Solicitar">
    <p>
    <span class="response">
        <span class="loader">Cargando...</span>
    </span>
    </p>
</form>

<?php /*echo do_shortcode('[contact-form-7 id="235" title="Solicitar Catalogo de Productos"]'); */?>