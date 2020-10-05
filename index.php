<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";
require_once "extensiones/vendor/autoload.php";

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.22.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.22.0/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyC4Dwz6m4O96XVYnzuZygB9LeYSN_WTnvE",
    authDomain: "inventory-system-5c3c3.firebaseapp.com",
    databaseURL: "https://inventory-system-5c3c3.firebaseio.com",
    projectId: "inventory-system-5c3c3",
    storageBucket: "inventory-system-5c3c3.appspot.com",
    messagingSenderId: "202783100209",
    appId: "1:202783100209:web:a150a3198bf1db3ad93410",
    measurementId: "G-K5QGLJLZMD"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
