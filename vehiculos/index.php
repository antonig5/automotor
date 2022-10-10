<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://unpkg.com/tailwindcss@1.0.4/dist/tailwind.min.css" rel="stylesheet" />

</head>


<body class="antialiased font-sans " style="background-color:#19283d ;">

  <?php
  include '../components/navbar.php';

  ?>
  <div class="container mx-auto px-2 sm:px-8">
    <div class="py-8">
      <div>
        <h2 class="text-2xl font-semibold leading-tight">Users</h2>
      </div>
      <!-- Herramientas de la tabla-->
      <div class=" my-16 flex sm:flex-row flex-col px-0 py-0 " style="margin-left: 21rem; position:relative; top:4rem">
        <!--cantidad de datos-->
        <div class="flex flex-row ">
          <div class="relative">
            <select class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <option>5</option>
              <option>10</option>
              <option>20</option>
            </select>
          </div>
          <!--fin de cantidad de datos-->
          <div class="relative">
            <!--filtro de datos-->
            <select class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
              <option>Todo</option>
              <option>Disponible</option>
              <option>Mantenimiento</option>
              <option>Servicio</option>
            </select>
            <!-- fin de filtro de datos-->
          </div>
        </div>
        <!--Buscador de datos-->
        <div class="block relative">
          <input placeholder="Buscar Placa" class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
        </div>
        <!--fin de buscador de datos-->
      </div>
      <!-- fin de Herramientas de la tabla-->
      <div class=" px-4 sm:px-8 py-4 overflow-x-auto my-10 mx-56 " style="position:relative; left:5rem">
        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
          <!-- Estrctura de la tabla-->
          <table class="min-w-full leading-normal ">

            <!--Encabezado de la tabla-->
            <thead>
              <tr>
                <th class=" px-2 py-3  border-red-100 bg-blue-800 text-left text-xs font-semibold text-black-600 uppercase tracking-wider">
                  Placa
                </th>
                <th class="px-2 py-3  border-red-100 bg-blue-800 text-left text-xs font-semibold text-black-600 uppercase tracking-wider">
                  Tipo
                </th>
                <th class="px-2 py-3  border-red-100 bg-blue-800 text-left text-xs font-semibold text-black-600 uppercase tracking-wider">
                  Modelo
                </th>
                <th class="px-2 py-3  border-red-100 bg-blue-800 text-left text-xs font-semibold text-black-600 uppercase tracking-wider">
                  Propietario
                </th>
                <th class="px-2 py-3  border-red-100 bg-blue-800 text-left text-xs font-semibold text-black-600 uppercase tracking-wider">
                  Estado
                </th>
              </tr>
            </thead>
            <!-- fin del encabezado de la tabla-->

            <tbody>

              <!-- Datos de la tabla-->
              <tr>
                <td class="  border-gray-200 bg-white text-sm">
                  <div class="flex items-center">
                    <div class="ml-3">
                      <p class="text-gray-900 whitespace-no-wrap">
                        K12T
                      </p>
                    </div>
                  </div>
                </td>
                <td class="  border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">Bus</p>
                </td>
                <td class="  border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">Citaro</p>
                </td>
                <td class="  border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">Puritrans</p>
                </td>
                <td class=" py-5 border-gray-200 bg-white text-sm">
                  <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                    <span aria-hidden class="absolute inset-0 bg-green-300  rounded-full"></span>
                    <span class="relative">Disponible</span>
                  </span>
                </td>
              </tr>


              <tr>
                <td class=" border-gray-200 bg-white text-sm">
                  <div class="flex items-center">
                    <div class="ml-3">
                      <p class="text-gray-900 whitespace-no-wrap">
                        Cd-1760
                      </p>
                    </div>
                  </div>
                </td>
                <td class="  border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">Buseta</p>
                </td>
                <td class="  border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">Fortuner</p>
                </td>
                <td class="  border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">Jose</p>
                </td>
                <td class=" py-5 border-gray-200 bg-white text-sm">
                  <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                    <span aria-hidden class="absolute inset-0 bg-red-300  rounded-full"></span>
                    <span class="relative">Mantenimiento</span>
                  </span>
                </td>
              </tr>


              <tr>
                <td class="  border-gray-200 bg-white text-sm">
                  <div class="flex items-center">
                    <div class="ml-3">
                      <p class="text-gray-900 whitespace-no-wrap">
                        Vas-466
                      </p>
                    </div>
                  </div>
                </td>
                <td class="  border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">Camioneta</p>
                </td>
                <td class="  border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">Tucson</p>
                </td>
                <td class="  border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">Puristur</p>
                </td>
                <td class=" py-5 border-gray-200 bg-white text-sm">
                  <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                    <span aria-hidden class="absolute inset-0 bg-blue-300  rounded-full"></span>
                    <span class="relative">Servicio</span>
                  </span>
                </td>
              </tr>
              <!--Fin de datos de la tabla-->
            </tbody>
          </table>
          <!-- Estrctura de la tabla-->

          <!--Paginado-->
          <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
            <span class="text-xs xs:text-sm text-gray-900">
              Mostrando 1 a 3 de 10 resultados
            </span>
            <div class="inline-flex mt-2 xs:mt-0">
              <button class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                Anterior
              </button>
              <button class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                Siguiente
              </button>
            </div>
          </div>

          <!-- fin del paginado-->

        </div>
      </div>
    </div>
  </div>

  <?php
  include '../components/menu.php';
  ?>

</body>

</html>