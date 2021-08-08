const cargarTipos = async()=>{
    //1. Ir a buscar las marcas a la api
    let resultado = await axios.get("api/tipos/get");    
    //2. Cargar las marcas dentro del select
    let tipos = resultado.data;
    let tipoSelect = document.querySelector("#tipo-select");
    tipos.forEach(m => {
        let option = document.createElement("option");
        option.innerText = m;
        tipoSelect.appendChild(option);
    });
};
cargarTipos();

const cargarTallas = async()=>{
    //1. Ir a buscar las marcas a la api
    let resultado = await axios.get("api/tallas/get");    
    //2. Cargar las marcas dentro del select
    let tallas = resultado.data;
    let tallaSelect = document.querySelector("#talla-select");
    tallas.forEach(i => {
        let option = document.createElement("option");
        option.innerText = i;
        tallaSelect.appendChild(option);
    });
};
cargarTallas();

document.addEventListener("DOMContentLoaded", ()=>{
    cargarTipos();
    cargarTallas();
});




document.querySelector("#registrar-btn").addEventListener("click", async () => {
    let nombre = document.querySelector("#nombre-txt").value;
    let tipo = document.querySelector("#tipo-select").value;
    let talla = document.querySelector("#talla-select").value;
    let cantidad = document.querySelector("#cantidad-txt").value;
    let producto = {};
    producto.nombre = nombre;
    producto.tipo = tipo;
    producto.talla = talla;
    producto.cantidad = cantidad;
    //1. va al controlador le pasa los datos
    //2. el controlador crea el modelo
    //3. el modelo ingresa a la base de datos
    //4. Todos felices
    let res = await crearProducto(producto);
    await Swal.fire('Producto Creado','Creada exitosamente','success');
    window.location.href = "inventario";



});