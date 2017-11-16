<?php
  $view = @$_GET["view"];
  switch ($view) {
    case 'perfil':
      $title="Perfil de Solicitate";
      $description="sfsdfsdfsdfsdfsdfsdf";
      # code...
    break;

    case 'acceso':
      $title="Accesa al sistema";
      $description="sfsdfsdfsdfsdfsdfsdf";
      # code...
    break;

    case 'registro':
      $title="Regístrate en el sistema";
      $description="sfsdfsdfsdfsdfsdfsdf";
      # code...

      case 'perfil-empresa':
        $title="Ve tu perfil";
        $description="sfsdfsdfsdfsdfsdfsdf";
        # code...

        case 'Perfil':
          $title="Ve tu perfil";
          $description="sfsdfsdfsdfsdfsdfsdf";
          # code...

    break;

    default:
      $view="index";
      $title="Bienvenidos";
      $description="sfsdfsdfsdfsdfsdfsdf";
    break;
  }
