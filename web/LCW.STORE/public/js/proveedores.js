const cargarRegiones = async () => {
    //1. Ir a buscar las marcas a la api
    let resultado = await axios.get("api/regiones/get");
    //2. Cargar las marcas dentro del select
    let regiones = resultado.data;
    let regionSelect = document.querySelector("#region-select");
    regiones.forEach(r => {
        let option = document.createElement("option");
        option.innerText = r;
        regionSelect.appendChild(option);
    });
};