<section>
  <div class="container">
    <div class="fluid_container">
      <div class="row">
        <div class="row">
          <div class="col-xs-12">
           <h2>Nuestros productos</h2>
           <p> Productos elaborados con materias primas de excelente calidad totalmente naturales, sin aditivos ni conservantes.</p>
           <p>Disponemos de una amplia variedad  de pastas y rellenos, como así también contamos con la elaboración de tapas para empanadas, tartas y salsas.</p>
           <p>Para garantizar la frescura de nuestra producción, realizamos elaboración a la vista.</p>
           <p>No deje de solicitar nuestros productos y comprobar la calidad de los mismos.</p>
           <ul>
             {foreach $categorias as $categoria}
               <li>{$categoria['nombre']}</li>
                <ul>
                  {foreach $productos as $producto}
                    <li>{$producto['nombre']}</li>
                  {/foreach}
                </ul>
             {/foreach}
             <!--<li>Capeletis</li>
               <ul>
                 <li>Jamón y queso</li>
                 <li>Ricota y jamón</li>
                 <li>Verdura y Ricota</li>
               </ul>
             <li>Sorrentinos</li>
               <ul>
                 <li>Jamón y queso</li>
                 <li>Muzzarella y panceta</li>
                 <li>Calabaza y queso</li>
               </ul>
             <li>Ravioles</li>
               <ul>
                 <li>Jamón y queso</li>
                 <li>Ricota y jamón</li>
                 <li>Verdura y Ricota</li>
                 <li>Verdura y pollo</li>
               </ul>
             <li>Canelones</li>
               <ul>
                 <li>Jamón y queso</li>
                 <li>Ricota y jamón</li>
                 <li>Verdura y Ricota</li>
               </ul>
             <li>Ñoquis</li>
               <ul>
                 <li>Papa</li>
                 <li>Espinaca</li>
                 <li>Queso</li>
               </ul>
             <li>Tallarines</li>
               <ul>
                 <li>Al huevo</li>
                 <li>Espinaca</li>
                 <li>Morrón</li>
               </ul>-->
           </ul>
         </div>
        </div>
      </div>
    </div>
  </div>
</section>
