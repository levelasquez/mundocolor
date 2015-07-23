@extends('templates/master')
@section('contenido')
  <div class="bs-docs-featurette">
    <div class="container">
      <h2 class="bs-docs-featurette-title">Contactanos</h2>
      <hr class="half-rule">
      <div class="row">
        <div class="col-md-6">
          <form class="form-horizontal">
            <fieldset>
              <legend>Comentarios y Sugerencias</legend>
              <div class="form-group">
                <label for="inputName" class="col-lg-2 control-label">Nombre</label>
                <div class="col-lg-10">
                  <input class="form-control" id="inputName" placeholder="Nombre y Apellido" type="text">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Correo</label>
                <div class="col-lg-10">
                  <input class="form-control" id="inputEmail" placeholder="Correo" type="text">
                </div>
              </div>
              <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label">Mensaje</label>
                <div class="col-lg-10">
                  <textarea class="form-control" rows="3" id="textArea"></textarea>
                  <span class="help-block">Puedes enviarnos tus dudas, comentarios, sugerencias y quejas, con gusto te responderemos a la brevedad posible.</span>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="reset" class="btn btn-default">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        <div class="col-md-6">
          <p>
            Estamos ubicados en la calle real entre calle deleite y avenida libertador.
          </p>
          <p>
            Teléfonos: 1111-1111111 / 0000-0000000
          </p>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1170.8775426263603!2d-65.99921345022763!3d9.213233766159592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sve!4v1436723687111" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop