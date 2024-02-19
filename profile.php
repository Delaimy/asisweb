<?php require_once './config/session.php'; ?>
<?php $extra_info = $auth->getExtraInfo(); ?>
<?php $extra_emails = $extra_info['emails']; ?>
<?php $extra_phone_numbers = $extra_info['phone_numbers']; ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mi perfil - Docentes CETis 121</title>
    <link rel="icon" href="./favicon.webp" type="image/webp" />

    <link rel="stylesheet" href="./css/output.css" />
  </head>

  <body>
    <dialog
      id="logout-modal"
      class="fixed w-full min-h-screen bg-black bg-opacity-30 hidden items-center justify-center z-50"
    >
      <div
        class="w-[90%] max-w-lg p-8 my-8 bg-[#212121] text-gray-50 rounded-lg shadow-lg"
      >
        <h1 class="text-4xl font-bold text-center mb-4">¿Cerrar sesión?</h1>
        <p class="text-xl leading-relaxed mb-4 text-gray-300">
          ¿Estás seguro de que deseas cerrar tu sesión? Recuerda que no podrás
          recibir tus notificaciones mientras tu sesión este cerrada.
        </p>
        <div class="flex gap-4 justify-end mt-4">
          <a
            href="./auth/logout.php"
            class="bg-blue-500 hover:bg-red-600 transition-colors duration-300 ease-in-out text-white font-bold py-2 px-4 rounded"
            title="Cerrar sesión"
            >Cerrar sesión</a
          >
          <button
            id="logout-modal-close-button"
            class="bg-blue-500 hover:bg-blue-600 transition-colors duration-300 ease-in-out text-white font-bold py-2 px-4 rounded"
            title="Cancelar"
          >
            Cancelar
          </button>
        </div>
      </div>
    </dialog>

    <?php require_once './components/header.php'; ?>

    <main class="min-h-screen">
      <article>
        <img
          class="absolute top-0 brightness-50 -z-50 h-[320px] w-full object-cover object-center"
          src="./images/banners/banner-1.webp"
          alt="Banner"
        />
        <section
          class="h-[320px] w-[90%] mx-auto flex flex-col items-center justify-center"
        >
          <h1 class="text-white text-4xl font-bold text-center drop-shadow-2xl">
            <?php echo $_SESSION['user']['first_name'] . " " . $_SESSION['user']['last_name']; ?>
          </h1>
          <p
            class="text-gray-100 text-lg font-normal text-center drop-shadow-2xl"
          >
            <?php echo $_SESSION['user']['admin'] === 1 ? "Administrador" : "Docente" ?>
          </p>
        </section>
        <section class="max-w-screen-lg m-auto pt-12 pb-16 px-6 min-h-screen">
          <div>
            <div
              class="flex items-center justify-between gap-4 mb-8 border-b-2 border-gray-300 pb-4"
            >
              <h2 class="text-2xl font-bold text-gray-800">
                Información de contacto
              </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <ul
                class="flex flex-col gap-2 text-gray-800 sm:text-base font-normal w-full"
              >
                Emails:
                <li class="list-inside list-disc">
                  <a
                    class="text-blue-500 underline"
                    href="mailto:<?php echo $_SESSION['user']['email']; ?>"
                    ><?php echo $_SESSION['user']['email']; ?>
                    &nbsp;(Principal)</a
                  >
                </li>
                <?php if (
                count($extra_emails) >
                0 ) { foreach ($extra_emails as $e) { ?>
                <li class="list-inside list-disc">
                  <a
                    class="text-blue-500 underline"
                    href="mailto:<?php echo $e['extra_email']; ?>"
                    ><?php echo $e['extra_email']; ?></a
                  >
                  <span class="block pl-6">
                    <a
                      class="text-blue-500 underline"
                      href="./auth/extra_info.php?action=main&info=email&id=<?php echo $e['email_id']; ?>"
                      >Hacer principal</a
                    >
                    <a
                      class="text-blue-500 underline"
                      href="./auth/extra_info.php?action=delete&info=email&id=<?php echo $e['email_id']; ?>"
                      >Eliminar</a
                    >
                  </span>
                </li>
                <?php }
              } ?>
                <li>
                  <form
                    class="flex gap-1"
                    action="./auth/extra_info.php?action=add&info=email"
                    method="post"
                  >
                    <input
                      type="email"
                      name="email"
                      class="w-full p-1 border-2 border-gray-300 rounded"
                      placeholder="Agregar otro email"
                    />
                    <input
                      type="submit"
                      value="Agregar"
                      class="w-fit px-1 bg-blue-500 text-white text-base rounded cursor-pointer"
                    />
                  </form>
                </li>
              </ul>

              <ul
                class="flex flex-col gap-2 text-gray-800 sm:text-base font-normal w-full"
              >
                Teléfonos:
                <li class="list-inside list-disc">
                  <a
                    class="text-blue-500 underline"
                    href="tel:<?php echo $_SESSION['user']['phone_number']; ?>"
                    ><?php echo $_SESSION['user']['phone_number']; ?>
                    &nbsp;(Principal)
                  </a>
                </li>
                <?php if (
                count($extra_phone_numbers) >
                0 ) { foreach ($extra_phone_numbers as $pn) { ?>
                <li class="list-inside list-disc">
                  <a
                    class="text-blue-500 underline"
                    href="tel:<?php echo $pn['extra_phone_number']; ?>"
                    ><?php echo $pn['extra_phone_number']; ?></a
                  >
                  <span class="block pl-6">
                    <a
                      class="text-blue-500 underline"
                      href="./auth/extra_info.php?action=main&info=phone_number&id=<?php echo $pn['phone_number_id']; ?>"
                      >Hacer principal</a
                    >
                    <a
                      class="text-blue-500 underline"
                      href="./auth/extra_info.php?action=delete&info=phone_number&id=<?php echo $pn['phone_number_id']; ?>"
                      >Eliminar</a
                    >
                  </span>
                </li>
                <?php }
              } ?>
                <li>
                  <form
                    class="flex gap-1"
                    action="./auth/extra_info.php?action=add&info=phone_number"
                    method="post"
                  >
                    <input
                      type="tel"
                      name="phone_number"
                      class="w-full p-1 border-2 border-gray-300 rounded"
                      placeholder="Agregar otro teléfono"
                    />
                    <input
                      type="submit"
                      value="Agregar"
                      class="w-fit px-1 bg-blue-500 text-white text-base rounded cursor-pointer"
                    />
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </article>
    </main>

    <?php require_once './components/footer.php'; ?>

    <script src="./scripts/modals.js"></script>
  </body>
</html>
