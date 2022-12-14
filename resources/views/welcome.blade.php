<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Politica de Privacidad</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="underline text-gray-900 dark:text-white">   POL??TICA DE PRIVACIDAD</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">

Ezpcbuilds se preocupa por los asuntos relativos a privacidad y quiere que usted conozca c??mo recopilamos, usamos y revelamos la informaci??n. La presente Pol??tica de Privacidad describe nuestras pr??cticas en relaci??n con la informaci??n que nosotros o nuestros proveedores de servicios externos recopilan a trav??s de algunos de nuestros sitios web, propiedades web (por ejemplo, widgets y aplicaciones) y aplicaciones m??viles ("Apps m??viles"), de nuestra propiedad o gestionados por nosotros en cada caso que enlazan a esta Pol??tica de Privacidad (cada uno de ellos, en lo sucesivo, una "Propiedad" o conjuntamente, las "Propiedades"). Al proporcionarnos Informaci??n Personal (como se define a continuaci??n) a trav??s de las Propiedades, usted reconoce que ha le??do esta Pol??tica de Privacidad y que entiende los t??rminos y condiciones que contiene.

1. INFORMACI??N PERSONAL
1.1 Informaci??n personal que podremos recopilar
En relaci??n con las Propiedades, se recopilan dos tipos de informaci??n: Informaci??n personal y Otra informaci??n. "Informaci??n personal" es informaci??n que le identifica o le hace identificable como individuo. "Otra informaci??n" es cualquier informaci??n que no revele su identidad espec??fica. Si estamos obligados a tratar Otra informaci??n como Informaci??n personal en virtud de la legislaci??n aplicable, la usaremos y revelaremos para los fines para los que usamos y revelamos la Informaci??n personal, como se detalla en esta Pol??tica. Otra informaci??n tiene su propio apartado m??s adelante, bajo el ep??grafe "OTRA INFORMACI??N".
Nosotros y nuestros proveedores de servicios externos podremos recopilar la siguiente Informaci??n personal de usted, como:
???	Nombre
???	Direcci??n postal (incluidas las direcciones de facturaci??n y env??o)
???	N??mero tel??fono
???	Direcci??n de correo electr??nico
???	Fecha de nacimiento
???	N??mero de tarjeta de cr??dito y d??bito
???	Detalles de compra
???	Talla, peso (si usa un asesor de talla)
1.2 Recopilaci??n de Informaci??n personal
Nosotros y nuestros proveedores de servicios externos recopilamos Informaci??n personal a trav??s de las Propiedades de varias maneras, incluidas:
1.2.1 A trav??s de las Propiedades
Podremos recopilar Informaci??n personal a trav??s de las Propiedades, por ejemplo, cuando usted se registra en newsletter u otras comunicaciones a trav??s de las propiedades, cuando registra una cuenta de cliente, hace una compra o una solicitud.
1.2.2 Fuera de Internet
Podremos recopilar Informaci??n personal sobre usted fuera de Internet, por ejemplo, si nos proporciona informaci??n en una tienda f??sica E.M.P. o en el recinto de un concierto.
1.2.3 De Otras fuentes
Podremos recibir su Informaci??n personal de otras fuentes, por ejemplo:
???	bases de datos de direcciones; o
???	socios de marketing cuando comparten informaci??n con nosotros en el contexto de campa??as de marketing y de promoci??n relacionadas con nuestra actividad.
Si usa sus redes sociales u otra cuenta de terceros para participar en nuestros sorteos, concursos o promociones o a trav??s de una pasarela para iniciar sesi??n en dicha cuenta en nuestras Propiedades, compartir?? determinada Informaci??n personal de su cuenta de tercero con nosotros, que puede incluir, por ejemplo, su nombre, direcci??n de correo electr??nico, fotograf??a, lista de contactos de redes sociales, historial de m??sica escuchada, canciones favoritas y cualquier otra informaci??n cuyo acceso usted facilita o a la que podemos acceder de otro modo cuando usted se conecta a trav??s de dicha cuenta de terceros.
1.2.4
No es necesario que nos proporcione ninguna Informaci??n personal en virtud de ninguna ley o contrato. Por ejemplo, cuando usted participa en varias oportunidades que se ofrecen a trav??s de las Propiedades, recopilamos Informaci??n personal sobre usted para permitirle a usted (o a nosotros) mejorar su experiencia en las Propiedades.
1.3 C??mo usamos la Informaci??n personal
Nosotros y nuestros proveedores de servicios externos usamos Informaci??n personal para los siguientes fines empresariales, incluidos:
1.3.1
Proporcionar la operatividad de las Propiedades y llevar a cabo sus solicitudes.
???	Proporcionarle la operatividad de las Propiedades, como facilitar el acceso a su cuenta registrada y ofrecerle el servicio al cliente correspondiente.
???	Responder a sus solicitudes y atender sus peticiones, cuando se pone en contacto con nosotros a trav??s de los formularios de contacto online o de otro modo, por ejemplo, cuando nos env??a preguntas, sugerencias, felicitaciones o quejas, o cuando solicita informaci??n acerca de nuestras Propiedades.
???	Para enviarle informaci??n administrativa, incluida la informaci??n relativa a las Propiedades y cambios de nuestros t??rminos, condiciones y pol??ticas.
???	Para completar y realizar su compra, por ejemplo, para procesar sus pagos, enviarle su pedido, comunicarnos con usted en relaci??n con su compra y ofrecerle el servicio al cliente correspondiente.
???	Para proporcionarle el servicio al cliente internacional de todas las empresas EMP.
Desarrollaremos estas actividades para gestionar nuestra relaci??n contractual con usted y/o cumplir con una obligaci??n legal.
1.3.2
Para enviarle nuestro bolet??n de noticias y/u otros materiales de marketing y para facilitar que se comparta a trav??s de las redes sociales.
???	Para enviarle peri??dicamente newsletters con informaci??n acerca de nuestros productos, servicios y newsletter con informaci??n de nuestras filiales del Grupo Warner Music. Tambi??n puede optar por dar informaci??n adicional al suscribirse al bolet??n de noticias. Si se ha suscrito a nuestro bolet??n de noticias, recibir?? un correo electr??nico nuestro. Para completar su suscripci??n a nuestro bolet??n de noticias, tendr?? que hacer clic en el v??nculo de activaci??n desde dicho correo.
???	Para enviarle otras ofertas de marketing que creemos que le resultar??n de inter??s si usted ha indicado que desea recibirlas (incluidas, entre otras, novedades de nuestros proveedores de servicios externos que env??an correo directo y otro tipo de publicidad).
???	Para enviarle mensajes de texto SMS a su n??mero de tel??fono, por ejemplo, si ha participado en un sorteo con este n??mero y ha indicado que desea recibirlo. Tenga en cuenta que pueden ser aplicables tarifas de mensajes y transmisi??n de datos. Deber?? confirmar con su proveedor de servicios m??viles las tarifas de transmisi??n de datos.
Llevaremos a cabo esta actividad con su consentimiento o porque tenemos un inter??s leg??timo.
1.3.5
Agregar y/o mantener an??nima la Informaci??n personal.
???	Podremos agregar y/o mantener an??nima la Informaci??n personal de modo que ya no se considere Informaci??n personal. Lo hacemos para generar otros datos para nuestro uso, que podremos usar y revelar para cualquier fin.
Llevaremos a cabo esta actividad porque tenemos un inter??s leg??timo.
1.3.6
Cumplimiento de nuestros objetivos empresariales.
???	An??lisis de datos, por ejemplo, para mejorar la eficiencia de nuestras Propiedades;
???	Auditor??as, para verificar que nuestros procesos internos funcionan como es debido y cumplen las exigencias legales, reglamentarias o contractuales;
???	Para fines de control de fraude y seguridad, por ejemplo, para detectar y prevenir ciberataques o intentos de cometer usurpaci??n de la identidad;
???	Para desarrollar nuevos productos y servicios;
???	Para mejorar o modificar nuestros productos y servicios actuales;
???	Para identificar tendencias de uso, por ejemplo, entendiendo qu?? partes de nuestras Propiedades son las m??s interesantes para los usuarios;
???	Para determinar la efectividad de las campa??as promocionales de modo que podamos adaptar nuestras campa??as a las necesidades e intereses de los usuarios;
???	Para operar y expandir nuestras actividades empresariales, por ejemplo, entender qu?? partes de nuestras Propiedades son de mayor inter??s para nuestros usuarios de modo que podamos centrar nuestros esfuerzos en adaptarnos a los intereses de nuestros usuarios.
Participamos en dichas actividades para gestionar nuestra relaci??n contractual con usted, para cumplir una obligaci??n legal y/o porque tenemos un inter??s leg??timo en ello.

1.5 Otros usos y exposiciones
Tambi??n usamos y revelamos su Informaci??n personal si es necesario o adecuando, especialmente cuando tenemos la obligaci??n legal de hacerlo o un inter??s leg??timo en ello:
1.5.1
Para cumplir con la legislaci??n aplicable.
???	Esto puede incluir leyes fuera de su pa??s de residencia.
1.5.2
Para responder a solicitudes de autoridades p??blicas o gubernamentales.
???	Pueden incluir autoridades fuera de su pa??s de residencia.
1.5.3
Para cooperar con el cumplimiento de la ley.
???	Por ejemplo, cuando respondemos a solicitudes y ??rdenes de ejecuci??n de la ley.
1.5.4
Por otros motivos jur??dicos.
???	Para hacer cumplir nuestros t??rminos y condiciones
???	Para proteger nuestras operaciones o las de cualquiera de nuestros afiliados o artistas;
???	Para proteger nuestros derechos, a nuestros artistas, a usted o a otros; o
???	Para permitirnos recurrir o limitar los da??os que podamos sufrir.
1.5.5
En relaci??n a una venta o transacci??n comercial.
???	Tenemos un inter??s leg??timo en revelar o transferir su informaci??n personal a un tercero en caso de cualquier reorganizaci??n, fusi??n, venta, empresa conjunta, cesi??n, transferencia u otra disposici??n de todo o parte de nuestro negocio, activos o existencias (incluidos los relacionados con cualquier procedimiento de quiebra o procedimiento similar). Dichos terceros pueden incluir, por ejemplo, la entidad adquiriente y sus asesores.

1.6 Per??odo de conservaci??n de datos
Conservaremos su Informaci??n personal el tiempo que sea necesario o durante el tiempo que est?? permitido a la luz del/los fin(es) para los que se obtuvo y conforme a la legislaci??n aplicable.
Los criterios que aplicamos para determinar nuestros periodos de conservaci??n incluyen:
???	El transcurso de tiempo durante el cual tengamos una relaci??n con usted y le proporcionemos las Propiedades a usted (por ejemplo, mientras tenga una cuenta con nosotros o siga usando las Propiedades);
???	Si existe una obligaci??n legal a la que estemos sujetos (por ejemplo, ciertas leyes requieren que mantengamos registros de sus transacciones durante un determinado periodo de tiempo antes de que podamos eliminarlos); o
???	Si es aconsejable una conservaci??n en vista de nuestra situaci??n jur??dica (como en relaci??n con reg??menes de prescripci??n, litigios o investigaciones reglamentarias aplicables).
1.7 Informaci??n confidencial
Le pedimos que no nos env??e ni nos revele ninguna Informaci??n personal confidencial (como n??meros de seguridad social, informaci??n relativa a su origen racial o ??tnico, opiniones pol??ticas, religi??n u otras creencias, salud, antecedentes penales o afiliaci??n sindical) en o a trav??s de las Propiedades o de otro modo.

2. OTRA INFORMACI??N QUE PODREMOS RECOPILAR
Nosotros y nuestros proveedores de servicios externos podremos recopilar Otra informaci??n (como se ha definido anteriormente), como:
???	Navegador e informaci??n de dispositivo
???	Datos de uso de App m??vil
???	Archivos de registro del servidor
???	Informaci??n recopilada a trav??s de cookies, etiquetas de p??xel y otras tecnolog??as. Consulte nuestra Pol??tica de Cookies para obtener informaci??n m??s detallada acerca de c??mo usamos las cookies.
???	Informaci??n de ubicaci??n geogr??fica
???	Informaci??n demogr??fica y otra informaci??n que no permite identificarle personalmente que usted ha proporcionado
???	Informaci??n sobre c??mo usa las Propiedades
???	Informaci??n agregada
2.1 C??mo recopilamos Otra informaci??n
Nosotros y nuestros proveedores de servicios externos podremos recopilar otra informaci??n de varias maneras, incluidas:
2.1.1
A trav??s de su navegador o su dispositivo:
La mayor??a de buscadores recopilan determinada informaci??n, como su direcci??n de Control de acceso de medios (MAC), tipo de dispositivo (Windows o Macintosh), resoluci??n de pantalla, versi??n del sistema operativo, tipo y versi??n del buscador de Internet y versi??n y tipo de la Propiedad que usted est?? usando. Nosotros y nuestros proveedores de servicios podremos recopilar adem??s un identificador de dispositivo ??nico asignado por nosotros o nuestros proveedores de servicios al dispositivo desde el que usted accede a una Propiedad y otra informaci??n de transacci??n del dispositivo que nosotros y nuestros proveedores de servicios podremos usar para proporcionar contenido y anuncios al dispositivo.
2.1.2
A trav??s de su uso de las Apps m??viles:
Cuando usted descarga y utiliza una App m??vil, nosotros y nuestros proveedores de servicios podremos rastrear y recopilar datos de uso de la App m??vil, como la fecha y la hora en la que la App m??vil en su dispositivo accede a nuestros servidores y qu?? informaci??n y archivos se han descargado a la App m??vil en base a su n??mero de dispositivo.
2.1.3
A trav??s de los archivos de registro del servidor:
Una direcci??n de Protocolo de Internet (IP) es un n??mero que se asigna autom??ticamente a su dispositivo desde el que usted accede a la Propiedad a trav??s de su Proveedor de Servicios de Internet (ISP), y se identifica y registra autom??ticamente en los archivos de registro de nuestro servidor siempre que visite la Propiedad junto con el tiempo de la visita y la actividad en la Propiedad. Nosotros y nuestros proveedores de servicios usamos direcciones IP para calcular los niveles de uso de la Propiedad, ayudar a diagnosticar problemas del servidor, administrar las Propiedades y determinar su ubicaci??n geogr??fica aproximada.
2.1.5
Informaci??n de ubicaci??n geogr??fica
Si usa cualquier producto o servicio que permite la ubicaci??n, nos enviar?? informaci??n de ubicaci??n. Cuando use un servicio que permita la ubicaci??n, podremos recopilar y tratar informaci??n sobre su ubicaci??n geogr??fica precisa, como se??ales de GPS enviadas por un dispositivo m??vil. Nosotros y nuestros proveedores de servicios externos podremos usar la ubicaci??n f??sica de su dispositivo para proporcionarle servicios, contenido y publicidad basados en la ubicaci??n. En algunos casos, se le permitir?? negar tales usos de la ubicaci??n de su dispositivo, pero si decide negar dichos usos, no podremos proporcionarle los servicios y el contenido personalizado correspondiente.
2.1.6
De usted:
Podremos recopilar informaci??n demogr??fica, como su c??digo postal o su sexo, as?? como otra informaci??n como sus maneras preferidas para comunicarse, cuando usted nos proporcione voluntariamente esta informaci??n. Esta informaci??n no le identifica personalmente ni a usted ni a ning??n otro usuario de las Propiedades, a menos que se a??ada m??s informaci??n que pueda permitir que se produzca la identificaci??n. En tal caso, la informaci??n se tratar?? como Informaci??n personal.
2.1.7
Informaci??n sobre c??mo interact??a con las Propiedades:
Podremos recopilar informaci??n sobre c??mo interact??a con las Propiedades. Por ejemplo, algunas Propiedades pueden utilizar herramientas anal??ticas para ayudarnos a ofrecerle un servicio mejor con mejores productos, servicios y revisiones de las Propiedades. Esta informaci??n recopilada puede indicarnos qu?? servicios y caracter??sticas utiliza m??s en una Propiedad, as?? como el tipo de dispositivo y las caracter??sticas del hardware, el pa??s y el idioma de descarga, etc.
2.1.8
Agregando informaci??n:
Podremos agregar Informaci??n personal de modo que el producto final no le identifique personalmente ni a ning??n usuario de las Propiedades, por ejemplo, usando la Informaci??n personal para calcular el porcentaje de nuestros usuarios a los que les gusta un artista concreto.
2.1.9
Recopilamos datos personales cuando se registra para obtener una cuenta de cliente mediante el inicio de sesi??n ??nico ("SSO"). Si ya tiene una cuenta con un proveedor de SSO, puede registrarse para obtener una cuenta de cliente sin pasar por el proceso de registro e inicio de sesi??n. Para hacer esto, debe confirmar el registro de SSO usando un bot??n de SSO y verificar su identidad con el proveedor de SSO o ya estar registrado con este proveedor. Seg??n el proveedor de SSO respectivo, usted nos proporciona algunos de sus datos personales de su cuenta de SSO durante el proceso de registro inicial de SSO. Suele ser el nombre y la direcci??n de correo electr??nico de la cuenta SSO. Usamos estos datos para crear su cuenta de cliente y vincularla a la cuenta SSO. Llevamos a cabo estas actividades para regular nuestra relaci??n contractual de cuenta de cliente con usted (Art??culo 6 (1) (b) GDPR).
2.1.9.1 Iniciar sesi??n con Apple
Este servicio SSO es proporcionado por Apple Inc, One Apple Park Way; Cupertino, CA 95014, EE. UU., y sus filiales (coloquialmente, "Apple"). M??s informaci??n sobre el servicio SSO "Iniciar sesi??n con Apple" est?? disponible en Apple en https://support.apple.com/en-gb/HT210318. No tenemos control sobre los datos que Apple recopila mediante el uso del servicio "Iniciar sesi??n con Apple" o su procesamiento posterior. Para obtener informaci??n sobre c??mo Apple procesa los datos, consulte la Pol??tica de privacidad de Apple en https://www.apple.com/legal/privacy/en-ww/.
2.1.9.2 Iniciar sesi??n con Google (bot??n SSO 'Iniciar sesi??n con Google')
Este servicio SSO es proporcionado por Google LLC, 1600 Amphitheatre Parkway, Mountain View, CA 94043, EE. UU., y sus afiliados (coloquialmente, "Google"). Google proporciona m??s informaci??n sobre el servicio SSO "Iniciar sesi??n con Google" en https://support.google.com/accounts/answer/112802?hl=en. No tenemos control sobre los datos que Google recopila a trav??s del uso del servicio "Iniciar sesi??n con Google" o su procesamiento posterior. Para obtener informaci??n sobre c??mo Google procesa los datos, consulte la Pol??tica de privacidad de Google en https://policies.google.com/privacy?hl=en-GB.
2.1.9.3 Plugins sociales:
Nuestros complementos no est??n integrados en nuestro sitio web sin restricci??n, sino solo mediante un v??nculo HTML (denominado "complemento shariff"). Este tipo de integraci??n garantiza que no se establecer?? una conexi??n al servicio del proveedor de redes sociales todav??a por usar nuestro sitio web. Si hace clic en un bot??n de una red social, se abrir?? una nueva ventana y un acceso a la p??gina del proveedor de servicios. Con el fin y en el ??mbito de la recogida de datos y el procesamiento y uso adicional de datos por parte de proveedores de redes sociales en sus sitios web respectivos, y para sus derechos y opciones de configuraci??n relacionados para proteger su privacidad, consulte las pol??ticas de privacidad de datos de los proveedores
2.2 C??mo podemos usar y revelar Otra informaci??n
Tenga en cuenta que podremos usar y revelar otra informaci??n para cualquier fin, excepto cuando la ley aplicable nos obligue a lo contrario. Si la ley nos obliga a tratar Otra informaci??n como Informaci??n personal, la usaremos como se describe en la secci??n "C??mo recopilamos Otra informaci??n", m??s arriba, as?? como para todos los fines para los que usamos y revelamos la Informaci??n personal. En algunos casos, combinaremos Otra informaci??n con la Informaci??n personal (como combinar su nombre y su ubicaci??n geogr??fica). Si combinamos Otra informaci??n con su Informaci??n personal, la informaci??n combinada la trataremos como Informaci??n personal mientras est?? combinada.
3. SEGURIDAD
Aplicaremos las medidas f??sicas, t??cnicas y administrativas razonables para proteger la Informaci??n personal que se encuentre bajo nuestro control. Si tiene motivos para creer que su interacci??n con nosotros ya no es segura, notif??quenoslo inmediatamente conforme a la secci??n "Contacto", que se incluye m??s adelante.
4. SUS DERECHOS
4.1 Sus elecciones en relaci??n a nuestro uso y revelaci??n de su Informaci??n personal
Le proporcionamos muchas elecciones sobre c??mo podemos usar y revelar su Informaci??n personal para fines de marketing.
Usted podr?? rechazar lo siguiente, como se establece a continuaci??n:
4.1.1
Recibir nuestros correos electr??nicos relacionados con marketing o los de nuestros afiliados:
4.1.2
Si no desea recibir nuestros correos electr??nicos relacionados con marketing o los de nuestros afiliados en adelante, podr?? optar por dejar de recibir dichos correos electr??nicos usando el mecanismo de cancelaci??n de suscripci??n que se proporciona en el correo electr??nico o escribi??ndonos un correo electr??nico a [ ezpcbuildsservice@gmail.com]. Recibir mensajes de texto SMS nuestros y de nuestros afiliados:
Si no desea recibir nuestros mensajes de texto SMS relacionados con marketing o los de nuestros afiliados en adelante, podr?? optar por dejar de recibir dichos mensajes envi??ndonos un mensaje de texto de respuesta con el texto "STOP" o escribi??ndonos un correo electr??nico a [ezpcbuildsservice@gmail.com .
4.1.3
Que compartamos su Informaci??n personal con artistas o terceros no afiliados para sus fines de marketing:
Si prefiere que no compartamos su Informaci??n personal con en adelante con artistas o partes no afiliadas para sus fines de marketing, puede optar por que dejemos de compartir dicha informaci??n envi??ndonos un correo electr??nico a [ ezpcbuildsservice@gmail.com] Indique claramente en su correo qu?? es lo que rechaza. Cumpliremos su(s) solicitud(es) en cuanto sea razonablemente posible, en cualquier caso, dentro del periodo que establece la ley. Tenga en cuenta que, si opta por dejar de recibir nuestros mensajes relacionados con marketing, podremos seguir envi??ndole mensajes administrativos.
4.2 C??mo puede acceder, rectificar o cancelar su Informaci??n personal
Si desea acceder, revisar, corregir, actualizar, suprimir, restringir o cancelar la Informaci??n personal que usted nos ha proporcionado anteriormente, si desea oponerse a que usemos su Informaci??n personal o si quiere solicitar que le enviemos una copia electr??nica de su Informaci??n personal para transmitirla a otra empresa (siempre que la ley permita que se realice dicha portabilidad de datos), puede ponerse en contacto con nosotros en: [ezpcbuildsservice@gmail.com]. Responderemos a su solicitud conforme a la ley aplicable.
Tambi??n podr?? presentar una queja ante la autoridad reguladora de protecci??n de datos competente.
En su solicitud, indique claramente qu?? Informaci??n personal desea modificar, si le gustar??a eliminar su Informaci??n personal de nuestra base de datos u otro procedimiento, ind??quenos qu?? limitaciones le gustar??a imponer a nuestro uso de su Informaci??n personal. Para su protecci??n, solo ejecutaremos las solicitudes respecto a la Informaci??n personal asociada con la direcci??n de correo electr??nico particular que usted usa para enviarnos su solicitud, y necesitaremos verificar su identidad antes de ejecutar su solicitud. Trataremos de dar respuesta a su solicitud tan pronto como sea posible.
Tenga en cuenta que podremos necesitar conservar determinada informaci??n para fines de conservaci??n de registros y/o completar cualquier transacci??n que usted haya iniciado antes de solicitar un cambio o cancelaci??n (por ejemplo, cuando realiza una compra o participa en una promoci??n, no podr?? cambiar o eliminar la Informaci??n personal proporcionada hasta que finalice dicha compra o promoci??n).
Cuando nuestra recopilaci??n y uso de la Informaci??n personal est??n basados en su consentimiento, usted podr?? retirar dicho consentimiento en cualquier momento escribi??ndonos un correo electr??nico a [ ezpcbuildsservice@gmail.com], y dicha retirada no afectar?? a la legitimidad del tratamiento basado en su consentimiento antes de su retirada.
5. TRANSFERENCIA TRANSFRONTERIZA
Las Propiedades son controladas y gestionadas desde Alemania; en consecuencia, esta Pol??tica de Privacidad y la recopilaci??n, uso y revelaci??n que hacemos de su Informaci??n personal, se rige por las leyes de Alemania. Su Informaci??n personal se podr?? almacenar y tratar en cualquier pa??s en el que contemos con instalaciones o en el que contratemos a proveedores de servicios y al usar las Propiedades usted entiende que su informaci??n se transferir?? a pa??ses fuera de su pa??s de residencia, incluidos los pa??ses fuera del EEE, que pueden tener leyes de protecci??n de datos diferentes a las de su pa??s.
Si usted est?? en el EEE: Algunos de los pa??ses que no pertenecen al EEE son reconocidos por la Comisi??n Europea por proporcionar un nivel adecuado de protecci??n de los datos conforme a los est??ndares del EEE. La lista completa de dichos pa??ses est?? disponible aqu??: https://ec.europa.eu/info/law/law-topic/data-protection_de. Para transferencias desde los pa??ses del EEE a pa??ses que la Comisi??n Europea no considera adecuados, hemos establecido unas medidas adecuadas, como cl??usulas contractuales est??ndar, adaptadas por la Comisi??n Europea para la Informaci??n personal. Puede conseguir una copia de dichas medidas poni??ndose en contacto con [https://www.aepd.es/].
6. ACTUALIZACIONES A ESTA POL??TICA DE PRIVACIDAD
Podremos modificar esta Pol??tica de Privacidad en cualquier momento. Eche un vistazo a la leyenda "??LTIMA REVISI??N" en la parte superior de esta p??gina para ver cuando se revis?? por ??ltima vez esta Pol??tica de Privacidad. Cualquier cambio en esta Pol??tica de Privacidad ser?? efectivo cuando proporcionemos la Pol??tica de Privacidad revisada en o a trav??s de una Propiedad.
7. CONTACTO
EzpcBuilds es la empresa responsable de recopilar, usar y revelar su Informaci??n personal en virtud de esta Pol??tica de Privacidad:
ezpcbuildsservice@gmail.com

 </div>
                            </div>
                        </div>
                    </div>
                </div>

            
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script type="module" src="/firebase-messaging-sw.js"></script>
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.3/firebase-app.js"
        import { getMessaging,onMessage,getToken } from "https://www.gstatic.com/firebasejs/9.8.3/firebase-messaging.js"
        // Import the functions you need from the SDKs you need

        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
       const firebaseConfig = {
    apiKey: "AIzaSyDqMKCEvSxrusxvJQN22qwH-W2rmt10VSI",
    authDomain: "dbestech-food-app-commercial.firebaseapp.com",
    projectId: "dbestech-food-app-commercial",
    storageBucket: "dbestech-food-app-commercial.appspot.com",
    messagingSenderId: "542490378494",
    appId: "1:542490378494:web:beca27ddb1df27b05de5af"
  };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const messaging = getMessaging(app);

        getStartToken();
        function getStartToken(){
            getToken(messaging, { vapidKey: 'BP-wFkN56uHU1j95xPsHJiLaYp8jMYxbOsDewi4nz-qOTIwHymLlaqRXG400KsSYDOZjH-JgjEMUcgcjRiCn-ic' }).then((currentToken) => {
                if (currentToken) {
                    console.log("currentToken--->"+currentToken);
                    sendTokenToServer(currentToken);
                } else {
// Show permission request.
                    RequestPermission();
                    setTokenSentToServer(false);
                }

            }).catch((err) => {
                console.log("currentToken --err--err--->"+err);
                setTokenSentToServer(false);
            });


        }
        function RequestPermission(){
            messaging.requestPermission().then(function(permission){
                if (permission === 'granted') {
                    console.log("have Permission");//calls method again and to sent token to server
                    getStartToken();
                }
                else{
                    console.log("Permission Denied");
                }
            }).catch(function(err){
                console.log(err);
            })
        }
        function sendTokenToServer(token){
            //   if (!isTokensendTokenToServer()) {
            $.ajax({
                url: "/api/v1/send_token",
                type: 'get',
                data: {push_token:token},
                success: function (response) {
                    console.log("token_response"+response);
                    setTokenSentToServer(true);
                },
                error: function (err) {
                    setTokenSentToServer(false);
                },});
            // }
        }
        function isTokensendTokenToServer() {
            return window.localStorage.getItem('sendTokenToServer') === '1';
        }
        function setTokenSentToServer(sent) {
            window.localStorage.setItem('sendTokenToServer', sent ? '1' : '0');
        }

        // Message received
        onMessage(messaging, (payload) => {
            console.log('Message received. ', payload);
            // ...
        });



    </script>


</html>
