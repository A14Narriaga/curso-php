// Fetch 
// Genera solicitudes HTTP
// Por defecto nustro navegador solo puede generar solicitudes GET

const clave = document.getElementById('clave');
const nombre = document.getElementById('nombre');

const myHeaders = new Headers();
myHeaders.append("Content-Type", "application/json");

const create = () => {

  const raw = JSON.stringify({
    "clave": `${clave.value}`,
    "nombre": `${nombre.value}`
  });

  const requestOptions = {
    method: 'POST',
    headers: myHeaders,
    body: raw,
    redirect: 'follow'
  };

  fetch("http://localhost.org/proyectos/curso-php/proyecto/controllers/cuestionario.php", requestOptions)
  .then(response => response.text())
  .then(result => alert(result))
  .catch(error => alert(error));

  clave.value = "";
  nombre.value = "";

}
