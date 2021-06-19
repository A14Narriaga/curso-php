const cuestionarios = document.getElementById('cuestionarios');
const myHeaders = new Headers();
myHeaders.append("Content-Type", "application/json");

const requestOptions = {
  method: 'GET',
  redirect: 'follow'
};

fetch("http://localhost.org/proyectos/curso-php/proyecto/controllers/cuestionario.php", requestOptions)
  .then(response => response.text())
  .then(result => {
      const cs = JSON.parse(result);
      const map = cs.map(c => `
        <section class="cuestionario">
        <div class="head">
            <div class="title">
                <h4>${c['nombre']}</h4>
            </div>
            <div class="actions">
                <i class="bi bi-pencil-square edit"></i>
                <i onClick="deleteCuestionario('${c['clave']}')" class="bi bi-trash delete"></i>
            </div>
        </div>
        <p>${c['clave']}</p>
        </section>`).join(" ");
        cuestionarios.innerHTML = map;
})
.catch(error => console.log('error', error));

const deleteCuestionario = (clave) => {

    const raw = JSON.stringify({
        "clave": clave
    });

    const requestOptions = {
        method: 'DELETE',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };

    fetch("http://localhost.org/proyectos/curso-php/proyecto/controllers/cuestionario.php", requestOptions)
    .then(response => response.text())
    .then(result => console.log(result))
    .catch(error => console.log('error', error));
}